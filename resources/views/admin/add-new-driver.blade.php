@include('admin.header')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- Container Fluid Reservation section content-->
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{url('admin/add_driver')}}" method="post">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Add New Driver</h5>
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
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="regNumber" class="form-label mt-3">Select Branch</label>
                                                <select name="branch" class="form-select" style="margin-bottom: 30px;">
                                                    <option>Sydney</option>
                                                    <option>Adelaide</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="regNumber" class="form-label">Name</label>
                                                <input type="text" value="{{old('name')}}" class="form-control" name="name">


                                            </div>
                                            <div class="col-sm-6">
                                                <label for="regNumber" class="form-label">Email</label>
                                                <input type="email" value="{{old('email')}}" class="form-control" name="email">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="regNumber" class="form-label mt-3">Phone</label>
                                                <input type="text" class="form-control" name="phone" value="{{old('phone')}}">

                                            </div>


                                            <div class="col-sm-6">

                                                <label for="regNumber" class="form-label mt-3">Driving License No</label>
                                                <input type="text" class="form-control" value="{{old('d_license_no')}}" name="d_license_no">

                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!-- Button -->
                                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('admin.footer')
