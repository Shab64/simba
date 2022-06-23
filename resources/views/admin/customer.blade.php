@include('admin.header')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-6">

                    <div class="card">
                        <div class="card-body">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs mb-3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab"
                                        aria-selected="true">
                                        Customer
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#product1" role="tab"
                                        aria-selected="false">
                                        Dates
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#messages" role="tab"
                                        aria-selected="false">
                                        Cars
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#settings" role="tab"
                                        aria-selected="false">
                                        Payment
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#aggrement" role="tab"
                                        aria-selected="false">
                                        Aggrement
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#checking" role="tab"
                                        aria-selected="false">
                                        Checking
                                    </a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content  text-muted">
                                <div class="tab-pane active" id="home" role="tabpanel">

                                    <!-- Accordian  Start-->
                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                                    aria-controls="panelsStayOpen-collapseOne">
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
                                                                                        class="form-control" id="city">
                                                                                </div>
                                                                            </div>
                                                                            <!--end col-->
                                                                            <div class="col-xxl-3 col-md-6">
                                                                                <div>
                                                                                    <label for="state"
                                                                                        class="form-label">State</label>
                                                                                    <input type="text"
                                                                                        class="form-control" id="state">
                                                                                </div>
                                                                            </div>
                                                                            <!--end col-->
                                                                            <div class="col-xxl-3 col-md-6">
                                                                                <div>
                                                                                    <label for="zip"
                                                                                        class="form-label">Zip</label>
                                                                                    <input type="text"
                                                                                        class="form-control" id="zip">
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
                                                                                        <option selected="">Choose...
                                                                                        </option>
                                                                                        <option>Pakistan</option>
                                                                                        <option>Germany</option>
                                                                                        <option>United States</option>
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
                                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
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
                                                                <label for="dlNumber" class="form-label">Dl
                                                                    Number</label>
                                                                <input type="text" class="form-control" id="dlNumber">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div>
                                                                <label for="expiryDate" class="form-label">Expiration
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="expiryDate">
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
                                    <!-- Accordian End -->
                                </div>
                                <div class="tab-pane" id="product1" role="tabpanel">
                                    <h6>Product</h6>
                                    <p class="mb-0">
                                        You've probably heard that opposites attract. The same is true for fonts. Don't
                                        be afraid to combine font styles that are different but complementary, like sans
                                        serif with serif, short with tall, or decorative with simple. Qui photo booth
                                        letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl
                                        cillum PBR.
                                    </p>
                                </div>
                                <div class="tab-pane" id="messages" role="tabpanel">
                                    <h6>Messages</h6>
                                    <p class="mb-0">
                                        Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                        sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                        farm-to-table readymade. Messenger bag gentrify pitchfork
                                        tattooed craft beer, iphone skateboard locavore carles etsy
                                        salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                    </p>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <h6>Settings</h6>
                                    <p class="mb-0">
                                        Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                        art party before they sold out master cleanse gluten-free squid
                                        scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                        art party locavore wolf cliche high life echo park Austin. Cred
                                        vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                        farm-to-table VHS.
                                    </p>
                                </div>
                                <div class="tab-pane" id="aggrement" role="tabpanel">
                                    <h6>Aggrement</h6>
                                    <p class="mb-0">
                                        Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                        art party before they sold out master cleanse gluten-free squid
                                        scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                        art party locavore wolf cliche high life echo park Austin. Cred
                                        vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                        farm-to-table VHS.
                                    </p>
                                </div>
                                <div class="tab-pane" id="checking" role="tabpanel">
                                    <h6>Checking</h6>
                                    <p class="mb-0">
                                        Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                        art party before they sold out master cleanse gluten-free squid
                                        scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                        art party locavore wolf cliche high life echo park Austin. Cred
                                        vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                        farm-to-table VHS.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div>
                <!--end col-->

            </div>
        </div>
    </div>
</div>
<!-- End Page-content -->
@include('admin.footer')
