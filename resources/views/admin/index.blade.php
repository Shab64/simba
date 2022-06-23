@include('admin.header')


    <style>
        .ribbon-ul{
            list-style: none;
            padding: 0;
            height: 100px;
            overflow-y: scroll;

        }
        .ribbon-ul li{
            margin-bottom: 5px;
            border-bottom: 1px solid aliceblue;
            padding-bottom: 4px;
            padding-right: 10px;
        }

        .ribbon-ul li .d-flex{
            justify-content: space-between!important;
        }
        /* width */
        .ribbon-ul::-webkit-scrollbar {
            width: 7px;
        }

        /* Track */
        .ribbon-ul::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        .ribbon-ul::-webkit-scrollbar-thumb {
            background: #888;
        }




    </style>



<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box  align-items-center justify-content-between">
                        <div class="step-arrow-nav">

                            <ul class="nav nav-pills custom-nav nav-justified" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-experience-tab" data-bs-toggle="pill" data-bs-target="#pills-experience" type="button" role="tab" aria-controls="pills-experience" aria-selected="false" data-position="2">Dashboard</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="steparrow-gen-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-gen-info" type="button" role="tab" aria-controls="steparrow-gen-info" aria-selected="true" data-position="0">Daily Manifest</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="steparrow-description-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-description-info" type="button" role="tab" aria-controls="steparrow-description-info" aria-selected="false" data-position="1">Info</button>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                    <!-- end tab content -->
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="pills-experience" role="tabpanel">

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Vehicles on RTO</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class="text-success fs-14 mb-0">
                                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +16.24 %
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="55">0</span></h4>
                                            <a href="#" class="text-decoration-underline text-muted">See Details</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-soft-success rounded fs-3">
                                                                <i class="bx bx-car text-success"></i>
                                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Vehicles on Rental</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class="text-success fs-14 mb-0">
                                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +16.24 %
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="559">0</span></h4>
                                            <a href="#" class="text-decoration-underline text-muted">See Details</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-soft-success rounded fs-3">
                                                                <i class="bx bx-car text-success"></i>
                                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Customers</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class="text-success fs-14 mb-0">
                                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +29.08 %
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="183">0</span></h4>
                                            <a href="#" class="text-decoration-underline text-muted">See details</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-soft-warning rounded fs-3">
                                                                <i class="bx bx-user-circle text-warning"></i>
                                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Uber Vehicles</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class="text-muted fs-14 mb-0">
                                                +0.00 %
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="165">0</span></h4>
                                            <a href="#" class="text-decoration-underline text-muted">See Details</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-soft-primary rounded fs-3">
                                                                <i class="bx bx-car text-primary"></i>
                                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Rental Cars</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class="text-success fs-14 mb-0">
                                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +16.24 %
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="559">0</span></h4>
                                            <a href="#" class="text-decoration-underline text-muted">See Details</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-soft-success rounded fs-3">
                                                                <i class="bx bx-car text-success"></i>
                                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total RTO Cars</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class="text-success fs-14 mb-0">
                                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +16.24 %
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="559">0</span></h4>
                                            <a href="#" class="text-decoration-underline text-muted">See Details</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-soft-success rounded fs-3">
                                                                <i class="bx bx-car text-success"></i>
                                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">In Process Reservations</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class="text-success fs-14 mb-0">
                                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +16.24 %
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="559">0</span></h4>
                                            <a href="#" class="text-decoration-underline text-muted">See Details</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-soft-success rounded fs-3">
                                                                <i class="bx bx-car text-success"></i>
                                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Inspection Due Cars</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class="text-success fs-14 mb-0">
                                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +16.24 %
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="559">0</span></h4>
                                            <a href="#" class="text-decoration-underline text-muted">See Details</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-soft-success rounded fs-3">
                                                                <i class="bx bx-car text-success"></i>
                                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header border-0 align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Revenue</h4>
                                    <div>
                                        <button type="button" class="btn btn-soft-secondary btn-sm">
                                            ALL
                                        </button>
                                        <button type="button" class="btn btn-soft-secondary btn-sm">
                                            1M
                                        </button>
                                        <button type="button" class="btn btn-soft-secondary btn-sm">
                                            6M
                                        </button>
                                        <button type="button" class="btn btn-soft-primary btn-sm">
                                            1Y
                                        </button>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-header p-0 border-0 bg-soft-light">
                                    <div class="row g-0 text-center">
                                        <div class="col-6 col-sm-3">
                                            <div class="p-3 border border-dashed border-start-0">
                                                <h5 class="mb-1"><span class="counter-value" data-target="7585">0</span></h5>
                                                <p class="text-muted mb-0">Orders</p>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-6 col-sm-3">
                                            <div class="p-3 border border-dashed border-start-0">
                                                <h5 class="mb-1">$<span class="counter-value" data-target="22.89">0</span>k</h5>
                                                <p class="text-muted mb-0">Earnings</p>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-6 col-sm-3">
                                            <div class="p-3 border border-dashed border-start-0">
                                                <h5 class="mb-1"><span class="counter-value" data-target="367">0</span></h5>
                                                <p class="text-muted mb-0">Refunds</p>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-6 col-sm-3">
                                            <div class="p-3 border border-dashed border-start-0 border-end-0">
                                                <h5 class="mb-1 text-success"><span class="counter-value" data-target="18.92">0</span>%</h5>
                                                <p class="text-muted mb-0">Conversation Ratio</p>
                                            </div>
                                        </div><!--end col-->
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body p-0 pb-2">
                                    <div class="w-100">
                                        <div id="customer_impression_charts" data-colors='["--vz-warning", "--vz-primary", "--vz-success"]' class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div>
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Bookings</h4>
                                </div>
                                <!-- end card header -->

                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table class="table table-centered align-middle table-nowrap mb-0">
                                            <thead class="text-muted table-light">
                                            <tr>

                                                <th scope="col">Customer</th>
                                                <th scope="col">Vehicle</th>
                                                <th scope="col">Total Days</th>
                                                <th scope="col">Branch</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Time</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                           <tr>
                                               <td>Melissa</td>
                                               <td>
                                                   <h6>Honda</h6>
                                                   <span>Compact</span> <span>Red</span>
                                               </td>
                                               <td>33</td>
                                               <td>All</td>
                                               <td>12-4-2022</td>
                                               <td>5:00 PM</td>
                                           </tr>
                                           <tr>
                                               <td>Melissa</td>
                                               <td>
                                                   <h6>Honda</h6>
                                                   <span>Compact</span> <span>Red</span>
                                               </td>
                                               <td>33</td>
                                               <td>All</td>
                                               <td>12-4-2022</td>
                                               <td>5:00 PM</td>
                                           </tr>
                                           <tr>
                                               <td>Melissa</td>
                                               <td>
                                                   <h6>Honda</h6>
                                                   <span>Compact</span> <span>Red</span>
                                               </td>
                                               <td>33</td>
                                               <td>All</td>
                                               <td>12-4-2022</td>
                                               <td>5:00 PM</td>
                                           </tr>
                                           <tr>
                                               <td>Melissa</td>
                                               <td>
                                                   <h6>Honda</h6>
                                                   <span>Compact</span> <span>Red</span>
                                               </td>
                                               <td>33</td>
                                               <td>All</td>
                                               <td>12-4-2022</td>
                                               <td>5:00 PM</td>
                                           </tr>
                                           <tr>
                                               <td>Melissa</td>
                                               <td>
                                                   <h6>Honda</h6>
                                                   <span>Compact</span> <span>Red</span>
                                               </td>
                                               <td>33</td>
                                               <td>All</td>
                                               <td>12-4-2022</td>
                                               <td>5:00 PM</td>
                                           </tr>
                                           <tr>
                                               <td>Melissa</td>
                                               <td>
                                                   <h6>Honda</h6>
                                                   <span>Compact</span> <span>Red</span>
                                               </td>
                                               <td>33</td>
                                               <td>All</td>
                                               <td>12-4-2022</td>
                                               <td>5:00 PM</td>
                                           </tr>
                                            <!-- end tr -->
                                            </tbody><!-- end tbody -->
                                        </table><!-- end table -->
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="tab-pane fade " id="steparrow-gen-info" role="tabpanel" aria-labelledby="steparrow-gen-info-tab">
                    <a href="javascript:window.print()" class="btn btn-primary mb-4">Print</a>
                    <div class="row">
                        <div class="col">

                            <div class="h-100">


                                <!-- end row-->



                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">All Today's Pickups</h4>

                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div class="table-responsive table-card">
                                                    <table class="table  table-centered align-middle table-nowrap mb-0">
                                                        <thead class="text-muted table-light">
                                                        <tr>
                                                            <th scope="col">Pickup Time</th>
                                                            <th scope="col">Branch</th>
                                                            <th scope="col">Vehicle</th>
                                                            <th scope="col">Customer</th>
                                                            <th scope="col">Phone</th>
                                                            <th scope="col">Rental Days</th>
                                                            <th scope="col">Amount Due</th>
                                                            <th scope="col">Invoice Status</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                           <td>
                                                               05:53
                                                           </td>
                                                           <td>
                                                               All
                                                           </td>
                                                            <td>
                                                                <h6>Mitsubishi Mirage or similar</h6>
                                                                <span>Mini</span> <span>Red</span>
                                                            </td>
                                                           <td>
                                                               Oma Skiles
                                                           </td>
                                                           <td>
                                                               1-878-762-7882
                                                           </td>
                                                           <td>
                                                               45
                                                           </td>
                                                           <td>
                                                               $2.075,50
                                                           </td>

                                                           <td>
                                                               Paid
                                                           </td>
                                                       </tr>
                                                       <tr>
                                                           <td>
                                                               05:53
                                                           </td>
                                                           <td>
                                                               All
                                                           </td>
                                                           <td>
                                                               <h6>Mitsubishi Mirage or similar</h6>
                                                               <span>Mini</span> <span>Red</span>
                                                           </td>
                                                           <td>
                                                               Oma Skiles
                                                           </td>
                                                           <td>
                                                               1-878-762-7882
                                                           </td>
                                                           <td>
                                                               45
                                                           </td>
                                                           <td>
                                                               $2.075,50
                                                           </td>

                                                           <td>
                                                               Paid
                                                           </td>
                                                       </tr>
                                                       <tr>
                                                           <td>
                                                               05:53
                                                           </td>
                                                           <td>
                                                               All
                                                           </td>
                                                           <td>
                                                               <h6>Mitsubishi Mirage or similar</h6>
                                                               <span>Mini</span> <span>Red</span>
                                                           </td>
                                                           <td>
                                                               Robert doe
                                                           </td>
                                                           <td>
                                                               1-878-762-7882
                                                           </td>
                                                           <td>
                                                               45
                                                           </td>
                                                           <td>
                                                               $2.075,50
                                                           </td>

                                                           <td>
                                                               Pending
                                                           </td>
                                                       </tr>
                                                       <tr>
                                                           <td>
                                                               05:53
                                                           </td>
                                                           <td>
                                                               All
                                                           </td>
                                                           <td>
                                                               <h6>Mitsubishi Mirage or similar</h6>
                                                               <span>Mini</span> <span>Red</span>
                                                           </td>
                                                           <td>
                                                               Ken joe
                                                           </td>
                                                           <td>
                                                               1-878-762-7882
                                                           </td>
                                                           <td>
                                                               45
                                                           </td>
                                                           <td>
                                                               $2.075,50
                                                           </td>
                                                           <td>
                                                              Paid
                                                           </td>
                                                       </tr>
                                                       <tr>
                                                           <td>
                                                               05:53
                                                           </td>
                                                           <td>
                                                               All
                                                           </td>
                                                           <td>
                                                              <h6>Mitsubishi Mirage or similar</h6>
                                                               <span>Mini</span>
                                                               <span>Red</span>
                                                           </td>
                                                           <td>
                                                               Jhon doe
                                                           </td>
                                                           <td>
                                                               1-878-762-7882
                                                           </td>
                                                           <td>
                                                               45
                                                           </td>
                                                           <td>
                                                               $2.075,50
                                                           </td>
                                                           <td>
                                                              Pending
                                                           </td>
                                                       </tr>
                                                        </tbody><!-- end tbody -->
                                                    </table><!-- end table -->
                                                </div>
                                            </div>
                                        </div> <!-- .card-->
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">All Today's Returns</h4>

                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div class="table-responsive table-card">
                                                    <table class="table  table-centered align-middle table-nowrap mb-0">
                                                        <thead class="text-muted table-light">
                                                        <tr>
                                                            <th scope="col">Pickup Time</th>
                                                            <th scope="col">Branch</th>
                                                            <th scope="col">Vehicle</th>
                                                            <th scope="col">Customer</th>
                                                            <th scope="col">Phone</th>
                                                            <th scope="col">Rental Days</th>
                                                            <th scope="col">Amount Due</th>
                                                            <th scope="col">Invoice Status</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                05:53
                                                            </td>
                                                            <td>
                                                                All
                                                            </td>
                                                            <td>
                                                                <h6>Mitsubishi Mirage or similar</h6>
                                                                <span>Mini</span> <span>Red</span>
                                                            </td>
                                                            <td>
                                                                Oma Skiles
                                                            </td>
                                                            <td>
                                                                1-878-762-7882
                                                            </td>
                                                            <td>
                                                                45
                                                            </td>
                                                            <td>
                                                                $2.075,50
                                                            </td>

                                                            <td>
                                                                Paid
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                05:53
                                                            </td>
                                                            <td>
                                                                All
                                                            </td>
                                                            <td>
                                                                <h6>Mitsubishi Mirage or similar</h6>
                                                                <span>Mini</span> <span>Red</span>
                                                            </td>
                                                            <td>
                                                                Oma Skiles
                                                            </td>
                                                            <td>
                                                                1-878-762-7882
                                                            </td>
                                                            <td>
                                                                45
                                                            </td>
                                                            <td>
                                                                $2.075,50
                                                            </td>

                                                            <td>
                                                                Paid
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                05:53
                                                            </td>
                                                            <td>
                                                                All
                                                            </td>
                                                            <td>
                                                                <h6>Mitsubishi Mirage or similar</h6>
                                                                <span>Mini</span> <span>Red</span>
                                                            </td>
                                                            <td>
                                                                Robert doe
                                                            </td>
                                                            <td>
                                                                1-878-762-7882
                                                            </td>
                                                            <td>
                                                                45
                                                            </td>
                                                            <td>
                                                                $2.075,50
                                                            </td>

                                                            <td>
                                                                Pending
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                05:53
                                                            </td>
                                                            <td>
                                                                All
                                                            </td>
                                                            <td>
                                                                <h6>Mitsubishi Mirage or similar</h6>
                                                                <span>Mini</span> <span>Red</span>
                                                            </td>
                                                            <td>
                                                                Ken joe
                                                            </td>
                                                            <td>
                                                                1-878-762-7882
                                                            </td>
                                                            <td>
                                                                45
                                                            </td>
                                                            <td>
                                                                $2.075,50
                                                            </td>
                                                            <td>
                                                                Paid
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                05:53
                                                            </td>
                                                            <td>
                                                                All
                                                            </td>
                                                            <td>
                                                                <h6>Mitsubishi Mirage or similar</h6>
                                                                <span>Mini</span>
                                                                <span>Red</span>
                                                            </td>
                                                            <td>
                                                                Jhon doe
                                                            </td>
                                                            <td>
                                                                1-878-762-7882
                                                            </td>
                                                            <td>
                                                                45
                                                            </td>
                                                            <td>
                                                                $2.075,50
                                                            </td>
                                                            <td>
                                                                Pending
                                                            </td>
                                                        </tr>
                                                        </tbody><!-- end tbody -->
                                                    </table><!-- end table -->
                                                </div>
                                            </div>
                                        </div> <!-- .card-->
                                    </div> <!-- .col-->
                                </div> <!-- end row-->

                                <div class="row">


                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">Overdues</h4>

                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div class="table-responsive table-card">
                                                    <table class="table  table-centered align-middle table-nowrap mb-0">
                                                        <thead class="text-muted table-light">
                                                        <tr role="row" class="tablesorter-headerRow">
                                                            <th style="user-select: none;" data-column="0" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="overdue_reservations" unselectable="on" aria-sort="none" aria-label="Return Date: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">
                                                                    Return Date
                                                                </div></th>
                                                            <th style="user-select: none;" data-column="1" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="overdue_reservations" unselectable="on" aria-sort="none" aria-label="Res Nr.: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">
                                                                    Branch
                                                                </div></th>
                                                            <th style="user-select: none;" data-column="2" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="overdue_reservations" unselectable="on" aria-sort="none" aria-label="Contact: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">
                                                                    Contact
                                                                </div></th>
                                                            <th style="user-select: none;" data-column="3" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="overdue_reservations" unselectable="on" aria-sort="none" aria-label="Email: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">
                                                                    Email
                                                                </div></th>
                                                            <th style="user-select: none;" data-column="4" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="overdue_reservations" unselectable="on" aria-sort="none" aria-label="Phone: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">
                                                                    Phone
                                                                </div></th>
                                                            <th style="user-select: none;" data-column="5" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="overdue_reservations" unselectable="on" aria-sort="none" aria-label="Amount Due: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">
                                                                    Amount Due
                                                                </div></th>
                                                            <th style="user-select: none;" data-column="6" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="overdue_reservations" unselectable="on" aria-sort="none" aria-label="Vehicle: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">
                                                                    Vehicle
                                                                </div></th>
                                                            <th style="user-select: none;" data-column="7" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="overdue_reservations" unselectable="on" aria-sort="none" aria-label="Status: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">
                                                                    Status
                                                                </div></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody aria-live="polite" aria-relevant="all">
                                                        <tr role="row">
                                                            <td class="" data-sortable_number="1647024825" style="white-space: nowrap;">
                                                                12-03-2022
                                                            </td>
                                                            <td>
                                                                All
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                Karine Witting
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                reta95@gmail.com
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                520-818-6438
                                                            </td>
                                                            <td class="" data-sortable_number="533.6" style="white-space: nowrap;">
                                                                <div class="pull-right normal-font" style="white-space: nowrap;">$389,05</div>
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles/2/edit">Volvo 120 1.8 - 11</a>
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                <div class="control-label"><span title="" class="label label-success">Rental</span></div>
                                                            </td>
                                                        </tr>
                                                        <tr role="row">
                                                            <td class="" data-sortable_number="1645988025" style="white-space: nowrap;">
                                                                28-02-2022
                                                            </td>
                                                            <td>
                                                                All
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                Gabrielle Bogisich
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                sylvia92@rogahn.info
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                (283) 777-7327
                                                            </td>
                                                            <td class="" data-sortable_number="74.34" style="white-space: nowrap;">
                                                                <div class="pull-right normal-font" style="white-space: nowrap;">$54,20</div>
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles/8/edit">BMW Z4 sDrive35is 2dr Convertible (3.0L 6cyl Turbo 7AM) - 71</a>
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                <div class="control-label"><span title="" class="label label-success">Rental</span></div>
                                                            </td>
                                                        </tr>
                                                        <tr role="row">
                                                            <td class="" data-sortable_number="1645815225" style="white-space: nowrap;">
                                                                26-02-2022
                                                            </td>
                                                            <td>
                                                                All
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                Nelda Bergstrom
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                garrick.little@hotmail.com
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                1-540-996-7369
                                                            </td>
                                                            <td class="" data-sortable_number="398.92" style="white-space: nowrap;">
                                                                <div class="pull-right normal-font" style="white-space: nowrap;">$290,85</div>
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles/10/edit">Chevrolet Express Passenger Van LT 1500 Regular Wheelbase AWD - 91</a>
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                <div class="control-label"><span title="" class="label label-success">Rental</span></div>
                                                            </td>
                                                        </tr>
                                                        <tr role="row">
                                                            <td class="" data-sortable_number="1645988025" style="white-space: nowrap;">
                                                                28-02-2022
                                                            </td>
                                                            <td>
                                                                All
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                Noble Quigley
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                kglover@keeling.biz
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                +1.516.334.4523
                                                            </td>
                                                            <td class="" data-sortable_number="1196.75" style="white-space: nowrap;">
                                                                <div class="pull-right normal-font" style="white-space: nowrap;">$872,55</div>
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles/11/edit">Toyota Tundra SR5 4dr Double Cab LB (5.7L 8cyl 6A) - 101</a>
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                <div class="control-label"><span title="" class="label label-success">Rental</span></div>
                                                            </td>
                                                        </tr>
                                                        <tr role="row">
                                                            <td class="" data-sortable_number="1646506425" style="white-space: nowrap;">
                                                                06-03-2022
                                                            </td>
                                                            <td>
                                                                All
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                Toby Pouros
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                kelsi.howe@bartoletti.biz
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                251.583.0785
                                                            </td>
                                                            <td class="" data-sortable_number="1883.69" style="white-space: nowrap;">
                                                                <div class="pull-right normal-font" style="white-space: nowrap;">$1.373,40</div>
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles/13/edit">Chevrolet Silverado 3500HD LT 4dr Crew Cab LB DRW (6.0L 8cyl 6A) - 121</a>
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                <div class="control-label"><span title="" class="label label-success">Rental</span></div>
                                                            </td>
                                                        </tr>
                                                        <tr role="row">
                                                            <td class="" data-sortable_number="1645822800" style="white-space: nowrap;">
                                                                26-02-2022
                                                            </td>
                                                            <td>
                                                                All
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                Pablo Haley
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                blick.leonora@cummerata.com
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                934.962.5469
                                                            </td>
                                                            <td class="" data-sortable_number="50.6" style="white-space: nowrap;">
                                                                <div class="pull-right normal-font" style="white-space: nowrap;">AU$50,60</div>
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles/3/edit">Lamborghini Countach LP 5000 S QV - 21</a>
                                                            </td>
                                                            <td class="" data-sortable_number="" style="white-space: nowrap;">
                                                                <div class="control-label"><span title="" class="label label-success">Rental</span></div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                        <!-- end tbody -->
                                                    </table><!-- end table -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">Pending Maintenance</h4>

                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div class="table-responsive table-card">
                                                    <table class="table  table-centered align-middle table-nowrap mb-0">
                                                        <thead class="text-muted table-light">
                                                        <tr role="row" class="tablesorter-headerRow">
                                                            <th style="user-select: none;" data-column="0" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="vehicle_maintenance" unselectable="on" aria-sort="none" aria-label="Vehicle Make: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Vehicle Brand</div></th>
                                                            <th style="user-select: none;" data-column="1" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="vehicle_maintenance" unselectable="on" aria-sort="none" aria-label="Vehicle Model: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Vehicle Model</div></th>
                                                            <th style="user-select: none;" data-column="2" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="vehicle_maintenance" unselectable="on" aria-sort="none" aria-label="Vehicle Class: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Vehicle Class</div></th>
                                                            <th style="user-select: none;" data-column="3" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="vehicle_maintenance" unselectable="on" aria-sort="none" aria-label="Vehicle: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Branch</div></th>
                                                            <th style="user-select: none;" data-column="4" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="vehicle_maintenance" unselectable="on" aria-sort="none" aria-label="Maintenance Type: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Category</div></th>
                                                            <th style="user-select: none;" data-column="5" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="vehicle_maintenance" unselectable="on" aria-sort="none" aria-label="Date of Last Maintenance: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Date of Last Maintenance</div></th>
                                                            <th style="user-select: none;" data-column="6" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="vehicle_maintenance" unselectable="on" aria-sort="none" aria-label="Planned Start Date: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner"></div>Due Date of Maintenance</th>

                                                        </tr>
                                                        </thead>
                                                        <tbody aria-live="polite" aria-relevant="all">
                                                        <tr role="row">
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_brand_id=38">Land Rover</a>
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_model_id=10137">Defender</a>
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_class_id=1">Economic Manual</a>
                                                            </td>
                                                            <td>
                                                                All
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                General
                                                            </td>
                                                            <td style="white-space: nowrap;">

                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                24-02-2022
                                                            </td>

                                                        </tr>
                                                        <tr role="row">
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_brand_id=63">Lamborghini</a>
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_model_id=19487">Countach LP 5000 S QV</a>
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_class_id=1">Economic Manual</a>
                                                            </td>
                                                            <td>
                                                                All
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                General
                                                            </td>
                                                            <td style="white-space: nowrap;">

                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                24-02-2022
                                                            </td>

                                                        </tr>
                                                        <tr role="row">
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_brand_id=43">Toyota</a>
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_model_id=12751">Yaris L Hatchback</a>
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_class_id=1">Economic Manual</a>
                                                            </td>
                                                            <td>
                                                                All
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                General
                                                            </td>
                                                            <td style="white-space: nowrap;">

                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                24-02-2022
                                                            </td>

                                                        </tr>
                                                        <tr role="row">
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_brand_id=43">Toyota</a>
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_model_id=12751">Yaris L Hatchback</a>
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_class_id=1">Economic Manual</a>
                                                            </td>
                                                            <td>
                                                                All
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                General
                                                            </td>
                                                            <td style="white-space: nowrap;">

                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                24-02-2022
                                                            </td>

                                                        </tr>
                                                        <tr role="row">
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_brand_id=55">Volkswagen</a>
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_model_id=18664">Polo GTI 1.8</a>
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_class_id=1">Economic Manual</a>
                                                            </td>
                                                            <td>
                                                                All
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                General
                                                            </td>
                                                            <td style="white-space: nowrap;">

                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                25-02-2022
                                                            </td>

                                                        </tr>
                                                        <tr role="row">
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_brand_id=6">BMW</a>
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_model_id=3057">Z4 sDrive35is 2dr Convertible (3.0L 6cyl Turbo 7AM)</a>
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_class_id=2">Economic Automatic</a>
                                                            </td>
                                                            <td>
                                                                All
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                General
                                                            </td>
                                                            <td style="white-space: nowrap;">

                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                25-02-2022
                                                            </td>

                                                        </tr>
                                                        <tr role="row">
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_brand_id=25">Ford</a>
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_model_id=5305">Bantam 1.3i XLT</a>
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_class_id=4">Premium</a>
                                                            </td>
                                                            <td>
                                                                All
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                General
                                                            </td>
                                                            <td style="white-space: nowrap;">

                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                25-02-2022
                                                            </td>

                                                        </tr>
                                                        <tr role="row">
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_brand_id=37">Volvo</a>
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_model_id=9476">120 1.8</a>
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_class_id=1">Economic Manual</a>
                                                            </td>
                                                            <td>
                                                                All
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                General
                                                            </td>
                                                            <td style="white-space: nowrap;">

                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                24-02-2022
                                                            </td>

                                                        </tr>
                                                        <tr role="row">
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_brand_id=37">Volvo</a>
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_model_id=9476">120 1.8</a>
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_class_id=1">Economic Manual</a>
                                                            </td>
                                                            <td>
                                                                All
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                General
                                                            </td>
                                                            <td style="white-space: nowrap;">

                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                24-02-2022
                                                            </td>

                                                        </tr>
                                                        <tr role="row">
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_brand_id=63">Lamborghini</a>
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_model_id=19487">Countach LP 5000 S QV</a>
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                <a href="https://simba-car-hire.hqrentals.asia/fleets/vehicles?vehicle_class_id=1">Economic Manual</a>
                                                            </td>
                                                            <td>
                                                                All
                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                General
                                                            </td>
                                                            <td style="white-space: nowrap;">

                                                            </td>
                                                            <td style="white-space: nowrap;">
                                                                24-02-2022
                                                            </td>

                                                        </tr>

                                                        </tbody>
                                                        <!-- end tbody -->
                                                    </table><!-- end table -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .col-->
                                </div> <!-- end row-->

                            </div> <!-- end .h-100-->

                        </div> <!-- end col -->

                        <!-- end col -->
                    </div>

                </div>
                <!-- end tab pane -->

                <div class="tab-pane fade " id="steparrow-description-info" role="tabpanel" aria-labelledby="steparrow-description-info-tab">
                    <a href="javascript:window.print()" class="btn btn-primary mb-4">Print</a>

                    <div>
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Total Cars</h4>

                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table  table-centered align-middle table-nowrap mb-0">
                                        <thead class="text-muted table-light">
                                        <tr>
                                            <th scope="col">Brand</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Vehicle Class</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                Toyota
                                            </td>
                                            <td>
                                                Corolla
                                            </td>
                                            <td>
                                                Hatch
                                            </td>
                                            <td>
                                                Economic  Manual
                                            </td>
                                            <td>4</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Toyota
                                            </td>
                                            <td>
                                                Corolla
                                            </td>
                                            <td>
                                                Hatch
                                            </td>
                                            <td>
                                                Economic  Auto
                                            </td>
                                            <td>6</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Kia
                                            </td>
                                            <td>
                                                Hatch
                                            </td>
                                            <td>
                                                Carnival
                                            </td>
                                            <td>
                                                Economic  Manual
                                            </td>
                                            <td>4</td>

                                        </tr>
                                        <tr>
                                            <td>

                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <b>Total</b>
                                            </td>
                                            <td>
                                                <b>14</b>
                                            </td>

                                        </tr>
                                        <!-- end tr -->

                                        </tbody><!-- end tbody -->
                                    </table><!-- end table -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="card ribbon-box border shadow-none mb-lg-0">
                                    <div class="card-body">
                                        <div class="ribbon ribbon-primary round-shape">Model Year</div>
                                        <h5 class="fs-14 text-end">Total: 187</h5>

                                        <div class="ribbon-content mt-4 text-muted">
                                           <ul class="ribbon-ul">
                                               <li>
                                                   <div class="d-flex" style="justify-content: space-between">
                                                       <div>
                                                           2019
                                                       </div>
                                                       <div>
                                                           23
                                                       </div>
                                                   </div>
                                               </li>
                                               <li>
                                                   <div class="d-flex" style="justify-content: space-between">
                                                       <div>
                                                           2020
                                                       </div>
                                                       <div>
                                                           23
                                                       </div>
                                                   </div>
                                               </li>
                                               <li>
                                                   <div class="d-flex" style="justify-content: space-between">
                                                       <div>
                                                           2021
                                                       </div>
                                                       <div>
                                                           23
                                                       </div>
                                                   </div>
                                               </li>
                                           </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card ribbon-box border shadow-none mb-lg-0">
                                    <div class="card-body">
                                        <div class="ribbon ribbon-primary round-shape">Colours</div>
                                        <h5 class="fs-14 text-end">Total: 100</h5>

                                        <div class="ribbon-content mt-4 text-muted">
                                            <ul class="ribbon-ul">
                                                <li>
                                                    <div class="d-flex" style="justify-content: space-between">
                                                        <div>
                                                            White
                                                        </div>
                                                        <div>
                                                            23
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex" style="justify-content: space-between">
                                                        <div>
                                                            Red
                                                        </div>
                                                        <div>
                                                            20
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex" style="justify-content: space-between">
                                                        <div>
                                                            Grey
                                                        </div>
                                                        <div>
                                                            23
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card ribbon-box border shadow-none mb-lg-0">
                                    <div class="card-body">
                                        <div class="ribbon ribbon-primary round-shape">Categories</div>
                                        <h5 class="fs-14 text-end">Total: 187</h5>

                                        <div class="ribbon-content mt-4 text-muted">
                                            <ul class="ribbon-ul">
                                                <li>
                                                    <div class="d-flex" style="justify-content: space-between">
                                                        <div>
                                                            Daily Rental
                                                        </div>
                                                        <div>
                                                            23
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex" style="justify-content: space-between">
                                                        <div>
                                                            RTO
                                                        </div>
                                                        <div>
                                                            23
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex" style="justify-content: space-between">
                                                        <div>
                                                            Uber
                                                        </div>
                                                        <div>
                                                            23
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card ribbon-box border shadow-none mb-lg-0">
                                    <div class="card-body">
                                        <div class="ribbon ribbon-primary round-shape">Finance</div>
                                        <h5 class="fs-14 text-end">Total: 187</h5>
                                        <div class="ribbon-content mt-4 text-muted">
                                            <ul class="ribbon-ul">
                                                <li>
                                                    <div class="d-flex" style="justify-content: space-between">
                                                        <div>
                                                            Simba
                                                        </div>
                                                        <div>
                                                            23
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex" style="justify-content: space-between">
                                                        <div>
                                                            Toyota
                                                        </div>
                                                        <div>
                                                            23
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex" style="justify-content: space-between">
                                                        <div>
                                                            ST George
                                                        </div>
                                                        <div>
                                                            23
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex" style="justify-content: space-between">
                                                        <div>
                                                            Nissan
                                                        </div>
                                                        <div>
                                                            13
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex" style="justify-content: space-between">
                                                        <div>
                                                           Metro
                                                        </div>
                                                        <div>
                                                            13
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex" style="justify-content: space-between">
                                                        <div>
                                                            BOQ
                                                        </div>
                                                        <div>
                                                            10
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex" style="justify-content: space-between">
                                                        <div>
                                                            Volvo
                                                        </div>
                                                        <div>
                                                            9
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <!-- end tab pane -->


                <!-- end tab pane -->
            </div>
            <!-- end page title -->



        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->




    <!-- Theme Settings -->

@include('admin.footer')
