<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Admin\ConsultationController;
use App\Http\Controllers\Admin\DashboardController;
/*
|--------------------------------------------------------------------------
| Public Website Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/services', [WebsiteController::class, 'services'])->name('services');
Route::get('/industries', [WebsiteController::class, 'industries'])->name('industries');
Route::get('/testimonials', [WebsiteController::class, 'testimonials'])->name('testimonials');
Route::get('/blog', [WebsiteController::class, 'blog'])->name('blog');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');

/*
|--------------------------------------------------------------------------
| Book Consultation (Public)
|--------------------------------------------------------------------------
*/

Route::get('/book-consultation', [WebsiteController::class, 'consultation'])
    ->name('consultation.form');

Route::post('/book-consultation', [WebsiteController::class, 'storeConsultation'])
    ->name('consultation.store');

/*
|--------------------------------------------------------------------------
| Admin Dashboard (ADMIN ONLY)
|--------------------------------------------------------------------------
*/



/*
|--------------------------------------------------------------------------
| Admin Routes (ADMIN ONLY)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::get('/consultations', [ConsultationController::class, 'index'])
            ->name('consultations');
    });
/*
|--------------------------------------------------------------------------
| Profile Routes (Optional – Admin only)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Disable Public Registration
|--------------------------------------------------------------------------
*/

Route::get('/register', function () {
    abort(403);
});

/*
|--------------------------------------------------------------------------
| Auth Routes (Login, Logout, Password Reset)
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';