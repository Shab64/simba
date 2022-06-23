@include('admin.header')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="profile-foreground position-relative mx-n4 mt-n4">
                <div class="profile-wid-bg">
                    <img src="{{url('assets')}}/images/profile-bg.jpg" alt="" class="profile-wid-img">
                </div>
            </div>
            <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
                <div class="row g-4">
                    <div class="col-auto">
                        <div class="avatar-lg">
                            <img src="{{url('assets')}}/images/users/avatar-1.jpg" alt="user-img"
                                class="img-thumbnail rounded-circle">
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col">
                        <div class="p-2">
                            <h3 class="text-white mb-1">{{$customer_details[0]->name}}</h3>
                            <p class="text-white-75">{{$customer_details[0]->name}}</p>
                            <div class="hstack text-white-50 gap-1">
                                <div class="me-2"><i
                                        class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i>{{$customer_details[0]->country}}</div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-12 col-lg-auto order-last order-lg-0">
                        <div class="row text text-white-50 text-center">

                            <div class="col-lg-12 col-12">
                                <div class="p-2">
                                    <h4 class="text-white mb-1">{{$customer_details[0]->type}}</h4>
{{--                                    <p class="fs-14 mb-0">Status</p>--}}
                                </div>
{{--                                <button class="btn btn-primary">Edit</button>--}}
{{--                                <button class="btn btn-primary">Email</button>--}}
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
                                                        <h6>Name</h6>
                                                        <p>{{$customer_details[0]->name}}</p>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <h6>Email</h6>
                                                        <p>{{$customer_details[0]->email}}</p>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <h6>Phone</h6>
                                                        <p>{{$customer_details[0]->phone}}</p>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <h6>State</h6>
                                                        <p>{{$customer_details[0]->state}}</p>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <h6>City</h6>
                                                        <p>{{$customer_details[0]->city}}</p>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <h6>Country</h6>
                                                        <p>{{$customer_details[0]->country}}</p>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <h6>Zip</h6>
                                                        <p>{{$customer_details[0]->zip}}</p>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <h6>Steet</h6>
                                                        <p>{{$customer_details[0]->street}}</p>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <h6>DL No</h6>
                                                        <p>{{(!empty($customer_details[0]->d_license_no)) ? $customer_details[0]->d_license_no : "-"}}</p>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <h6>Expiration Date</h6>
                                                        <p>{{(!empty($customer_details[0]->expiration_date)) ? $customer_details[0]->expiration_date : "-"}}</p>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <h6>Car</h6>
                                                        <p>
                                                            <a href="car-detail.blade.php">Kia</a>
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <!-- New start -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header align-items-center d-flex">
                                                        <h4 class="card-title mb-0  me-2">Recent Activity</h4>
                                                        <div class="flex-shrink-0 ms-auto">
                                                            <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs border-bottom-0"
                                                                role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" data-bs-toggle="tab"
                                                                        href="#today" role="tab" aria-selected="true">
                                                                        History
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-bs-toggle="tab"
                                                                        href="#weekly" role="tab" aria-selected="false">
                                                                        Invoice
                                                                    </a>
                                                                </li>

                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-bs-toggle="tab"
                                                                        href="#condition" role="tab"
                                                                        aria-selected="false">
                                                                        Document
                                                                    </a>
                                                                </li>
                                                                <!-- <li class="nav-item">
                                                                    <a class="nav-link" data-bs-toggle="tab"
                                                                        href="#incident" role="tab"
                                                                        aria-selected="false">
                                                                        Incident Report
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-bs-toggle="tab"
                                                                        href="#fine" role="tab" aria-selected="false">
                                                                        Fine
                                                                    </a>
                                                                </li> -->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="tab-content text-muted">
                                                            <div class="tab-pane active" id="today" role="tabpanel">
                                                                <div class="profile-timeline">
                                                                    <div class="accordion accordion-flush"
                                                                        id="monthlyExample">
                                                                        <div class="accordion-item border-0">
                                                                            <div class="accordion-header"
                                                                                id="heading11">
                                                                                <a class="accordion-button p-2 shadow-none"
                                                                                    data-bs-toggle="collapse"
                                                                                    href="#collapse11"
                                                                                    aria-expanded="false">
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="flex-shrink-0 avatar-xs">
                                                                                            <div
                                                                                                class="avatar-title bg-light text-success rounded-circle">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-3">
                                                                                            <h6 class="fs-14 mb-1">
                                                                                                Returned</h6>
                                                                                            <small
                                                                                                class="text-muted">19-5-2022</small>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div id="collapse11"
                                                                                class="accordion-collapse collapse show"
                                                                                aria-labelledby="heading11"
                                                                                data-bs-parent="#accordionExample">
                                                                                <div
                                                                                    class="accordion-body ms-2 ps-5 fst-italic">
                                                                                    <h6>Rent: <span>$500</span> </h6>
                                                                                    <h6>Invoice: Cleared</h6>
                                                                                    <h6>Vehicle: <span>Honda</span>
                                                                                        <span>Mini</span>
                                                                                        <span>Red</span>
                                                                                    </h6>
                                                                                    <h6>Additional Options: Child Seat
                                                                                    </h6>
                                                                                    <h6>Additional Options: Seat Cover
                                                                                    </h6>
                                                                                    <h6>Incident Report: <a
                                                                                            href="#">Report</a></h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="accordion-item border-0">
                                                                            <div class="accordion-header"
                                                                                id="heading12">
                                                                                <a class="accordion-button p-2 shadow-none"
                                                                                    data-bs-toggle="collapse"
                                                                                    href="#collapse12"
                                                                                    aria-expanded="true">
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="flex-shrink-0 avatar-xs">
                                                                                            <div
                                                                                                class="avatar-title bg-light text-success rounded-circle">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-3">
                                                                                            <h6 class="fs-14 mb-1"> Car
                                                                                                Rental</h6>
                                                                                            <small
                                                                                                class="text-muted">16-5-2022</small>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div id="collapse12"
                                                                                class="accordion-collapse collapse show"
                                                                                aria-labelledby="heading12"
                                                                                data-bs-parent="#accordionExample">
                                                                                <div
                                                                                    class="accordion-body ms-2 ps-5 fst-italic">
                                                                                    <h6>Rent: <span>$500</span> </h6>
                                                                                    <h6>Vehicle: <span>Honda</span>
                                                                                        <span>Mini</span>
                                                                                        <span>Red</span>
                                                                                    </h6>
                                                                                    <h6>Additional Options: Child Seat
                                                                                    </h6>
                                                                                    <h6>Additional Options: Seat Cover
                                                                                    </h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="accordion-item border-0">
                                                                            <div class="accordion-header"
                                                                                id="heading14">
                                                                                <a class="accordion-button p-2 shadow-none"
                                                                                    data-bs-toggle="collapse"
                                                                                    href="#collapse14"
                                                                                    aria-expanded="true">
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="flex-shrink-0 avatar-xs">
                                                                                            <div
                                                                                                class="avatar-title bg-light text-success rounded-circle">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-3">
                                                                                            <h6 class="fs-14 mb-1">
                                                                                                Returned</h6>
                                                                                            <small
                                                                                                class="text-muted">7-3-2022</small>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div id="collapse14"
                                                                                class="accordion-collapse collapse show"
                                                                                aria-labelledby="heading14"
                                                                                data-bs-parent="#accordionExample">
                                                                                <div
                                                                                    class="accordion-body ms-2 ps-5 fst-italic">
                                                                                    <h6>Rent: <span>$500</span> </h6>
                                                                                    <h6>Invoice: Cleared</h6>
                                                                                    <h6>Vehicle: <span>Honda</span>
                                                                                        <span>Mini</span>
                                                                                        <span>Red</span>
                                                                                    </h6>
                                                                                    <h6>Additional Options: Child Seat
                                                                                    </h6>
                                                                                    <h6>Additional Options: Seat Cover
                                                                                    </h6>
                                                                                    <h6>Incident Report: <a
                                                                                            href="#">Report</a></h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="accordion-item border-0">
                                                                            <div class="accordion-header"
                                                                                id="heading15">
                                                                                <a class="accordion-button p-2 shadow-none"
                                                                                    data-bs-toggle="collapse"
                                                                                    href="#collapse15"
                                                                                    aria-expanded="true">
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="flex-shrink-0 avatar-xs">
                                                                                            <div
                                                                                                class="avatar-title bg-light text-success rounded-circle">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-3">
                                                                                            <h6 class="fs-14 mb-1"> Car
                                                                                                Rental</h6>
                                                                                            <small
                                                                                                class="text-muted">8-2-2022</small>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div id="collapse15"
                                                                                class="accordion-collapse collapse show"
                                                                                aria-labelledby="heading15"
                                                                                data-bs-parent="#accordionExample">
                                                                                <div
                                                                                    class="accordion-body ms-2 ps-5 fst-italic">
                                                                                    <h6>Rent: <span>$500</span> </h6>
                                                                                    <h6>Vehicle: <span>Honda</span>
                                                                                        <span>Mini</span>
                                                                                        <span>Red</span>
                                                                                    </h6>
                                                                                    <h6>Additional Options: Child Seat
                                                                                    </h6>
                                                                                    <h6>Additional Options: Seat Cover
                                                                                    </h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--end accordion-->
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="weekly" role="tabpanel">
                                                                <table
                                                                    class="table  table-centered align-middle table-nowrap mb-0">
                                                                    <thead class="text-muted table-light">
                                                                        <tr>
                                                                            <th scope="col">Date</th>
                                                                            <th scope="col">Invoice #</th>
                                                                            <th scope="col">Vehicle</th>
                                                                            <th scope="col">Action</th>

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
                                                                                09656
                                                                            </td>
                                                                            <td>
                                                                                Toyota Camry Red Hatch
                                                                            </td>
                                                                            <td>
                                                                                <a href="#"
                                                                                    class="text-primary d-inline-block edit-item-btn">
                                                                                    <i class="ri-eye-fill fs-16"></i>
                                                                                </a>
                                                                            </td>


                                                                        </tr>



                                                                    </tbody>
                                                                    <!-- end tbody -->
                                                                </table>
                                                            </div>
                                                            <div class="tab-pane" id="condition" role="tabpanel">

                                                            </div>

                                                            <div class="tab-pane" id="incident" role="tabpanel">
                                                                <div class="table-responsive table-card">
                                                                    <table
                                                                        class="table  table-centered align-middle table-nowrap mb-0">
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
                                        </div>
                                        <!-- New end -->
                                        <!-- <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-header align-items-center d-flex">
                                                            <h4 class="card-title mb-0  me-2">History</h4>

                                                        </div>
                                                        <div class="card-body">
                                                            <div class="profile-timeline">
                                                                <div class="accordion accordion-flush" id="monthlyExample">
                                                                    <div class="accordion-item border-0">
                                                                        <div class="accordion-header" id="heading11">
                                                                            <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse11" aria-expanded="false">
                                                                                <div class="d-flex">
                                                                                    <div class="flex-shrink-0 avatar-xs">
                                                                                        <div class="avatar-title bg-light text-success rounded-circle">

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="flex-grow-1 ms-3">
                                                                                        <h6 class="fs-14 mb-1"> Returned</h6>
                                                                                        <small class="text-muted">19-5-2022</small>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse11" class="accordion-collapse collapse show" aria-labelledby="heading11" data-bs-parent="#accordionExample">
                                                                            <div class="accordion-body ms-2 ps-5 fst-italic">
                                                                                <h6>Rent: <span>$500</span> </h6>
                                                                                <h6>Invoice: Cleared</h6>
                                                                                <h6>Vehicle: <span>Honda</span> <span>Mini</span> <span>Red</span>   </h6>
                                                                                <h6>Additional Options: Child Seat</h6>
                                                                                <h6>Additional Options: Seat Cover</h6>
                                                                                <h6>Incident Report: <a href="#">Report</a></h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="accordion-item border-0">
                                                                        <div class="accordion-header" id="heading12">
                                                                            <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse12" aria-expanded="true">
                                                                                <div class="d-flex">
                                                                                    <div class="flex-shrink-0 avatar-xs">
                                                                                        <div class="avatar-title bg-light text-success rounded-circle">

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="flex-grow-1 ms-3">
                                                                                        <h6 class="fs-14 mb-1"> Car Rental</h6>
                                                                                        <small class="text-muted">16-5-2022</small>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse12" class="accordion-collapse collapse show" aria-labelledby="heading12" data-bs-parent="#accordionExample">
                                                                            <div class="accordion-body ms-2 ps-5 fst-italic">
                                                                                <h6>Rent: <span>$500</span> </h6>
                                                                                <h6>Vehicle: <span>Honda</span> <span>Mini</span> <span>Red</span>   </h6>
                                                                                <h6>Additional Options: Child Seat</h6>
                                                                                <h6>Additional Options: Seat Cover</h6>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="accordion-item border-0">
                                                                        <div class="accordion-header" id="heading14">
                                                                            <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse14" aria-expanded="true">
                                                                                <div class="d-flex">
                                                                                    <div class="flex-shrink-0 avatar-xs">
                                                                                        <div class="avatar-title bg-light text-success rounded-circle">

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="flex-grow-1 ms-3">
                                                                                        <h6 class="fs-14 mb-1">Returned</h6>
                                                                                        <small class="text-muted">7-3-2022</small>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse14" class="accordion-collapse collapse show" aria-labelledby="heading14" data-bs-parent="#accordionExample">
                                                                            <div class="accordion-body ms-2 ps-5 fst-italic">
                                                                                <h6>Rent: <span>$500</span> </h6>
                                                                                <h6>Invoice: Cleared</h6>
                                                                                <h6>Vehicle: <span>Honda</span> <span>Mini</span> <span>Red</span>   </h6>
                                                                                <h6>Additional Options: Child Seat</h6>
                                                                                <h6>Additional Options: Seat Cover</h6>
                                                                                <h6>Incident Report: <a href="#">Report</a></h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="accordion-item border-0">
                                                                        <div class="accordion-header" id="heading15">
                                                                            <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse15" aria-expanded="true">
                                                                                <div class="d-flex">
                                                                                    <div class="flex-shrink-0 avatar-xs">
                                                                                        <div class="avatar-title bg-light text-success rounded-circle">

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="flex-grow-1 ms-3">
                                                                                        <h6 class="fs-14 mb-1"> Car Rental</h6>
                                                                                        <small class="text-muted">8-2-2022</small>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse15" class="accordion-collapse collapse show" aria-labelledby="heading15" data-bs-parent="#accordionExample">
                                                                            <div class="accordion-body ms-2 ps-5 fst-italic">
                                                                                <h6>Rent: <span>$500</span> </h6>
                                                                                <h6>Vehicle: <span>Honda</span> <span>Mini</span> <span>Red</span>   </h6>
                                                                                <h6>Additional Options: Child Seat</h6>
                                                                                <h6>Additional Options: Seat Cover</h6>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!--end accordion-->
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <!-- </div> -->
                        <!-- end row -->



                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>

        </div>
        <!--end tab-content-->
    </div>
</div>
<!--end col-->
</div>
<!--end row-->

</div><!-- container-fluid -->
</div><!-- End Page-content -->


</div>

@include('admin.footer')
