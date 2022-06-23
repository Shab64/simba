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
                                            <h5 class="card-title mb-0">My Profile</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div>
                                           <button class="btn btn-primary">Edit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                               <div class="row " style="align-items: center">
                                   <div class="col-md-3">
                                       <div class="avatar-lg">
                                           <img src="{{url('assets')}}/images/users/avatar-1.jpg" alt="user-img" class="img-thumbnail rounded-circle">
                                       </div>
                                   </div>
                                   <div class="col-md-3">
                                       <label for="" class="label-form">Name</label>
                                       <p>Ken will</p>
                                   </div>
                                   <div class="col-md-3">
                                       <label for="" class="label-form">Email</label>
                                       <p>ken@gmail.com</p>
                                   </div>
                                   <div class="col-md-3">
                                       <label for="" class="label-form">Phone</label>
                                       <p>+32 4343443434</p>
                                   </div>
                                   <div class="col-md-3 mt-4">
                                       <label for="" class="label-form">Address</label>
                                       <p>lorem</p>
                                   </div>
                                   <div class="col-md-3 mt-4">
                                       <label for="" class="label-form">Designation</label>
                                       <p>Branch Manager</p>
                                   </div>
                                   <div class="col-md-3 mt-4">
                                       <label for="" class="label-form">Branch</label>
                                       <p>Sydney</p>
                                   </div>
                               </div>

                            </div>
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
