<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Livewire\Admin\Dashboards;
use \App\Http\Livewire\Admin\Offer\AddOffer;
use \App\Http\Livewire\Admin\Offer\Myoffers;
use \App\Http\Livewire\Admin\Offer\OfferDetails;
use \App\Http\Livewire\Admin\Offer\Offers;

use \App\Http\Livewire\landing\pages\Register;
use \App\Http\Livewire\landing\pages\aboutUs;
use \App\Http\Livewire\landing\pages\contactUs;
use \App\Http\Livewire\landing\pages\login;
use \App\Http\Livewire\landing\landing;





/*
use \App\Http\Livewire\landing\landing;
use \App\Http\Livewire\landing\pages\aboutUs;
use \App\Http\Livewire\landing\pages\contactUs;
use \App\Http\Livewire\landing\pages\login;
use \App\Http\Livewire\landing\pages\register;

/*

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/contact-us', contactUs::class)->name('contact-us');
Route::get('/about-us', aboutUs::class)->name('about-us');
Route::get('/register', Register::class)->name('register');

Route::get('/login', login::class)->name('login');
Route::get('/', Landing::class)->name('Landing');

Route::get('/dashboard', Dashboards::class)->name('dashboard');
Route::get('/add_offer', AddOffer::class)->name('add_offer');
Route::get('/myoffers', Myoffers::class)->name('myoffers');
Route::get('/offer_details', OfferDetails::class)->name('offer_details');
Route::get('/offers', Offers::class)->name('offers');

