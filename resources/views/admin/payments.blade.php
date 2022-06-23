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
                                            <h5 class="card-title mb-0">Payments</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <a href="#" class="btn btn-primary">Print</a>
                                    </div>
                                </div>
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
                                                <th>Vehicle </th>
                                                <th>Total Amount</th>
                                                <th>Remaining Amount</th>
                                                <th>Branch</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody class="list form-check-all ">
                                            @forelse($all_reservations as $r)
                                                <tr>
                                                    <th scope="row">
                                                        {{$loop->iteration}}
                                                    </th>

                                                    <td>{{$r['customer_details'][0]['name']}}</td>
                                                    <td><h6>{{$r['car_details'][0]['name']}}</h6></td>
                                                    <td>${{$r['total_amount']}}</td>
                                                    <td>$0</td>
                                                    <td>{{$r['branch']}}</td>
                                                    <td class="status"><span
                                                            class="badge badge-soft-success text-uppercase">Pending</span>
                                                    </td>

                                                </tr>
                                            @empty
                                            @endforelse
                                            </tbody>
                                        </table>

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
