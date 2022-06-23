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
                            <h4 class="card-title">Add Out Of Hours Fees</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">
                                        Name
                                    </label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">From Time</label>
                                    <input type="time" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">To Time</label>
                                    <input type="time" class="form-control">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Tax Rate</label>
                                    <select name="" id="" class="form-control">
                                        <option value="vl1">Select Tax Rate</option>
                                        <option value="vl2">GST-10.00%</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-2">
                                    <label for="" class="form-label">Pick Up Charge</label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="" class="form-label">Drop Off Charge</label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="" class="form-label">Max Charge</label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="" class="form-label">Pick Up/Drop Off</label>
                                    <select name="" id="" class="form-control">
                                        <option value="vl1">Pick Up Only</option>
                                        <option value="vl2">Drop Off Only</option>
                                        <option value="vl3">Pick Up & Drop Off</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Weekdays</label>
                                    <select id="select-weekdays" name="weekdays[]" multiple
                                        placeholder="Select weekdays" autocomplete="off">
                                        <option value="">Select Weekdays..</option>
                                        <option value="monday">Monday</option>
                                        <option value="tuesday">Tuesday</option>
                                        <option value="wednesday">Wednesday</option>
                                        <option value="thursday">Thursday</option>
                                        <option value="friday">Friday</option>
                                        <option value="saturday">Saturday</option>
                                        <option value="sunday">Sunday</option>
                                    </select>
                                    <button class="btn btn-light mt-1">Select All</button>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Cars</label>
                                    <select id="select-cars" name="cars[]" multiple placeholder="Select cars"
                                        autocomplete="off">
                                        <option value="">Select Cars..</option>
                                        <option value="c-1">Kia Carnival or Similar</option>
                                        <option value="c-2">Hyundai i30 or Similar</option>

                                    </select>
                                    <button class="btn btn-light mt-1">Select All</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Location</label>
                                    <select id="select-dropOffLocation" name="locationDrop[]" multiple
                                        placeholder="Select location" autocomplete="off">
                                        <option value="">Select a location...</option>
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                    </select>
                                    <button class="btn btn-light mt-1">Select All</button>
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
new TomSelect("#select-weekdays", {
    persist: false,
    createOnBlur: true,
    create: false,

});
new TomSelect("#select-cars", {
    persist: false,
    createOnBlur: true,
    create: false
});
new TomSelect("#select-dropOffLocation", {
    persist: false,
    createOnBlur: true,
    create: false
});
// Tom selector end
</script>

<!-- End Page-content -->
@include('admin.footer')
