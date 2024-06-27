<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChurchController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminInterfaceController;
use App\Http\Controllers\Admin\MemberInterfaceController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\AddSermonController;
use App\Http\Controllers\Admin\AddPastorController;

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

// route to display the events function.
Route::get('/events', [EventController::class, 'userindex'])->name('events');

// route to display the sermons
Route::get('/sermon', [AddSermonController::class, 'userindex'])->name('addsermon');

// route to display the pastors
Route::get('/pastor', [AddPastorController::class, 'userindex'])->name('addpastor');

// route to display blogs
Route::get('/blog', [EventController::class, 'blogindex'])->name('events');



// Route for the MemberInterface views.
Route::get('/admin/memberinterface', [MemberInterfaceController::class, 'show'])->name('memberinterface');

// Route for the Events views.
Route::get('/admin/events',  [EventController::class, 'index'])->name('events');

// Route to the events store.
Route::post('/admin/events', [EventController::class, 'store'])->name('admin.events.store');

// Route to facilitate the edit of an event.
Route::get('admin/events/{event}', [EventController::class, 'edit'])->name('events.edit');

// Route to update the elements
Route::put('admin/events/{event}', [EventController::class, 'update'])->name('events');

// Route to the edit event
// Route::get('admin/events/{event}/edit', [EventController::class, 'edit'])->name('edit');

// Route to delete an Event
Route::delete('admin/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');
//Route to the addsermons.php
Route::get('/admin/addsermon', [AddSermonController::class, 'index'])->name('addsermon');
Route::post('/admin/addsermon', [AddSermonController::class, 'store'])->name('addsermon.store');
// Route to display the Admin pastors view
Route::get('/admin/addpastor',  [AddPastorController::class, 'index'])->name('addpastor');

// Route to add pastors
Route::post('admin/addpastor', [AddPastorController::class, 'store'])->name('addpastors.store');

// Route to add new admins
Route::get('/admin/newadmin', [AdminController::class, 'adminindex'])->name('admininterface.newadmin');
Route::post('/admin/newadmin', [AdminController::class, 'store'])->name('newadmin.store');
