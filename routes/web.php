<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AuthController::class, 'index']);
Route::post('login', [AuthController::class, 'postLogin'])->name('login'); 

Route::middleware(['protectedPages'])->group(function () {
    // User Routes
    Route::get('register', [AuthController::class, 'registration']);
    Route::post('registration', [AuthController::class, 'postRegistration'])->name('registration'); 
    Route::get('home', [AuthController::class, 'home']); 
    Route::get('logout', [AuthController::class, 'logout']);

    // Forms Route
    Route::get('forms', [FormController::class, 'create']);
    Route::post('area-head', [FormController::class, 'areaHeadReport'])->name('area-head');
    Route::post('area-sup-question', [FormController::class, 'areaSupQuestions'])->name('area-sup-question');
    Route::post('community-rep', [FormController::class, 'communityReport'])->name('community-rep');
    Route::post('district-level', [FormController::class, 'districtLevelMonitor'])->name('district-level');
    Route::post('district-past-question', [FormController::class, 'districtPastorQuestion'])->name('district-past-question');
    Route::post('district-past-report', [FormController::class, 'districtPastorReport'])->name('district-past-report');
    Route::post('local-evangelism', [FormController::class, 'localEvangelism'])->name('local-evangelism');
    Route::post('local-level', [FormController::class, 'localLevelQuestion'])->name('local-level');
    Route::post('member-report', [FormController::class, 'memberReport'])->name('member-report');
    Route::post('monitor-report', [FormController::class, 'monitorsReport'])->name('monitor-report');

    // Report Routes
    Route::get('report', [ReportController::class, 'index']);
    Route::post('report-post', [ReportController::class, 'report'])->name('report-post');

    // Export Routes 
    Route::get('local-ev/{distination}/{name}', [ReportController::class, 'exportToExcelLocalEvange']);
    Route::get('area-head-r/{distination}/{name}', [ReportController::class, 'exportToExcelAreaHeadReport']);
    Route::get('area-sup-r/{distination}', [ReportController::class, 'exportToExcelAreaSup']);
    Route::get('community/{distination}/{name}', [ReportController::class, 'exportToExcelCommunityReport']);
    Route::get('dist-level-m/{distination}/{name}', [ReportController::class, 'exportToExcelDistrictLevelMonoter']);
    Route::get('dist-past-q/{distination}', [ReportController::class, 'exportToExcelDistrictPastorQuestion']);
    Route::get('dist-past-r/{distination}/{name}', [ReportController::class, 'exportToExcelDistrictPastorReport']);
    Route::get('local-level/{distination}/{name}', [ReportController::class, 'exportToExcelLocalLevelQuestion']);
    Route::get('member-r/{distination}/{name}', [ReportController::class, 'exportToExcelMemberReport']);
    Route::get('moniter-r/{distination}/{name}', [ReportController::class, 'exportToExcelMonitorReport']);

});
