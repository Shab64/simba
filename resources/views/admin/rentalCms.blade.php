
@include('admin.header')
<style>
.percent-icon-style {
    position: absolute;
    top: 40px;
    right: 10px;
}

.tax-rate-style {
    position: relative;
}

.remove-item-btn:hover {
    cursor: pointer;
}
</style>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- Container Fluid Reservation section content-->
            <!-- Main row 1 start -->
            <div class="row">
                <!-- Col 1 start -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header border-bottom-dashed">

                            <div class="row g-4 align-items-center justify-content-between">
                                <div class="col-sm-auto">
                                    <h5 class="card-title mb-0">Tax Rate</h5>
                                </div>
                                <div class="col-sm-auto">
                                    <a href="#showModalAddTaxRate" data-bs-toggle="modal" class="btn btn-primary">Add
                                        New Tax Rate</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div>
                                <div class="table-responsive table-card mb-1">
                                    <table class="table align-middle" id="taxRateTable">
                                        <thead class="table-light text-muted">
                                            <tr>
                                                <th>Name</th>
                                                <th>Tax Rate</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all ">
                                        @forelse($all_tax as $tax)
                                            <tr>
                                                <td>
                                                    <a href="#">{{$tax->tax_name}}</a>
                                                </td>
                                                <td>{{$tax->tax_rate}}%</td>
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0 justify-content-center">
                                                        <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="Edit">
                                                            <a href="#showModalEditTaxRate" data-bs-toggle="modal"
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
                                        @empty
                                            <p>No Tax Found</p>
                                        @endforelse

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- Col 1 End -->
                <!-- col-2 start -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header border-bottom-dashed">

                            <div class="row g-4 align-items-center justify-content-between">
                                <div class="col-sm-auto">
                                    <h5 class="card-title mb-0">Type Of Price</h5>
                                </div>
                                <div class="col-sm-auto">
                                    <a href="#showModalAddTypesOfPrice" data-bs-toggle="modal"
                                        class="btn btn-primary">Add New Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="table-responsive table-card mb-1">
                                    <table class="table align-middle" id="myDatatable">
                                        <thead class="table-light text-muted">
                                            <tr>
                                                <th>Price Name</th>
                                                <th>Tax Rate</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all ">
                                        @forelse($all_price as $price)
                                            <tr>
                                                <td><a href="#">{{$price->name}}</a></td>
                                                <td>{{$price->tax_rate}}%</td>
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0 justify-content-center">
                                                        <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="Edit">
                                                            <a href="#showModalEditTaxRate" data-bs-toggle="modal"
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
                                        @empty
                                            <p>No Price Found</p>
                                        @endforelse
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- col-2 end -->
            </div>
            <!-- Main row 1 end -->
            <!-- Main row 2 start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header border-bottom-dashed">
                            <div class="row g-4 align-items-center justify-content-between">
                                <div class="col-sm-auto">
                                    <h5 class="card-title mb-0">Pick Up Drop Off Location</h5>
                                </div>
                                <div class="col-sm-auto">
                                    <a href="#showModalAddPickUpDropOff" data-bs-toggle="modal"
                                        class="btn btn-primary">Add New Location</a>
                                </div>
                            </div>

                        </div>

                        <div class="card-body">
                            <div>
                                <div class="table-responsive table-card mb-1">
                                    <table class="table align-middle" id="locationTable">
                                        <thead class="table-light text-muted">
                                            <tr>
                                                <th>Name</th>
                                                <th>Location Address</th>
                                                <th>Opening Time</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all ">
                                        @forelse($all_location as $location)
                                            <tr>
                                                <td>
                                                    <a href="#">{{$location->name}}</a>
                                                </td>
                                                <td>{{$location->address}}</td>
                                                <td>{{$location->from}} - {{$location->to}}</td>
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0 justify-content-center">
                                                        <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="Edit">
                                                            <a href="#showModalEditPickUpDropOff" data-bs-toggle="modal"
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
                                        @empty
                                            <p>No Price Found</p>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main row 2 end -->
            <!-- row end -->
        </div>

    </div>
</div>
<!-- Modal Delete Start -->
<div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="btn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                        colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this
                            record ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Delete End -->
<!-- Modal Tax Rate Edit Start -->
<div class="modal fade" id="showModalEditTaxRate" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal"></button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <input type="hidden" id="id-field">
                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Tax Rate Name</label>
                        <input type="text" id="customername-field" class="form-control"
                            placeholder="Enter Tax Rate Name" required="">
                    </div>
                    <div class="mb-3 tax-rate-style">
                        <label for="email-field" class="form-label">Tax Rate</label>
                        <input type="email" id="email-field" class="form-control" placeholder="Tax Rate" required="">
                        <i class="ri-percent-fill percent-icon-style"></i>
                    </div>


                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="submit" class="btn btn-success" id="add-btn">Save</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Tax Rate Edit End -->
<!-- Modal Types Of Price Edit Start -->
<div class="modal fade" id="showModalEditTypesOfPrice" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal"></button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <input type="hidden" id="id-field">
                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Price Name</label>
                        <input type="text" id="customername-field" class="form-control" placeholder="Enter Price Name"
                            required="">
                    </div>
                    <div class="mb-3 tax-rate-style">
                        <label for="email-field" class="form-label">Tax Rate</label>
                        <input type="email" id="email-field" class="form-control" placeholder="Tax Rate" required="">
                        <i class="ri-percent-fill percent-icon-style"></i>
                    </div>


                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="submit" class="btn btn-success" id="add-btn">Save</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Types Of Price Edit End -->
<!-- Modal Pick up drop off location Edit Start -->
<div class="modal fade" id="showModalEditPickUpDropOff" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal"></button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <input type="hidden" id="id-field">
                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Location Name</label>
                        <input type="text" id="customername-field" class="form-control"
                            placeholder="Enter Location Name" required="">
                    </div>
                    <div class="mb-3 ">
                        <label for="email-field" class="form-label">Location Address</label>
                        <input type="email" id="email-field" class="form-control" placeholder="Location Address"
                            required="">
                    </div>
                    <div class="mb-3 ">
                        <label for="email-field" class="form-label">Opening Time</label>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="email-field" class="form-label">From</label>
                                <input type="time" id="email-field" class="form-control" placeholder="Location Address"
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email-field" class="form-label">To</label>
                                <input type="time" id="email-field" class="form-control" placeholder="Location Address"
                                    required="">
                            </div>
                        </div>

                    </div>


                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="submit" class="btn btn-success" id="add-btn">Save</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Pick up drop off location Edit End -->
<!-- Modal Tax Rate Add Start -->
<div class="modal fade" id="showModalAddTaxRate" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Add Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal"></button>
            </div>
            <form action="{{route('admin.viki_rental.add',['tax'])}}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="id-field">
                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Tax Rate Name</label>
                        <input type="text" id="customername-field" class="form-control"
                            placeholder="Enter Tax Rate Name" required="" name="tax_name">
                    </div>
                    <div class="mb-3 tax-rate-style">
                        <label for="email-field" class="form-label">Tax Rate</label>
                        <input step="any" type="number" id="email-field" class="form-control" placeholder="Tax Rate" required="" name="tax_rate">
                        <i class="ri-percent-fill percent-icon-style"></i>
                    </div>


                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-primary" id="add-btn">Save</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Tax Rate Add End -->
<!-- Modal Types Of Price Add Start -->
<div class="modal fade" id="showModalAddTypesOfPrice" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Add Price</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal"></button>
            </div>
            <form action="{{route('admin.viki_rental.add',['price'])}}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="id-field">
                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Price Name</label>
                        <input type="text" id="customername-field" class="form-control" placeholder="Enter Price Name" name="name"
                            required="">
                    </div>
                    <div class="mb-3 tax-rate-style">
                        <label for="email-field" class="form-label">Price Attributes</label>
                        <input type="text" id="email-field" class="form-control" name="attributes" placeholder="Attributes" required="">
                    </div>

                    <div class="mb-3 tax-rate-style">
                        <label for="email-field" class="form-label">Tax</label>
                        <select class="form-control" name="tax_id">
                            <option value="" hidden>Select Tax</option>
                            @forelse($all_tax as $tax)
                            <option value="{{$tax->id}}">{{$tax->tax_name}}</option>
                            @empty
                                <p>No tax found</p>
                            @endforelse
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-primary" id="add-btn">Save</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Types Of Price Add End -->
<!-- Modal Pick up drop off location Add Start -->
<div class="modal fade" id="showModalAddPickUpDropOff" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Add Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal"></button>
            </div>
            <form action="{{route('admin.viki_rental.add',['location'])}}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="id-field">
                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Location Name</label>
                        <input type="text" id="customername-field" class="form-control"
                            placeholder="Enter Location Name" required="" name="name">
                    </div>
                    <div class="mb-3 ">
                        <label for="email-field" class="form-label">Location Address</label>
                        <input type="text" id="email-field" class="form-control" placeholder="Location Address"
                            required="" name="address">
                    </div>
                    <div class="mb-3 ">
                        <label for="email-field" class="form-label">Opening Time</label>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="email-field" class="form-label">From</label>
                                <input type="time" id="email-field" class="form-control" placeholder="Location Address" name="from"
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email-field" class="form-label">To</label>
                                <input type="time" id="email-field" class="form-control" placeholder="Location Address" name="to"
                                    required="">
                            </div>
                        </div>

                    </div>


                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-primary" id="add-btn">Save</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Pick up drop off location Add End -->
<script>
// Tax Rate Table
$('#taxRateTable').DataTable();
$('#priceTable').DataTable();
$('#locationTable').DataTable();
</script>
<!-- End Page-content -->
@include('admin.footer')
