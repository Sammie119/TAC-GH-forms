<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\EditFormController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ExportToPDFController;

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
    Route::get('profile', [AuthController::class, 'profile']);
    Route::post('post-profile', [AuthController::class, 'postProfile'])->name('post-profile');
    Route::get('user-list', [AuthController::class, 'userList']);
    Route::get('delete/{id}', [AuthController::class, 'delete']);
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('admin-edit/{id}', [AuthController::class, 'adminEdit']);
    Route::post('admin-update', [AuthController::class, 'adminUpdate'])->name('admin-update');
    Route::get('reset_password/{id}', [AuthController::class, 'resetPassword']);
    Route::post('reset_user_password', [AuthController::class, 'resetPasswordSave'])->name('reset_user_password');

    // Forms Route
    Route::get('forms', [FormController::class, 'create']);
    Route::get('assessment', [FormController::class, 'createAssessment']);
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
    Route::post('pastorassesstment', [FormController::class, 'pastorAssessmentQuestion'])->name('pastorassesstment');
    Route::post('supassesstment', [FormController::class, 'supAssessmentQuestion'])->name('supassesstment');
    Route::post('presidingassesstment', [FormController::class, 'presidingAssessment'])->name('presidingassesstment');
    Route::post('growth_questionaire', [FormController::class, 'growthQuestioniare'])->name('growth_questionaire');
    Route::post('attendance_analysis', [FormController::class, 'attendanceAnalysis'])->name('attendance_analysis');


    // Finance Routes
    Route::get('finance', [FinanceController::class, 'create']);
    Route::post('financial-policy', [FinanceController::class, 'financialPolicyReport'])->name('financial-policy');
    Route::post('procurement-policy', [FinanceController::class, 'procurementPolicyReport'])->name('procurement-policy');
    Route::post('record-books-area', [FinanceController::class, 'recordBookingArea'])->name('record-books-area');
    Route::post('record-books-district', [FinanceController::class, 'recordBookingDistrict'])->name('record-books-district');
    Route::post('record-books-local', [FinanceController::class, 'recordBookingLocal'])->name('record-books-local');
    Route::post('financial_assessment', [FinanceController::class, 'financialAssessment'])->name('financial_assessment');


    // Report Routes
    Route::get('report', [ReportController::class, 'index']);
    Route::post('report-post', [ReportController::class, 'report'])->name('report-post');

    // Export Routes  
    Route::get('local-ev/{distination}/{area}/{dist}/{loc}', [ExportController::class, 'exportToExcelLocalEvange']);
    Route::get('area-head-r/{distination}/{area}/{dist}/{loc}', [ExportController::class, 'exportToExcelAreaHeadReport']);
    Route::get('area-sup-r/{distination}', [ExportController::class, 'exportToExcelAreaSup']);
    Route::get('community/{distination}/{area}/{dist}/{loc}', [ExportController::class, 'exportToExcelCommunityReport']);
    Route::get('dist-level-m/{distination}/{area}/{dist}/{loc}', [ExportController::class, 'exportToExcelDistrictLevelMonoter']);
    Route::get('dist-past-q/{distination}', [ExportController::class, 'exportToExcelDistrictPastorQuestion']);
    Route::get('dist-past-r/{distination}/{area}/{dist}/{loc}', [ExportController::class, 'exportToExcelDistrictPastorReport']);
    Route::get('local-level/{distination}/{area}/{dist}/{loc}', [ExportController::class, 'exportToExcelLocalLevelQuestion']);
    Route::get('member-r/{distination}/{area}/{dist}/{loc}', [ExportController::class, 'exportToExcelMemberReport']);
    Route::get('moniter-r/{distination}/{area}/{dist}/{loc}', [ExportController::class, 'exportToExcelMonitorReport']);
    Route::get('financial-p/{distination}/{area}/{dist}/{loc}', [ExportController::class, 'exportToExcelFinancialPolicy']);
    Route::get('procurement-p/{distination}/{area}/{dist}/{loc}', [ExportController::class, 'exportToExcelProcurementPolicy']);
    Route::get('r-booking-area/{distination}/{area}/{dist}/{loc}', [ExportController::class, 'exportToExcelReportBookingArea']);
    Route::get('r-booking-district/{distination}/{area}/{dist}/{loc}', [ExportController::class, 'exportToExcelReportBookingDistrict']);
    Route::get('r-booking-local/{distination}/{area}/{dist}/{loc}', [ExportController::class, 'exportToExcelReportBookingLocal']);
    Route::get('pastor-ass/{distination}/{area}/{dist}/{loc}', [ExportController::class, 'exportToExcelPastorAssessment']);
    Route::get('sup-ass/{distination}/{area}/{dist}/{loc}', [ExportController::class, 'exportToExcelSupAssessment']);
    Route::get('pres-ass/{distination}/{area}/{dist}/{loc}', [ExportController::class, 'exportToExcelPresidingAssessment']);
    Route::get('growth_ques/{distination}/{area}/{dist}/{loc}', [ExportController::class, 'exportToExcelGrowthQuestionniare']);
    Route::get('fin_ass/{distination}/{area}/{dist}/{loc}', [ExportController::class, 'exportToExcelFinancialAssessment']);
    Route::get('attn_anal/{distination}/{area}/{dist}/{loc}', [ExportController::class, 'exportToExcelAttendanceAnalysis']);
    // Route::get('growth_ass/{distination}/{area}/{dist}/{loc}', [ExportController::class, 'exportToExcelGrowthAssessment']);

    // EditController Routes
    Route::get('edit-form/{id}/{form}', [EditFormController::class, 'editForm']);
    Route::delete('/delete-form/{id}/{form}', [EditFormController::class, 'delete']);

    // ChartController Route
    Route::get('view-chart/{form}/{distination}/{area}/{dist}/{loc}', [ChartsController::class, 'chartsAreaSup']);

    // Dropdowns
    Route::get('churches', [DropdownController::class, 'viewChurches']);
    Route::get('add_church', [DropdownController::class, 'addChurch']);
    Route::post('add_church_store', [DropdownController::class, 'addChurchStore'])->name('add_church_store');
    Route::get('edit_church/{id}', [DropdownController::class, 'editChurch']);
    Route::get('delete_church/{id}', [DropdownController::class, 'deleteChurch']);

    // Export to PDF Route
    // Route::get('area-head-pdf/{distination}/{area}/{dist}/{loc}', [ExportToPDFController::class, 'areaHeadPDF']);

});
