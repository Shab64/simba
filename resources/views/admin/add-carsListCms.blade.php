@include('admin.header')
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

.t-unit-btn {
    position: absolute;
    top: 30px;
    right: 15px;
}

.t-unit-parent {
    position: relative;
}

.font-times-style {
    font-size: 22px;
}

.icon-test-div {
    align-self: center;
}
</style>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <form action="{{route('admin.viki_car.add',['carlist'])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 mb-2">
                                    <label for="" class="form-label">
                                        Name
                                    </label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="" class="form-label">Available</label>
                                    <select name="available" id="" class="form-control">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="" class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4" class="t-units-parent">
                                    <label for="" class="form-label">Total Units</label>
                                    <input type="number" class="form-control" min="1" name="units"
                                        id="inputCarsValue">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Category</label>
                                    <select id="select-category" name="category[]"
                                            placeholder="Select location" autocomplete="off" multiple>
                                        @forelse($all_categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @empty
                                            <option value="">No Category found</option>
                                        @endforelse
                                    </select>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">
                                        Pickup Location
                                    </label>
                                    <select id="select-pickUpLocation" name="from"
                                        placeholder="Select location" autocomplete="off">
                                        @forelse($all_locations as $loc)
                                            <option value="{{$loc->id}}">{{$loc->name}}</option>
                                        @empty
                                            <option value="">No location found</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">
                                        Dropoff Location
                                    </label>
                                    <select id="select-dropOffLocation" name="to"
                                        placeholder="Select location" autocomplete="off">
                                        @forelse($all_locations as $loc)
                                            <option value="{{$loc->id}}">{{$loc->name}}</option>
                                        @empty
                                            <option value="">No location found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">
                                        Characteristic
                                    </label>
                                    <ul style="list-style: none;padding: 0;">
                                        @forelse($all_characteristics as $character)
                                            <li style="display: inline-block;">
                                                <input class="form-check-input me-1" name="characteristics[]" type="checkbox"  value="{{$character->id}}" aria-label="...">
                                                {{$character->name}}
                                            </li>
                                        @empty
                                            <option value="">No Characteristics found</option>
                                        @endforelse
                                    </ul>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">
                                        Daily
                                    </label>
                                    <ul class="list-group">
                                        <input type="number" name="daily_start_price" class="form-control">
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="" class="form-label">Description</label>
                                    <textarea name="details" id="" cols="30" rows="4" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <div class="btn-group">
                                <a href="carsCms.blade.php" class="btn btn-primary ">Back</a>
                                <button class="btn btn-primary">Save</button>
                            </div>

                        </div>
                    </div>
                    </form>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
        </div>
    </div>
</div>
<!-- Characteristics Modal Start -->

<!-- Characteristics Modal End -->
<!-- Modal Manage Distinctive Features Start-->
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Distinctive Features</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="mainCard">
                </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Manage Distinctive Features End-->


<script>
var count1 = 1;

function propertiesAppend(id) {
    let append1 = document.getElementById('propertiesAppend0');
    $('#' + id).append(`
                                  <div class="row mt-2">
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" placeholder="Feature">
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" placeholder="Value">
                                </div>
                                <div class="col-sm-2 icon-test-div">
                                    <i class="las la-times-circle font-times-style"></i>
                                </div>

                            </div>

                            `);

}
var num = 1;

function carCardAppend() {
    let cath = document.getElementById('inputCarsValue');
    let vl = cath.value;
    let modalId = document.getElementById('staticBackDrop');
    if (vl == '' || vl == 'Null') {
        alert('Please Enter Total Unit Value');
        // modalId.style.display = 'none';
    } else {
        for (let i = 1; i <= vl; i++) {
            $('#mainCard').append(`  <div id="cardCar${num}">
                        <div class="card p-3">
                            <div class="d-flex justify-content-between">
                                <h5>Car #${num}</h5>
                                <button class="btn btn-dark btn-sm">Damage & Status</button>
                            </div>
                            <div id="propertiesAppend${count1}">
                                <div class="row mt-2">
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" placeholder="Feature">
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" placeholder="Value">
                                    </div>
                                    <div class="col-sm-2 icon-test-div">
                                        <i class="las la-times-circle font-times-style"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-success mt-2" onclick="propertiesAppend('propertiesAppend${count1}')">Add</button>
                            </div>

                        </div>
                    </div>`);
            count1++;
            num++;
            cath.value = '';
        }
        $('#staticBackdrop').modal('show');
    }
}



// Tom selector start
new TomSelect("#select-pickUpLocation", {
    persist: false,
    createOnBlur: true,
    create: true
});
new TomSelect("#select-dropOffLocation", {
    persist: false,
    createOnBlur: true,
    create: true
});
new TomSelect("#select-category", {
    persist: false,
    createOnBlur: true,
    create: true
});
// Tom selector end
</script>


@include('admin.footer')
<!-- las la-angle-double-up -->
<!-- las la-angle-double-down -->
