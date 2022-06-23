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
                                            <h5 class="card-title mb-0">All Quotations</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <a href="javascript:window.print()" class="btn btn-primary">Print</a>

                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="table-responsive table-card mb-1">
                                        <table class="table align-middle" id="customerTable">
                                            <thead class="table-light text-muted">
                                            <tr>
                                                <th scope="col" style="width: 50px;">
                                                    S.N
                                                </th>
                                                <th>Branch</th>
                                                <th>Customer Name</th>
                                                <th>Vehicle</th>
                                                <th>Branch</th>
                                                <th>Pickup Date</th>
                                                <th>Return Date</th>
                                                <th>Remaining Days</th>
{{--                                                <th>Status</th>--}}
{{--                                                <th>Action</th>--}}
                                            </tr>
                                            </thead>
                                            <tbody class="list form-check-all ">
                                            @forelse($all_reservations as $r)
                                                <?php
                                                $earlier = new DateTime($r['p_date']);
                                                $later = new DateTime($r['r_date']);
                                                $remaining_days = $later->diff($earlier)->format("%a");
                                                ?>
                                            <tr>
                                                <th scope="row">
                                                    {{$loop->iteration}}
                                                </th>

                                                <td>{{$r['branch']}}</td>
                                                <td>{{$r['customer_details'][0]['name']}}</td>
                                                <td>
                                                <h6>{{$r['car_details'][0]['name']}}</h6>
                                                </td>
                                                <td>Sydney</td>
                                                <td>{{$r['p_date']}}</td>
                                                <td>{{$r['r_date']}}</td>
                                                <td style="color: {{($remaining_days <=0) ? "red"  : "green"}};font-weight: bold">{{$remaining_days}}</td>
{{--                                                <td class="status"><span--}}
{{--                                                        class="badge badge-soft-success text-uppercase">Pending</span>--}}
{{--                                                </td>--}}
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
{{--                                                        <li class="list-inline-item view detail" data-bs-toggle="tooltip"--}}
{{--                                                            data-bs-trigger="hover" data-bs-placement="top" title=""--}}
{{--                                                            data-bs-original-title="view detail">--}}
{{--                                                            <a href="{{url('admin/quotation/view/quotation-view/'.$r['id'])}}"--}}
{{--                                                               class="text-primary d-inline-block edit-item-btn">--}}
{{--                                                                <i class="ri-eye-fill fs-16"></i>--}}
{{--                                                            </a>--}}
{{--                                                        </li>--}}

{{--                                                        <li class="list-inline-item" data-bs-toggle="tooltip"--}}
{{--                                                            data-bs-trigger="hover" data-bs-placement="top" title=""--}}
{{--                                                            data-bs-original-title="Remove">--}}
{{--                                                            <a class="text-danger d-inline-block remove-item-btn"--}}
{{--                                                               data-bs-toggle="modal"--}}
{{--                                                               data-bs-target="#deleteRecordModal">--}}
{{--                                                                <i class="ri-delete-bin-5-fill fs-16"></i>--}}
{{--                                                            </a>--}}
{{--                                                        </li>--}}
                                                    </ul>
                                                </td>
                                            </tr>
                                            @empty
                                            @endforelse
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
