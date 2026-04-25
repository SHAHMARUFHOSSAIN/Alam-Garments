<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\ShowHome;
use App\Livewire\ShowAboutSection;
use App\Livewire\ShowMission;
use App\Livewire\ShowHistory;
use App\Livewire\ShowTeam;
use App\Livewire\Portfolio;
use App\Livewire\ShowroomPage;
use App\Livewire\CareerPage;
use App\Livewire\JobApply;
use App\Livewire\JobDetails;
use App\Livewire\ContactPage;
use App\Livewire\ConcernPage;
use App\Livewire\JobManage;
use App\Livewire\CareerManage;
use App\Livewire\AdminDashboard;
use App\Livewire\Privacy;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES (NO LOGIN REQUIRED)
|--------------------------------------------------------------------------
*/


Route::get('/', ShowHome::class)->name('home');

Route::get('/about', ShowAboutSection::class)->name('about');

Route::get('/mission', ShowMission::class)->name('mission');

Route::get('/history', ShowHistory::class)->name('history');

Route::get('/team', ShowTeam::class)->name('team');

Route::get('/portfolio', Portfolio::class)->name('portfolio');

Route::get('/showroom', ShowroomPage::class)->name('showroom');

/*
|--------------------------------------------------------------------------
| CAREER SYSTEM
|--------------------------------------------------------------------------
*/

Route::get('/careers', CareerPage::class)->name('careers');

Route::get('/apply/{id}', JobApply::class)->name('job.apply');

Route::get('/job/{id}', JobDetails::class)->name('job.details');

/*
|--------------------------------------------------------------------------
| CONTACT
|--------------------------------------------------------------------------
*/

Route::get('/contact', ContactPage::class)->name('contact');

Route::get('/concern/{slug}', ConcernPage::class)->name('concern.page');

Route::get('/privacy', Privacy::class)->name('privacy');
/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    // HR + ADMIN + SUPERADMIN
    Route::middleware(['role:hr,admin'])->group(function () {
        Route::get('/jobs/manage', JobManage::class);
        Route::get('/careers/manage', CareerManage::class);
    });

    // ADMIN + SUPERADMIN
    Route::middleware(['role:admin,superadmin'])->group(function () {
        Route::get('/admin/dashboard', AdminDashboard::class);
    });

    // SUPERADMIN ONLY
    Route::middleware(['role:superadmin'])->group(function () {
        Route::get('/superadmin', function () {
            return redirect('/admin');
        });
    });

});


