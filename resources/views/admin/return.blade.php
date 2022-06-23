@include('admin.header')

<!-- Filepond css -->
<link href="https://www.codehim.com/demo/jquery-image-uploader-preview-and-delete/dist/image-uploader.min.css" rel="stylesheet">
<script src="https://www.codehim.com/demo/jquery-image-uploader-preview-and-delete/dist/image-uploader.min.js"></script>

<style>
    .card-cars {
        box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;
        cursor: pointer;
        transition: .8s;
        transition: transform .8s;
    }

    .card-cars:hover {
        /* transform: scale(1.03); */
        transform: translateY(-5px);
        transition: .8s;
    }

    .license-card {
        height: 70vh;
        overflow-y: scroll;
        box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;
    }



    .img-hover {
        transition: transform .8s;
    }



    .img-hover:hover {
        transform: scale(1.06);
    }
    .ribbon-content label{
        color:black;
    }
    .ribbon-box .card-body{
        margin-top: 12px;
    }


    /*file uploader css*/

    .file-upload {
        background-color: #ffffff;
        width: 100%;
        margin: 0 auto;
        padding: 20px;
    }

    .file-upload-btn {
        width: 100%;
        margin: 0;
        color: #fff;
        background: #5ea3cb;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #5ea3cb;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .file-upload-btn:hover {
        background: #5ea3cb;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .file-upload-btn:active {
        border: 0;
        transition: all .2s ease;
    }

    .file-upload-content {
        display: none;
        text-align: center;
    }

    .file-upload-input {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        outline: none;
        opacity: 0;
        cursor: pointer;
    }

    .image-upload-wrap {
        margin-top: 20px;
        border: 4px dashed #5ea3cb;
        position: relative;
    }

    .image-dropping,
    .image-upload-wrap:hover {
        background-color:#5ea3cb;
        border: 4px dashed #ffffff;
    }

    .image-title-wrap {
        padding: 0 15px 15px 15px;
        color: #222;
    }

    .drag-text {
        text-align: center;
    }

    .drag-text h3 {
        font-weight: 100;
        text-transform: uppercase;
        color: black;
        padding: 60px 0;
    }

    .file-upload-image {
        max-height: 200px;
        max-width: 200px;
        margin: auto;
        padding: 20px;
    }

    .remove-image {
        width: 200px;
        margin: 0;
        color: #fff;
        background: #cd4535;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #b02818;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .remove-image:hover {
        background: #c13b2a;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .remove-image:active {
        border: 0;
        transition: all .2s ease;
    }
/*======================*/
/*    File Upload*/
/*======================*/
    .form-file{
        width: 100%!important;
    }
/*----------------------- */
</style>

<script>
    // function readURL(input) {
    //     if (input.files && input.files[0]) {
    //
    //         var reader = new FileReader();
    //
    //         reader.onload = function(e) {
    //             $('.image-upload-wrap').hide();
    //
    //             $('.file-upload-image').attr('src', e.target.result);
    //             $('.file-upload-content').show();
    //
    //             $('.image-title').html(input.files[0].name);
    //         };
    //
    //         reader.readAsDataURL(input.files[0]);
    //
    //     } else {
    //         removeUpload();
    //     }
    // }
    //
    // function removeUpload() {
    //     $('.file-upload-input').replaceWith($('.file-upload-input').clone());
    //     $('.file-upload-content').hide();
    //     $('.image-upload-wrap').show();
    // }
    // $('.image-upload-wrap').bind('dragover', function () {
    //     $('.image-upload-wrap').addClass('image-dropping');
    // });
    // $('.image-upload-wrap').bind('dragleave', function () {
    //     $('.image-upload-wrap').removeClass('image-dropping');
    // });

    /*
We want to preview images, so we need to register the Image Preview plugin
*/

</script>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box  align-items-center justify-content-between">
                        <div class="step-arrow-nav">

                            <ul class="nav nav-pills custom-nav nav-justified" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-experience-tab" data-bs-toggle="pill" data-bs-target="#pills-experience" type="button" role="tab" aria-controls="pills-experience" aria-selected="false" data-position="2">Summary</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="steparrow-gen-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-gen-info" type="button" role="tab" aria-controls="steparrow-gen-info" aria-selected="true" data-position="0">Return Inspection</button>
                                </li>
                                <!--                                <li class="nav-item" role="presentation">-->
                                <!--                                    <button class="nav-link " id="steparrow-gen-info-tab2" data-bs-toggle="pill" data-bs-target="#steparrow-gen-info2" type="button" role="tab" aria-controls="steparrow-gen-info2" aria-selected="true" data-position="0">Fine</button>-->
                                <!--                                </li>-->

                            </ul>
                        </div>
                    </div>
                </div>

                <!-- end tab content -->
            </div>

            <div class="tab-content">
                <div class="tab-pane fade active show" id="pills-experience" role="tabpanel">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card ribbon-box border shadow-none mb-lg-0">
                            <div class="card-body">
                                <div class="ribbon ribbon-primary round-shape">Customer Info</div>
                                <div class="ribbon-content mt-4 text-muted">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="name">Customer Name: </label>
                                            <p>{{(!empty($all_reservations[0]['customer_details'][0]['name'])) ? $all_reservations[0]['customer_details'][0]['name'] : "" }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="email">Customer Email: </label>
                                            <p>{{(!empty($all_reservations[0]['customer_details'][0]['email'])) ? $all_reservations[0]['customer_details'][0]['email'] : "" }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="invoice">Phone No: </label>
                                            <p>{{(!empty($all_reservations[0]['customer_details'][0]['phone'])) ? $all_reservations[0]['customer_details'][0]['phone'] : "" }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="b-name">Country: </label>
                                            <p>{{(!empty($all_reservations[0]['customer_details'][0]['country'])) ? $all_reservations[0]['customer_details'][0]['country'] : "" }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name">City: </label>
                                            <p>{{(!empty($all_reservations[0]['customer_details'][0]['city'])) ? $all_reservations[0]['customer_details'][0]['city'] : "" }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name">State: </label>
                                            <p>{{(!empty($all_reservations[0]['customer_details'][0]['state'])) ? $all_reservations[0]['customer_details'][0]['state'] : "" }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name">Zip: </label>
                                            <p>{{(!empty($all_reservations[0]['customer_details'][0]['zip'])) ? $all_reservations[0]['customer_details'][0]['zip'] : "" }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name">Street: </label>
                                            <p>{{(!empty($all_reservations[0]['customer_details'][0]['street'])) ? $all_reservations[0]['customer_details'][0]['street'] : "" }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name">Driving License #: </label>
                                            <p>{{(!empty($all_reservations[0]['customer_details'][0]['d_license_no'])) ? $all_reservations[0]['customer_details'][0]['d_license_no'] : "" }}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ribbon-box border shadow-none mb-lg-0">
                            <div class="card-body">
                                <div class="ribbon ribbon-primary round-shape">Booking Info</div>


                                <div class="ribbon-content mt-4 text-muted">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="name">Pickup Date: </label>
                                            <p>{{(!empty($all_reservations[0]['p_date'])) ? $all_reservations[0]['p_date'] : "" }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="email">Pickup Location: </label>
                                            <p>{{(!empty($all_reservations[0]['pickup_location'])) ? $all_reservations[0]['pickup_location'][0]['name'] : "" }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="invoice">Pickup Time: </label>
                                            <p>{{(!empty($all_reservations[0]['p_time'])) ? $all_reservations[0]['p_time'] : "" }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="b-name">Return Time: </label>
                                            <p>{{(!empty($all_reservations[0]['r_time'])) ? $all_reservations[0]['r_time'] : "" }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name">Return Location: </label>
                                            <p>{{(!empty($all_reservations[0]['return_location'])) ? $all_reservations[0]['return_location'][0]['name'] : "" }}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card ribbon-box border shadow-none mb-lg-0">
                            <div class="card-body">
                                <div class="ribbon ribbon-primary round-shape">Vehicle</div>
                                <div class="ribbon-content mt-4 text-muted">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="name">Vehicle Name: </label>
                                            <p>{{(!empty($all_reservations[0]['car_details'][0]['name'])) ? $all_reservations[0]['car_details'][0]['name'] : "" }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="email">Availability: </label>
                                            <p>{{(!empty($all_reservations[0]['car_details'][0]['available'])) ? $all_reservations[0]['car_details'][0]['available'] : "" }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="invoice">Starting Price: </label>
                                            <p>{{(!empty($all_reservations[0]['car_details'][0]['daily_start_price'])) ? '$'.$all_reservations[0]['car_details'][0]['daily_start_price'] : "" }}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ribbon-box border shadow-none mb-lg-0">
                            <div class="card-body">
                                <div class="ribbon ribbon-primary round-shape">Payment</div>
                                <div class="ribbon-content mt-4 text-muted">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="name">Payment Type: </label>
                                            <p>{{(!empty($all_reservations[0]['payment_method'])) ? $all_reservations[0]['payment_method'] : "" }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="email">Total Amount: </label>
                                            <p>{{(!empty($all_reservations[0]['total_amount'])) ? '$'.$all_reservations[0]['total_amount'] : "" }}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $images =  (!empty($all_reservations[0]['image'])) ? json_decode($all_reservations[0]['image'],true) : "";?>
                        <div class="card ribbon-box border shadow-none mb-lg-0">
                            <div class="card-body">
                                <div class="ribbon ribbon-primary round-shape">Inspection</div>
                                <div class="ribbon-content mt-4 text-muted">
                                    <div class="row">
                                        @if (!empty($images))
                                            @foreach($images as $i)
                                        <figure class="col-md-3 img-figure-tag">
                                            <a href="javascript:void(0)" data-size="1600x950">
                                                <div><img src="{{url('storage/app/public/uploads/'.$i)}}" alt="Image description" class="img-fluid img-hover"></div>
                                            </a>
                                        </figure>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card ribbon-box border shadow-none mb-lg-0">
                            <div class="card-body">
                                <div class="ribbon ribbon-primary round-shape">Agreement</div>
                                <div class="ribbon-content mt-4 text-muted">
                                    <i class="fa fa-pencil"><a target="_blank" href="{{route('download_agreement',[$all_reservations[0]['id']])}}">Download</a></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="steparrow-gen-info" role="tabpanel" aria-labelledby="steparrow-gen-info-tab">

                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{url('admin/reservation/car_return/'.$all_reservations[0]['id'])}}" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Drop Car Images</h4>
                                </div>
                                <div class="card-body" style="padding: 2rem;">
                                    <!-- upload images start -->
                                    <div class="card">

                                        <div class="card-body">
                                            <!-- <p class="text-muted">Drop Your Car Images</p> -->
                                            <div class="col-lg-12">
                                                <div class="input-group mb-3">
                                                    <div class="form-file">
                                                        <div class="input-images" id="input-file-now"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end dropzon-preview -->
                                        </div>
                                        <!-- end card body -->
                                    </div>

                                    <textarea name="return_comments" id="checking-comments" cols="15" rows="5" class="form-control" placeholder="Add return note ..">{{(!empty($all_reservations[0]['return_comments'])) ? $all_reservations[0]['return_comments'] : ""}}</textarea>
                                    <div class="d-flex justify-content-end">
                                        <?php if($all_reservations[0]['end_rental'] !== 'yes'){ ?>
                                        <a href="#">
                                            <button type="submit" class="btn btn-primary mt-4" >End Rental</button>
                                        </a>
                                        <?php }else{ ?>
                                            <a href="#">
                                                <a href="javascript:void(0)" class="btn btn-danger mt-4">Rental Ended</a>
                                            </a>
                                            <?php } ?>
{{--                                        <a href="#"><button class="btn btn-primary mt-4"--}}
{{--                                                            style="margin-left:10px;" data-bs-toggle="modal"--}}
{{--                                                            data-bs-target="#staticBackdrop">View Invoice</button></a>--}}

                                        <!--                                        <a href="#"><button class="btn btn-primary mt-4" style="margin-left:10px;">Incident-->
                                        <!--                                                Report</button></a>-->

                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="steparrow-gen-info2" role="tabpanel" aria-labelledby="steparrow-gen-info-tab2">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Send Email For Fine To Customer</h4>
                                </div>
                                <div class="card-body" style="padding: 2rem;">
                                    <div>
                                        <div class="mb-3 position-relative">
                                            <input type="text" class="form-control email-compose-input" data-choices="" data-choices-limit="15" value="support@themesbrand.com" data-choices-removeitem="" placeholder="To">
                                            <div class="position-absolute top-0 end-0">
                                                <div class="d-flex">
                                                    <button class="btn btn-link text-reset fw-semibold px-2" type="button" data-bs-toggle="collapse" data-bs-target="#CcRecipientsCollapse" aria-expanded="false" aria-controls="CcRecipientsCollapse">
                                                        Cc
                                                    </button>
                                                    <button class="btn btn-link text-reset fw-semibold px-2" type="button" data-bs-toggle="collapse" data-bs-target="#BccRecipientsCollapse" aria-expanded="false" aria-controls="BccRecipientsCollapse">
                                                        Bcc
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collapse" id="CcRecipientsCollapse">
                                            <div class="mb-3">
                                                <label>Cc:</label>
                                                <input type="text" class="form-control" data-choices="" data-choices-limit="15" data-choices-removeitem="" placeholder="Cc recipients">
                                            </div>
                                        </div>
                                        <div class="collapse" id="BccRecipientsCollapse">
                                            <div class="mb-3">
                                                <label>Bcc:</label>
                                                <input type="text" class="form-control" data-choices="" data-choices-limit="15" data-choices-removeitem="" placeholder="Bcc recipients">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Subject">
                                        </div>
                                        <textarea name="" id="" cols="30" rows="10" class="form-control"placeholder="Mesaage">

                                        </textarea>

                                        <div class="mt-3">
                                            <input type="file" class="form-control" placeholder="Subject">
                                        </div>

                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <a href="#"><button class="btn btn-primary mt-4">Send</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Container Fluid Reservation section content-->

        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static"
         data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg card">
            <div class="modal-content">
                <div class="modal-header card-header">
                    <h3 class="modal-title" id="staticBackdropLabel">Invoice
                    </h3>
                    <button type="button" class="btn-close"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body card-body">
                    <div>
                        <div>
                            <div class="row invo-header">
                                <div class="col-sm-6">
                                    <div class="media">
                                        <div class="media-left">
                                            <!-- <a href="#"><img
                                                    class="media-object img-60"
                                                    src="../assets/images/logo/logo-1.png"
                                                    alt=""></a> -->
                                        </div>
                                        <div class="media-body m-l-20">
                                            <h4 class="media-heading f-w-600">
                                                Walter White</h4>
                                            <p>
                                                walterWhite@gmail.com<br>
                                                <span class="digits">Sydney
                                                                                            Branch</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End Info-->
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-md-end text-xs-center">
                                        <h3>Invoice #<span
                                                class="digits counter">0420</span>
                                        </h3>
                                        <p>
                                            Issued: May<span class="digits"> 27,
                                                                                        2022</span><br>
                                            Payment Due: June <span
                                                class="digits">27, 2021</span>
                                        </p>
                                    </div>
                                    <!-- End Title                                 -->
                                </div>
                            </div>
                        </div>
                        <!-- End InvoiceTop-->

                        <!-- End Invoice Mid-->
                        <div>
                            <div class="table-responsive invoice-table"
                                 id="table">
                                <table
                                    class="table table-bordered table-striped">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <h6 class="p-2 mb-0">Car
                                                Description</h6>
                                        </td>

                                        <td>
                                            <h6 class="p-2 mb-0">Rate
                                            </h6>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label>Car Name</label>
                                            <p class="m-0">Lorem Ipsum is
                                                simply dummy text of the
                                                printing and typesetting
                                                industry.</p>
                                        </td>


                                        <td>
                                            <p>
                                                AU$500.00</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Car Name</label>
                                            <p class="m-0">Lorem Ipsum is
                                                simply dummy text of the
                                                printing and typesetting
                                                industry.</p>
                                        </td>

                                        <td>
                                            <p>
                                                AU$500.00</p>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td>
                                            <h6 class="mb-0 p-2">Grand Total
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 p-2">AU$1,000.00
                                            </h6>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- End Table-->

                        </div>
                        <!-- End InvoiceBot-->
                    </div>
                </div>
                <div class="modal-footer card-footer">
                    <button type="button" class="btn btn-primary">Print</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                    <!--                    <button type="button" class="btn btn-primary">Send-->
                    <!--                        Email</button>-->
                </div>
            </div>
        </div>
    </div>





    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2>Are You Sure Want To End This Rental?</h2>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!--ckeditor js-->
    <script href="{{url('assets')}}/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
    <script>
        <?php if($all_reservations[0]['end_rental'] === 'yes'){ $rImages = json_decode($all_reservations[0]['return_images'],true); ?>
        let preloaded = [<?php foreach ($rImages as $rr=>$r) { ?>
            {id: '{{$rr}}', src: '{{url('storage/app/public/uploads/'.$r)}}'},
            <?php } ?>
        ];
        $('.input-images').imageUploader({
            preloaded,
            preloadedInputName:'return_images'
        });
        <?php } else{ ?>

        $('.input-images').imageUploader({
            label: 'Drag & Drop Car images here',
            preloadedInputName:'return_images'
        });
        <?php } ?>
    </script>
    @include('admin.footer')
