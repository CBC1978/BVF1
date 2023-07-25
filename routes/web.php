<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Livewire\Admin\Dashboards;
use \App\Http\Livewire\Admin\Offer\AddOffer;
use \App\Http\Livewire\Admin\Offer\Myoffers;
use \App\Http\Livewire\Admin\Offer\OfferDetails;
use \App\Http\Livewire\Admin\Offer\Offers;
use App\Http\Livewire\Login;
use App\Http\Livewire\Register;
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


Route::get('/login', Login::class)->name('login');


Route::get('/register', Register::class)->name('register');


Route::get('/', Dashboards::class)->name('dashboard');
Route::get('/add_offer', AddOffer::class)->name('add_offer');
Route::get('/myoffers', Myoffers::class)->name('myoffers');
Route::get('/offer_details', OfferDetails::class)->name('offer_details');
Route::get('/offers', Offers::class)->name('offers');
