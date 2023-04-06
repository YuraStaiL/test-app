<?php

use App\Http\Controllers\Auth\VerifyController;
use App\Http\Controllers\Users\CreateController;
use App\Http\Controllers\Users\IndexController as IndexUsers;
use App\Http\Controllers\Users\EditController as EditUsers;
use App\Http\Controllers\Users\UpdateController as UpdateUsers;
use App\Http\Controllers\Users\DestroyController as DeleteUser;
use App\Http\Controllers\Users\Password\UpdateController as UpdatePasswordUsers;

use App\Http\Controllers\Orders\EditController as EditOrder;
use App\Http\Controllers\Orders\UpdateController as UpdateOrder;
use App\Http\Controllers\Orders\DestroyController as DeleteOrder;
use App\Http\Controllers\Orders\CreateController as CreateOrder;
use App\Http\Controllers\Orders\StoreController as StoreOrder;

use App\Http\Controllers\Users\StoreController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;

use App\Http\Controllers\Orders\IndexController as IndexOrders;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login-process', [AuthController::class, 'login'])->name('login.process');
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.process');

Route::middleware('guest')
    ->group(function () {
        Route::get('/forgot-password', [ForgotPasswordController::class, 'forgotPassword'])
            ->name('password.forgot');
        Route::post('/forgot-password', [ForgotPasswordController::class, 'checkEmail'])
            ->name('password.email');
        Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetPassword'])
            ->name('password.reset');
        Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword'])
            ->name('password.update');
        Route::get('/verify/{token}', VerifyController::class)->name('verify');
    });


Route::middleware(['auth', 'email'])
    ->group(function () {
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');

        Route::prefix('/users')
            ->as('users.')
            ->group(function () {
                Route::get('/index', IndexUsers::class)->name('index');
                Route::get('/create', CreateController::class)->name('create');
                Route::post('/', StoreController::class)->name('store');
                Route::get('/{user}/edit', EditUsers::class)->name('edit');
                Route::post('/{user}/update', UpdateUsers::class)->name('update');
                Route::get('/{user}/destroy', DeleteUser::class)->name('destroy');
                Route::post('/{user}/password/update', UpdatePasswordUsers::class)->name('password.update');
            });
//
        Route::prefix('/orders')
            ->as('orders.')
            ->group(function () {
                Route::get('/index', IndexOrders::class)->name('index');
                Route::get('/create', CreateOrder::class)->name('create');
                Route::get('/{order}/edit', EditOrder::class)->name('edit');
                Route::post('/{order}/update', UpdateOrder::class)->name('update');
                Route::get('/{order}/destroy', DeleteOrder::class)->name('destroy');
                Route::post('/', StoreOrder::class)->name('store');
            });
    });

