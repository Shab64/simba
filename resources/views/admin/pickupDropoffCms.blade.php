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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header border-bottom-dashed">

                            <div class="row g-4 align-items-center justify-content-between">
                                <div class="col-sm-auto">
                                    <h5 class="card-title mb-0">Pickup And Dropoff Fees</h5>
                                </div>
                                <div class="col-sm-auto">
                                    <a href="addNewPickupDropoff.blade.php" class="btn btn-primary">Add
                                        New
                                        Pickup And Dropoff Fees</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body border-bottom-dashed border-bottom">
                            <form>
                                <div class="d-flex justify-content-between mb-2">
                                    <div class="search-box">
                                        <input type="text" class="form-control search"
                                            placeholder="Search for User Name ">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="table-responsive table-card mb-1">
                                    <table class="table align-middle" id="myDatatable">
                                        <thead class="table-light text-muted">
                                            <tr>
                                                <th scope="col" style="width: 50px;">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkAll"
                                                            value="option">
                                                    </div>
                                                </th>

                                                <th>Pickup</th>
                                                <th>Dropoff</th>
                                                <th>Charge</th>
                                                <th>Daily</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all ">
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="checkAll"
                                                            value="option1">
                                                    </div>
                                                </th>

                                                <td>
                                                    <a href="#">Mitchell Park, Adelaide</a>
                                                </td>
                                                <td>Waterloo, Sydney</td>
                                                <td>$ 800.00</td>
                                                <td>No</td>
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
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="checkAll"
                                                            value="option1">
                                                    </div>
                                                </th>

                                                <td>
                                                    <a href="#">Mitchell Park, Adelaide</a>
                                                </td>
                                                <td>Waterloo, Sydney</td>
                                                <td>$ 800.00</td>
                                                <td>yes</td>
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

<script>
// Tax Rate Table
$('#taxRateTable').DataTable();
</script>
<!-- End Page-content -->
@include('admin.footer')
