<?php

use App\Http\Controllers\AttendingEventController;
use App\Http\Controllers\AttendingSystemController;
use App\Http\Controllers\DeleteCommentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventIndexController;
use App\Http\Controllers\EventShowController;
use App\Http\Controllers\GallaryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GalleryIndexController;
use App\Http\Controllers\LikedEventController;
use App\Http\Controllers\LikeSystemController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SavedEventController;
use App\Http\Controllers\SaveSystemController;
use App\Http\Controllers\StoreCommentController;
use App\Http\Controllers\WelcomeController;
use App\Models\Country;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeController::class)->name('welcome');
Route::get('/e',EventIndexController::class)->name('eventIndex');
Route::get('/e/{id}', EventShowController::class)->name('eventShow');
Route::get('/gallery',GalleryIndexController::class)->name('galleryIndex');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/events', EventController::class);
    Route::resource('/galleries', GalleryController::class);

    Route::get('/liked-events',LikedEventController::class)->name('likedEvents');
    Route::get('/saved-events',SavedEventController::class)->name('savedEvents');
    Route::get('/attending-events',AttendingEventController::class)->name('attendingEvents');

    Route::post('/events-like/{id}',LikeSystemController::class)->name('events.like');
    Route::post('/events-saved/{id}',SaveSystemController::class)->name('events.save');
    Route::post('/events-attending/{id}',AttendingSystemController::class)->name('events.attending');
    Route::post('/events/{id}/comments',StoreCommentController::class)->name('events.comments');
    Route::delete('/events/{id}/comments/{comment}',DeleteCommentController::class)->name('events.comments.destroy');

    Route::get('/countries/{country}/states', [LocationController::class, 'getStates']);
    Route::get('/states/{state}/cities', [LocationController::class, 'getCities']);
});

require __DIR__.'/auth.php';
