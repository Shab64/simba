<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//without login routes

Route::get('/','CustomerControllers\HomeController@index')->name('home');
Route::get('/our-fleet','CustomerControllers\FleetController@index')->name('our-fleet');
Route::get('/car-detail/{id}','CustomerControllers\FleetController@single_detail_page')->name('our-fleet-detail');
//getAjaxData for online reservation
Route::post('/admin/onlineReservation/getAjaxData/{type}', 'CustomerControllers\ReservationController@getAjaxData');
Route::post('/admin/onlineReservation/add', 'CustomerControllers\ReservationController@add')->name('admin.onlineReservation.add');


//online reservation
Route::post('/add-online-reservation','CustomerControllers\ReservationController@filterCars')->name('online.reservation');


Route::group(['middleware' => 'admin'], function () {

//    dashboard routes
    Route::get('/admin','Admin@index')->name('index');
    Route::post('/admin/chartFilter','Admin@chartFilter');

    //clients routes
    Route::get('/admin/clients/{page}', 'ClientController@view_clients');
    Route::get('/admin/clients/{page}/{id}', 'ClientController@view_clients');
    Route::post('/admin/add-client', 'ClientController@add_client')->name('add-new-client');
    Route::post('/admin/edit-client/{id}', 'ClientController@update');

    //Driver routes
    Route::get('/admin/drivers','DriverController@index');
    Route::get('/admin/add_driver', 'DriverController@create');
    Route::post('/admin/add_driver', 'DriverController@store');
    Route::get('/admin/driver/remove/{id}', 'DriverController@destroy');

    //Users routes
    Route::get('/admin/users', 'Admin@users');
    Route::get('/admin/add_users', 'Admin@create');
    Route::post('/admin/add_user', 'Admin@store');
    Route::get('/admin/user/remove/{id}', 'Admin@destroy');


    //Customer routes
    Route::get('/admin/customers', 'CustomersController@index');
    Route::get('/admin/add_customer', 'CustomersController@create');
    Route::post('/admin/add_customer', 'CustomersController@store');
    Route::get('/admin/customer/remove/{id}', 'CustomersController@destroy');
    Route::get('/admin/customer/view/{page}/{id}', 'CustomersController@view');
    Route::get('/admin/customer/view/{page}/{id}', 'CustomersController@view');
    Route::get('/admin/customer/remove/{id}', 'CustomersController@destroy')->name('admin.customer-remove');


    //Vehicle routes
    Route::get('/admin/vehicles', 'VehicleController@index');
    Route::get('/admin/add_vehicle', 'VehicleController@create');
    Route::post('/admin/add_vehicle', 'VehicleController@store');
    Route::get('/admin/vehicle/remove/{id}', 'VehicleController@destroy');
    Route::get('/admin/vehicle/view/{page}', 'VehicleController@view');
    Route::get('/admin/vehicle/view/{page}/{id}', 'VehicleController@view');
    Route::get('/admin/vehicle/remove/{id}', 'VehicleController@destroy')->name('admin.vehicle-remove');


    //Reservations routes
    Route::get('/admin/reservations', 'ReservationController@index');
    Route::get('/admin/reservations/view/{page}', 'ReservationController@view');
    Route::get('/admin/add_reservation', 'ReservationController@create');
    Route::get('/admin/reservation/payments', 'ReservationController@payments');
    Route::post('/admin/reservation/filter', 'ReservationController@filter')->name('filterReservations');

    //Rto routes
    Route::get('/admin/rto', 'RtoController@index')->name('rto');
    Route::get('/admin/rto/view/{page}', 'RtoController@view')->name('rto-quotation');
    Route::get('/admin/rto/add', 'RtoController@create')->name('add-rto');
    Route::post('/admin/rto/filter', 'RtoController@filterCar')->name('admin.rto.getCar');
    Route::post('/admin/rto/getAjaxData/{type}', 'RtoController@getAjaxData');
    // Route::get('/admin/reservation/payments', 'RtoController@payments');

    //Quotation routes
    Route::get('/admin/quotations', 'QuotationController@index');
    Route::get('/admin/quotation/view/{page}', 'QuotationController@view');

    //uber
    Route::get('/admin/uber', 'UberController@index')->name('admin.uber');
    Route::get('/admin/uber/view/{page}', 'UberController@view');

    //walking reservation
    Route::post('/admin/walkingReservation/add', 'ReservationController@store')->name('admin.walkingReservation.add');
    Route::post('/admin/walkingReservation/filter', 'ReservationController@filterCar')->name('admin.walking_reservation.getCar');
    Route::post('/admin/walkingReservation/fleet_car', 'ReservationController@getFleetCar')->name('admin.walking_reservation.getfleetcar');
    Route::post('/admin/walkingReservation/agreement_price_summary', 'ReservationController@agreementPriceSummary')->name('admin.walking_reservation.agreementPriceSummary');
    Route::get('/admin/quotation/view/{page}/{id}', 'QuotationController@view');
    Route::get('/admin/reservation/view/{page}/{id}', 'ReservationController@view');
    Route::post('/admin/reservation/car_return/{id}', 'ReservationController@return_car');
    Route::post('/admin/reservation/add_customer/{post_type}', 'CustomersController@store')->name('quickCustomerAdd');
    Route::post('/admin/reservation/getCustomerForReservation', 'CustomersController@getCustomerForReservation')->name('quickCustomerget');
    Route::get('/admin/download_agreement/{reservation_id}', 'ReservationController@toPDF')->name('download_agreement');


    //addition options
    Route::get('/admin/addition_options/{type}', 'HomeController@additionalOptions')->name('addition_options');
    Route::post('/admin/addition_options/{type}', 'HomeController@additionalOptions');

    //getAjaxData for walking reservation
    Route::post('/admin/walkingReservation/getAjaxData/{type}', 'ReservationController@getAjaxData');

    //    VIKI rental
    Route::get('/admin/vikirental', 'VikiRentalController@index')->name('admin.viki_rental');
    Route::post('/admin/vikirental/add/{type}', 'VikiRentalController@store')->name('admin.viki_rental.add');
//    Route::post('/admin/vikirental/remove/{type}/{id}', 'VikiRentalController@store')->name('admin.viki_rental.add');

    //    VIKI car
    Route::get('/admin/Vikicar', 'VikicarController@index')->name('admin.viki_car');
    Route::post('/admin/Vikicar/add/{type}', 'VikicarController@store')->name('admin.viki_car.add');
    Route::get('/admin/Vikicar/carlist', 'VikicarController@create')->name('admin.viki_car.carlist');


    //    VIKI price fares table
    Route::get('/admin/vikiprice/fearsTable', 'VikiFearPriceController@index')->name('admin.viki_price.fares_table');
    Route::post('/admin/vikiprice/fearsTable', 'VikiFearPriceController@getCar')->name('admin.viki_price.fares_table.getcar');
    Route::post('/admin/vikiprice/fearsTable/update_daily_price', 'VikiFearPriceController@update_daily_price')->name('admin.viki_price.fares_table.update_daily_price');
//    Route::get('/admin/vikiprice/carlist', 'VikiFearPriceController@create')->name('admin.viki_price.carlist');

    //stripe
    Route::get('stripe', [StripeController::class, 'stripe']);
    Route::post('stripe', [StripeController::class, 'stripePost'])->name('stripe.post');







});

Route::group(['middleware' => 'customer','prefix'=>'customer'], function () {
    Route::get('/','Clients\ClientController@index');

    //client campaign
    Route::get('/campaign','Clients\ClientCampaignController@index');
    Route::get('/campaign/{page}/{id}','Clients\ClientCampaignController@view_campaign');

    //client invoice
    Route::get('/invoice','Clients\ClientInvoiceController@index');

    //client sales
    Route::get('/sales','Clients\ClientSaleController@index');
    Route::get('/sales/{page}/{id}','Clients\ClientSaleController@view_sale');
    Route::post('/sales/changeStatus','Clients\ClientSaleController@changeStatus');

    //lead task
    Route::post('/client/task/add-new-task', 'Clients\ClientLeadTaskController@store')->name('add-task');
});


Route::get('/admin/logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();



// Authentication Routes...


//Login Routes...
//Route::get('/admin/login','auth\LoginController@admin_login_view');
//Route::post('/admin/login','auth\LoginController@admin_login')->name('admin_login');
//Route::get('logout','AdminAuth\AuthController@logout');

// Registration Routes...
//Route::get('register', 'auth\RegisterController@register');
// Password Reset Routes...
//Route::get('password/reset/{token?}','Auth\PasswordController@showResetForm');

//Route::get('/home', 'HomeController@index')->name('home');
