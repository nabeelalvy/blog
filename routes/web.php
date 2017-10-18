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
Route::prefix('home')->group(function(){
    Route::get('/', 'GlobalController@index')->name('index');
    Route::get('/login', 'GlobalController@show_login');
    Route::post('/signin', 'GlobalController@postSignin');
    Route::post('/post', 'GlobalController@postSignup');
    Route::get('/signup', 'GlobalController@show_signup');
    Route::get('/gallery', 'GlobalController@show_gallery');
    Route::get('/photos', 'GlobalController@show_photos');
    Route::get('/videos', 'GlobalController@show_video_page');
});

Route::prefix('user')->group(function (){
    Route::get('/profile', 'UserController@profile');
    Route::get('/editprofile', 'UserController@edit_profile');
    Route::post('/udateprofile', 'UserController@update_profile');
    Route::post('/add_trip', 'UserController@add_trip');
    Route::post('/updatetrip', 'UserController@update_trip');
    Route::get('/all_trip', 'UserController@show_all_trip');
    Route::get('/photo', 'UserController@upload_photo_page');
    Route::get('/video', 'UserController@upload_video_page');
    Route::get('/upload/photo', 'UserController@upload_photo');
    Route::get('/upload/video', 'UserController@upload_video');
    Route::get('/addtrip', 'UserController@show_add_trip_page');
    Route::get('/index', 'UserController@index');
    Route::get('/logout', 'UserController@logout');
    Route::get('/gallery', 'UserController@show_gallery');
    Route::get('/photos', 'UserController@show_photos');
    Route::get('/videos', 'UserController@show_video_page');
    Route::get('/photo/comment', 'UserController@show_photo_comment_page');
    Route::get('/video/comment', 'UserController@show_video_comment_page');
    Route::post('/photo/submit', 'UserController@post_photo_comment');
    Route::post('/video/submit', 'UserController@post_video_comment');
    Route::get('/edit/trip', 'UserController@show_edit_trip_page');
});

Route::prefix('admin')->group(function(){
    Route::get('/index', 'AdminController@index');
    Route::get('/allusers', 'AdminController@show_all_users');
    Route::get('/allpcomments', 'AdminController@show_all_photo_comments');
    Route::get('/allvcomments', 'AdminController@show_all_video_comments');
    Route::get('/deleteuser', 'AdminController@delete_user');
    Route::get('/deletepcomment', 'AdminController@delete_p_comment');
    Route::get('/deletevcomment', 'AdminController@delete_v_comment');
});



Route::get('/photos/{id}', function () {
    return view('global.comment');
});

Route::get('/video/{id}', function () {
    return view('global.comment');
});
//Route::get('/photos/{id}', 'GlobalController@photos');
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::prefix('user')->group(function (){
//    Route::get('/login', 'Auth\UserLoginController@showLoginForm')->name('user.login');
//    Route::get('/login', 'Auth\UserLoginController@login')->name('user.login.submit');
//});
