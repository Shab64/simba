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
                    <div class="col-12">
                        <div class="page-title-box  align-items-center justify-content-between">
                            <div class="step-arrow-nav">

                                <ul class="nav nav-pills custom-nav nav-justified" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-experience-tab" data-bs-toggle="pill" data-bs-target="#pills-experience" type="button" role="tab" aria-controls="pills-experience" aria-selected="false" data-position="2">Summary</button>
                                    </li>
<!--                                    <li class="nav-item" role="presentation">-->
<!--                                        <button class="nav-link " id="steparrow-gen-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-gen-info" type="button" role="tab" aria-controls="steparrow-gen-info" aria-selected="true" data-position="0">Return Checking</button>-->
<!--                                    </li>-->

                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- end tab content -->
                </div>

                <div class="tab-content">
                    <div class="tab-pane fade active show" id="pills-experience" role="tabpanel">
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
                    </div>
                    <div class="tab-pane fade " id="steparrow-gen-info" role="tabpanel" aria-labelledby="steparrow-gen-info-tab">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Return Checking</h4>
                                    </div>
                                    <div class="card-body" style="padding: 2rem;">
                                        <!-- upload images start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title mb-0">Drop Car Images</h4>
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <!-- <p class="text-muted">Drop Your Car Images</p> -->

                                                <div class="dropzone dz-clickable">

                                                    <div class="dz-message needsclick">
                                                        <div class="mb-3">
                                                            <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
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
                                                        <a href="{{url('assets')}}/images/toyota-img1.png" data-size="1600x950">
                                                            <div><img src="{{url('assets')}}/images/toyota-img1.png" alt="Image description"
                                                                      class="img-fluid img-hover">
                                                            </div>
                                                        </a>
                                                    </figure>
                                                    <figure class="col-md-3 img-figure-tag">
                                                        <a href="{{url('assets')}}/images/toyota-img2.png" data-size="1600x950">
                                                            <div><img src="{{url('assets')}}/images/toyota-img2.png" alt="Image description"
                                                                      class="img-fluid img-hover"></div>
                                                        </a>
                                                    </figure>
                                                    <figure class="col-md-3 img-figure-tag">
                                                        <a href="{{url('assets')}}/images/mitsubishi-img1.png" data-size="1600x950">
                                                            <div><img src="{{url('assets')}}/images/mitsubishi-img1.png"
                                                                      alt="Image description" class="img-fluid img-hover"></div>
                                                        </a>

                                                    </figure>
                                                    <figure class="col-md-3 img-figure-tag">
                                                        <a href="{{url('assets')}}/images/hyundai-img1.png" data-size="1600x950">
                                                            <div><img src="{{url('assets')}}/images/hyundai-img1.png" alt="Image description"
                                                                      class="img-fluid img-hover"></div>
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Images End -->
                                        <textarea name="checking-comments" id="checking-comments" cols="15" rows="5"
                                                  class="form-control" placeholder="comments.."></textarea>
                                        <div class="d-flex justify-content-end">
                                            <a href="#"><button class="btn btn-primary mt-4">End Rental</button></a>
                                            <a href="#"><button class="btn btn-primary mt-4"
                                                                style="margin-left:10px;">View Invoice</button></a>

                                            <a href="#"><button class="btn btn-primary mt-4" style="margin-left:10px;">Incident
                                                    Report</button></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end tab pane -->



                    <!-- end tab pane -->
                </div>
                <!-- Container Fluid Reservation section content-->

            </div>
        </div>

        <script href="{{url('assets')}}/libs/dropzone/dropzone-min.js"></script>
@include('admin.footer')
