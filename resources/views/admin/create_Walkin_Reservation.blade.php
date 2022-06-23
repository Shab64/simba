@include('admin.header')
<link rel="stylesheet" href="{{url('assets')}}/css/frm-wiz/mStyle.css">
<link rel="stylesheet" href="{{url('assets')}}/css/frm-wiz/js-steps.css">
<link rel="stylesheet" href="{{url('assets')}}/css/frm-wiz/dropify.css">
<link rel="stylesheet" href="{{url('assets')}}/css/frm-wiz/nice-select.css">

<link rel="stylesheet" type="text/css" href="{{url('assets')}}/css/frm-wiz/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="{{url('assets')}}/css/frm-wiz/icon.css" />

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Filepond css -->
{{--<link href="https://www.codehim.com/demo/jquery-image-uploader-preview-and-delete/dist/image-uploader.min.css" rel="stylesheet">--}}




<style>
    .hide{
        display: none;
    }
    .nice-select .option{
        line-height: 0!important;
    }
    .nice-select.open .list{
        height: 100px;
        overflow-y: scroll;
    }
    .nice-select .list .option{
        height: auto!important;
    }

    .card-cars {
        /*box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;*/
        cursor: pointer;
        transition: .8s;
        transition: transform .8s;
        background-color: aliceblue;
        margin-top: 55px;
        text-align: center;
    }

    .card-cars:hover {
        /* transform: scale(1.03); */
        transform: translateY(-5px);
        transition: .8s;


    }

    .card-cars:hover .car {
        box-shadow: 0px 0px 25px #e7e7e7;
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
    .ribbon-content label{
        color:black;
    }
    .ribbon-box .card-body{
        margin-top: 12px;
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
        text-align: end;

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
        .car img {
            text-align: center;
            height: auto;
        }
    }

    .dropzone.dz-clickable{
        position: relative;
        overflow: hidden;
    }

    .dropzone.dz-clickable input{
        opacity: 0;
        height: 100%;
        position: absolute;
        z-index: 99;
        left: 0;
    }

    h4{
        color: black!important;
    }

    .card .card-body .d-flex h4{
        display: block!important;
    }
    .card .card-body .d-flex p{
        color:black;
    }



    .wrapper .option{
        background: #5ea3cb;
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin:0;
        border-radius: 5px;
        cursor: pointer;
        padding: 12px 10px;
        border: 2px solid #5ea3cb;
        transition: all 0.3s ease;
    }
    .wrapper .option .dot{
        height: 20px;
        width: 20px;
        background: #d9d9d9;
        border-radius: 50%;
        position: relative;
    }
    .wrapper .option .dot::before{
        position: absolute;
        content: "";
        top: 4px;
        left: 4px;
        width: 12px;
        height: 12px;
        background: #0069d9;
        border-radius: 50%;
        opacity: 0;
        transform: scale(1.5);
        transition: all 0.3s ease;
    }
    input[type="radio"]{
        /*visibility: hidden;*/
    }
    #option-1:checked:checked ~ .option-1,
    #option-2:checked:checked ~ .option-2{
        border-color: #0069d9;
        background: #0069d9;
    }
    #option-1:checked:checked ~ .option-1 .dot,
    #option-2:checked:checked ~ .option-2 .dot{
        background: #fff;
    }
    #option-1:checked:checked ~ .option-1 .dot::before,
    #option-2:checked:checked ~ .option-2 .dot::before{
        opacity: 1;
        transform: scale(1);
    }
    .wrapper .option span{
        font-size: 20px;
        color: white;
        margin-left: 5px;
    }
    #option-1:checked:checked ~ .option-1 span,
    #option-2:checked:checked ~ .option-2 span{
        color: #fff;
    }

    .nice-select .list{
        border: 1px solid #cccc!important;
    }
    #wizard .nice-select.form-control{
        padding: 8px!important;
    }
    .wrapper .option{
        background: transparent!important;
        border:none!important;

    }
    .cont-box{
        overflow: initial!important;
    }
    #wizard .form-group {
        margin-bottom: 1rem;
        margin-top: 20px;
    }

    .total-amt{
        padding: 10px;
        background: transparent;
        /* color: #929fb5;
        border:1px solid #495057; */
        border-radius: 4px;
        font-weight:bold;
        color:#495057;
        border:1px solid #929fb5;
    }
    .form-file{
        width: 100%;
    }
    @media (max-width:400px) {
        #signature {
            min-width:auto !important;
            min-height: auto !important;
        }
    }
    #content {
        text-align: left;
        max-width: 600px;
        margin: 2em auto;
        display: block;
        background: #fff;
        padding: 2em;
        border: 1px solid #e5e5e5;
        border-radius: 4px;
    }
    strong {
        font-weight:700;
    }
    a, a .icon {
        color:#136fd2;
        color:#0a3666;
        color:#53777A;
        fill:#0a3666;
        color:#000;
        text-decoration:none;
        border-bottom:solid 1px transparent;
        transition: all 300ms;
    }
    a:hover,
    a:hover .icon {
        border-bottom:solid 1px #ccc;
        padding-bottom:0px;
    }
    a:active {
        color:#bf7883;
        border-bottom:solid 1px #bf7883;
        padding-bottom:0px;
    }
    .icon {
        fill:#222;
        width:12px; height:12px;
        margin:.075em .1em;
        margin-right:.2em;
    }

    h1 {
        text-align:center;
        font-size:2em;
        line-height:1.5em;
        line-height: 1.2em;
        /*letter-spacing:0.15em;*/
        font-family:'Arapey', serif;
        text-transform:uppercase;
        font-weight:normal;
        margin-top:0;
        position:relative;
    }
    h2 {
        font-size:1.2em;
        line-height:1.2em;
        letter-spacing:.05em;
        font-family:'Open Sans Condensed',sans-serif;
        font-weight:700;
    }

    label, #help {
        font-family: "Open Sans", sans-serif;
    }

    /****** System styles ******/

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
    /*#signature:hover {
      border-color:#54492a;
    }
    #signature:active {
      border-color:#C02942;
    }*/

    /* Big Red Button  https://cdpn.io/MwoOeW/ */
    .big-red-button {
        border:none;
        outline:none;
        color: #fff;
        text-transform: uppercase;
        font-size: 1.5em;
        letter-spacing:.1rem;
        font-family: "Open Sans Condensed", sans-serif;
        font-weight:300;
        width: 5rem;
        height: 4rem;
        line-height:4rem;
        text-align: center;
        cursor: pointer;
        border-radius: 50%;
        background: #f74d4d;
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f74d4d), color-stop(100%, #f86569));
        background-image: -moz-gradient(linear, left top, left bottom, color-stop(0%, #f74d4d), color-stop(100%, #f86569));
        box-shadow: 0 .4rem #e24f4f;
    }
    .big-red-button:active {
        box-shadow: 0 0 #e24f4f;
        transform: translate(0px, .4rem);
        transition: 0.1s all ease-out;
    }

    #reset {
        margin:1.5em auto;
    }
    #signature_capture {
        width:100%;
        height:7em;

    }
    .footer {
        text-align: right;
        display: block;
        margin-top: 0rem;
        max-width: 600px;
        margin:auto;
    }
    small.footer {
        font-family: "Open Sans", sans-serif;
    }
    .url {
        font-family:"Open Sans Condensed", sans-serif;
        /*font-size:1.1em;*/
    }

    /*    uploader css*/
    #files {
        display: block;
        width: 100%;
        opacity: 0;
        padding: 60px;
    }
    .field h6{
        text-align: center;
        font-size: 20px;
        margin-top: 20px;sss
        padding-bottom:20px;
        border-bottom:1px dashed darkgrey;
    }
    .field #files{
        transition:0.3s all linear;
    }

    .field:hover #files{
        opacity:1!important;
        cursor:pointer!important;
    }
    .imageThumb {
        max-height: 75px;
        border: 2px solid;
        padding: 1px;
        cursor: pointer;
    }
    .pip {
        display: inline-block;
        margin: 10px 11px 10px 10px;
    }
    .remove {
        display: block;
        background: #444;
        border: 1px solid black;
        color: white;
        text-align: center;
        cursor: pointer;
    }
    .remove:hover {
        background: white;
        color: black;
    }

    /*    canvas sign css*/
    #sig-canvas {
        border: 2px dotted #CCCCCC;
        border-radius: 15px;
        cursor: crosshair;
    }
    .five p{
        font-weight: 700;
    }

    .nav-link {
        border-bottom:none!important;

    }
    .card-radio .form-check-input:checked+.form-check-label {
        border-color: #283891!important;
    }

    #wizard .form-control {
        background-color: #e5e9ff!important;
        border-radius: 3px!important;
        border: 2px solid #9999!important;
        padding: 10px;
        color: #666666!important;
    }
    .logo{
        border-bottom: none!important;
    }
    .modal-body label{
        color:black!important;
        font-weight: 600!important;
        font-size: 14px!important;
        text-transform: capitalize!important;
    }
    .modal-header h5.modal-title{
        font-size: 1.09375rem!important;
    }

    .modal-header .btn-close{
        color:white!important;
    }
    .accordion-button:not(.collapsed){
        color: #000000!important;
        font-weight: 600!important;
        font-size: 20px!important;
    }

    .accordion-button{
        color: #000000!important;
        font-weight: 600!important;
        font-size: 20px!important;
    }

    /* ASad Code */
    .actions li a{
        background-color:#ec971f;
        color:white;
        font-weight:500;
        border:none;
    }
    #wizard .actions li a:hover{
        background-color:#f0ad4e!important;

    }
    #wizard .actions li:first-child a{
        background-color:#283891!important;
    }
    #wizard .actions li:first-child a:hover{
        background-color:#3547b1!important;
    }
    .third .card-header {
    padding: 0px 5px;
    margin-bottom: 0;
    background-color: var(--vz-card-cap-bg);
    border-bottom: 0solidrgba(0,0,0,.125);
}
    .third .card-cars .card-title {
    font-size: 17px !important;
    text-align: center;
    font-weight: 700 !important;
}
   .third .wrapper .option span {
       font-size: 14px;
       color: white;
       margin-left: 5px;
    }
    .third .wrapper .option .dot {
        height: 15px;
        width: 15px;
    }
    .third .wrapper .option {
        padding: 8px 10px!important;
    }
    .cards-css .card {
        /* box-shadow: 10px 10px 9px -7px rgba(0,0,0,0.75);
-webkit-box-shadow: 10px 10px 9px -7px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 9px -7px rgba(0,0,0,0.75); */
    }
    #additional_options .card-body h4{
        font-weight:400;
        text-transform:capitalize;
        font-size:18px;
    }
    #additional_options .card-body p{
        font-size:12px;
    }
    #additional_options .card-body .inout input{
        width:30px!important;
        text-align:center;
    }
    #additional_options .card-body .quantity_css{
        width:15px;
        height:15px;
    }
    .eight .first-div-to-pdf-btn{
        position:relative;
    }
    .eight .pdf_btn{
        position: absolute;
    top: 20px;
    width: 100px;
    right: 20px;
    height: 40px;
    background-color: #283891!important;
    display: flex;
    justify-content: center;
    align-items: center;
    color:white;
    border-radius:20px;
    font-size:14px;
    }
    .eight .pdf_btn a{
        color:white!important;
        text-decoration:none!important;
    }
    .eight .pdf_btn a:hover{
        text-decoration:none!important;

    }
    #additional_options .form-select{
        background-image: none!important;
        border: 2px solid #9999!important;
        padding: 0px 10px;
        width: 31px;
        height: 25px;
        margin-right:10px;
    }
    /* ASad End */

</style>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body checkout-tab">
                            <form action="{{route('admin.walkingReservation.add')}}" id="form_data"  data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" class="require-validation" method="post" enctype="multipart/form-data">
                                @csrf
                                <!--                                ===============================-->
                                <!--                                    My Code-->
                                <!--                                ===============================-->
                                <div class="wrapper ref">
                                    {{--                                    <form action="">--}}
                                    <div class="step-arrow-nav mt-n3 mx-n3 mb-3">
                                        <div id="wizard">

                                            <input type="hidden" value="walkin_reservation" id="reservation_type" name="type">
                                            <input type="hidden" value="" name="total_days">
                                            <input type="hidden" value="rental" name="reservation_type">
                                            <p class="text-danger" style="display: none" id="errors">All fields are required</p>
                                            <!-- SECTION 1 -->
                                            <h4><i class="las la-check-circle"></i> Date</h4>
                                            <section class="sec">
                                                <div class="row">
                                                    <div class="col-lg-12 offset-lg-0">
                                                        <div class="cont-box">

                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="form-group">
                                                                        <label>Select Branch</label>
                                                                        <select name="branch" id="" class="form-control" >
                                                                            <option>Adelaide</option>
                                                                            <option>Sydney</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="form-group">
                                                                        <label>Pickup Location</label>
                                                                        <select class="form-control" name="p_location">
                                                                            @forelse($locations as $l)
                                                                                <option value="{{$l['id']}}"> {{$l['name']}}</option>
                                                                            @empty
                                                                                <option value="" hidden>No Location Found</option>
                                                                            @endforelse
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="form-group">
                                                                        <label>Return Location </label>
                                                                        <select class="form-control" name="r_location">
                                                                            @forelse($locations as $l)
                                                                                <option value="{{$l['id']}}"> {{$l['name']}}</option>
                                                                            @empty
                                                                                <option value="" hidden>No Location Found</option>
                                                                            @endforelse
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label>Pickup Date</label>
                                                                        <input type="date" name="p_date" class="form-control" value="{{date('Y-m-d')}}"/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label>Return Date </label>
                                                                        <input type="date" name="r_date" class="form-control" value="{{date('Y-m-d')}}"/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2">
                                                                    <div class="form-group">
                                                                        <label>Pickup Time</label>
                                                                        <select name="p_time"  class="form-control" >
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10" selected>10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                        </select>


                                                                        {{--                                                                            <input type="time" name="p_time" class="form-control" value=""/>--}}
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2">
                                                                    <div class="form-group" style="margin-top: 48px">

                                                                        <select name="p_time_min"  class="form-control" >
                                                                            <option value="00" selected>00</option>
                                                                            <option value="15">15</option>
                                                                            <option value="30">30</option>
                                                                            <option value="45">45</option>
                                                                        </select>
                                                                    </div>

                                                                </div>
                                                                <div class="col-lg-2">
                                                                    <div class="form-group" style="margin-top: 48px">
                                                                        <select name="p_time_interval"  class="form-control" >
                                                                            <option value="AM" selected>AM</option>
                                                                            <option value="PM">PM</option>
                                                                        </select>
                                                                    </div>

                                                                </div>

                                                                <div class="col-lg-2">
                                                                    <div class="form-group">
                                                                        <label>Return Time  </label>
                                                                        <select name="r_time"  class="form-control" >
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10" selected>10
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                        </select>
                                                                        {{--                                                                            <input type="time" name="r_time" class="form-control" value=""/>--}}
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2">
                                                                    <div class="form-group" style="margin-top: 48px">

                                                                        <select name="r_time_min"  class="form-control" >
                                                                            <option value="00" selected>00</option>
                                                                            <option value="15">15</option>
                                                                            <option value="30">30</option>
                                                                            <option value="45">45</option>
                                                                        </select>
                                                                    </div>

                                                                </div>
                                                                <div class="col-lg-2">
                                                                    <div class="form-group" style="margin-top: 48px">

                                                                        <select name="r_time_interval"  class="form-control" >
                                                                            <option value="AM" selected>AM</option>
                                                                            <option value="PM">PM</option>
                                                                        </select>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section> <!-- SECTION 3 -->
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
                                                                                                <div class="wrapper">

                                                                                                    <label style="background: #283891!important" for="option-<?=$d['id']?>" class="option option-<?=$d['id']?>">
                                                                                                        <input class="dot" type="radio" name="shab_car" <?= ($k==0) ? "checked" : "" ?> value="<?=$d['id']?>" id="option-<?=$d['id']?>" >
                                                                                                        <span>Add To Rent</span>
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
                                            <h4><i class="las la-check-circle"></i> Options</h4>
                                            <section class="third cards-css">
                                                <div class="row" id="additional_options">
                                                    <!-- Asad Code Start -->
                                                    <div class="col-lg-6">
                                                        <!-- Option 1 -->
                                                        <div class="card shadow-sm">
                                                            <div class="card-body">
                                                                <div class="d-flex justify-content-between flex-row align-items-center">
                                                                    <div>
                                                                        <h4>Basic Cover Included</h4>
                                                                        <p>If you have an accident or
                                                                            damage
                                                                            the
                                                                            vehicle, your excess
                                                                            liability
                                                                            is
                                                                            $4,818.</p>
                                                                    </div>
                                                                    <span class="inout" >
                                                                            <!-- <a href="#"></a> -->
                                                                        <select class="form-select form-select-sm options" aria-label=".form-select-sm example pe-2" name="basic_cover">
                                                                            <option value="0" data-name="basic_cover">0</option>
                                                                            <option value="1" data-name="basic_cover">1</option>
                                                                            <option value="2" data-name="basic_cover">2</option>
                                                                            <option value="3" data-name="basic_cover">3</option>
                                                                            <option value="4" data-name="basic_cover">4</option>
                                                                            </select>
                                                                           <span style="color:black;">x ${{(!empty($additional_options[0]['basic_cover'])) ? $additional_options[0]['basic_cover'] : 0}}</span>
                                                                        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- option 2 -->
                                                        <div class="card shadow-sm">
                                                            <div class="card-body">
                                                                <div class="d-flex justify-content-between flex-row align-items-center">

                                                                    <div>
                                                                        <h4>Silver Cover</h4>
                                                                        <p>This allows you to reduce the
                                                                            excess liability to $1800.
                                                                            Includes Roadside Assistance
                                                                        </p>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#"></a>
                                                                        <input type="checkbox" name="silver_cover" value="yes">
                                                                        <span style="color:black;">x $ {{(!empty($additional_options[0]['silver_cover'])) ? $additional_options[0]['silver_cover'] : 0}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- option 3 -->
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div
                                                                    class="d-flex justify-content-between flex-row align-items-center">

                                                                    <div>
                                                                        <h4>Gold Cover</h4>
                                                                        <p>This allows you to reduce the
                                                                            excess liability to $0.
                                                                            Includes Roadside Assistance
                                                                        </p>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#"></a>
                                                                        <input type="checkbox" name="gold_cover" value="yes">
                                                                        <span style="color:black;">x $ {{(!empty($additional_options[0]['gold_cover'])) ? $additional_options[0]['gold_cover'] : 0}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- option 4 -->
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="d-flex justify-content-between flex-row align-items-center">
                                                                    <div>
                                                                        <h4>Drivers Under 25 and Over 75
                                                                            Years</h4>
                                                                        <p>You MUST select this option
                                                                            if you are under 25 or Over
                                                                            75 years Old. Excess For
                                                                            Drivers <br> under 25 and
                                                                            Over 75
                                                                            is $5000.</p>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#"></a>
                                                                        <input type="checkbox" name="driver_for" value="yes">
                                                                        <span style="color:black;">x $ {{(!empty($additional_options[0]['driver_for'])) ? $additional_options[0]['driver_for'] : 0}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                              <!-- option 5 -->
                                                              <div class="card">
                                                            <div class="card-body">
                                                                <div
                                                                    class="d-flex justify-content-between flex-row align-items-center">

                                                                    <div>
                                                                        <h4>Additional Driver</h4>
                                                                        <p>Use this option if there is
                                                                            more then 1 Driver.</p>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <a href="#"></a>
                                                                        <!-- asad code start-->
                                                                        <select class="form-select form-select-sm options" aria-label=".form-select-sm example pe-2" name="additional_driver">
                                                                            <option value="0" data-name="additional_driver">0</option>
                                                                            <option value="1" data-name="additional_driver">1</option>
                                                                            <option value="2" data-name="additional_driver">2</option>
                                                                            <option value="3" data-name="additional_driver">3</option>
                                                                            <option value="4" data-name="additional_driver">4</option>
                                                                            </select>
                                                                            <!-- asad code end -->
                                                                        <!-- <input type="number"
                                                                               id="quantity"
                                                                               name="additional_driver" min="1"
                                                                               max="5" class="quantity_css"> -->
                                                                        <span style="color:black;">x $ {{(!empty($additional_options[0]['additional_driver'])) ? $additional_options[0]['additional_driver'] : 0}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- option 6 -->
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div
                                                                    class="d-flex justify-content-between flex-row align-items-center">

                                                                    <div>
                                                                        <h4>Child Seat</h4>
                                                                        <p>For Children between 0-4
                                                                            Years
                                                                        </p>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <a href="#"></a>
                                                                        <!-- asad code start-->
                                                                        <select class="form-select form-select-sm options" aria-label=".form-select-sm example pe-2" name="child_seat">
                                                                            <option selected value="0" data-name="child_seat">0</option>
                                                                            <option value="1" data-name="child_seat">1</option>
                                                                            <option value="2" data-name="child_seat">2</option>
                                                                            <option value="3" data-name="child_seat">3</option>
                                                                            <option value="4" data-name="child_seat">4</option>
                                                                            </select>
                                                                            <!-- asad code end -->
                                                                        <!-- <input type="number"
                                                                               id="quantity"
                                                                               name="child_seat" min="1"
                                                                               max="5" class="quantity_css"> -->
                                                                        <span style="color:black;">x $ {{(!empty($additional_options[0]['child_seat'])) ? $additional_options[0]['child_seat'] : 0}}</span>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- option 7 -->
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div
                                                                    class="d-flex justify-content-between flex-row align-items-center">
                                                                    <div>
                                                                        <h4>Booster Seat</h4>
                                                                        <p>For Children between 4-8
                                                                            Years</p>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <a href="#"></a>
                                                                        <!-- asad code start-->
                                                                        <select class="form-select form-select-sm options" aria-label=".form-select-sm example pe-2" name="boost_seat">
                                                                            <option selected value="0" data-name="boost_seat">0</option>
                                                                            <option value="1" data-name="boost_seat">1</option>
                                                                            <option value="2" data-name="boost_seat">2</option>
                                                                            <option value="3" data-name="boost_seat">3</option>
                                                                            <option value="4" data-name="boost_seat">4</option>
                                                                            </select>
                                                                            <!-- asad code end -->
                                                                        <!-- <input type="number"
                                                                               id="quantity"
                                                                               name="boost_seat" min="1"
                                                                               max="5" class="quantity_css">     -->
                                                                        <span style="color:black;">x $ {{(!empty($additional_options[0]['boost_seat'])) ? $additional_options[0]['boost_seat'] : 0}}</span>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section> <!-- SECTION 4 -->
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
                                                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                                <button class="accordion-button" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#panelsStayOpen-collapseTwo"
                                                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                                    Additional Driver
                                                                </button>
                                                            </h2>
                                                            <div id="panelsStayOpen-collapseTwo">
                                                                <p id="additional_drivers_if_selected">

                                                                </p>
                                                            </div>
                                                            <div style="text-align: center;">
                                                                <div class="btn-group">
                                                                    <a href="javascript:void(0)" onclick="sendQuote()" class="btn btn-primary mt-3" style="color:white;">Send Quote and Save</a>
                                                                    {{--                                                                    <a href="#" class="btn btn-primary mt-3" style="color:white;">Email</a>--}}
                                                                </div>
                                                            </div>



                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <h4><i class="las la-check-circle"></i> Agreement</h4>
                                            <section class="five">
                                                <div>
                                                    <div class="card-header">
                                                        <div class="d-flex justify-content-between header-aggrement-main-div">
                                                            <div class="img-agreement">
                                                                <img src="{{url('assets')}}/images/Simba_Final_webPNG.png" alt=""
                                                                     height="60">
                                                            </div>
                                                            <div class="agrement-header">
                                                                <h5 class="m-0">SIMBA CAR HIRE PTY LTD</h5>
                                                                <p class="m-0">AR HIRE PTY LTD
                                                                    ABN: 87635707229</p>
                                                                <p class="m-0">4/937 MARION RD</p>
                                                                <p class="m-0">PHONE: 08 8312 4616 / MOBILE: 0459 434 800</p>
                                                                <a href="admin@simbacarhire.com.au ">EMAIL:
                                                                    admin@simbacarhire.com.au </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <style>
                                                        @font-face {
                                                            font-family: 'metro-r';
                                                            src: url("{{url('assets/fonts/metro-r.otf')}}");
                                                        }
                                                        @font-face {
                                                            font-family: 'metro-m';
                                                            src: url("{{url('assets/fonts/metro-m.otf')}}");
                                                        }
                                                        @font-face {
                                                            font-family: 'metro-b';
                                                            src: url("{{url('assets/fonts/metro-b.otf')}}");
                                                        }
                                                        .card-aggrement *{
                                                            font-family:'metro-r';
                                                        }
                                                        .card-aggrement h5{
                                                            font-size: 20px;
                                                            text-align: center;
                                                            padding: 10px 0;
                                                            background-color: #f7f7f7;
                                                            color: #283891;
                                                            text-transform:uppercase;
                                                        }
                                                        .card-aggrement h6{
                                                            font-size: 14px;
                                                            padding: 5px 10px;
                                                            background-color: #f7f7f7;
                                                            color: #283891;
                                                            text-align:center;
                                                            text-transform:uppercase;
                                                        }
                                                        .card-aggrement p.no-bld{
                                                            font-weight: 600;
                                                        }
                                                        .card-aggrement p{
                                                            font-family: 'metro-r';
                                                            font-size: 12px;
                                                        }
                                                        .card-aggrement ol li{
                                                            font-size: 12px;
                                                            font-family: 'metro-r';
                                                            line-height: 1.5;
                                                            margin-bottom: 10px;
                                                            list-style-position: outside;
                                                        }
                                                        .fr-span span{

                                                        }
                                                        .fr-span .card{
                                                            background-color: #f7f7f7!important;
                                                            padding: 10px;
                                                            border:1px solid #f1f1f1;
                                                        }
                                                        .fr-span .table>thead{
                                                            text-align: left;
                                                        }
                                                        .fr-span .table>thead span{
                                                            font-family: 'metro-m';
                                                            font-size: 12px;
                                                            text-transform: uppercase;
                                                        }
                                                        .fr-span .table>tbody{
                                                            text-align: left;
                                                        }
                                                        .fr-span .form-group{
                                                            margin: 0!important;
                                                        }
                                                        .fr-span .table>tbody td{
                                                            /*vertical-align: middle;*/
                                                        }
                                                        .fr-span .table>tbody td label{
                                                            display: block;
                                                            text-align: left;
                                                            margin-bottom: 4px;
                                                        }
                                                        .fr-span .fr-id span{
                                                            color:#283891!important;
                                                            display:block;
                                                            font-weight:600!important;
                                                        }
                                                        .fr-span .air-fr{
                                                            width:33%!important;
                                                        }
                                                        .fr-ins{
                                                            background-color: #f9f9f9;
                                                            border:2px dashed #dddddd;
                                                        }
                                                        .fr-ins h6{
                                                            font-size: 14px;
                                                            padding: 10px;
                                                            background-color: #f1f1f1;
                                                            color: #283891;
                                                            text-transform:uppercase;
                                                            text-align:center;
                                                        }
                                                        .fr-ins p span{
                                                            color:#283891!important;
                                                            display:block;
                                                            font-weight:600!important;
                                                        }
                                                        .fr-ins .ins-in{
                                                            padding:10px 20px 20px;
                                                        }
                                                        .fr-ins .chk-p{
                                                            font-weight:normal;
                                                            margin-left:5px;
                                                            text-transform:lowercase;
                                                        }
                                                        #agreement_price_summary table{
                                                            font-family:'metro-r'!important;
                                                        }
                                                        #agreement_price_summary th{
                                                            font-size:12px;
                                                            background-color:rgba(40, 56, 145, .05);
                                                            text-align:left;
                                                            font-family:'metro-r'!important;
                                                        }
                                                        #agreement_price_summary td{
                                                            font-size:12px;
                                                            font-family:'metro-r'!important;
                                                            text-align:left;
                                                        }
                                                        p.sen-p{
                                                            text-align:center;
                                                        }
                                                        .cr-cont{
                                                            background-color:#f7f7f7;
                                                            padding:10px;
                                                            text-align:right;
                                                        }
                                                        .cr-cont p{
                                                            font-size:12px;
                                                            margin-bottom:3px;
                                                            font-weight:normal;
                                                            font-style:italic;
                                                        }
                                                        .cr-cont p span{
                                                            font-weight:600;
                                                            font-style:normal;
                                                            color:#283891;
                                                        }
                                                        .cr-cont p.bld{
                                                            font-weight:600;
                                                        }
                                                        table.tbl-min td{
                                                            text-align:left;
                                                            padding:5px;
                                                        }
                                                        .form-group canvas{
                                                            border:none;
                                                            border-bottom:1px solid #cccccc;
                                                            background-color:#f7f7f7;
                                                        }
                                                        h6.ht-fr{
                                                            text-align:right;
                                                            font-style:italic;
                                                        }
                                                        #wizard .form-group.no-mr{
                                                            margin:0;
                                                        }
                                                        .trm-box{
                                                            background-color:#f7f7f7;
                                                        }
                                                        .trm-in{
                                                            overflow-y:auto;
                                                            overflow-x:hidden;
                                                            height:500px;
                                                            padding:10px;
                                                        }
                                                        .card-aggrement p{
                                                            font-weight:normal!important;
                                                        }
                                                    </style>
                                                    <div class="card-body card-aggrement">
                                                        <h5>Agreement</h5>
                                                        <p class="no-bld">MEMORANDUM OF AGREEMENT between the party (hereinafter called “the
                                                            Hirer”) described in Item 1 of the Schedule and SIMBA CAR HIRE PTY
                                                            LTD whose
                                                            registered office is situated at 4/937 Marion Rd, Mitchell Park SA
                                                            5043 in the State of South Australia as the Proprietor of Simba Car
                                                            Hire (hereinafter called
                                                            “the Owner”)</p>

                                                        <h6>WHERE BY IT IS AGREED THAT</h6>
                                                        <ol>
                                                            <li>The Hirer shall hire from the Owner the Vehicle described in
                                                                Item 3 of the Schedule (hereinafter called “the Vehicle”) for
                                                                the rental and costs described
                                                                in Item 4 of the Schedule and generally on the terms and
                                                                conditions hereinafter appearing which embody the whole of the
                                                                Agreement between the
                                                                Hirer and the Owner in respect of the Vehicle</li>
                                                            <li>The Hirer DOES HEREBY DECLARE that the Hirer has read and
                                                                considered the terms and conditions of this Agreement prior to
                                                                the execution hereof AND
                                                                THAT the Hirer hires the Vehicle for the Hirer’s own use and/or
                                                                the use of the Joint Hirer as agent for the Joint Hirer set out
                                                                in Item 2 of the schedule
                                                                (hereinafter called “the Joint Hirer”).</li>
                                                        </ol>
                                                        <div class="row">
{{--                                                            <div class="col-md-6">--}}
{{--                                                                <div class="d-flex justify-content-between">--}}
{{--                                                                    <span>Driver (1) </span>--}}
{{--                                                                    <span>ITEM 1 –THE HIRER</span>--}}
{{--                                                                </div>--}}
{{--                                                                <div id="agreement_customer_details"></div>--}}
{{--                                                                                                                                    <div>--}}
{{--                                                                                                                                        <p>First Name: <span>Asad</span></p>--}}
{{--                                                                                                                                    </div>--}}
{{--                                                                                                                                    <div>--}}
{{--                                                                                                                                        <p>Sur Name: <span>Asad</span></p>--}}
{{--                                                                                                                                    </div>--}}
{{--                                                                                                                                    <div>--}}
{{--                                                                                                                                        <p>Email: <span>asadhashmi22@gmail.com</span></p>--}}
{{--                                                                                                                                    </div>--}}
{{--                                                                                                                                    <div class="d-flex justify-content-between">--}}
{{--                                                                                                                                        <p>Phone No: <span>090078601</span></p>--}}
{{--                                                                                                                                        <p>DOB: <span>22/02/1970</span></p>--}}
{{--                                                                                                                                    </div>--}}
{{--                                                                                                                                    <div class="d-flex justify-content-between">--}}
{{--                                                                                                                                        <p>License No: <span>090078601</span></p>--}}
{{--                                                                                                                                        <p>Expiry: <span>22/02/1970</span></p>--}}
{{--                                                                                                                                    </div>--}}
{{--                                                                                                                                    <div class="d-flex justify-content-between">--}}
{{--                                                                                                                                        <span>Driver (2) </span>--}}
{{--                                                                                                                                        <span>ITEM 2 </span>--}}
{{--                                                                                                                                    </div>--}}
{{--                                                                                                                                    <div class="d-flex justify-content-between">--}}
{{--                                                                                                                                        <p>First Name: <span>Dasa</span></p>--}}
{{--                                                                                                                                        <p>Sur Name: <span>Dasa</span></p>--}}
{{--                                                                                                                                    </div>--}}
{{--                                                                                                                                    <div class="d-flex justify-content-between">--}}
{{--                                                                                                                                        <p>Phone No: <span>090078601</span></p>--}}
{{--                                                                                                                                        <p>DOB: <span>22/02/1970</span></p>--}}
{{--                                                                                                                                    </div>--}}
{{--                                                                                                                                    <div class="d-flex justify-content-between">--}}
{{--                                                                                                                                        <p>License No: <span>090078601</span></p>--}}
{{--                                                                                                                                        <p>Expiry: <span>22/02/1970</span></p>--}}
{{--                                                                                                                                    </div>--}}
{{--                                                                <div>--}}
{{--                                                                    <p>Credit/Debit Card Details</p>--}}
{{--                                                                </div>--}}
{{--                                                                <div>--}}
{{--                                                                    <p>Card Number: <span><input type="number" name="card_number"></span></p>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="d-flex justify-content-between">--}}
{{--                                                                    <p>Expiry: <span><input type="date" name="expiry_date"></span></p>--}}
{{--                                                                    <p>CVN:<span><input type="number" name="cvn"></span></p>--}}
{{--                                                                </div>--}}
{{--                                                                <div>--}}
{{--                                                                    <p>BSB: <span><input type="number" name="bsb"></span></p>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="d-flex justify-content-between">--}}
{{--                                                                    <p>ACCOUNT No: <span><input type="number" name="account_no"></span></p>--}}
{{--                                                                    <p>M/C</p>--}}
{{--                                                                    <p>VISA</p>--}}
{{--                                                                    <p>AMEX</p>--}}
{{--                                                                    <p>DINERS</p>--}}
{{--                                                                </div>--}}
{{--                                                                <div>--}}
{{--                                                                    <p>TRAFFIC INFRINGEMENT WILL INCUR A $20 ADMINISTRATION FEE--}}
{{--                                                                        DEBITED ON CREDIT--}}
{{--                                                                        CARD--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
                                                            <div class="col-md-8">
                                                                <div class="fr-span">
                                                                    <div class="card">
                                                                        <table class="table table-border">
                                                                            <thead>
                                                                            <tr>
                                                                                <th><span>Vehicle </span></th>
                                                                                <th><span>ITEM 3 </span></th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <label for="">Car Registration No:</label>
                                                                                        <select onchange="fleetCar()" class="form-control" id="fleet_car" name="fleet_car">
                                                                                            @if(!empty($all_cars))
                                                                                                @foreach($all_cars as $c)
                                                                                                    <option value="{{$c['id']}}">{{$c['brand']}}</option>
                                                                                                @endforeach
                                                                                            @endif
                                                                                        </select>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <label>Colour</label>
                                                                                        <span>Black</span>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>

                                                                        <div id="agreement_dates"></div>

                                                                        <!-- <div>
                                                                            <p></p>
                                                                        </div> -->
                                                                        <div class="fr-ins" style="margin-bottom: 35px;">
                                                                            <div class="text-align-center">
                                                                                <h6>INSURANCE EXCESS </h6>
                                                                            </div>
                                                                            <div class="ins-in">
                                                                                <div>
                                                                                    <p>SINGLE VEHICLE EXCESS APPLIES: <span>$4818.00</span> <br> OR <br>
                                                                                        REDUCED TO: $ <span></span></p>
                                                                                </div>
                                                                                <div class="d-flex">
                                                                                    <input type="checkbox" checked name="damage">
                                                                                    <p class="chk-p">UNDERBODY DAMAGE,
                                                                                    REVERSING DAMAGE, SCRATCH AND
                                                                                    DENT IS DRIVERS’ LIABILITY AND WILL RESULT IN
                                                                                    A $4818 CHARGE TO THE DRIVER.
                                                                                    OR EXCESS COST, WHICHEVER IS THE LOWER
                                                                                    AMOUNT.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12">
                                                                <div id="agreement_price_summary"></div>
                                                                <div>
                                                                    <p class="sen-p">THIS DOCUMENT IS YOUR
                                                                        AUTHORITY TO DRIVE THE VEHICLE. THE
                                                                        HIRER IS RESPONSIBLE AT ALL TIMES FOR PARKING AND
                                                                        TRAFFIC VIOLATIONS,
                                                                        OVERHEAD, UNDERBODY, TYRE AND INTERIOR DAMAGE (NON
                                                                        WAVERABLE). REFER TO ATTACHED CONDITIONS.
                                                                    </p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="row" style="align-items:center;">
                                                            <div class="col-md-6">
                                                                <img src="{{url('assets/')}}/images/car-img-agrement.PNG" alt="car-img"
                                                                     class="img-fluid" style="width:100%;height:100%;">
                                                            </div>

                                                            <div class="col-md-2">
                                                                <table class="table tbl-min table-border">
                                                                    <tbody>
                                                                        <tr>
                                                                        <td>WIND SCREEN</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td>RIMS</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td>SEATS</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td>BOOT</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td>BODY</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td>CARPETS</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td>FUEL GAUGE</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                            <div class="col-md-4" style="">
                                                                <h6 class="ht-fr">HOTHER FEES & CHARGES</h6>
                                                                <div class="cr-cont">
                                                                    <p>SMOKING AND CLEANING <span>-$50-$295</span></p>
                                                                    <p class="bld">(That includes pet hair & odor, Excess sand &
                                                                    mud inside and out including bugs from the front)</p>
                                                                    <p>WINDSCREEN REPLACEMENT <span>$325-1500</span></p>
                                                                    <p>WINDSCREEN CHIP - <span>$195</span></p>
                                                                    <p>LATE CAR RETURN – <span>$99 Plus 24-HOUR CHARGE</spna></p>
                                                                    <p>CREDIT CARD SURCHAGE- <span>1.5%</span></p>
                                                                    <p>REPLACEMENT KEY- <span>$650</span></p>
                                                                    <p>REFUELING COST - <span>$15 + COST OF FUEL</span></p>
                                                                    <p>RIMS & HUBCAP DAMAGE -<span>$195</span> </p>
                                                                    <p>NON-MECHANICAL CALL OUT - <span>$155</span>  </p>
                                                                    <p>ADMINISTRATION COST - <span>$110/Hr. INC GST</span></p>
                                                                    <p>CARPETS/ GPS/ ACCESSORIES - <span>$50 - $199</span> </p>
                                                                    <p>DAILY IMMOBILISATION FEE – <span>Equal to daily hire charge</span></p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                        <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Signature Of Hirer</label>
                                                                        <canvas id="e-sig0" class="e-sig">
                                                                            Get a better browser, bro.
                                                                        </canvas>
                                                                        <div class="btn-group">
                                                                            <button style="visibility: hidden" class="btn btn-primary" id="sig-submitBtn0">Submit Signature</button>
                                                                            <button class="btn btn-default" id="sig-clearBtn0">Clear Signature</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Signature Of Owner</label>
                                                                        <canvas id="e-sig1" class="e-sig">
                                                                            Get a better browser, bro.
                                                                        </canvas>
                                                                        <div class="btn-group">
                                                                            <button style="visibility: hidden" class="btn btn-primary" id="sig-submitBtn1">Submit Signature</button>
                                                                            <button class="btn btn-default" id="sig-clearBtn1">Clear Signature</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 align-self-center">
                                                                    <div class="form-group no-mr">
                                                                        <label for="">Date:</label>
                                                                        <input type="date" class="form-control" value="{{date('Y-m-d')}}" name="sig_date_starting">
                                                                    </div>
                                                                </div>
                                                                <div class="row" style="visibility: hidden">
                                                                <div class="col-md-12" >
                                                                    <textarea id="sig-dataUrl1" name="owner_sig" class="form-control" rows="5"></textarea>
                                                                </div>
                                                                </div>
                                                            <br/>
                                                            <div class="row" style="visibility: hidden">
                                                                <div class="col-md-12">
                                                                    <img class="sig-image1" id="sig-image" src="" alt="Your signature will go here!" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        {{--                                                            <div>--}}
                                                        {{--                                                                <div class="d-flex justify-content-center">--}}
                                                        {{--                                                                    <h5>On Return</h5>--}}
                                                        {{--                                                                </div>--}}
                                                        {{--                                                                <div class="d-flex justify-content-between">--}}
                                                        {{--                                                                    <div>--}}
                                                        {{--                                                                        <p>FUEL GAUGE: FULL <span>Y/N</span></p>--}}
                                                        {{--                                                                    </div>--}}
                                                        {{--                                                                    <div>--}}
                                                        {{--                                                                        <p>OTHER CHARGES:____________$__________ = </p>--}}
                                                        {{--                                                                    </div>--}}
                                                        {{--                                                                    <div>--}}
                                                        {{--                                                                        <p>TOTAL PAID:$____________ </p>--}}
                                                        {{--                                                                    </div>--}}
                                                        {{--                                                                </div>--}}
                                                        {{--                                                                <div class="d-flex justify-content-between">--}}
                                                        {{--                                                                    <div>--}}
                                                        {{--                                                                        <p>X=Dent</p>--}}
                                                        {{--                                                                    </div>--}}
                                                        {{--                                                                    <div>--}}
                                                        {{--                                                                        <p>Y= Small Scratch/dent</p>--}}
                                                        {{--                                                                    </div>--}}
                                                        {{--                                                                    <div>--}}
                                                        {{--                                                                        <p>Z=Large Scratch </p>--}}
                                                        {{--                                                                    </div>--}}
                                                        {{--                                                                    <div>--}}
                                                        {{--                                                                        <p>O=Missing/Broken part </p>--}}
                                                        {{--                                                                    </div>--}}
                                                        {{--                                                                </div>--}}
                                                        {{--                                                                <div class="d-flex justify-content-between">--}}
                                                        {{--                                                                    <div>--}}
                                                        {{--                                                                        <p>Windscreen <span>Z</span></p>--}}
                                                        {{--                                                                    </div>--}}
                                                        {{--                                                                    <div>--}}
                                                        {{--                                                                        <p>Rims <span>Y</span></p>--}}
                                                        {{--                                                                    </div>--}}
                                                        {{--                                                                    <div>--}}
                                                        {{--                                                                        <p>Seats <span>O</span></p>--}}
                                                        {{--                                                                    </div>--}}
                                                        {{--                                                                    <div>--}}
                                                        {{--                                                                        <p>Boot <span>X</span></p>--}}
                                                        {{--                                                                    </div>--}}
                                                        {{--                                                                    <div>--}}
                                                        {{--                                                                        <p>Body <span>Y</span></p>--}}
                                                        {{--                                                                    </div>--}}
                                                        {{--                                                                </div>--}}
                                                        {{--                                                                <div class="d-flex justify-content-between">--}}
                                                        {{--                                                                    <p>Signature Of Hirer <span>__________</span></p>--}}
                                                        {{--                                                                    <p>Signature Of Owner <span>__________</span></p>--}}
                                                        {{--                                                                    <p>Date: <span>__________</span></p>--}}
                                                        {{--                                                                </div>--}}
                                                        {{--                                                            </div>--}}
                                                        <!-- Terms & Conditions -->
                                                        <div class="trm-box">
                                                            <div class="d-flex justify-content-center">
                                                                <h6 style="text-align:center;font-size: 20px;">TERMS AND CONDITIONS</h6>
                                                            </div>
                                                            <div class="trm-in">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <p>1. This Agreement is made between the party described on the
                                                                            front of this form (the
                                                                            “Hirer”) and Simba Car Hire Pty Ltd ABN: 87635707229 4/937
                                                                            Marion Rd, Mitchell Park,
                                                                            South Australia 5043 (the “Owner”).</p>
                                                                        <p>
                                                                            2. The Hirer shall hire from the Owner the vehicle described
                                                                            on
                                                                            the front of this form (the
                                                                            “Vehicle”) for the rental and costs described on the front
                                                                            of
                                                                            this form and upon the terms
                                                                            and conditions appearing below.

                                                                        </p>
                                                                        <p>
                                                                            3. In this Agreement the following words have the following
                                                                            meanings:
                                                                        </p>
                                                                        <p>
                                                                            3.1 “Insurance” means the policy of insurance in relation to
                                                                            the
                                                                            vehicle in the name of the
                                                                            Owner for
                                                                        </p>
                                                                        <p>
                                                                            3.2 “Period of hire” means the period commencing on the date
                                                                            the
                                                                            Hirer takes possession of
                                                                            the vehicle and concluding when the Vehicle is returned to
                                                                            the
                                                                            Owner.
                                                                        </p>
                                                                        <p>3.3 “State” means the State of South Australia</p>
                                                                        <p>3.4 “Vehicle” means the motor vehicle and/or trailer
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
                                                                            Hirer the term “Hirer” shall
                                                                            include such persons both jointly and severally.</p>
                                                                        <p>3.7 “Your Account” means the debit card or credit card to
                                                                            which
                                                                            Rental charges are to be
                                                                            debited.</p>
                                                                        <p>4. The Hirer promises to the Owner that: -</p>
                                                                        <p>4.1 The Hirer is over the age of 21 years.</p>
                                                                        <p>4.2 The Hirer holds a current driver’s license valid in the
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
                                                                            acknowledges that the Owner may debit the Hirer’s account
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
                                                                            Owner’s collection
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
                                                                            condition at the Hirer’s premises on the date and time
                                                                            specified on the front of this form
                                                                            or when required by the Owner.</p>
                                                                        <p>8. The Owner may request the immediate return of the Vehicle,
                                                                            or the Owner may recover
                                                                            the Vehicle without notice, if</p>
                                                                        <p>8.1 The credit limited on the Hirer’s method of payment would
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
                                                                    <div class="col-md-6">
                                                                        <p>11. The Hirer shall not:
                                                                        </p>
                                                                        <p>11.1 Use the Vehicle for any illegal purpose or in
                                                                            contravention of any law of the State</p>
                                                                        <p>11.2 Drive the Vehicle under the influence of any alcohol or
                                                                            drug or with a blood alcohol level as
                                                                            indicated by analysis of the driver’s breach or blood in
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
                                                                            Vehicle without the Owner’s consent</p>
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
                                                                            ‘immobilisation fee.’</p>
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
                                                                        <p>22. The Hirer may reduce the Hirer’s liability under clauses
                                                                            20 or 21 by indicating accordingly
                                                                            on the front of this form. If the Hirer has so indicated,
                                                                            then the Hirer’s liability will be
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

                                                                    </div>
                                                                    <div class="form-group">
                                                                                <div class="row">
                                                                                    <!-- <div class="col-lg-12">
                                                                                        <label>SIGNATURE:</label>
                                                                                    </div> -->

                                                                                    <div class="col-lg-4">
                                                                                        <canvas id="e-sig2" class="e-sig">
                                                                                            Get a better browser, bro.
                                                                                        </canvas>
                                                                                        <div class="btn-group">
                                                                                            <button style="visibility: hidden" class="btn btn-primary" id="sig-submitBtn2">Submit Signature</button>
                                                                                            <button class="btn btn-default" id="sig-clearBtn2">Clear Signature</button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-4">
                                                                                        <canvas id="e-sig2" class="e-sig">
                                                                                            Get a better browser, bro.
                                                                                        </canvas>
                                                                                        <div class="btn-group">
                                                                                            <button style="visibility: hidden" class="btn btn-primary" id="sig-submitBtn2">Submit Signature</button>
                                                                                            <button class="btn btn-default" id="sig-clearBtn2">Clear Signature</button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-4">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-6">
                                                                                                    <div class="form-group">
                                                                                                        <label>PRINT NAME:</label>
                                                                                                        <input type="text" name="print_name" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                            <div class="col-lg-6">
                                                                                            <div class="form-group">
                                                                                                <label>DATE:</label>
                                                                                                <input value="{{date('Y-m-d')}}" type="date" class="form-control" name="sig_date_ending">
                                                                                            </div>
                                                                                        </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            <div class="row" style="visibility: hidden">
                                                                                <div class="col-md-12">
                                                                                    <textarea name="third_sig" id="sig-dataUrl2" class="form-control" rows="5"></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <br/>
                                                                            <div class="row" style="visibility: hidden">
                                                                                <div class="col-md-12">
                                                                                    <img id="sig-image2" src="" alt="Your signature will go here!"/>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="card-footer d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <input checked type="checkbox" id="licenseCheck" name="term_condition">
                                                            <label for="licenseCheck">Agree with all terms & conditions</label>
                                                        </div>
                                                        {{--                                                            <div>--}}
                                                        {{--                                                                <button type="button" class="btn btn-primary"--}}
                                                        {{--                                                                        disabled>Email</button>--}}
                                                        {{--                                                                <button type="button" class="btn btn-primary"--}}
                                                        {{--                                                                        disabled>Print</button>--}}
                                                        {{--                                                            </div>--}}

                                                    </div>
                                                    {{--                                                         <h5 class="mb-1">Upload Agreement</h5>--}}
                                                    {{--                                                        <input type="file" name="agreement" class="form-control">--}}
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
                                                        <h6 class="total-amt shadow-sm">Total Amount: <span id="totalAmount">$0</span></h6>
                                                    </div>
                                                </div>

                                                <div class="row g-4">
                                                    <div class="col-lg-6 col-sm-6">
                                                        <div data-bs-toggle="collapse" data-bs-target="#paymentmethodCollapse"
                                                             aria-expanded="true" aria-controls="paymentmethodCollapse"
                                                             onclick="showHideTab()">
                                                            <div class="form-check card-radio">
                                                                <input id="paymentMethod02" name="payment_method" type="radio"
                                                                       class="form-check-input" value="credit_card" checked>
                                                                <label class="form-check-label" for="paymentMethod02">
                                                            <span class="fs-16 text-muted me-2"><i
                                                                    class="ri-bank-card-fill align-bottom"></i></span>
                                                                    <span class="fs-15 text-wrap">Credit / Debit Card</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-sm-6">
                                                        <div data-bs-toggle="collapse" data-bs-target="#paymentMethod03"
                                                             aria-expanded="false" aria-controls="paymentMethod03"
                                                             onclick="showHideTab02()">
                                                            <div class="form-check card-radio">
                                                                <input id="method03" name="payment_method" type="radio"
                                                                       class="form-check-input" value="cod">
                                                                <label class="form-check-label" for="method03">
                                                            <span class="fs-16 text-muted me-2"><i
                                                                    class="ri-money-dollar-box-fill align-bottom"></i></span>
                                                                    <span class="fs-15 text-wrap">Cash In Store</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="collapse " id="paymentmethodCollapse">
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

                                                            <div class="col-md-4">
                                                                <label for="cc-expiration" class="form-label">CVC</label>
                                                                <input autocomplete='off'
                                                                       class='form-control card-cvc' placeholder='ex. 311' size='4'
                                                                       type='text'>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label for="cc-expiration" class="form-label">Expiration Month</label>
                                                                <input
                                                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                                                    type='text'>
                                                            </div>

                                                            <div class="col-md-4">
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
                                                <div class="collapse" id="paymentMethod03">
                                                    <div class="card p-4 border shadow-none mb-0 mt-4">
                                                        <div class="row gy-3">
                                                            <div class="col-md-12">

                                                                <label for="cc-name" class="form-label">Amount</label>
                                                                <input type="hidden" step="any" class="form-control" name="total_amount">
                                                                <input type="number" step="any" class="form-control"
                                                                       placeholder="Enter Amount $" name="paid_amount">
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
                                                    {{--                                                        <button type="button" class="btn btn-primary">Charge Card</button>--}}

                                                    {{--                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"--}}
                                                    {{--                                                                data-bs-target="#staticBackdrop">View--}}
                                                    {{--                                                            Invoice</button>--}}

                                                    <!-- Modal -->
                                                    <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static"
                                                         data-bs-keyboard="false" tabindex="-1"
                                                         aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg card">
                                                            <div class="modal-content">
                                                                <div class="modal-header card-header">
                                                                    <h3 class="modal-title" id="staticBackdropLabel">Invoice
                                                                    </h3>
                                                                    <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                                                        <h3>Invoice #<span
                                                                                                class="digits counter">0420</span>
                                                                                        </h3>
                                                                                        <p>
                                                                                            Issued: May<span class="digits"> 27,
                                                                                        2022</span><br>
                                                                                            Payment Due: June <span
                                                                                                class="digits">27, 2021</span>
                                                                                        </p>
                                                                                    </div>
                                                                                    <!-- End Title                                 -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End InvoiceTop-->

                                                                        <!-- End Invoice Mid-->
                                                                        <div>
                                                                            <div class="table-responsive invoice-table"
                                                                                 id="table">
                                                                                <table
                                                                                    class="table table-bordered table-striped">
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
                                                                    <button type="button" class="btn btn-primary">Print</button>
                                                                    <button type="button" class="btn btn-primary">Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section> <!-- SECTION 6 -->
                                            <h4><i class="las la-check-circle"></i> Inception</h4>
                                            <section class="seven">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <!-- <div class="card-header">
                                                                <h5 class="card-title mb-0">Drop Car Images</h5>
                                                            </div> -->
                                                            <div class="card-body" style="padding: 2rem;">
                                                                <!-- upload images start -->


                                                                <div class="field" align="left" style="margin-bottom: 17px;border: 1px dashed darkgrey;">
                                                                    <h6>Upload Here Multiple Images</h6>
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-12 offset-md-4" >
                                                                        <input type="file" id="files" name="files[]" multiple />
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- {{--                                                                            <div class="dropzone dz-clickable">--}}
                                                                <input name="image" type="file" data-height="300" />
{{--                                                                            </div>--}} -->




                                                                <textarea name="comments" id="checking-comments"
                                                                          cols="15" rows="5" class="form-control"
                                                                          placeholder="comments.."></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section> <!-- SECTION 8 -->
                                            <h4><i class="las la-check-circle"></i> Confirm</h4>
                                            <section class="eight">
                                                <div class="card">

                                                    <div class="card ribbon-box border first-div-to-pdf-btn shadow-none mb-lg-0">
                                                        <div class="card-body">
                                                            <div class="ribbon ribbon-primary round-shape">Customer Info</div>


                                                            <div class="ribbon-content mt-4 text-muted">
                                                                <div id="show_customer_info"></div>
                                                            </div>
                                                        </div>
                                                        <div class="pdf_btn">
                                                            <a href="javascript:;">PDF</a>
                                                        </div>
                                                    </div>
                                                    <div class="card ribbon-box border shadow-none mb-lg-0">
                                                        <div class="card-body">
                                                            <div class="ribbon ribbon-primary round-shape">Booking Info</div>
                                                            <div id="booking_info"></div>
                                                        </div>
                                                    </div>

                                                    <div class="card ribbon-box border shadow-none mb-lg-0">
                                                        <div class="card-body">
                                                            <div class="ribbon ribbon-primary round-shape">Vehicle</div>
                                                            <div class="ribbon-content mt-4 text-muted">
                                                                <div id="show_vehicle_info"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card ribbon-box border shadow-none mb-lg-0">
                                                        <div class="card-body">
                                                            <div class="ribbon ribbon-primary round-shape">Payment</div>
                                                            <div class="ribbon-content mt-4 text-muted">
                                                                <div id="payment_info"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--                                                        <div class="card ribbon-box border shadow-none mb-lg-0">--}}
                                                    {{--                                                            <div class="card-body">--}}
                                                    {{--                                                                <div class="ribbon ribbon-primary round-shape">Inspection</div>--}}
                                                    {{--                                                                <div class="ribbon-content mt-4 text-muted">--}}
                                                    {{--                                                                    <div class="row">--}}
                                                    {{--                                                                        <figure class="col-md-3 img-figure-tag">--}}
                                                    {{--                                                                            <a href="assets/images/toyota-img1.png"--}}
                                                    {{--                                                                               data-size="1600x950">--}}
                                                    {{--                                                                                <div><img src="assets/images/toyota-img1.png"--}}
                                                    {{--                                                                                          alt="Image description"--}}
                                                    {{--                                                                                          class="img-fluid img-hover">--}}
                                                    {{--                                                                                </div>--}}
                                                    {{--                                                                            </a>--}}
                                                    {{--                                                                        </figure>--}}
                                                    {{--                                                                        <figure class="col-md-3 img-figure-tag">--}}
                                                    {{--                                                                            <a href="assets/images/toyota-img2.png"--}}
                                                    {{--                                                                               data-size="1600x950">--}}
                                                    {{--                                                                                <div><img src="assets/images/toyota-img2.png"--}}
                                                    {{--                                                                                          alt="Image description"--}}
                                                    {{--                                                                                          class="img-fluid img-hover"></div>--}}
                                                    {{--                                                                            </a>--}}
                                                    {{--                                                                        </figure>--}}
                                                    {{--                                                                        <figure class="col-md-3 img-figure-tag">--}}
                                                    {{--                                                                            <a href="assets/images/mitsubishi-img1.png"--}}
                                                    {{--                                                                               data-size="1600x950">--}}
                                                    {{--                                                                                <div><img src="assets/images/mitsubishi-img1.png"--}}
                                                    {{--                                                                                          alt="Image description"--}}
                                                    {{--                                                                                          class="img-fluid img-hover"></div>--}}
                                                    {{--                                                                            </a>--}}

                                                    {{--                                                                        </figure>--}}
                                                    {{--                                                                        <figure class="col-md-3 img-figure-tag">--}}
                                                    {{--                                                                            <a href="assets/images/hyundai-img1.png"--}}
                                                    {{--                                                                               data-size="1600x950">--}}
                                                    {{--                                                                                <div><img src="assets/images/hyundai-img1.png"--}}
                                                    {{--                                                                                          alt="Image description"--}}
                                                    {{--                                                                                          class="img-fluid img-hover"></div>--}}
                                                    {{--                                                                            </a>--}}
                                                    {{--                                                                        </figure>--}}
                                                    {{--                                                                    </div>--}}
                                                    {{--                                                                </div>--}}
                                                    {{--                                                            </div>--}}
                                                    {{--                                                        </div>--}}
                                                </div>
                                            </section> <!-- SECTION 8 -->
                                        </div>
                                    </div>
                                    {{--                                    </form>--}}
                                </div>
                                <!--                                -------------------------------------->
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




<script src="{{url('assets')}}/js/frm-wiz/dropify.js"></script>
<script src="{{url('assets')}}/js/frm-wiz/json2.min.js"></script>
<script src="{{url('assets')}}/js/frm-wiz/jquery.signaturepad.js"></script
<script src="{{url('assets')}}/js/frm-wiz/jquery.nice-select.js"></script>
<script src="{{url('assets')}}/js/frm-wiz/jquery.steps.min.js"></script>

<script type="text/javascript" src="{{url('assets/js/frm-wiz/moment.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets')}}/js/frm-wiz/daterangepicker.js"></script>
<script type="text/javascript" src="{{url('assets')}}/js/frm-wiz/jquery.nice-select.js"></script>
{{--<script src="{{url('assets')}}/js/frm-wiz/my-js.js"></script>--}}
{{--<script src="{{url('assets/waqas/jquery.steps.min')}}"></script>--}}
{{--<script src="https://www.codehim.com/demo/jquery-image-uploader-preview-and-delete/dist/image-uploader.min.js"></script>--}}
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
    showHideTab()

    function showHideTab02() {
        let idTab1 = document.getElementById('paymentmethodCollapse');
        let idTab2 = document.getElementById('paymentMethod03');
        idTab2.style.display = 'block';
        idTab1.style.display = 'none';
    }

    function search_car(){
        let car = $("#searchCar").val();
        if (car.length >0 && car !== ' '){
            let _token = "{{csrf_token()}}";
            $.post("{{route('admin.walking_reservation.getCar')}}",{_token,car},function (resp){
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

    function showHideErrors(type){
        if(type === true){
            $("#errors").css('display','block')
        }else{
            $("#errors").css('display','none')
        }
    }

    $(document).ready(function () {
        $('#li').click(function () {
            $(":input", this).prop('checked', true);
        });
        $("#wizard").steps({
            headerTag: "h4",
            bodyTag: "section",
            transitionEffect: "fade",
            enableAllSteps: false,
            transitionEffectSpeed: 500,
            onStepChanging: function (event, currentIndex, newIndex) {

                //getting form data
                let customer_id = $("[name='customer']").val();
                let p_location = $("[name='p_location'] option:selected").html();
                let r_location = $("[name='r_location'] option:selected").html();
                let p_date = $("[name='p_date']").val();
                let r_date = $("[name='r_date']").val();
                let p_hour = $("[name='p_time']").val();
                let p_min = $("[name='p_time_min']").val();
                let p_interval = $("[name='p_time_interval']").val();
                let p_time = p_hour + ' : '+p_min + ' : ' + p_interval
                let r_hour = $("[name='r_time']").val();
                let r_min = $("[name='r_time_min']").val();
                let r_interval = $("[name='r_time_interval']").val();
                let additionalDrivers  = $("[name='additional_driver'] option:selected").val();
                let r_time = r_hour + ' : '+r_min + ' : '+r_interval

                let payment_method = $("[name='payment_method']:checked").val();
                let total_amount = $("[name='total_amount']").val();
                if ( newIndex === 1 ) {
                    // if(r_time.length > 0 && r_time.length >0){
                    //     showHideErrors(false)
                    //     return true
                    // }else {
                    //     showHideErrors(true)
                    //     return false;
                    // }
                    // $('.steps ul').addClass('step-2');
                }
                if ( newIndex === 2 ) {
                    let vehicle_id = $("[name='shab_car']:checked").val();
                    let _token  = '{{csrf_token()}}';
                    $.post("{{url('admin/walkingReservation/getAjaxData/vehicle')}}",{_token,vehicle_id},function (e){
                        $("#show_vehicle_info").html(e)
                    })

                    // showHideErrors(false)
                    // let checkCarDiv = $("#show_cars input[type='radio']:checked");
                    // if(checkCarDiv.length >=1){
                    //     showHideErrors(false)
                    //     return true
                    // }
                    // showHideErrors(true)
                    // return false
                }
                if ( newIndex === 3 ) {
                    //appending drivers if more than 0
                    let appendDrivers ='';
                    if(additionalDrivers > 0){
                            for(let dd=0;dd<additionalDrivers ; dd++){
                            appendDrivers+=  `
                            <div class="accordion-body">
                            <div class="row mb-4" style="align-items: center">
                            <div class="col-md-4" id="all_customer_dropdown">
                            <input type="text" name="d_fname[${dd}]" class="form-control" id="fname${dd}" placeholder="First Name">
                            </div>
                            <div class="col-md-4">
                            <input type="text" name="d_lname[${dd}]" class="form-control" id="lname${dd}" placeholder="Last Name">
                            </div>
                            <div class="col-md-4">
                            <input type="date" name="d_dob[${dd}]" class="form-control dob-check" id="dob${dd}" placeholder="">
                            <span id="errors${dd}"></span>
                            </div>
                            </div>
                            </div>
                            `
                            }
                        $("#additional_drivers_if_selected").html(appendDrivers)
                        }
                    //end drivers section here



                    let booking_info = `<div class="ribbon-content mt-4 text-muted">
                <div class="row">
                <div class="col-md-4">
                <label for="name">Pickup Date: </label>
                <p>${p_date}</p>
                </div>
                <div class="col-md-4">
                <label for="email">Pickup Location: </label>
                <p>${p_location}</p>
                </div>
                <div class="col-md-4">
                <label for="invoice">Pickup Time: </label>
                <p>${p_time}</p>
                </div>
                <div class="col-md-4">
                <label for="b-name">Return Time: </label>
                <p>${r_time}</p>
                </div>
                <div class="col-md-4">
                <label for="name">Return Location: </label>
                <p>${r_location}</p>
                </div>

                </div>
                </div>`

                    //agreement dates
                    let agreement_dates=
                        `
                    <div class="d-flex fr-id justify-content-between">
                        <p>Date Out: <span>${p_date}</span></p>
                        <p>Time Out: <span>${p_time}</span></p>
                    </div>
                    <div class="d-flex fr-id justify-content-between">
                    <p>Date In: <span>${r_date}</span></p>
                    <p>Time In: <span>${r_time}</span></p>
                    </div>
                    <div class="d-flex justify-content-between">
                    <p>Kms Out: <span><input type="text" class="form-control" name="kms_out"></span></p>
                    <p>Kms Driven: <span><input type="text" class="form-control" name="kms_driver"></span></p>
                    </div>
                    <div class="d-flex fr-id justify-content-between">
                    <p>Kms In: <span><input type="text" class="form-control" name="kms_in"></span></p>
                    <p>Kms Allowed: <span><input type="text" class="form-control" name="kms_allowed"></span></p>
                    </div>
                    <div>
                    <p>Excess Kms: <span><input type="text" class="form-control" name="excess_kms"></span></p>
                    </div>
                    <div>
                    <p>Extension: <span><input type="text" class="form-control" name="extension"></span></p>
                    </div>
                    <div>
                    <p></p>
                    </div>
                    <div class="d-flex fr-id justify-content-between">
                    <p class="air-fr">Airport: <span><input class="form-control" type="checkbox" checked name="airport"></span></p>
                    <p>Pick Up: <span>${p_location}</span></p>
                    <p>Drop Off: <span>${r_location}</span></p>
                    </div>
                    `

                    $("#agreement_dates").html(agreement_dates)
                    // $("#payment_info").html(payment_info)
                    $("#booking_info").html(booking_info)
                    let _token  = '{{csrf_token()}}';
                    $.post("{{url('admin/walkingReservation/getAjaxData/customer')}}",{_token,customer_id},function (e){
                        $("#show_customer_info").html(e);
                        $("#agreement_customer_details").html(e)
                    })

                    let options={};
                    let otherOptions={};

                    $("#additional_options input[type='checkbox']:checked").each(function (key,value){
                        options[key] =value.name;
                    })
                    // $("#additional_options input[type='number']").each(function (key,value){
                    $("#additional_options .options option:selected").each(function (key,value){
                        if(value.value !== 0){
                            otherOptions[$(value).attr('data-name')] =value.value;
                        }
                    })


                    //calculating total price
                    let startDate =  new Date(p_date);
                    let endDate =  new Date(r_date);
                    let difference =  endDate.getTime()-startDate.getTime();
                    let TotalDays = Math.ceil(difference / (1000 * 3600 * 24));

                    let car_price =  $("#car_start_price").val();
                    if(TotalDays === 0){
                        TotalDays = 1;
                    }
                    let TotalPrice = TotalDays* parseFloat(car_price);
                    $("[name='total_days']").val(TotalDays)


                    //for agreement price summary
                    $.post("{{route('admin.walking_reservation.agreementPriceSummary')}}",{_token,options,otherOptions,TotalDays,car_price},function (e){
                        $("#agreement_price_summary").html(e)
                        //showing the total amount
                        let getTotalAmount = $("#final_total_price").html()
                        $("#totalAmount").html('$'+getTotalAmount);
                        $("input[name='paid_amount']").val(getTotalAmount);
                        $("input[name='total_amount']").val(getTotalAmount);
                    })


                    // $("#totalAmount").html('$'+TotalPrice);
                    // $("input[name='total_amount']").val(TotalPrice);

                }
                if( newIndex === 4){
                    let age = [];
                    let checkDob = document.querySelectorAll('.dob-check');
                    $(checkDob).each(function (key,value){
                        let getdriverAge = getAge(value.value)
                        if(getdriverAge < 23){
                            $(this).after('<p style="color: red">Driver age must be greater then 23</p>')
                        }
                        age.push(getdriverAge)
                    })

                    if(customer_id !== '' && age.every(el => el > 23) === true){
                        showHideErrors(false)
                        return true;
                    }
                    showHideErrors(true)
                    return false
                }
                if ( newIndex === 6 ) {
                    var radioValue = $("input[name='payment_method']:checked").val();
                    if (radioValue === 'credit_card'){
                        let check = stripe();
                        if (!$("#wizard").hasClass('hide') && check == undefined){
                            return true;
                        }else{
                            return false;
                        }
                    }
                    else{
                        return true
                    }
                }
                if ( currentIndex === 6 ) {
                    {{--let booking_info = `<div class="ribbon-content mt-4 text-muted">--}}
                    {{--<div class="row">--}}
                    {{--<div class="col-md-4">--}}
                    {{--<label for="name">Pickup Date: </label>--}}
                    {{--<p>${p_date}</p>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                    {{--<label for="email">Pickup Location: </label>--}}
                    {{--<p>${p_location}</p>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                    {{--<label for="invoice">Pickup Time: </label>--}}
                    {{--<p>${p_time}</p>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                    {{--<label for="b-name">Return Time: </label>--}}
                    {{--<p>${r_time}</p>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                    {{--<label for="name">Return Location: </label>--}}
                    {{--<p>${r_location}</p>--}}
                    {{--</div>--}}

                    {{--</div>--}}
                    {{--</div>`--}}
                    let payment_info = `
                <div class="row">
                <div class="col-md-4">
                <label for="name">Payment Type: </label>
                <p>${payment_method}</p>
                </div>
                <div class="col-md-4">
                <label for="name">Total Amount: </label>
                <p>$ ${total_amount}</p>
                </div>
                </div>
                `;

                    $("#payment_info").html(payment_info)
                    {{--$("#booking_info").html(booking_info)--}}
                    {{--let customer_id = $("[name='customer']").val();--}}
                    {{--let _token  = '{{csrf_token()}}';--}}
                    {{--$.post("{{url('admin/walkingReservation/getAjaxData/customer')}}",{_token,customer_id},function (e){--}}
                    {{--    $("#show_customer_info").html(e);--}}
                    {{--})--}}
                }
                if(newIndex === 7){
                    let image = $("input[name='image']").val()
                    let comment = $("#checking-comments").val()
                    if(image !== '' && comment.length>0 ){
                        showHideErrors(false)
                        return true;
                    }
                    showHideErrors(true)
                    return false
                }
                else {
                    $('.steps ul').removeClass('step-3');
                }
                return true;
            },
            onFinishing: function (event, currentIndex) {
                for(let u=0;u<=2;u++){
                    let url = document.querySelector('#e-sig'+u).toDataURL();
                    $("#sig-dataUrl"+u).html(url) ;
                }

                $("#form_data").submit();
            },
            labels: {
                finish: "Confirm",
                next: "Next",
                previous: "Previous"
            }
        });

        // Checkbox
        $('.checkbox-circle label').click(function(){
            $('.checkbox-circle label').removeClass('active');
            $(this).addClass('active');
        })

        // getting fleet car onchange
        fleetCar();
    });

    //fleet car
    function fleetCar(){
        let selected_car = $("#fleet_car").val();
        let _token = '{{csrf_token()}}'
        $.post("{{route('admin.walking_reservation.getfleetcar')}}",{_token,selected_car},function (resp){
            $("#fleet_color").html(resp)
        })
    }

    function getAge(dateString) {
        var today = new Date();
        var birthDate = new Date(dateString);
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        return age;
    }
</script>

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
    };

</script>

@include('admin.footer')




