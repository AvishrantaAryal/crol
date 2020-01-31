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

Route::get('/', 'FrontendController@home');
Route::get('home','FrontendController@home');
Route::get('about','FrontendController@about');
Route::get('gallery', 'FrontendController@gallery');
Route::get('contact','FrontendController@contact');

Route::post('/storecontact','ContactController@store');

//Auth::routes(['register' => false]);
Auth::routes();
Route::get('/admin', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function () {

Route::get('logout','DashboardController@logout')->name('logout');
Route::get('/admin','DashboardController@dashboard');
Route::get('cd-admin','DashboardController@home'); 
Route::post('/quickmessage','DashboardController@quickmail');
Route::get('view-all-mails','DashboardController@view');

Route::get('/deletemail/{id}','DashboardController@del');

//ADmin
Route::get('/view-all-admin','AdminController@adminshow');
Route::get('/addadmin','AdminController@add');
Route::post('/storeadmin','AdminController@storeadmin');
Route::get('/deleteadmin/{id}','AdminController@delete');
//About
Route::get('/abouts-add','AboutController@add');
Route::post('/aboutstore','AboutController@store');
Route::get('/abouts-view','AboutController@view');
Route::get('/editabout','AboutController@edit');
Route::post('/aboutupdate','AboutController@updateabout');

//CAROUSEL
Route::get('/carousel-add','CarouselController@addcarousel');
Route::get('/carousel-view','CarouselController@viewcarousel');
Route::post('/storecarousel','CarouselController@store');
Route::post('/statuscar/{id}','CarouselController@statusupdate');
Route::get('/deletecar/{id}','CarouselController@delete');


//Backgrounds
Route::get('/background-add','BackgroundController@add');
Route::get('/background-view','BackgroundController@view');
Route::post('/storebackground','BackgroundController@store');
Route::get('/editbackground','BackgroundController@edit');
Route::post('/updatebackground','BackgroundController@update');


//Gallery
Route::get('/album-add','GalleryController@add');
Route::post('/storealbum','GalleryController@store');
Route::get('/album-view','GalleryController@view');
Route::post('/statusal/{id}','GalleryController@status');
Route::get('deletealbum/{id}','GalleryController@deletealbum');


//Contact
Route::get('/createcontact','ContactController@addcontact');
Route::get('/viewcontact','ContactController@contact');
Route::get('/replies','ContactController@reply');
Route::get('/replycontact/{id}','ContactController@replyform');
Route::post('/storereply/{id}','ContactController@storereply');
Route::get('/deleteinbox/{id}','ContactController@deleteinbox');
Route::get('/deletereply/{id}','ContactController@deletereply');

//SEO
Route::get('/seo-add','SEOController@add');
Route::get('/seo-view','SEOController@view');
Route::post('/seostore','SEOController@store');
Route::get('/editseo/{id}','SEOController@edit');
Route::post('/updateseo/{id}','SEOController@updateseo');
Route::get('/deleteseo/{id}','SEOController@delete');


});