@include('admin.header')
    <!-- dropzone css -->
    <link rel="stylesheet" href="{{url('assets')}}/libs/dropzone/dropzone.css" type="text/css" />

    <style>
        .card-cars {
            box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;
            cursor: pointer;
            transition: .8s;
            transition: transform .8s;
        }

        .card-cars:hover {
            /* transform: scale(1.03); */
            transform: translateY(-5px);
            transition: .8s;
        }

        .license-card {
            height: 70vh;
            overflow-y: scroll;
            box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;

        }

        .img-figure-tag {
            border-radius: 25px;
            box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;

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
                                                <button class="nav-link fs-15 p-3 " id="pills-bill-dates-tab"
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

                                            <!-- Inspection tab -->
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link fs-15 p-3" id="pills-checking-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-checking" type="button"
                                                        role="tab" aria-controls="pills-checking" aria-selected="false"
                                                        data-position="3"><i
                                                        class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>RTO
                                                    Plan</button>
                                            </li>
                                            <!-- Conform -->
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link fs-15 p-3 active" id="pills-confirm-tab"
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
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                        <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#panelsStayOpen-collapseTwo"
                                                                aria-expanded="false"
                                                                aria-controls="panelsStayOpen-collapseTwo">
                                                            Driver License
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
                                            <div class="d-flex justify-content-end">
                                                <a href="#"><button class="btn btn-primary mt-4">Next</button></a>
                                            </div>
                                            <!-- Accordian End -->
                                        </div>
                                        <!-- bill tab pane end-->
                                        <!-- dates tab pane start -->
                                        <div class="tab-pane fade " id="pills-bill-dates" role="tabpanel"
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
                                                <a href="#"><button class="btn btn-primary mt-4">Next</button></a>
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
                                                            <h4>Cars</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <!-- Item 1 -->
                                                            <div class="card card-cars">
                                                                <div class="row g-0">
                                                                    <div class="col-md-2">
                                                                        <img class="rounded-start img-fluid "
                                                                             href="{{url('assets')}}/images/mitsubishi-img1.png"
                                                                             alt="Card image" />
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <div class="card-header">
                                                                            <h5 class="card-title mb-0">Give your text a
                                                                                good structure</h5>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <p class="card-text mb-2">
                                                                                For that very reason, I went on a quest and
                                                                                spoke to many different
                                                                                professional graphic designers and asked
                                                                                them what graphic design tips
                                                                                they live.
                                                                            </p>
                                                                            <p class="card-text">
                                                                                <small class="text-muted">Last updated 3
                                                                                    mins ago</small>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Item 2 -->
                                                            <div class="card card-cars">
                                                                <div class="row g-0">
                                                                    <div class="col-md-2">
                                                                        <img class="rounded-start img-fluid"
                                                                             href="{{url('assets')}}/images/toyota-img1.png"
                                                                             alt="Card image" />
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <div class="card-header">
                                                                            <h5 class="card-title mb-0">Give your text a
                                                                                good structure</h5>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <p class="card-text mb-2">
                                                                                For that very reason, I went on a quest and
                                                                                spoke to many different
                                                                                professional graphic designers and asked
                                                                                them what graphic design tips
                                                                                they live.
                                                                            </p>
                                                                            <p class="card-text">
                                                                                <small class="text-muted">Last updated 3
                                                                                    mins ago</small>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                        <div class="tab-pane fade show active" id="pills-confirm" role="tabpanel"
                                             aria-labelledby="pills-confirm-tab">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Summary</h4>
                                                </div>
                                                <div class="card-body">
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
                                                            <label for="invoice">Invoice #: </label>
                                                            <p>0420</p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="b-name">Brand Name: </label>
                                                            <p>Toyota</p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="name">Pickup Date: </label>
                                                            <p>22/02/2021</p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="name">Return Date: </label>
                                                            <p>22/03/2021</p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="name">Pickup Time: </label>
                                                            <p>2:30 am</p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="name">Return Time: </label>
                                                            <p>2:30 am</p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="name">Driving Licernse #: </label>
                                                            <p>1410900</p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="name">Country: </label>
                                                            <p>Australia</p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="name">Driving Licernse #: </label>
                                                            <p>1410900</p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="name">Driving Licernse #: </label>
                                                            <p>1410900</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <a href="#"><button class="btn btn-primary">Edit</button></a>
                                                <a href="#"><button class="btn btn-primary" style="margin-left: 4px">Move To Process</button></a>
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
