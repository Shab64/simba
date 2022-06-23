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
                                            <h5 class="card-title mb-0">All Incident Reports</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <a href="#" class="btn btn-primary">Print</a>
                                        <div class="btn-group">

                                            <a href="incidentReport.blade.php" class="btn btn-primary">Add Incident Report</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-bottom-dashed border-bottom">
                                <form>
                                    <div class="row g-3">
                                        <div class="col-xl-6">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="search-box">
                                                        <input type="text" class="form-control search"
                                                               placeholder="Enter Customer Name">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <input type="text" class="form-control" id="datepicker-range"
                                                               data-provider="flatpickr" data-date-format="d M, Y"
                                                               data-range-date="true" placeholder="Enter Customer Email">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xl-6">
                                            <div class="row g-3">
                                                <div class="col-sm-6">
                                                    <div class="">
                                                        <input type="text" class="form-control" id="datepicker-range"
                                                               data-provider="flatpickr" data-date-format="d M, Y"
                                                               data-range-date="true" placeholder="Select date">
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <!--end col-->

                                                <div class="col-sm-6">
                                                    <div>
                                                        <button type="button" class="btn btn-primary w-100"
                                                                onclick="SearchData();"> <i
                                                                class="ri-equalizer-fill me-2 align-bottom"></i>Filters</button>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="table-responsive table-card">
                                        <table class="table  table-centered align-middle table-nowrap mb-0">
                                            <thead class="text-muted table-light">
                                            <tr>
                                                <th scope="col">REGO</th>
                                                <th scope="col">Branch</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Vehicle</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                               <td>S703CGY</td>
                                                <td>All</td>
                                                <td>
                                                    <a href="#">
                                                        2/7/2022
                                                    </a>
                                                </td>

                                                <td>
                                                    <a href="customer-detail.blade.php">Oma Skiles</a>

                                                </td>
                                                <td>
                                                    <a href="car-detail.blade.php">
                                                    <h6>Toyota</h6>
                                                        <span>Compact</span>
                                                        <span>Red</span>
                                                    </a>
                                                    </td>
                                                <td>
                                                    gerlach.nya@von.biz
                                                </td>
                                                <td>
                                                    1-878-762-7882
                                                </td>
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                        <li class="list-inline-item view detail" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="view detail">
                                                            <a href="incident-report-view.blade.php"
                                                               class="text-primary d-inline-block edit-item-btn">
                                                                <i class="ri-eye-fill fs-16"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="Edit">
                                                            <a href="#showModal" data-bs-toggle="modal"
                                                               class="text-primary d-inline-block edit-item-btn">
                                                                <i class="ri-pencil-fill fs-16"></i>
                                                            </a>
                                                        </li>

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
                                            <tr>
                                                <td>S703CGY</td>
                                                <td>All</td>
                                                <td>
                                                    <a href="#">
                                                        2/7/2022
                                                    </a>

                                                </td>

                                                <td>
                                                    <a href="customer-detail.blade.php">will</a>

                                                </td>
                                                <td>
                                                    <a href="car-detail.blade.php">
                                                        <h6>Toyota</h6>
                                                        <span>Compact</span>
                                                        <span>Red</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    gerlach.nya@von.biz
                                                </td>
                                                <td>
                                                    1-878-762-7882
                                                </td>
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                        <li class="list-inline-item view detail" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="view detail">
                                                            <a href="incident-report-view.blade.php"
                                                               class="text-primary d-inline-block edit-item-btn">
                                                                <i class="ri-eye-fill fs-16"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="Edit">
                                                            <a href="#showModal" data-bs-toggle="modal"
                                                               class="text-primary d-inline-block edit-item-btn">
                                                                <i class="ri-pencil-fill fs-16"></i>
                                                            </a>
                                                        </li>

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


                                            </tbody><!-- end tbody -->
                                        </table><!-- end table -->
                                    </div>

                                </div>

                                <div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header bg-light p-3">
                                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close" id="close-modal"></button>
                                            </div>
                                            <form action="#">
                                                <div class="modal-body">
                                                    <input type="hidden" id="id-field">

                                                    <div class="mb-3" id="modal-id" style="display: none;">
                                                        <label for="id-field1" class="form-label">ID</label>
                                                        <input type="text" id="id-field1" class="form-control"
                                                               placeholder="ID" readonly="">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="customername-field" class="form-label">Customer
                                                            Name</label>
                                                        <input type="text" id="customername-field" class="form-control"
                                                               placeholder="Enter Name" required="">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="email-field" class="form-label">Email</label>
                                                        <input type="email" id="email-field" class="form-control"
                                                               placeholder="Enter Email" required="">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="phone-field" class="form-label">Phone</label>
                                                        <input type="text" id="phone-field" class="form-control"
                                                               placeholder="Enter Phone no." required="">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="date-field" class="form-label">Joining Date</label>
                                                        <input type="date" id="date-field" class="form-control"
                                                               data-provider="flatpickr" data-date-format="d M, Y" required="">
                                                    </div>

                                                    <div>
                                                        <label for="status-field" class="form-label">Status</label>
                                                        <select class="form-control" data-trigger="" name="status-field"
                                                                id="status-field">
                                                            <option value="">Status</option>
                                                            <option value="Active">Active</option>
                                                            <option value="Block">Block</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success" id="add-btn">Add
                                                            Customer</button>
                                                        <button type="button" class="btn btn-success"
                                                                id="edit-btn">Update</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close" id="btn-close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mt-2 text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                                               colors="primary:#f7b84b,secondary:#f06548"
                                                               style="width:100px;height:100px"></lord-icon>
                                                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                        <h4>Are you sure ?</h4>
                                                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this
                                                            record ?</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                    <button type="button" class="btn w-sm btn-light"
                                                            data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn w-sm btn-danger "
                                                            id="delete-record">Yes, Delete It!</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end modal -->
                            </div>
                        </div>

                    </div>
                    <!--end col-->
                </div>
                <!-- row end -->
            </div>
        </div>
    </div>
    <!-- End Page-content -->
@include('admin.footer')
