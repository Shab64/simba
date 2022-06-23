<?php

namespace App\Http\Controllers;

use App\AddtionalOptions;
use App\Customers;
use App\Rto;
use App\Vehicle;
use App\Vikicar;
use App\Vikirental_location;
use Illuminate\Http\Request;

class RtoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.RTOReservation');
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
        $data['all_vehicles']=json_decode(Vehicle::orderBy('id', 'DESC')->get(),true);
        return view('admin.addRTOReservation',$data);
    }

    function filterCar(Request $request){
        $carDetails  =  json_decode(Vehicle::where('brand','LIKE',"%{$request->car}%")->get(),true);
        if (!empty($carDetails)){ ?>
            <div class="row">
                <?php foreach ($carDetails as $d){ ?>
                    <div class="col-md-3">
                        <div class="card card-cars" onclick="box.style.border='2px solid #ccc'">
                            <div class="car" id="bo">
                                <img class="rounded-start img-fluid" src="<?=(!empty($d['image'])) ? url('storage/app/public/uploads/'.$d['image']) : url('assets/images/car2.png') ?>" alt="Card image" />
                            </div>
                            <div class="car-body">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">
                                        <?=$d['brand']?>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-text mb-2">
                                        Purchase Price
                                    </h6>
                                    <p class="card-text">
                                        <?='$'.$d['purchase_price']?>
                                    </p>
                                    <div class="wrapper">

                                        <label style="background: #283891!important" for="option-<?=$d['id']?>" class="option option-<?=$d['id']?>">
                                            <input class="dot" type="radio" name="shab_car" <?= ($d==0) ? "checked" : "" ?> value="<?=$d['id']?>" id="option-<?=$d['id']?>" >
                                            <span>Add To RTO</span>
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




    function getAjaxData(Request $request,$type){
        if ($type === 'customer'){
            $customer= json_decode(Customers::where('id',$request->customer_id)->get(),true);
            if (!empty($customer)){ ?>
                <div class="row">
                    <div class="col-md-4">
                        <label for="name">Name: </label>
                        <p><?=$customer[0]['name']?></p>
                    </div>
                    <div class="col-md-4">
                        <label for="email">Email: </label>
                        <p><?=$customer[0]['email']?></p>
                    </div>
                    <div class="col-md-4">
                        <label for="invoice">Phone No: </label>
                        <p><?=$customer[0]['phone']?></p>
                    </div>
                    <div class="col-md-4">
                        <label for="name">Driving License #: </label>
                        <p><?=$customer[0]['d_license_no']?></p>
                    </div>
                    <div class="col-md-4">
                        <label for="name">Expiration Date: </label>
                        <p><?=$customer[0]['expiration_date']?></p>
                    </div>
                    <div class="col-md-4">
                        <label for="name">State: </label>
                        <p><?=$customer[0]['state']?></p>
                    </div>
                </div>
            <?php }
        }
        elseif ($type === 'vehicle'){
            $car = json_decode(Vehicle::where('id',$request->vehicle_id)->get(),true);
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rto  $rto
     * @return \Illuminate\Http\Response
     */
    public function show(Rto $rto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rto  $rto
     * @return \Illuminate\Http\Response
     */
    public function edit(Rto $rto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rto  $rto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rto $rto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rto  $rto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rto $rto)
    {
        //
    }
}
