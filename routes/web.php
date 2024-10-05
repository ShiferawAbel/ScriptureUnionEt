<?php

use App\Http\Controllers\admin\EventController as AdminEventController;
use App\Http\Controllers\AnnoucmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MinistryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VideoController;
use App\Models\Carousel;
use App\Models\Event;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $events = Event::all();
    $carousels = Carousel::all();
    return view('home', compact('events', 'carousels'));
});
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/donate', function () {
    return view('donate');
})->name('donate');

Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');


Route::get('/events', [EventController::class, 'index'])->name('events.index');

Route::get('/annoucments', [AnnoucmentController::class, 'index'])->name('annoucments.index');
Route::get('/annoucments/{annoucment}', [AnnoucmentController::class, 'show'])->name('annoucments.show');

Route::get('/ministries/highschool-ministry', [MinistryController::class, 'highschool'])->name('highschool-ministry');
Route::get('/ministries/church-ministry', [MinistryController::class, 'church'])->name('church-ministry');

Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');
Route::get('/videos/{video}', [VideoController::class, 'show'])->name('videos.show');
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
    Route::delete('/annoucments/{annoucment}', [App\Http\Controllers\admin\AnnoucmentController::class, 'destroy'])->name('admin.annoucments.destroy');

    Route::get('/videos', [App\Http\Controllers\admin\VideoController::class, 'index'])->name('admin.videos.index');
    Route::get('/videos/create', [App\Http\Controllers\admin\VideoController::class, 'create'])->name('admin.videos.create');
    Route::post('/videos/store', [App\Http\Controllers\admin\VideoController::class, 'store'])->name('admin.videos.store');
    Route::get('/videos/{video}', [App\Http\Controllers\admin\VideoController::class, 'show'])->name('admin.videos.show');
    Route::get('/videos/{video}/edit', [App\Http\Controllers\admin\VideoController::class, 'edit'])->name('admin.videos.edit');
    Route::patch('/videos/{video}', [App\Http\Controllers\admin\VideoController::class, 'update'])->name('admin.videos.update');
    Route::delete('/videos/{video}', [App\Http\Controllers\admin\VideoController::class, 'destroy'])->name('admin.videos.destroy');
    
    Route::get('/carousels', [App\Http\Controllers\admin\CarouselController::class, 'index'])->name('admin.carousels.index');
    Route::get('/carousels/create', [App\Http\Controllers\admin\CarouselController::class, 'create'])->name('admin.carousels.create');
    Route::post('/carousels/store', [App\Http\Controllers\admin\CarouselController::class, 'store'])->name('admin.carousels.store');
    Route::get('/carousels/{carousel}/edit', [App\Http\Controllers\admin\CarouselController::class, 'edit'])->name('admin.carousels.edit');
    Route::patch('/carousels/{carousel}', [App\Http\Controllers\admin\CarouselController::class, 'update'])->name('admin.carousels.update');
    Route::delete('/carousels/{carousel}', [App\Http\Controllers\admin\CarouselController::class, 'destroy'])->name('admin.carousels.destroy');
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
