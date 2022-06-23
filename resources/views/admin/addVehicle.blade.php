@include('admin.header')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- Container Fluid Reservation section content-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Add Vehicle</h5>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{url('admin/add_vehicle')}}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">

                                    <div class="col-xxl-3 col-md-6">
                                        <label for="regNumber" class="form-label">Select Branch</label>
                                        <select name="branch" class="form-select mb-3">
                                            <option>Sydney</option>
                                            <option>Adelaide</option>
                                        </select>
                                    </div>

                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="regNumber" class="form-label">Image</label>
                                            <input value="{{(!empty(old('image'))) ? old('image') : ""}}" type="file" class="form-control" id="image" name="image">
                                        </div>
                                    </div>

                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="regNumber" class="form-label">Registration Number</label>
                                            <input value="{{(!empty(old('reg_number'))) ? old('reg_number') : ""}}" type="text" class="form-control" id="regNumber" name="reg_number">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="model" class="form-label">Registration Start Date</label>

                                            <input type="date" id="model" class="form-control" value="{{(!empty(old('reg_date'))) ? old('reg_date') : date('Y-m-d')}}" name="reg_date">

                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="model" class="form-label">Registration End Date</label>

                                            <input type="date" id="model" class="form-control" name="reg_end_date" value="{{(!empty(old('reg_end_date'))) ? old('reg_end_date') : ""}}">

                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="brand" class="form-label">Brand</label>
                                            <input list="brand" name="brand" class="form-control" />
                                            <datalist id="brand">
                                                <option value="Toyota">Toyota</option>
                                                <option value="Suzuki">Suzuki</option>
                                            </datalist>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="model" class="form-label">Model</label>
                                            <input type="text" id="model" class="form-control" name="model" value="{{(!empty(old('model'))) ? old('model') : ""}}">
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="type" class="form-label">Type</label>
                                            <select id="type" class="form-select" data-choices="" data-choices-sorting="true" name="type">
                                                <option hidden value="">
                                                    Select Type
                                                </option>
                                                <option>Suv</option>
                                                <option>People Mover Large</option>
                                                <option>Mini
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="year" class="form-label">Year</label>
                                            <?php $years = range(1900, strftime("%Y", time())); ?>
                                            <select class="form-select form-control" name="year">
                                                <option hidden value="">Select Year</option>
                                                <?php foreach($years as $year) : ?>
                                                <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="color" class="form-label">Color</label>
{{--                                            <input type="color" class="form-control" id="color" name="color" value="{{(!empty(old('color'))) ? old('color') : ""}}">--}}

                                            <input list="color" name="color" class="form-control" />
                                            <datalist id="color">
                                                <option>red</option>
                                                <option>black</option>
                                                <option>green</option>
                                            </datalist>

                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="win" class="form-label">Win No</label>
                                            <input type="text" class="form-control" id="win" name="win_no" value="{{(!empty(old('win_no'))) ? old('win_no') : ""}}">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="engine" class="form-label">Engine No</label>
                                            <input type="text" class="form-control" id="engine" name="engine_no" value="{{(!empty(old('engine_no'))) ? old('engine_no') : ""}}">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="finance" class="form-label">Finance</label>
{{--                                            <input type="text" class="form-control" id="finance" name="finance" value="{{(!empty(old('finance'))) ? old('finance') : ""}}">--}}
                                            <input list="finance" name="finance" class="form-control" />
                                            <datalist id="finance">
                                                <option>Toyota</option>
                                            </datalist>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="category" class="form-label">Category</label>
                                            <select onchange="waqasfun(this)" name="category" class="form-select" data-choices="" data-choices-sorting="true" >
                                                <option hidden value="">
                                                    Select Category
                                                </option>
                                                <option>Rental</option>
                                                <option>RTO</option>
                                                <option>Uber</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6" id="driverWa" style="display:none;">
                                        <div>
                                            <label for="category" class="form-label">Driver</label>
                                            <select id="inputState" class="form-select" data-choices=""
                                                    data-choices-sorting="true" name="driver">
                                                <option hidden value="">
                                                   Select Driver
                                                </option>
                                                @if(!empty($all_drivers))
                                                    @foreach($all_drivers as $drivers)
                                                        <option>{{$drivers->name}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="purchaseDate" class="form-label">Purchase Date</label>
                                            <input type="date" value="{{(!empty(old('purchase_date'))) ? old('purchase_date') : date('Y-m-d')}}" name="purchase_date" class="form-control" id="purchaseDate">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <!-- end col -->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="purchasePrice" class="form-label">Purchase Price</label>
                                            <input type="number" class="form-control" id="purchasePrice" name="purchase_price" value="{{(!empty(old('purchase_price'))) ? old('purchase_price') : ""}}">
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="monthlyRepayment" class="form-label">Monthly Repayment</label>
                                            <input type="number" class="form-control" id="monthlyRepayment" name="monthly_repayment" value="{{(!empty(old('monthly_repayment'))) ? old('monthly_repayment') : ""}}">
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="leaderFinance" class="form-label">Leader Finance</label>
                                            <input type="text" class="form-control" id="leaderFinance" name="leader_finance" value="{{(!empty(old('leader_finance'))) ? old('leader_finance') : ""}}">
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="transmission" class="form-label">Transmission</label>
                                            <select id="transmission" class="form-select" data-choices="" data-choices-sorting="true" name="transmission">
                                                <option hidden value="">
                                                    Transmission Type
                                                </option>
                                                <option>Automatic</option>
                                                <option>Manual</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="leaderFinance" class="form-label">Maintenance Date</label>
                                            <input type="date" class="form-control" name="maintenance_date" value="{{(!empty(old('maintenance_date'))) ? old('maintenance_date') : ""}}">
                                        </div>
                                    </div>
{{--                                    <div class="col-xxl-3 col-md-6">--}}
{{--                                        <div>--}}
{{--                                            <label for="leaderFinance" class="form-label">Due Maintenance Date</label>--}}
{{--                                            <input type="date" class="form-control" name="due_maintenance_date" value="{{(!empty(old('due_maintenance_date'))) ? old('due_maintenance_date') : ""}}">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="leaderFinance" class="form-label">Start Insurance Date</label>
                                            <input type="date" class="form-control" name="start_insurance_date" value="{{(!empty(old('start_insurance_date'))) ? old('start_insurance_date') : ""}}">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="leaderFinance" class="form-label">End Insurance  Date</label>
                                            <input type="date" class="form-control" name="end_insurance_date" value="{{(!empty(old('end_insurance_date'))) ? old('end_insurance_date') : ""}}">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="leaderFinance" class="form-label">Upload Insurance Doc</label>
                                            <input type="file" class="form-control" name="insurance_doc" value="{{(!empty(old('insurance_doc'))) ? old('insurance_doc') : ""}}">
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!--end row-->
                            </div>
                            <!-- Button -->
                            <button type="submit" class="btn btn-primary mt-3">Add Vehicle</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        function waqasfun(a){
            let x = a.value;
            if(x == 'Uber'){
                document.getElementById('driverWa').style.display = 'block'
            }else{
                document.getElementById('driverWa').style.display = 'none'
            }
        }
    </script>

@include('admin.footer')
