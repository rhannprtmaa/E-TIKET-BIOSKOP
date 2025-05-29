<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. Route untuk Landing Page (sekarang menjadi halaman utama)
Route::get('/', function () {
    return view('landing'); // Akan memanggil resources/views/landing.blade.php
})->name('landing.page'); // Nama route untuk landing page

// 2. Route untuk menampilkan daftar film (fitur utama), menggunakan FilmController@index
// URL-nya kita ubah menjadi /films-catalog, TAPI NAMA ROUTE TETAP 'films.index'
Route::get('/films-catalog', [FilmController::class, 'index'])->name('films.index');

// 3. Route resource untuk 'films'.
// Kita KECUALIKAN 'index' dari resource ini karena kita sudah mendefinisikan 'films.index' secara manual di atas
// untuk mengarah ke '/films-catalog'.
// Route lain seperti 'films.show', 'films.create', dll. tetap akan dibuat.
Route::resource('films', FilmController::class)->except(['index']);


// Route 'tes' kamu yang sudah ada
Route::get('/tes', function(){
    return view('app.booking.seat-booking');
});

// Grup route yang memerlukan autentikasi
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

// Jika Anda menggunakan Laravel Breeze atau Jetstream untuk autentikasi,
// route mereka biasanya ada di file terpisah (misalnya auth.php) dan di-include di sini
// atau di RouteServiceProvider.
// Contoh:
// if (file_exists(base_path('routes/auth.php'))) {
//     require __DIR__.'/auth.php';
// }
