@include('users.header')

    <link rel="stylesheet" href="{{url('assets/users')}}/css/vik.css">

<!--    <link rel="stylesheet" href="{{url('assets/users')}}/css/frm-wiz/mStyle.css">-->
<!--    <link rel="stylesheet" href="{{url('assets/users')}}/css/frm-wiz/js-steps.css">-->



    <style>

        .hide{
            display: none;
        }

        .nav .nav-item::marker{
            color:transparent !important;
        }

        .nav .nav-item{
            flex: 1;
            text-align: center;
        }
        .nav-pills .nav-link{
            margin:auto;
            width: 100%;
            font-weight: bold;
            background: #f7f7f7;
        }
        .vrc-oconfirm-paym-block .vrc-gpay-licont-active{
            flex:1;

        }
        .vrc-oconfirm-paym-block .vrc-gpay-licont-active:before{
            display:none;
        }
        .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #283891;
        }
        .vrc-showprc-left{
            order:0;
        }
        .vrc-showprc-container{
            align-items: center;
        }
        .vrcinfocarcontainer{
            border: 1px solid rgb(221, 221, 221);
            border-radius: 8px;
            align-items: center;
        }
        .vrcrentforlocs{
            border:none;
        }
        .vrccustomfields{
            display:block;
        }
        .vrc-oconfirm-summary-car-cell-descr .vrc-oconfirm-carname{
            color:black;
        }
        .vrc-oconfirm-summary-total-wrapper .vrc-oconfirm-summary-total-row, .vrc-oconfirm-summary-total-wrapper .vrc-oconfirm-summary-total-row .vrc-oconfirm-total-block{
            color:black;
        }

    /*wizard css*/
        .wizard>.steps .current a, .wizard>.steps .current a:hover, .wizard>.steps .current a:active {
            background: #2184be;
            color: #fff;
            cursor: default;
        }
        .wizard>.steps a, .wizard>.steps a:hover, .wizard>.steps a:active {
            display: block;
            width: auto;
            margin: 0 0.5em 0.5em;
            padding: 1em 1em;
            text-decoration: none;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }
        .wizard a, .tabcontrol a {
            outline: 0;
        }
        .wizard ul, .tabcontrol ul {
            list-style: none!important;
            padding: 0;
            margin: 0;
        }
        .wizard>.steps>ul>li, .wizard>.actions>ul>li {
            float: left;
        }
        .wizard>.steps>ul>li {
            width: 25%;
        }
        .wizard>.actions .disabled a, .wizard>.actions .disabled a:hover, .wizard>.actions .disabled a:active {
            background: #ccc;
            color: #aaa;
        }
        .wizard>.actions>ul>li {
            margin: 0 0.5em;
        }
        .clearfix:before, .clearfix:after {
            display: table;
            content: "";
            line-height: 0;
        }
        .wizard ul>li, .tabcontrol ul>li {
            display: block;
            padding: 0;
        }
        .wizard>.steps .disabled a, .wizard>.steps .disabled a:hover, .wizard>.steps .disabled a:active {
            background: #eee;
            color: #aaa;
            cursor: default;
        }
        .wizard>.content>.title, .tabcontrol>.content>.title {
            position: absolute;
            left: -999em;
        }
        .wizard>.steps .done a, .wizard>.steps .done a:hover, .wizard>.steps .done a:active {
            background: #9dc8e2;
            color: #fff;
        }
        .wizard>.actions a, .wizard>.actions a:hover, .wizard>.actions a:active {
            background: #2184be;
            color: #fff;
            display: block;
            padding: 0.5em 1em;
            text-decoration: none;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            margin-top: 18px;
        }
        .current-info {
            opacity: 0;
        }

    </style>

    <section class="product-listing page-section-ptb">

        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body checkout-tab">
                            <form role="form" action="{{route('admin.onlineReservation.add')}}" method="post" class="require-validation"
                                  data-cc-on-file="false"
                                  data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                  id="payment-form">
                                @csrf
                            <div id="example-basic">
                                <p class="text-danger" style="display: none" id="errors">All fields are required</p>
                                <h3>Dates</h3>
                                <section>
                                    <div class="row g-0 inner-service" >
                                        <div class="col-md-6 col-sm-6">
                                            <div class="feature-box-2 text-center">
                                                <div class="icon">
                                                    <h5>Pick Up</h5>
                                                </div>
                                                <div class="content">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <i class="glyph-icon flaticon-car"></i>
                                                            <p>{{(!empty($search_results['p_location'])) ? $search_results['p_location'] : ""}}</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>
                                                                <i class="fa fa-calendar"></i>
                                                                {{(!empty($search_results['p_date'])) ? $search_results['p_date'] : ""}}
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>
                                                                <i class="fa fa-clock-o"></i>
                                                                {{(!empty($search_results['p_time'])) ? $search_results['p_time'] : ""}}
                                                            </p>
                                                        </div>
{{--                                                        <div class="col-md-6">--}}
{{--                                                            <p>--}}
{{--                                                                <i class="fa fa-phone"></i>--}}
{{--                                                                08 8312 4616--}}
{{--                                                            </p>--}}
{{--                                                        </div>--}}
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="feature-box-2 no-br text-center">
                                                <div class="icon">
                                                    <h5>Drop Off</h5>

                                                </div>
                                                <div class="content">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <i class="glyph-icon flaticon-gas-station"></i>
                                                            <p>
                                                                {{(!empty($search_results['d_location'])) ? $search_results['d_location'] : ""}}
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>
                                                                <i class="fa fa-calendar"></i>
                                                                {{(!empty($search_results['d_date'])) ? $search_results['d_date'] : ""}}
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>
                                                                <i class="fa fa-clock-o"></i>
                                                                {{(!empty($search_results['d_time'])) ? $search_results['d_time'] : ""}}
                                                            </p>
                                                        </div>
{{--                                                        <div class="col-md-6">--}}
{{--                                                            <p>--}}
{{--                                                                <i class="fa fa-phone"></i>--}}
{{--                                                                08 8312 4616--}}
{{--                                                            </p>--}}
{{--                                                        </div>--}}
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </section>
                                <h3>Cars</h3>
                                <section>
                                    <div class="row g-0 inner-service" >
                                        <div class="row product-listing mt-5" style="margin:auto;">
                                            <div class="col-lg-12 col-md-8">
                                                @forelse($all_cars as $c)
                                                <div class="car-grid">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="car-item gray-bg text-center">
                                                                <div class="car-image">
                                                                    <img class="img-fluid" src="{{url('storage/app/public/carlist/'.$c['image'])}}" alt="">
{{--                                                                    <div class="car-overlay-banner">--}}
{{--                                                                        <ul>--}}
{{--                                                                            <li><a href="#"><i class="fa fa-link"></i></a></li>--}}
{{--                                                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                                                                        </ul>--}}
{{--                                                                    </div>--}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8 col-md-12">
                                                            <div class="car-details">
                                                                <div class="car-title">
                                                                    <a href="#">{{$c['name']}} or similar</a>

                                                                </div>
                                                                <h6>Starting From</h6>
                                                                <div class="price">
                                                                    <span class="new-price">${{$c['daily_start_price']}}</span>
{{--                                                                    <a class="button red float-end form-wizard-next-btn" href="javascript:;">Continue</a>--}}
                                                                    <input type="radio" name="shab_car" value="{{$c['id']}}" style="float: right" >
                                                                </div>
{{--                                                                <h6>Per Day</h6>--}}
{{--                                                                <div class="price">--}}
{{--                                                                    <span class="new-price">${{$c['daily_start_price']}}</span>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="car-list">--}}
{{--                                                                    <ul class="list-inline">--}}
{{--                                                                        <li><i class="fa fa-registered"></i> 2016</li>--}}
{{--                                                                        <li><i class="fa fa-cog"></i> Manual </li>--}}
{{--                                                                        <li><i class="fa fa-shopping-cart"></i> Compact</li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @empty
                                                @endforelse
                                            </div>
                                        </div>

                                    </div>
                                </section>
                                <h3>Options</h3>
                                <section>

                                       <div id="show_vehicle_details"></div>


                                        <div class="vrc-showprc-options-wrap">
                                            <h4 class="vrc-showprc-title">Options</h4>
                                            <div class="vrc-showprc-options-inner">
                                                <div class="vrc-showprc-option-row">
                                                    <div class="vrc-showprc-option-cell-info">
                                                        <div class="vrc-showprc-option-name-descr">
                                                            <div class="vrc-showprc-option-name">
                                                                <span>BASIC COVER</span>
                                                            </div>
                                                            <div class="vrc-showprc-option-cell-descr">
                                                                <div class="vrcoptionaldescr">If you have an accident or damage the vehicle, your excess liability is $4,818.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vrc-showprc-option-cell-price">
                                                        <div class="vrc-showprc-option-cell-price-descr">
                                                            <span class="vrc_currency">$</span>
                                                            <span class="vrc_price">{{(!empty($additional_options[0]['basic_cover'])) ? $additional_options[0]['basic_cover'] : 0}}</span>
                                                        </div>
                                                        <div class="vrc-showprc-option-cell-price-sel">
                                                            <input type="checkbox" name="basic_cover" value="yes">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vrc-showprc-option-row">
                                                    <div class="vrc-showprc-option-cell-info">
                                                        <div class="vrc-showprc-option-name-descr">
                                                            <div class="vrc-showprc-option-name">
                                                                <span>Silver Cover</span>
                                                            </div>
                                                            <div class="vrc-showprc-option-cell-descr">
                                                                <div class="vrcoptionaldescr"><span style="color: #0000ff">This allows you to reduce the excess liability to $1800.&nbsp; Includes Roadside Assistance</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vrc-showprc-option-cell-price">
                                                        <div class="vrc-showprc-option-cell-price-descr">
                                                            <span class="vrc_currency">$</span>
                                                            <span class="vrc_price">{{(!empty($additional_options[0]['silver_cover'])) ? $additional_options[0]['silver_cover'] : 0}}</span>
                                                        </div>
                                                        <div class="vrc-showprc-option-cell-price-sel">
                                                            <input type="checkbox" name="silver_cover" value="yes">					</div>
                                                    </div>
                                                </div>
                                                <div class="vrc-showprc-option-row">
                                                    <div class="vrc-showprc-option-cell-info">
                                                        <div class="vrc-showprc-option-name-descr">
                                                            <div class="vrc-showprc-option-name">
                                                                <span>Gold Cover</span>
                                                            </div>
                                                            <div class="vrc-showprc-option-cell-descr">
                                                                <div class="vrcoptionaldescr"><span style="color: #0000ff">This allows you to reduce the excess liability to $0. </span><span style="color: #0000ff">Includes Roadside Assistance</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vrc-showprc-option-cell-price">
                                                        <div class="vrc-showprc-option-cell-price-descr">
                                                            <span class="vrc_currency">$</span>
                                                            <span class="vrc_price">{{(!empty($additional_options[0]['gold_cover'])) ? $additional_options[0]['gold_cover'] : 0}}</span>
                                                        </div>
                                                        <div class="vrc-showprc-option-cell-price-sel">
                                                            <input type="checkbox" name="gold_cover" value="yes">					</div>
                                                    </div>
                                                </div>
                                                <div class="vrc-showprc-option-row">
                                                    <div class="vrc-showprc-option-cell-info">
                                                        <div class="vrc-showprc-option-name-descr">
                                                            <div class="vrc-showprc-option-name">
                                                                <span>Drivers Under 25 and Over 75 Years</span>
                                                            </div>
                                                            <div class="vrc-showprc-option-cell-descr">
                                                                <div class="vrcoptionaldescr">You MUST select this option if you are under 25 or Over 75 years Old.

                                                                    Excess For Drivers under 25 and Over 75 is $5000.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vrc-showprc-option-cell-price">
                                                        <div class="vrc-showprc-option-cell-price-descr">
                                                            <span class="vrc_currency">$</span>
                                                            <span class="vrc_price">{{(!empty($additional_options[0]['driver_for'])) ? $additional_options[0]['driver_for'] : 0}}</span>
                                                        </div>
                                                        <div class="vrc-showprc-option-cell-price-sel">
                                                            <input type="checkbox" name="driver_for" value="yes">					</div>
                                                    </div>
                                                </div>
                                                <div class="vrc-showprc-option-row">
                                                    <div class="vrc-showprc-option-cell-info">
                                                        <div class="vrc-showprc-option-name-descr">
                                                            <div class="vrc-showprc-option-name">
                                                                <span>Additional Driver</span>
                                                            </div>
                                                            <div class="vrc-showprc-option-cell-descr">
                                                                <div class="vrcoptionaldescr">Use this option if there is more then 1 Driver.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vrc-showprc-option-cell-price">
                                                        <div class="vrc-showprc-option-cell-price-descr">
                                                            <span class="vrc_currency">$</span>
                                                            <span class="vrc_price">{{(!empty($additional_options[0]['additional_driver'])) ? $additional_options[0]['additional_driver'] : 0}}</span>
                                                        </div>
                                                        <div class="vrc-showprc-option-cell-price-sel">
                                                            <input type="number" min="0" step="any" name="additional_driver" value="0" size="5">					</div>
                                                    </div>
                                                </div>
                                                <div class="vrc-showprc-option-row">
                                                    <div class="vrc-showprc-option-cell-info">
                                                        <div class="vrc-showprc-option-name-descr">
                                                            <div class="vrc-showprc-option-name">
                                                                <span>Child Seat</span>
                                                            </div>
                                                            <div class="vrc-showprc-option-cell-descr">
                                                                <div class="vrcoptionaldescr">For Children between 0-4 Years</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vrc-showprc-option-cell-price">
                                                        <div class="vrc-showprc-option-cell-price-descr">
                                                            <span class="vrc_currency">$</span>
                                                            <span class="vrc_price">{{(!empty($additional_options[0]['child_seat'])) ? $additional_options[0]['child_seat'] : 0}}</span>
                                                        </div>
                                                        <div class="vrc-showprc-option-cell-price-sel">
                                                            <input type="number" min="0" step="any" name="child_seat" value="0" size="5">					</div>
                                                    </div>
                                                </div>
                                                <div class="vrc-showprc-option-row">
                                                    <div class="vrc-showprc-option-cell-info">
                                                        <div class="vrc-showprc-option-name-descr">
                                                            <div class="vrc-showprc-option-name">
                                                                <span>Booster Seat</span>
                                                            </div>
                                                            <div class="vrc-showprc-option-cell-descr">
                                                                <div class="vrcoptionaldescr">For Children between 4-8 Years</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vrc-showprc-option-cell-price">
                                                        <div class="vrc-showprc-option-cell-price-descr">
                                                            <span class="vrc_currency">$</span>
                                                            <span class="vrc_price">{{(!empty($additional_options[0]['boost_seat'])) ? $additional_options[0]['boost_seat'] : 0}}</span>
                                                        </div>
                                                        <div class="vrc-showprc-option-cell-price-sel">
                                                            <input type="number" min="0" step="any" name="boost_seat" value="0" size="5">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="p_date" value="<?=$search_results['p_date']?>">
                                        <input type="hidden" name="r_date" value="<?=$search_results['d_date']?>">
                                        <input type="hidden" name="p_time" value="<?=$search_results['p_time']?>">
                                        <input type="hidden" name="r_time" value="<?=$search_results['d_time']?>">
                                        <input type="hidden" name="p_location" value="<?=$search_results['p_location']?>">
                                        <input type="hidden" name="d_location" value="<?=$search_results['d_location']?>">
                                        <!---->
                                        <!--                                        <div class="car_buttons_box">-->
                                        <!--                                            <input type="submit" name="goon" value="Book now" class="form-wizard-previous-btn btn booknow vrc-pref-color-btn">-->
                                        <!--                                            <div class="goback">-->
                                        <!--                                                <a href="#" class="form-wizard-next-btn btn vrc-pref-color-btn-secondary">Back</a>-->
                                        <!--                                            </div>-->
                                        <!--                                        </div>-->

                                </section>
                                <h3>Book</h3>
                                <section>
                                    <div class="vrcinfocarcontainer">
                                        <div class="vrcrentforlocs">
                                            <div class="vrcrentalfor">
                                                <h3 class="vrcrentalforone showCar_summary" >Rental Mitsubishi Mirage or similar for 27 Days</h3>
                                            </div>
                                            <div class="vrc-itinerary-confirmation">
                                                <div class="vrc-itinerary-pickup">
                                                    <h4>Pickup</h4>
                                                    <div class="vrc-itinerary-pickup-location">
                                                        <i class="fa fa-location-arrow vrc-pref-color-text"></i>					<div class="vrc-itinerary-pickup-locdet">
                                                            <span class="vrc-itinerary-pickup-locname">{{(!empty($search_results['p_location'])) ? $search_results['p_location'] : ""}}</span>
                                                            <span class="vrc-itinerary-pickup-locaddr"></span>
                                                        </div>
                                                    </div>
                                                    <div class="vrc-itinerary-pickup-date">
                                                        <i class="fa fa-calendar vrc-pref-color-text"></i>					<span class="vrc-itinerary-pickup-date-day">{{(!empty($search_results['p_date'])) ? $search_results['p_date'] : ""}}</span>
                                                        <span class="vrc-itinerary-pickup-date-time">{{(!empty($search_results['p_time'])) ? $search_results['p_time'] : ""}}</span>
                                                    </div>
                                                </div>
                                                <div class="vrc-itinerary-dropoff">
                                                    <h4>Drop Off</h4>
                                                    <div class="vrc-itinerary-dropoff-location">
                                                        <i class="fa fa-location-arrow vrc-pref-color-text"></i>					<div class="vrc-itinerary-dropfff-locdet">
                                                            <span class="vrc-itinerary-dropoff-locname">{{(!empty($search_results['d_location'])) ? $search_results['d_location'] : ""}}</span>
                                                            <span class="vrc-itinerary-dropoff-locaddr"></span>
                                                        </div>
                                                    </div>
                                                    <div class="vrc-itinerary-dropoff-date">
                                                        <i class="fa fa-calendar vrc-pref-color-text"></i>					<span class="vrc-itinerary-dropoff-date-day">{{(!empty($search_results['d_date'])) ? $search_results['d_date'] : ""}}</span>
                                                        <span class="vrc-itinerary-dropoff-date-time">{{(!empty($search_results['d_time'])) ? $search_results['d_time'] : ""}}</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="vrc-summary-car-img">
                                            <img src="https://www.simbacarhire.com.au/wp-content/plugins/vikrentcar/admin/resources/mirage-320x181.png" class="showCarimg_summary">
                                        </div>
                                    </div>

                                    <div id="show_additional_info"></div>


                                    <div class="vrccustomfields">
                                        <div class="vrcdivcustomfield vrccustomfldinfo">
                                            <div class="vrcseparatorcf">Driver Information</div>
                                        </div>
                                        <div class="vrcdivcustomfield">
                                            <div class="vrc-customfield-label">
                                                <span class="vrcrequired"><sup>*</sup></span> 					<label id="vrcf2" for="vrcf-inp2">Name</label>				</div>
                                            <div class="vrc-customfield-input">
                                                <input type="text" name="name" id="vrcf-inp2" value="" size="40" class="vrcinput wizard-required">
                                            </div>
                                        </div>
                                        <div class="vrcdivcustomfield">
                                            <div class="vrc-customfield-label">
                                                <span class="vrcrequired"><sup>*</sup></span> 					<label id="vrcf4" for="vrcf-inp4">e-Mail</label>				</div>
                                            <div class="vrc-customfield-input">
                                                <input type="email" name="email" id="vrcf-inp4" value="" size="40" class="vrcinput">
                                            </div>
                                        </div>
                                        <div class="vrcdivcustomfield">
                                            <div class="vrc-customfield-label">
                                                <label id="vrcf5" for="vrcf-inp5">Phone</label>				</div>
                                            <div class="vrc-customfield-input">
                                                <input type="number" name="phone" id="vrcf-inp5" value="" size="40" class="vrcinput">
                                            </div>
                                        </div>
                                        <div class="vrcdivcustomfield">
                                            <div class="vrc-customfield-label">
                                                <label id="vrcf6" for="vrcf-inp6">Address</label>				</div>
                                            <div class="vrc-customfield-input">
                                                <input type="text" name="street" id="vrcf-inp6" value="" size="40" class="vrcinput">
                                            </div>
                                        </div>
                                        <div class="vrcdivcustomfield">
                                            <div class="vrc-customfield-label">
                                                <label id="vrcf7" for="vrcf-inp7">Zip Code</label>				</div>
                                            <div class="vrc-customfield-input">
                                                <input type="number" name="zip" id="vrcf-inp7" value="" size="40" class="vrcinput">
                                            </div>
                                        </div>
                                        <div class="vrcdivcustomfield">
                                            <div class="vrc-customfield-label">
                                                <label id="vrcf8" for="vrcf-inp8">City</label>				</div>
                                            <div class="vrc-customfield-input">
                                                <input type="text" name="city" id="vrcf-inp8" value="" size="40" class="vrcinput">
                                            </div>
                                        </div>
                                        <div class="vrcdivcustomfield">
                                            <div class="vrc-customfield-label">
                                                <span class="vrcrequired"><sup>*</sup></span> <label id="vrcf9" for="vrcf-inp9">Country</label>				</div>
                                            <div class="vrc-customfield-input">
                                                <select name="country" class="vrcf-countryinp"><option value=""></option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antarctica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Canary Islands">Canary Islands</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African Republic</option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="East Timor">East Timor</option>
                                                    <option value="East Timor">East Timor</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Territories">French Southern Territories</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jersey">Jersey</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macau">Macau</option>
                                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Pitcairn">Pitcairn</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russian Federation">Russian Federation</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Serbia">Serbia</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Sint Maarten (French Antilles)">Sint Maarten (French Antilles)</option>
                                                    <option value="Sint Maarten (Netherlands Antilles)">Sint Maarten (Netherlands Antilles)</option>
                                                    <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="St. Barthelemy">St. Barthelemy</option>
                                                    <option value="St. Eustatius">St. Eustatius</option>
                                                    <option value="St. Helena">St. Helena</option>
                                                    <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                    <option value="Taiwan">Taiwan</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="The Democratic Republic of Congo">The Democratic Republic of Congo</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Viet Nam">Viet Nam</option>
                                                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                    <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                                    <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>				</div>
                                        </div>
                                        <div class="vrcdivcustomfield">
                                            <div class="vrc-customfield-label">
                                                <span class="vrcrequired"><sup>*</sup></span> <label id="vrcf10" for="vrcf-inp10">Date of Birth</label>				</div>
                                            <div class="vrc-customfield-input vrc-customfield-input-date">
                                                <input type="date" name="dob" id="vrcf-inp10" value="" size="40" class="vrcinput hasDatepicker">
                                            </div>
                                        </div>

                                        <div class="vrcdivcustomfield">
                                            <div class="vrc-customfield-label">
                                                <label id="vrcf11" for="vrcf-inp11">Flight Number</label>				</div>
                                            <div class="vrc-customfield-input">
                                                <input type="text" name="flight_number" id="vrcf-inp11" value="" size="40" class="vrcinput">
                                            </div>
                                        </div>
                                        <div class="vrcdivcustomfield">
                                            <div class="vrc-customfield-label">
                                                <label id="vrcf12" for="vrcf-inp12">Notes</label>				</div>
                                            <div class="vrc-customfield-input">
                                                <textarea name="notes" id="vrcf-inp12" rows="5" cols="30" class="vrctextarea"></textarea>
                                            </div>
                                        </div>
                                        <div class="vrcdivcustomfield vrc-oconfirm-cfield-entry-checkbox">
                                            <div class="vrc-customfield-label">
                                                <span class="vrcrequired"><sup>*</sup></span> <a href="https://www.simbacarhire.com.au/wp-content/uploads/2021/09/Simba-Car-Rental-Agreement.pdf" id="vrcf13" rel="{handler: 'iframe', size: {x: 750, y: 600}}" target="_blank" class="vrcmodal">I agree to the terms and conditions</a>				</div>
                                            <div class="vrc-customfield-input">
                                                <input type="checkbox" checked id="vrcf-inp13" value="Yes">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="days" value="27">
                                    <input type="hidden" name="pickup" value="1650619800">
                                    <input type="hidden" name="release" value="1652952600">
                                    <input type="hidden" name="car" value="9">
                                    <input type="hidden" name="prtar" value="87">
                                    <input type="hidden" name="priceid" value="1">
                                    <input type="hidden" name="optionals" value="8:1;9:1;">
                                    <input type="hidden" name="totdue" value="2983.9525">
                                    <input type="hidden" name="place" value="2">
                                    <input type="hidden" name="returnplace" value="2">
                                    <input type="hidden" name="viktoken" value="1064625688f97590a1.57610782">
                                    <input type="hidden" id="vikwp_nonce" name="vikwp_nonce" value="25dd4da35b"><input type="hidden" name="_wp_http_referer" value="/">		<input type="hidden" name="task" value="saveorder">
                                    <div class="vrc-oconfirm-paym-block">
                                        <h4 class="vrc-medium-header">Payment Method</h4>
                                        <div class="card p-4 border shadow-none mb-0 mt-4">
                                            <div class="row gy-3">
                                                <div class="col-md-4">
                                                    <label for="cc-name" class="form-label">Name on card</label>
                                                    <input type="text" class="form-control" id="cc-name"
                                                           placeholder="Enter name">
                                                    <small class="text-muted">Full name as displayed on card</small>
                                                </div>

                                                <div class="col-md-8">
                                                    <label for="cc-number" class="form-label">Credit card
                                                        number</label>
                                                    <input
                                                        autocomplete='off' class='form-control card-number' size='20'
                                                        type='text'>
                                                </div>

                                                <div class="col-md-3">
                                                    <label for="cc-expiration" class="form-label">CVC</label>
                                                    <input autocomplete='off'
                                                           class='form-control card-cvc' placeholder='ex. 311' size='4'
                                                           type='text'>
                                                </div>

                                                <div class="col-md-3">
                                                    <label for="cc-expiration" class="form-label">Expiration Month</label>
                                                    <input
                                                        class='form-control card-expiry-month' placeholder='MM' size='2'
                                                        type='text'>
                                                </div>

                                                <div class="col-md-3">
                                                    <label for="cc-cvv" class="form-label">Expiration Year</label>
                                                    <input class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                                           type='text'>
                                                </div>
                                                <div class='col-md-12 error form-group hide'>
                                                    <div class='alert-danger alert'>Please correct the errors and try
                                                        again.
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="text-muted mt-2 fst-italic">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-lock text-muted icon-xs">
                                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                            </svg> Your transaction is secured with SSL encryption
                                        </div>
                                    </div>
                                </section>
                            </div>
                            </form>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
        </div>
    </section>
<?php
$earlier = new DateTime($search_results['p_date']);
$later = new DateTime($search_results['d_date']);
$total_days = $later->diff($earlier)->format("%a");
?>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    function stripe() {
        var $form = $(".require-validation");
        var $form1 = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
                'input[type=text]', 'input[type=file]',
                'textarea'
            ].join(', '),
            $inputs = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid = true;
        $errorMessage.addClass('hide');
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
            }
        });
        if (!$form.data('cc-on-file')) {
            // e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
        }
        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                /* token contains id, last4, and card type */
                var token = response['id'];
                $form1.find('input[type=text]').empty();
                $form1.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            }
        }
        // return true
    };

</script>




    <script>

        function showDriverName() {
            let catchSelectId = document.getElementById('driver');
            let driver = document.getElementById('driverBlock');
            if (catchSelectId.options[catchSelectId.selectedIndex].value == "with") {
                driver.style.display = 'inline-block';
            } else {
                driver.style.display = 'none';
            }
        }

        function showHideTab() {
            let idTab1 = document.getElementById('paymentmethodCollapse');
            let idTab2 = document.getElementById('paymentMethod03');
            idTab1.style.display = 'block';
            idTab2.style.display = 'none';
        }

        function showHideTab02() {
            let idTab1 = document.getElementById('paymentmethodCollapse');
            let idTab2 = document.getElementById('paymentMethod03');
            idTab2.style.display = 'block';
            idTab1.style.display = 'none';
        }

        function showHideErrors(type){
            if(type === true){
                $("#errors").css('display','block')
            }else{
                $("#errors").css('display','none')
            }
        }

        $(function(){
            $("#example-basic").steps({
                headerTag: "h3",
                bodyTag: "section",
                transitionEffect: "slideLeft",
                transitionEffectSpeed: 200,
                autoFocus: true,
                onStepChanging: function (event, currentIndex, newIndex) {
                    let options={};
                    let otherOptions={};
                    if ( newIndex === 2 ) {
                        let vehicle_id = $("[name='shab_car']:checked").val();
                        let _token  = '{{csrf_token()}}';
                        $.post("{{url('/admin/onlineReservation/getAjaxData/vehicle')}}",{_token,vehicle_id},function (e){
                            $("#show_vehicle_details").html(e)
                        })
                        if(vehicle_id && vehicle_id.length >0){
                            showHideErrors(false)
                            return true;
                        }
                        showHideErrors(true)
                        return false;
                    }
                    if (newIndex === 3){
                        $("input[type='checkbox']:checked").each(function (key,value){
                            options[key] =value.name;
                        })
                        $("input[type='number']").each(function (key,value){
                            otherOptions[value.name] =value.value;
                        })

                        let vehicle_id = $("[name='shab_car']:checked").val();
                        let totalDays = '{{$total_days}}';
                        let _token  = '{{csrf_token()}}';
                        $.post("{{url('/admin/onlineReservation/getAjaxData/additional_information')}}",{_token,vehicle_id,options,otherOptions,totalDays},function (e){
                            let carName = $(".vrhword").html();
                            let carSrc = $(".car_img_box img").attr('src');
                            $(".showCar_summary").html(carName)
                            $(".showCarimg_summary").attr('src',carSrc)
                            $("#show_additional_info").html(e)
                        })

                    }
                    return true;
                },
                onFinishing: function (event, currentIndex) {
                    let check = stripe();

                    if (!$("#wizard").hasClass('hide') && check == undefined){
                        $("#form_data").submit();
                    }
                },
                labels: {
                    finish: "Confirm",
                    next: "Next",
                    previous: "Previous"
                }
            });
        });

    </script>


@include('users.footer')
