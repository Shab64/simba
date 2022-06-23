@include('admin.header')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- Container Fluid Reservation section content-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom-dashed">
                                <div class="row g-4 align-items-center">
                                    <div class="col-sm">
                                        <div>
                                            <h5 class="card-title mb-0">View All Vehicles Maintenance</h5>
                                        </div>

                                    </div>
                                    <div class="col-sm-auto">
                                        <a href="#" class="btn btn-primary">Print</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card Header end -->
                            <!-- Search Form end -->
                            <div class="card-body">
                                <div>
                                    <div class="table-responsive table-card mb-1">
                                        <table class="table align-middle" id="myDatatable">
                                            <thead class="table-light text-muted">
                                            <tr>

                                                <th>REG NO</th>
                                                <th>Brand</th>
                                                <th>Model</th>
                                                <th>Type</th>
                                                <th>Year</th>
                                                <th>Colour</th>
                                                <th>Last Maintenance Date</th>
                                                <th>Due Maintenance Date</th>
                                                <th>Finance</th>
                                                <th>Category</th>
                                                <th>Branch</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody class="list form-check-all ">
                                            @if(!empty($all_vehicles))
                                                @foreach($all_vehicles as $v)
                                            <tr>


                                                <?php
                                                $earlier = new DateTime(date('Y-m-d'));
                                                $later = new DateTime(date('Y-m-d',strtotime("+1 year",strtotime($v->maintenance_date))));
                                                $remaining_days = $later->diff($earlier)->format("%a");
                                                ?>
                                                <td>{{$v->reg_number}}</td>
                                                <td>{{$v->brand}}</td>
                                                <td>{{$v->model}}</td>
                                                <td>{{$v->type}}</td>
                                                <td>{{$v->year}}</td>
                                                <td>{{$v->color}}</td>
                                                <td>{{date('d M, Y',strtotime($v->maintenance_date))}}</td>
                                                <td><span style="color: {{($remaining_days <=0) ? "red"  : "green"}};font-weight: bold">{{date('d M, Y',strtotime('+1 year',strtotime($v->maintenance_date)))}}</span></td>
                                                <td>{{$v->finance}}</td>
                                                <td>{{$v->category}}</td>
                                                <td>{{$v->branch}}</td>
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">

                                                        <li class="list-inline-item" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="Remove">
                                                            <a class="text-danger d-inline-block remove-item-btn"
                                                               data-bs-toggle="modal"
                                                               data-bs-target="#deleteRecordModal">
                                                                <i class="ri-delete-bin-5-fill fs-16"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                        <div class="noresult" style="display: none">
                                            <div class="text-center">
                                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                           colors="primary:#121331,secondary:#08a88a"
                                                           style="width:75px;height:75px">
                                                </lord-icon>
                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                <p class="text-muted mb-0">We've searched more than 150+ Orders We did not
                                                    find any
                                                    orders for you search.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('admin.footer')
