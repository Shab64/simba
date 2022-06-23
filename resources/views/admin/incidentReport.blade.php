@include('admin.header')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- Container Fluid Reservation section content-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class=" card-header ">
                            <h4>Incident Report</h4>
                        </div>
                        <div class="card-body ">
                            <form action="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="report">REPORTED BY:</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="dateReport">DATE OF REPORT:</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mt-4 p-2"
                                    style="background-color:#283891; color:white;">
                                    <div>
                                        <h4 style="color: white">INCIDENT INFORMATION</h4>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <label for="incidentType">INCIDENT TYPE:</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="dateReport">DATE OF INCIDENT:</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-4">
                                        <label for="city">CITY:</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="state">STATE:</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="postCode">POSTCODE:</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <label for="specificarea">SPECIFIC AREA OF LOCATION (if applicable):</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <label for="time">TIME OF ACCIDENT: </label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="rego">REGO: </label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <label for="incident">INCIDENT DESCRIPTION – DIAGRAM </label>
                                        <textarea name="incident" id="incident" cols="30" rows="10"
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <label for="nature">UPLOAD INCIDENT OF CAR IMAGES:
                                            </label>
                                            <input type="file" class="form-control" multiple>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <label for="nature">NATURE OF ACTIVITY:
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="role-li">NAME / ROLE / CONTACT OF PARTIES INVOLVED / LICENCE / ADDRESS /
                                        DOB :
                                    </label>
                                    <ol style="margin-left:2rem;">
                                        <li class="mt-1"></li>
                                        <li class="mt-1"></li>
                                    </ol>
                                </div>
                                <div class="row mt-2">
                                    <label for="role-li">NAME / ROLE / CONTACT OF WITNESSES:
                                    </label>
                                    <ol style="margin-left:2rem;">
                                        <li class="mt-1"></li>
                                        <li class="mt-1"></li>
                                    </ol>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <label for="policeReport">POLICE REPORT NUMBER</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <h4> FOLLOW-UP ACTION </h4>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label for="excess">EXCESS:
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label for="claimNo">CLAIM NUMBER:
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label for="insurer">INSURER AND THIRD PART INSURER
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label for="d-name">Driver Name:
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label for="d-name">Driver Signature:
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mt-4">
                                    <div>
                                        <p>SUPERVISOR
                                            NAME: <span>_____________</span></p>
                                    </div>
                                    <div>
                                        <p>SUPERVISOR
                                            SIGNATURE: <span>_____________</span></p>
                                    </div>
                                    <div>
                                        <p>DATE: <span>_____________</span></p>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary">SUBMIT</button>
                                </div>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@include('admin.footer')
