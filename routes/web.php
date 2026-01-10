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
use App\Http\Controllers\TradeController;
use App\Http\Controllers\CoinController;
use App\Http\Controllers\Auth\VerificationController;


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
Route::get('/verify-email/{token}', [VerificationController::class, 'verifyEmail'])
    ->name('email.verify.custom');

Route::get('/test-mail', function () {
    Mail::raw('Test email from Laravel', function ($msg) {
        $msg->to('isuru.k23@gmail.com')->subject('Test Mail');
    });

    return 'Mail sent';
});


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

Route::get('/trade/etx', [TradeController::class, 'tradeForm'])
        ->name('trade.etx');

Route::post('/trade/etx', [TradeController::class, 'trade'])
    ->name('trade.etx.submit');

Route::get('/my-trades', [TradeController::class, 'myTrades'])->name('trades.my');
Route::post('/my-trades/{trade}/close', [TradeController::class, 'closeTrade'])->name('trades.close');


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/dashboard');
})->middleware(['signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('success', 'Verification link sent!');
})->middleware(['throttle:6,1'])->name('verification.send');


Route::middleware(['auth','admin'])
    ->prefix('admin')
    ->group(function () {

        Route::get('/dashboard',[AdminDashboard::class,'index']);
        Route::get('/transactions',[TransactionController::class,'index']);
        Route::get('/deposits',[TransactionController::class,'deposits']);
        Route::get('/withdrawals',[TransactionController::class,'withdrawals']);
        Route::post('/transactions/{id}/approve',[TransactionController::class,'approve'])
            ->name('admin.tx.approve');
        Route::post('/transactions/{id}/reject', [TransactionController::class,'reject'])->name('admin.tx.reject');
        Route::get('/kyc',[AdminKycController::class,'index']);
        Route::post('/kyc/{id}/approve',[AdminKycController::class,'approve'])->name('admin.kyc.approve');
        Route::post('/kyc/{id}/reject',[AdminKycController::class,'reject'])->name('admin.kyc.reject');

        Route::get('/users',[UserController::class,'index'])->name('admin.users');
        Route::get('/users/active',[UserController::class,'active'])->name('admin.users.active');
        Route::get('/users/suspended',[UserController::class,'suspended'])->name('admin.users.suspended');

        Route::get('/coins', [CoinController::class, 'index'])->name('coins.index');
        Route::post('/coins', [CoinController::class, 'store'])->name('coins.store');
        
        Route::post('/coins/{coin}/update-price', [CoinController::class, 'updatePrice'])->name('admin.coins.updatePrice');
 
        Route::get('/trades', [TradeController::class, 'index'])->name('trades.index');
      

       
});
});

