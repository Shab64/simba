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
                                        <!-- Inspection tab -->
                                        <!-- <li class="nav-item" role="presentation">
                                            <button class="nav-link fs-15 p-3" id="pills-checking-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-checking" type="button"
                                                role="tab" aria-controls="pills-checking" aria-selected="false"
                                                data-position="3"><i
                                                    class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>Inspection</button>
                                        </li> -->
                                        <!-- Payment Tab Start-->
                                        <!-- <li class="nav-item" role="presentation">
                                            <button class="nav-link fs-15 p-3" id="pills-payment-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-payment" type="button"
                                                role="tab" aria-controls="pills-payment" aria-selected="false"
                                                data-position="4"><i
                                                    class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>Payment</button>
                                        </li> -->
                                        <!-- Agreement tab -->
                                        <!-- <li class="nav-item" role="presentation">
                                            <button class="nav-link fs-15 p-3" id="pills-agreement-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-agreement" type="button"
                                                role="tab" aria-controls="pills-agreement" aria-selected="false"
                                                data-position="5"><i
                                                    class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>Agreement</button>
                                        </li> -->

                                        <!-- Conform -->
                                        <!-- <li class="nav-item" role="presentation">
                                            <button class="nav-link fs-15 p-3" id="pills-confirm-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-confirm" type="button"
                                                role="tab" aria-controls="pills-confirm" aria-selected="false"
                                                data-position="6"><i
                                                    class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>Confirm</button>
                                        </li> -->
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
                                            <div class="col-lg-4 col-sm-6">
                                                <div data-bs-toggle="collapse"
                                                    data-bs-target="#paymentmethodCollapse.show" aria-expanded="false"
                                                    aria-controls="paymentmethodCollapse">
                                                    <div class="form-check card-radio">
                                                        <input id="paymentMethod01" name="paymentMethod" type="radio"
                                                            class="form-check-input">
                                                        <label class="form-check-label" for="paymentMethod01">
                                                            <span class="fs-16 text-muted me-2"><i
                                                                    class="ri-paypal-fill align-bottom"></i></span>
                                                            <span class="fs-15 text-wrap">Paypal</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
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

                                            <div class="col-lg-4 col-sm-6">
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

                                        <div class="d-flex align-items-start gap-3 mt-4">
                                            <!-- <button type="button" class="btn btn-light btn-label previestab"
                                                data-previous="pills-bill-dates-tab"><i
                                                    class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>Back
                                                to Shipping</button>
                                            <button type="button"
                                                class="btn btn-primary btn-label right ms-auto nexttab"
                                                data-nexttab="pills-payment-tab"><i
                                                    class="ri-shopping-basket-line label-icon align-middle fs-16 ms-2"></i>Complete
                                                Order</button> -->
                                            <button type="button" class="btn btn-primary" disabled>Create
                                                Invoice</button>
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
                                                        <img src="{{url('assets')}}/images/Simba_Final_webPNG.png" alt=""
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
                                            <div class="card-body card-aggrement">
                                                <p>MEMORANDUM OF AGREEMENT between the party (hereinafter called “the
                                                    Hirer”) described in Item 1 of the Schedule and SIMBA CAR HIRE PTY
                                                    LTD whose
                                                    registered office is situated at 4/937 Marion Rd, Mitchell Park SA
                                                    5043 in the State of South Australia as the Proprietor of Simba Car
                                                    Hire (hereinafter called
                                                    “the Owner”)</p>

                                                <p>WHEREBY IT IS AGREED that</p>
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
                                                    <div class="col-md-6">
                                                        <div class="d-flex justify-content-between">
                                                            <span>Driver (1) </span>
                                                            <span>ITEM 1 –THE HIRER</span>
                                                        </div>
                                                        <div>
                                                            <p>First Name: <span>Asad</span></p>
                                                        </div>
                                                        <div>
                                                            <p>Sur Name: <span>Asad</span></p>
                                                        </div>
                                                        <div>
                                                            <p>Email: <span>asadhashmi22@gmail.com</span></p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Phone No: <span>090078601</span></p>
                                                            <p>DOB: <span>22/02/1970</span></p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>License No: <span>090078601</span></p>
                                                            <p>Expiry: <span>22/02/1970</span></p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <span>Driver (2) </span>
                                                            <span>ITEM 2 </span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>First Name: <span>Dasa</span></p>
                                                            <p>Sur Name: <span>Dasa</span></p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Phone No: <span>090078601</span></p>
                                                            <p>DOB: <span>22/02/1970</span></p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>License No: <span>090078601</span></p>
                                                            <p>Expiry: <span>22/02/1970</span></p>
                                                        </div>
                                                        <div>
                                                            <p>Credit/Debit Card Details</p>
                                                        </div>
                                                        <div>
                                                            <p>Card Number: <span>_______________</span></p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Expiry: <span>______/________</span></p>
                                                            <p>CVN: <span>_____</span></p>
                                                        </div>
                                                        <div>
                                                            <p>BSB: <span>_______</span></p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>ACCOUNT No: <span>________________</span></p>
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
                                                    <div class="col-md-6">
                                                        <div class="d-flex justify-content-between">
                                                            <span>Vehicle </span>
                                                            <span>ITEM 3 </span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Registration No: <span>090078601</span></p>
                                                            <p>Colour: <span>22/02/1970</span></p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Date Out: <span>23/02/2021</span></p>
                                                            <p>Time Out: <span>22/02/1970</span></p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Date In: <span>23/02/2021</span></p>
                                                            <p>Time In: <span>22/02/1970</span></p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Kms Out: <span>23/02/2021</span></p>
                                                            <p>Kms Driven: <span>22/02/1970</span></p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Kms In: <span>23/02/2021</span></p>
                                                            <p>Kms Allowed: <span>22/02/1970</span></p>
                                                        </div>
                                                        <div>
                                                            <p>Excess Kms: <span></span></p>
                                                        </div>
                                                        <div>
                                                            <p>Extension: <span></span></p>
                                                        </div>
                                                        <div>
                                                            <p></p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Airport: <span>23/02/2021</span></p>
                                                            <p>Pick Up: <span>Y/N</span></p>
                                                            <p>Drop Off: <span>Y/N</span></p>
                                                        </div>
                                                        <div>
                                                            <p></p>
                                                        </div>
                                                        <div>
                                                            <div class="text-align-center">
                                                                <p>INSURANCE EXCESS </p>
                                                            </div>
                                                            <div>
                                                                <p>SINGLE VEHICLE EXCESS APPLIES: $4818.00 OR <br>
                                                                    REDUCED TO: $ <span></span></p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="Tick-box"
                                                                    style="height: 29px;width: 100px;border: 1px solid;">
                                                                </p>
                                                                <span style="text-align: justify;">UNDERBODY DAMAGE,
                                                                    REVERSING DAMAGE, SCRATCH AND
                                                                    DENT IS DRIVERS’ LIABILITY AND WILL RESULT IN
                                                                    A $4818 CHARGE TO THE DRIVER.
                                                                    OR EXCESS COST, WHICHEVER IS THE LOWER
                                                                    AMOUNT.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <table style="text-align:center;">
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
                                                                    <td>20</td>
                                                                    <td>$10</td>
                                                                    <td>$05</td>
                                                                    <td>$40</td>
                                                                    <td>$40</td>
                                                                    <td>$40</td>
                                                                    <td>$40</td>
                                                                    <td>$40</td>
                                                                    <td>$450</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="8">TOTAL CONTRACT VALUE</td>
                                                                    <td colspan="9">$500</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">Item 4</td>
                                                                    <td colspan="5">SECURITY BOND REFUND $
                                                                        <span>$6566</span>
                                                                    </td>
                                                                    <td colspan="1">LESS DEPOSIT PAID</td>
                                                                    <td colspan="9">$400</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">TOTAL PAID <span>$</span></td>
                                                                    <td colspan="5"> <span></span></td>
                                                                    <td colspan="1"> SECURITY BOND
                                                                    </td>
                                                                    <td colspan="9"> $500
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="8" style="text-align-last: end;">SUB
                                                                        TOTAL </td>
                                                                    <td colspan="9">$900</td>

                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div>
                                                            <p style="text-align:justify;">THIS DOCUMENT IS YOUR
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
                                                        <img src="{{url('assets')}}/images/car-img-agrement.PNG" alt="car-img"
                                                            class="img-fluid" style="width:100%;height:100%;">
                                                    </div>
                                                    <div class="col-md-2">
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
                                                    <div class="col-md-4" style="text-align:end;">
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
                                                <div class="d-flex justify-content-between">
                                                    <p>Signature Of Hirer <span>__________</span></p>
                                                    <p>Signature Of Owner <span>__________</span></p>
                                                    <p>Date: <span>__________</span></p>
                                                </div>
                                                <div>
                                                    <div class="d-flex justify-content-center">
                                                        <h5>On Return</h5>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <p>FUEL GAUGE: FULL <span>Y/N</span></p>
                                                        </div>
                                                        <div>
                                                            <p>OTHER CHARGES:____________$__________ = </p>
                                                        </div>
                                                        <div>
                                                            <p>TOTAL PAID:$____________ </p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <p>X=Dent</p>
                                                        </div>
                                                        <div>
                                                            <p>Y= Small Scratch/dent</p>
                                                        </div>
                                                        <div>
                                                            <p>Z=Large Scratch </p>
                                                        </div>
                                                        <div>
                                                            <p>O=Missing/Broken part </p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <p>Windscreen <span>Z</span></p>
                                                        </div>
                                                        <div>
                                                            <p>Rims <span>Y</span></p>
                                                        </div>
                                                        <div>
                                                            <p>Seats <span>O</span></p>
                                                        </div>
                                                        <div>
                                                            <p>Boot <span>X</span></p>
                                                        </div>
                                                        <div>
                                                            <p>Body <span>Y</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p>Signature Of Hirer <span>__________</span></p>
                                                        <p>Signature Of Owner <span>__________</span></p>
                                                        <p>Date: <span>__________</span></p>
                                                    </div>
                                                </div>
                                                <!-- Terms & Conditions -->
                                                <div class="d-flex justify-content-center">
                                                    <h6 style="text-align-center;">TERMS AND CONDITIONS</h6>
                                                </div>
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
                                                        <p>PRINT NAME: ______________________________________________
                                                        </p>
                                                        <p>SIGNATURE: _______________________________________________
                                                        </p>
                                                        <p>DATE: ______________________</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer d-flex justify-content-between align-items-center">
                                                <div>
                                                    <input type="checkbox" id="licenseCheck">
                                                    <label for="licenseCheck">Agree with all terms & conditions</label>
                                                </div>
                                                <button type="button" class="btn btn-primary" disabled>Next</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Agreement tab end -->
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
                                        <div>
                                            <h5 class="mb-1">Summary</h5>
                                            <p class="text-muted mb-4">Summary Details...
                                            </p>
                                        </div>
                                        <a href="#"><button class="btn btn-primary">Confirm</button></a>
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
