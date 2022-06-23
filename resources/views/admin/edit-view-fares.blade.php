@include('admin.header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/tom-select@1.7.5/dist/css/tom-select.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/tom-select@1.7.5/dist/js/tom-select.complete.min.js"></script>
<style>
.crd-bx-shdow {
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    margin-top: 2rem;
}

.switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #333;
    -webkit-transition: .4s;
    transition: .4s;
}

.slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
}

input:checked+.slider {
    background-color: #ff3100;
}

input:focus+.slider {
    box-shadow: 0 0 1px #ff3100;
}

input:checked+.slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
}

.remove-item-btn:hover {
    cursor: pointer;
}

/* Rounded sliders */
.slider.round {
    border-radius: 34px;
}

.slider.round:before {
    border-radius: 50%;
}

.card-cars {
    /*box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;*/
    cursor: pointer;
    transition: .8s;
    transition: transform .8s;
    background-color: aliceblue;
    margin-top: 55px;
    text-align: center;
}

.card-cars:hover {
    /* transform: scale(1.03); */
    transform: translateY(-5px);
    transition: .8s;


}

.border-style {
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    transform: translateY(0px);
    transition: 0.4s;
}

.border-style:hover {
    transform: translateY(-10px);
    transition: 0.4s;

}

.card-cars:hover .car {
    box-shadow: 0px 0px 25px #e7e7e7;
}



.license-card {
    height: 70vh;
    overflow-y: scroll;
    box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;

}

.img-figure-tag {
    /*border-radius: 25px;*/
    /*box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;*/

}

.ribbon-content label {
    color: black;
}

.ribbon-box .card-body {
    margin-top: 12px;
}

.img-hover {
    transition: transform .8s;
}

.img-hover:hover {
    transform: scale(1.06);
}

.header-aggrement-main-div {
    align-items: center;
}

.agrement-header {
    text-align: end;

}

.car {
    width: 400px;
    margin: 0px auto;
    border-radius: 19px;
    background: aliceblue;
    position: relative;
    bottom: 30px;
    text-align: center;
    box-shadow: 0px 0px 15px #e7e7e7;
}

.car img {
    text-align: center;
}

.card-cars .card-title {
    font-size: 23px !important;
    text-align: center;
    font-weight: 700 !important;
}

.card-cars .card-body {
    padding-left: 0;
    padding-right: 0;
    padding-bottom: 0;
}

.card-cars button {
    width: 100%;
    border-radius: 0;
}

@media (max-width:767px) {
    .car {
        width: 100%;
        margin: 0px auto;
        border-radius: 19px;
        background: aliceblue;
        position: relative;
        bottom: 30px;
        text-align: center;
        box-shadow: 0px 0px 15px #e7e7e7;
    }
}

.t-unit-btn {
    position: absolute;
    top: 30px;
    right: 15px;
}

.t-unit-parent {
    position: relative;
}

.font-times-style {
    font-size: 22px;
}

.icon-test-div {
    align-self: center;
}
</style>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="card-title">{{(!empty($car_id[0]['name'])) ? $car_id[0]['name'] : $car_id['name']}}</h4>
                                </div>
                                <div style="width:20%;">
                                    <form action="{{route('admin.viki_price.fares_table.getcar')}}" method="post"
                                          id="priceForm">
                                        @csrf
                                        <select class="form-control" onchange="get_car()" id="getCar"
                                                name="getcarDetials">

                                            @if(!empty($all_Vikicars))
                                                @foreach($all_Vikicars as $v)
                                                    <option {{(!empty($car_id[0]['id']) and ($car_id[0]['id'] ===  $v->id)) ? 'selected' : ""}} value="{{$v->id}}">{{$v->name}} or similar</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="card card-cars">
                                    <div class="car">
                                        <img class="rounded-start img-fluid" src="{{url('storage/app/public/carlist/'.(!empty($car_id[0]['image']) ? $car_id[0]['image'] : $car_id['image']))}}"
                                            alt="Card image">
                                    </div>
                                </div>
                                <!-- Tabs Card Start -->
                                <div class="card">
                                    <div class="card-body checkout-tab">

                                            <div class="step-arrow-nav mt-n3 mx-n3 mb-3">
                                                <ul class="nav nav-pills nav-justified custom-nav" role="tablist">

                                                    <!-- Dates Tab Start -->
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link fs-15 p-3 active"
                                                            id="pills-bill-dates-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-bill-dates" type="button" role="tab"
                                                            aria-controls="pills-bill-dates" aria-selected="true"
                                                            data-position="0"><i
                                                                class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i>
                                                            Daily Fares</button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-content">
                                                <!-- dates tab pane start -->
                                                <div class="tab-pane fade show active" id="pills-bill-dates"
                                                    role="tabpanel" aria-labelledby="pills-bill-dates-tab">
                                                    <form action="{{route('admin.viki_price.fares_table.update_daily_price')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" value="{{(!empty($car_id[0]['id'])) ? $car_id[0]['id'] : $car_id['id']}}" name="viki_car_id">
                                                        <input type="hidden" value="{{(!empty($car_id[0]['daily_start_price'])) ? $car_id[0]['daily_start_price'] : $car_id['daily_start_price']}}" name="daily_present_price">
                                                    <div class="card p-3 crd-bx-shdow">
                                                        <div class="row">
                                                            <div class="d-flex">
                                                                <h4>Days</h4>
                                                            </div>
                                                            <div class="col-md-6 mb-2">
                                                                <label for="" class="form-label">From</label>
                                                                <input type="number" class="form-control" name="from">
                                                            </div>
                                                            <div class="col-md-6 mb-2">
                                                                <label for="" class="form-label">To</label>
                                                                <input type="number" class="form-control" name="to">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card p-3 crd-bx-shdow">
                                                        <div class="d-flex">
                                                            <h4>Daily Prices</h4>
                                                        </div>
                                                        <div class="card-body d-flex justify-content-between "
                                                            style="place-items: center;">
                                                            <div style="display:inline-block;">
                                                                <h6>Daily</h6>
                                                            </div>
                                                            <div style="display:inline-block;">
                                                                <input type="number" class="form-control" placeholder="$" name="daily_update_price">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex ">
                                                        <button class="btn btn-primary" type="submit">
                                                            Insert
                                                        </button>
                                                    </div>
                                                    </form>

                                                    <div class="card mt-4 p-3 crd-bx-shdow">
                                                        <div class="card-header d-flex justify-content-between">
                                                            <h4 class="card-title">Fares</h4>
{{--                                                            <button class="btn btn-primary">Update Fares</button>--}}
                                                        </div>
                                                        <!-- <div> -->
                                                        <div class="card-body">
                                                            <div class="table-responsive table-card mb-1">
                                                                <table class="table align-middle" id="taxRateTable">
                                                                    <thead class="table-light text-muted">
                                                                        <tr>
                                                                            <th>Fares For Days</th>
                                                                            <th>Daily</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="list form-check-all ">
                                                                    @for($d=1;$d<=30;$d++)
                                                                        @if(!empty($car_id['daily_price']) and ($d === $car_id['daily_price'][0]['from'] or $d <= $car_id['daily_price'][0]['to']))
                                                                            <?php $price = (!empty($car_id['daily_price'][0]['daily_update_price'])) ? $car_id['daily_price'][0]['daily_update_price']*$d : 0;?>
                                                                            <tr>
                                                                            <td><a href="#">{{$d}}</a></td>
                                                                            <td style="text-align: -webkit-center;">
                                                                                <input type="number" value="{{$price}}" class="form-control" style="width:25%;">
                                                                            </td>
                                                                            </tr>
                                                                            @else
                                                                            <?php $price2 = (!empty($car_id[0]['daily_start_price'])) ? $car_id[0]['daily_start_price']*$d : $car_id['daily_start_price']*$d;?>
                                                                            <tr>
                                                                                <td><a href="#">{{$d}}</a></td>
                                                                                <td style="text-align: -webkit-center;">
                                                                                    <input type="number" value="{{$price2}}" class="form-control" style="width:25%;">
                                                                                </td>
                                                                            </tr>
                                                                        @endif
                                                                    @endfor
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end tab content -->
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- Tabs Card End -->

                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
        </div>
    </div>
</div>

<script>
    // Top Select Start
new TomSelect("#selectCar", {
    create: false,
    sortField: {
        field: "text",
        direction: "asc"
    }
});
// Top Select End


function get_car(){
    $("#priceForm").submit();
}
</script>

@include('admin.footer')
<!-- las la-angle-double-up -->
<!-- las la-angle-double-down -->
