<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StoreTimeController;
use App\Http\Controllers\SurveyController;
use App\Models\StoreTimeModel;
use App\Models\Survey;
use Illuminate\Support\Facades\Route;

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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('login', 'login');
    Route::get('show-result', 'showResult');
    Route::get('complete','complete');
    Route::get('terminate', 'terminate');
    Route::get('quotafull','quotafull');
    Route::post('send-mail', 'sendMailStore');
});

Route::controller(SurveyController::class)->group(function () {
    Route::prefix('redirect/')->group(function () {
        Route::get('complete','complete');
        Route::get('terminate', 'terminate');
        Route::get('quotafull','quotafull');
    });
});

Route::middleware('auth')->group(function () {
    Route::controller(AdminUserController::class)->group(function () {
        Route::get('dashboard', 'index')->name('dashboard');
        Route::get('change-password', 'changePassword');
        Route::post('change-password', 'storePassword')->name('storePassword');
    });
    Route::controller(ProjectController::class)->group(function () {
        Route::get('project', 'index');
        Route::post('project-create', 'store');
        Route::get('project-show/{id}', 'show');
        Route::post('project-is_active', 'is_Active');
        Route::post('project-delete', 'DeleteActive');
    });
 
    Route::get('survey-data/{page_no?}/{show_result?}/{uid?}/{pid?}/{sdate?}/{edate?}', [SurveyController::class, 'surveyData'])->name('items.filter');

    Route::get('/store-time/{id}', [StoreTimeController::class, 'storeClick'])->name('store.click');
});

require __DIR__ . '/auth.php';
