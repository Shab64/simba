@include('users.header')

    <style>

    </style>
<section class="register-form page-section-ptb">
  <div class="container">
  <div class="row justify-content-center mt-5">
      <div class="col-md-10">
         <div class="section-title">
           <h2>My Current Booking</h2>
           <div class="separator"></div>
         </div>
      </div>
    </div>
    <section class="product-listing page-section-ptb p-0">
    <div class="car-grid">
           <div class="row">
            <div class="col-lg-4 col-md-12">
              <div class="car-item gray-bg text-center">
               <div class="car-image">
                 <img class="img-fluid" src="{{url('assets/users')}}/images/car/01.jpg" alt="">
                 <div class="car-overlay-banner">
                  <ul>
                    <li><a href="car-detail.php"><i class="fa fa-eye"></i></a></li>

                   </ul>
                 </div>
               </div>
              </div>
             </div>
              <div class="col-lg-8 col-md-12">
                <div class="car-details">
                <div class="car-title">
                 <a href="#">Acura Rsx</a>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero numquam repellendus non voluptate. Harum blanditiis ullam deleniti.</p>
                  </div>
                  <div class="price">
                       <span>Total Rent:</span>
                       <span class="new-price">$120 </span>
                       <a class="button red float-end" href="#" onclick="datefunc()">Date Extend</a>
                     </div>
                   <div class="car-list">
                     <ul class="list-inline">
                       <li><i class="fa fa-calendar"></i> Booking Date: 12-2-2022</li>
                         <li><i class="fa fa-calendar"></i> Return Date: 12-4-2022</li>
                       <li><i class="fa fa-dollar"></i> Per Day Rent: 60$</li>
                     </ul>
                       <div class="mt-3 price" id="date-pick" style="display:none;">
                           <span>Extend Date</span>
                           <input type="text" name="daterange" value="01/01/2018 - 01/15/2018" />
                       </div>

                   </div>
                  </div>
                </div>
               </div>
             </div>
    </section>

</section>

    <script>
        let open1=false;
        function datefunc(){
            if(open1){
              let pick =  document.getElementById('date-pick');
              pick.style.display = "none";
              open1=false;
            }else{
                let pick =  document.getElementById('date-pick');
                pick.style.display = "block";
                open1=true;
            }
        }

    </script>




    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Extend Date</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
 @include('users.footer')
