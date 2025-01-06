<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\TechnologyController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\PortTechController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\PortfolioImageController;
use App\Http\Controllers\Admin\PortfolioDetailController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SettingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $key = config('key.resume_key');
    return redirect()->to('resume?id='.$key);
});

Route::get('/admin', function () {
    return view('auth.login');
});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
Auth::routes(['register' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::controller(AboutController::class)->group(function () {
        Route::get('admin/about', 'index')->name('index.about');
        Route::get('admin/about/add', 'add')->name('about.add');
        Route::get('admin/about/edit/{id}', 'edit')->name('about.edit');
        Route::post('admin/about/store', 'store')->name('about.store');
        Route::post('admin/about/update', 'update')->name('about.update');
        Route::get('admin/about/delete/{id}', 'delete')->name('about.delete');
    });

    Route::controller(TechnologyController::class)->group(function () {
        Route::get('/admin/tech', 'index')->name('index.tech');
        Route::get('/admin/tech/add', 'add')->name('tech.add');
        Route::get('/admin/tech/edit', 'edit')->name('tech.edit');
        Route::post('/admin/tech/store', 'store')->name('tech.store');
    });

    Route::controller(ServiceController::class)->group(function () {
        Route::get('/admin/service', 'index')->name('index.service');
        Route::get('/admin/service/add', 'add')->name('service.add');
        Route::get('/admin/service/edit/{id}', 'edit')->name('service.edit');
        Route::post('/admin/service/store', 'store')->name('service.store');
        Route::post('admin/service/update', 'update')->name('service.update');
        Route::get('admin/service/delete/{id}', 'delete')->name('service.delete');
    });

    Route::controller(ExperienceController::class)->group(function () {
        Route::get('/admin/experience', 'index')->name('index.experience');
        Route::get('/admin/experience/add', 'add')->name('experience.add');
        Route::post('/admin/experience/store', 'store')->name('experience.store');
        Route::get('/admin/experience/edit/{id}', 'edit')->name('experience.edit');
        Route::post('admin/experience/update', 'update')->name('experience.update');
        Route::get('admin/experience/delete/{id}', 'delete')->name('experience.delete');
    });
    Route::controller(PortTechController::class)->group(function () {
        Route::get('/admin/port/tech', 'index')->name('index.porttech');
        Route::get('/admin/port/tech/add', 'add')->name('porttech.add');
        Route::get('/admin/port/tech/edit/{id}', 'edit')->name('porttech.edit');
        Route::post('/admin/port/tech/store', 'store')->name('porttech.store');
        Route::post('/admin/port/tech/update', 'update')->name('porttech.update');
        Route::get('admin/port/tech/delete/{id}', 'delete')->name('porttech.delete');
    });
    Route::controller(PortfolioController::class)->group(function () {
        Route::get('/admin/portfolio', 'index')->name('index.portfolio');
        Route::get('/admin/portfolio/add', 'add')->name('portfolio.add');
        Route::get('/admin/portfolio/edit/{id}', 'edit')->name('portfolio.edit');
        Route::post('/admin/portfolio/store', 'store')->name('portfolio.store');
        Route::get('admin/portfolio/delete/{id}', 'delete')->name('portfolio.delete');
    });
    Route::controller(PortfolioImageController::class)->group(function () {
        Route::get('/admin/port/image', 'index')->name('index.portfolio.image');
        Route::get('/admin/port/image/add', 'add')->name('portfolio.image.add');
       // Route::get('/admin/port/image/edit', 'edit')->name('portfolio.image.edit');
        Route::post('/admin/port/image/store', 'store')->name('portfolio.image.store');
        Route::post('/admin/port/image/update', 'update')->name('portfolio.image.update');
        Route::get('/admin/port/image/edit/{id}', 'edit')->name('portfolio.image.edit');
        Route::get('admin/port/image/delete/{id}', 'delete')->name('portfolio.image.delete');
    });

    Route::controller(PortfolioDetailController::class)->group(function () {
        Route::get('/admin/portdetail', 'index')->name('index.portfolio.detail');
        Route::get('/admin/portdetail/add', 'add')->name('portfolio.detail.add');
        Route::post('/admin/portdetail/store', 'store')->name('portfolio.detail.store');
        Route::post('/admin/portdetail/update', 'update')->name('portfolio.detail.update');
        Route::get('/admin/portdetail/edit/{id}', 'edit')->name('portfolio.detail.edit');
        Route::get('admin/portdetail/delete/{id}', 'delete')->name('portfolio.detail.delete');
    });

    Route::controller(TeamController::class)->group(function () {
        Route::get('/admin/team', 'index')->name('index.team');
        Route::get('/admin/team/add', 'add')->name('team.add');
        Route::get('/admin/team/edit/{id}', 'edit')->name('team.edit');
        Route::post('/admin/team/store', 'store')->name('team.store');
        Route::get('admin/team/delete/{id}', 'delete')->name('team.delete');
        Route::post('/admin/team/update', 'update')->name('team.update');

    });
    
    Route::controller(BlogController::class)->group(function () {
        Route::get('/admin/blog', 'index')->name('index.blog');
        Route::get('/admin/blog/add', 'add')->name('blog.add');
        Route::get('/admin/blog/edit/{id}', 'edit')->name('blog.edit');
        Route::post('/admin/blog/store', 'store')->name('blog.store');
    });

    Route::controller(ContactController::class)->group(function () {
        Route::get('/admin/contact', 'index')->name('index.contact');
        Route::get('/admin/contact/add', 'add')->name('contact.add');
        Route::get('/admin/contact/edit/{id}', 'edit')->name('contact.edit');
        Route::post('/admin/contact/store', 'store')->name('admin.contact.store');
    });
});

Route::controller(HomePageController::class)->group(function () {
    Route::get('/freelancing', 'index')->name('portfolio.page');
    Route::get('/resume', 'index')->name('portfolio.page.resume');
    Route::post('/contact/store', 'contactStore')->name('contact.store');
    Route::get('/back', 'redirectBack')->name('redirect.back');
});

Route::controller(PortfolioDetailController::class)->group(function () {
    Route::post('/detail/portfolio', 'portfolioDetail')->name('portfolio.detail');

});

Route::controller(SettingController::class)->group(function () {
    Route::get('/admin/setting', 'sloganAdd')->name('portfolio.setting');
});