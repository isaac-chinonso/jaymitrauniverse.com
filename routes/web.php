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

Route::get('/', 'Frontend\PageController@index');

Route::get('/gill', 'Frontend\PageController@gill');

Route::get('/about-me', 'Frontend\PageController@about');

Route::get('/positions', 'Frontend\PageController@position');

Route::get('/publications', 'Frontend\PageController@publication');

Route::get('/impact-activities', 'Frontend\PageController@impact');

Route::get('/refereed-journal-articles', 'Frontend\PageController@journal');

Route::get('/login', 'Frontend\PageController@login')->name('login');

Route::post('/register', 'Admin\UserController@register');

Route::get('/logout', 'Admin\UserController@logout')->name('logout');

Route::post('/post-login', 'Admin\UserController@postlogin');

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'before' => 'admin'], function () {

    Route::get('/dashboard', 'Admin\PageController@dashboard')->name('admindashboard');

    //Home Route
    Route::get('/home-page', 'Admin\PageController@home')->name('home');

    Route::post('/save-home-page', 'Admin\PostController@savehome');

    Route::get('/home-page-details/{id}', 'Admin\PageController@homedetails')->name('homedetails');

    Route::get('/home-page-edit/{id}', 'Admin\PageController@homeedit')->name('homeedit');

    Route::post('/update-home-page/{id}', 'Admin\PostController@updatehomecontent')->name('updatehome');

    Route::get('/delete-home-content/{id}', 'Admin\PostController@deletehomecontent')->name('deletehomecontent');
    
    //about Route
    Route::get('/about-page', 'Admin\PageController@about')->name('about');

    Route::post('/save-about-page', 'Admin\PostController@saveabout');

    Route::get('/about-page-details/{id}', 'Admin\PageController@aboutdetails')->name('aboutdetails');

    Route::get('/about-page-edit/{id}', 'Admin\PageController@aboutedit')->name('aboutedit');

    Route::post('/update-about-page/{id}', 'Admin\PostController@updateaboutcontent')->name('updateabout');

    Route::get('/delete-about-content/{id}', 'Admin\PostController@deleteaboutcontent')->name('deleteaboutcontent');

    Route::post('/update-profile-section/{id}', 'Admin\PostController@saveprofile')->name('updateprofile');

    //journal Route
    Route::get('/journal-page', 'Admin\PageController@journal')->name('journal');

    Route::post('/save-journal', 'Admin\PostController@savejournal');

    Route::get('/edit-journal/{id}', 'Admin\PageController@editjournal')->name('editjournal');

    Route::post('/update-journal/{id}', 'Admin\PostController@updatejournal')->name('updatejournal');

    Route::get('/delete-journal/{id}', 'Admin\PostController@deletejournal')->name('deletejournal');

    //Publication Route
    Route::get('/publication-page', 'Admin\PageController@publication')->name('publication');

    Route::post('/save-publication', 'Admin\PostController@savepublication');

    Route::get('/add-publication', 'Admin\PageController@addpublication');

    Route::get('/edit-publication/{id}', 'Admin\PageController@editpublication')->name('editpublication');

    Route::post('/update-publication/{id}', 'Admin\PostController@updatepublication')->name('updatepublication');

    Route::get('/delete-publication/{id}', 'Admin\PostController@deletepublication')->name('deletepublication');

    //Impact Activities Route
    Route::get('/impact-activities-page', 'Admin\PageController@impact')->name('impact');

    Route::get('/add-impact-activities', 'Admin\PageController@addimpact');

    Route::post('/save-impact-activities', 'Admin\PostController@saveimpact');

    Route::get('/edit-impact/{id}', 'Admin\PageController@editimpact')->name('editimpact');

    Route::post('/update-impact/{id}', 'Admin\PostController@updateimpact')->name('updateimpact');

    Route::get('/delete-impact-activities/{id}', 'Admin\PostController@deleteimpact')->name('deleteimpact');
    
    //Position Route
    Route::get('/position-page', 'Admin\PageController@position')->name('position');

    Route::post('/save-position', 'Admin\PostController@saveposition');

    Route::post('/update-position/{id}', 'Admin\PostController@updateposition')->name('updateposition');

    Route::get('/delete-position/{id}', 'Admin\PostController@deleteposition')->name('deleteposition');
});
