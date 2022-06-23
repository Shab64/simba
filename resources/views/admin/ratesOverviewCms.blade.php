@include('admin.header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/tom-select@1.7.5/dist/css/tom-select.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/tom-select@1.7.5/dist/js/tom-select.complete.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="./assets/css/jquery.bootstrap.year.calendar.min.css">
<script src="./assets/js/jquery.bootstrap.year.calendar.min.js"></script> -->
<link href="./assets/calendar/lib/main.min.css" rel="stylesheet" />
<!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script> -->
<script src="./assets/calendar/lib/main.min.js"></script>

<style>
.fc .fc-button .fc-icon {
    font-size: 0em;
}

.jqyc-range-choosen-between {
    background-color: #157EFB !important;
    color: #FFF;
    border-radius: 0.25rem;
}

.text-right {
    text-align: end !important;
}

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
                            <div class="d-flex justify-content-between" style="align-items:center;">
                                <h4 class="card-title">Rates Overview</h4>
                                <div>
                                    <a href="addNewSpecialPrice.blade.php" class="btn btn-primary">New Special Price</a>
                                    <!-- <a href="#" class="btn btn-primary">New Restriction</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body height-card">
                                            <h5>Car</h5>
                                            <div class="row">
                                                <div class="col-md-12 mt-3">
                                                    <select id="select-cars" name="cars[]" multiple
                                                        placeholder="Select cars" autocomplete="off" class="me-1">
                                                        <option value="">Select Cars..</option>
                                                        <option value="c-1">Kia Carnival or Similar</option>
                                                        <option value="c-2">Hyundai i30 or Similar</option>

                                                    </select>
                                                </div>
                                                <div class="col-md-12 mt-3">
                                                    <div class="d-flex justify-content-end mb-2 mt-1">
                                                        <button class="btn btn-primary">Search</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Rates Calculator</h5>
                                            <div class="row">
                                                <div class="col-md-8 mt-2">
                                                    <select id="cars-rate-calculator" placeholder="Select a car..."
                                                        autocomplete="off">
                                                        <option value="">Select a car...</option>
                                                        <option value="4">Thomas Edison</option>
                                                        <option value="1">Nikola</option>
                                                        <option value="3">Nikola Tesla</option>
                                                        <option value="5">Arnold Schwarzenegger</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-md-4 mt-2">
                                                    <label for="" class="form-label">Pickup At</label>
                                                    <input type="date" class="form-control" id="pickupdate">
                                                </div>
                                                <div class="col-md-4 mt-2">
                                                    <label for="days" class="form-label">Days</label>
                                                    <input type="number" class="form-control" min="1">
                                                </div>
                                                <div class="col-md-4 mt-2" style="align-self: self-end;">
                                                    <button class="btn btn-primary">Calculate</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between" style="align-items:center;">
                                <h4 class="card-title">Hyundai i30 or similar</h4>
                                <div>
                                    <!-- <a href="#" class="btn btn-primary">Calendar Pricing Overview</a>
                                    <a href="#" class="btn btn-light">Length Of Stay Pricing Overview</a> -->
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active btn btn-primary me-2" id="nav-home-tab"
                                                data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab"
                                                aria-controls="nav-home" aria-selected="true">Calendar Pricing
                                                Overview</button>
                                            <button class="nav-link btn btn-light" id="nav-profile-tab"
                                                data-bs-toggle="tab" data-bs-target="#nav-profile" type="button"
                                                role="tab" aria-controls="nav-profile" aria-selected="false">Length Of
                                                Stay Pricing
                                                Overview</button>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <!-- Calendar -->
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <label for="" class="form-label">Select Period</label>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" class="form-label">From</label>
                                            <input type="date" class="form-control" id="pickupdate">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" class="form-label">To</label>
                                            <input type="date" class="form-control" id="pickupdate">
                                        </div>
                                    </div>
                                    <div id='calendar' class="mt-4"></div>
                                    <!-- <div id="fullcalendar"></div> -->
                                    <!-- <div class="calendar"></div> -->
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <!-- Table -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="table-responsive table-card mb-1 mt-4">
                                            <table class="table align-middle" id="myDatatable">
                                                <thead class="table-light text-muted">
                                                    <tr>
                                                        <th scope="col" style="width: 50px;">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="checkAll" value="option">
                                                            </div>
                                                        </th>
                                                        <th></th>
                                                        <th>1 Day</th>
                                                        <th>3 Days</th>
                                                        <th>7 Days</th>
                                                        <th>10 Days</th>

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
                                                            Off-Season Prices

                                                        </td>
                                                        <td>
                                                            Daily <br>
                                                            <span style="font-weight:bold;">$75.00</span>

                                                        </td>
                                                        <td>Daily <br>
                                                            <span style="font-weight:bold;">$225.00</span>
                                                        </td>
                                                        <td>Daily <br>
                                                            <span style="font-weight:bold;">$525.00</span>
                                                        </td>

                                                        <td>Daily <br>
                                                            <span style="font-weight:bold;">$750.00</span>
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
                                                            20/02/2022 - 30/11/2022
                                                            <br>
                                                            <span style="font-weight:bold; color:blue;">
                                                                MULTIPLE DAYS <span
                                                                    class="badge bg-secondary ms-2">-10%</span>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            Daily <br>
                                                            <span style="font-weight:bold;">$75.00</span>

                                                        </td>
                                                        <td>Daily <br>
                                                            <span style="font-weight:bold;">$225.00</span>
                                                        </td>
                                                        <td>Daily <br>
                                                            <span style="font-weight:bold;">$525.00</span>
                                                        </td>

                                                        <td>Daily <br>
                                                            <span style="font-weight:bold;">$750.00</span>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- <div class="noresult" style="display: none">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json"
                                                        trigger="loop" colors="primary:#121331,secondary:#08a88a"
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
                                            </div> -->
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
            </div>
        </div>
    </div>
</div>
<!-- Add Modal -->
<div class="modal fade" id="schedule-add">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Your Schedule</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Schedule Name:</label>
                        <input type="text" class="form-control">
                    </div>
                </form>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Add Your Schedule</button>
            </div>
        </div>
    </div>
</div>
<script>
// Tom selector start
new TomSelect("#select-cars", {
    persist: false,
    createOnBlur: true,
    create: false
});
new TomSelect("#cars-rate-calculator", {
    create: false,
    sortField: {
        field: "text",
        direction: "asc"
    }
});
// Tom selector end
// Calendar.io start
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        // events: 'https://fullcalendar.io/api/demo-feeds/events.json',
        events: [{
            title: 'Add New Event',
            start: '2022-04-20',
            end: '2022-04-22'

        }],
        editable: true,
        selectable: true

    });
    calendar.render();
});
// Calendar.io End
</script>

<!-- End Page-content -->
@include('admin.footer')
