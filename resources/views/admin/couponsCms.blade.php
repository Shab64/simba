@include('admin.header')
<style>
.remove-item-btn:hover {
    cursor: pointer;
}

/* Switch toggle button Start */
.switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider-toggle {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
}

.slider-toggle:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
}

input:checked+.slider-toggle {
    background-color: #2ecc71;
}

input:focus+.slider-toggle {
    box-shadow: 0 0 1px #2ecc71;
}

input:checked+.slider-toggle:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
}

/* Rounded sliders */
.slider-toggle.round {
    border-radius: 34px;
}

.slider-toggle.round:before {
    border-radius: 50%;
}

/* Switch toggle button end */

.percent-icon-style {
    position: absolute;
    top: 40px;
    right: 10px;
}

.tax-rate-style {
    position: relative;
}

.all-style {
    display: inline;

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
                                    <h5 class="card-title mb-0">Coupons</h5>
                                </div>
                                <div class="col-sm-auto">
                                    <a href="#newCoupon" data-bs-toggle="modal" class="btn btn-primary">Add
                                        New
                                        Coupons</a>
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
                                                <th>Code</th>
                                                <th>Type</th>
                                                <th>Valid Dates</th>
                                                <th>Vechicles</th>
                                                <th>Min Order Total</th>
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
                                                    <a href="#">11221</a>
                                                </td>
                                                <td>Gift, 20.00 $</td>
                                                <td>21/04/2022 - 13/05/2022</td>
                                                <td>All Vehicles</td>
                                                <td>20.00</td>
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
                                                    <a href="#">22221</a>
                                                </td>
                                                <td>Permanent, 30.00 %</td>
                                                <td>12/04/2022 - 28/04/2022</td>
                                                <td>1</td>
                                                <td>30.00</td>
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
                                    <!-- <div class="noresult" style="display: none">
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
                                    </div> -->
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
<!-- Add New Coupon Modal Start -->
<div class="modal fade zoomIn" id="newCoupon" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Add New Coupon</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal"></button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <input type="hidden" id="id-field">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Coupon Code</label>
                                <input type="text" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 ">
                                <label for="" class="form-label">Coupon Type</label>
                                <select name="" id="" class="form-control">
                                    <option value="v1">Permanent</option>
                                    <option value="v2">Gift</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3 ">
                                <label for="" class="form-label">Percent or Total</label>
                                <select name="" id="" class="form-control">
                                    <option value="v1">%</option>
                                    <option value="v2">$</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email-field" class="form-label">From</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email-field" class="form-label">To</label>
                            <input type="date" class="form-control">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-2 mb-3">
                            <label for="" class="form-label">Vehicle</label>
                            <div>
                                <label class="switch ">
                                    <input type="checkbox" checked>
                                    <span class="slider-toggle round"></span>
                                </label>
                                <p class="all-style">All</p>
                            </div>
                        </div>
                        <div class="col-md-5 mb-3">
                            <label for="" class="form-label">Value</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-md-5 mb-3">
                            <label for="" class="form-label">Min Order Total</label>
                            <input type="number" class="form-control">
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
<!-- Add New Coupon Modal Start -->

<script>
// Tax Rate Table
$('#taxRateTable').DataTable();
</script>
<!-- End Page-content -->
@include('admin.footer')
