<?php

namespace App\Http\Controllers;

use App\AddtionalOptions;
use App\Customers;
use App\Reservation;
use App\Vehicle;
use App\Vikicar;
use App\Vikirental_location;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stripe;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
DB::enableQueryLog(); // Enable query log
class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['additional_options']=json_decode(AddtionalOptions::all(),true);
        $data['all_reservations']=json_decode(Reservation::where('type','!=','quote_only')->orWhereNull('type')->orderBy('id','DESC')->get(),true);
        if (!empty($data['all_reservations'])){
            foreach ($data['all_reservations'] as $k=>$r){
                $c = json_decode(Customers::where('id',$r['customer'])->get(),true);
                if (!empty($c)){
                    $data['all_reservations'][$k]['customer_details'] = $c;
                }
                $car = json_decode(Vikicar::where('id',$r['shab_car'])->get(),true);
                if (!empty($car)){
                    $data['all_reservations'][$k]['car_details'] = $car;
                }

                $p_locations = json_decode(Vikirental_location::where('id',$r['p_location'])->get(),true);
                if (!empty($p_locations)){
                    $data['all_reservations'][$k]['p_location'] = $p_locations;
                }
                $r_locations = json_decode(Vikirental_location::where('id',$r['r_location'])->get(),true);
                if (!empty($r_locations)){
                    $data['all_reservations'][$k]['r_location'] = $r_locations;
                }
                $vehicle = json_decode(Vehicle::where('id',$r['fleet_car'])->get(),true);
                if (!empty($vehicle)){
                    $data['all_reservations'][$k]['vehicle'] = $vehicle;
                }
            }
        }
        return view('admin.reservations',$data);
    }

    function view($page,$id =null){
        if (!empty($id)){
            $data['all_reservations']=json_decode(Reservation::where('id',$id)->get(),true);
            if (!empty($data['all_reservations'])){
                foreach ($data['all_reservations'] as $k=>$r){
                    $c = json_decode(Customers::where('id',$r['customer'])->get(),true);
                    if (!empty($c)){
                        $data['all_reservations'][$k]['customer_details'] = $c;
                    }

                    $car = json_decode(Vikicar::where('id',$r['shab_car'])->get(),true);
                    if (!empty($car)){
                        $data['all_reservations'][$k]['car_details'] = $car;
                    }

                    $p_location = json_decode(Vikirental_location::where('id',$r['p_location'])->select('name')->get(),true);
                    if (!empty($car)){
                        $data['all_reservations'][$k]['pickup_location'] = $p_location;
                    }
                    $r_location = json_decode(Vikirental_location::where('id',$r['r_location'])->select('name')->get(),true);
                    if (!empty($car)){
                        $data['all_reservations'][$k]['return_location'] = $r_location;
                    }
                }
            }
            return view('admin.'.$page,$data);
        }

//        $data['all_quotations']=json_decode(Quotation::all(),true);
        $data['all_reservations']=json_decode(Reservation::all(),true);
        if (!empty($data['all_reservations'])){
            foreach ($data['all_reservations'] as $k=>$r){
                $c = json_decode(Customers::where('id',$r['customer'])->get(),true);
                if (!empty($c)){
                    $data['all_reservations'][$k]['customer_details'] = $c;
                }

                $car = json_decode(Vikicar::where('id',$r['shab_car'])->get(),true);
                if (!empty($car)){
                    $data['all_reservations'][$k]['car_details'] = $car;
                }
            }
        }

        return view('admin.'.$page,$data);
    }

    function return_car(Request $request, $reservation_id){

        if($request->hasfile('images'))
        {
            foreach($request->file('images') as $file)
            {
                $file->storeAs('public/uploads',$file->getClientOriginalName());
                $images[] = $file->getClientOriginalName();
            }
        }
        $data['return_images'] = $images;
        $data['return_comments'] =$request['return_comments'];
        $data['end_rental'] ='yes';
        $data['end_rental_date'] =date('Y-m-d');
        Reservation::where('id',$reservation_id)->update($data);
        return redirect('admin/reservations');
    }

    function getFleetCar(Request $request){
        $carDetails  =  json_decode(Vehicle::where('id',$request->selected_car)->get(),true);
        if (!empty($carDetails)){
            return $carDetails[0]['color'];
         }
    }
    function agreementPriceSummary(Request $request){
        $additional_informaton = json_decode(AddtionalOptions::all(),true);
             $total=$request['car_price']* $request['TotalDays'];
                if (!empty($request['options']) and $request['options'] !== null) {
                    foreach ($request['options'] as $o) {
                        $check = array_key_exists($o, $additional_informaton[0]);
                        if ($check) {
                            $total += $additional_informaton[0][$o];
                        }
                    }
                }
                if (!empty($request['otherOptions'])) {
                    foreach ($request['otherOptions'] as $kkey => $ot) {
                        $check2 = array_key_exists($kkey, $additional_informaton[0]);
                        if ($check2) {
                            $total += $additional_informaton[0][$kkey] * $ot;
                        }
                    }
                }
            ?>
        <table class="table table-border" style="text-align:center;margin-bottom: 35px;">
            <thead>
            <tr>
                <th>DAYS</th>
                <th>DAILY RATE</th>
                <th>EXCESS WAIVER
                    PER DAY
                </th>
                <th>ACCESSORIES
                    GPS, BABY SEAT</th>
                <th>OTHER EXCESS
                    KMS
                </th>
                <th>ADDITIONAL
                    DRIVER / DAY
                </th>
                <th>SUB TOTAL INC GST</th>
                <th>MERCHANT FEE 1.5%</th>
                <th>Total Charge</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?=$request['TotalDays']?></td>
                <td>$<?=$request['car_price']?></td>
                <td>$05</td>
                <td>$40</td>
                <td>$40</td>
                <td><?=(!empty($request['otherOptions']) and in_array("additional_driver",$request['otherOptions']))  ? $request->otherOptions['additional_driver']*$additional_informaton[0]['additional_driver'] : "" ?></td>
                <td>$<?=$request->car_price*$request->TotalDays?></td>
                <td>$<?=number_format((float)$total+(($total/100)*1.5), 2, '.', '');?></td>
                <td>$<?=number_format((float)$total+(($total/100)*1.5), 2, '.', '');?></td>
            </tr>
            <tr>
                <td colspan="8">TOTAL CONTRACT VALUE</td>
                <td colspan="9">$0</td>
            </tr>
            <tr>
                <td colspan="2">Item 4</td>
                <td colspan="5">SECURITY BOND REFUND $
                    <span>$0</span>
                </td>
                <td colspan="1">LESS DEPOSIT PAID</td>
                <td colspan="9">$0</td>
            </tr>
            <tr>
                <td colspan="2">TOTAL PAID <span>$</span></td>
                <td colspan="5"> <span></span></td>
                <td colspan="1"> SECURITY BOND
                </td>
                <td colspan="9"> $0
                </td>
            </tr>
            <tr>
                <td colspan="8" style="text-align-last: end;">SUB
                    TOTAL </td>
                <td colspan="9">$<span id="final_total_price"><?=number_format((float)$total+(($total/100)*1.5), 2, '.', '');?></span></td>

            </tr>
            </tbody>
        </table>
    <?php }

    function filterCar(Request $request){
        $carDetails  =  json_decode(Vikicar::where('name','LIKE',"%{$request->car}%")->get(),true);
        if (!empty($carDetails)){ ?>
            <div class="row">
            <?php foreach ($carDetails as $d){ ?>
            <div class="col-md-4">
                <div class="card card-cars" onclick="bo.style.border='2px solid #ccc'">
                    <div class="car" id="bo">
                           <img class="rounded-start img-fluid" src="<?=url('storage/app/public/carlist/'.$d['image'])?>" alt="Card image" />
                    </div>
                    <div class="car-body">
                        <div class="card-header">
                            <h5 class="card-title mb-0">
                                <?=$d['name']?> or similar
                            </h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-text mb-2">
                                Starting From
                            </h6>
                            <p class="card-text">
                                <?='$'.$d['daily_start_price']?>
                            </p>
<!--                            <input type="radio" name="car"-->
<!--                                    onclick="on.style.prop='checked'"-->
<!--                                    class="btn btn-primary "-->
<!--                                    id="li"-->
<!--                                    value="--><?//=$d['id']?><!--">-->
                            <div class="wrapper">

                                <label style="background: #5ea3cb!important;" for="option-<?=$d['id']?>" class="option option-<?=$d['id']?>">
                                    <input class="dot" type="radio" name="shab_car" value="<?=$d['id']?>" id="option-<?=$d['id']?>" >
                                    <span>Add To Rent</span>
                                </label>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <?php } ?>
            </div>
        <?php } ?>
    <?php }

    function filter(Request $request){
        if (!empty($request['formData'])){
            $all_reservations=json_decode(DB::table('reservations')
                ->where(function ($q) use ($request) {
                    if (isset($request['formData']['daterange'])) {
                        $date = explode(' - ',$request['formData']['daterange']);
                        $filter['from'] = date('Y-m-d',strtotime($date[0]));
                        $filter['to'] = date('Y-m-d',strtotime($date[1]));
                        $q->whereDate('p_date','>=',$filter['from']);
                        $q->whereDate('r_date','<=',$filter['to']);
                    }if (isset($request['formData']['branch'])) {
                        $q->where('branch',$request['formData']['branch']);
                    }if (isset($request['formData']['status'])) {
                        if ($request['formData']['status'] === 'rental' or $request['formData']['status'] === 'long_rental'){
                            $q->where('reservation_type',$request['formData']['status']);
                        }else if ($request['formData']['status'] === 'closed'){
                            $q->where('end_rental','yes');
                        }else if ($request['formData']['status'] === 'open'){
                            $q->where('end_rental','!=','yes');
                        }
                    }if (isset($request['formData']['payment_status'])) {
                        if ($request['formData']['payment_status'] === 'paid'){
                            $q->where('remaining_amount','=',0);
                        }else if ($request['formData']['payment_status'] === 'pending'){
                            $q->where('remaining_amount','>',0);
                        }
                    }
                })->get(),true);
            if (!empty($all_reservations)){
                foreach($all_reservations as $k=>$r){
                $earlier = new DateTime($r['p_date']);
                $later = new DateTime($r['r_date']);
                $remaining_days = $later->diff($earlier)->format("%a");

                    $c = json_decode(Customers::where('id',$r['customer'])->get(),true);
                    if (!empty($c)){
                        $r['customer_details'] = $c;
                    }
                    $car = json_decode(Vikicar::where('id',$r['shab_car'])->get(),true);
                    if (!empty($car)){
                        $r['car_details'] = $car;
                    }
                    $p_locations = json_decode(Vikirental_location::where('id',$r['p_location'])->get(),true);
                    if (!empty($p_locations)){
                        $r['p_location'] = $p_locations;
                    }
                    $r_locations = json_decode(Vikirental_location::where('id',$r['r_location'])->get(),true);
                    if (!empty($r_locations)){
                        $r['r_location'] = $r_locations;
                    }
                    $vehicle = json_decode(Vehicle::where('id',$r['fleet_car'])->get(),true);
                    if (!empty($vehicle)){
                        $r['vehicle'] = $vehicle;
                    }
                ?>
                <tr>
                    <th scope="row"><?=$k+1?></th>
                    <td><?=$r['branch']?></td>
                    <td><?=$r['reservation_type']?></td>
                    <td class="customer-name"><h6><?=$r['customer_details'][0]['name']?></h6></td>

                    <td><?=$r['p_date']?></td>
                    <td><?=$r['r_date']?></td>
                    <td><?=$r['p_location'][0]['name']?></td>
                    <td><?=(!empty($r['vehicle'])) ? $r['vehicle'][0]['brand'] : "-"?></td>
                    <td>$<?=$r['car_details'][0]['daily_start_price']?></td>
                    <td>$<?=$r['total_amount']?></td>
                    <td>$<?=$r['paid_amount']?></td>
                    <td>$<?=$r['remaining_amount']?></td>

                    <td style="color: <?=($r['end_rental']== 'yes') ? "red"  : "green"?>;font-weight: bold;font-size: 12px"><?=($r['end_rental']== 'yes') ? "Reservation Ended" : "Open"?></td>
                    <td><?=$r['total_days']?></td>
                    <td style="color: <?=($remaining_days <=0) ? "red"  : "green"?>;font-weight: bold;font-size: 12px"><?=$remaining_days?></td>
                    <td>
                        <ul class="list-inline hstack gap-2 mb-0">
                            <li class="list-inline-item view detail" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title=""
                                data-bs-original-title="view detail">
                                <a href="<?=url('admin/reservation/view/return/'.$r['id'])?>"
                                   class="text-primary d-inline-block edit-item-btn">
                                    <i class="ri-eye-fill fs-16"></i>
                                </a>
                            </li>

                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title=""
                                data-bs-original-title="Remove">
                                <a class="text-danger d-inline-block remove-item-btn"
                                   data-bs-toggle="modal"
                                   data-bs-target="#deleteRecordModal">
                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                </a>
                            </li>
                        </ul>
                    </td>
                </tr>
                <?php } } ?>
            <?php } else{
                return "no data found";
            }
    }

    function getAjaxData(Request $request,$type){
        if ($type === 'customer'){
            $customer= json_decode(Customers::where('id',$request->customer_id)->get(),true);
            if (!empty($customer)){ ?>
                <div class="row">
                    <div class="col-md-4">
                        <label for="name">Customer Name: </label>
                        <p><?=$customer[0]['name']?></p>
                    </div>
                    <div class="col-md-4">
                        <label for="email">Customer Email: </label>
                        <p><?=$customer[0]['email']?></p>
                    </div>
                    <div class="col-md-4">
                        <label for="invoice">Phone No: </label>
                        <p><?=$customer[0]['phone']?></p>
                    </div>
                    <div class="col-md-4">
                        <label for="b-name">Country: </label>
                        <p><?=$customer[0]['country']?></p>
                    </div>
                    <div class="col-md-4">
                        <label for="name">City: </label>
                        <p><?=$customer[0]['city']?></p>
                    </div>
                    <div class="col-md-4">
                        <label for="name">State: </label>
                        <p><?=$customer[0]['state']?></p>
                    </div>
                    <div class="col-md-4">
                        <label for="name">Zip: </label>
                        <p><?=$customer[0]['zip']?></p>
                    </div>
                    <div class="col-md-4">
                        <label for="name">Street: </label>
                        <p><?=$customer[0]['street']?></p>
                    </div>
                    <div class="col-md-4">
                        <label for="name">Driving License #: </label>
                        <p><?=$customer[0]['d_license_no']?></p>
                    </div>

                </div>
           <?php }
        }
        elseif ($type === 'vehicle'){
            $car = json_decode(Vikicar::where('id',$request->vehicle_id)->get(),true);
            if (!empty($car)){ ?>
                <div class="row">
                    <div class="col-md-4">
                        <label for="name">Vehicle Group: </label>
                        <p><?=$car[0]['name']?></p>
                    </div>
                    <div class="col-md-4">
                        <label for="email">Vehicle Available: </label>
                        <p><?=$car[0]['available']?></p>
                    </div>
                    <div class="col-md-4">
                        <input type="hidden" name="total" value="<?=$car[0]['daily_start_price']?>" id="car_start_price">
                    </div>

                </div>
           <?php }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['all_customer'] = json_decode(Customers::orderBy('id','DESC')->get(),true);
        $data['locations'] = json_decode(Vikirental_location::all(),true);
        $data['additional_options']=json_decode(AddtionalOptions::all(),true);
        $data['all_vehicles']=json_decode(Vikicar::orderBy('id', 'DESC')->get(),true);
        $data['all_cars']=json_decode(Vehicle::orderBy('id', 'DESC')->get(),true);
        return view('admin.create_Walkin_Reservation',$data);
    }

    function payments(){
        $data['all_reservations']=json_decode(Reservation::all(),true);
        if (!empty($data['all_reservations'])){
            foreach ($data['all_reservations'] as $k=>$r){
                $c = json_decode(Customers::where('id',$r['customer'])->get(),true);
                if (!empty($c)){
                    $data['all_reservations'][$k]['customer_details'] = $c;
                }
                $car = json_decode(Vikicar::where('id',$r['shab_car'])->get(),true);
                if (!empty($car)){
                    $data['all_reservations'][$k]['car_details'] = $car;
                }
            }
        }
        return view('admin.payments',$data);
    }

    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
            "amount" => 100 * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "This payment is tested purpose phpcodingstuff.com"
        ]);

        Session::flash('success', 'Payment successful!');

        return back();
    }

    public function toPDF($id = null, $hashValue = null)
    {
        $r = DB::table('reservations')
            ->join('customers','reservations.customer','=','customers.id')
            ->join('vehicles','reservations.fleet_car','=','vehicles.id')
            ->join('vikicars','reservations.shab_car','=','vikicars.id')
            ->where('reservations.id',$id)
                ->select('reservations.*','customers.name as customer_name','customers.email as c_email','customers.phone as c_phone','customers.d_license_no as c_license','customers.expiration_date as c_expiration_date','vehicles.model as fleet_model','vehicles.color as fleet_color','vikicars.daily_start_price as daily_price')
            ->get();


        $earlier = new DateTime($r[0]->p_date);
        $later = new DateTime($r[0]->r_date);
        $remaining_days = $later->diff($earlier)->format("%a");
        date_default_timezone_set('Asia/Karachi');
        // Require composer autoload
        require './pdfToHtml/vendor/autoload.php';
        // Create an instance of the class:
        $mpdf = new \Mpdf\Mpdf(array('margin_left' => 20, 'margin_right' => 15, 'margin_top' => 48, 'margin_bottom' => 25, 'margin_header' => 10, 'margin_footer' => 10));
        $logo =
        $waterMark =
        $items='';
        $items2 ='';
        $html = "
<div class='card license-card'>
        <div class='card-header'>
         <h4 style='font-size:20px;text-align:center;'>Agreement</h4>
        <div class='d-flex justify-content-between header-aggrement-main-div' >
        <div class='img-agreement' style='float:left;width:50%'>
        <img src='assets/images/Simba_Final_webPNG.png' alt=''
        height='60'>
        </div>

        <div class='agrement-header' style='float:left;width:50%'>
        <h5 class='m-0'>SIMBA CAR HIRE PTY LTD</h5>
        <p class='m-0'>AR HIRE PTY LTD
        ABN: 87635707229</p>
        <p class='m-0'>4/937 MARION RD</p>
        <p class='m-0'>PHONE: 08 8312 4616 / MOBILE: 0459 434 800</p>
        <a href='admin@simbacarhire.com.au '>EMAIL:
        admin@simbacarhire.com.au </a>
        </div>
        </div>
        </div>
        <div class='card-body card-aggrement'>
        <p>MEMORANDUM OF AGREEMENT between the party (hereinafter called 'the
        Hirer') described in Item 1 of the Schedule and SIMBA CAR HIRE PTY
        LTD whose
        registered office is situated at 4/937 Marion Rd, Mitchell Park SA
        5043 in the State of South Australia as the Proprietor of Simba Car
        Hire (hereinafter called
        'the Owner')</p>

        <p>WHEREBY IT IS AGREED that</p>
        <ol>
        <li>The Hirer shall hire from the Owner the Vehicle described in
        Item 3 of the Schedule (hereinafter called 'the Vehicle') for
        the rental and costs described
        in Item 4 of the Schedule and generally on the terms and
        conditions hereinafter appearing which embody the whole of the
        Agreement between the
        Hirer and the Owner in respect of the Vehicle</li>
        <li>The Hirer DOES HEREBY DECLARE that the Hirer has read and
        considered the terms and conditions of this Agreement prior to
        the execution hereof AND
        THAT the Hirer hires the Vehicle for the Hirer's own use and/or
        the use of the Joint Hirer as agent for the Joint Hirer set out
        in Item 2 of the schedule
        (hereinafter called 'the Joint Hirer').</li>
        </ol>
        <div class='row'>
        <div class='col-md-6'>
        <div class='d-flex justify-content-between' style='display:grid;grid-template-columns:1fr 1fr;'>
        <span>Driver (1) </span>
        <span>ITEM 1 –THE HIRER</span>
        <div style='float:left;width:50%'>
        <p>First Name: <span>".$r[0]->customer_name."</span></p>
        </div>
        <div style='float:left;width:50%'>
        <p>Sur Name: <span>Asad</span></p>
        </div>
        <div style='float:left;width:50%'>
        <p>Email: <span>".$r[0]->c_email."</span></p>
        </div>
        <div style='float:left;width:50%'>
        <p>Phone No: <span>".$r[0]->c_phone."</span></p>
        </div>
        <div style='float:left;width:50%'>
        <p>DOB: <span>22/02/1970</span></p>
        </div>
        <div style='float:left;width:50%'>
        <p>License No: <span>".$r[0]->c_license."</span></p>

        </div>
        <div >
        <p>Expiry: <span>".$r[0]->c_expiration_date."</span></p>
        </div>
        <div>


        </div>
        <div style='float:left;width:50%'>
        <p>Credit/Debit Card Details</p>
        </div>
        <div style='float:left;width:50%'>
        <p>Card Number: <span>".$r[0]->card_number."</span></p>
        </div>
        <div style='float:left;width:50%'>
        <p>Expiry: <span>".$r[0]->expiry_date."</span></p>
        <p>CVN: <span>".$r[0]->cvn."</span></p>
        </div>
        <div style='float:left;width:50%'>
        <p>BSB: <span>".$r[0]->bsb."</span></p>
        </div>
        <div style='float:left;width:50%'>
        <p>ACCOUNT No: <span>".$r[0]->account_no."</span></p>
        <p>M/C</p>
        <p>VISA</p>
        <p>AMEX</p>
        <p>DINERS</p>
        </div>
        <div>
        <p>TRAFFIC INFRINGEMENT WILL INCUR A $20 ADMINISTRATION FEE
        DEBITED ON CREDIT
        CARD
        </p>
        </div>
        </div>
        <div class='col-md-6'>
        <div class='d-flex justify-content-between'>
        <span>Vehicle </span>
        <span>ITEM 3 </span>
        </div>
        <div style='float:left;width:50%;'>
        <p>Registration No: <span>090078601</span></p>
        <p>Colour: <span>".$r[0]->fleet_color."</span></p>
        </div>

        <div style='float:left;width:50%;'>
        <p>Date Out: <span>".$r[0]->p_date."</span></p>
        <p>Time Out: <span>".$r[0]->p_time."</span></p>
        </div>
        <div style='float:left;width:50%;'>
        <p>Date In: <span>".$r[0]->r_date."</span></p>
        <p>Time In: <span>".$r[0]->r_time."</span></p>
        </div>
        <div style='float:left;width:50%;'>
        <p>Kms Out: <span>".$r[0]->kms_out."</span></p>
        <p>Kms Driven: <span>".$r[0]->kms_driver."</span></p>
        </div>
        <div style='float:left;width:50%;'>
        <p>Kms In: <span>".$r[0]->kms_in."</span></p>

        </div>
        <div style='float:left;width:50%;'>

        <p>Kms Allowed: <span>".$r[0]->kms_allowed."</span></p>
        </div>
        <div style='float:left;width:50%;'>
        <p>Excess Kms: <span></span></p>
        </div>
        <div style='float:left;width:50%;'>
        <p>Extension: <span></span></p>
        </div>
        <div>
        <p></p>
        </div>
        <div class='d-flex justify-content-between'>
        <p>Airport: <span>".$r[0]->airport."</span></p>
        <p>Pick Up: <span>".$r[0]->p_location."</span></p>
        <p>Drop Off: <span>".$r[0]->r_location."</span></p>
        </div>
        <div>
        <p></p>
        </div>
        <div>
        <div class='text-align-center'>
        <p>INSURANCE EXCESS </p>
        </div>
        <div>
        <p>SINGLE VEHICLE EXCESS APPLIES: $4818.00 OR <br>
        REDUCED TO: $ <span></span></p>
        </div>
        <div class='d-flex'>
        <p class='Tick-box'
        style='height: 29px;width: 100px;border: 1px solid;'>
        </p>
        <span style='text-align: justify;'>UNDERBODY DAMAGE,
        REVERSING DAMAGE, SCRATCH AND
        DENT IS DRIVERS' LIABILITY AND WILL RESULT IN
        A $4818 CHARGE TO THE DRIVER.
        OR EXCESS COST, WHICHEVER IS THE LOWER
        AMOUNT.</span>
        </div>
        </div>
        </div>
        </div>
        <div class='row'>
        <div class='col-md-12 col-sm-12'>
        <table style='text-align:center;'>
        <thead>
        <tr>
        <th>DAYS</th>
        <th>DAILY RATE</th>
        <th>EXCESS WAIVER
        PER DAY
        </th>
        <th>ACCESSORIES
        GPS, BABY SEAT</th>
        <th>OTHER EXCESS
        KMS
        </th>
        <th>ADDITIONAL
        DRIVER / DAY
        </th>
        <th>SUB TOTAL INC GST</th>
        <th>MERCHANT FEE 1.5%</th>
        <th>Total Charge</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td>".$remaining_days."</td>
        <td>$".$r[0]->daily_price."</td>
        <td>$05</td>
        <td>$40</td>
        <td>$40</td>
        <td>$40</td>
        <td>$".($r[0]->total_amount-(($r[0]->total_amount/100)*1.5))."</td>
        <td>$".$r[0]->total_amount."</td>
        <td>$".$r[0]->total_amount."</td>
        </tr>
        <tr>
        <td colspan='8'>TOTAL CONTRACT VALUE</td>
        <td colspan='9'>$500</td>
        </tr>
        <tr>
        <td colspan='2'>Item 4</td>
        <td colspan='5'>SECURITY BOND REFUND $
        <span>$6566</span>
        </td>
        <td colspan='1'>LESS DEPOSIT PAID</td>
        <td colspan='9'>$400</td>
        </tr>
        <tr>
        <td colspan='2'>TOTAL PAID <span>$</span></td>
        <td colspan='5'> <span></span></td>
        <td colspan='1'> SECURITY BOND
        </td>
        <td colspan='9'> $500
        </td>
        </tr>
        <tr>
        <td colspan='8' style='text-align-last: end;'>SUB
        TOTAL </td>
        <td colspan='9'>$900</td>

        </tr>
        </tbody>
        </table>
        <div>
        <p style='text-align:justify;'>THIS DOCUMENT IS YOUR
        AUTHORITY TO DRIVE THE VEHICLE. THE
        HIRER IS RESPONSIBLE AT ALL TIMES FOR PARKING AND
        TRAFFIC VIOLATIONS,
        OVERHEAD, UNDERBODY, TYRE AND INTERIOR DAMAGE (NON
        WAVERABLE). REFER TO ATTACHED CONDITIONS.
        </p>
        </div>

        </div>
        </div>
        <div class='row' style='align-items:center;'>
        <div class='col-md-6'>
        <img src='assets/images/car-img-agrement.PNG' alt='car-img'
        class='img-fluid' style='width:100%;height:100%;'>
        </div>
        <div class='col-md-2'>
        <div>
        <span><span></span>WIND SCREEN</span>
        </div>
        <div>

        <span><span></span>RIMS
        </span>
        </div>
        <div>

        <span><span></span>SEATS</span>
        </div>
        <div>

        <span><span></span>BOOT
        </span>
        </div>
        <div>

        <span><span></span>BODY
        </span>
        </div>
        <div>

        <span><span></span>CARPETS</span>
        </div>
        <div>

        <span><span></span>FUEL GAUGE
        </span>
        </div>
        </div>
        <div class='col-md-4' style='text-align:end;'>
        <h6>OTHER FEES & CHARGES</h6>
        <span>SMOKING AND CLEANING -$50-$295</span>
        <span>(That includes pet hair & odor, Excess sand &
        mud inside and out including bugs from the front)</span>
        <span>WINDSCREEN REPLACEMENT $325-1500</span>
        <span>WINDSCREEN CHIP - $195</span>
        <span>LATE CAR RETURN – $99 Plus 24-HOUR CHARGE</span>
        <span>CREDIT CARD SURCHAGE- 1.5%</span>
        <span>REPLACEMENT KEY- $650
        </span>
        <span>REFUELING COST - $15 + COST OF FUEL</span>
        <span>RIMS & HUBCAP DAMAGE -$195 </span>
        <span>NON-MECHANICAL CALL OUT - $155 </span>
        <span>ADMINISTRATION COST - $110/Hr. INC GST</span>
        <span>CARPETS/ GPS/ ACCESSORIES - $50 - $199</span>
        <span>DAILY IMMOBILISATION FEE – Equal to daily hire
        charge</span>

        </div>
        </div>
        <div class='d-flex justify-content-between'>
        <p>Signature Of Hirer <span><img src='".$r[0]->hirer_sig."' width='100px'></span></p>
        <p>Signature Of Owner <span><img src='".$r[0]->owner_sig."' width='100px'></span></p>
        <p>Date: <span>".$r[0]->sig_date_starting."</span></p>
        </div>
        <div>

        <!-- Terms & Conditions -->
        <div class='d-flex justify-content-center'>
        <h6 style='text-align-center;'>TERMS AND CONDITIONS</h6>
        </div>
        <div class='row'>

        <div class='col-md-6'>
        <p>1. This Agreement is made between the party described on the
        front of this form (the
        'Hirer') and Simba Car Hire Pty Ltd ABN: 87635707229 4/937
        Marion Rd, Mitchell Park,
        South Australia 5043 (the 'Owner').</p>
        <p>
        2. The Hirer shall hire from the Owner the vehicle described
        on
        the front of this form (the
        'Vehicle') for the rental and costs described on the front
        of
        this form and upon the terms
        and conditions appearing below.

        </p>
        <p>
        3. In this Agreement the following words have the following
        meanings:
        </p>
        <p>
        3.1 'Insurance' means the policy of insurance in relation to
        the
        vehicle in the name of the
        Owner for
        </p>
        <p>
        3.2 'Period of hire' means the period commencing on the date
        the
        Hirer takes possession of
        the vehicle and concluding when the Vehicle is returned to
        the
        Owner.
        </p>
        <p>3.3 'State' means the State of South Australia</p>
        <p>3.4 'Vehicle' means the motor vehicle and/or trailer
        described on
        the front of this form and
        includes all tyres, tools, spare parts, accessories and
        safety
        equipment supplied with the
        Vehicle.</p>
        <p>3.5 References to persons shall include corporations,
        references
        to the singular shall include
        the plural and vice versa.</p>
        <p>3.6 Where there is more than one Hirer or where there is a
        joint
        Hirer the term 'Hirer' shall
        include such persons both jointly and severally.</p>
        <p>3.7 'Your Account' means the debit card or credit card to
        which
        Rental charges are to be
        debited.</p>
        <p>4. The Hirer promises to the Owner that: -</p>
        <p>4.1 The Hirer is over the age of 21 years.</p>
        <p>4.2 The Hirer holds a current driver's license valid in the
        state for the type of class of Vehicle
        hired, or an International Driving Permit.</p>
        <p>4.3 All particulars shown on the front of this form
        concerning the Hirer are correct and the
        Hirer acknowledges that the Owner relies on the truth of
        those particulars in deciding
        whether to hire the vehicle to the Hirer</p>
        <p>4.4 Before signing this Agreement the Hirer has examined the
        Vehicle and is satisfied
        concerning its condition, safety, suitability and road
        worthiness for the Hirers purpose and
        agrees that no warranty or representation is given by the
        Owner concerning the Vehicle
        other than those contained in this Agreement or implies by
        law.</p>
        <p>5. The Hirer Agrees: -</p>
        <p>5.1 To pay the hire charges and costs specified on the front
        of this form for the period of hire</p>
        <p>5.2 That payment shall be made in full by credit card at the
        beginning of the hire period unless
        the Owner agrees to accept payment by cash</p>
        <p>5.3 The Hirer may be charged a fee for any cheque used for
        payment that is dishonored.</p>
        <p>5.4 That if the Owner makes any error or omission in
        calculating the total charges due at the
        end of the period of hire then the Owner may make further
        demand on the Hirer for
        payment and the Hirer agrees to pay any such charges
        immediately on receipt of the
        demand.</p>
        <p>5.5 That if the Hirer used a credit card to pay the charges
        the Hirer authorizes the Owner to
        reserve credit with the card issuer in an amount equal to
        all estimated hire charges and
        acknowledges that the Owner may debit the Hirer's account
        with any charges incurred
        under this Agreement</p>
        <p>5.6 That Hirer will be liable for any card surcharge payable
        for the method of payment You
        chose for your account, all rental charges, any amount paid
        or payable by the Owner or
        You to any person arising our of your use of the Vehicle or
        imposed on You or the Owner
        by any government or other competent authority, the
        replacement cost (as reasonably
        determined by the Owner) for a lost or stolen accessory and
        any amount which you
        reasonably owe to the Owner under the Rental Agreement, in
        respect to a breach of the
        Rental Agreement.</p>
        <p>5.7 The minimum charge the Hirer must pay for the rental of
        the Vehicle is equivalent to the
        full period of hire. There will be no refund provided for
        the early return of the Vehicle.</p>
        <p>5.8 If the Hirer fails to pay any amount due under or in
        connection with the Rental Agreement,
        the Hirer must also pay the Owner interest at 12% per annum
        (compounded daily) on the
        amount from the date the payment was due and, on demand, the
        Owner's collection
        costs, including interest on the collection costs calculated
        at 12% from the date of the
        demand.</p>
        <p>6. The Hirer agrees that during the period of hire:
        </p>
        <p>6.1 No person other than the Hirer is authorized to drive the
        Vehicle</p>
        <p>6.2 If the Vehicle is damaged or suffers a mechanical
        breakdown such that its further use may
        cause injury or damage to any person or property, the Hirer
        shall not use the Vehicle whilst
        it remains so damaged or broken down</p>
        <p>7. The Hirer shall return the Vehicle to the Owner in good
        mechanical and physical order and
        condition at the Hirer's premises on the date and time
        specified on the front of this form
        or when required by the Owner.</p>
        <p>8. The Owner may request the immediate return of the Vehicle,
        or the Owner may recover
        the Vehicle without notice, if</p>
        <p>8.1 The credit limited on the Hirer's method of payment would
        be exceeded by the
        debiting of the Rental Charges for a requested extension of
        the rental of the
        Vehicle;</p>
        <p>8.2 The Rental Period expires without satisfactory
        arrangements having been made by the
        Hirer with the Owner;
        </p>
        <p>8.3 The Owner reasonably suspects that the Vehicle may be
        used for an unlawful purpose;</p>
        <p>8.4 The Owner reasonably suspects that damage to the Vehicle,
        or injury to persons or
        property is likely to occur; or</p>
        <p>8.5 The Vehicle will be involved in an industrial dispute.
        </p>
        <p>9. The Hirer shall not, without the consent of the Owner
        first obtained in writing:
        </p>
        <p>9.1 Part with possession of the Vehicle during the period of
        hire.</p>
        <p>9.2 Make or give any offer, settlement, waiver, release
        indemnity, or admission of liability in
        respect of any accident damage to the Vehicle or the
        property of any third person or injury
        to any person.
        </p>
        <p>10. The Hirer shall not alter or make any addition to the
        Vehicle except where such alteration
        or addition may be necessary to render the Vehicle safe to
        return to the Owner</p>
        </div>
        <div class='col-md-6'>
        <p>11. The Hirer shall not:
        </p>
        <p>11.1 Use the Vehicle for any illegal purpose or in
        contravention of any law of the State</p>
        <p>11.2 Drive the Vehicle under the influence of any alcohol or
        drug or with a blood alcohol level as
        indicated by analysis of the driver's breach or blood in
        excess of that permitted by the law
        of the State</p>
        <p>12. The Hirer agrees: -</p>
        <p>12.1 To pay all parking and traffic violation fines in
        relation to the Vehicle during the period of
        hire in addition to, a fee of $20.00 for each such fine.</p>
        <p>12.2 To pay any collection expenses incurred by the Owner in
        recovering any amount payable
        under this Agreement</p>
        <p>12.3 That the Owner is hereby authorized to release to any
        government body any information
        relating to any person who uses the Vehicle during the
        period of hire.</p>
        <p>13. The Owner shall not be liable to the Hirer for any
        property stolen from the Vehicle or
        damaged while in the Vehicle or left in the Vehicle after
        its return to the Owner at the end
        of the period of hire.</p>
        <p>14. The Hirer shall indemnify the Owner from and against any
        legal liability of the Owner in
        respect of any damage to property or person injury arising
        out of the use of the Vehicle by
        the Hirer or by any act or omission of the Hirer in
        connection with the Vehicle where such
        liability is not covered by any policy of insurance</p>
        <p>15. The Hirer agrees that the Owner shall not be responsible
        for any loss, damage or delay
        caused to the Hirer as a result of any breakdown, mechanical
        defect or other failure in the
        Vehicle during the period of hire</p>
        <p>16. The Hirer shall immediately notify the Owner if the
        Vehicle is destroyed or damaged or of
        any event occurs which might lead to a claim under the
        Insurance and shall do all things
        which the Owner may reasonably require be done to enable the
        Owner to receive
        indemnity under the Insurance.</p>
        <p>17. The Hirer shall not carry volatile liquids, gases,
        explosives or corrosive materials in the
        Vehicle without the Owner's consent</p>
        <p>18. If the Hirer does not return the Vehicle on the date and
        by the time shown on the Hiring
        Agreement (or any extended date or time agreed with the
        Owner in writing) or the
        Vehicle is returned damaged then:</p>
        <p>18.1 After written notice to the Hirer, the Owner may report
        the Vehicle as stolen to police
        after 24 hours of the agreed return date when the Vehicle
        has not been returned; and</p>
        <p>18.2 The Hirer must pay the Owner all rental charges
        (including additional rental charges) and
        compensate the Owner for any loss the Owner suffers
        (including the additional costs the
        Owner incurs in recovering the Vehicle) up to the time that
        the Vehicle is recovered by the
        Owner</p>
        <p>18.3 If the Hirer has breached the Hiring Agreement and this
        breach of the Hiring Agreement
        has caused the downtime of the Vehicle, the Hirer will be
        liable to pay a per day loss of
        revenue fee based on the actual downtime of the Vehicle (or,
        where the actual downtime
        is not known, a reasonable estimate of that downtime.) This
        amount will be in addition to
        the other fees and charges applicable to the late return of
        the Vehicle or as a result of any
        breach under the Agreement and is referred to as an
        'immobilisation fee.'</p>
        <p>18.4 An immobilsation fee will also apply if the vehicle is
        returned damaged and the Hirer will
        be liable to pay a per day loss of revenue fee based on the
        actual downtime of the Vehicle
        (or, where the actual downtime is not known, a reasonable
        estimate of that downtime),
        when the vehicle is returned in a damaged state as well as
        associated administration fees.</p>
        <p>19. The Hirer shall be fully liable to the Owner for the cost
        to repair any damage caused to
        the Vehicle as a result of a collision:</p>
        <p>19.1 Where such damage is caused by a collision between the
        Vehicle and any overhead object.</p>
        <p>19.2 Where no other vehicle is involved in the collision</p>
        <p>19.3 Where there is undercarriage damage to the Vehicle.</p>
        <p>19.4 Where there is tyre damage.
        </p>
        <p>19.5 Where the Hirer has at the time the collision occurs
        breached and law of the State or the
        Australian Road Rules.</p>
        <p>19.6 Where such damage is caused by a collision occurring
        when the Vehicle is being driven by a
        person other than the Hirer, whether or not the Hirer has
        consented to the Vehicle being
        so driven.</p>
        <p>20. If the Vehicle sustains damage in circumstances other
        than those specified in clause 19,
        the Hirer shall pay to the Owner the lesser of the repair
        cost and one of the following
        amounts:
        </p>
        <p>20.1 Where the Hirer is between the age of 21 years and 25
        years -the sum of $5000.00</p>
        <p>20.2 Where the Hirer is over the age of 25 years – the sum of
        $4818.00
        </p>
        <p>21. If a claim is made upon the Insurance by the Owner
        resulting from the use of the Vehicle
        by the Hirer, the Hirer shall in respect of each claim pay
        to the Owner one of the
        following excesses:</p>
        <p>21.1 Where the Hirer is between the age of 21 years and 25
        years – the sum of $5000.00.</p>
        <p>21.2 Where the Hirer is over the age of 25 years – the sum of
        $4818.00.
        </p>
        <p>22. The Hirer may reduce the Hirer's liability under clauses
        20 or 21 by indicating accordingly
        on the front of this form. If the Hirer has so indicated,
        then the Hirer's liability will be
        reduced to the amount described on the front of this form.
        </p>
        <p>23. If any claim upon the Insurance by the Owner concerning
        any loss in relation to the vehicle
        occurring during the period of hire is rejected or denied
        either in whole or in part by the
        Insurer, then the Hirer shall indemnify the Owner in
        relation to the full amount of such
        loss</p>
        <p>24. The Owner may terminate this Agreement and without notice
        to repossess the Vehicle in
        the event of a breach by the Hirer of the Terms and
        Conditions of this Agreement.</p>
        <p>25. If the Vehicle is returned to the Owner in an unclean
        condition, then the Hirer shall also
        pay $50.00 - $195.00 for the cleaning of the Vehicle</p>
        <p>26. The Hirer and Joint Hirer hereby agree to the above
        terms.
        </p>
        <p>PRINT NAME: ".$r[0]->print_name."
        </p>
        <p>SIGNATURE: <img src='".$r[0]->third_sig."'>
        </p>
        <p>DATE: ".$r[0]->sig_date_ending."</p>
        </div>
        </div>
        </div>
        <div class='card-footer d-flex justify-content-between align-items-center'>
        <div>

        <div>

        </div>

        </div>
        </div>
        ";
        // Write some HTML code:
        $mpdf->SetProtection(array('print'));
        $mpdf->SetTitle("Simba Agreement");
        $mpdf->SetAuthor("Simba");
        $mpdf->SetWatermarkImage($waterMark,.2,'F',array(22,90));
        $mpdf->showWatermarkImage = true;
        $mpdf->watermark_font = 'DejaVuSansCondensed';
//		$mpdf->watermarkImageAlpha = 0.5;
//		$mpdf->watermarkim = 0.5;
        $mpdf->SetDisplayMode('fullpage');
        $mpdf->WriteHTML($html);
        // Output a PDF file directly to the browser
        $mpdf->Output();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        unset($request->_token);
        $data=$request->all();
        if (isset($data['total_days']) and $data['total_days'] >=30){
            $data['reservation_type'] = "long_rental";
        }
        $data['remaining_amount'] = $data['total_amount']-$data['paid_amount'];
        //storing inspection images
        if($request->hasfile('files'))
        {
            foreach($request->file('files') as $file)
            {
                $file->storeAs('public/uploads',$file->getClientOriginalName());
                $images[] = $file->getClientOriginalName();
                unset($data['files']);
            }
        }

        $data['p_time'] = $data['p_time'] .':' . $data['p_time_min'] . ':'. strtolower($data['p_time_interval']);
        $data['r_time'] = $data['r_time'] .':' . $data['r_time_min'] . ':'. strtolower($data['r_time_interval']);

        unset($data['p_time_min'],$data['p_time_interval'],$data['r_time_min'],$data['r_time_interval']);
        if (!empty($images)){
            $data['image'] = json_encode($images);
        }
        if ($data['type'] !== 'quote_only' and $data['payment_method'] === 'credit_card'){
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            Stripe\Charge::create ([
                "amount" => $data['total_amount']*100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Simba Car Hire"
            ]);
        }
        $create = Reservation::create($data);

        if ($data['type'] === 'quote_only'){
            $this->sendMail($create->id);
        }
        return redirect('admin/reservations');
    }

    function sendMail($reservation_id){
        $r = DB::table('reservations')
            ->join('customers','reservations.customer','=','customers.id')
            ->join('vikicars','reservations.shab_car','=','vikicars.id')
            ->where('reservations.id',$reservation_id)
            ->select('reservations.*','customers.name as customer_name','customers.email as c_email','customers.phone as c_phone','customers.d_license_no as c_license','customers.expiration_date as c_expiration_date','vikicars.daily_start_price as daily_price')
            ->get();
        $message =
        "QUOTE ONLY" . "<br>".
        "Branch" . ' ' . $r[0]->branch . "<br>".
        "Pick Up Date:" . ' ' . $r[0]->p_date . "<br>".
        "Pick Up Time:" . ' ' . $r[0]->p_time . "<br>".
        "Drop Off Date:" . ' ' . $r[0]->r_date . "<br>".
        "Drop Off Time:" . ' ' . $r[0]->r_time . "<br>".
        "Drop Off Time:" . ' ' . $r[0]->r_time . "<br>".
        "Estimated Price:" . ' ' . '$'.$r[0]->total_amount . "<br>".
        "Customer Name:" . ' ' . $r[0]->customer_name . "<br>".
        "Customer Email:" . ' ' . $r[0]->c_email . "<br>".
        "Customer Phone:" . ' ' . $r[0]->c_phone . "<br>".
        "Customer License:" . ' ' . $r[0]->c_license . "<br>";
        ;

        //Load Composer's autoloader
        require 'vendor/autoload.php';
        $mail = new PHPMailer(true);
        try {
            //Server settings //mail.jetnetix.com //Baborao123#!
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'mail.jetnetixsolutions.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                  //Enable SMTP authentication
            $mail->Username   = 'dev_email@jetnetixsolutions.com';                     //SMTP username
            $mail->Password   = 'ThePassword123!';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            //Recipients
            $mail->setFrom('dev_email@jetnetixsolutions.com','Simba');
            $mail->addReplyTo('dev_email@jetnetixsolutions.com', 'Simba Car Hire');
            $mail->addAddress($r[0]->c_email);  //Add a recipient
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "Quotation";
            $mail->Body =$message;
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            return 'error';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
