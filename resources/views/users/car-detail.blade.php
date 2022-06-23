@include('users.header')

<style>
    .jqyc-range-choosen-between{
        background-color: #283891!important;
    }
    .jqyc {
    text-align: center!important;
    }

    .jqyc-year-chooser .jqyc-year{
        font-weight: bold;
        color:black;
    }
    .jqyc .btn-primary{
        background-color: black;
        border-color:black;
    }
    .jqyc-not-empty-td:hover{
        background-color:black!important;
    }
</style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="{{url('assets/users')}}/css/jquery.bootstrap.year.calendar.css" />





<section class="product-listing page-section-ptb">
  <div class="container">
    <div class="row">

      <div class="col-lg-12 col-md-8">

        <div class="car-grid">
           <div class="row">
            <div class="col-lg-4 col-md-12">
              <div class="car-item gray-bg text-center">
               <div class="car-image">
                 <img class="img-fluid" src="{{url('storage/app/public/carlist/'.$car_details[0]['image'])}}" alt="">
               </div>
              </div>
             </div>
              <div class="col-lg-8 col-md-12">
                <div class="car-details">
                <div class="car-title">
                 <a href="#">{{$car_details[0]['name']}}</a>
                 <p>
                     {{$car_details[0]['details']}}
                 </p>
                 <p>Starting From</p>
                  </div>
                  <div class="price">
                       <span class="new-price">${{$car_details[0]['daily_start_price']}} </span>

                     </div>
                   <div class="car-list">
                     <ul class="list-inline">
{{--                       <li><i class="fa fa-registered"></i> 2016</li>--}}
{{--                       <li><i class="fa fa-cog"></i> Manual </li>--}}
{{--                       <li><i class="fa fa-shopping-cart"></i> Compact</li>--}}
                     </ul>
                   </div>
                  </div>
                </div>
               </div>
             </div>

          </div>

          <div class="col-md-12 mt-5">
          <div class="container">
            <div class="calendar"></div>
          </div>
          </div>

        </div>
      </div>
</section>




 @include('users.footer')
