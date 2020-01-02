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

use App\User;
use App\Notifications\NewUser;

//notification of new user
// Route::get('/new_user', function(){
//    User::find(1)->notify(new NewUser);
//    return Redirect::to('/login/');
// });



//auth
Auth::routes();

Route::get('/signin','PageController@login');
Route::get('/logout', 'PageController@logout');




//admin
Route::get('/admin','AdminController@index');
Route::get('/accoms_add','AdminController@accoms_add');
Route::post('/accoms_create','AdminController@add');
Route::post('/add_h','AdminController@add_h');
Route::get('/at','AdminController@at');




//landing
Route::get('/','PageController@index');




//home
Route::get('/home', 'HomeController@index')->name('home');




//posts
//create
Route::post('posts_create','PostsController@store');
//show post
Route::get('posts_show/{post}','PostsController@show');
//delete post
Route::delete('destroy_post/{post_id}','PostsController@destroy');



//likes
Route::post('/like','LikeController@store');
Route::post('/unlike/{post_id}','LikeController@destroy');

//dislikes
Route::post('/dislike','DislikeController@store');
Route::post('/undislike/{post_id}','DislikeController@destroy');


//shares
Route::post('/share','ShareController@store');
Route::post('/unshare/{post_id}','ShareController@destroy');

//comments
Route::post('/comment','CommentController@store');
Route::post('/uncomment/{post_id}','CommentController@destroy');













//side nav
Route::view('/sidenav','layouts.sidenav');




//accommodations 
Route::get('accommodation','AccommodationController@index');
//appartments
//single bedroom
Route::get('/sb_appartments','AccommodationController@sb_appartments');
// double + bedrooms
Route::get('/db_appartments','AccommodationController@db_appartments');
//user-view all
Route::get('/all_appartments','AccommodationController@all_appartments');
//appartments-admin
//add
Route::get('add_a','AppartmentController@index');
Route::post('/addz_a','AppartmentController@add_a');
//view-all
Route::get('/appts_admin_view','AppartmentController@admin_view');
//hostels
Route::get('/hostels', 'HostelController@index');
// single sex
Route::get('/ss_hostels', 'HostelController@ss_hostels')->name('ss_hostels');
// mexed sex
Route::get('/ms_hostels', 'HostelController@ms_hostels')->name('ms_hostels');
//hostel-admin
//add
Route::get('add_h','HostelController@create');
//view
Route::get('/hostels_admin_view','HostelController@admin_view');





//at
Route::get('airtime','AirtimeController@index');
Route::get('at-self','AirtimeController@self_at');
Route::post('buy_self','AirtimeController@buy_self');
Route::get('at-other','AirtimeController@other_at');
Route::get('at-others','AirtimeController@others_at');



// transport 
Route::get('transport','TransportController@index');
//riders page
Route::get('riders','TransportController@riders')->name('riders');
//drivers page
Route::get('drivers','TransportController@drivers');



//food 
Route::get('food','FoodController@index');
//add provider
Route::get('/add_food','AdminController@add_food');
Route::post('add_f_provider','FoodController@add_f_provider');
// admin view 
Route::get('/food_admin','FoodController@admin_view');
//provider 
Route::get('provider','FoodController@provider');




// cleaning
Route::get('cleaning','CleaningController@index');




//wallet
Route::get('wallet','WalletController@index');
Route::get('transactions','WalletController@transactions');




//messages 
Route::get('/messages/{inbox}','MessageController@index');
//send messages 
Route::post('/send_message','MessageController@send_message');
//inbox
Route::get('/inbox/{name}','MessageController@inbox');
//sent
Route::get('sent','MessageController@sent');
//chat
Route::get('chat','MessageController@chat');
//sms
Route::get('sms','MessageController@sms');
//send sms
Route::post('send_sms','MessageController@send_sms');
//bulk sms
Route::get('bulk_sms','MessageController@bulk_sms');
//notification messages
Route::get('/notification','MessageController@notification_message');




// explore ozz
Route::get('explore','PageController@explore');




//profiles
//user profile
Route::get('profile','PageController@profile');
//cleaners
Route::get('cl_profile','People@cl_profile');
//user wall or landing page
Route::get('/user/{name}','People@show_user');





