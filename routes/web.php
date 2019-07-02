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

Route::get('/','HomeController@category');

Route::post('/','HomeController@category');

Route::get('local/a-vendre','HomeController@aVendre');

Route::get('local/a-louer','HomeController@aLouer');

Route::get('/rechercher-quelqu-un','HomeController@recherche');

Route::get('/ville/{ville}','HomeController@ville');

Route::get('deleteAd/{id}','HomeController@deleteAd')->middleware('auth');

Route::get('/nouveau-annonce', 'HomeController@new')->middleware('auth');

Route::post('/save-new-ad','HomeController@addNewAd')->middleware('auth');

Route::get('annonces/ville/{name}', 'HomeController@getCity');

Route::get('annonces/recherche/{etat}', 'HomeController@getAdsOrder');

Route::get('annonce/{id}/{title}','HomeController@single');

Route::get('/mon-compte','HomeController@account')->middleware('auth');

Route::get('/compte/annonces','HomeController@myAds')->middleware('auth');

Route::get('/aide/conseils','HomeController@help');

Route::get('/conditions/utilisation','HomeController@conditions');

Route::get('/contactez/nous','HomeController@contact');

Route::get('/qui/nous/somme','HomeController@who');



Route::post('/auth/register','LoginController@register');

Route::post('/auth/login','LoginController@login');

Route::post('/auth/reset','LoginController@reset');

Route::get('/confirmation-mail','LoginController@confirmationMailBlade');

Route::post('/confirmation-mail','LoginController@confirmationMailBlade');

Route::post('/auth/confirmation/email','LoginController@confirmationMail')->middleware('auth');

Route::get('/logout','LoginController@logout')->middleware('auth');

Route::post('/changeInfo','LoginController@changeInfo')->middleware('auth');

Route::post('/changePassword','LoginController@changePassword')->middleware('auth');

Route::post('/active/compte/par/email','LoginController@activatePerMail');

Route::get('/reset/{token}','LoginController@resetLastStep');

Route::post('/reset/{token}','LoginController@resetLastStep');

Route::get('/confirm/{token}','LoginController@confirmAccount');

//Route::get('/compte/{id}/modifier-mon-annonce','HomeController@modifymyAds')->middleware('auth');

