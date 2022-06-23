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
                                        <h5 class="card-title mb-0">Additional Options</h5>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <form action="{{url('/admin/addition_options/add')}}" method="post">
                            @csrf
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4>BASIC COVER INCLUDED</h4>
                                    <p>If you have an accident or
                                        damage
                                        the
                                        vehicle, your excess
                                        liability
                                        is
                                        $4,818.</p>
                                </div>
                                <div>
                                    <a href="#" onclick="chn('do')"><i class=" las la-edit"></i></a>
                                    $ {{(!empty($additional_options[0]['basic_cover'])) ? $additional_options[0]['basic_cover'] : 0}}
{{--                                    <input type="number" id="quantity" name="quantity" min="1" max="5">--}}
                                    <input type="number" style="display:none;margin-top:4px;" id="do" step="any" name="basic_cover" value="{{(!empty($additional_options[0]['basic_cover'])) ? $additional_options[0]['basic_cover'] : 0}}">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">

                                <div>
                                    <h4>Silver Cover</h4>
                                    <p>This allows you to reduce the
                                        excess liability to $1800.
                                        Includes Roadside Assistance
                                    </p>
                                </div>
                                <div>
                                    <a href="#" onclick="chn('do2')"><i class=" las la-edit"></i></a>
                                    $ {{(!empty($additional_options[0]['silver_cover'])) ? $additional_options[0]['silver_cover'] : 0}}
{{--                                    <input type="checkbox">--}}
                                    <input type="number" style="display:none;margin-top:4px;" step="any" id="do2" name="silver_cover" value="{{(!empty($additional_options[0]['silver_cover'])) ? $additional_options[0]['silver_cover'] : 0}}">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">

                                <div>
                                    <h4>Gold Cover</h4>
                                    <p>This allows you to reduce the
                                        excess liability to $0.
                                        Includes Roadside Assistance
                                    </p>
                                </div>
                                <div>
                                    <a href="#" onclick="chn('do3')"><i class=" las la-edit"></i></a>
                                    $ {{(!empty($additional_options[0]['gold_cover'])) ? $additional_options[0]['gold_cover'] : 0}}
{{--                                    <input type="checkbox">--}}
                                    <input type="number" step="any" style="display:none;margin-top:4px;" id="do3" name="gold_cover" value="{{(!empty($additional_options[0]['gold_cover'])) ? $additional_options[0]['gold_cover'] : 0}}">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">

                                <div>
                                    <h4>Drivers Under 25 and Over 75
                                        Years</h4>
                                    <p>You MUST select this option
                                        if you are under 25 or Over
                                        75 years Old. Excess For
                                        Drivers <br> under 25 and Over 75
                                        is $5000.</p>
                                </div>

                                <div>
                                    <a href="#" onclick="chn('do4')"><i class=" las la-edit"></i></a>
                                    $ {{(!empty($additional_options[0]['driver_for'])) ? $additional_options[0]['driver_for'] : 0}}
{{--                                    <input type="checkbox">--}}
                                    <input type="number" step="any" style="display:none;margin-top:4px;" id="do4" name="driver_for" value="{{(!empty($additional_options[0]['driver_for'])) ? $additional_options[0]['driver_for'] : 0}}">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4>Additional Driver</h4>
                                    <p>Use this option if there is
                                        more then 1 Driver.</p>
                                </div>
                                <div>
                                    <a href="#" onclick="chn('do5')"><i class=" las la-edit"></i></a>
                                    $ {{(!empty($additional_options[0]['additional_driver'])) ? $additional_options[0]['additional_driver'] : 0}}
{{--                                    <input type="number" id="quantity" name="quantity" min="1" max="5">--}}
                                    <input type="number" style="display:none;margin-top:4px;" id="do5"  step="any" name="additional_driver" value="{{(!empty($additional_options[0]['additional_driver'])) ? $additional_options[0]['additional_driver'] : 0}}">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">

                                <div>
                                    <h4>Child Seat</h4>
                                    <p>For Children between 0-4
                                        Years
                                    </p>
                                </div>
                                <div>
                                    <a href="#" onclick="chn('do6')"><i class=" las la-edit"></i></a>
                                    $ {{(!empty($additional_options[0]['child_seat'])) ? $additional_options[0]['child_seat'] : 0}}
{{--                                    <input type="number" id="quantity" name="quantity" min="1" max="5">--}}
                                    <input type="text" style="display:none;margin-top:4px;" id="do6" step="any" name="child_seat" value="{{(!empty($additional_options[0]['child_seat'])) ? $additional_options[0]['child_seat'] : 0}}">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">

                                <div>
                                    <h4>Booster Seat</h4>
                                    <p>For Children between 4-8
                                        Years</p>
                                </div>
                                <div>
                                    <a href="#" onclick="chn('do7')"><i class=" las la-edit"></i></a>
                                    $ {{(!empty($additional_options[0]['boost_seat'])) ? $additional_options[0]['boost_seat'] : 0}}
{{--                                    <input type="number" id="quantity" name="quantity" min="1" max="5">--}}
                                    <input type="text" style="display:none;margin-top:4px;" id="do7" step="any" name="boost_seat" value="{{(!empty($additional_options[0]['boost_seat'])) ? $additional_options[0]['boost_seat'] : 0}}">
                                </div>
                            </div>

                            <input type="submit" value="update setting" class="btn btn-primary">

                            <div id="add_to_me">
                            </div>
{{--                            <a onclick="addCode('add_to_me')" class="btn btn-dark mt-3 mb-4">Add More</a>--}}
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

<script>
    function addCode(e) {
        document.getElementById(e).innerHTML +=
            ` <div class="mt-4" id="go">
                   <div class="d-flex" style="justify-content: space-between">
                   <div>

                   </div>
               <div>

                </div>
               </div>
                   <input type="text" class="form-control mt-4" placeholder="Enter main heading">
                   <input type="text" class="form-control mt-4" placeholder="Enter item description">
                   <input type="text" class="form-control mt-4" placeholder="Enter item price">

                   <button class="btn btn-primary mt-4 mb-4" style="float:right;">Save</button>

                   </div>`;
    }
    function del(){
        let gone = document.getElementById('go');
        gone.parentNode.removeChild(gone);

    }

    function chn(e){
        document.getElementById(e).style.display = 'block';
    }

</script>


@include('admin.footer')
