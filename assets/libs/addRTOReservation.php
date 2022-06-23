<?php require_once ("header.blade.php")?>
<!-- dropzone css -->
<link rel="stylesheet" href="assets/libs/dropzone/dropzone.css" type="text/css" />

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

    .card-cars:hover {
        /* transform: scale(1.03); */
        transform: translateY(-5px);
        transition: .8s;


    }
    .card-cars:hover .car{
        box-shadow:0px 0px 25px #e7e7e7;
    }

.license-card {
    height: 70vh;
    overflow-y: scroll;
    box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;

}
    .ribbon-content label{
        color:black;
    }
    .ribbon-box .card-body{
        margin-top: 12px;
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
    text-align: end;

}

#pills-checking input[type=text] {
    margin-bottom: 20px;
}

    .car{
        width: 400px;
        margin: 0px auto;
        border-radius: 19px;
        background: aliceblue;
        position: relative;
        bottom: 30px;
        text-align: center;
        box-shadow:0px 0px 15px #e7e7e7;
    }

    .car img{
        text-align: center;
    }

    .card-cars .card-title{
        font-size: 23px!important;
        text-align: center;
        font-weight: 700!important;
    }

    .card-cars .card-body{
        padding-left: 0;
        padding-right: 0;
        padding-bottom: 0;
    }

    .card-cars button{
        width: 100%;
        border-radius: 0;
    }

    @media (max-width:767px ) {
        .car{
            width: 100%;
            margin: 0px auto;
            border-radius: 19px;
            background: aliceblue;
            position: relative;
            bottom: 30px;
            text-align: center;
            box-shadow:0px 0px 15px #e7e7e7;
        }
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
                                    <ul class="nav nav-pills nav-justified custom-nav" role="tablist">

                                        <!-- Dates Tab Start -->

                                        <!-- Cars Tab Start -->
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link fs-15 p-3 active" id="pills-cars-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-cars" type="button" role="tab"
                                                aria-controls="pills-cars" aria-selected="false" data-position="1"><i
                                                    class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>
                                                Cars</button>
                                        </li>
                                        <!-- Customer Tab Start -->
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link fs-15 p-3" id="pills-bill-customer-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-bill-customer"
                                                type="button" role="tab" aria-controls="pills-bill-customer"
                                                aria-selected="false" data-position="2"><i
                                                    class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>
                                                Customer</button>
                                        </li>
                                        <!-- Inspection tab -->
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link fs-15 p-3" id="pills-checking-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-checking" type="button"
                                                role="tab" aria-controls="pills-checking" aria-selected="false"
                                                data-position="3"><i
                                                    class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>RTO
                                                Plan</button>
                                        </li>
                                        <!-- Agreement tab -->
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link fs-15 p-3" id="pills-agreement-tab"
                                                    data-bs-toggle="pill" data-bs-target="#pills-agreement" type="button"
                                                    role="tab" aria-controls="pills-agreement" aria-selected="false"
                                                    data-position="5"><i
                                                        class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>Agreement</button>
                                        </li>
                                        <!-- Payment Tab Start-->
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link fs-15 p-3" id="pills-payment-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-payment" type="button"
                                                role="tab" aria-controls="pills-payment" aria-selected="false"
                                                data-position="4"><i
                                                    class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>Payment</button>
                                        </li>
                                        <!-- insurance -->
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link fs-15 p-3" id="pills-bill-customer-tab2"
                                                    data-bs-toggle="pill" data-bs-target="#pills-bill-customer2"
                                                    type="button" role="tab" aria-controls="pills-bill-customer2"
                                                    aria-selected="false" data-position="2"><i
                                                        class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>
                                                Insurance</button>
                                        </li>

                                        <!-- Conform -->
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link fs-15 p-3" id="pills-confirm-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-confirm" type="button"
                                                role="tab" aria-controls="pills-confirm" aria-selected="false"
                                                data-position="6"><i
                                                    class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>Confirm</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">

                                    <div class="tab-pane fade " id="pills-bill-customer2" role="tabpanel"
                                         aria-labelledby="pills-bill-customer-tab2">
                                        <!-- Accordian  Start-->

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
                                        <div class="d-flex justify-content-end">
                                            <a href="#"><button class="btn btn-primary mt-4">Next</button></a>
                                        </div>
                                        <!-- Accordian End -->
                                    </div>

                                    <!-- customer tab pane start -->
                                    <div class="tab-pane fade " id="pills-bill-customer" role="tabpanel"
                                        aria-labelledby="pills-bill-customer-tab">
                                        <!-- Accordian  Start-->
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
                                                <div id="panelsStayOpen-collapseOne"
                                                    class="accordion-collapse collapse show"
                                                    aria-labelledby="panelsStayOpen-headingOne">
                                                    <div class="accordion-body">
                                                        <!-- form1 Start -->
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="live-preview">
                                                                            <div class="row gy-4">
                                                                                <div class="col-xxl-3 col-md-6">
                                                                                    <div>
                                                                                        <label for="firstName"
                                                                                            class="form-label">First
                                                                                            Name</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="firstName">
                                                                                    </div>
                                                                                </div>
                                                                                <!--end col-->
                                                                                <div class="col-xxl-3 col-md-6">
                                                                                    <div>
                                                                                        <label for="lastName"
                                                                                            class="form-label">Last
                                                                                            Name</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="lastName">
                                                                                    </div>
                                                                                </div>
                                                                                <!--end col-->
                                                                                <div class="col-xxl-3 col-md-6">
                                                                                    <div>
                                                                                        <label for="email"
                                                                                            class="form-label">Email</label>
                                                                                        <div class="form-icon">
                                                                                            <input type="email"
                                                                                                class="form-control form-control-icon"
                                                                                                id="email"
                                                                                                placeholder="example@gmail.com">
                                                                                            <i
                                                                                                class="ri-mail-unread-line"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end col -->
                                                                                <div class="col-xxl-3 col-md-6">
                                                                                    <div>
                                                                                        <label for="phoneNumber"
                                                                                            class="form-label">Phone
                                                                                            Number</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="phoneNumber">
                                                                                    </div>
                                                                                </div>
                                                                                <!--end col-->
                                                                                <div class="col-xxl-3 col-md-6">
                                                                                    <div>
                                                                                        <label for="street"
                                                                                            class="form-label">Street</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="street">
                                                                                    </div>
                                                                                </div>
                                                                                <!--end col-->
                                                                                <div class="col-xxl-3 col-md-6">
                                                                                    <div>
                                                                                        <label for="street2"
                                                                                            class="form-label">Street
                                                                                            2</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="street2">
                                                                                    </div>
                                                                                </div>
                                                                                <!--end col-->
                                                                                <div class="col-xxl-3 col-md-6">
                                                                                    <div>
                                                                                        <label for="city"
                                                                                            class="form-label">City</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="city">
                                                                                    </div>
                                                                                </div>
                                                                                <!--end col-->
                                                                                <div class="col-xxl-3 col-md-6">
                                                                                    <div>
                                                                                        <label for="state"
                                                                                            class="form-label">State</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="state">
                                                                                    </div>
                                                                                </div>
                                                                                <!--end col-->
                                                                                <div class="col-xxl-3 col-md-6">
                                                                                    <div>
                                                                                        <label for="zip"
                                                                                            class="form-label">Zip</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="zip">
                                                                                    </div>
                                                                                </div>
                                                                                <!--end col-->
                                                                                <div class="col-xxl-3 col-md-6">
                                                                                    <div>
                                                                                        <label for="country"
                                                                                            class="form-label">Country</label>
                                                                                        <select id="inputState"
                                                                                            class="form-select"
                                                                                            data-choices=""
                                                                                            data-choices-sorting="true">
                                                                                            <option selected="">
                                                                                                Choose...
                                                                                            </option>
                                                                                            <option>Pakistan</option>
                                                                                            <option>Germany</option>
                                                                                            <option>United States
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <!--end col-->
                                                                                <div class="col-xxl-3 col-md-6">
                                                                                    <div>
                                                                                        <label for="exampleInputdate"
                                                                                            class="form-label">Input
                                                                                            Date</label>
                                                                                        <input type="date"
                                                                                            class="form-control"
                                                                                            id="exampleInputdate">
                                                                                    </div>
                                                                                </div>
                                                                                <!--end col-->
                                                                            </div>
                                                                            <!--end row-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div> <!-- form1 end -->
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <a href="#"><button class="btn btn-primary mt-4">Next</button></a>
                                        </div>
                                        <!-- Accordian End -->
                                    </div>

<!--                                    </div>-->
                                    <!-- dates tab pane end-->
                                    <!-- cars tab pane start -->
                                    <div class="tab-pane fade active show" id="pills-cars" role="tabpanel"
                                         aria-labelledby="pills-cars-tab">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <!-- Search box & heading -->
                                                        <div class="row" style="align-items: center">
                                                            <div class="col-md-10">
                                                                <input list="browsers" name="browser" id="browser" class="form-control" placeholder="Search Vehicle">

                                                                <datalist id="browsers">
                                                                    <option value="Edge">
                                                                    <option value="Firefox">
                                                                    <option value="Chrome">
                                                                    <option value="Opera">
                                                                    <option value="Safari">
                                                                </datalist>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <a href="#">

                                                                    or Create New Vehicle
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="card-body">

                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card card-cars">

                                                                    <div class="car">
                                                                        <img class="rounded-start img-fluid"
                                                                             src="assets/images/toyota-img1.png"
                                                                             alt="Card image" />
                                                                    </div>
                                                                    <div class="car-body">
                                                                        <div class="card-header">
                                                                            <h5 class="card-title mb-0">
                                                                                Toyota Corolla or similar
                                                                            </h5>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <p class="card-text">
                                                                                Compact
                                                                            </p>
                                                                            <h6 class="card-text mb-2">
                                                                                Starting From
                                                                            </h6>
                                                                            <p class="card-text">
                                                                                $75.00
                                                                            </p>
                                                                            <button type="button"
                                                                                    class="btn btn-primary"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#exampleModal">
                                                                                Add To RTO
                                                                            </button>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="card card-cars">

                                                                    <div class="car">
                                                                        <img class="rounded-start img-fluid"
                                                                             src="assets/images/cerato.png"
                                                                             alt="Card image" />
                                                                    </div>
                                                                    <div class="car-body">
                                                                        <div class="card-header">
                                                                            <h5 class="card-title mb-0">
                                                                                Kia Cerato Hatch or similar
                                                                            </h5>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <p class="card-text">
                                                                                Intermediate
                                                                            </p>
                                                                            <h6 class="card-text mb-2">
                                                                                Starting From
                                                                            </h6>
                                                                            <p class="card-text">
                                                                                $85.00
                                                                            </p>
                                                                            <button type="button"
                                                                                    class="btn btn-primary"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#exampleModal">
                                                                                Add To RTO
                                                                            </button>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="card card-cars">

                                                                    <div class="car">
                                                                        <img class="rounded-start img-fluid"
                                                                             src="assets/images/mitsubishi-img1.png"
                                                                             alt="Card image" />
                                                                    </div>
                                                                    <div class="car-body">
                                                                        <div class="card-header">
                                                                            <h5 class="card-title mb-0">
                                                                                Mitsubishi Mirage or similar
                                                                            </h5>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <p class="card-text">
                                                                                Mini
                                                                            </p>
                                                                            <h6 class="card-text mb-2">
                                                                                Starting From
                                                                            </h6>
                                                                            <p class="card-text">
                                                                                $65.00
                                                                            </p>
                                                                            <button type="button"
                                                                                    class="btn btn-primary"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#exampleModal">
                                                                                Add To RTO
                                                                            </button>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Item 1 -->

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Options</h5>
                                                                        <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <!-- Option 1 -->
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <div
                                                                                        class="d-flex justify-content-between">
                                                                                    <div>
                                                                                        <h4>BASIC COVER INCLUDED</h4>
                                                                                        <p>If you have an accident or
                                                                                            damage
                                                                                            the
                                                                                            vehicle, your excess
                                                                                            liability
                                                                                            is
                                                                                            $4,818.</p>
                                                                                    </div>
                                                                                    <span>
                                                                                        <a href="#"><i class=" las la-edit"></i></a>
                                                                                        $0.00 x
                                                                                        <input type="number"
                                                                                               id="quantity"
                                                                                               name="quantity" min="1"
                                                                                               max="5">
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- option 2 -->
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <div
                                                                                        class="d-flex justify-content-between">

                                                                                    <div>
                                                                                        <h4>Silver Cover</h4>
                                                                                        <p>This allows you to reduce the
                                                                                            excess liability to $1800.
                                                                                            Includes Roadside Assistance
                                                                                        </p>
                                                                                    </div>
                                                                                    <div>
                                                                                        <a href="#"><i class=" las la-edit"></i></a>
                                                                                        $ 270.00 x
                                                                                        <input type="checkbox">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- option 3 -->
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <div
                                                                                        class="d-flex justify-content-between">

                                                                                    <div>
                                                                                        <h4>Gold Cover</h4>
                                                                                        <p>This allows you to reduce the
                                                                                            excess liability to $0.
                                                                                            Includes Roadside Assistance
                                                                                        </p>
                                                                                    </div>
                                                                                    <div>
                                                                                        <a href="#"><i class=" las la-edit"></i></a>
                                                                                        $ 450.00 x
                                                                                        <input type="checkbox">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- option 4 -->
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <div
                                                                                        class="d-flex justify-content-between">

                                                                                    <div>
                                                                                        <h4>Drivers Under 25 and Over 75
                                                                                            Years</h4>
                                                                                        <p>You MUST select this option
                                                                                            if you are under 25 or Over
                                                                                            75 years Old. Excess For
                                                                                            Drivers <br> under 25 and Over 75
                                                                                            is $5000.</p>
                                                                                    </div>

                                                                                    <div>
                                                                                        <a href="#"><i class=" las la-edit"></i></a>
                                                                                        $ 75.00 x <input type="checkbox">
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- option 5 -->
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <div
                                                                                        class="d-flex justify-content-between">

                                                                                    <div>
                                                                                        <h4>Additional Driver</h4>
                                                                                        <p>Use this option if there is
                                                                                            more then 1 Driver.</p>
                                                                                    </div>
                                                                                    <div>
                                                                                        <a href="#"><i class=" las la-edit"></i></a>
                                                                                        $ 30.00 x
                                                                                        <input type="number"
                                                                                               id="quantity"
                                                                                               name="quantity" min="1"
                                                                                               max="5">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- option 6 -->
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <div
                                                                                        class="d-flex justify-content-between">

                                                                                    <div>
                                                                                        <h4>Child Seat</h4>
                                                                                        <p>For Children between 0-4
                                                                                            Years
                                                                                        </p>
                                                                                    </div>
                                                                                    <div>
                                                                                        <a href="#"><i class=" las la-edit"></i></a>
                                                                                        $ 30.00 x
                                                                                        <input type="number"
                                                                                               id="quantity"
                                                                                               name="quantity" min="1"
                                                                                               max="5">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- option 7 -->
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <div
                                                                                        class="d-flex justify-content-between">

                                                                                    <div>
                                                                                        <h4>Booster Seat</h4>
                                                                                        <p>For Children between 4-8
                                                                                            Years</p>
                                                                                    </div>
                                                                                    <div>
                                                                                        <a href="#"><i class=" las la-edit"></i></a>
                                                                                        $ 30.00 x
                                                                                        <input type="number"
                                                                                               id="quantity"
                                                                                               name="quantity" min="1"
                                                                                               max="5">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                        <button type="button"
                                                                                class="btn btn-primary">Add</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Item 2 -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- cars tab pane end -->
                                    <!-- Payment tab pane start -->
                                    <div class="tab-pane fade" id="pills-payment" role="tabpanel"
                                        aria-labelledby="pills-payment-tab">
                                        <div>
                                            <h5 class="mb-1">Payment Selection</h5>
                                            <p class="text-muted mb-4">Please select and enter your billing information
                                            </p>
                                        </div>

                                        <div class="row g-4">

                                            <div class="col-lg-6 col-sm-6">
                                                <div data-bs-toggle="collapse" data-bs-target="#paymentmethodCollapse"
                                                    aria-expanded="true" aria-controls="paymentmethodCollapse">
                                                    <div class="form-check card-radio">
                                                        <input id="paymentMethod02" name="paymentMethod" type="radio"
                                                            class="form-check-input" checked="">
                                                        <label class="form-check-label" for="paymentMethod02">
                                                            <span class="fs-16 text-muted me-2"><i
                                                                    class="ri-bank-card-fill align-bottom"></i></span>
                                                            <span class="fs-15 text-wrap">Credit / Debit Card</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-sm-6">
                                                <div data-bs-toggle="collapse"
                                                    data-bs-target="#paymentmethodCollapse.show" aria-expanded="false"
                                                    aria-controls="paymentmethodCollapse">
                                                    <div class="form-check card-radio">
                                                        <input id="paymentMethod03" name="paymentMethod" type="radio"
                                                            class="form-check-input">
                                                        <label class="form-check-label" for="paymentMethod03">
                                                            <span class="fs-16 text-muted me-2"><i
                                                                    class="ri-money-dollar-box-fill align-bottom"></i></span>
                                                            <span class="fs-15 text-wrap">Cash In Store</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="collapse show" id="paymentmethodCollapse">
                                            <div class="card p-4 border shadow-none mb-0 mt-4">
                                                <div class="row gy-3">
                                                    <div class="col-md-12">
                                                        <label for="cc-name" class="form-label">Name on card</label>
                                                        <input type="text" class="form-control" id="cc-name"
                                                            placeholder="Enter name">
                                                        <small class="text-muted">Full name as displayed on card</small>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="cc-number" class="form-label">Credit card
                                                            number</label>
                                                        <input type="text" class="form-control" id="cc-number"
                                                            placeholder="xxxx xxxx xxxx xxxx">
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="cc-expiration" class="form-label">Expiration</label>
                                                        <input type="text" class="form-control" id="cc-expiration"
                                                            placeholder="MM/YY">
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="cc-cvv" class="form-label">CVV</label>
                                                        <input type="text" class="form-control" id="cc-cvv"
                                                            placeholder="xxx">
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
                                            <button type="button" class="btn btn-primary">Charge Card</button>

                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">View
                                                Invoice</button>

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
                                    </div>
                                    <!-- Payment tab end -->

                                    <!-- Agreement tab start -->
                                    <div class="tab-pane fade" id="pills-agreement" role="tabpanel"
                                        aria-labelledby="pills-agreement-tab">
                                        <div class="card license-card">
                                            <div class="card-header">
                                                <div class="d-flex justify-content-between header-aggrement-main-div">
                                                    <div class="img-agreement">
                                                        <img src="assets/images/Simba_Final_webPNG.png" alt=""
                                                            height="60">
                                                    </div>
                                                    <h4>Agreement</h4>
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
                                            <div class="card-body">
                                                <img src="assets/images/agree.PNG" alt="agreement" style="width:100%">
                                                <img src="assets/images/agree2.PNG" alt="agreement" style="width:100%">
                                            </div>
                                            <div class="card-footer d-flex justify-content-between align-items-center">
                                                <div>
                                                    <input type="checkbox" id="licenseCheck">
                                                    <label for="licenseCheck">Agree with all terms & conditions</label>
                                                </div>
                                                <div>
                                                    <button type="button" class="btn btn-primary" disabled>Email</button>
                                                    <button type="button" class="btn btn-primary" disabled>Print</button>
                                                    <button type="button" class="btn btn-primary" disabled>Next</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Agreement tab end -->
                                    <!-- RTO PLAN tab start -->
                                    <div class="tab-pane fade" id="pills-checking" role="tabpanel"
                                        aria-labelledby="pills-checking-tab">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">RTO Installment Plan</h4>
                                                    </div>
                                                    <div class="card-body" style="padding: 2rem;">
                                                        <div class="d-flex justify-content-between">
                                                            <p>Name</p>
                                                            <p></p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Served By</p>
                                                            <p></p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Vehicle</p>
                                                            <p></p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Purchase Price</p>
                                                            <input type="text">
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Less Deposit</p>
                                                            <input type="text">
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Balance</p>
                                                            <p>0</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>RideShare & DPTI Fees
                                                            </p>
                                                            <input type="text">
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Miscellenous Fees</p>
                                                            <input type="text">
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Final Balance</p>
                                                            <p>0</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Interest Year 1</p>
                                                            <p>0</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Interest Year 2</p>
                                                            <p>0</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Interest Year 3</p>
                                                            <p>0</p>
                                                        </div>

                                                        <div class="d-flex justify-content-between">
                                                            <p>Weekly Amount For 1 Year</p>
                                                            <p>0.00</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Weekly Amount For 2 Year</p>
                                                            <p>0.00</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Weekly Amount For 3 Year</p>
                                                            <p>0.00</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Insurance Per Week</p>
                                                            <input type="text">
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Excess Drivers Over 25 is $950</p>
                                                            <input type="text">
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Excess Drivers Over 25 is $1350</p>
                                                            <input type="text">
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Unlisted Driver Additional $1400</p>
                                                            <input type="text">
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Unlisted Driver Under 25 Additional $2000</p>
                                                            <input type="text">
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Weekly Amount With Insurance For 1 Year</p>
                                                            <p>0.00</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Weekly Amount With Insurance 2 Year</p>
                                                            <p>0.00</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Weekly Amount With Insurance For 3 Year</p>
                                                            <p>0.00</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>WEEKLY AMOUNT DIRECT DEBT FEE 1.5% 1 YEAR</p>
                                                            <p>0.00</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>WEEKLY AMOUNT DIRECT DEBT FEE 1.5% 2 YEAR</p>
                                                            <p>0.00</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>WEEKLY AMOUNT DIRECT DEBT FEE 1.5% 3 YEAR</p>
                                                            <p>0.00</p>
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
                                    <!-- checking tab end -->
                                    <!-- Summary tab pane start -->
                                    <div class="tab-pane fade" id="pills-confirm" role="tabpanel"
                                        aria-labelledby="pills-confirm-tab">
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
                                                    <div class="ribbon ribbon-primary round-shape">Booking Info</div>


                                                    <div class="ribbon-content mt-4 text-muted">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="name">Pickup Date: </label>
                                                                <p>xyz</p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="email">Pickup Location: </label>
                                                                <p>xyz</p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="invoice">Pickup Time: </label>
                                                                <p>xyz</p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="b-name">Return Time: </label>
                                                                <p>xyz</p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="name">Return Location: </label>
                                                                <p>xyz</p>
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
                                                    <div class="ribbon ribbon-primary round-shape">Inspection</div>
                                                    <div class="ribbon-content mt-4 text-muted">
                                                        <div class="row">
                                                            <figure class="col-md-3 img-figure-tag">
                                                                <a href="assets/images/toyota-img1.png" data-size="1600x950">
                                                                    <div><img src="assets/images/toyota-img1.png" alt="Image description" class="img-fluid img-hover">
                                                                    </div>
                                                                </a>
                                                            </figure>
                                                            <figure class="col-md-3 img-figure-tag">
                                                                <a href="assets/images/toyota-img2.png" data-size="1600x950">
                                                                    <div><img src="assets/images/toyota-img2.png" alt="Image description" class="img-fluid img-hover"></div>
                                                                </a>
                                                            </figure>
                                                            <figure class="col-md-3 img-figure-tag">
                                                                <a href="assets/images/mitsubishi-img1.png" data-size="1600x950">
                                                                    <div><img src="assets/images/mitsubishi-img1.png" alt="Image description" class="img-fluid img-hover"></div>
                                                                </a>

                                                            </figure>
                                                            <figure class="col-md-3 img-figure-tag">
                                                                <a href="assets/images/hyundai-img1.png" data-size="1600x950">
                                                                    <div><img src="assets/images/hyundai-img1.png" alt="Image description" class="img-fluid img-hover"></div>
                                                                </a>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <a href="#"><button class="btn btn-primary">Confirm</button></a>
                                        </div>
                                    </div>
                                    <!-- summary tab end -->
                                </div>
                                <!-- end tab content -->
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

<!-- Dropzone min -->
<script src="assets/libs/dropzone/dropzone-min.js"></script>
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
</script>
<?php require_once ("footer.blade.php")?>
<!-- las la-angle-double-up -->
<!-- las la-angle-double-down -->
