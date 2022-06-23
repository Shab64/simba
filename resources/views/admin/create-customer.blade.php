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
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link fs-15 p-3 active" id="pills-bill-customer-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-bill-customer"
                                                type="button" role="tab" aria-controls="pills-bill-customer"
                                                aria-selected="true" data-position="0"><i
                                                    class="ri-user-2-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>
                                                Customer</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link fs-15 p-3" id="pills-bill-dates-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-bill-dates" type="button"
                                                role="tab" aria-controls="pills-bill-dates" aria-selected="false"
                                                data-position="1"><i
                                                    class="ri-truck-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>
                                                Dates</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link fs-15 p-3" id="pills-cars-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-cars" type="button" role="tab"
                                                aria-controls="pills-cars" aria-selected="false" data-position="2"><i
                                                    class="ri-bank-card-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>
                                                Cars</button>
                                        </li>
                                        <!-- Inspection tab -->
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link fs-15 p-3" id="pills-checking-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-checking" type="button"
                                                role="tab" aria-controls="pills-checking" aria-selected="false"
                                                data-position="5"><i
                                                    class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>Inspection</button>
                                        </li>
                                        <!-- Agreement tab -->
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link fs-15 p-3" id="pills-agreement-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-agreement" type="button"
                                                role="tab" aria-controls="pills-agreement" aria-selected="false"
                                                data-position="4"><i
                                                    class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>Agreement</button>
                                        </li>
                                        <!-- Payment Tab Start-->
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link fs-15 p-3" id="pills-payment-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-payment" type="button"
                                                role="tab" aria-controls="pills-payment" aria-selected="false"
                                                data-position="3"><i
                                                    class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>Payment</button>
                                        </li>
                                        <!-- Conform -->
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link fs-15 p-3" id="pills-confirm-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-confirm" type="button"
                                                role="tab" aria-controls="pills-confirm" aria-selected="false"
                                                data-position="3"><i
                                                    class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>Confirm</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <!-- bill tab pane start -->
                                    <div class="tab-pane fade show active" id="pills-bill-customer" role="tabpanel"
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
                                    <div class="tab-pane fade" id="pills-bill-dates" role="tabpanel"
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
                                                <h4>Agrement</h4>
                                            </div>
                                            <div class="card-body card-aggrement">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ab
                                                deleniti a quo nam quia nisi ducimus pariatur officia illum,
                                                consequuntur dolorem eaque fuga. Consequuntur eius atque ducimus facere
                                                cumque.
                                                Libero animi facere dicta assumenda saepe a error, soluta aperiam
                                                tempore necessitatibus earum, voluptates maiores expedita ea quasi quas
                                                explicabo possimus. Doloremque, autem velit tempora provident architecto
                                                exercitationem dicta molestias!
                                                Necessitatibus laudantium rerum perferendis consequuntur distinctio
                                                perspiciatis sed. Enim earum aut minus autem quasi, cum, a expedita iste
                                                ut molestias debitis ullam minima mollitia fugit quas ex natus id
                                                inventore.
                                                Porro cum, minus velit ea architecto suscipit aut eos ut eius in, autem
                                                quo hic! Eum pariatur molestias sint placeat, doloremque necessitatibus
                                                non aliquid, magni, nihil autem illo est dolore.
                                                Nisi voluptate ad delectus! Vero neque commodi minima corrupti cumque
                                                officia veniam, eaque ex hic atque, distinctio veritatis, natus illo
                                                sapiente. In, quo sit nobis illo recusandae alias odit suscipit?
                                                Accusantium tenetur laudantium debitis dicta suscipit perferendis ex non
                                                saepe magni hic. Blanditiis magni quaerat perspiciatis sit libero
                                                deleniti vel incidunt odit laudantium facilis temporibus, quasi
                                                voluptatum pariatur quae perferendis!
                                                Tempora quas optio vero iusto quam commodi, odio vitae voluptatem totam
                                                accusantium ducimus maxime nemo obcaecati, minus necessitatibus, quod
                                                rem esse. Commodi veritatis nobis asperiores aut consectetur harum
                                                similique praesentium.
                                                Dolores ipsa animi cumque quod iste. Excepturi quo laudantium eius
                                                perferendis iure at sunt sit corrupti quis, inventore repudiandae omnis
                                                eum officia ducimus nulla ipsum, nam saepe repellendus fugiat? Ad?
                                                Odit magnam molestiae dolore hic. Mollitia autem tempora natus, quaerat
                                                explicabo quod pariatur unde ducimus, voluptatem nulla molestias debitis
                                                enim similique nostrum nam quo, odio officiis ex ullam eos commodi!
                                                Molestias quod aspernatur praesentium fugiat dolor, animi amet nemo
                                                ratione voluptas, consequuntur est natus ab, aut voluptatem quia aliquam
                                                quisquam! Repellat ab vel perferendis, magnam facilis eius suscipit
                                                dicta illum.
                                                Eveniet voluptate hic, consectetur debitis provident molestiae
                                                doloremque eligendi, aliquid culpa impedit repellendus at corporis!
                                                Accusamus doloremque consequuntur porro libero laborum facere
                                                exercitationem illum nemo aliquam, eligendi delectus ea inventore!
                                                Cumque harum, voluptatem reiciendis sunt assumenda praesentium at
                                                perspiciatis veniam quidem veritatis! Natus laborum nulla eveniet
                                                repudiandae non omnis veniam provident accusantium culpa in, distinctio
                                                ad nisi nobis velit aliquid.
                                                Voluptates expedita nisi culpa veritatis, autem dolorum saepe tenetur
                                                quas nam dignissimos beatae ad odit totam sapiente provident dolores
                                                vero unde suscipit mollitia? Illum voluptatibus error provident
                                                consequatur eum fugit.
                                                Pariatur architecto voluptate delectus iusto, qui mollitia cupiditate
                                                blanditiis doloribus repudiandae quas. Sint provident debitis earum
                                                repellat. Cum qui velit ad eveniet, alias modi veniam labore corporis
                                                nisi debitis culpa.
                                                Delectus provident sequi, ab quisquam earum voluptate ducimus id rem?
                                                Ratione pariatur dolorum maiores necessitatibus unde, neque blanditiis
                                                voluptatem consequatur! Consectetur, est cum? Commodi fugiat aperiam
                                                ullam nihil tenetur natus.
                                                Commodi laudantium accusamus aliquid eaque provident voluptas quo
                                                repellendus eum fuga, explicabo, labore aperiam eos dolore deserunt
                                                eligendi eveniet nesciunt! Debitis ex illo inventore quas, hic eos
                                                doloribus aliquam sequi.
                                                Voluptate distinctio necessitatibus iusto minima ipsam quos nemo dolores
                                                voluptatibus expedita. Aliquam alias doloribus maiores velit nobis non,
                                                nulla at id deleniti quis obcaecati voluptate dolorum minus aperiam
                                                nesciunt fugit.
                                                Veniam, ad assumenda! Qui, dignissimos reiciendis eum quaerat voluptatem
                                                labore et consequuntur. Commodi tempore veniam consequuntur possimus
                                                magni dolores, repellat maiores ipsum, in iste similique sapiente velit.
                                                Repellat, odio tenetur.
                                                Dolore pariatur optio soluta? Assumenda deserunt provident quam vitae
                                                harum laborum earum. Quidem fugit libero cupiditate provident eum
                                                incidunt distinctio fugiat nam, officiis nisi explicabo perspiciatis
                                                quia esse commodi! Optio.
                                                Commodi facere sed ducimus perferendis accusamus blanditiis impedit.
                                                Dolor adipisci veritatis nostrum natus itaque dignissimos autem delectus
                                                dolore tenetur tempora in, minima enim ratione provident porro! Soluta
                                                voluptate cupiditate voluptas.
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
<!-- las la-angle-double-up -->
<!-- las la-angle-double-down -->
