<?php

use App\Http\Controllers\admin\EventController as AdminEventController;
use App\Http\Controllers\AnnoucmentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MinistryController;
use App\Http\Controllers\ProfileController;
use App\Models\Event;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $events = Event::all();
    return view('home', compact('events'));
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/events', [EventController::class, 'index'])->name('events.index');

Route::get('/annoucments', [AnnoucmentController::class, 'index'])->name('annoucments.index');
Route::get('/annoucments/{annoucment}', [AnnoucmentController::class, 'show'])->name('annoucments.show');

Route::get('/ministries/highschool-ministry', [MinistryController::class, 'highschool'])->name('highschool-ministry');
Route::get('/ministries/church-ministry', [MinistryController::class, 'church'])->name('church-ministry');

// Admin Side
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\admin\AdminController::class, 'index'])->name('admin.index');

    Route::get('/events', [App\Http\Controllers\admin\EventController::class, 'index'])->name('admin.events.index');
    Route::get('/events/create', [App\Http\Controllers\admin\EventController::class, 'create'])->name('admin.events.create');
    Route::post('/events/store', [App\Http\Controllers\admin\EventController::class, 'store'])->name('admin.events.store');
    Route::get('/events/{event}', [App\Http\Controllers\admin\EventController::class, 'show'])->name('admin.events.show');
    Route::get('/events/{event}/edit', [App\Http\Controllers\admin\EventController::class, 'edit'])->name('admin.events.edit');
    Route::patch('/events/{event}', [App\Http\Controllers\admin\EventController::class, 'update'])->name('admin.events.update');
    Route::delete('/events/{event}', [App\Http\Controllers\admin\EventController::class, 'destroy'])->name('admin.events.destroy');

    Route::get('/annoucments', [App\Http\Controllers\admin\AnnoucmentController::class, 'index'])->name('admin.annoucments.index');
    Route::get('/annoucments/create', [App\Http\Controllers\admin\AnnoucmentController::class, 'create'])->name('admin.annoucments.create');
    Route::post('/annoucments/store', [App\Http\Controllers\admin\AnnoucmentController::class, 'store'])->name('admin.annoucments.store');
    Route::get('/annoucments/{annoucment}', [App\Http\Controllers\admin\AnnoucmentController::class, 'show'])->name('admin.annoucments.show');
    Route::get('/annoucments/{annoucment}/edit', [App\Http\Controllers\admin\AnnoucmentController::class, 'edit'])->name('admin.annoucments.edit');
    Route::patch('/annoucments/{annoucment}', [App\Http\Controllers\admin\AnnoucmentController::class, 'update'])->name('admin.annoucments.update');
    Route::delete('/annoucments/{annoucment}/edit', [App\Http\Controllers\admin\AnnoucmentController::class, 'destroy'])->name('admin.annoucments.destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
