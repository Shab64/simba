@include('users.header')






<!--=================================
 inner-intro -->


<!--=================================
 contact -->

<section class="contact page-section-ptb white-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <div class="section-title">
           <span>We’d Love to Hear From You</span>
           <h2>LET'S GET IN TOUCH!</h2>
           <div class="separator"></div>
         </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6">
       <div class="contact-box text-center grey-border">
          <i class="fa fa-map-marker"></i>
          <h5>Address</h5>
          <p>4/937 Marion Road Mitchell Park SA 5038</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
       <div class="contact-box text-center grey-border">
          <i class="fa fa-phone"></i>
          <h5>Phone</h5>
          <p> 08 8312 4616</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 mb-2 mb-sm-0">
       <div class="contact-box text-center grey-border mb-4 mb-sm-0">
          <i class="fa fa-envelope-o"></i>
          <h5>Email</h5>
          <p> admin@simbacarhire.com.au</p>
        </div>
      </div>

    </div>
    <div class="page-section-ptb">
      <div class="row">
       <div class="col-lg-12 col-sm-12">
       <div class="gray-form">
         <div id="formmessage" class="form-notice" style="display:none;">Success/Error Message Goes Here</div>
           <form class="form-horizontal" id="contactform" role="form" method="post" action="http://themes.potenzaglobalsolutions.com/html/cardealer/php/contact-form.php">
            <div class="contact-form row">
              <div class="col-lg-4 col-sm-12">
               <div class="mb-3">
                 <input id="contactform_name" type="text" placeholder="Name*" class="form-control"  name="name">
               </div>
             </div>
             <div class="col-lg-4 col-sm-12">
               <div class="mb-3">
                 <input id="contactform_email" type="email" placeholder="Email*" class="form-control" name="email">
                </div>
              </div>
              <div class="col-lg-4 col-sm-12">
                <div class="mb-3">
                  <input id="contactform_phone" type="text" placeholder="Phone*" class="form-control" name="phone">
                </div>
              </div>
              <div class="col-md-12">
                 <div class="mb-3">
                   <textarea id="contactform_message" class="form-control input-message" placeholder="Comment*" rows="7" name="message"></textarea>
                 </div>
              </div>
              <div class="col-md-12">
                 <input type="hidden" name="action" value="sendEmail"/>
                 <button id="submit" name="submit" type="submit" value="Send" class="button red">Send your message <i class="fa fa-spinner fa-spin fa-fw btn-loader" style="display: none;"></i></button>
               </div>
              </div>
          </form>
           </div>
       </div>

     </div>
 </div>

  </div>
</section>



 @include('users.footer')
