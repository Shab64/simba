@include('admin.header')
<!-- dropzone css -->
<link rel="stylesheet" href="{{url('assets')}}/libs/dropzone/dropzone.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/tom-select@1.7.5/dist/css/tom-select.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/tom-select@1.7.5/dist/js/tom-select.complete.min.js"></script>

<style>
.remove-item-btn:hover {
    cursor: pointer;
}

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

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #333;
    -webkit-transition: .4s;
    transition: .4s;
}

.slider:before {
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

input:checked+.slider {
    background-color: #ff3100;
}

input:focus+.slider {
    box-shadow: 0 0 1px #ff3100;
}

input:checked+.slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
    border-radius: 34px;
}

.slider.round:before {
    border-radius: 50%;
}

.card-cars {
    /*box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;*/
    cursor: pointer;
    transition: .8s;
    transition: transform .8s;
    background-color: aliceblue;
    margin-top: 55px;
    text-align: center;
}

.card-cars:hover {
    /* transform: scale(1.03); */
    transform: translateY(-5px);
    transition: .8s;


}

.border-style {
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    transform: translateY(0px);
    transition: 0.4s;
}

.border-style:hover {
    transform: translateY(-10px);
    transition: 0.4s;

}

.card-cars:hover .car {
    box-shadow: 0px 0px 25px #e7e7e7;
}



.license-card {
    height: 70vh;
    overflow-y: scroll;
    box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;

}

.img-figure-tag {
    /*border-radius: 25px;*/
    /*box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;*/

}

.ribbon-content label {
    color: black;
}

.ribbon-box .card-body {
    margin-top: 12px;
}

.img-hover {
    transition: transform .8s;
}

.img-hover:hover {
    transform: scale(1.06);
}

.header-aggrement-main-div {
    align-items: center;
}

.agrement-header {
    text-align: end;

}

.car {
    width: 400px;
    margin: 0px auto;
    border-radius: 19px;
    background: aliceblue;
    position: relative;
    bottom: 30px;
    text-align: center;
    box-shadow: 0px 0px 15px #e7e7e7;
}

.car img {
    text-align: center;
}

.card-cars .card-title {
    font-size: 23px !important;
    text-align: center;
    font-weight: 700 !important;
}

.card-cars .card-body {
    padding-left: 0;
    padding-right: 0;
    padding-bottom: 0;
}

.card-cars button {
    width: 100%;
    border-radius: 0;
}

@media (max-width:767px) {
    .car {
        width: 100%;
        margin: 0px auto;
        border-radius: 19px;
        background: aliceblue;
        position: relative;
        bottom: 30px;
        text-align: center;
        box-shadow: 0px 0px 15px #e7e7e7;
    }
}
</style>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card border-style">
                                        <div class="card-header border-bottom-dashed">

                                            <div class="row g-4 align-items-center justify-content-between">
                                                <div class="col-sm-auto">
                                                    <h5 class="card-title mb-0">Cars List</h5>
                                                </div>
                                                <div class="col-sm-auto">
                                                    <a href="addNewSpecialPrice.blade.php" class="btn btn-primary">Add
                                                        New Price</a>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body border-bottom-dashed border-bottom">

                                            <div class="d-flex justify-content-between mb-2">
                                                <div class="search-box">
                                                    <input type="text" class="form-control search"
                                                        placeholder="Search for User Name ">
                                                    <i class="ri-search-line search-icon"></i>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card-body">
                                            <div>
                                                <div class="table-responsive table-card mb-1">
                                                    <table class="table align-middle" id="myDatatable" >
                                                        <thead class="table-light text-muted">
                                                            <tr>
                                                                <th scope="col" style="width: 50px;">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="checkAll" value="option">
                                                                    </div>
                                                                </th>
                                                                <th>Id</th>
                                                                <th>Name</th>
                                                                <th>From</th>
                                                                <th>To</th>
                                                                <th>Location</th>
                                                                <th>Affected Cars</th>
                                                                <th>Type</th>
                                                                <th>Promotion</th>
                                                                <th>Value</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="list form-check-all ">
                                                            <tr>
                                                                <th scope="row">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="checkAll" value="option1">
                                                                    </div>
                                                                </th>

                                                                <td>
                                                                    1
                                                                </td>
                                                                <td>
                                                                    <a href="#">MULTIPLE DAYS</a>
                                                                </td>
                                                                <td>20/02/2022</td>
                                                                <td>30/11/2022</td>

                                                                <td>Any</td>
                                                                <td>9</td>
                                                                <td>Charge</td>
                                                                <td><i class="las la-times-circle"
                                                                        style="font-size:20px;"></i></td>
                                                                <td>10.00%</td>
                                                                <td>
                                                                    <ul
                                                                        class="list-inline hstack gap-2 mb-0 justify-content-center">
                                                                        <li class="list-inline-item edit"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" title=""
                                                                            data-bs-original-title="Edit">
                                                                            <a href="#showModalEditTaxRate"
                                                                                data-bs-toggle="modal"
                                                                                class="text-primary d-inline-block edit-item-btn">
                                                                                <i class="ri-pencil-fill fs-16"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-inline-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" title=""
                                                                            data-bs-original-title="Remove">
                                                                            <a class="text-danger d-inline-block remove-item-btn"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#deleteRecordModal">
                                                                                <i
                                                                                    class="ri-delete-bin-5-fill fs-16"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="checkAll" value="option1">
                                                                    </div>
                                                                </th>

                                                                <td>
                                                                    1
                                                                </td>
                                                                <td>
                                                                    <a href="#">MULTIPLE DAYS</a>
                                                                </td>
                                                                <td>20/02/2022</td>
                                                                <td>30/11/2022</td>
                                                                <td>Any</td>
                                                                <td>9</td>
                                                                <td>Charge</td>
                                                                <td><i class="las la-check" style="font-size:20px;"></i>
                                                                </td>
                                                                <td>10.00%</td>
                                                                <td>
                                                                    <ul
                                                                        class="list-inline hstack gap-2 mb-0 justify-content-center">
                                                                        <li class="list-inline-item edit"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" title=""
                                                                            data-bs-original-title="Edit">
                                                                            <a href="#showModalEditTaxRate"
                                                                                data-bs-toggle="modal"
                                                                                class="text-primary d-inline-block edit-item-btn">
                                                                                <i class="ri-pencil-fill fs-16"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-inline-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" title=""
                                                                            data-bs-original-title="Remove">
                                                                            <a class="text-danger d-inline-block remove-item-btn"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#deleteRecordModal">
                                                                                <i
                                                                                    class="ri-delete-bin-5-fill fs-16"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="noresult" style="display: none">
                                                        <div class="text-center">
                                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json"
                                                                trigger="loop"
                                                                colors="primary:#121331,secondary:#08a88a"
                                                                style="width:75px;height:75px">
                                                            </lord-icon>
                                                            <h5 class="mt-2">Sorry! No Result Found
                                                            </h5>
                                                            <p class="text-muted mb-0">We've
                                                                searched more than 150+ Orders We
                                                                did not
                                                                find any
                                                                orders for you search.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <div class="pagination-wrap hstack gap-2" style="display: flex;">
                                                        <a class="page-item pagination-prev disabled" href="#">
                                                            Previous
                                                        </a>
                                                        <ul class="pagination listjs-pagination mb-0">
                                                            <li class="active"><a class="page" href="#" data-i="1"
                                                                    data-page="8">1</a>
                                                            </li>
                                                            <li><a class="page" href="#" data-i="2" data-page="8">2</a>
                                                            </li>
                                                        </ul>
                                                        <a class="page-item pagination-next" href="#">
                                                            Next
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
        </div>
    </div>
</div>


@include('admin.footer')
<!-- las la-angle-double-up -->
<!-- las la-angle-double-down -->
