@include('admin.header')
<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
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
                                            <h5 class="card-title mb-0">View All Customers</h5>
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
                                        <table class="table align-middle display" id="myDatatable" style="width:100%">
                                            <thead class="table-light text-muted">
                                            <tr>
                                                <th scope="col" style="width: 50px;">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkAll"
                                                               value="option">
                                                    </div>
                                                </th>
                                                <th>Customer Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Country</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>Zip</th>
                                                <th>Street</th>
                                                <th>Branch</th>
                                                <th>DL No</th>
                                                <th>Exp Date</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody class="list form-check-all ">
                                            @if(!empty($all_customers))
                                                @foreach($all_customers as $cust)
                                                    <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="checkAll"
                                                               value="option1">
                                                    </div>
                                                </th>

                                                <td>{{$cust->name}}</td>
                                                <td>{{$cust->email}}</td>
                                                <td>{{$cust->phone}}</td>
                                                <td>{{$cust->country}}</td>
                                                <td>{{$cust->city}}</td>

                                                <td>{{$cust->state}}</td>
                                                <td>{{$cust->zip}}</td>
                                                <td>{{$cust->street}}</td>
                                                <td>{{$cust->branch}}</td>
                                                <td>{{$cust->d_license_no}}</td>
                                                <td>{{$cust->expiration_date}}</td>
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                        <li class="list-inline-item view detail" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="view detail">
                                                            <a href="{{url('admin/customer/view/customer-detail/'.$cust->id)}}"
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
                                                            <a class="text-danger d-inline-block remove-item-btn" onclick="delete_('{{route('admin.customer-remove',[$cust->id])}}')">
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
