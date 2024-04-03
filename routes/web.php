<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AdhocController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ChurchCalenderController;
use App\Http\Controllers\ChurchWorkerAccountController;
use App\Http\Controllers\ChurchWorkerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DebtorAccountController;
use App\Http\Controllers\DebtorController;
use App\Http\Controllers\DepartmentAccontController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DistrictCalenderController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\MinistryAccountController;
use App\Http\Controllers\MinistryController;
use App\Http\Controllers\OfferingController;
use App\Http\Controllers\PastorCalenderController;
use App\Http\Controllers\PastorController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentTypeController;
use App\Http\Controllers\PledgeController;
use App\Http\Controllers\PrayerRequestController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VisitingPastorController;
use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;


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

Route::middleware(['auth', 'force.password.change', 'prevent.back.history', 'disable.login'])->group(function () {
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('activity/logs', [ActivityController::class, 'logs'])->name('logs');
    Route::get('activity/user-activity', [ActivityController::class, 'userActivity'])->name('userActivity');
    Route::get('profile/security', [UserProfileController::class, 'security'])->name('security');
    Route::get('profile/activity', [UserProfileController::class, 'activity'])->name('activity');
    Route::resource('adhocgroup', 'AdhocController');
   // Route::get('/type', 'CalculatorController@type')->name('type.index');
   Route::get('/device', [CalculatorController::class, 'device'])->name('device.index');
    Route::get('/type', [CalculatorController::class, 'type'])->name('type.index');
    Route::get('/base', [CalculatorController::class, 'base'])->name('base.index');
    Route::get('/error', [CalculatorController::class, 'error'])->name('error.index');
    Route::get('/watt', [CalculatorController::class, 'watt'])->name('watt.index');
    Route::get('/department', [CalculatorController::class, 'department'])->name('department.index');
    Route::resource('calculator','\App\Http\Controllers\CalculatorController');
    Route::post('/department', [CalculatorController::class, 'departmentStore'])->name('department.store');
    Route::post('/type', [CalculatorController::class, 'typeStore'])->name('type.store');
    Route::post('/device', [CalculatorController::class, 'deviceStore'])->name('device.store');
    Route::post('/base', [CalculatorController::class, 'baseStore'])->name('baseload.store');
    Route::post('/error', [CalculatorController::class, 'errorStore'])->name('error.store');
    Route::post('/calculator', [CalculatorController::class, 'calculatorGet'])->name('calculator.get');




    Route::resources([
        'users' => UsersController::class,
        'feedback' => FeedbackController::class,
        'profile' => UserProfileController::class,
        'adhocGroup' => AdhocController::class,
        'attendance' => AttendanceController::class,
        'churchCalender' => ChurchCalenderController::class,
        'churchWorkerAccount' => ChurchWorkerAccountController::class,
        'churchWorker' => ChurchWorkerController::class,
        'debtorAccount' => DebtorAccountController::class,
        'debtor' => DebtorController::class,
        'departmentAccount' => DepartmentAccontController::class,
      //  'department' => DepartmentController::class,
        'districtCalender' => DistrictCalenderController::class,
        'donation' => DonationController::class,
        'facility' => FacilityController::class,
        'income' => IncomeController::class,
        'members' => MembersController::class,
        'ministryAccount' => MinistryAccountController::class,
        'ministry' => MinistryController::class,
        'offering' => OfferingController::class,
        'pastorCalender' => PastorCalenderController::class,
        'pastor' => PastorController::class,
        'payment' => PaymentController::class,
        'paymentType' => PaymentTypeController::class,
        'pledge'   => PledgeController::class,
        'prayerRequest' => PrayerRequestController::class,
        'project' => ProjectController::class,
        'transaction' => TransactionController::class,
        'visitingPastor' => VisitingPastorController::class,
        'visitor' => VisitorController::class,
    ]);

    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout')->withoutMiddleware(['force.password.change']);
    Route::resource('password-change', (PasswordChangeController::class))->only([
        'edit', 'update'
    ])->withoutMiddleware(['force.password.change']);
});
