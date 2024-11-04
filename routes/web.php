<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\admin\EventController as AdminEventController;
use App\Http\Controllers\admin\RequestIdController;
use App\Http\Controllers\AnnoucmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MinistryController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\VideoController;
use App\Models\Carousel;
use App\Models\Event;
use App\Models\Newsletter;
use App\Models\RequestId;
use App\Models\Story;
use App\Models\Video;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Container\Attributes\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $events = Event::orderBy('start_date_time', 'asc')->take(3)->get()->map(function ($event) {
        $event->month_day_start = Carbon::parse($event->start_date_time)->format('F j');
        return $event;
    });
    
    $carousels = Carousel::all();
    $videos = Video::latest()->take(3)->get();
    $newsletters = Newsletter::latest()->take(3)->get();
    $stories = Story::latest()->orderBy('created_at', 'asc')->take(3)->get()->map(function ($story) {
        $story->month_day_start = Carbon::parse($story->created_at)->format('F j');
        return $story;
    });;
    return view('index', compact('events', 'carousels', 'videos', 'stories', 'newsletters'));
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('about', [AboutController::class, 'index'])->name('about.index');
Route::get('about/vision-mission-values', [AboutController::class, 'vision_mission_values'])->name('vision_mission_values');
Route::get('about/history', [AboutController::class, 'history'])->name('history');
Route::get('about/what-we-believe', [AboutController::class, 'what_we_believe'])->name('what_we_believe');
Route::get('about/who-we-are', [AboutController::class, 'who_we_are'])->name('who_we_are');


Route::get('/donate', function () {
    return view('donate');
})->name('donate');

Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{event:slug}', [EventController::class, 'show'])->name('events.show');

Route::get('/annoucments', [AnnoucmentController::class, 'index'])->name('annoucments.index');
Route::get('/annoucments/{annoucment}', [AnnoucmentController::class, 'show'])->name('annoucments.show');

Route::get('/ministries/studets-ministry', [MinistryController::class, 'highschool'])->name('studets-ministry');
Route::get('/ministries/church-ministry', [MinistryController::class, 'church'])->name('church-ministry');
Route::get('/ministries/family-ministry', [MinistryController::class, 'highschool'])->name('family-ministry');

Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');
Route::get('/videos/{video:slug}', [VideoController::class, 'show'])->name('videos.show');

Route::get('/newsletters', [NewsletterController::class, 'index'])->name('newsletters.index');
Route::get('/newsletters/{newsletter:slug}', [NewsletterController::class, 'show'])->name('newsletters.show');

Route::get('/stories', [StoryController::class, 'index'])->name('stories.index');
Route::get('/stories/{story:slug}', [StoryController::class, 'show'])->name('stories.show');

Route::get('/id/{request_id}', [RequestIdController::class, 'show'])->name('id.show');

Route::post('/subscibe', [SubscriptionController::class, 'store'])->name('subscribe');

// Admin Side
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\admin\AdminController::class, 'index'])->name('admin.index');
    Route::get('/events', [App\Http\Controllers\admin\EventController::class, 'index'])->name('admin.events.index');
    Route::get('/events/create', [App\Http\Controllers\admin\EventController::class, 'create'])->name('admin.events.create');
    Route::post('/events/store', [App\Http\Controllers\admin\EventController::class, 'store'])->name('admin.events.store');
    Route::get('/events/{event:slug}', [App\Http\Controllers\admin\EventController::class, 'show'])->name('admin.events.show');
    Route::get('/events/{event}/edit', [App\Http\Controllers\admin\EventController::class, 'edit'])->name('admin.events.edit');
    Route::patch('/events/{event}', [App\Http\Controllers\admin\EventController::class, 'update'])->name('admin.events.update');
    Route::delete('/events/{event}', [App\Http\Controllers\admin\EventController::class, 'destroy'])->name('admin.events.destroy');

    Route::get('/annoucments', [App\Http\Controllers\admin\AnnoucmentController::class, 'index'])->name('admin.annoucments.index');
    Route::get('/annoucments/create', [App\Http\Controllers\admin\AnnoucmentController::class, 'create'])->name('admin.annoucments.create');
    Route::post('/annoucments/store', [App\Http\Controllers\admin\AnnoucmentController::class, 'store'])->name('admin.annoucments.store');
    Route::get('/annoucments/{annoucment:slug}', [App\Http\Controllers\admin\AnnoucmentController::class, 'show'])->name('admin.annoucments.show');
    Route::get('/annoucments/{annoucment}/edit', [App\Http\Controllers\admin\AnnoucmentController::class, 'edit'])->name('admin.annoucments.edit');
    Route::patch('/annoucments/{annoucment}', [App\Http\Controllers\admin\AnnoucmentController::class, 'update'])->name('admin.annoucments.update');
    Route::delete('/annoucments/{annoucment}', [App\Http\Controllers\admin\AnnoucmentController::class, 'destroy'])->name('admin.annoucments.destroy');

    Route::get('/videos', [App\Http\Controllers\admin\VideoController::class, 'index'])->name('admin.videos.index');
    Route::get('/videos/create', [App\Http\Controllers\admin\VideoController::class, 'create'])->name('admin.videos.create');
    Route::post('/videos/store', [App\Http\Controllers\admin\VideoController::class, 'store'])->name('admin.videos.store');
    Route::get('/videos/{video:slug}', [App\Http\Controllers\admin\VideoController::class, 'show'])->name('admin.videos.show');
    Route::get('/videos/{video}/edit', [App\Http\Controllers\admin\VideoController::class, 'edit'])->name('admin.videos.edit');
    Route::patch('/videos/{video}', [App\Http\Controllers\admin\VideoController::class, 'update'])->name('admin.videos.update');
    Route::delete('/videos/{video}', [App\Http\Controllers\admin\VideoController::class, 'destroy'])->name('admin.videos.destroy');
    
    Route::get('/carousels', [App\Http\Controllers\admin\CarouselController::class, 'index'])->name('admin.carousels.index');
    Route::get('/carousels/create', [App\Http\Controllers\admin\CarouselController::class, 'create'])->name('admin.carousels.create');
    Route::post('/carousels/store', [App\Http\Controllers\admin\CarouselController::class, 'store'])->name('admin.carousels.store');
    Route::get('/carousels/{carousel}/edit', [App\Http\Controllers\admin\CarouselController::class, 'edit'])->name('admin.carousels.edit');
    Route::patch('/carousels/{carousel}', [App\Http\Controllers\admin\CarouselController::class, 'update'])->name('admin.carousels.update');
    Route::delete('/carousels/{carousel}', [App\Http\Controllers\admin\CarouselController::class, 'destroy'])->name('admin.carousels.destroy');

    Route::get('/newsletters', [App\Http\Controllers\admin\NewsletterController::class, 'index'])->name('admin.newsletters.index');
    Route::get('/newsletters/create', [App\Http\Controllers\admin\NewsletterController::class, 'create'])->name('admin.newsletters.create');
    Route::post('/newsletters/store', [App\Http\Controllers\admin\NewsletterController::class, 'store'])->name('admin.newsletters.store');
    Route::get('/newsletters/{newsletter:slug}', [App\Http\Controllers\admin\NewsletterController::class, 'show'])->name('admin.newsletters.show');
    Route::get('/newsletters/{newsletter}/edit', [App\Http\Controllers\admin\NewsletterController::class, 'edit'])->name('admin.newsletters.edit');
    Route::patch('/newsletters/{newsletter}', [App\Http\Controllers\admin\NewsletterController::class, 'update'])->name('admin.newsletters.update');
    Route::delete('/newsletters/{newsletter}', [App\Http\Controllers\admin\NewsletterController::class, 'destroy'])->name('admin.newsletters.destroy');

    Route::get('/staffs', [App\Http\Controllers\admin\StaffController::class, 'index'])->name('admin.staffs.index');
    Route::get('/staffs/create', [App\Http\Controllers\admin\StaffController::class, 'create'])->name('admin.staffs.create');
    Route::post('/staffs/store', [App\Http\Controllers\admin\StaffController::class, 'store'])->name('admin.staffs.store');
    Route::get('/staffs/{staff:slug}', [App\Http\Controllers\admin\StaffController::class, 'show'])->name('admin.staffs.show');
    Route::get('/staffs/{staff}/edit', [App\Http\Controllers\admin\StaffController::class, 'edit'])->name('admin.staffs.edit');
    Route::patch('/staffs/{staff}', [App\Http\Controllers\admin\StaffController::class, 'update'])->name('admin.staffs.update');
    Route::delete('/staffs/{staff}', [App\Http\Controllers\admin\StaffController::class, 'destroy'])->name('admin.staffs.destroy');

    Route::get('/requestIds', [App\Http\Controllers\admin\RequestIdController::class, 'index'])->name('admin.requestIds.index');
    Route::get('/export', function() {
        $request_ids = RequestId::all();
        // $pdf = PDF::loadView('id_cards_export', ['request_ids' => $request_ids]); 
        // return $pdf->download('IdCardsList.pdf');
        return view('id_cards_export', compact('request_ids'));
    })->name('admin.requestIds.export');
    Route::get('/requestIds/create', [App\Http\Controllers\admin\RequestIdController::class, 'create'])->name('admin.requestIds.create');
    Route::post('/requestIds/store', [App\Http\Controllers\admin\RequestIdController::class, 'store'])->name('admin.requestIds.store');
    Route::get('/requestIds/{request_id:slug}', [App\Http\Controllers\admin\RequestIdController::class, 'show'])->name('admin.requestIds.show');
    Route::get('/requestIds/{request_id}/edit', [App\Http\Controllers\admin\RequestIdController::class, 'edit'])->name('admin.requestIds.edit');
    Route::patch('/requestIds/{request_id}', [App\Http\Controllers\admin\RequestIdController::class, 'update'])->name('admin.requestIds.update');
    Route::delete('/requestIds/{request_id}', [App\Http\Controllers\admin\RequestIdController::class, 'destroy'])->name('admin.requestIds.destroy');

    Route::get('/stories', [App\Http\Controllers\admin\StoryController::class, 'index'])->name('admin.stories.index');
    Route::get('/stories/create', [App\Http\Controllers\admin\StoryController::class, 'create'])->name('admin.stories.create');
    Route::post('/stories/store', [App\Http\Controllers\admin\StoryController::class, 'store'])->name('admin.stories.store');
    Route::get('/stories/{story}/edit', [App\Http\Controllers\admin\StoryController::class, 'edit'])->name('admin.stories.edit');
    Route::get('/stories/{story:slug}', [App\Http\Controllers\admin\StoryController::class, 'show'])->name('admin.stories.show');
    Route::patch('/stories/{story}', [App\Http\Controllers\admin\StoryController::class, 'update'])->name('admin.stories.update');
    Route::delete('/stories/{story}', [App\Http\Controllers\admin\StoryController::class, 'destroy'])->name('admin.stories.destroy');
    Route::post('/ckfinder-upload', [App\Http\Controllers\admin\StoryController::class, 'upload'])->name('ckeditor.upload');

    Route::get('/downloadId/{request_id}', function(RequestId $request_id){
        $filePath = public_path('id_cards/'. str_replace('/', '_', $request_id->uuid) .'.png');
        return response()->download($filePath);
    })->name('downloadId');
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
