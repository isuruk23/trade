<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\WithdrawalController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\User\DashboardController as UserDashboard;
use App\Http\Controllers\Admin\KycController as AdminKycController;
use App\Http\Controllers\User\KycController as UserKycController;
use App\Http\Controllers\Admin\UserController;


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/platform', [PageController::class, 'platform'])->name('platform');
Route::get('/plan', [PageController::class, 'plan'])->name('plan');
Route::get('/trade', [PageController::class, 'trade'])->name('trade');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');


Route::middleware('auth')->group(function(){

Route::get('/dashboard',[UserDashboard::class,'index']);

Route::get('/kyc',[UserKycController::class,'create']);
Route::post('/kyc',[UserKycController::class,'store']);

Route::get('/deposit', [DepositController::class, 'create'])
    ->name('deposit.create');

Route::post('/deposit', [DepositController::class, 'store'])
    ->name('deposit.store');

Route::get('/withdraw', [WithdrawalController::class, 'create'])
    ->name('withdraw.create');

Route::post('/withdraw', [WithdrawalController::class, 'store'])
    ->name('withdraw.store');




Route::middleware(['auth','admin'])
    ->prefix('admin')
    ->group(function () {

        Route::get('/dashboard',[AdminDashboard::class,'index']);
        Route::get('/transactions',[TransactionController::class,'index']);
        Route::get('/deposits',[TransactionController::class,'deposits']);
        Route::get('/withdrawals',[TransactionController::class,'withdrawals']);
        Route::post('/transactions/{id}/approve',[TransactionController::class,'approve'])
            ->name('admin.tx.approve');
        Route::get('/kyc',[AdminKycController::class,'index']);
        Route::post('/kyc/{id}/approve',[AdminKycController::class,'approve'])->name('admin.kyc.approve');
        Route::post('/kyc/{id}/reject',[AdminKycController::class,'reject'])->name('admin.kyc.reject');

        Route::get('/users',[UserController::class,'index'])->name('admin.users');
        Route::get('/users/active',[UserController::class,'active'])->name('admin.users.active');
        Route::get('/users/suspended',[UserController::class,'suspended'])->name('admin.users.suspended');
});
});

