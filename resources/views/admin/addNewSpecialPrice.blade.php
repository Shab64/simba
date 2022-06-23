@include('admin.header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/tom-select@1.7.5/dist/css/tom-select.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/tom-select@1.7.5/dist/js/tom-select.complete.min.js"></script>
<style>
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
                                <div class="col-md-4 mb-2">
                                    <label for="" class="form-label">
                                        From
                                    </label>
                                    <input type="text" class="form-control" onclick="this.type='date'"
                                        data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true"
                                        placeholder="Season Start Date">
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="" class="form-label">To</label>
                                    <input type="text" class="form-control" onclick="this.type='date'"
                                        data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true"
                                        placeholder="Season End Date ">
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="" class="form-label">Special Price Name</label>
                                    <input type="text" class="form-control">
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
                                    <label for="" class="form-label">Tied To The Year</label>
                                    <select name="" id="" class="form-control">
                                        <option value="v1">Yes</option>
                                        <option value="v2">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-2">
                                    <label for="" class="form-label">
                                        Type
                                    </label>
                                    <select name="" id="" class="form-control">
                                        <option value="charge">Charge</option>
                                        <option value="discount">Discount</option>
                                    </select>

                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="" class="form-label" style="display:block;">
                                        Value
                                    </label>
                                    <input type="number" class="form-control" style="display:inline-block; width:50%;">
                                    <select name="" id="" class="form-control" style="display:inline-block; width:25%;">
                                        <option value="val1">$</option>
                                        <option value="val2">%</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Cars</label>
                                    <select id="select-cars" name="cars[]" multiple placeholder="Select cars"
                                        autocomplete="off">
                                        <option value="">Select car..</option>
                                        <option value="vl1">Kia Carnival or Similar</option>
                                        <option value="vl2">Mitsubishi ASX or Similar</option>
                                        <option value="vl3">Hyundai i30 or Similar</option>
                                    </select>
                                    <button class="btn btn-light mt-1">Select All</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Types Of Price</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Locations</label>
                                    <select id="select-beast" placeholder="Select a person..." autocomplete="off">
                                        <option value="">Select a person...</option>
                                        <option value="4">Thomas Edison</option>
                                        <option value="1">Nikola</option>
                                        <option value="3">Nikola Tesla</option>
                                        <option value="5">Arnold Schwarzenegger</option>
                                    </select>
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
    create: false
});
new TomSelect("#select-cars", {
    persist: false,
    createOnBlur: true,
    create: false
});
new TomSelect("#select-beast", {
    create: false,
    sortField: {
        field: "text",
        direction: "asc"
    }
});
// Tom selector end
</script>

<!-- End Page-content -->
@include('admin.footer')
