<?php

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
//  Frontend 

use App\Http\Controllers\Backend\PublicationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;



Route::group(['namespace'=>'Frontend'],function(){

	Route::get('/','HomeController@index');
	Route::get('/about-us','PagesController@aboutUs');
	Route::get('/shop','PagesController@shop');
	Route::get('/shop/{id}','PagesController@shopDetails');
	Route::get('/shop/category/{id}','PagesController@shopCategory');
	Route::get('/blog','PagesController@blog');
	Route::get('/blog/{id}','PagesController@blogDetails');
	Route::post('/subscribe-store','PagesController@subscribeStore')->name('subscribe.store');
	Route::get('/contact','PagesController@contact');
	Route::get('/award','PagesController@award');
	Route::post('/contact/save','PagesController@contactSave');
	Route::get('illustration-work', 'PagesController@illustration');
	Route::get('papercut-commissions', 'PagesController@papercutCommissions');
	Route::get('customer-info-wholesale', 'PagesController@customerInfoWholesale');
	// ******************* Publication Page Start*********************************
	Route::get('/publication', 'PagesController@publication_view');
	Route::get('publication/id/{id}', 'PagesController@publication_details');
	
	// ******************* Publication Page End*********************************
	Route::resource('order','OrderController');
	Route::post('buynow','OrderController@buynow');
	Route::get('invoice/{id}','OrderController@invoice')->name('invoice');

	Route::group(['middleware' => 'auth'], function() {
		Route::get('/dashboard','UserController@dashboard');
		Route::get('/profile','UserController@profile');
		Route::get('/orders','UserController@orders');
		Route::post('/profile/update','UserController@updateProfile')->name('profile.update');
		Route::get('/change-password','UserController@changePassword');
		Route::post('/change-password','UserController@savePassword')->name('change.password');
		Route::get('checkout','CheckoutController@index');
		Route::get('order/{id}', 'ProductController@orderForm');
		Route::get('thankyou', 'UserController@thankYou');
	});

	
    Route::get('add/cart/{id}', 'CartController@newCart');
    Route::get('get-cart', 'CartController@getCart');
    Route::get('get-cart-data', 'CartController@getCartData');
    Route::get('remove/cart/{id}', 'CartController@removeCart');
    Route::get('update/cart/', 'CartController@updateCart');
    Route::get('shopingcart-remove/{id}', 'CartController@removeItem');

    // Shopping cart
    Route::get('shoping-cart','CartController@shopingCart');
    Route::post('blog/search','PagesController@blogSearch');
    
});




//  Backend & Admin 


//============================ Backend Route Start ============================//
Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm');
// Route::post('admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login');
Route::get('admin/register', 'Auth\AdminRegisterController@showRegistrationForm');
Route::post('admin/register', 'Auth\AdminRegisterController@register')->name('admin.register');
Route::group(['middleware'=>['assign.guard:admin,admin/login']],function(){
	Route::group(['namespace'=>'Backend'],function(){
	Route::prefix('admin')->group(function () {
		Route::get('/dashboard','HomeController@index')->name('dashboard');
		Route::resource('/roles','RoleController');
		Route::resource('/permissions','PermissionController');
		Route::get('/delete-users/{id}','UsersController@destroyUsers');
		Route::get('/edit-users/{id}', 'UsersController@editUsers');
		Route::POST('/edit-users/{id}', 'UsersController@updateUsers');
		Route::get('/change-password', 'UsersController@chnagePassword');
		Route::post('/change-password', 'UsersController@savePassword');
		Route::resource('admin','AdminController');
		Route::get('admin/index','AdminController@index');

		// Home Page Controller
		Route::resource('homepage','HomePageController');
		//  Website route
		Route::get('subscriber','SubscriberController@index');
		
		Route::get('deleteimage/{newsId}/{id}','SubscriberController@newsImageDelete');
		Route::delete('subscriber/{id}','SubscriberController@destroy')->name('subscriber.destroy');
		
		Route::resource('setting','SettingController');
		Route::resource('project_category','ProjectCategoryController');
		Route::resource('project','ProjectController');
		Route::resource('aboutus','AboutusController');
		Route::resource('blog','BlogController');
		Route::get('blogimage/{id}','BlogImageController@index');
		Route::post('blogimage/store','BlogImageController@store');
		Route::get('blogimage/delete/{id}','BlogImageController@blogimageDelete');
		Route::resource('gallery','GalleryController');
		Route::resource('blogcategory','BlogPostCategoryController');
		Route::resource('product_category','ProductCategoryController');
		Route::resource('product','ProductController');
		Route::resource('video','VideoController');
		Route::resource('/gallery-category', 'GalleryCategoryController');
		Route::resource('/testimonial','TestimonialController');
		Route::resource('/homepageimage','HomePageImageController');
		Route::resource('/gallery-category','GalleryCategoryController');
		Route::resource('/gallery','GalleryController');
		Route::resource('/contactus','ContactController');
		Route::resource('/servicecharge','ServiceChargeController');
		Route::resource('/currency','CurrencyController');

		Route::get('total/orders','HomeController@totalOrders');
		Route::get('today/orders','HomeController@todayOrders');

		Route::resource('buynow','BuyNowOrdersController');
		Route::get('total/buynow','HomeController@totalBuynow');
		Route::get('today/buynow','HomeController@todayBuynow');

		// order manage

		Route::get('/order/manage/{id}','OrderManageController@orderManage');
		Route::get('buynow/manage/{id}','OrderManageController@buyNowManage');
		Route::get('buynow/delete/{id}','OrderManageController@buyNowDelete');


		Route::get('publication/page', 'PublicationController@index')->name('publication.page');
		Route::get('publication/create', 'PublicationController@publication_create')->name('publication.create');
		Route::post('publication/store', 'PublicationController@store')->name('publication.store');
		
	});
});
});


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


