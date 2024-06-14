<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChurchController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminInterfaceController;
use App\Http\Controllers\Admin\MemberInterfaceController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\AddSermonController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [ChurchController::class, 'home'])->name('home');
Route::get('/about', [ChurchController::class, 'about'])->name('about');
Route::get('/events', [ChurchController::class, 'events'])->name('events');
Route::get('/contact', [ChurchController::class, 'contact'])->name('contact');
Route::get('/sermon', [ChurchController::class, 'sermon'])->name('sermon');
Route::get('/pastor', [ChurchController::class, 'pastor'])->name('pastor');


// Route::get('/contact', 'ContactController@index')->name('contact');
// Route::post('/contact', 'ContactController@store')->name('contact.store');


 Route::get('/contact', [ContactController::class, 'index'])->name('contact');
 Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


//  Route::get('/admin', 'AdminController@index');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/admininterface', [AdminInterfaceController::class, 'index'])->name('admininterface');



// Route for the MemberInterface views.
Route::get('/admin/memberinterface', [MemberInterfaceController::class, 'show'])->name('memberinterface');
// Route for the Events views.
// Route::get('/admin/events',  [EventsController::class, 'index'])->name('events');


// Route to the events store.
// Route::post('/admin/events', [EventsController::class, 'store'])->name('admin.events.store');
// Route::namespace('Admin')->group(function () {
//     Route::name('admin.events.store')->post('/events', [EventsController::class, 'store']);
// });

// Route for the Events views.
Route::get('/admin/events',  [EventController::class, 'index'])->name('events');

// Route to the events store.
Route::post('/admin/events', [EventController::class, 'store'])->name('admin.events.store');

//Route to the addsermons.php
Route::get('/admin/addsermon', [AddSermonController::class, 'index'])->name('addsermon');
Route::post('/admin/addsermon', [AddSermonController::class, 'store'])->name('addsermon.store');

