@include('admin.header')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- Container Fluid Reservation section content-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom-dashed">

                                <div class="row g-4 align-items-center">
                                    <div class="col-sm">
                                        <div>
                                            <h5 class="card-title mb-0">Add User For Account</h5>
                                        </div>
                                    </div>
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
                            </div>
                            <form action="{{url('admin/add_user')}}" method="post">
                                @csrf
                            <div class="card-body">
                             <div class="row">
                                 <div class="col-md-12">
                                     <label for="regNumber" class="form-label">Select Branch</label>
                                     <select name="branch" id="" class="form-control form-select" style="margin-bottom: 30px;">
                                         <option>Adelaide</option>
                                         <option>Sydney</option>
                                     </select>
                                 </div>
                                 <div class="col-md-6">
                                     <div>
                                         <label for="regNumber" class="form-label">Name</label>
                                         <input type="text" class="form-control" id="regNumber" name="name">
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div>
                                         <label for="regNumber" class="form-label">Email</label>
                                         <input type="email" name="email" class="form-control" id="regNumber">
                                     </div>
                                 </div>
                                 <div class="col-md-6 mt-4">
                                     <div>
                                         <label for="regNumber" class="form-label">Password</label>
                                         <input type="text" name="password" class="form-control" id="regNumber">
                                     </div>
                                 </div>
                                 <div class="col-md-6 mt-4">
                                     <div>
                                         <label for="regNumber" class="form-label">Select User Type</label>
                                         <select name="type" id="" class="form-control">
                                             <option>Branch Manager</option>
                                             <option>Employee</option>
                                         </select>
                                     </div>
                                 </div>

                             </div>
                                <button type="submit" class="btn btn-primary mt-5">Submit</button>
                            </div>
                            </form>
                        </div>

                    </div>
                    <!--end col-->
                </div>
                <!-- row end -->
            </div>
        </div>
    </div>


    <!-- End Page-content -->
@include('admin.footer')
