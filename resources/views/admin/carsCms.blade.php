@include('admin.header')
<!-- dropzone css -->
<link rel="stylesheet" href="{{url('assets')}}/libs/dropzone/dropzone.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/tom-select@1.7.5/dist/css/tom-select.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/tom-select@1.7.5/dist/js/tom-select.complete.min.js"></script>

<style>
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

.remove-item-btn:hover {
    cursor: pointer;
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
                        <div class="card-body checkout-tab">
                            <form action="#">
                                <div class="step-arrow-nav mt-n3 mx-n3 mb-3">
                                    <ul class="nav nav-pills nav-justified custom-nav" role="tablist">

                                        <!-- Car list Tab Start -->
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link fs-15 p-3 active" id="pills-bill-dates-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-bill-dates" type="button"
                                                role="tab" aria-controls="pills-bill-dates" aria-selected="true"
                                                data-position="0"><i
                                                    class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>
                                                Cars List</button>
                                        </li>
                                        <!-- Cars OPtions Tab Start -->
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link fs-15 p-3" id="pills-cars-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-cars" type="button" role="tab"
                                                aria-controls="pills-cars" aria-selected="false" data-position="1"><i
                                                    class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>
                                                Car Options</button>
                                        </li>

                                    </ul>
                                </div>
                                <div class="tab-content">

                                    <!-- dates tab pane start -->
                                    <div class="tab-pane fade show active" id="pills-bill-dates" role="tabpanel"
                                        aria-labelledby="pills-bill-dates-tab">

                                        <!-- Form -->
                                        <!-- <div class="card"> -->
                                        <!-- <div class="card-body"> -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card border-style">
                                                    <div class="card-header border-bottom-dashed">

                                                        <div class="row g-4 align-items-center justify-content-between">
                                                            <div class="col-sm-auto">
                                                                <h5 class="card-title mb-0">Cars List</h5>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="btn-group">
                                                                    <a href="{{route('admin.viki_car.carlist')}}"
                                                                       class="btn btn-primary">Add
                                                                        New Car</a>
                                                                    <a href="edit-view-fares.blade.php"
                                                                       class="btn btn-primary">Edit/View Fares</a>
                                                                    <a href="cars-calendarCMS.blade.php"
                                                                       class="btn btn-primary">Cars Calendar</a>
                                                                </div>

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
                                                                <table class="table align-middle" id="carsListTable">
                                                                    <thead class="table-light text-muted">
                                                                        <tr>
                                                                            <th>Id</th>
                                                                            <th>Name</th>
                                                                            <th>Category</th>
                                                                            <th>Characteristics</th>
                                                                            <th>Options</th>
{{--                                                                            <th>Location</th>--}}
                                                                            <th>Units</th>
                                                                            <th>Available</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="list form-check-all ">
                                                                    @forelse($all_Vikicars as $Vikicars)
                                                                        <?php
                                                                        $category = (!empty($Vikicars->category)) ? json_decode($Vikicars->category,true) : "";
                                                                        $characteristics = (!empty($Vikicars->characteristics)) ? json_decode($Vikicars->characteristics,true) : "";
                                                                        ?>
                                                                        <tr>
                                                                            <td>
                                                                                {{$loop->iteration}}
                                                                            </td>
                                                                            <td>
                                                                                <a href="#">{{$Vikicars->name}} or similar</a>
                                                                            </td>
                                                                            <td>{{(isset($category)) ? count($category) : 0}}</td>
                                                                            <td>{{(!empty($characteristics)) ? count($characteristics) : 0}}</td>
                                                                            <td>0</td>
{{--                                                                            <td>{{$Vikicars->from}} - {{$Vikicars->to}}</td>--}}
                                                                            <td>{{$Vikicars->units}}</td>
                                                                            <td class="text-{{($Vikicars->available === 'yes'  ? "success" : "danger")}}">{{$Vikicars->available}}</td>
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
                                                                                            <i
                                                                                                class="ri-pencil-fill fs-16"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="list-inline-item"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-trigger="hover"
                                                                                        data-bs-placement="top" title=""
                                                                                        data-bs-original-title="Remove">
                                                                                        <a class="text-danger d-inline-block remove-item-btn" onclick="">
{{--                                                                                            remove('{{route('admin.vikitax-remove',[$Vikicars->id])}}')--}}
                                                                                            <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </td>
                                                                        </tr>
                                                                    @empty
                                                                        <option value="">No car found</option>
                                                                    @endforelse
                                                                    </tbody>
                                                                </table>
                                                                <div class="noresult" style="display: none">
                                                                    <div class="text-center">
                                                                        <lord-icon
                                                                            src="https://cdn.lordicon.com/msoeawqm.json"
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
                                                                <div class="pagination-wrap hstack gap-2"
                                                                    style="display: flex;">
                                                                    <a class="page-item pagination-prev disabled"
                                                                        href="#">
                                                                        Previous
                                                                    </a>
                                                                    <ul class="pagination listjs-pagination mb-0">
                                                                        <li class="active"><a class="page" href="#"
                                                                                data-i="1" data-page="8">1</a>
                                                                        </li>
                                                                        <li><a class="page" href="#" data-i="2"
                                                                                data-page="8">2</a></li>
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
                                        <!-- </div> -->
                                        <!-- </div> -->

                                        <!-- Form end -->

                                    </div>
                                    <!-- dates tab pane end-->
                                    <!-- cars tab pane start -->
                                    <div class="tab-pane fade" id="pills-cars" role="tabpanel"
                                        aria-labelledby="pills-cars-tab">

                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="card border-style">
                                                    <div class="card-header border-bottom-dashed">

                                                        <div class="row g-4 align-items-center justify-content-between">
                                                            <div class="col-sm-auto">
                                                                <h5 class="card-title mb-0">Categories</h5>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <a href="#showModalAddNewCategories"
                                                                    data-bs-toggle="modal" class="btn btn-primary">Add
                                                                    New Categories</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div>
                                                            <div class="table-responsive table-card mb-1">
                                                                <table class="table align-middle" id="categoriesTable">
                                                                    <thead class="table-light text-muted">
                                                                        <tr>
                                                                            <th>Category Name</th>
                                                                            <th>Description</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="list form-check-all ">
                                                                    @forelse($all_categories as $category)
                                                                        <tr>
                                                                            <td>
                                                                                <a href="#">{{$category->name}}</a>
                                                                            </td>
                                                                            <td>{{strip_tags($category->details)}}</td>

                                                                            <td>
                                                                                <ul
                                                                                    class="list-inline hstack gap-2 mb-0 justify-content-center">
                                                                                    <li class="list-inline-item edit"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-trigger="hover"
                                                                                        data-bs-placement="top" title=""
                                                                                        data-bs-original-title="Edit">
                                                                                        <a href="#showModalEditNewCategories"
                                                                                            data-bs-toggle="modal"
                                                                                            class="text-primary d-inline-block edit-item-btn">
                                                                                            <i
                                                                                                class="ri-pencil-fill fs-16"></i>
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
                                                                    @empty
                                                                        <p>No Category Found</p>
                                                                    @endforelse
                                                                    </tbody>
                                                                </table>
                                                                <div class="noresult" style="display: none">
                                                                    <div class="text-center">
                                                                        <lord-icon
                                                                            src="https://cdn.lordicon.com/msoeawqm.json"
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
                                                                <div class="pagination-wrap hstack gap-2"
                                                                    style="display: flex;">
                                                                    <a class="page-item pagination-prev disabled"
                                                                        href="#">
                                                                        Previous
                                                                    </a>
                                                                    <ul class="pagination listjs-pagination mb-0">
                                                                        <li class="active"><a class="page" href="#"
                                                                                data-i="1" data-page="8">1</a>
                                                                        </li>
                                                                        <li><a class="page" href="#" data-i="2"
                                                                                data-page="8">2</a></li>
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
                                            <div class="col-md-12 ">
                                                <div class="card border-style">
                                                    <div class="card-header border-bottom-dashed">

                                                        <div class="row g-4 align-items-center justify-content-between">
                                                            <div class="col-sm-auto">
                                                                <h5 class="card-title mb-0">Characteristics</h5>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <a href="#showModalAddCharacteristics"
                                                                    data-bs-toggle="modal" class="btn btn-primary">Add
                                                                    New Characteristics</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div>
                                                            <div class="table-responsive table-card mb-1">
                                                                <table class="table align-middle"
                                                                    id="characteristicsTable">
                                                                    <thead class="table-light text-muted">
                                                                        <tr>
                                                                            <th>Characteristics Name</th>
                                                                            <th>Text</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="list form-check-all ">
                                                                    @forelse($all_characteristics as $character)
                                                                        <tr>
                                                                            <td><a href="#">{{$character->name}}</a></td>
                                                                            <td>{{$character->text}}</td>
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
                                                                                            <i
                                                                                                class="ri-pencil-fill fs-16"></i>
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
                                                                    @empty
                                                                        <p>No character Found</p>
                                                                    @endforelse
                                                                    </tbody>
                                                                </table>
                                                                <div class="noresult" style="display: none">
                                                                    <div class="text-center">
                                                                        <lord-icon
                                                                            src="https://cdn.lordicon.com/msoeawqm.json"
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
                                                                <div class="pagination-wrap hstack gap-2"
                                                                    style="display: flex;">
                                                                    <a class="page-item pagination-prev disabled"
                                                                        href="#">
                                                                        Previous
                                                                    </a>
                                                                    <ul class="pagination listjs-pagination mb-0">
                                                                        <li class="active"><a class="page" href="#"
                                                                                data-i="1" data-page="8">1</a>
                                                                        </li>
                                                                        <li><a class="page" href="#" data-i="2"
                                                                                data-page="8">2</a></li>
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
                                        <!-- </div> -->

                                    </div>
                                    <!-- cars tab pane end -->
                                </div>
                                <!-- end tab content -->
                            </form>
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
<!-- Add    New Car Modal Start -->
<div class="modal fade" id="showModalAddCharacteristics" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Add Characteristic</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal"></button>
            </div>
            <form action="{{route('admin.viki_car.add',['characteristics'])}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="" class="form-label">Characteristic Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="" class="form-label">Text</label>
                            <input type="text" class="form-control" name="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <label for="" class="form-label">Cars Assigned</label>
                            <div class="d-flex" id="menuItems">
                                <select id="drop1" style="width: 100%;"  multiple required name="viki_cars_assigned[]">
                                    <option value="" disabled selected>Select</option>
                                    @forelse($all_Vikicars as $Vikicars)
                                        <option value="{{$Vikicars->id}}">{{$Vikicars->name}}</option>
                                    @empty
                                        <option value="">No car found</option>
                                    @endforelse
                                </select>
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
<!-- Add New Car Modal End -->

<!-- Add New Categories Modal Start -->
<div class="modal fade" id="showModalAddNewCategories" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal"></button>
            </div>
            <form action="{{route('admin.viki_car.add',['category'])}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <label for="" class="form-label">Category Name</label>
                            <input type="text" class="form-control" name="name" >
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="" class="form-label">Description</label>
                            <div class="ck-editor-reverse">
                                <textarea id="email-editor" name="details"></textarea>
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
<!-- Add New Categories Modal End -->

<!-- Edit New Categories Modal Start -->
<div class="modal fade" id="showModalEditNewCategories" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal"></button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <label for="" class="form-label">Category Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="" class="form-label">Description</label>
                            <div class="ck-editor-reverse">
                                <div id="email-editor2"></div>

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
<!-- Edit New Categories Modal End -->
<!-- Dropzone min -->
<script href="{{url('assets')}}/libs/dropzone/dropzone-min.js"></script>
<script>
$('#btner').on('click', function(e) {
    const selVals = $('.d-flex select').map((i, el) => [$(el).val()]).get();
    console.log(JSON.stringify(selVals))
});



const opts = {
    sortField: 'text',
    hideSelected: false,
    duplicates: true,
    plugins: ['input_autogrow'],
}

new TomSelect('#drop1', opts);
new TomSelect('#drop2', opts);
new TomSelect('#drop3', opts);
</script>


@include('admin.footer')
<!-- las la-angle-double-up -->
<!-- las la-angle-double-down -->
