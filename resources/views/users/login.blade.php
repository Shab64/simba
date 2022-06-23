@include('users.header')




<section class="login-form page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <div class="section-title">
           <span>Log in with your id or social media </span>
           <h2>Login To Your Account</h2>
           <div class="separator"></div>
         </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-12">
        <div class="gray-form clearfix">
          <div class="mb-3">
           <label class="form-label" for="name">Email </label>
             <input id="name" class="form-control" type="text" placeholder="Email" name="web">
          </div>
          <div class="mb-3">
            <label class="form-label" for="Password">Password* </label>
            <input id="Password" class="form-control" type="password" placeholder="Password" name="Password">
          </div>
          <div class="mb-3">
            <div class="remember-checkbox mb-4">
              <input type="checkbox" name="one" id="one">
              <label for="one"> Remember me</label>
              <a href="#" class="float-end">Forgot Password?</a>
            </div>
          </div>
          <div class="d-grid">
            <a href="#" class="button red btn-block"> Log in </a>
          </div>
          <div class="d-grid mt-4">
            <a href="#" class="button red btn-block"> Sign up </a>
          </div>
        </div>
        <div class="login-social text-center">
          <h5>Login with Social media</h5>
          <ul>
              <li><a class="fb button" href="#"><i class="fa fa-facebook"></i> Facebook</a></li>

          </ul>
        </div>
      </div>
    </div>
  </div>
</section>



 @include('users.footer')
