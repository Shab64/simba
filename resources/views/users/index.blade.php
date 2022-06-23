@include('users.header')


<div id="main-slider" class="carousel carousel-fade slide" data-ride="carousel">
       <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-bs-target="#main-slider" data-bs-slide-to="0" class=""></li>
          <li data-bs-target="#main-slider" data-bs-slide-to="1" class="active" aria-current="true"></li>
        </ol>
        <!-- Carousel inner -->
        <div class="carousel-inner">
          <!--/ Carousel item end -->
          <div class="carousel-item bg-overlay">
            <img class="img-fluid" src="{{url('assets/users')}}/images/slider/01.jpg" alt="slider">
            <div class="slider-content">
              <div class="container">
              <div class="row">
                <div class="col-md-12 text-center">
                 <div class="slider-1">
                    <span class="animated8">Make Appointment  </span>
                    <h1 class="animated7 text-white">We Provide Best VeHicles </h1>
                    <p class="text-white animated8">Simba Car hire Provide Best Service</p>
                    <a href="#form" class="button animated7">For Appointment</a>
                 </div>
                </div>
              </div>
            </div>
            </div>
          </div>
          <div class="carousel-item bg-overlay active">
           <img class="img-fluid" src="{{url('assets/users')}}/images/slider/17.jpg" alt="slider">
            <div class="slider-content">
             <div class="container">
              <div class="row">
                <div class="col-md-12 text-end">
                 <div class="slider-2">
                    <span class="animated7">we are best in australia</span>
                    <h1 class="animated2 text-white">Check Our Fleet</h1>
                    <a href="our-fleet.php" class="button animated6">Search</a>
                 </div>
                </div>
              </div>
            </div>
           </div>
          </div>
          <!--/ Carousel item end -->
        </div>
      <!-- Controls -->
        <a class="left carousel-control" href="#main-slider" data-bs-slide="prev">
          <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slider" data-bs-slide="next">
          <span><i class="fa fa-angle-right"></i></span>
        </a>
    </div>

<!--=================================
 rev slider -->




 <!--=================================
 form -->

<section class="search-block find-car bg-1 bg-overlay-black-70 page-section-pt" id="form">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="section-title">
         <h2 class="text-white">Discover Australia in comfort and style </h2>
         <div class="separator"></div>
      </div>
    </div>
   </div>
    <div class="row">
       <div class="col-lg-12 col-sm-12">
           <form action="{{route('online.reservation')}}" method="post">
               @csrf
          <div class="row">
           <div class="col-md-6">
            <span>Pickup Location</span>
              <div class="selected-box">
                <select class="selectpicker" name="p_location" required>
                    @forelse($all_locations as $l)
                    <option>{{$l['name']}}</option>
                    @empty
                        No location found
                    @endforelse
               </select>
              </div>
            </div>
            <div class="col-md-6">
            <span>Drop Off Location</span>
              <div class="selected-box">
               <select class="selectpicker" name="d_location">
                   @forelse($all_locations as $l)
                       <option>{{$l['name']}}</option>
                   @empty
                       No location found
                   @endforelse
               </select>
             </div>
            </div>
            <div class="col-md-6">
            <span>Pickup Date</span>
              <input type="date" class="form-control" name="p_date" value="{{date('Y-m-d')}}">
            </div>
            <div class="col-md-6">
            <span>Pickup Time</span>
            <input type="time" class="form-control" name="p_time" value="{{date('H:i:s')}}">
            </div>
            <div class="col-md-6">
           <span>Drop Off Date</span>
             <div class="selected-box">
             <input type="date" class="form-control" name="d_date" value="{{date('Y-m-d')}}">
             </div>
            </div>
            <div class="col-md-6">
           <span>Drop Off Time</span>
             <div class="selected-box">
             <input type="time" class="form-control" name="d_time" value="{{date('H:i:s')}}">
             </div>
            </div>
            <div class="col-md-12">
             <div class="price-slide" style="margin-bottom:70px;">
                <div class="price" style="margin-top:30px;">
                    <button type="submit" class="button" style="width:100%">Search the Vehicle</button>
                </div>
               </div>
              </div>
          </div>
           </form>
         </div>

      </div>
    </div>
  </section>

  <section class="testimonial-1 white-bg page page-section-ptb" id="feed">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title">

         <h2>
         We love your feedback
         </h2>
         <div class="separator"></div>
      </div>
      </div>
    </div>
   <div class="row">
    <div class="col-md-12 text-center">
        <div class="feed">
        <p>
      For Feedback and complaints please email us at
      </p>
         <p href="#" style="color:black;font-weight:800;">
         feedback@simbacarhire.com.au
         </p>
         <p>
         We will respond within 5 Business Days. Alternative please call us on:
         </p>
         <p>
        <b style="color:black">Adelaide Mitchell Park</b> : 08 8312 4616
         </p>
         <p>
        <b style="color:black">Sydney waterloo</b> : 02 8005 6696
         </p>
        </div>

    </div>

    </div>
   </div>
  </section>


 @include('users.footer')
