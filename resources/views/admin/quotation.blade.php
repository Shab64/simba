@include('admin.header')
    <!-- dropzone css -->
    <link rel="stylesheet" href="{{url('assets')}}/libs/dropzone/dropzone.css" type="text/css" />

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
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link fs-15 p-3 active" id="pills-bill-dates-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-bill-dates" type="button"
                                                        role="tab" aria-controls="pills-bill-dates" aria-selected="true"
                                                        data-position="0"><i
                                                        class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>
                                                    Dates</button>
                                            </li>
                                            <!-- Cars Tab Start -->
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link fs-15 p-3" id="pills-cars-tab" data-bs-toggle="pill"
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


                                            <!-- Conform -->
                                             <li class="nav-item" role="presentation">
                                                <button class="nav-link fs-15 p-3" id="pills-confirm-tab"
                                                    data-bs-toggle="pill" data-bs-target="#pills-confirm" type="button"
                                                    role="tab" aria-controls="pills-confirm" aria-selected="false"
                                                    data-position="6"><i
                                                        class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>Quotation</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
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
                                                            Customer
                                                        </button>
                                                    </h2>
                                                    <div id="panelsStayOpen-collapseOne"
                                                         class="accordion-collapse collapse show"
                                                         aria-labelledby="panelsStayOpen-headingOne">
                                                        <div class="accordion-body">
                                                            <div class="row mb-4" style="align-items: center">
                                                                <div class="col-md-10">
                                                                    <input list="browsers" name="browser" id="browser"
                                                                           class="form-control" placeholder="Search Customer">

                                                                    <datalist id="browsers">
                                                                        <option value="Edge">
                                                                        </option>
                                                                        <option value="Firefox">
                                                                        </option>
                                                                        <option value="Chrome">
                                                                        </option>
                                                                        <option value="Opera">
                                                                        </option>
                                                                        <option value="Safari">
                                                                        </option>
                                                                    </datalist>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <a href="#" onclick="cus.style.display='block'">

                                                                        or Create New Customer
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!-- form1 Start -->
                                                            <div class="row" style="display: none" id="cus">

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
                                                                    <div class="accordion-item">
                                                                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                                            <button class="accordion-button collapsed" type="button"
                                                                                    data-bs-toggle="collapse"
                                                                                    data-bs-target="#panelsStayOpen-collapseTwo"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="panelsStayOpen-collapseTwo">
                                                                                License
                                                                            </button>
                                                                        </h2>
                                                                        <div id="panelsStayOpen-collapseTwo"
                                                                             class="accordion-collapse collapse show"
                                                                             aria-labelledby="panelsStayOpen-headingTwo">
                                                                            <div class="accordion-body">
                                                                                <div class="row">
                                                                                    <div class="col-lg-4">
                                                                                        <div>
                                                                                            <label for="dlNumber" class="form-label">DL
                                                                                                Number</label>
                                                                                            <input type="text" class="form-control"
                                                                                                   id="dlNumber">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-4">
                                                                                        <div>
                                                                                            <label for="expiryDate"
                                                                                                   class="form-label">Expiration
                                                                                                Date</label>
                                                                                            <input type="date" class="form-control"
                                                                                                   id="expiryDate">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-4">
                                                                                        <!-- image upload button -->
                                                                                        <label for="fileUpload">File Upload</label>
                                                                                        <input type="file" class="form-control">
                                                                                    </div>
                                                                                </div>
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
                                            <div class="d-flex justify-content-between mt-4">
                                                <button class="btn btn-light previestab"
                                                        data-previous="pills-cars-tab">Back</button>
                                                <button class="btn btn-primary nexttab"
                                                        data-nexttab="pills-confirm-tab">Next</button>
                                            </div>
                                            <!-- Accordian End -->
                                        </div>
                                        <!-- bill tab pane end-->
                                        <!-- dates tab pane start -->
                                        <div class="tab-pane fade show active" id="pills-bill-dates" role="tabpanel"
                                             aria-labelledby="pills-bill-dates-tab">

                                            <!-- Form -->
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-xxl-3 col-md-6 mb-3">
                                                            <div>
                                                                <label for="pickupdate" class="form-label">Pick Up
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="pickupdate">
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-6 mb-3">
                                                            <div>
                                                                <label for="returndate" class="form-label">Return
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="returndate">
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-6 mb-3">
                                                            <div>
                                                                <label for="pickuptime" class="form-label">Pick Up
                                                                    Time</label>
                                                                <input type="time" class="form-control" id="pickuptime">
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-6 mb-3">
                                                            <div>
                                                                <label for="returntime" class="form-label">Return
                                                                    Time</label>
                                                                <input type="time" class="form-control" id="returntime">
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-6 mb-3">
                                                            <div>
                                                                <label for="pickuplocation" class="form-label">Pick Up
                                                                    Location</label>
                                                                <input type="text" class="form-control" id="pickuplocation">
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-6 mb-3">
                                                            <div>
                                                                <label for="returnlocation" class="form-label">Return
                                                                    Location</label>
                                                                <input type="text" class="form-control" id="returnlocation">
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-6 mb-3">
                                                            <div>
                                                                <label for="driver" class="form-label">Driver</label>
                                                                <select name="driver" id="driver" class="form-control"
                                                                        onclick="showDriverName()">
                                                                    <option value="with">With Driver</option>
                                                                    <option value="without" selected>Without Driver</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-6 mb-3" style="display:none;"
                                                             id="driverBlock">
                                                            <div>
                                                                <label for="driverName" class="form-label">Driver
                                                                    Name</label>
                                                                <input type="text" class="form-control" id="driverName">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <button class="btn btn-primary mt-4 nexttab"
                                                        data-nexttab="pills-cars-tab">Next</button>
                                            </div>
                                            <!-- Form end -->

                                        </div>
                                        <!-- dates tab pane end-->
                                        <!-- cars tab pane start -->
                                        <div class="tab-pane fade" id="pills-cars" role="tabpanel"
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
                                                                        </option><option value="Firefox">
                                                                        </option><option value="Chrome">
                                                                        </option><option value="Opera">
                                                                        </option><option value="Safari">
                                                                        </option></datalist>
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
                                                                            <img class="rounded-start img-fluid" href="{{url('assets')}}/images/toyota-img1.png" alt="Card image">
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
                                                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                                    Add To Rent
                                                                                </button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="card card-cars">

                                                                        <div class="car">
                                                                            <img class="rounded-start img-fluid" href="{{url('assets')}}/images/cerato.png" alt="Card image">
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
                                                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                                    Add To Rent
                                                                                </button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="card card-cars">

                                                                        <div class="car">
                                                                            <img class="rounded-start img-fluid" href="{{url('assets')}}/images/mitsubishi-img1.png" alt="Card image">
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
                                                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                                    Add To Rent
                                                                                </button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Item 1 -->

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                                Options</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <!-- Option 1 -->
                                                                            <div class="card">
                                                                                <div class="card-body">
                                                                                    <div class="d-flex justify-content-between">
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
                                                                                        <input type="number" id="quantity" name="quantity" min="1" max="5">
                                                                                    </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- option 2 -->
                                                                            <div class="card">
                                                                                <div class="card-body">
                                                                                    <div class="d-flex justify-content-between">

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
                                                                                    <div class="d-flex justify-content-between">

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
                                                                                    <div class="d-flex justify-content-between">

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
                                                                                            <a href="#"><i class=" las la-edit"></i></a>
                                                                                            $ 75.00 x <input type="checkbox">
                                                                                        </div>


                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- option 5 -->
                                                                            <div class="card">
                                                                                <div class="card-body">
                                                                                    <div class="d-flex justify-content-between">

                                                                                        <div>
                                                                                            <h4>Additional Driver</h4>
                                                                                            <p>Use this option if there is
                                                                                                more then 1 Driver.</p>
                                                                                        </div>
                                                                                        <div>
                                                                                            <a href="#"><i class=" las la-edit"></i></a>
                                                                                            $ 30.00 x
                                                                                            <input type="number" id="quantity" name="quantity" min="1" max="5">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- option 6 -->
                                                                            <div class="card">
                                                                                <div class="card-body">
                                                                                    <div class="d-flex justify-content-between">

                                                                                        <div>
                                                                                            <h4>Child Seat</h4>
                                                                                            <p>For Children between 0-4
                                                                                                Years
                                                                                            </p>
                                                                                        </div>
                                                                                        <div>
                                                                                            <a href="#"><i class=" las la-edit"></i></a>
                                                                                            $ 30.00 x
                                                                                            <input type="number" id="quantity" name="quantity" min="1" max="5">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- option 7 -->
                                                                            <div class="card">
                                                                                <div class="card-body">
                                                                                    <div class="d-flex justify-content-between">

                                                                                        <div>
                                                                                            <h4>Booster Seat</h4>
                                                                                            <p>For Children between 4-8
                                                                                                Years</p>
                                                                                        </div>
                                                                                        <div>
                                                                                            <a href="#"><i class=" las la-edit"></i></a>
                                                                                            $ 30.00 x
                                                                                            <input type="number" id="quantity" name="quantity" min="1" max="5">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <button type="button" class="btn btn-primary">Add</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Item 2 -->

                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between mt-4">
                                                        <button class="btn btn-light previestab"
                                                                data-previous="pills-bill-dates-tab">Back</button>
                                                        <button class="btn btn-primary  nexttab"
                                                                data-nexttab="pills-bill-customer-tab">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- checking tab start -->
                                        <div class="tab-pane fade" id="pills-checking" role="tabpanel"
                                             aria-labelledby="pills-checking-tab">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4 class="card-title">Return Checking</h4>
                                                        </div>
                                                        <div class="card-body" style="padding: 2rem;">
                                                            <!-- upload images start -->
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h4 class="card-title mb-0">Drop Images</h4>
                                                                </div><!-- end card header -->

                                                                <div class="card-body">
                                                                    <p class="text-muted">Drop Your Car Images</p>

                                                                    <div class="dropzone dz-clickable">

                                                                        <div class="dz-message needsclick">
                                                                            <div class="mb-3">
                                                                                <i
                                                                                    class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                                                            </div>

                                                                            <h4>Drop files here or click to upload.</h4>
                                                                        </div>
                                                                    </div>

                                                                    <ul class="list-unstyled mb-0" id="dropzone-preview">

                                                                    </ul>
                                                                    <!-- end dropzon-preview -->
                                                                </div>
                                                                <!-- end card body -->
                                                            </div>

                                                            <!-- Upload images End -->
                                                            <!-- Images Start-->

                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h4 class="card-title mb-0">Images</h4>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <figure class="col-md-3 img-figure-tag">
                                                                            <a href="{{url('assets')}}/images/toyota-img1.png"
                                                                               data-size="1600x950">
                                                                                <div><img
                                                                                        href="{{url('assets')}}/images/toyota-img1.png"
                                                                                        alt="Image description"
                                                                                        class="img-fluid img-hover">
                                                                                </div>
                                                                            </a>
                                                                        </figure>
                                                                        <figure class="col-md-3 img-figure-tag">
                                                                            <a href="{{url('assets')}}/images/toyota-img2.png"
                                                                               data-size="1600x950">
                                                                                <div><img
                                                                                        href="{{url('assets')}}/images/toyota-img2.png"
                                                                                        alt="Image description"
                                                                                        class="img-fluid img-hover"></div>
                                                                            </a>
                                                                        </figure>
                                                                        <figure class="col-md-3 img-figure-tag">
                                                                            <a href="{{url('assets')}}/images/mitsubishi-img1.png"
                                                                               data-size="1600x950">
                                                                                <div><img
                                                                                        href="{{url('assets')}}/images/mitsubishi-img1.png"
                                                                                        alt="Image description"
                                                                                        class="img-fluid img-hover"></div>
                                                                            </a>

                                                                        </figure>
                                                                        <figure class="col-md-3 img-figure-tag">
                                                                            <a href="{{url('assets')}}/images/hyundai-img1.png"
                                                                               data-size="1600x950">
                                                                                <div><img
                                                                                        href="{{url('assets')}}/images/hyundai-img1.png"
                                                                                        alt="Image description"
                                                                                        class="img-fluid img-hover"></div>
                                                                            </a>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Images End -->
                                                            <textarea name="checking-comments" id="checking-comments"
                                                                      cols="15" rows="5" class="form-control"
                                                                      placeholder="comments.."></textarea>
                                                            <div class="d-flex justify-content-end">
                                                                <a href="#"><button
                                                                        class="btn btn-primary mt-4">Next</button></a>
                                                            </div>
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
                                                                    <a href="{{url('assets')}}/images/toyota-img1.png" data-size="1600x950">
                                                                        <div><img src="{{url('assets')}}/images/toyota-img1.png" alt="Image description" class="img-fluid img-hover">
                                                                        </div>
                                                                    </a>
                                                                </figure>
                                                                <figure class="col-md-3 img-figure-tag">
                                                                    <a href="{{url('assets')}}/images/toyota-img2.png" data-size="1600x950">
                                                                        <div><img src="{{url('assets')}}/images/toyota-img2.png" alt="Image description" class="img-fluid img-hover"></div>
                                                                    </a>
                                                                </figure>
                                                                <figure class="col-md-3 img-figure-tag">
                                                                    <a href="{{url('assets')}}/images/mitsubishi-img1.png" data-size="1600x950">
                                                                        <div><img src="{{url('assets')}}/images/mitsubishi-img1.png" alt="Image description" class="img-fluid img-hover"></div>
                                                                    </a>

                                                                </figure>
                                                                <figure class="col-md-3 img-figure-tag">
                                                                    <a href="{{url('assets')}}/images/hyundai-img1.png" data-size="1600x950">
                                                                        <div><img src="{{url('assets')}}/images/hyundai-img1.png" alt="Image description" class="img-fluid img-hover"></div>
                                                                    </a>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <a href="#"><button class="btn btn-primary">Save And Send</button></a>
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
    </script>
@include('admin.footer')
