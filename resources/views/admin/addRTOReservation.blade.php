@include('admin.header')
<!-- dropzone css -->


<link rel="stylesheet" href="{{url('assets')}}/css/frm-wiz/mStyle.css">
<link rel="stylesheet" href="{{url('assets')}}/css/frm-wiz/js-steps.css">
<link rel="stylesheet" href="{{url('assets')}}/css/frm-wiz/dropify.css">
<link rel="stylesheet" href="{{url('assets')}}/css/frm-wiz/nice-select.css">

<link rel="stylesheet" type="text/css" href="{{url('assets')}}/css/frm-wiz/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="{{url('assets')}}/css/frm-wiz/icon.css" />

{{--<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />--}}
{{--<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>--}}

<script src="{{ url('assets') }}/js/frm-wiz/jquery.steps.min.js"></script>
<style>
    .card-cars {
        /*box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;*/
        cursor: pointer;
        transition: .8s;
        transition: transform .8s;
        background-color: aliceblue;
        margin-top: 55px;
        text-align: center;
    }

    #wizard .form-control {
        background-color: #e5e9ff !important;
        border-radius: 3px !important;
        border: 2px solid #9999 !important;
        padding: 10px;
        color: #666666 !important;
    }

    .actions li a {
        background-color: #ec971f;
        color: white;
        font-weight: 500;
        border: none;
    }

    #wizard .actions li:first-child a {
        background-color: #283891 !important;
    }

    .card-cars:hover {
        /* transform: scale(1.03); */
        transform: translateY(-5px);
        transition: .8s;


    }

    .card-cars:hover .car {
        box-shadow: 0px 0px 25px #e7e7e7;
    }

    .ribbon-content label {
        color: black;
    }

    .ribbon-box .card-body {
        margin-top: 12px;
    }

    .license-card {
        height: 70vh;
        overflow-y: scroll;
        box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;

    }

    .img-figure-tag {
        /*border-radius: 25px;*/
        /*box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;*/

    }

    .img-hover {
        transition: transform .8s;
    }

    .img-hover:hover {
        transform: scale(1.06);
    }

    .header-aggrement-main-div {
        align-items: center;
    }

    .agrement-header {
        text-align: start;

    }

    #pills-checking input[type=text] {
        margin-bottom: 20px;
    }

    .car {
        width: 100%;
        margin: 0px auto;
        border-radius: 19px;
        background: aliceblue;
        position: relative;
        bottom: 30px;
        text-align: center;
        box-shadow: 0px 0px 15px #e7e7e7;
    }

    .car img {
        text-align: center;
        height: 160px;
    }

    .card-cars .card-title {
        font-size: 23px !important;
        text-align: center;
        font-weight: 700 !important;
    }

    .card-cars .card-body {
        padding-left: 0;
        padding-right: 0;
        padding-bottom: 0;
    }

    .card-cars button {
        width: 100%;
        border-radius: 0;
    }

    .text-start {
        text-align: start;
    }

    .third .card-cars .card-title {
        font-size: 17px !important;
        text-align: center;
        font-weight: 700 !important;
    }


    @media (max-width:767px) {
        .car {
            width: 100%;
            margin: 0px auto;
            border-radius: 19px;
            background: aliceblue;
            position: relative;
            bottom: 30px;
            text-align: center;
            box-shadow: 0px 0px 15px #e7e7e7;
        }

    }

    .third .wrapper .option .dot {
        height: 15px;
        width: 15px;
    }
    .third .wrapper .option {
        padding: 8px 10px!important;
    }

    .wrapper .option {
        background: #5ea3cb;
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0;
        border-radius: 5px;
        cursor: pointer;
        padding: 12px 10px;
        border: 2px solid #5ea3cb;
        transition: all 0.3s ease;
    }

    .third .wrapper .option span {
        font-size: 14px;
        color: white;
        margin-left: 5px;
    }

    #additional_options .card-body h4 {
        font-weight: 400;
        text-transform: capitalize;
        font-size: 18px;
        color:black;
    }
    .card .card-body .d-flex h4 {
        display: block!important;
    }

    .five p{
        font-weight: normal;
    }

    #additional_options .form-select {
        background-image: none!important;
        border: 2px solid #9999!important;
        padding: 0px 10px;
        width: 31px;
        height: 25px;
        margin-right: 10px;
    }

    #additional_options .card-body p {
        font-size: 12px;
    }
    .card .card-body .d-flex p {
        color: black;
    }

    .accordion-button:not(.collapsed) {
        color: #000000!important;
        font-weight: 600!important;
        font-size: 20px!important;
    }
    .accordion-button:is(.collapsed) {
        color: #000000!important;
        font-weight: 600!important;
        font-size: 20px!important;
        background-color: rgba(94,163,203,.05);
    }

    #panelsStayOpen-collapseTwo label{
        color: black!important;
        font-weight: 600!important;
        font-size: 14px!important;
        text-transform: capitalize!important;
    }

    .live-preview  label {
        color: black!important;
        font-weight: 600!important;
        font-size: 14px!important;
        text-transform: capitalize!important;
    }

    .card-aggrement h6{
        font-size: 20px;
        text-align: center;
        padding: 10px 0;
        background-color: #f7f7f7;
        color: #283891;
        text-transform: uppercase;
    }
    #signature {
        width:auto;
        box-shadow: 0 0 5px 1px #ddd inset;
        border:dashed 2px #53777A;

        margin:0;
        text-align:center;
        min-height:80px;
        min-width:340px;
        transition:.2s;
    }
    #signature_capture {
        width:100%;
        height:7em;

    }
    .form-group canvas {
        border: none;
        border-bottom: 1px solid #cccccc;
        background-color: #f7f7f7;
    }

    .det th{
        font-size: 12px;
        background-color: rgba(40, 56, 145, .05);


    }

    .trm-box {
        background-color: #f7f7f7;
    }
    .five span{
        color: #283891!important;
        display: block;
        font-weight: 600!important;
    }

    .five .term li{
        margin-top:10px;
        font-family: 'metro-r';
    }

    .list-unstyled li{
        margin-bottom: 10px;
    }
</style>


<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body checkout-tab">
                            <form action="#">
                                <div class="step-arrow-nav mt-n3 mx-n3 mb-3">
                                    <div id="wizard">
                                        <!-- SECTION 1 -->

                                        <h4><i class="las la-check-circle"></i> Cars</h4>
                                        <section class="third">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <!-- Search box & heading -->
                                                            <div class="row" style="align-items: center">
                                                                <div class="col-md-12">
                                                                    <input list="cars" id="searchCar" class="form-control" placeholder="Search Vehicle" onchange="search_car()" onkeyup="search_car()">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">

                                                            <div id="show_cars">
                                                                @if(!empty($all_vehicles))
                                                                    <div class="row">
                                                                        @foreach ($all_vehicles as $k=>$d)
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
                                                                                                    <input class="dot" type="radio" name="shab_car" data-name="<?=$d['brand']?>" <?= ($k==0) ? "checked" : "" ?> value="<?=$d['id']?>" id="option-<?=$d['id']?>" >
                                                                                                    <span>Add To RTO</span>
                                                                                                </label>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                @endif
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section> <!-- SECTION 4 -->

                                        <!-- SECTION 4 -->
                                        <h4><i class="las la-check-circle"></i> Customer</h4>
                                        <section class="four">
                                            <div class="row">
                                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                            <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#panelsStayOpen-collapseOne"
                                                                    aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                                Customer Information
                                                            </button>
                                                        </h2>
                                                        <div id="panelsStayOpen-collapseOne">
                                                            <div class="accordion-body">
                                                                <div class="row mb-4" style="align-items: center">
                                                                    <div class="col-md-9" id="all_customer_dropdown">
                                                                        <select name="customer" class="form-control">
                                                                            <option value="" hidden>Select Customer</option>
                                                                            @if(!empty($all_customer))
                                                                                @foreach($all_customer as $c)
                                                                                    <option value="{{$c['id']}}">{{$c['name']}}</option>
                                                                                @endforeach
                                                                            @endif
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createcustomer" style="color:white!important;width: 100%;" >
                                                                            or create new
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <style>
                                            .tim .d-flex p{
                                                margin: 0;
                                            }

                                            .tim .d-flex{
                                                align-items: center;

                                            }
                                            .tim .card{
                                                padding: 0;
                                            }
                                            .tim .card-body{
                                                padding: 8px;
                                            }
                                            .tim input{
                                                padding: 4px!important;
                                            }
                                        </style>
                                        <h4><i class="las la-check-circle"></i>RTO Plan</h4>
                                        <section class="five tim" >
                                            <div class="row">
                                                <div class="col-md-8" style="margin: auto;">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4 class="card-title">RTO Installment Plan</h4>
                                                        </div>
                                                        <div class="card-body" style="padding: 2rem;">
                                                            <div class="d-flex justify-content-between">
                                                                <p>Name</p>
                                                                <p class="customer_name_here"></p>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <p>Served By</p>
                                                                <p>{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <p>Vehicle</p>
                                                                <p class="vehicle_name_here"></p>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <p>Purchase Price</p>
                                                                        <input type="number" onfocusout="calculator()" value="0" name="customer_purchase_price" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <p>Less Deposit</p>
                                                                        <input type="number" name="less_deposite" value="0"  onfocusout="calculator()" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <p>Balance</p>
                                                                        <p class="balance">0</p>
                                                                    </div>
                                                                </div>
                                                            </div>




                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <p>RideShare & DPTI Fees
                                                                        </p>
                                                                        <input type="number" onfocusout="calculator()" class="rideshare_dpti_fees" name="rideshare_dpti_fees" value="0" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-body">

                                                                    <div class="d-flex justify-content-between">
                                                                        <p>Miscellaneous Fees</p>
                                                                        <input type="number" onfocusout="calculator()" name="miscellaneous_fees" class="miscellaneous_fees" value="0" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <p>Final Balance</p>
                                                                        <p class="finalBalance">0</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <p>Interest Year 1</p>
                                                                        <p class="one_year_investment">0</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <p>Interest Year 2</p>
                                                                        <p class="two_year_investment">0</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <p>Interest Year 3</p>
                                                                        <p class="three_year_investment">0</p>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th>Weekly</th>
                                                                    <th>Fornightly</th>
                                                                    <th>Monthly</th>

                                                                </tr>
                                                                </thead>
                                                                <tbody>

                                                                <tr>
                                                                    <td>Weekly Amount For 1 Year</td>
                                                                    <td class="weekly_amount_for_one_year">0.00</td>
                                                                    <td class="weekly_fornightly_amount_for_one_year">0.00</td>
                                                                    <td class="weekly_monthly_amount_for_one_year">0.00</td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Weekly Amount For 2 Year</td>
                                                                    <td class="weekly_amount_for_two_year">0.00</td>
                                                                    <td class="weekly_fornightly_amount_for_two_year">0.00</td>
                                                                    <td class="weekly_monthly_amount_for_two_year">0.00</td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Weekly Amount For 3 Year</td>
                                                                    <td class="weekly_amount_for_three_year">0.00</td>
                                                                    <td class="weekly_fornightly_amount_for_three_year">0.00</td>
                                                                    <td class="weekly_monthly_amount_for_three_year">0.00</td>

                                                                </tr>
                                                                </tbody>
                                                            </table>


                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <p>Insurance Per Week</p>
                                                                        <input type="number" onfocusout="calculator()" value="0" name="insurance_per_week" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-body">

                                                                    <div class="d-flex justify-content-between">
                                                                        <p>Excess Drivers Over 25 is $950</p>
                                                                        <input type="text" name="access_driver_over_25" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <p>Excess Drivers Under 25 is $1350</p>
                                                                        <input type="text" name="access_driver_under_25" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-body">

                                                                    <div class="d-flex justify-content-between">
                                                                        <p>Unlisted Driver Additional $1400</p>
                                                                        <input type="text" name="unlisted_driver" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th>Weekly</th>
                                                                    <th>Fornightly</th>
                                                                    <th>Monthly</th>

                                                                </tr>
                                                                </thead>
                                                                <tbody>

                                                                <tr>
                                                                    <td>Weekly Amount With Insurance For 1 Year</td>
                                                                    <td class="weekly_amount_with_insurance_for_one_year">0.00</td>
                                                                    <td class="weekly_fornightly_amount_with_insurance_for_one_year">0.00</td>
                                                                    <td class="weekly_monthly_amount_with_insurance_for_one_year">0.00</td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Weekly Amount With Insurance For 2 Year</td>
                                                                    <td class="weekly_amount_with_insurance_for_two_year">0.00</td>
                                                                    <td class="weekly_fornightly_amount_with_insurance_for_two_year">0.00</td>
                                                                    <td class="weekly_monthly_amount_with_insurance_for_two_year">0.00</td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Weekly Amount With Insurance For 3 Year</td>
                                                                    <td class="weekly_amount_with_insurance_for_three_year">0.00</td>
                                                                    <td class="weekly_fornightly_amount_with_insurance_for_three_year">0.00</td>
                                                                    <td class="weekly_monthly_amount_with_insurance_for_three_year">0.00</td>

                                                                </tr>
                                                                </tbody>
                                                            </table>

                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th>Weekly</th>
                                                                    <th>Fornightly</th>
                                                                    <th>Monthly</th>

                                                                </tr>
                                                                </thead>
                                                                <tbody>

                                                                <tr>
                                                                    <td>WEEKLY AMOUNT DIRECT DEBT FEE 1.5% 1 YEAR</td>
                                                                    <td class="weekly_amount_direct_debt_fee_one_year">0.00</td>
                                                                    <td class="weekly_fornighly_amount_direct_debt_fee_one_year">0.00</td>
                                                                    <td class="weekly_monthly_amount_direct_debt_fee_one_year">0.00</td>

                                                                </tr>
                                                                <tr>
                                                                    <td>WEEKLY AMOUNT DIRECT DEBT FEE 1.5% 2 YEAR</td>
                                                                    <td class="weekly_amount_direct_debt_fee_two_year">0.00</td>
                                                                    <td class="weekly_fornighly_amount_direct_debt_fee_two_year">0.00</td>
                                                                    <td class="weekly_monthly_amount_direct_debt_fee_two_year">0.00</td>

                                                                </tr>
                                                                <tr>
                                                                    <td>WEEKLY AMOUNT DIRECT DEBT FEE 1.5% 3 YEAR</td>
                                                                    <td class="weekly_amount_direct_debt_fee_three_year">0.00</td>
                                                                    <td class="weekly_fornighly_amount_direct_debt_fee_three_year">0.00</td>
                                                                    <td class="weekly_monthly_amount_direct_debt_fee_three_year">0.00</td>

                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <h4><i class="las la-check-circle"></i> Agreement</h4>
                                        <section class="five" style="font-family: 'metro-r';">
                                            <div>
                                                <div class="card ">
                                                    <div class="card-header">
                                                        <div class="d-flex justify-content-between header-aggrement-main-div">
                                                            <div class="img-agreement">
                                                                <img src="{{url('assets')}}/images/Simba_Final_webPNG.png" alt="" height="60">
                                                            </div>
                                                            <div>

                                                                <h4>CAR SALE CONTRACT</h4>
                                                            </div>
                                                            <div class="agrement-header">
                                                                <h5 class="m-0">SIMBA CAR HIRE PTY LTD</h5>
                                                                <br>

                                                                <!-- <p class="m-0">AR HIRE PTY LTD
                                                            ABN: 87635707229</p> -->
                                                                <p class="m-0">Office 4/937 Marion Road<br>Mitchell Park, South
                                                                    Australia 5043 <br> Australia</p>
                                                                <br>
                                                                <p class="m-0">PHONE: 08 8312 4616 / MOBILE: 0459 434 800</p>
                                                                <a href="admin@simbacarhire.com.au ">EMAIL:
                                                                    admin@simbacarhire.com.au </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body card-aggrement" style="background:#fbfbfb;">
                                                        <div>
                                                            <ol>
                                                                <li>This form states the terms and conditions of sale of the
                                                                    below
                                                                    mentioned vehicle</li>
                                                                <br>
                                                                <li>The buyer is advised to take pictures of the seller’s
                                                                    vehicle as
                                                                    a proof of condition at the time of collection. The buyer
                                                                    waives any cooling off period.
                                                                </li>
                                                                <br>
                                                                <li>Legal title of the vehicle will pass to the buyer only once
                                                                    full
                                                                    payment is made</li>
                                                            </ol>
                                                            <p>Date:<input name="sale_date" type="date" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;"></p>
                                                        </div>
                                                        <div>
                                                            <h6>BUYER DETAILS</h6>
                                                            <div id="show_customer_info">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <p>Name: <span></span> </p>
                                                                        <p>Email Address: <span></span> </p>


                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <p>Date of Birth: <span></span> </p>
                                                                        <p>Contact Number: <span></span> </p>


                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <p>Licence Expiry: <span></span> </p>
                                                                        <p>Reference: <span></span> </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <h6>SELLER DETAILS</h6>

                                                            <div class="d-flex" style="justify-content:space-between">
                                                                <div >
                                                                    <p>Name: <span>Simba Car Hire Pty Ltd</span> </p>
                                                                </div>
                                                                <div >
                                                                    <p>Address: <span> U4/937 MARION ROAD, MITCHELL PARK SA 5043</span>
                                                                    </p>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div>
                                                            <h6>DETAILS OF VEHICLE</h6>
                                                            <div id="show_vehicle_info"></div>
                                                        </div>
                                                        <div>
                                                            <h6>Additional Notes</h6>
                                                            <textarea name="notes" id="notes" cols="30" rows="10" class="form-control" placeholder="Notes.."></textarea>
                                                        </div>
                                                        <div class="d-flex justify-content-between mt-5" style="align-items:center;">
                                                            <p>Buyer's Name:<input type="text" class="form-control" ></p>
                                                            <div class="form-group">
                                                                <label>Buyer's Signature</label>
                                                                <canvas id="e-sig0" class="e-sig">
                                                                    Get a better browser, bro.
                                                                </canvas>
                                                                <div class="btn-group">
                                                                    <button style="visibility: hidden" class="btn btn-primary" id="sig-submitBtn0">Submit Signature</button>
                                                                    <button class="btn btn-default" id="sig-clearBtn0">Clear Signature</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <p>I,<input type="text" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;">, hereby agree to buy
                                                                from the seller (Simba Car Hire Pty Ltd). The
                                                                above-mentioned vehicle in its current condition for the sum of
                                                                $ <input type="number" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;">.
                                                            </p>
                                                            <p>In addition to this contract the seller and the buyer go into an
                                                                agreement whereby the buyer will pay the purchase price of
                                                                the vehicle in instalments. Details of this agreement are stated
                                                                below. </p>
                                                        </div>
                                                        <div>
                                                            <table class="table">
                                                                <tr class="text-start">
                                                                    <td>Purchase Price Including GST
                                                                    </td>
                                                                    <td>$2000</td>
                                                                </tr>
                                                                <tr class="text-start">
                                                                    <td>Less deposit (Non-refundable Item)
                                                                    </td>
                                                                    <td>seat</td>
                                                                </tr>
                                                                <tr class="text-start">
                                                                    <td>Balance Remaining
                                                                    </td>
                                                                    <td>$200</td>
                                                                </tr>
                                                                <tr class="text-start">
                                                                    <td>Add Fees and charges (REGO, FUEL, MISC) ( Non-refundable
                                                                        item)
                                                                    </td>
                                                                    <td>$300</td>
                                                                </tr>
                                                                <tr class="text-start">
                                                                    <td>Total Amount
                                                                    </td>
                                                                    <td>$70000</td>
                                                                </tr>
                                                                <tr class="text-start">
                                                                    <td>Amount per week</td>
                                                                    <td>$400</td>
                                                                </tr>
                                                                <tr class="text-start">
                                                                    <td>A. Maintenance cost per week (refundable item)
                                                                    </td>
                                                                    <td>$350</td>
                                                                </tr>
                                                                <tr class="text-start">
                                                                    <td>B. Insurance Cost per week (refundable item)
                                                                    </td>
                                                                    <td>$200</td>
                                                                </tr>
                                                                <tr class="text-start">
                                                                    <td>C. Registration Cost per week (refundable item)</td>
                                                                    <td>$100</td>
                                                                </tr>
                                                                <tr class="text-start">
                                                                    <td>Interest if applicable. 1 year 2 year 3 year</td>
                                                                    <td>$80</td>
                                                                </tr>
                                                                <tr class="text-start">
                                                                    <td>Total Amount</td>
                                                                    <td>$85000</td>
                                                                </tr>
                                                                <tr class="text-start">
                                                                    <td>Total amount per week inc GST
                                                                    </td>
                                                                    <td>$400</td>
                                                                </tr>
                                                                <tr class="text-start">
                                                                    <td>Total amount including 1.5% direct debit fee inc GST
                                                                    </td>
                                                                    <td>$40</td>
                                                                </tr>
                                                                <tr class="text-start">
                                                                    <td>Balloon Payment at the end of<input type="text" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;"> weeks
                                                                    </td>
                                                                    <td>$480</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    Uber inspection per year subject to change:
                                                                </div>
                                                                <div class="col-md-8">$103 (RAA) $85 (RIGHTWAY)
                                                                </div>
                                                                <div class="col-md-4">
                                                                    Rideshare Fees:
                                                                </div>
                                                                <div class="col-md-8">As per Rideshare fees
                                                                </div>
                                                                <div class="col-md-4">
                                                                    Rideshare Registration Upgrade:
                                                                </div>
                                                                <div class="col-md-8">As per government fees

                                                                </div>
                                                                <div class="col-md-4">
                                                                    Administration cost when due:
                                                                </div>
                                                                <div class="col-md-8">$110 inc GST (Anytime when Simba Car hire
                                                                    representative
                                                                    is required to undertake any administration request)

                                                                </div>
                                                                <div class="col-md-4">
                                                                    Internal mechanic inspection:
                                                                </div>
                                                                <div class="col-md-8">$85 inc GST
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between mt-5" style="align-items:center;">
                                                            <p>Buyer's Name:<input type="text" class="form-control" ></p>

                                                            <div class="form-group">
                                                                <label>Buyer's Signature</label>
                                                                <canvas id="e-sig0" class="e-sig">
                                                                    Get a better browser, bro.
                                                                </canvas>
                                                                <div class="btn-group">
                                                                    <button style="visibility: hidden" class="btn btn-primary" id="sig-submitBtn0">Submit Signature</button>
                                                                    <button class="btn btn-default" id="sig-clearBtn0">Clear Signature</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="trm-box">
                                                            <h6 class="text-center">TERMS AND CONDITIONS OF THE INSTALMENT
                                                                AGREEMENT</h6>
                                                            <ol class="term license-card" style="box-shadow:none!important;">
                                                                <li>Buyer can pay out the vehicle price at any stage during the
                                                                    <input type="text" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;">weeks.</li>
                                                                <li>This agreement is interest free / interest applicable and
                                                                    should not be taken as finance agreement. Simba Car hire
                                                                    agrees that if the buyer wants to pay out the vehicle before
                                                                    the end of the settlement date, the buyer will only incur
                                                                    interest charges for the nearest 1 year as outlined in the
                                                                    purchase price table.</li>
                                                                <li>Terms of Settlement is <input type="text" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;">weeks.</li>
                                                                <li>Buyer authorises Simba Car Hire to direct debit the weekly
                                                                    amount plus 1.5% direct debit fee (Using Gocardless
                                                                    company to direct debit) from the nominated bank account
                                                                    details herewith for<input type="text" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;">weeks.<br>
                                                                    <table class="table">
                                                                        <tr>
                                                                            <td>Name of Bank:</td>
                                                                            <td>Account Holder Name:</td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td>BSB: </td>
                                                                            <td>Account Number:
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Card Number:</td>
                                                                            <td>Exp: </td>
                                                                            <td>CVN:</td>
                                                                        </tr>
                                                                    </table>
                                                                </li>
                                                                <li>All Expenses are paid by the buyer such as Registration,
                                                                    Maintenance, and Insurance. $20 Admin Fee for fines and
                                                                    toll. Alternatively, the buyer will pay <input type="text" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;"> and
                                                                    <input type="text" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;"> and <input type="text" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;">.</li>
                                                                <li>Simba car hire is the legal owner of the vehicle prescribed
                                                                    in this agreement. Title shall be released once full payment
                                                                    has been received. At the completion of this agreement Simba
                                                                    Car Hire will issue the registration certificate to the
                                                                    buyer</li>
                                                                <li>Buyer will need to pay the stamp duty to transfer vehicle
                                                                    ownership into the buyer’s name at the completion of this
                                                                    agreement.</li>
                                                                <li> In the event of Total Loss of the vehicle Simba Car Hire
                                                                    Will refund a minimum amount of $ <input type="number" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;"> and
                                                                    the maximum amount to be the payout amount less the balance
                                                                    of the purchase price of the vehicle. Or Replacement
                                                                    of Old car with new car (Like for like) subject to insurance
                                                                    decision.</li>
                                                                <li><input type="text" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;"> week in advance paid and the first direct debit to
                                                                    start on <input type="text" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;">
                                                                </li>
                                                                <li> Start Date: <input type="date" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;"> End Date:
                                                                    <input type="date" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;">
                                                                </li>
                                                                <li>Insurance excess is: $
                                                                </li>
                                                                <li>Insurance is subject to change. In the event of an accident
                                                                    the insurance maybe be increased.</li>
                                                                <li> As stated in the purchase price table, the deposit and all
                                                                    charges incurred is strictly non-refundable and as we are
                                                                    entering into this contract on the basis that the buyer is
                                                                    committing to buying the vehicle under instalment therefore
                                                                    the buyer agrees to any cooling off period to be waived</li>
                                                                <li>At the end of the agreement, the buyer will receive the
                                                                    spare car keys and signed registration papers for the buyer
                                                                    to
                                                                    transfer under their name.</li>
                                                                <li>In the instance where there are 3 failed payments
                                                                    consecutively Simba Car Hire PTY LTD reserves the right to
                                                                    recover the vehicle. We also reserve the right to report the
                                                                    vehicle to the police and appoint debt collectors to recover
                                                                    the vehicle. Recovery Cost will include recovery fee and
                                                                    interest of 2%.</li>
                                                                <li>This agreement is bound by consumer rights which protects
                                                                    both the buyer and the seller.</li>
                                                                <li>The Corporations Act 2001 determines the order in which the
                                                                    external administrator has to repay money owed by a
                                                                    company to certain creditors. Consumers will generally be
                                                                    ordinary unsecured creditors and will only be paid after
                                                                    monies owing to other classes of creditors, such as
                                                                    employees and shareholders, have been repaid.</li>
                                                                <li>Simba Car hire does not represent any rideshare platforms.
                                                                </li>
                                                                <li>Simba Car hire is not responsible for any changes made by
                                                                    the rideshare platforms in relation to vehicles or any such
                                                                    matters arising during the installment period.</li>
                                                                <li>If the buyer is not able to complete and or pay the minimum
                                                                    cost during the installment period, Simba Car hire will
                                                                    demand return of the vehicle and all payments made by the
                                                                    buyer including any deposit will be treated as a rental fee
                                                                    and there will be no refunds whatsoever for payments made.
                                                                </li>
                                                                <li>Despite our ownership in the vehicle, the buyer bears the
                                                                    entire risk of loss arising in connection with the
                                                                    possession,
                                                                    use, storage, maintenance, seizure and repair of the
                                                                    Vehicle. (This includes loss arising because of theft,
                                                                    destruction,
                                                                    or damage and loss arising out of claims of injury.)</li>
                                                                <li>The buyer must not change the place where the vehicle is
                                                                    housed without the seller’s prior written consent, which
                                                                    will
                                                                    not be unreasonably withheld.</li>
                                                                <li>The buyer must use the vehicle for the purpose for which it
                                                                    is designed. The buyer must ensure that the vehicle is
                                                                    used in accordance with the supplier’s and manufacturer’s
                                                                    instructions and recommendations, in compliance with all
                                                                    laws that apply to the Vehicle or its use.</li>
                                                                <li>The buyer must take proper care of the vehicle and keep it
                                                                    in good working order and good repair.</li>
                                                                <li>The buyer must ensure that the vehicle is maintained in
                                                                    accordance with the supplier’s specifications and our or any
                                                                    insurer’s reasonable requirements. The buyer must do all
                                                                    things to maintain the supplier’s and manufacturer’s
                                                                    warranties</li>
                                                                <li>The buyer must keep all maintenance records and all other
                                                                    records relating to the inspection, commissioning or
                                                                    alteration of the vehicle and make those records available
                                                                    upon request.</li>
                                                                <li>The buyer must not withhold any payment under this
                                                                    agreement, or make any deduction from it for any reason
                                                                    including, because: <ul class="list-unstyled">
                                                                        <li>(a) The vehicle is damaged, does not operate
                                                                            efficiently or at all, does not confirm to
                                                                            specifications or is not in the
                                                                            buyer’s possession; or </li>
                                                                        <li>(b) The buyer claims to have a set-off,
                                                                            counterclaim, or other right against the seller or
                                                                            any other person.</li>
                                                                    </ul>
                                                                </li>
                                                                <li>The buyer indemnifies the seller against any loss or
                                                                    liability arising from and any reasonable costs (including
                                                                    on
                                                                    account of funds borrowed, contracted for or used to fund
                                                                    any amount payable by the seller in connection with the
                                                                    seller’s purchase of the vehicle or this agreement and legal
                                                                    fees and expenses) reasonably incurred in connection with:
                                                                    <ul class="list-unstyled">
                                                                        <li>(c) Simba Car hire exercising a right under this
                                                                            agreement; or</li>
                                                                        <li>(d) Simba Car hire doing anything the buyer should
                                                                            have done under the agreement; or</li>
                                                                        <li>(e) The buyer not doing what the buyer should have
                                                                            done under the agreement; or</li>
                                                                        <li>(f) Simba Car hire having to seize or store the
                                                                            Vehicle; or</li>
                                                                        <li>(g) A person being injured or killed, or property
                                                                            being damaged directly or indirectly by the vehicle
                                                                            or its use; or</li>
                                                                        <li>Any proceedings or prosecutions commenced against
                                                                            Simba Car hire or any fine or penalty imposed on
                                                                            Simba
                                                                            Car hire under occupational health and safety
                                                                            legislation in relation to the vehicle or its use.
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ol>
                                                        </div>
                                                        <div class="d-flex justify-content-between mt-5" style="align-items:center;">
                                                            <p>Buyer's Name:
                                                                <input type="text" name="" class="form-control" id="">
                                                            </p>
                                                            <div class="form-group">
                                                                <label>Buyer's Signature</label>
                                                                <canvas id="e-sig0" class="e-sig">
                                                                    Get a better browser, bro.
                                                                </canvas>
                                                                <div class="btn-group">
                                                                    <button style="visibility: hidden" class="btn btn-primary" id="sig-submitBtn0">Submit Signature</button>
                                                                    <button class="btn btn-default" id="sig-clearBtn0">Clear Signature</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <h4 class="text-center">MANDATORY INSURANCE QUESTIONS</h4>
                                                            <h5>Please answer the following insurance related questions with YES
                                                                or NO. If any of your
                                                                answers are YES, please give explanation and details.</h5>
                                                            <p> 1. In the last 3 years has the main driver had any car related
                                                                claims, driver license suspensions, cancellations,
                                                                disqualifications, or restrictions? <input type="text" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;">
                                                            </p>
                                                            <p> 2. In the last 3 years, have you or anyone to be insured under
                                                                this policy had an insurance policy declined or
                                                                cancelled, a renewal declined, special terms imposed, or had a
                                                                claim refused? <input type="text" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;">
                                                            </p>
                                                            <p> 3. In the last 3 years, have you or anyone to be insured under
                                                                this policy committed any criminal act in
                                                                relation to fraud, theft, burglary, drugs, arson, criminal
                                                                damage, malicious damage, or willful damage?
                                                                <input type="text" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;"></p>
                                                            <p>I, <input type="text" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;"> hereby affirm that I
                                                                have answered the above questions
                                                                truthfully.</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between mt-4" style="align-items:center;">
                                                            <div>

                                                                <div class="form-group">
                                                                    <label>Insured’s Signature:</label>
                                                                    <canvas id="e-sig0" class="e-sig">
                                                                        Get a better browser, bro.
                                                                    </canvas>
                                                                    <div class="btn-group">
                                                                        <button style="visibility: hidden" class="btn btn-primary" id="sig-submitBtn0">Submit Signature</button>
                                                                        <button class="btn btn-default" id="sig-clearBtn0">Clear Signature</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <p>Date:<input type="date" style="background-color: #e5e9ff !important;border-radius: 3px !important;border: 2px solid #9999 !important;color: #666666 !important;padding: 10px;"></p>
                                                            </div>
                                                        </div>

                                                        <div class="text-center">
                                                            <h6>SIMBA CAR HIRE PTY LTD</h6>
                                                            <p class="m-0">Office 4/937 Marion Road, Mitchell Park, South
                                                                Australia 5043
                                                                Australia
                                                            </p>
                                                            <div class="d-flex justify-content-center">
                                                                <div style="margin-left:6px;">
                                                                    <p class="m-0">PH 08 8312 4616</p>
                                                                </div>
                                                                <div style="margin-left:6px;">
                                                                    <a href="admin@simbacarhire.com.au"><span style="color:black;">E</span>
                                                                        admin@simbacarhire.com.au</a>
                                                                </div>
                                                                <div style="margin-left:6px;">
                                                                    <p class="m-0">ABN 87635707229</p>
                                                                </div>
                                                            </div>
                                                            <p><a href="www.simbacarhire.com.au">www.simbacarhire.com.au</a></p>
                                                        </div>

                                                    </div>
                                                    <div class="card-footer d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <input type="checkbox" id="licenseCheck">
                                                            <label for="licenseCheck">Agree with all terms & conditions</label>
                                                        </div>
                                                        <div>
                                                            <!-- <button type="button" class="btn btn-primary" disabled>Email</button>
                                                            <button type="button" class="btn btn-primary" disabled>Print</button>
                                                            <button type="button" class="btn btn-primary" disabled>Next</button> -->
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </section> <!-- SECTION 5 -->
                                        <h4><i class="las la-check-circle"></i> Payment</h4>
                                        <section class="six">
                                            <div class="d-flex" style="justify-content: space-between">
                                                <div>
                                                    <h5 class="mb-1">Payment Selection</h5>
                                                    <p class="text-muted mb-4">Please select and enter your billing
                                                        information
                                                    </p>
                                                </div>
                                                <div>
                                                    <h6>Total Charges: $500</h6>
                                                </div>
                                            </div>

                                            <div class="row g-4">

                                                <div class="col-lg-6 col-sm-6">
                                                    <div data-bs-toggle="collapse" data-bs-target="#paymentmethodCollapse" aria-expanded="true" aria-controls="paymentmethodCollapse" onclick="showHideTab()">
                                                        <div class="form-check card-radio">
                                                            <input id="paymentMethod02" name="paymentMethod" type="radio" class="form-check-input">
                                                            <label class="form-check-label" for="paymentMethod02">
                                                                <span class="fs-16 text-muted me-2"><i class="ri-bank-card-fill align-bottom"></i></span>
                                                                <span class="fs-15 text-wrap">Credit / Debit Card</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-sm-6">
                                                    <div data-bs-toggle="collapse" data-bs-target="#paymentMethod03" aria-expanded="false" aria-controls="paymentMethod03" onclick="showHideTab02()">
                                                        <div class="form-check card-radio">
                                                            <input id="method03" name="paymentMethod" type="radio" class="form-check-input">
                                                            <label class="form-check-label" for="method03">
                                                                <span class="fs-16 text-muted me-2"><i class="ri-money-dollar-box-fill align-bottom"></i></span>
                                                                <span class="fs-15 text-wrap">Cash In Store</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="collapse " id="paymentmethodCollapse">
                                                <div class="card p-4 border shadow-none mb-0 mt-4">
                                                    <div class="row gy-3">
                                                        <div class="col-md-12">
                                                            <label for="cc-name" class="form-label">Name on card</label>
                                                            <input type="text" class="form-control" id="cc-name" placeholder="Enter name">
                                                            <small class="text-muted">Full name as displayed on card</small>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label for="cc-number" class="form-label">Credit card
                                                                number</label>
                                                            <input type="text" class="form-control" id="cc-number" placeholder="xxxx xxxx xxxx xxxx">
                                                        </div>

                                                        <div class="col-md-3">
                                                            <label for="cc-expiration" class="form-label">Expiration</label>
                                                            <input type="text" class="form-control" id="cc-expiration" placeholder="MM/YY">
                                                        </div>

                                                        <div class="col-md-3">
                                                            <label for="cc-cvv" class="form-label">CVV</label>
                                                            <input type="text" class="form-control" id="cc-cvv" placeholder="xxx">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-muted mt-2 fst-italic">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock text-muted icon-xs">
                                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                                    </svg> Your transaction is secured with SSL encryption
                                                </div>
                                            </div>
                                            <div class="collapse" id="paymentMethod03">
                                                <div class="card p-4 border shadow-none mb-0 mt-4">
                                                    <div class="row gy-3">
                                                        <div class="col-md-12">
                                                            <label for="cc-name" class="form-label">Amount</label>
                                                            <input type="text" class="form-control" id="cc-name" placeholder="Enter Amount $">
                                                            <small class="text-muted">Enter Rental Amount Total</small>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>

                                            <div class="d-flex justify-content-end gap-3 mt-4">
                                                <!-- <button type="button" class="btn btn-light btn-label previestab"
                                                            data-previous="pills-bill-dates-tab"><i
                                                                class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>Back
                                                            to Shipping</button>
                                                        <button type="button"
                                                            class="btn btn-primary btn-label right ms-auto nexttab"
                                                            data-nexttab="pills-payment-tab"><i
                                                                class="ri-shopping-basket-line label-icon align-middle fs-16 ms-2"></i>Complete
                                                            Order</button> -->
                                                <div class="btn-group mt-4">
                                                    <button type="button" class="btn btn-primary">Charge Card</button>
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">View
                                                        Invoice</button>
                                                </div>





                                                <!-- Modal -->
                                                <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg card">
                                                        <div class="modal-content">
                                                            <div class="modal-header card-header">
                                                                <h3 class="modal-title" id="staticBackdropLabel">Invoice
                                                                </h3>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body card-body">
                                                                <div>
                                                                    <div>
                                                                        <div class="row invo-header">
                                                                            <div class="col-sm-6">
                                                                                <div class="media">
                                                                                    <div class="media-left">
                                                                                        <!-- <a href="#"><img
                                                                                                        class="media-object img-60"
                                                                                                        src="../assets/images/logo/logo-1.png"
                                                                                                        alt=""></a> -->
                                                                                    </div>
                                                                                    <div class="media-body m-l-20">
                                                                                        <h4 class="media-heading f-w-600">
                                                                                            Walter White</h4>
                                                                                        <p>
                                                                                            walterWhite@gmail.com<br>
                                                                                            <span class="digits">Sydney
                                                                                                Branch</span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- End Info-->
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-md-end text-xs-center">
                                                                                    <h3>Invoice #<span class="digits counter">0420</span>
                                                                                    </h3>
                                                                                    <p>
                                                                                        Issued: May<span class="digits"> 27,
                                                                                            2022</span><br>
                                                                                        Payment Due: June <span class="digits">27, 2021</span>
                                                                                    </p>
                                                                                </div>
                                                                                <!-- End Title                                 -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End InvoiceTop-->

                                                                    <!-- End Invoice Mid-->
                                                                    <div>
                                                                        <div class="table-responsive invoice-table" id="table">
                                                                            <table class="table table-bordered table-striped">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <h6 class="p-2 mb-0">Car
                                                                                            Description</h6>
                                                                                    </td>

                                                                                    <td>
                                                                                        <h6 class="p-2 mb-0">Rate
                                                                                        </h6>
                                                                                    </td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>
                                                                                        <label>Car Name</label>
                                                                                        <p class="m-0">Lorem Ipsum is
                                                                                            simply dummy text of the
                                                                                            printing and typesetting
                                                                                            industry.</p>
                                                                                    </td>


                                                                                    <td>
                                                                                        <p>
                                                                                            AU$500.00</p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <label>Car Name</label>
                                                                                        <p class="m-0">Lorem Ipsum is
                                                                                            simply dummy text of the
                                                                                            printing and typesetting
                                                                                            industry.</p>
                                                                                    </td>

                                                                                    <td>
                                                                                        <p>
                                                                                            AU$500.00</p>
                                                                                    </td>
                                                                                </tr>

                                                                                <tr>

                                                                                    <td>
                                                                                        <h6 class="mb-0 p-2">Grand Total
                                                                                        </h6>
                                                                                    </td>
                                                                                    <td>
                                                                                        <h6 class="mb-0 p-2">AU$1,000.00
                                                                                        </h6>
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <!-- End Table-->

                                                                    </div>
                                                                    <!-- End InvoiceBot-->
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer card-footer">
                                                                <div class="btn-group mt-4">
                                                                    <button type="button" class="btn btn-primary">Print</button>
                                                                    <button type="button" class="btn btn-primary">Send
                                                                        Email</button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section> <!-- SECTION 6 -->
                                        <h4><i class="las la-check-circle"></i> Insurance</h4>
                                        <section class="seven">
                                            <div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="pickupdate" class="form-label">Start
                                                            Date</label>
                                                        <input type="date" class="form-control" id="pickupdate">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="pickupdate" class="form-label">End
                                                            Date</label>
                                                        <input type="date" class="form-control" id="pickupdate">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="pickupdate" class="form-label">Upload
                                                            Insurance File</label>
                                                        <input type="file" class="form-control" id="pickupdate">
                                                    </div>
                                                </div>
                                            </div>
                                        </section> <!-- SECTION 8 -->
                                        <h4><i class="las la-check-circle"></i> Confirm</h4>
                                        <section class="eight">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Summary</h4>
                                                </div>
                                                <div class="card ribbon-box border shadow-none mb-lg-0">
                                                    <div class="card-body">
                                                        <div class="ribbon ribbon-primary round-shape">Customer Info</div>


                                                        <div class="ribbon-content mt-4 text-muted">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="name">Customer Name: </label>
                                                                    <p>Walter White</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="email">Customer Email: </label>
                                                                    <p>walterWhite@gmail.com</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="invoice">Phone No: </label>
                                                                    <p>04204545455</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="b-name">Country: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">City: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">State: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">Zip: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">Street: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">Driving Licernse #: </label>
                                                                    <p>1410900</p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="card ribbon-box border shadow-none mb-lg-0">
                                                    <div class="card-body">
                                                        <div class="ribbon ribbon-primary round-shape">Vehicle</div>
                                                        <div class="ribbon-content mt-4 text-muted">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="name">Vehicle Brand: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="email">Vehicle Model: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="invoice">Vehicle Type: </label>
                                                                    <p>xyz</p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card ribbon-box border shadow-none mb-lg-0">
                                                    <div class="card-body">
                                                        <div class="ribbon ribbon-primary round-shape">Payment</div>
                                                        <div class="ribbon-content mt-4 text-muted">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="name">Payment Type: </label>
                                                                    <p>Credit Card</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="email">Payment Package: </label>
                                                                    <p>Weekly</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="invoice">Payment Total: </label>
                                                                    <p>$2000</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="b-name">Payment Paid: </label>
                                                                    <p>$500</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">Payment Remaining: </label>
                                                                    <p>$1500</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">Payment Invoice No: </label>
                                                                    <p>#33445</p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card ribbon-box border shadow-none mb-lg-0">
                                                    <div class="card-body">
                                                        <div class="ribbon ribbon-primary round-shape">Insurance</div>
                                                        <div class="ribbon-content mt-4 text-muted">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="name">Start Date: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="email">End Date: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="invoice">Upload Insurance File: </label>
                                                                    <p>xyz</p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card ribbon-box border shadow-none mb-lg-0">
                                                    <div class="card-body">
                                                        <div class="ribbon ribbon-primary round-shape">RTO Plan</div>
                                                        <div class="ribbon-content mt-4 text-muted">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="name">Name: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="email">Served By: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="invoice">Vehicle: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="b-name">Purchase Price: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">Less Deposit: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">Balance: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">RideShare &amp; DPTI Fees: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">Miscellenous Fees: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">Final Balance: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">Interest Year 1: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">Interest Year 2: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">Interest Year 3: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">Weekly Amount For 1 Year: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">Weekly Amount For 2 Year: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">Weekly Amount For 3 Year: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">Insurance Per Week: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">Excess Drivers Over 25 is $950: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">Excess Drivers Over 25 is $1350: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">Unlisted Driver Additional $1400: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">Unlisted Driver Under 25 Additional $2000: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">Weekly Amount With Insurance For 1 Year: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">Weekly Amount With Insurance 2 Year: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">Weekly Amount With Insurance For 3 Year: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">WEEKLY AMOUNT DIRECT DEBT FEE 1.5% 1 YEAR: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">WEEKLY AMOUNT DIRECT DEBT FEE 1.5% 2 YEAR: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="name">WEEKLY AMOUNT DIRECT DEBT FEE 1.5% 3 YEAR: </label>
                                                                    <p>xyz</p>
                                                                </div>
                                                                <table class="table">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Fornightly</th>
                                                                        <th>Monthly</th>

                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>0.00</td>
                                                                        <td>0.00</td>
                                                                        <td>1 year</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>0.00</td>
                                                                        <td>0.00</td>
                                                                        <td>2 year</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>0.00</td>
                                                                        <td>0.00</td>
                                                                        <td>3 year</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </section> <!-- SECTION 8 -->
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
    </div>
</div>



<script>
    $(document).ready(function() {
        $("#wizard").steps({
            headerTag: "h4",
            bodyTag: "section",
            transitionEffect: "fade",
            enableAllSteps: false,
            transitionEffectSpeed: 500,
            onStepChanging: function (event, currentIndex, newIndex) {
                if (newIndex == 2){
                    let customer_id =  $("[name='customer'] option:selected").val();
                    let customer =  $("[name='customer'] option:selected").html();
                    let vehicle =  $("[name='shab_car']:checked").attr('data-name');
                    $(".customer_name_here").html(customer)
                    $(".vehicle_name_here").html(vehicle)

                    //showing customer info in the agreement part
                    let _token  = '{{csrf_token()}}';
                    $.post("{{url('admin/rto/getAjaxData/customer')}}",{_token,customer_id},function (e){
                        $("#show_customer_info").html(e);
                        // $("#agreement_customer_details").html(e)
                    })
                    $.post("{{url('admin/rto/getAjaxData/vehicle')}}",{_token,customer_id},function (e){
                        $("#show_vehicle_info").html(e);
                        // $("#agreement_customer_details").html(e)
                    })
                }
                return true
            }
        })
    })
</script>
<script src="{{url('assets')}}/js/frm-wiz/dropify.js"></script>
<script src="{{url('assets')}}/js/frm-wiz/json2.min.js"></script>
<script src="{{url('assets')}}/js/frm-wiz/jquery.signaturepad.js"></script>
<script type="text/javascript" src="{{url('assets')}}/js/frm-wiz/jquery.nice-select.js"></script>
<script type="text/javascript" src="{{url('assets/js/frm-wiz/moment.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets')}}/js/frm-wiz/daterangepicker.js"></script>
<script type="text/javascript" src="{{url('assets')}}/js/frm-wiz/jquery.nice-select.js"></script>

<!-- Dropzone min -->
<script href="{{url('assets')}}/libs/dropzone/dropzone-min.js"></script>
<script>
    function showDriverName() {
        let catchSelectId = document.getElementById('driver');
        let driver = document.getElementById('driverBlock')
        if (catchSelectId.options[catchSelectId.selectedIndex].value == "with") {
            driver.style.display = 'inline-block';
        } else {
            driver.style.display = 'none';
        }
    }

    function search_car(){
        let car = $("#searchCar").val();
        if (car.length >0 && car !== ' '){
            let _token = "{{csrf_token()}}";
            $.post("{{route('admin.rto.getCar')}}",{_token,car},function (resp){
                let check = resp.trim();
                if(check.length==0){
                    $("#show_cars").html("No car Found")
                }else{
                    $("#show_cars").html(resp)
                }
            })
        }else{
            $("#show_cars").html(" ")
        }
    }
    let balance =0;
    let purchase_price =0;
    let lessDeposite =0;
    let miscellaneous_fees =0;
    let rideshare_dpti_fees =0;
    let insurance =0;

    function calculator(){
        purchase_price = $("[name='customer_purchase_price']").val()
        lessDeposite = $("[name='less_deposite']").val()
        rideshare_dpti_fees = $("[name='rideshare_dpti_fees']").val()
        miscellaneous_fees = $("[name='miscellaneous_fees']").val()

        balance = purchase_price - lessDeposite;
        $(".balance").html(balance)

        finalBalance = parseFloat(balance) + parseFloat(miscellaneous_fees)+parseFloat(rideshare_dpti_fees);
        $(".finalBalance").html(finalBalance)
        //1 year investment
            //finalBalance year multiple by 9%
        $(".one_year_investment").html((finalBalance/100)*9)
        //2 year investment
            //finalBalance year multiple by 9%
        $(".two_year_investment").html((finalBalance/100)*9)
        //3 year investment
            //finalBalance year multiple by 9%
        $(".three_year_investment").html((finalBalance/100)*9)

        //weekly price for 1st year
        $(".weekly_amount_for_one_year").html(((finalBalance+(finalBalance/100)*9)/52).toFixed(2))
        //fornightly price for 1st year
        $(".weekly_fornightly_amount_for_one_year").html((((finalBalance+(finalBalance/100)*9)/52)*2).toFixed(2))
        //monthly price for 1st year
        $(".weekly_monthly_amount_for_one_year").html(((((finalBalance+(finalBalance/100)*9)/52)*52)/12).toFixed(2))

        //weekly price for 2nd year
        $(".weekly_amount_for_two_year").html(((finalBalance+((finalBalance/100)*9)*2)/104).toFixed(2))
        //fornightly price for 2nd year
        $(".weekly_fornightly_amount_for_two_year").html((((finalBalance+((finalBalance/100)*9)*2)/104)*2).toFixed(2))
        //monthly price for 2nd year
        $(".weekly_monthly_amount_for_two_year").html(((((finalBalance+((finalBalance/100)*9)*2)/104)*52)/12).toFixed(2))

        //weekly price for 3rd year
        $(".weekly_amount_for_three_year").html(((finalBalance+((finalBalance/100)*9)*3)/156).toFixed(2))
        //fornightly price for 3rd year
        $(".weekly_fornightly_amount_for_three_year").html((((finalBalance+((finalBalance/100)*9)*3)/156)*2).toFixed(2))
        //monthly price for 3rd year
        $(".weekly_monthly_amount_for_three_year").html(((((finalBalance+((finalBalance/100)*9)*3)/156)*52)/12).toFixed(2))


        //insurance per week
        insurance = parseFloat($("[name='insurance_per_week']").val());

        //weekly price with insurance for 1st year
        $(".weekly_amount_with_insurance_for_one_year").html(((finalBalance+(finalBalance/100)*9)/52+insurance).toFixed(2))
        //fornightly price with insurance for 1st year
        $(".weekly_fornightly_amount_with_insurance_for_one_year").html(((((finalBalance+(finalBalance/100)*9)/52)+insurance)*2).toFixed(2))
        //monthly price with insurance for 1st year
        $(".weekly_monthly_amount_with_insurance_for_one_year").html((((((finalBalance+(finalBalance/100)*9)/52)+insurance)*52)/12).toFixed(2))


        //weekly price with insurance for 2nd year
        $(".weekly_amount_with_insurance_for_two_year").html(((((finalBalance+((finalBalance/100)*9)*2)/104))+insurance).toFixed(2))
        //fornightly price with insurance for 2nd year
        $(".weekly_fornightly_amount_with_insurance_for_two_year").html((((((finalBalance+((finalBalance/100)*9)*2)/104))+insurance)*2).toFixed(2))
        //monthly price with insurance for 2nd year
        $(".weekly_monthly_amount_with_insurance_for_two_year").html(((((((finalBalance+((finalBalance/100)*9)*2)/104))+insurance)*52)/12).toFixed(2))


        //weekly price with insurance for 2nd year
        $(".weekly_amount_with_insurance_for_three_year").html((((finalBalance+((finalBalance/100)*9)*3)/156)+insurance).toFixed(2))
        //fornightly price with insurance for 2nd year
        $(".weekly_fornightly_amount_with_insurance_for_three_year").html(((((finalBalance+((finalBalance/100)*9)*3)/156)+insurance)*2).toFixed(2))
        //monthly price with insurance for 2nd year
        $(".weekly_monthly_amount_with_insurance_for_three_year").html((((((finalBalance+((finalBalance/100)*9)*3)/156)+insurance)*52)/12).toFixed(2))



        //weekly_amount_direct_debt_fee_one_year
        $(".weekly_amount_direct_debt_fee_one_year").html((((((finalBalance+(finalBalance/100)*9)/52+insurance)/100)*1.5)+((finalBalance+(finalBalance/100)*9)/52+insurance)).toFixed(2))
        //fornightly amount_direct_debt_fee_one_year
        $(".weekly_fornighly_amount_direct_debt_fee_one_year").html((((((((finalBalance+(finalBalance/100)*9)/52)+insurance)*2)/100)*1.5)+((((finalBalance+(finalBalance/100)*9)/52)+insurance)*2)).toFixed(2))
        //monthly amount_direct_debt_fee_one_year
        $(".weekly_monthly_amount_direct_debt_fee_one_year").html(((((((((finalBalance+(finalBalance/100)*9)/52)+insurance)*52)/12)/100)*1.5)+(((((finalBalance+(finalBalance/100)*9)/52)+insurance)*52)/12)).toFixed(2))


        //weekly_amount_direct_debt_fee_two_year
        $(".weekly_amount_direct_debt_fee_two_year").html((((((((finalBalance+((finalBalance/100)*9)*2)/104))+insurance)/100)*1.5)+((((finalBalance+((finalBalance/100)*9)*2)/104))+insurance)).toFixed(2))
        //fornightly amount_direct_debt_fee_two_year
        $(".weekly_fornighly_amount_direct_debt_fee_two_year").html(((((((((finalBalance+((finalBalance/100)*9)*2)/104))+insurance)*2)/100)*1.5)+((((finalBalance+((finalBalance/100)*9)*2)/104)+insurance)*2)).toFixed(2))
        //monthly amount_direct_debt_fee_two_year
        $(".weekly_monthly_amount_direct_debt_fee_two_year").html((((((((((finalBalance+((finalBalance/100)*9)*2)/104))+insurance)*52)/12)/100)*1.5)+((((((finalBalance+((finalBalance/100)*9)*2)/104))+insurance)*52)/12)).toFixed(2))

        //weekly_amount_direct_debt_fee_three_year
        $(".weekly_amount_direct_debt_fee_three_year").html(((((((finalBalance+((finalBalance/100)*9)*3)/156)+insurance)/100)*1.5)+(((finalBalance+((finalBalance/100)*9)*3)/156)+insurance)).toFixed(2))
        //fornightly amount_direct_debt_fee_three_year
        $(".weekly_fornighly_amount_direct_debt_fee_three_year").html((((((((finalBalance+((finalBalance/100)*9)*3)/156)+insurance)*2)/100)*1.5)+((((finalBalance+((finalBalance/100)*9)*3)/156)+insurance)*2)).toFixed(2))
        //monthly amount_direct_debt_fee_three_year
        $(".weekly_monthly_amount_direct_debt_fee_three_year").html(((((((((finalBalance+((finalBalance/100)*9)*3)/156)+insurance)*52)/12)/100)*1.5)+(((((finalBalance+((finalBalance/100)*9)*3)/156)+insurance)*52)/12)).toFixed(2))


    }
</script>
@include('admin.footer')
<!-- las la-angle-double-up -->
<!-- las la-angle-double-down -->
