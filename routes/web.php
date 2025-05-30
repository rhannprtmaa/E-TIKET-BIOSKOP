<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;


Route::get('/', function () {
    return view('landing');
})->name('landing.page');


Route::get('/films-catalog', [FilmController::class, 'index'])->name('films.index');


Route::resource('films', FilmController::class)->except(['index']);


Route::middleware('auth')->group(function () {

    Route::get('films/{film}/book', [BookingController::class, 'bookSeat'])->name('films.book');
    Route::post('films/{film}/book/checkout', [BookingController::class, 'bookCheckout'])->name('films.book.checkout');
    Route::post('films/{film}/book/confirm', [BookingController::class, 'confirmCheckout'])->name('films.book.confirm');
    Route::post('films/{transId}/cancel-transaction', [BookingController::class, 'cancelBooking'])->name('films.transaction.cancel');


    Route::get('user/profile', [UserController::class, 'index'])->name('user.profile');
    Route::get('user/history-transaction', [UserController::class, 'historyTransaction'])->name('user.history-transaction');
    Route::get('user/{id}/detail-transaction', [UserController::class, 'detailTransaction'])->name('user.detail-transaction');


    Route::post('user/top-up', [UserController::class, 'topupBalance'])->name('user.topup');
});
