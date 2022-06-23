@include('admin.header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/tom-select@1.7.5/dist/css/tom-select.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/tom-select@1.7.5/dist/js/tom-select.complete.min.js"></script>
<style>
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
</style>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- Container Fluid Reservation section content-->
            <!-- Main row 1 start -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Seasons & Weekdays</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">
                                        Pickup Location
                                    </label>
                                    <select id="pickup-location" placeholder="Select Location..." autocomplete="off">
                                        <option value="">Select Location...</option>
                                        <option value="4">Melbourne</option>
                                        <option value="1">Sydney</option>
                                        <option value="3">Nikola Tesla</option>
                                        <option value="5">Arnold Schwarzenegger</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Dropoff Location</label>
                                    <select id="dropoff-location" placeholder="Select Location..." autocomplete="off">
                                        <option value="">Select Location...</option>
                                        <option value="4">Melbourne</option>
                                        <option value="1">Sydney</option>
                                        <option value="3">Nikola Tesla</option>
                                        <option value="5">Arnold Schwarzenegger</option>
                                    </select>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-2">
                                    <label for="" class="form-label">Apply If Locations Are Inverted</label>
                                    <div>
                                        <label class="switch ">
                                            <input type="checkbox">
                                            <span class="slider-toggle round"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="" class="form-label">Cost</label>
                                    <input type="number" class="form-control" placeholder="$" style="width:45%;">
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="" class="form-label">Daily Cost</label>
                                    <div>
                                        <label class="switch ">
                                            <input type="checkbox">
                                            <span class="slider-toggle round"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="" class="form-label">Tax Rate</label>
                                    <select name="" id="" class="form-control">
                                        <option value="vl1">GST-10.00</option>
                                        <option value="vl2">VST-10.00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Cost Overides</label>
                                    <div id="overideAppend">

                                    </div>
                                    <button class="btn btn-primary mt-2" onclick="overideAppend()">Add Cost
                                        Overide</button>
                                </div>
                            </div>


                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <a href="carsCms.blade.php" class="btn btn-success me-2">Back</a>
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div>
        </div>
    </div>
</div>
<script>
// Tom selector start
new TomSelect("#pickup-location", {
    create: false,
    sortField: {
        field: "text",
        direction: "asc"
    }
});
new TomSelect("#dropoff-location", {
    create: false,
    sortField: {
        field: "text",
        direction: "asc"
    }
});
// Tom selector end


function overideAppend() {
    $('#overideAppend').append(`<div class="d-flex mt-2">
                                            <label for="" class="form-label me-2">Days of Rental</label>
                                            <input type="number" class="me-2">
                                            <label for="" class="form-label me-2">Cost</label>
                                            <input type="number">
                                        </div>`);
}
</script>

<!-- End Page-content -->
@include('admin.footer')
