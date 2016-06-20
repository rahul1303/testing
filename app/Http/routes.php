<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Softon\Sms\Facades\Sms;
Route::get('home',function(){
    return redirect('admin/home');
});
/*
Route::get('auth/register',function(){
    return redirect('auth/login');
});
*/
Route::get('/','bash@index');
Route::get('testing',function(){
    return view('emails.booked_email1')->with('title','Hello');
});
Route::get('our-team',function(){
    return view('bash.our-team')->with('title','Our Team');
});
Route::get('admin/combo/{id}','admin@comboView');
Route::get('admin/home','admin@index');
Route::get('admin/add-venue','admin@create');
Route::get('admin/add-combo-and-time','admin@comboTime');
Route::post('admin/store-combo','admin@storeCombo');
Route::post('admin/store-time','admin@storeTime');
Route::post('admin/store','admin@store');
Route::get('admin/view-venue','admin@view');
Route::get('admin/hide-unhide-venue','admin@hideUnhideView');
Route::get('admin/venue/hide','admin@hide');
Route::get('admin/venue/unhide','admin@unhide');
Route::post('admin/edit-multiple-form','admin@editMultiple');
Route::get('admin/booking-details','admin@bookingDetails');
Route::get('admin/order-cancelled','admin@cancelledOrder');
Route::get('view/{pub}/{city}/{venue_name}/{venue}','bash@viewVenue');
Route::get('order-cancellation','bash@cancelOrder');
Route::get('view/{pub}/{city}/{venue_name}/{venue}/book-now','bash@bookingDetails');
Route::get('ajax-date','ajax@date');
Route::get('ajax-time','ajax@time');
Route::get('ajax-combo','ajax@combo');
Route::get('ajax-promo','ajax@promo');
Route::post('your-ticket-is-booked','bash@bookNow');
Route::get('booked-emails','bash@bookNow');
Route::get('maps','bash@map');
Route::get('ajax-subscribe','ajax@subscribe');
Route::get('ajax-feedback','ajax@feedback');
Route::get('responded','ajax@responded');
Route::get('ended','ajax@ended');
Route::get('ajax-share','ajax@share');
Route::post('admin/store-terms','admin@storeTerms');
Route::get('admin/invoice','admin@invoice');
Route::get('admin/ajax-invoice','ajax@invoice');
Route::get('faq','bash@faq');
Route::get('result','bash@urlCreate');
Route::get('view/{id}','bash@show');
Route::get('ajax-latlon','ajax@latlon');
Route::get('ajax-image','ajax@image');
Route::get('ajax-budget','ajax@budget');
Route::get('ajax-relevance','ajax@relevance');
Route::get('ajax-help','ajax@help');
Route::get('ajax-cancel-order-otp','ajax@cancelOrderOtp');
Route::get('ajax-order-cancel','ajax@cancelOrder');
Route::get('terms-&-conditions','bash@termsCondition');
Route::get('careers','bash@careers');
Route::get('privacy-policy','bash@privacyPolicy');
Route::get('admin/forums','admin@forum');
Route::get('admin/ajax-forum','ajax@forum');
Route::get('admin/add-coupon','admin@coupon');
Route::get('admin/ajax-coupon','admin@postCoupon');
Route::get('admin/feedback','admin@feedback');
Route::get('email',function(){
   return view('emails.booked_email1');
});