<?php

use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\CustomerSiteController;
use Native\Laravel\Facades\Notification;

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

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


Route::get('/home', [MonitoringController::class, 'index'])->name('home');
Route::get('customer_sites/{customer_site}/timeline', [CustomerSiteController::class, 'timeline'])
    ->name('customer_sites.timeline');
Route::post('customer_sites/{customer_site}/check_now', [CustomerSiteController::class, 'checkNow'])
    ->name('customer_sites.check_now');
Route::resource('customer_sites', CustomerSiteController::class);



Volt::route('/', 'server.index')->name('index');

Volt::route('/create', 'server.create')->name('create');
Volt::route('/{server}/edit', 'server.update')->name('edit');

