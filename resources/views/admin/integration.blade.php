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
                                            <h5 class="card-title mb-0">Integration</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <button class="btn btn-primary " onclick="inte.style.display = 'block'">Payment</button>
                                        <button class="btn btn-primary " onclick="xero.style.display = 'block'">Xero</button>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                 <div id="inte" style="display: none">
                                     <div class="row">
                                         <div class="col-md-6">
                                             <label for="">Enter Id</label>
                                             <input type="text" class="form-control">
                                         </div>
                                         <div class="col-md-6">
                                             <label for="">Enter Key</label>
                                             <input type="text" class="form-control">
                                         </div>
                                     </div>
                                     <button class="btn btn-primary mt-4">Submit</button>
                                 </div>

                                 <div id="xero" style="display: none">
                                     <div class="row mt-3">
                                         <div class="col-md-6">
                                             <label for="">Enter Id</label>
                                             <input type="text" class="form-control">
                                         </div>
                                         <div class="col-md-6">
                                             <label for="">Enter Key</label>
                                             <input type="text" class="form-control">
                                         </div>
                                     </div>
                                     <button class="btn btn-primary mt-4">Submit</button>
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

    <script>
        function addCode(e) {
            document.getElementById(e).innerHTML +=
                ` <div class="mt-4" id="go">
                   <div class="d-flex" style="justify-content: space-between">
                   <div>
                   <h6>Add Additional Options</h6>
                   </div>
               <div>
             <button class="btn btn-dark m-b-20" onclick="go.style.display = 'none';"> <i style="color:white;" class="las la-close"></i></button>
                </div>
               </div>
                   <input type="text" class="form-control mt-4" placeholder="Enter main heading">
                   <input type="text" class="form-control mt-4" placeholder="Enter item description">
                   <input type="text" class="form-control mt-4" placeholder="Enter item price">

                   </div>`;
        }
    </script>

    <!-- End Page-content -->
@include('admin.footer')
