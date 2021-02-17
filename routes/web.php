<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Mail\Markdown;
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

// TODO : ROUTE HALAMAN GUEST
Route::get('/', 'IndexController@guestPage');
Route::get('/profil-sekolah', 'ProfileController@guestPage');
Route::get('/pendaftaran', 'PPDBController@guestPage');
Route::get('/galeri-foto', 'GaleriFotoController@guestPage');
Route::get('/galeri-video','GaleriVideoController@guestPage');
Route::get('/ppdb', 'PPDBController@ppdbPage');
Route::get('/struktur-organisasi', 'StrukturalController@guestPage');
Route::get('/artikel', 'ArtikelController@guestPage');


// TODO : ROUTE HALAMAN ADMIN
Auth::routes();
Auth::routes(['verify' => true]);   
Route::get('/dashboard/artikel-sekolah', 'testController@rtz');
Route::post('/panel-admin/lupa-password', 'AkunController@lupaPassword');

/* 
TODO: Route Test Dev
! Sebelum Buka link gawe database sek !! 
*/


Route::get('/dashboard', 'testController@dashboard');
Route::get('/select', 'testController@select');

Route::get('/surat', function (){
    $markdown = new Markdown(view(), config('mail.markdown'));
    return $markdown->render('vendor/mail/html/message', ['slot' => 'test']);
});





