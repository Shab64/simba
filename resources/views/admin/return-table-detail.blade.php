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
                                            <h5 class="card-title mb-0">All Returns </h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">

                                        <div class="btn-group">

                                            <a href="#" class="btn btn-primary">Print</a>

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
                                                               placeholder="Enter customer name">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div>
                                                        <select class="form-control" data-plugin="choices" data-choices=""
                                                                data-choices-search-false="" name="choices-single-default"
                                                                id="idStatus">
                                                            <option value="all" selected="">Select Category</option>
                                                            <option value="Active">Daily Rental</option>
                                                            <option value="Block">Long Rental</option>
                                                        </select>
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
                                    <div class="table-responsive table-card mb-1">
                                        <table class="table align-middle" id="myDatatable">
                                            <thead class="table-light text-muted">
                                            <tr>
                                                <th scope="col" style="width: 50px;">
                                                    REGO
                                                </th>

                                                <th>Customer Name</th>
                                                <th>Vehicle</th>
                                                <th>Category</th>
                                                <th>Branch</th>
                                                <th>Pickup Date</th>
                                                <th>Return Date</th>
                                                <th>Remaining Days</th>

                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody class="list form-check-all ">
                                            <tr>
                                                <th scope="row">
                                                    S703CGY
                                                </th>

                                                <td>Mary Cousar</td>
                                                <td>
                                                  <h6>Nissan</h6>
                                                <span>Mini</span>
                                                    <span>White</span>
                                                </td>
                                                <td>Daily Rental</td>
                                                <td>All</td>
                                                <td>06 Apr, 2021</td>
                                                <td>06 Mar, 2021</td>
                                                <td>0</td>

                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                        <li class="list-inline-item view detail" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="view detail">
                                                            <a href="return.blade.php"
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
                                                <th scope="row">
                                                    S703CfY
                                                </th>

                                                <td>Colt</td>
                                                <td>
                                                    <h6>Toyota</h6>
                                                    <span>Mini</span>
                                                    <span>White</span>
                                                </td>
                                                <td>Daily Rental</td>
                                                <td>All</td>
                                                <td>20 May, 2021</td>
                                                <td>26 May, 2021</td>
                                                <td>01</td>

                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                        <li class="list-inline-item view detail" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="view detail">
                                                            <a href="return.blade.php"
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
                                                        <li class="list-inline-item remove" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="Remove">
                                                            <a data-bs-toggle="modal"
                                                               data-bs-target="#deleteRecordModal"
                                                               class="text-danger d-inline-block remove-item-btn">
                                                                <i class="ri-delete-bin-5-fill fs-16"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    S703CGg
                                                </th>

                                                <td>Walter</td>
                                                <td>
                                                    <h6>Honda</h6>
                                                    <span>Intermediate</span>
                                                    <span>White</span>
                                                </td>
                                                <td>Daily Rental</td>
                                                <td>All</td>
                                                <td>10 Apr, 2021</td>
                                                <td>15 Apr, 2021</td>
                                                <td>0</td>

                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                        <li class="list-inline-item view detail" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="view detail">
                                                            <a href="return.blade.php"
                                                               class="text-primary d-inline-block edit-item-btn">
                                                                <i class="ri-eye-fill fs-16"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="Edit">
                                                            <a href="#showModal" data-bs-toggle="modal"
                                                               class="text-primary d-inline-block edit-item-btn">
                                                                <i class=" ri-pencil-fill fs-16"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item remove" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="Remove">
                                                            <a data-bs-toggle="modal"
                                                               data-bs-target="#deleteRecordModal"
                                                               class="text-danger d-inline-block remove-item-btn">
                                                                <i class="ri-delete-bin-5-fill fs-16"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    S703vGY
                                                </th>

                                                <td>Rakhim</td>
                                                <td>
                                                    <h6>Mitsubishi</h6>
                                                    <span>Compact</span>
                                                    <span>White</span>
                                                </td>
                                                <td>Daily Rental</td>
                                                <td>All</td>
                                                <td>02 Jun, 2021</td>
                                                <td>20 Jun, 2021</td>
                                                <td>01</td>

                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                        <li class="list-inline-item view detail" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="view detail">
                                                            <a href="return.blade.php"
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
                                                        <li class="list-inline-item remove" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="Remove">
                                                            <a data-bs-toggle="modal"
                                                               data-bs-target="#deleteRecordModal"
                                                               class="text-danger d-inline-block remove-item-btn">
                                                                <i class="ri-delete-bin-5-fill fs-16"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    S703CGY
                                                </th>

                                                <td>Snoop</td>
                                                <td>
                                                    <h6>Nissan</h6>
                                                    <span>Mini</span>
                                                    <span>White</span>
                                                </td>
                                                <td>Long Rental</td>
                                                <td>All</td>
                                                <td>20 Apr, 2021</td>
                                                <td>01 Mar, 2021</td>
                                                <td>0</td>

                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                        <li class="list-inline-item view detail" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="view detail">
                                                            <a href="return.blade.php"
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
                                                        <li class="list-inline-item remove" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="Remove">
                                                            <a data-bs-toggle="modal"
                                                               data-bs-target="#deleteRecordModal"
                                                               class="text-danger d-inline-block remove-item-btn">
                                                                <i class="ri-delete-bin-5-fill fs-16"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    S703CdY
                                                </th>

                                                <td>Drake</td>
                                                <td>
                                                    <h6>Nissan</h6>
                                                    <span>Compact</span>
                                                    <span>Red</span>
                                                </td>
                                                <td>Long Rental</td>
                                                <td>All</td>
                                                <td>06 Apr, 2021</td>
                                                <td>13 Apr, 2021</td>
                                                <td>0</td>

                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                        <li class="list-inline-item view detail" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="view detail">
                                                            <a href="return.blade.php"
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
                                                        <li class="list-inline-item remove" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="Remove">
                                                            <a data-bs-toggle="modal"
                                                               data-bs-target="#deleteRecordModal"
                                                               class="text-danger d-inline-block remove-item-btn">
                                                                <i class="ri-delete-bin-5-fill fs-16"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    S703CGY
                                                </th>

                                                <td>Smilga</td>
                                                <td>
                                                    <h6>Mitsubishi</h6>
                                                    <span>Mini</span>
                                                    <span>White</span>
                                                </td>
                                                <td>Daily Rental</td>
                                                <td>All</td>
                                                <td>06 Apr, 2021</td>
                                                <td>06 Mar, 2021</td>
                                                <td>0</td>

                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                        <li class="list-inline-item view detail" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="view detail">
                                                            <a href="return.blade.php"
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
                                                        <li class="list-inline-item remove" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="Remove">
                                                            <a data-bs-toggle="modal"
                                                               data-bs-target="#deleteRecordModal"
                                                               class="text-danger d-inline-block remove-item-btn">
                                                                <i class="ri-delete-bin-5-fill fs-16"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    S703CGY
                                                </th>

                                                <td>Lokey</td>
                                                <td>
                                                    <h6>Honda</h6>
                                                    <span>Mini</span>
                                                    <span>White</span>
                                                </td>
                                                <td>Daily Rental</td>
                                                <td>All</td>
                                                <td>06 Apr, 2021</td>
                                                <td>06 Mar, 2021</td>
                                                <td>0</td>

                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                        <li class="list-inline-item view detail" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="view detail">
                                                            <a href="return.blade.php"
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
                                                        <li class="list-inline-item remove" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="Remove">
                                                            <a data-bs-toggle="modal"
                                                               data-bs-target="#deleteRecordModal"
                                                               class="text-danger d-inline-block remove-item-btn">
                                                                <i class="ri-delete-bin-5-fill fs-16"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
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
