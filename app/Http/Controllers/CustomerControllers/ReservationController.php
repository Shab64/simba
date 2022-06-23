<?php

namespace App\Http\Controllers\CustomerControllers;

use App\AddtionalOptions;
use App\Customers;
use App\Http\Controllers\Controller;
use App\Vikicar;
use Illuminate\Http\Request;
use Stripe;
class ReservationController extends Controller
{
    function filterCars(Request $request){
        $data['all_cars'] = json_decode(Vikicar::where('available','yes')->get(),true);
        $data['additional_options'] = json_decode(AddtionalOptions::all(),true);
        $data['search_results'] = $request->all();
        return view('users.search-form-wizard3',$data);
    }


    function getAjaxData(Request $request,$type){

        $additional_informaton = json_decode(AddtionalOptions::all(),true);
        $car = json_decode(Vikicar::where('id',$request->vehicle_id)->get(),true);
        if ($type === 'additional_information'){ ?>
                <div class="vrc-oconfirm-summary-container">
                <div class="vrc-oconfirm-summary-car-wrapper">
                <div class="vrc-oconfirm-summary-car-head">
                <div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-cell-descr">
                <span></span>
                </div>
                <div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-cell-days">
                <span>Days</span>
                </div>
                <div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-cell-net">
                <span>Net Price</span>
                </div>
                <div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-cell-tax">
<!--                <span>Tax</span>-->
                </div>
                <div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-cell-tot">
                <span>Total Price</span>
                </div>
                </div>
                <div class="vrc-oconfirm-summary-car-row">
                <div class="vrc-oconfirm-summary-car-cell-descr">
                <div class="vrc-oconfirm-carname vrc-pref-color-text"><?=$car[0]['name']?> or similar</div>
                <div class="vrc-oconfirm-priceinfo">
                Daily				</div>
                </div>
                <div class="vrc-oconfirm-summary-car-cell-days">
                <div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-head-cell-responsive">
                <span>Days</span>
                </div>
                <span><?=($request['totalDays'] == 0) ? (int)$request['totalDays']+1 : $request['totalDays'];?></span>
                </div>
                <div class="vrc-oconfirm-summary-car-cell-net">
                <span class="vrccurrency">
                <span class="vrc_currency">$</span>
                </span>
                <span class="vrcprice">
                <span class="vrc_price"><?=$car[0]['daily_start_price']?></span>
                </span>
                </div>
                <div class="vrc-oconfirm-summary-car-cell-tax">
                <div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-head-cell-responsive">
                <span>Tax</span>
                </div>
                <span class="vrccurrency">
<!--                <span class="vrc_currency">$</span>-->
                </span>
                <span class="vrcprice">
                <!--					<span class="vrc_price">271.27</span>-->
                </span>
                </div>
                <div class="vrc-oconfirm-summary-car-cell-tot">
                <div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-head-cell-responsive">
                <span>Total Price</span>
                </div>
                <span class="vrccurrency">
                <span class="vrc_currency">$</span>
                </span>
                <span class="vrcprice">
                <span class="vrc_price"><?=$car[0]['daily_start_price']* (($request['totalDays'] == 0) ? (int)$request['totalDays']+1 : $request['totalDays']);?></span>
                </span>
                </div>
                </div>
                <?php $total=$car[0]['daily_start_price']* (($request['totalDays'] == 0) ? (int)$request['totalDays']+1 : $request['totalDays']);
                if (!empty($request['options']) and $request['options'] !== null){ ?>
                <?php foreach ($request['options'] as $o){  ?>
                <div class="vrc-oconfirm-summary-car-row vrc-oconfirm-summary-option-row">
                <div class="vrc-oconfirm-summary-car-cell-descr">
                <div class="vrc-oconfirm-optname"><?=str_replace('_',' ', ucfirst($o))?> INCLUDED</div>
                </div>
                <div class="vrc-oconfirm-summary-car-cell-days">
                <span></span>
                </div>
                <div class="vrc-oconfirm-summary-car-cell-net">

                <span class="vrccurrency">
                <span class="vrc_currency">$</span>
                </span>
                <span class="vrcprice">
                <?php $check =  array_key_exists($o,$additional_informaton[0]); ?>
                <?php if ($check){ ?>
                <span class="vrc_price"><?= $additional_informaton[0][$o]?></span>
                <?php } ?>
                </span>
                </div>
                <div class="vrc-oconfirm-summary-car-cell-tax">
                <div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-head-cell-responsive">
<!--                <span>Tax</span>-->
                </div>
                <span class="vrccurrency">
<!--                <span class="vrc_currency">$</span>-->
                </span>
                <span class="vrcprice">
<!--                <span class="vrc_price">0.00</span>-->
                </span>
                </div>
                <div class="vrc-oconfirm-summary-car-cell-tot">
                <div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-head-cell-responsive">
                <span>Total Price</span>
                </div>
                <span class="vrccurrency">
                <span class="vrc_currency">$</span>
                </span>
                <span class="vrcprice">
                <?php if ($check){ $total +=$additional_informaton[0][$o]; ?>
                <span class="vrc_price"><?= $additional_informaton[0][$o]?></span>
                <?php } ?>
                </span>
                </div>
                </div>
                <?php }  ?>
                <?php }  ?>
                <?php  if (!empty($request['otherOptions'])){    ?>
                    <?php foreach($request['otherOptions'] as $kkey=>$ot){  ?>
                        <?php $check2 =  array_key_exists($kkey,$additional_informaton[0]); ?>
                        <?php if ($check2){ ?>
                            <span class="vrc_price"><?= str_replace('_',' ',$kkey) .  ' x ' . $ot ?></span>
                            <br>
                            <?php $total +=$additional_informaton[0][$kkey]*$ot;?>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>

                </div>
                <div class="vrc-oconfirm-summary-total-wrapper">

                <div class="vrc-oconfirm-summary-car-row vrc-oconfirm-summary-total-row">
                <div class="vrc-oconfirm-summary-car-cell-descr">
                <div class="vrc-oconfirm-total-block">Total</div>
                </div>
                <div class="vrc-oconfirm-summary-car-cell-days">
                <span></span>
                </div>
                <div class="vrc-oconfirm-summary-car-cell-net">
                <div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-cell-net">
                <span>Net Price</span>
                </div>
                <span class="vrccurrency">
                <!--					<span class="vrc_currency">$</span>-->
                </span>
                <span class="vrcprice">
                <span class="vrc_price"></span>
                </span>
                </div>
                <div class="vrc-oconfirm-summary-car-cell-tax">
                <div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-cell-tax">
                <!--                                <span>Tax</span>-->
                </div>
                <span class="vrccurrency">
                <!--					<span class="vrc_currency">$</span>-->
                </span>
                <span class="vrcprice">
                <!--					<span class="vrc_price">271.27</span>-->
                </span>
                </div>
                <div class="vrc-oconfirm-summary-car-cell-tot">
                <div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-cell-tot">
                <span>Total Price</span>
                </div>
                <span class="vrccurrency">
                <span class="vrc_currency">$</span>
                </span>
                <span class="vrcprice">
                <span class="vrc_price"><?=$total?></span>
                </span>
                </div>
                </div>

                </div>
                </div>
        <?php }elseif ($type === 'vehicle'){
            if (!empty($car)){ ?>
                <div class="vrc-showprc-container mt-5">
                    <div class="vrc-showprc-left car_img_box">
                        <img alt="Mitsubishi Mirage or similar" src="<?=url('storage/app/public/carlist/'.$car[0]['image'])?>">
                    </div>
                    <div class="vrc-showprc-right">
                        <h3 class="car_title"><span class="vrhword"><?=$car[0]['name']?> or similar </span></h3>
                        <div class="vrc-cdetails-infocar">
                            <div class="car_description_box">
                            </div>
                        </div>
                    </div>

                </div>


                <div class="vrc-showprc-prices-wrap">
                    <h4 class="vrc-showprc-title">Price</h4>
                    <div class="vrc-showprc-prices-inner">
                        <div class="vrc-showprc-price-row vrc-showprc-price-selected">
                            <div class="vrc-showprc-price-row-cell-first">
                                <label for="pid1" class="vrc-label-promo-price">
                                    <div class="vrc-showprc-priceinfo">
                                        <span class="vrc-showprc-pricename"><i class="fas fa-certificate vrc-promo-price-icon"></i> Daily</span>
                                        <span class="vrc-showprc-pricecost">
								<span class="vrc_currency">$</span> <span class="vrc_price"><?=$car[0]['daily_start_price']?></span>							</span>
                                    </div>
                                </label>
                            </div>
                            <div class="vrc-showprc-price-row-cell-last">
                                <input type="radio" name="priceid" id="pid1" onclick="vrcShowprcSetActivePrice(this);" value="1" checked="checked">
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
        }
    }

    function add(Request $request){

//        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
//        $stripe = Stripe\Charge::create ([
//            "amount" => 100 * 100,
//            "currency" => "usd",
//            "source" => $request->stripeToken,
//            "description" => "Online Reservation| SIMBA"
//        ]);
        $customer['name'] =$request->name;
        $customer['phone'] =$request->phone;
        $customer['street'] =$request->street;
        $customer['zip'] =$request->zip;
        $customer['city'] =$request->city;
        $customer['country'] =$request->country;
        $customer['dob'] =$request->dob;
        $customer['flight_number'] =$request->flight_number;
        $customer['notes'] =$request->notes;
        $customer['email'] =$request->email;
        $customer['shab_car'] =$request->shab_car;
        $customer['additional_driver'] =$request->additional_driver;
        $customer['child_seat'] =$request->child_seat;
        $customer['driver_for'] =$request->driver_for;
        $customer['gold_cover'] =$request->gold_cover;
        $customer['boost_seat'] =$request->boost_seat;
        $customer['basic_cover'] =$request->basic_cover;
        $customer['silver_cover'] =$request->silver_cover;
        $customer['p_date'] =$request->p_date;
        $customer['r_date'] =$request->r_date;
        $customer['p_time'] =$request->p_time;
        $customer['r_time'] =$request->r_time;
        $customer['p_location'] =$request->p_location;
        $customer['d_location'] =$request->d_location;
        $customer['customer_type'] ="online";

        Customers::create($customer);
    }
}
