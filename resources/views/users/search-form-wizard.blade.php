@include('users.header')

<link rel="stylesheet" href="{{url('assets/users')}}/css/vik.css">

<style>

    .nav .nav-item::marker{
        color:transparent !important;
    }

    .nav .nav-item{
        flex: 1;
        text-align: center;
    }
    .nav-pills .nav-link{
        margin:auto;
        width: 100%;
        font-weight: bold;
        background: #f7f7f7;
    }
    .vrc-oconfirm-paym-block .vrc-gpay-licont-active{
        flex:1;

    }
    .vrc-oconfirm-paym-block .vrc-gpay-licont-active:before{
        display:none;
    }
    .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #283891;
}
.vrc-showprc-left{
    order:0;
}
.vrc-showprc-container{
    align-items: center;
}
.vrcinfocarcontainer{
    border: 1px solid rgb(221, 221, 221);
    border-radius: 8px;
    align-items: center;
}
.vrcrentforlocs{
    border:none;
}
.vrccustomfields{
    display:block;
}
.vrc-oconfirm-summary-car-cell-descr .vrc-oconfirm-carname{
    color:black;
}
.vrc-oconfirm-summary-total-wrapper .vrc-oconfirm-summary-total-row, .vrc-oconfirm-summary-total-wrapper .vrc-oconfirm-summary-total-row .vrc-oconfirm-total-block{
    color:black;
}


/*wizard css*/

    .wizard-content-left {
        background-blend-mode: darken;
        background-color: rgba(0, 0, 0, 0.45);
        background-image: url("https://i.ibb.co/X292hJF/form-wizard-bg-2.jpg");
        background-position: center center;
        background-size: cover;
        height: 100vh;
        padding: 30px;
    }
    .wizard-content-left h1 {
        color: #ffffff;
        font-size: 38px;
        font-weight: 600;
        padding: 12px 20px;
        text-align: center;
    }

    .form-wizard {
        color: #888888;
        padding: 30px;
    }
    .form-wizard .wizard-form-radio {
        display: inline-block;
        margin-left: 5px;
        position: relative;
    }
    .form-wizard .wizard-form-radio input[type="radio"] {
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        appearance: none;
        background-color: #dddddd;
        height: 25px;
        width: 25px;
        display: inline-block;
        vertical-align: middle;
        border-radius: 50%;
        position: relative;
        cursor: pointer;
    }
    .form-wizard .wizard-form-radio input[type="radio"]:focus {
        outline: 0;
    }
    .form-wizard .wizard-form-radio input[type="radio"]:checked {
        background-color: #fb1647;
    }
    .form-wizard .wizard-form-radio input[type="radio"]:checked::before {
        content: "";
        position: absolute;
        width: 10px;
        height: 10px;
        display: inline-block;
        background-color: #ffffff;
        border-radius: 50%;
        left: 1px;
        right: 0;
        margin: 0 auto;
        top: 8px;
    }
    .form-wizard .wizard-form-radio input[type="radio"]:checked::after {
        content: "";
        display: inline-block;
        webkit-animation: click-radio-wave 0.65s;
        -moz-animation: click-radio-wave 0.65s;
        animation: click-radio-wave 0.65s;
        background: #000000;
        content: '';
        display: block;
        position: relative;
        z-index: 100;
        border-radius: 50%;
    }
    .form-wizard .wizard-form-radio input[type="radio"] ~ label {
        padding-left: 10px;
        cursor: pointer;
    }
    .form-wizard .form-wizard-header {
        text-align: center;
    }
    .form-wizard .form-wizard-next-btn, .form-wizard .form-wizard-previous-btn, .form-wizard .form-wizard-submit {
        background-color: #d65470;
        color: #ffffff;
        display: inline-block;
        min-width: 100px;
        min-width: 120px;
        padding: 10px;
        text-align: center;
    }
    .form-wizard .form-wizard-next-btn:hover, .form-wizard .form-wizard-next-btn:focus, .form-wizard .form-wizard-previous-btn:hover, .form-wizard .form-wizard-previous-btn:focus, .form-wizard .form-wizard-submit:hover, .form-wizard .form-wizard-submit:focus {
        color: #ffffff;
        opacity: 0.6;
        text-decoration: none;
    }
    .form-wizard .wizard-fieldset {
        display: none;
    }
    .form-wizard .wizard-fieldset.show {
        display: block;
    }
    .form-wizard .wizard-form-error {
        display: none;
        background-color: #d70b0b;
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 2px;
        width: 100%;
    }
    .form-wizard .form-wizard-previous-btn {
        background-color: #fb1647;
    }
    .form-wizard .form-control {
        font-weight: 300;
        height: auto !important;
        padding: 15px;
        color: #888888;
        background-color: #f1f1f1;
        border: none;
    }
    .form-wizard .form-control:focus {
        box-shadow: none;
    }
    .form-wizard .form-group {
        position: relative;
        margin: 25px 0;
    }
    .form-wizard .wizard-form-text-label {
        position: absolute;
        left: 10px;
        top: 16px;
        transition: 0.2s linear all;
    }
    .form-wizard .focus-input .wizard-form-text-label {
        color: #d65470;
        top: -18px;
        transition: 0.2s linear all;
        font-size: 12px;
    }
    .form-wizard .form-wizard-steps {
        margin: 30px 0;
    }
    .form-wizard .form-wizard-steps li {
        width: 25%;
        float: left;
        position: relative;
    }
    .form-wizard .form-wizard-steps li::after {
        background-color: #f3f3f3;
        content: "";
        height: 5px;
        left: 0;
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 100%;
        border-bottom: 1px solid #dddddd;
        border-top: 1px solid #dddddd;
    }
    .form-wizard .form-wizard-steps li span {
        background-color: #dddddd;
        border-radius: 50%;
        display: inline-block;
        height: 40px;
        line-height: 40px;
        position: relative;
        text-align: center;
        width: 40px;
        z-index: 1;
    }
    .form-wizard .form-wizard-steps li:last-child::after {
        width: 50%;
    }
    .form-wizard .form-wizard-steps li.active span, .form-wizard .form-wizard-steps li.activated span {
        background-color: #d65470;
        color: #ffffff;
    }
    .form-wizard .form-wizard-steps li.active::after, .form-wizard .form-wizard-steps li.activated::after {
        background-color: #d65470;
        left: 50%;
        width: 50%;
        border-color: #d65470;
    }
    .form-wizard .form-wizard-steps li.activated::after {
        width: 100%;
        border-color: #d65470;
    }
    .form-wizard .form-wizard-steps li:last-child::after {
        left: 0;
    }
    .form-wizard .wizard-password-eye {
        position: absolute;
        right: 32px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
    }
    @keyframes click-radio-wave {
        0% {
            width: 25px;
            height: 25px;
            opacity: 0.35;
            position: relative;
        }
        100% {
            width: 60px;
            height: 60px;
            margin-left: -15px;
            margin-top: -15px;
            opacity: 0.0;
        }
    }
    @media screen and (max-width: 767px) {
        .wizard-content-left {
            height: auto;
        }
    }


</style>

<section class="product-listing page-section-ptb">
  <div class="container">
    <div class="row">

      <div class="col-lg-12 col-md-8">

      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <a href="index.php #form" class="nav-link "  type="button" role="tab" >Dates</a>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Cars</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Options</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab2" data-bs-toggle="pill" data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact2" aria-selected="false">Book</button>
  </li>
</ul>
<div class="tab-content onhover mt-5" id="pills-tabContent">
  <div class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

  </div>
  <div class="tab-pane fade show active mt-5" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

  <div class="row g-0 inner-service" >
      <div class="col-md-6 col-sm-6">
        <div class="feature-box-2 text-center">
          <div class="icon">
          <h5>Pick Up</h5>
          </div>
          <div class="content">
             <div class="row">
             <div class="col-md-6">
             <i class="glyph-icon flaticon-car"></i>
          <p>
          Mitchell Park, Adelaide
4/937 Marion Road Mitchell Park SA 5043
          </p>
             </div>
             <div class="col-md-6">
             <p>
        <i class="fa fa-calendar"></i>
         22/04/2022
          </p>
             </div>
            <div class="col-md-6">
            <p>
          <i class="fa fa-clock-o"></i>
           09:30
          </p>
            </div>
           <div class="col-md-6">
           <p>
          <i class="fa fa-phone"></i>
           08 8312 4616
          </p>
             </div>
               </div>

         </div>
        </div>
        </div>

        <div class="col-md-6 col-sm-6">
          <div class="feature-box-2 no-br text-center">
            <div class="icon">
            <h5>Drop Off</h5>

            </div>
            <div class="content">
             <div class="row">
             <div class="col-md-6">
             <i class="glyph-icon flaticon-gas-station"></i>
          <p>
          Mitchell Park, Adelaide
4/937 Marion Road Mitchell Park SA 5043
          </p>
             </div>
             <div class="col-md-6">
             <p>
        <i class="fa fa-calendar"></i>
         22/04/2022
          </p>
             </div>
            <div class="col-md-6">
            <p>
          <i class="fa fa-clock-o"></i>
           09:30
          </p>
            </div>
           <div class="col-md-6">
           <p>
          <i class="fa fa-phone"></i>
           08 8312 4616
          </p>
             </div>
               </div>

         </div>
          </div>
        </div>

        <div class="row product-listing mt-5" style="margin:auto;">

      <div class="col-lg-12 col-md-8">

        <div class="car-grid">
           <div class="row">
            <div class="col-lg-4 col-md-12">
              <div class="car-item gray-bg text-center">
               <div class="car-image">
                 <img class="img-fluid" src="{{url('assets/users')}}/images/car/01.jpg" alt="">
                 <div class="car-overlay-banner">
                  <ul>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                   </ul>
                 </div>
               </div>
              </div>
             </div>
              <div class="col-lg-8 col-md-12">
                <div class="car-details">
                <div class="car-title">
                 <a href="#">Acura Rsx</a>

                  </div>
                  <h6>Starting From</h6>
                  <div class="price">
                       <span class="old-price">$35,568</span>
                       <span class="new-price">$32,698 </span>
                       <a class="button red float-end" href="#">Continue</a>
                     </div>
                     <h6>Per Day</h6>
                     <div class="price">
                       <span class="new-price">$110.00 </span>
                     </div>
                   <div class="car-list">
                     <ul class="list-inline">
                       <li><i class="fa fa-registered"></i> 2016</li>
                       <li><i class="fa fa-cog"></i> Manual </li>
                       <li><i class="fa fa-shopping-cart"></i> Compact</li>
                     </ul>
                   </div>
                  </div>
                </div>
               </div>
             </div>
             <div class="car-grid">
           <div class="row">
            <div class="col-lg-4 col-md-12">
              <div class="car-item gray-bg text-center">
               <div class="car-image">
                 <img class="img-fluid" src="{{url('assets/users')}}/images/car/02.jpg" alt="">
                 <div class="car-overlay-banner">
                  <ul>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                   </ul>
                 </div>
               </div>
              </div>
             </div>
              <div class="col-lg-8 col-md-12">
                <div class="car-details">
                <div class="car-title">
                 <a href="#">Lexus GS 450h</a>

                  </div>
                  <h6>Starting From</h6>
                  <div class="price">
                       <span class="old-price">$35,568</span>
                       <span class="new-price">$32,698 </span>
                       <a class="button red float-end" href="#">Continue</a>
                     </div>
                     <h6>Per Day</h6>
                     <div class="price">
                       <span class="new-price">$110.00 </span>
                     </div>
                   <div class="car-list">
                     <ul class="list-inline">
                       <li><i class="fa fa-registered"></i> 2016</li>
                       <li><i class="fa fa-cog"></i> Manual </li>
                       <li><i class="fa fa-shopping-cart"></i> Mini</li>
                     </ul>
                   </div>
                  </div>
                </div>
               </div>
             </div>
             <div class="car-grid">
           <div class="row">
            <div class="col-lg-4 col-md-12">
              <div class="car-item gray-bg text-center">
               <div class="car-image">
                 <img class="img-fluid" src="{{url('assets/users')}}/images/car/03.jpg" alt="">
                 <div class="car-overlay-banner">
                  <ul>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                   </ul>
                 </div>
               </div>
              </div>
             </div>
              <div class="col-lg-8 col-md-12">
                <div class="car-details">
                <div class="car-title">
                 <a href="#">GTA 5 Lowriders DLC</a>

                  </div>
                  <h6>Starting From</h6>
                  <div class="price">
                       <span class="old-price">$35,568</span>
                       <span class="new-price">$32,698 </span>
                       <a class="button red float-end" href="#">Continue</a>
                     </div>
                     <h6>Per Day</h6>
                     <div class="price">
                       <span class="new-price">$110.00 </span>
                     </div>
                   <div class="car-list">
                     <ul class="list-inline">
                       <li><i class="fa fa-registered"></i> 2016</li>
                       <li><i class="fa fa-cog"></i> Manual </li>
                       <li><i class="fa fa-shopping-cart"></i> Intermediate</li>
                     </ul>
                   </div>
                  </div>
                </div>
               </div>
             </div>
             <div class="car-grid">
           <div class="row">
            <div class="col-lg-4 col-md-12">
              <div class="car-item gray-bg text-center">
               <div class="car-image">
                 <img class="img-fluid" src="{{url('assets/users')}}/images/car/04.jpg" alt="">
                 <div class="car-overlay-banner">
                  <ul>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                   </ul>
                 </div>
               </div>
              </div>
             </div>
              <div class="col-lg-8 col-md-12">
                <div class="car-details">
                <div class="car-title">
                 <a href="#">Toyota avalon hybrid </a>

                  </div>
                  <h6>Starting From</h6>
                  <div class="price">
                       <span class="old-price">$35,568</span>
                       <span class="new-price">$32,698 </span>
                       <a class="button red float-end" href="#">Continue</a>
                     </div>
                     <h6>Per Day</h6>
                     <div class="price">
                       <span class="new-price">$110.00 </span>
                     </div>
                   <div class="car-list">
                     <ul class="list-inline">
                       <li><i class="fa fa-registered"></i> 2016</li>
                       <li><i class="fa fa-cog"></i> Manual </li>
                       <li><i class="fa fa-shopping-cart"></i> Compact</li>
                     </ul>
                   </div>
                  </div>
                </div>
               </div>
             </div>

          </div>
        </div>

  </div>

  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
  <form action="" method="post" class="vrc-showprc-form">
	<div class="vrc-showprc-container">
    <div class="vrc-showprc-left car_img_box">
			<img alt="Mitsubishi Mirage or similar" src="https://www.simbacarhire.com.au/wp-content/plugins/vikrentcar/admin/resources/mirage-320x181.png">
					</div>
		<div class="vrc-showprc-right">
					<h3 class="car_title"><span class="vrhword">Rental Mitsubishi Mirage or similar for 27 Days</span></h3>
						<div class="vrc-cdetails-infocar">
				<div class="car_description_box">
									</div>
			</div>
		</div>

	</div>

	<div class="vrc-showprc-prices-wrap">
		<h4 class="vrc-showprc-title">Price</h4>
		<div class="vrc-showprc-prices-inner">
					<div class="vrc-showprc-price-row vrc-showprc-price-selected">
				<div class="vrc-showprc-price-row-cell-first">
					<label for="pid1" class="vrc-label-promo-price">
						<div class="vrc-showprc-priceinfo">
							<span class="vrc-showprc-pricename"><i class="fas fa-certificate vrc-promo-price-icon"></i> Daily</span>
							<span class="vrc-showprc-pricecost">
								<span class="vrc_currency">$</span> <span class="vrc_price">2,983.95</span>							</span>
						</div>
										</label>
				</div>
				<div class="vrc-showprc-price-row-cell-last">
					<input type="radio" name="priceid" id="pid1" onclick="vrcShowprcSetActivePrice(this);" value="1" checked="checked">
				</div>
			</div>
					</div>
	</div>
	<div class="vrc-showprc-options-wrap">
		<h4 class="vrc-showprc-title">Options</h4>
		<div class="vrc-showprc-options-inner">
					<div class="vrc-showprc-option-row">
				<div class="vrc-showprc-option-cell-info">
									<div class="vrc-showprc-option-name-descr">
						<div class="vrc-showprc-option-name">
							<span>BASIC COVER INCLUDED</span>
						</div>
											<div class="vrc-showprc-option-cell-descr">
							<div class="vrcoptionaldescr">If you have an accident or damage the vehicle, your excess liability is $4,818.</div>
						</div>
											</div>
				</div>
				<div class="vrc-showprc-option-cell-price">
					<div class="vrc-showprc-option-cell-price-descr">
						<span class="vrc_currency">$</span>
						<span class="vrc_price">0.00</span>
					</div>
					<div class="vrc-showprc-option-cell-price-sel">
						<input type="hidden" name="optid8" value="1"><span class="vrcoptionforcequant"><small>x</small> 1</span>					</div>
				</div>
			</div>
					<div class="vrc-showprc-option-row">
				<div class="vrc-showprc-option-cell-info">
									<div class="vrc-showprc-option-name-descr">
						<div class="vrc-showprc-option-name">
							<span>Silver Cover</span>
						</div>
											<div class="vrc-showprc-option-cell-descr">
							<div class="vrcoptionaldescr"><span style="color: #0000ff">This allows you to reduce the excess liability to $1800.&nbsp; Includes Roadside Assistance</span></div>
						</div>
											</div>
				</div>
				<div class="vrc-showprc-option-cell-price">
					<div class="vrc-showprc-option-cell-price-descr">
						<span class="vrc_currency">$</span>
						<span class="vrc_price">350.00</span>
					</div>
					<div class="vrc-showprc-option-cell-price-sel">
						<input type="checkbox" name="optid2" value="1">					</div>
				</div>
			</div>
					<div class="vrc-showprc-option-row">
				<div class="vrc-showprc-option-cell-info">
									<div class="vrc-showprc-option-name-descr">
						<div class="vrc-showprc-option-name">
							<span>Gold Cover</span>
						</div>
											<div class="vrc-showprc-option-cell-descr">
							<div class="vrcoptionaldescr"><span style="color: #0000ff">This allows you to reduce the excess liability to $0. </span><span style="color: #0000ff">Includes Roadside Assistance</span></div>
						</div>
											</div>
				</div>
				<div class="vrc-showprc-option-cell-price">
					<div class="vrc-showprc-option-cell-price-descr">
						<span class="vrc_currency">$</span>
						<span class="vrc_price">500.00</span>
					</div>
					<div class="vrc-showprc-option-cell-price-sel">
						<input type="checkbox" name="optid3" value="1">					</div>
				</div>
			</div>
					<div class="vrc-showprc-option-row">
				<div class="vrc-showprc-option-cell-info">
									<div class="vrc-showprc-option-name-descr">
						<div class="vrc-showprc-option-name">
							<span>Drivers Under 25 and Over 75 Years</span>
						</div>
											<div class="vrc-showprc-option-cell-descr">
							<div class="vrcoptionaldescr">You MUST select this option if you are under 25 or Over 75 years Old.

Excess For Drivers under 25 and Over 75 is $5000.</div>
						</div>
											</div>
				</div>
				<div class="vrc-showprc-option-cell-price">
					<div class="vrc-showprc-option-cell-price-descr">
						<span class="vrc_currency">$</span>
						<span class="vrc_price">75.00</span>
					</div>
					<div class="vrc-showprc-option-cell-price-sel">
						<input type="checkbox" name="optid12" value="1">					</div>
				</div>
			</div>
					<div class="vrc-showprc-option-row">
				<div class="vrc-showprc-option-cell-info">
									<div class="vrc-showprc-option-name-descr">
						<div class="vrc-showprc-option-name">
							<span>Additional Driver</span>
						</div>
											<div class="vrc-showprc-option-cell-descr">
							<div class="vrcoptionaldescr">Use this option if there is more then 1 Driver.</div>
						</div>
											</div>
				</div>
				<div class="vrc-showprc-option-cell-price">
					<div class="vrc-showprc-option-cell-price-descr">
						<span class="vrc_currency">$</span>
						<span class="vrc_price">30.00</span>
					</div>
					<div class="vrc-showprc-option-cell-price-sel">
						<input type="number" min="0" step="any" name="optid4" value="0" size="5">					</div>
				</div>
			</div>
					<div class="vrc-showprc-option-row">
				<div class="vrc-showprc-option-cell-info">
									<div class="vrc-showprc-option-name-descr">
						<div class="vrc-showprc-option-name">
							<span>Child Seat</span>
						</div>
											<div class="vrc-showprc-option-cell-descr">
							<div class="vrcoptionaldescr">For Children between 0-4 Years</div>
						</div>
											</div>
				</div>
				<div class="vrc-showprc-option-cell-price">
					<div class="vrc-showprc-option-cell-price-descr">
						<span class="vrc_currency">$</span>
						<span class="vrc_price">30.00</span>
					</div>
					<div class="vrc-showprc-option-cell-price-sel">
						<input type="number" min="0" step="any" name="optid5" value="0" size="5">					</div>
				</div>
			</div>
					<div class="vrc-showprc-option-row">
				<div class="vrc-showprc-option-cell-info">
									<div class="vrc-showprc-option-name-descr">
						<div class="vrc-showprc-option-name">
							<span>Booster Seat</span>
						</div>
											<div class="vrc-showprc-option-cell-descr">
							<div class="vrcoptionaldescr">For Children between 4-8 Years</div>
						</div>
											</div>
				</div>
				<div class="vrc-showprc-option-cell-price">
					<div class="vrc-showprc-option-cell-price-descr">
						<span class="vrc_currency">$</span>
						<span class="vrc_price">30.00</span>
					</div>
					<div class="vrc-showprc-option-cell-price-sel">
						<input type="number" min="0" step="any" name="optid6" value="0" size="5">					</div>
				</div>
			</div>
					<div class="vrc-showprc-option-row">
				<div class="vrc-showprc-option-cell-info">
									<div class="vrc-showprc-option-name-descr">
						<div class="vrc-showprc-option-name">
							<span>UNLIMITED KMS INCLUDED</span>
						</div>
										</div>
				</div>
				<div class="vrc-showprc-option-cell-price">
					<div class="vrc-showprc-option-cell-price-descr">
						<span class="vrc_currency">$</span>
						<span class="vrc_price">0.00</span>
					</div>
					<div class="vrc-showprc-option-cell-price-sel">
						<input type="hidden" name="optid9" value="1"><span class="vrcoptionforcequant"><small>x</small> 1</span>					</div>
				</div>
			</div>
				</div>
	</div>
		<input type="hidden" name="place" value="2">
	<input type="hidden" name="returnplace" value="2">
	<input type="hidden" name="carid" value="9">
	<input type="hidden" name="days" value="27">
	<input type="hidden" name="pickup" value="1650619800">
	<input type="hidden" name="release" value="1652952600">
	<input type="hidden" name="task" value="oconfirm">
  		<input type="hidden" name="Itemid" value="10">

	<div class="car_buttons_box">
		<input type="submit" name="goon" value="Book now" class="btn booknow vrc-pref-color-btn">
		<div class="goback">
			<a href="https://www.simbacarhire.com.au/?task=search&amp;place=2&amp;pickupdate=22%2F04%2F2022&amp;pickuph=09&amp;pickupm=30&amp;releasedate=19%2F05%2F2022&amp;releaseh=09&amp;releasem=30&amp;returnplace=2" class="btn vrc-pref-color-btn-secondary">Back</a>
		</div>
	</div>

</form>

  </div>
  <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab2">
  <div class="vrcinfocarcontainer">
	<div class="vrcrentforlocs">
		<div class="vrcrentalfor">
					<h3 class="vrcrentalforone">Rental Mitsubishi Mirage or similar for 27 Days</h3>
					</div>

		<div class="vrc-itinerary-confirmation">
			<div class="vrc-itinerary-pickup">
				<h4>Pickup</h4>
							<div class="vrc-itinerary-pickup-location">
					<i class="fa fa-location-arrow vrc-pref-color-text"></i>					<div class="vrc-itinerary-pickup-locdet">
						<span class="vrc-itinerary-pickup-locname">Mitchell Park, Adelaide PH: 08 8312 4616</span>
						<span class="vrc-itinerary-pickup-locaddr">4/937 Marion Road Mitchell Park SA 5043</span>
					</div>
				</div>
								<div class="vrc-itinerary-pickup-date">
					<i class="fa fa-calendar vrc-pref-color-text"></i>					<span class="vrc-itinerary-pickup-date-day">22/04/2022</span>
					<span class="vrc-itinerary-pickup-date-time">09:30</span>
				</div>
			</div>
			<div class="vrc-itinerary-dropoff">
				<h4>Drop Off</h4>
							<div class="vrc-itinerary-dropoff-location">
					<i class="fa fa-location-arrow vrc-pref-color-text"></i>					<div class="vrc-itinerary-dropfff-locdet">
						<span class="vrc-itinerary-dropoff-locname">Mitchell Park, Adelaide PH: 08 8312 4616</span>
						<span class="vrc-itinerary-dropoff-locaddr">4/937 Marion Road Mitchell Park SA 5043</span>
					</div>
				</div>
								<div class="vrc-itinerary-dropoff-date">
					<i class="fa fa-calendar vrc-pref-color-text"></i>					<span class="vrc-itinerary-dropoff-date-day">19/05/2022</span>
					<span class="vrc-itinerary-dropoff-date-time">09:30</span>
				</div>
			</div>
		</div>

	</div>

		<div class="vrc-summary-car-img">
		<img src="https://www.simbacarhire.com.au/wp-content/plugins/vikrentcar/admin/resources/mirage-320x181.png">
	</div>
	</div>

    <div class="vrc-oconfirm-summary-container">
	<div class="vrc-oconfirm-summary-car-wrapper">
		<div class="vrc-oconfirm-summary-car-head">
			<div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-cell-descr">
				<span></span>
			</div>
			<div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-cell-days">
				<span>Days</span>
			</div>
			<div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-cell-net">
				<span>Net Price</span>
			</div>
			<div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-cell-tax">
				<span>Tax</span>
			</div>
			<div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-cell-tot">
				<span>Total Price</span>
			</div>
		</div>

		<div class="vrc-oconfirm-summary-car-row">
			<div class="vrc-oconfirm-summary-car-cell-descr">
				<div class="vrc-oconfirm-carname vrc-pref-color-text">Mitsubishi Mirage or similar</div>
				<div class="vrc-oconfirm-priceinfo">
					Daily				</div>
			</div>
			<div class="vrc-oconfirm-summary-car-cell-days">
				<div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-head-cell-responsive">
					<span>Days</span>
				</div>
				<span>27</span>
			</div>
			<div class="vrc-oconfirm-summary-car-cell-net">
				<div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-head-cell-responsive">
					<span>Net Price</span>
				</div>
				<span class="vrccurrency">
					<span class="vrc_currency">$</span>
				</span>
				<span class="vrcprice">
					<span class="vrc_price">2,712.68</span>
				</span>
			</div>
			<div class="vrc-oconfirm-summary-car-cell-tax">
				<div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-head-cell-responsive">
					<span>Tax</span>
				</div>
				<span class="vrccurrency">
					<span class="vrc_currency">$</span>
				</span>
				<span class="vrcprice">
					<span class="vrc_price">271.27</span>
				</span>
			</div>
			<div class="vrc-oconfirm-summary-car-cell-tot">
				<div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-head-cell-responsive">
					<span>Total Price</span>
				</div>
				<span class="vrccurrency">
					<span class="vrc_currency">$</span>
				</span>
				<span class="vrcprice">
					<span class="vrc_price">2,983.95</span>
				</span>
			</div>
		</div>
		<div class="vrc-oconfirm-summary-car-row vrc-oconfirm-summary-option-row">
			<div class="vrc-oconfirm-summary-car-cell-descr">
				<div class="vrc-oconfirm-optname">BASIC COVER INCLUDED</div>
			</div>
			<div class="vrc-oconfirm-summary-car-cell-days">
				<span></span>
			</div>
			<div class="vrc-oconfirm-summary-car-cell-net">
				<div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-head-cell-responsive">
					<span>Net Price</span>
				</div>
				<span class="vrccurrency">
					<span class="vrc_currency">$</span>
				</span>
				<span class="vrcprice">
					<span class="vrc_price">0.00</span>
				</span>
			</div>
			<div class="vrc-oconfirm-summary-car-cell-tax">
				<div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-head-cell-responsive">
					<span>Tax</span>
				</div>
				<span class="vrccurrency">
					<span class="vrc_currency">$</span>
				</span>
				<span class="vrcprice">
					<span class="vrc_price">0.00</span>
				</span>
			</div>
			<div class="vrc-oconfirm-summary-car-cell-tot">
				<div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-head-cell-responsive">
					<span>Total Price</span>
				</div>
				<span class="vrccurrency">
					<span class="vrc_currency">$</span>
				</span>
				<span class="vrcprice">
					<span class="vrc_price">0.00</span>
				</span>
			</div>
		</div>
				<div class="vrc-oconfirm-summary-car-row vrc-oconfirm-summary-option-row">
			<div class="vrc-oconfirm-summary-car-cell-descr">
				<div class="vrc-oconfirm-optname">UNLIMITED KMS INCLUDED</div>
			</div>
			<div class="vrc-oconfirm-summary-car-cell-days">
				<span></span>
			</div>
			<div class="vrc-oconfirm-summary-car-cell-net">
				<div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-head-cell-responsive">
					<span>Net Price</span>
				</div>
				<span class="vrccurrency">
					<span class="vrc_currency">$</span>
				</span>
				<span class="vrcprice">
					<span class="vrc_price">0.00</span>
				</span>
			</div>
			<div class="vrc-oconfirm-summary-car-cell-tax">
				<div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-head-cell-responsive">
					<span>Tax</span>
				</div>
				<span class="vrccurrency">
					<span class="vrc_currency">$</span>
				</span>
				<span class="vrcprice">
					<span class="vrc_price">0.00</span>
				</span>
			</div>
			<div class="vrc-oconfirm-summary-car-cell-tot">
				<div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-head-cell-responsive">
					<span>Total Price</span>
				</div>
				<span class="vrccurrency">
					<span class="vrc_currency">$</span>
				</span>
				<span class="vrcprice">
					<span class="vrc_price">0.00</span>
				</span>
			</div>
		</div>
			</div>
	<div class="vrc-oconfirm-summary-total-wrapper">

		<div class="vrc-oconfirm-summary-car-row vrc-oconfirm-summary-total-row">
			<div class="vrc-oconfirm-summary-car-cell-descr">
				<div class="vrc-oconfirm-total-block">Total</div>
			</div>
			<div class="vrc-oconfirm-summary-car-cell-days">
				<span></span>
			</div>
			<div class="vrc-oconfirm-summary-car-cell-net">
				<div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-cell-net">
					<span>Net Price</span>
				</div>
				<span class="vrccurrency">
					<span class="vrc_currency">$</span>
				</span>
				<span class="vrcprice">
					<span class="vrc_price">2,712.68</span>
				</span>
			</div>
			<div class="vrc-oconfirm-summary-car-cell-tax">
				<div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-cell-tax">
					<span>Tax</span>
				</div>
				<span class="vrccurrency">
					<span class="vrc_currency">$</span>
				</span>
				<span class="vrcprice">
					<span class="vrc_price">271.27</span>
				</span>
			</div>
			<div class="vrc-oconfirm-summary-car-cell-tot">
				<div class="vrc-oconfirm-summary-car-head-cell vrc-oconfirm-summary-car-cell-tot">
					<span>Total Price</span>
				</div>
				<span class="vrccurrency">
					<span class="vrc_currency">$</span>
				</span>
				<span class="vrcprice">
					<span class="vrc_price">2,983.95</span>
				</span>
			</div>
		</div>

	</div>
</div>

<form action="https://www.simbacarhire.com.au/" name="vrc" method="post" onsubmit="javascript: return checkvrcFields();">
			<div class="vrccustomfields">
				<div class="vrcdivcustomfield vrccustomfldinfo">
				<div class="vrcseparatorcf">Driver Information</div>
			</div>
					<div class="vrcdivcustomfield">
				<div class="vrc-customfield-label">
					<span class="vrcrequired"><sup>*</sup></span> 					<label id="vrcf2" for="vrcf-inp2">Name</label>				</div>
				<div class="vrc-customfield-input">
									<input type="text" name="vrcf2" id="vrcf-inp2" value="" size="40" class="vrcinput">
									</div>
			</div>
					<div class="vrcdivcustomfield">
				<div class="vrc-customfield-label">
					<span class="vrcrequired"><sup>*</sup></span> 					<label id="vrcf3" for="vrcf-inp3">Last Name</label>				</div>
				<div class="vrc-customfield-input">
									<input type="text" name="vrcf3" id="vrcf-inp3" value="" size="40" class="vrcinput">
									</div>
			</div>
					<div class="vrcdivcustomfield">
				<div class="vrc-customfield-label">
					<span class="vrcrequired"><sup>*</sup></span> 					<label id="vrcf4" for="vrcf-inp4">e-Mail</label>				</div>
				<div class="vrc-customfield-input">
									<input type="text" name="vrcf4" id="vrcf-inp4" value="" size="40" class="vrcinput">
									</div>
			</div>
					<div class="vrcdivcustomfield">
				<div class="vrc-customfield-label">
										<label id="vrcf5" for="vrcf-inp5">Phone</label>				</div>
				<div class="vrc-customfield-input">
                <input type="text" name="vrcf5" id="vrcf-inp5" value="" size="40" class="vrcinput">
					</div>
			</div>
					<div class="vrcdivcustomfield">
				<div class="vrc-customfield-label">
										<label id="vrcf6" for="vrcf-inp6">Address</label>				</div>
				<div class="vrc-customfield-input">
									<input type="text" name="vrcf6" id="vrcf-inp6" value="" size="40" class="vrcinput">
									</div>
			</div>
					<div class="vrcdivcustomfield">
				<div class="vrc-customfield-label">
										<label id="vrcf7" for="vrcf-inp7">Zip Code</label>				</div>
				<div class="vrc-customfield-input">
									<input type="text" name="vrcf7" id="vrcf-inp7" value="" size="40" class="vrcinput">
									</div>
			</div>
					<div class="vrcdivcustomfield">
				<div class="vrc-customfield-label">
										<label id="vrcf8" for="vrcf-inp8">City</label>				</div>
				<div class="vrc-customfield-input">
									<input type="text" name="vrcf8" id="vrcf-inp8" value="" size="40" class="vrcinput">
									</div>
			</div>
					<div class="vrcdivcustomfield">
				<div class="vrc-customfield-label">
					<span class="vrcrequired"><sup>*</sup></span> <label id="vrcf9" for="vrcf-inp9">Country</label>				</div>
				<div class="vrc-customfield-input">
					<select name="vrcf9" class="vrcf-countryinp"><option value=""></option>
<option value="AFG::Afghanistan">Afghanistan</option>
<option value="ALB::Albania">Albania</option>
<option value="DZA::Algeria">Algeria</option>
<option value="ASM::American Samoa">American Samoa</option>
<option value="AND::Andorra">Andorra</option>
<option value="AGO::Angola">Angola</option>
<option value="AIA::Anguilla">Anguilla</option>
<option value="ATA::Antarctica">Antarctica</option>
<option value="ATG::Antigua and Barbuda">Antigua and Barbuda</option>
<option value="ARG::Argentina">Argentina</option>
<option value="ARM::Armenia">Armenia</option>
<option value="ABW::Aruba">Aruba</option>
<option value="AUS::Australia">Australia</option>
<option value="AUT::Austria">Austria</option>
<option value="AZE::Azerbaijan">Azerbaijan</option>
<option value="BHS::Bahamas">Bahamas</option>
<option value="BHR::Bahrain">Bahrain</option>
<option value="BGD::Bangladesh">Bangladesh</option>
<option value="BRB::Barbados">Barbados</option>
<option value="BLR::Belarus">Belarus</option>
<option value="BEL::Belgium">Belgium</option>
<option value="BLZ::Belize">Belize</option>
<option value="BEN::Benin">Benin</option>
<option value="BMU::Bermuda">Bermuda</option>
<option value="BTN::Bhutan">Bhutan</option>
<option value="BOL::Bolivia">Bolivia</option>
<option value="BIH::Bosnia and Herzegowina">Bosnia and Herzegowina</option>
<option value="BWA::Botswana">Botswana</option>
<option value="BVT::Bouvet Island">Bouvet Island</option>
<option value="BRA::Brazil">Brazil</option>
<option value="IOT::British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="BRN::Brunei Darussalam">Brunei Darussalam</option>
<option value="BGR::Bulgaria">Bulgaria</option>
<option value="BFA::Burkina Faso">Burkina Faso</option>
<option value="BDI::Burundi">Burundi</option>
<option value="KHM::Cambodia">Cambodia</option>
<option value="CMR::Cameroon">Cameroon</option>
<option value="CAN::Canada">Canada</option>
<option value="XCA::Canary Islands">Canary Islands</option>
<option value="CPV::Cape Verde">Cape Verde</option>
<option value="CYM::Cayman Islands">Cayman Islands</option>
<option value="CAF::Central African Republic">Central African Republic</option>
<option value="TCD::Chad">Chad</option>
<option value="CHL::Chile">Chile</option>
<option value="CHN::China">China</option>
<option value="CXR::Christmas Island">Christmas Island</option>
<option value="CCK::Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
<option value="COL::Colombia">Colombia</option>
<option value="COM::Comoros">Comoros</option>
<option value="COG::Congo">Congo</option>
<option value="COK::Cook Islands">Cook Islands</option>
<option value="CRI::Costa Rica">Costa Rica</option>
<option value="CIV::Cote D'Ivoire">Cote D'Ivoire</option>
<option value="HRV::Croatia">Croatia</option>
<option value="CUB::Cuba">Cuba</option>
<option value="CYP::Cyprus">Cyprus</option>
<option value="CZE::Czech Republic">Czech Republic</option>
<option value="DNK::Denmark">Denmark</option>
<option value="DJI::Djibouti">Djibouti</option>
<option value="DMA::Dominica">Dominica</option>
<option value="DOM::Dominican Republic">Dominican Republic</option>
<option value="TMP::East Timor">East Timor</option>
<option value="XET::East Timor">East Timor</option>
<option value="ECU::Ecuador">Ecuador</option>
<option value="EGY::Egypt">Egypt</option>
<option value="SLV::El Salvador">El Salvador</option>
<option value="GNQ::Equatorial Guinea">Equatorial Guinea</option>
<option value="ERI::Eritrea">Eritrea</option>
<option value="EST::Estonia">Estonia</option>
<option value="ETH::Ethiopia">Ethiopia</option>
<option value="FLK::Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
<option value="FRO::Faroe Islands">Faroe Islands</option>
<option value="FJI::Fiji">Fiji</option>
<option value="FIN::Finland">Finland</option>
<option value="FRA::France">France</option>
<option value="GUF::French Guiana">French Guiana</option>
<option value="PYF::French Polynesia">French Polynesia</option>
<option value="ATF::French Southern Territories">French Southern Territories</option>
<option value="GAB::Gabon">Gabon</option>
<option value="GMB::Gambia">Gambia</option>
<option value="GEO::Georgia">Georgia</option>
<option value="DEU::Germany">Germany</option>
<option value="GHA::Ghana">Ghana</option>
<option value="GIB::Gibraltar">Gibraltar</option>
<option value="GRC::Greece">Greece</option>
<option value="GRL::Greenland">Greenland</option>
<option value="GRD::Grenada">Grenada</option>
<option value="GLP::Guadeloupe">Guadeloupe</option>
<option value="GUM::Guam">Guam</option>
<option value="GTM::Guatemala">Guatemala</option>
<option value="GIN::Guinea">Guinea</option>
<option value="GNB::Guinea-bissau">Guinea-bissau</option>
<option value="GUY::Guyana">Guyana</option>
<option value="HTI::Haiti">Haiti</option>
<option value="HMD::Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
<option value="HND::Honduras">Honduras</option>
<option value="HKG::Hong Kong">Hong Kong</option>
<option value="HUN::Hungary">Hungary</option>
<option value="ISL::Iceland">Iceland</option>
<option value="IND::India">India</option>
<option value="IDN::Indonesia">Indonesia</option>
<option value="IRN::Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
<option value="IRQ::Iraq">Iraq</option>
<option value="IRL::Ireland">Ireland</option>
<option value="ISR::Israel">Israel</option>
<option value="ITA::Italy">Italy</option>
<option value="JAM::Jamaica">Jamaica</option>
<option value="JPN::Japan">Japan</option>
<option value="XJE::Jersey">Jersey</option>
<option value="JOR::Jordan">Jordan</option>
<option value="KAZ::Kazakhstan">Kazakhstan</option>
<option value="KEN::Kenya">Kenya</option>
<option value="KIR::Kiribati">Kiribati</option>
<option value="PRK::Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
<option value="KOR::Korea, Republic of">Korea, Republic of</option>
<option value="KWT::Kuwait">Kuwait</option>
<option value="KGZ::Kyrgyzstan">Kyrgyzstan</option>
<option value="LAO::Lao People's Democratic Republic">Lao People's Democratic Republic</option>
<option value="LVA::Latvia">Latvia</option>
<option value="LBN::Lebanon">Lebanon</option>
<option value="LSO::Lesotho">Lesotho</option>
<option value="LBR::Liberia">Liberia</option>
<option value="LBY::Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="LIE::Liechtenstein">Liechtenstein</option>
<option value="LTU::Lithuania">Lithuania</option>
<option value="LUX::Luxembourg">Luxembourg</option>
<option value="MAC::Macau">Macau</option>
<option value="MKD::Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
<option value="MDG::Madagascar">Madagascar</option>
<option value="MWI::Malawi">Malawi</option>
<option value="MYS::Malaysia">Malaysia</option>
<option value="MDV::Maldives">Maldives</option>
<option value="MLI::Mali">Mali</option>
<option value="MLT::Malta">Malta</option>
<option value="MHL::Marshall Islands">Marshall Islands</option>
<option value="MTQ::Martinique">Martinique</option>
<option value="MRT::Mauritania">Mauritania</option>
<option value="MUS::Mauritius">Mauritius</option>
<option value="MYT::Mayotte">Mayotte</option>
<option value="MEX::Mexico">Mexico</option>
<option value="FSM::Micronesia, Federated States of">Micronesia, Federated States of</option>
<option value="MDA::Moldova, Republic of">Moldova, Republic of</option>
<option value="MCO::Monaco">Monaco</option>
<option value="MNG::Mongolia">Mongolia</option>
<option value="MSR::Montserrat">Montserrat</option>
<option value="MAR::Morocco">Morocco</option>
<option value="MOZ::Mozambique">Mozambique</option>
<option value="MMR::Myanmar">Myanmar</option>
<option value="NAM::Namibia">Namibia</option>
<option value="NRU::Nauru">Nauru</option>
<option value="NPL::Nepal">Nepal</option>
<option value="NLD::Netherlands">Netherlands</option>
<option value="ANT::Netherlands Antilles">Netherlands Antilles</option>
<option value="NCL::New Caledonia">New Caledonia</option>
<option value="NZL::New Zealand">New Zealand</option>
<option value="NIC::Nicaragua">Nicaragua</option>
<option value="NER::Niger">Niger</option>
<option value="NGA::Nigeria">Nigeria</option>
<option value="NIU::Niue">Niue</option>
<option value="NFK::Norfolk Island">Norfolk Island</option>
<option value="MNP::Northern Mariana Islands">Northern Mariana Islands</option>
<option value="NOR::Norway">Norway</option>
<option value="OMN::Oman">Oman</option>
<option value="PAK::Pakistan">Pakistan</option>
<option value="PLW::Palau">Palau</option>
<option value="PAN::Panama">Panama</option>
<option value="PNG::Papua New Guinea">Papua New Guinea</option>
<option value="PRY::Paraguay">Paraguay</option>
<option value="PER::Peru">Peru</option>
<option value="PHL::Philippines">Philippines</option>
<option value="PCN::Pitcairn">Pitcairn</option>
<option value="POL::Poland">Poland</option>
<option value="PRT::Portugal">Portugal</option>
<option value="PRI::Puerto Rico">Puerto Rico</option>
<option value="QAT::Qatar">Qatar</option>
<option value="REU::Reunion">Reunion</option>
<option value="ROU::Romania">Romania</option>
<option value="RUS::Russian Federation">Russian Federation</option>
<option value="RWA::Rwanda">Rwanda</option>
<option value="KNA::Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="LCA::Saint Lucia">Saint Lucia</option>
<option value="VCT::Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
<option value="WSM::Samoa">Samoa</option>
<option value="SMR::San Marino">San Marino</option>
<option value="STP::Sao Tome and Principe">Sao Tome and Principe</option>
<option value="SAU::Saudi Arabia">Saudi Arabia</option>
<option value="SEN::Senegal">Senegal</option>
<option value="SRB::Serbia">Serbia</option>
<option value="SYC::Seychelles">Seychelles</option>
<option value="SLE::Sierra Leone">Sierra Leone</option>
<option value="SGP::Singapore">Singapore</option>
<option value="MAF::Sint Maarten (French Antilles)">Sint Maarten (French Antilles)</option>
<option value="SXM::Sint Maarten (Netherlands Antilles)">Sint Maarten (Netherlands Antilles)</option>
<option value="SVK::Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
<option value="SVN::Slovenia">Slovenia</option>
<option value="SLB::Solomon Islands">Solomon Islands</option>
<option value="SOM::Somalia">Somalia</option>
<option value="ZAF::South Africa">South Africa</option>
<option value="SGS::South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
<option value="ESP::Spain">Spain</option>
<option value="LKA::Sri Lanka">Sri Lanka</option>
<option value="XSB::St. Barthelemy">St. Barthelemy</option>
<option value="XSE::St. Eustatius">St. Eustatius</option>
<option value="SHN::St. Helena">St. Helena</option>
<option value="SPM::St. Pierre and Miquelon">St. Pierre and Miquelon</option>
<option value="SDN::Sudan">Sudan</option>
<option value="SUR::Suriname">Suriname</option>
<option value="SJM::Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
<option value="SWZ::Swaziland">Swaziland</option>
<option value="SWE::Sweden">Sweden</option>
<option value="CHE::Switzerland">Switzerland</option>
<option value="SYR::Syrian Arab Republic">Syrian Arab Republic</option>
<option value="TWN::Taiwan">Taiwan</option>
<option value="TJK::Tajikistan">Tajikistan</option>
<option value="TZA::Tanzania, United Republic of">Tanzania, United Republic of</option>
<option value="THA::Thailand">Thailand</option>
<option value="DRC::The Democratic Republic of Congo">The Democratic Republic of Congo</option>
<option value="TGO::Togo">Togo</option>
<option value="TKL::Tokelau">Tokelau</option>
<option value="TON::Tonga">Tonga</option>
<option value="TTO::Trinidad and Tobago">Trinidad and Tobago</option>
<option value="TUN::Tunisia">Tunisia</option>
<option value="TUR::Turkey">Turkey</option>
<option value="TKM::Turkmenistan">Turkmenistan</option>
<option value="TCA::Turks and Caicos Islands">Turks and Caicos Islands</option>
<option value="TUV::Tuvalu">Tuvalu</option>
<option value="UGA::Uganda">Uganda</option>
<option value="UKR::Ukraine">Ukraine</option>
<option value="ARE::United Arab Emirates">United Arab Emirates</option>
<option value="GBR::United Kingdom">United Kingdom</option>
<option value="USA::United States">United States</option>
<option value="UMI::United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="URY::Uruguay">Uruguay</option>
<option value="UZB::Uzbekistan">Uzbekistan</option>
<option value="VUT::Vanuatu">Vanuatu</option>
<option value="VAT::Vatican City State (Holy See)">Vatican City State (Holy See)</option>
<option value="VEN::Venezuela">Venezuela</option>
<option value="VNM::Viet Nam">Viet Nam</option>
<option value="VGB::Virgin Islands (British)">Virgin Islands (British)</option>
<option value="VIR::Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
<option value="WLF::Wallis and Futuna Islands">Wallis and Futuna Islands</option>
<option value="ESH::Western Sahara">Western Sahara</option>
<option value="YEM::Yemen">Yemen</option>
<option value="ZMB::Zambia">Zambia</option>
<option value="ZWE::Zimbabwe">Zimbabwe</option>
</select>				</div>
			</div>
					<div class="vrcdivcustomfield">
				<div class="vrc-customfield-label">
					<span class="vrcrequired"><sup>*</sup></span> <label id="vrcf10" for="vrcf-inp10">Date of Birth</label>				</div>
				<div class="vrc-customfield-input vrc-customfield-input-date">
					<input type="text" name="vrcf10" id="vrcf-inp10" value="" size="40" class="vrcinput hasDatepicker">
				</div>
			</div>

					<div class="vrcdivcustomfield">
				<div class="vrc-customfield-label">
										<label id="vrcf11" for="vrcf-inp11">Flight Number</label>				</div>
				<div class="vrc-customfield-input">
									<input type="text" name="vrcf11" id="vrcf-inp11" value="" size="40" class="vrcinput">
									</div>
			</div>
					<div class="vrcdivcustomfield">
				<div class="vrc-customfield-label">
					<label id="vrcf12" for="vrcf-inp12">Notes</label>				</div>
				<div class="vrc-customfield-input">
					<textarea name="vrcf12" id="vrcf-inp12" rows="5" cols="30" class="vrctextarea"></textarea>
				</div>
			</div>
					<div class="vrcdivcustomfield vrc-oconfirm-cfield-entry-checkbox">
				<div class="vrc-customfield-label">
					<span class="vrcrequired"><sup>*</sup></span> <a href="https://www.simbacarhire.com.au/wp-content/uploads/2021/09/Simba-Car-Rental-Agreement.pdf" id="vrcf13" rel="{handler: 'iframe', size: {x: 750, y: 600}}" target="_blank" class="vrcmodal">I agree to the terms and conditions</a>				</div>
				<div class="vrc-customfield-input">
					<input type="checkbox" name="vrcf13" id="vrcf-inp13" value="Yes">
				</div>
			</div>
				</div>
				<input type="hidden" name="days" value="27">
				<input type="hidden" name="pickup" value="1650619800">
		<input type="hidden" name="release" value="1652952600">
		<input type="hidden" name="car" value="9">
		<input type="hidden" name="prtar" value="87">
		<input type="hidden" name="priceid" value="1">
		<input type="hidden" name="optionals" value="8:1;9:1;">
		<input type="hidden" name="totdue" value="2983.9525">
		<input type="hidden" name="place" value="2">
		<input type="hidden" name="returnplace" value="2">
				<input type="hidden" name="viktoken" value="1064625688f97590a1.57610782">
<input type="hidden" id="vikwp_nonce" name="vikwp_nonce" value="25dd4da35b"><input type="hidden" name="_wp_http_referer" value="/">		<input type="hidden" name="task" value="saveorder">
			<div class="vrc-oconfirm-paym-block">
		<h4 class="vrc-medium-header">Payment Method</h4>
		<ul class="vrc-noliststyletype">
				<li class="vrc-gpay-licont vrc-gpay-licont-active">
				<input type="radio" name="gpayid" value="4" id="gpay4" checked="checked" >
				<label for="gpay4">
					<span class="vrc-paymeth-info">Total Payment (+<span class="">1.50</span> <span class="">%</span>)</span>
				</label>
						<span class="vrc-payment-image">
					<label for="gpay4">
						<img src="https://www.simbacarhire.com.au/wp-content/uploads/2021/10/Simba_Final_webPNG.png" alt="Total Payment">
					</label>
				</span>
						</li>
				</ul>
	     </div>

			<div class="vrc-oconfirm-footer">
			<div class="vrc-goback-block">
				<a href="https://www.simbacarhire.com.au/?task=showprc&amp;caropt=9&amp;days=27&amp;pickup=1650619800&amp;release=1652952600&amp;place=2&amp;returnplace=2" class="btn vrc-pref-color-btn-secondary">Back</a>
			</div>
			<div class="vrc-save-order-block">
				<input type="submit" name="saveorder" value="Confirm Order" class="btn booknow vrc-pref-color-btn">
			</div>
		</div>
			<input type="hidden" name="Itemid" value="10">
			</form>




  </div>
</div>

</div>
      </div>

  </div>



</section>




 @include('users.footer')
