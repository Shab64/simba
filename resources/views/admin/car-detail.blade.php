@include('admin.header')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="profile-foreground position-relative mx-n4 mt-n4">
                    <div class="profile-wid-bg">
                        <img src="{{url('assets')}}/images/car.jpg" alt="" class="profile-wid-img">
                    </div>
                </div>
                <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
                    <div class="row g-4">
                        <div class="col-auto">
                            <div class="avatar-lg">
                                <img src="{{url('assets')}}/images/cerato.png" alt="user-img" class="img-thumbnail">
                            </div>
                        </div><!--end col-->
                        <div class="col">
                            <div class="p-2">
                                <h3 class="text-white mb-1">Kia Cerato Hatch</h3>
                                <p class="text-white-75">Finance: <span class="fw-bold">{{(!empty($vehicle_details[0]->leader_finance)) ? ucfirst($vehicle_details[0]->leader_finance) : ""}}</span></p>
                                <div class="hstack text-white-50 gap-1">
                                    <div class="me-2"><i class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i>{{(!empty($vehicle_details[0]->branch)) ? ucfirst($vehicle_details[0]->branch) : ""}}</div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-12 col-lg-auto order-last order-lg-0">
                            <div class="row text text-white-50 text-center">
                                <div class="col-lg-12 col-12">
                                    <div class="p-2">
                                        <h4 class="text-white mb-1">{{(!empty($vehicle_details[0]->category)) ? ucfirst($vehicle_details[0]->category) : ""}}</h4>
                                        <p class="fs-14 mb-0">Status</p>
                                    </div>
{{--                                    <button class="btn btn-primary">Edit</button>--}}
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                    </div>
                    <!--end row-->
                </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div>

                                <!-- Tab panes -->
                                <div class="tab-content pt-4 text-muted">
                                    <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                        <div class="row">

                                            <div class="col-xxl-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title mb-3">Info</h5>
                                                       <div class="row">
                                                           <div class="col-sm-2">
                                                                <h6>REGO</h6>
                                                               <p>{{(!empty($vehicle_details[0]->reg_number)) ? $vehicle_details[0]->reg_number : ""}}</p>
                                                           </div>
                                                           <div class="col-sm-2">
                                                               <h6>Brand</h6>
                                                               <p>{{(!empty($vehicle_details[0]->brand)) ? $vehicle_details[0]->brand : ""}}</p>
                                                           </div>
                                                           <div class="col-sm-2">
                                                               <h6>Model</h6>
                                                               <p>{{(!empty($vehicle_details[0]->model)) ? $vehicle_details[0]->model : ""}}</p>
                                                           </div>
                                                           <div class="col-sm-2">
                                                               <h6>Type</h6>
                                                               <p>{{(!empty($vehicle_details[0]->type))? $vehicle_details[0]->type : ""}}</p>
                                                           </div>
                                                           <div class="col-sm-2">
                                                               <h6>Year</h6>
                                                               <p>{{(!empty($vehicle_details[0]->year)) ? $vehicle_details[0]->year : ""}}</p>
                                                           </div>
                                                           <div class="col-sm-2">
                                                               <h6>Colour</h6>
                                                               <p>{{(!empty($vehicle_details[0]->color)) ? $vehicle_details[0]->color : ""}}</p>
                                                           </div>
                                                           <div class="col-sm-2">
                                                               <h6>Vin Number</h6>
                                                               <p>{{(!empty($vehicle_details[0]->win_no)) ? $vehicle_details[0]->win_no : ""}}</p>
                                                           </div>
                                                           <div class="col-sm-2">
                                                               <h6>Engine number</h6>
                                                               <p>{{(!empty($vehicle_details[0]->engine_no)) ? $vehicle_details[0]->engine_no : ""}}</p>
                                                           </div>
                                                           <div class="col-sm-2">
                                                               <h6>Finance</h6>
                                                               <p>{{(!empty($vehicle_details[0]->finance)) ? $vehicle_details[0]->finance : ""}}</p>
                                                           </div>
                                                           <div class="col-sm-2">
                                                               <h6>Category</h6>
                                                               <p>{{(!empty($vehicle_details[0]->category)) ? $vehicle_details[0]->category : ""}}</p>
                                                           </div>
                                                           <div class="col-sm-2">
                                                               <h6>Purchase Price</h6>
                                                               <p>{{(!empty($vehicle_details[0]->purchase_price)) ? '$'.$vehicle_details[0]->purchase_price : ""}}</p>
                                                           </div>
                                                           <div class="col-sm-2">
                                                               <h6>Purchase Date</h6>
                                                               <p>{{(!empty($vehicle_details[0]->purchase_date)) ? $vehicle_details[0]->purchase_date : ""}}</p>
                                                           </div>

                                                           <div class="col-sm-2">
                                                               <h6>End Date</h6>
                                                               <p>pata nahi</p>
                                                           </div>
                                                           <div class="col-sm-2">
                                                               <h6>Monthly Repayment</h6>
                                                               <p>{{(!empty($vehicle_details[0]->monthly_repayment)) ? '$'.$vehicle_details[0]->monthly_repayment : ""}}</p>
                                                           </div>
                                                           <div class="col-sm-2">
                                                               <h6>Current Customer</h6>
                                                               <p>
                                                                   <a href="#">Ken williams</a>
                                                               </p>
                                                           </div>
                                                           @if($vehicle_details[0]->category === 'Uber')
                                                           <div class="col-sm-2">
                                                               <h6>Driver</h6>
                                                               <p>
                                                                   <a href="#">{{(!empty($vehicle_details[0]->driver)) ? ucfirst($vehicle_details[0]->driver) : ""}}</a>
                                                               </p>
                                                           </div>
                                                           @endif
                                                           <div class="col-sm-2">
                                                               <h6>Last Maintenance Date</h6>
                                                               <p>{{(!empty($vehicle_details[0]->maintenance_date)) ? $vehicle_details[0]->maintenance_date : ""}}</p>
                                                           </div>
                                                           <div class="col-sm-2">
                                                               <h6>Due Maintenance Date</h6>
                                                               <p>{{(!empty($vehicle_details[0]->due_maintenance_date)) ? $vehicle_details[0]->due_maintenance_date : ""}}</p>
                                                           </div>
                                                       </div>
                                                    </div>
                                                    <!--end card-body-->
                                                </div><!-- end card -->

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-header align-items-center d-flex">
                                                                <h4 class="card-title mb-0  me-2">Recent Activity</h4>
                                                                <div class="flex-shrink-0 ms-auto">
                                                                    <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                                                        <li class="nav-item">
                                                                            <a class="nav-link active" data-bs-toggle="tab" href="#today" role="tab" aria-selected="true">
                                                                                 History
                                                                            </a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" data-bs-toggle="tab" href="#weekly" role="tab" aria-selected="false">
                                                                                Availability
                                                                            </a>
                                                                        </li>

                                                                        <li class="nav-item">
                                                                            <a class="nav-link" data-bs-toggle="tab" href="#condition" role="tab" aria-selected="false">
                                                                               Inspection
                                                                            </a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" data-bs-toggle="tab" href="#incident" role="tab" aria-selected="false">
                                                                                Incident Report
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="tab-content text-muted">
                                                                    <div class="tab-pane active" id="today" role="tabpanel">
                                                                        <div class="table-responsive table-card">
                                                                            <table class="table  table-centered align-middle table-nowrap mb-0">
                                                                                <thead class="text-muted table-light">
                                                                                <tr>
                                                                                    <th scope="col">Pickup Time</th>
                                                                                    <th scope="col">Date</th>
                                                                                    <th scope="col">Res Nr</th>
                                                                                    <th scope="col">Customer</th>
                                                                                    <th scope="col">Email</th>
                                                                                    <th scope="col">Phone</th>
                                                                                    <th scope="col">Rental Days</th>
                                                                                    <th scope="col">Amount Due</th>
                                                                                    <th scope="col">Vehicle</th>
                                                                                    <th scope="col">Status</th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        05:53
                                                                                    </td>
                                                                                    <td>
                                                                                        2/7/2022
                                                                                    </td>
                                                                                    <td>
                                                                                        46
                                                                                    </td>
                                                                                    <td>
                                                                                        Oma Skiles
                                                                                    </td>
                                                                                    <td>
                                                                                        gerlach.nya@von.biz
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
                                                                                    <td>Kia</td>
                                                                                    <td>
                                                                                        Open
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        05:53
                                                                                    </td>
                                                                                    <td>
                                                                                        5/7/2022
                                                                                    </td>
                                                                                    <td>
                                                                                        46
                                                                                    </td>
                                                                                    <td>
                                                                                        Oma Skiles
                                                                                    </td>
                                                                                    <td>
                                                                                        gerlach.nya@von.biz
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
                                                                                    <td>Kia</td>
                                                                                    <td>
                                                                                       close
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        05:53
                                                                                    </td>
                                                                                    <td>
                                                                                        6/7/2022
                                                                                    </td>
                                                                                    <td>
                                                                                        46
                                                                                    </td>
                                                                                    <td>
                                                                                        Robert doe
                                                                                    </td>
                                                                                    <td>
                                                                                        gerlach.nya@von.biz
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
                                                                                    <td>Kia</td>
                                                                                    <td>
                                                                                        close
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        05:53
                                                                                    </td>
                                                                                    <td>
                                                                                        7/7/2022
                                                                                    </td>
                                                                                    <td>
                                                                                        46
                                                                                    </td>
                                                                                    <td>
                                                                                        Ken joe
                                                                                    </td>
                                                                                    <td>
                                                                                        gerlach.nya@von.biz
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
                                                                                    <td>Kia</td>
                                                                                    <td>
                                                                                        close
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        05:53
                                                                                    </td>
                                                                                    <td>
                                                                                        8/7/2022
                                                                                    </td>
                                                                                    <td>
                                                                                        46
                                                                                    </td>
                                                                                    <td>
                                                                                        Jhon doe
                                                                                    </td>
                                                                                    <td>
                                                                                        gerlach.nya@von.biz
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
                                                                                    <td>Kia</td>
                                                                                    <td>
                                                                                        close
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody><!-- end tbody -->
                                                                            </table><!-- end table -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="weekly" role="tabpanel">
                                                                        <img src="{{url('assets')}}/images/fullcalendar.png" alt="" style="width: 100%">
                                                                    </div>
                                                                    <div class="tab-pane" id="condition" role="tabpanel">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <h4 class="card-title mb-0">Images</h4>
                                                                            </div>
                                                                            <div class="card-body">
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

                                                                    <div class="tab-pane" id="incident" role="tabpanel">
                                                                        <div class="table-responsive table-card">
                                                                            <table class="table  table-centered align-middle table-nowrap mb-0">
                                                                                <thead class="text-muted table-light">
                                                                                <tr>
                                                                                    <th scope="col">Date</th>
                                                                                    <th scope="col">Customer</th>
                                                                                    <th scope="col">Email</th>
                                                                                    <th scope="col">Phone</th>

                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                <tr>

                                                                                    <td>
                                                                                        <a href="#">
                                                                                            2/7/2022
                                                                                        </a>

                                                                                    </td>

                                                                                    <td>
                                                                                        Oma Skiles
                                                                                    </td>
                                                                                    <td>
                                                                                        gerlach.nya@von.biz
                                                                                    </td>
                                                                                    <td>
                                                                                        1-878-762-7882
                                                                                    </td>


                                                                                </tr>
                                                                                <tr>

                                                                                    <td>
                                                                                        <a href="#">
                                                                                            2/7/2022
                                                                                        </a>

                                                                                    </td>

                                                                                    <td>
                                                                                        will
                                                                                    </td>
                                                                                    <td>
                                                                                        gerlach.nya@von.biz
                                                                                    </td>
                                                                                    <td>
                                                                                        1-878-762-7882
                                                                                    </td>


                                                                                </tr>


                                                                                </tbody><!-- end tbody -->
                                                                            </table><!-- end table -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end card body -->
                                                        </div><!-- end card -->
                                                    </div><!-- end col -->
                                                </div><!-- end row -->



                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div>

                                </div>
                                <!--end tab-content-->
                            </div>
                        </div><!--end col-->
                    </div>
                <!--end row-->

            </div><!-- container-fluid -->
        </div><!-- End Page-content -->


    </div>

@include('admin.footer')
