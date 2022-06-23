@include('admin.header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/tom-select@1.7.5/dist/css/tom-select.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/tom-select@1.7.5/dist/js/tom-select.complete.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="./assets/css/jquery.bootstrap.year.calendar.min.css">
<script src="./assets/js/jquery.bootstrap.year.calendar.min.js"></script>
<style>
.jqyc-range-choosen-between {
    background-color: #157EFB !important;
    color: #FFF;
    border-radius: 0.25rem;
}

.crd-bx-shdow {
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    margin-top: 2rem;
}

.switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #333;
    -webkit-transition: .4s;
    transition: .4s;
}

.slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
}

input:checked+.slider {
    background-color: #ff3100;
}

input:focus+.slider {
    box-shadow: 0 0 1px #ff3100;
}

input:checked+.slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
    border-radius: 34px;
}

.slider.round:before {
    border-radius: 50%;
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

.border-style {
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    transform: translateY(0px);
    transition: 0.4s;
}

.border-style:hover {
    transform: translateY(-10px);
    transition: 0.4s;

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

.ribbon-content label {
    color: black;
}

.ribbon-box .card-body {
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
    width: 400px;
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

.text-right {
    text-align: end !important;
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

.t-unit-btn {
    position: absolute;
    top: 30px;
    right: 15px;
}

.t-unit-parent {
    position: relative;
}

.font-times-style {
    font-size: 22px;
}

.icon-test-div {
    align-self: center;
}
</style>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="card-title">Cars Calendar</h4>
                                </div>
                                <div style="width:20%;">
                                    <select id="car-dropoff" placeholder="Select cars..." autocomplete="off">
                                        <option value="">Select cars...</option>
                                        <option value="1">Mitsubishi Mirage Or Similar</option>
                                        <option value="2">Kia Carnival or Similar</option>
                                        <option value="3">Hyundai i30 or similar</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="card card-cars">
                                    <div class="car">
                                        <img class="rounded-start img-fluid" href="{{url('assets')}}/images/mitsubishi-img1.png"
                                            alt="Card image">
                                    </div>
                                </div>
                                <!-- Tabs Card Start -->
                                <div class="card">
                                    <div class="card-body checkout-tab">
                                        <form action="#">
                                            <div class="step-arrow-nav mt-n3 mx-n3 mb-3">
                                                <ul class="nav nav-pills nav-justified custom-nav" role="tablist">

                                                    <!-- Dates Tab Start -->
                                                    <!-- <li class="nav-item" role="presentation">
                                                        <button class="nav-link fs-15 p-3 active"
                                                            id="pills-bill-dates-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-bill-dates" type="button" role="tab"
                                                            aria-controls="pills-bill-dates" aria-selected="true"
                                                            data-position="0"><i
                                                                class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>
                                                            3 Months</button>
                                                    </li> -->
                                                    <!-- Cars Tab Start -->
                                                    <!-- <li class="nav-item" role="presentation">
                                                        <button class="nav-link fs-15 p-3" id="pills-cars-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-cars"
                                                            type="button" role="tab" aria-controls="pills-cars"
                                                            aria-selected="false" data-position="1"><i
                                                                class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>
                                                            6 months</button>
                                                    </li> -->
                                                    <!-- Payment Tab Start-->
                                                    <!-- <li class="nav-item" role="presentation">
                                                        <button class="nav-link fs-15 p-3" id="pills-payment-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-payment"
                                                            type="button" role="tab" aria-controls="pills-payment"
                                                            aria-selected="false" data-position="4"><i
                                                                class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>1
                                                            year</button>
                                                    </li> -->


                                                </ul>
                                            </div>
                                            <div class="tab-content">

                                                <!-- dates tab pane start -->
                                                <div class="tab-pane fade show active" id="pills-bill-dates"
                                                    role="tabpanel" aria-labelledby="pills-bill-dates-tab">
                                                    <div class="calendar"></div>
                                                </div>
                                                <!-- dates tab pane end-->
                                                <!-- cars tab pane start -->
                                                <div class="tab-pane fade" id="pills-cars" role="tabpanel"
                                                    aria-labelledby="pills-cars-tab">
                                                    <h6>6 months</h6>
                                                </div>

                                                <!-- cars tab pane end -->
                                                <!-- Payment tab pane start -->
                                                <div class="tab-pane fade" id="pills-payment" role="tabpanel"
                                                    aria-labelledby="pills-payment-tab">
                                                    <h6>1 year</h6>
                                                </div>
                                                <!-- Payment tab end -->
                                            </div>
                                            <!-- end tab content -->
                                        </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- Tabs Card End -->

                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
        </div>
    </div>
</div>

<script>
$('.calendar').calendar({
    mode: 'rangepicker'
});

$('.calendar').on('jqyc.changeYearToPrevious', function(event) {
    var currentYear = $(this).find('.jqyc-change-year').data('year');
    console.log(currentYear);
});

$('.calendar').on('jqyc.changeYearToNext', function(event) {
    var currentYear = $(this).find('.jqyc-next-year').data('year');
    console.log(currentYear);
});

$('.calendar').on('jqyc.dayChoose', function(event) {
    var choosenYear = $(this).data('year');
    var choosenMonth = $(this).data('month');
    var choosenDay = $(this).data('day-of-month');
    var date = new Date(choosenYear, choosenMonth, choosenDay);
    console.log(date);
});

new TomSelect("#car-dropoff", {
    create: false,
    sortField: {
        field: "text",
        direction: "asc"
    }
});
</script>
@include('admin.footer')
<!-- las la-angle-double-up -->
<!-- las la-angle-double-down -->
