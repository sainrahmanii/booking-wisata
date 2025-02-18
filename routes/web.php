<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/check-booking', [BookingController::class, 'checkBooking'])->name('front.check_booking');
Route::get('/', [FrontController::class, 'index'])->name('front.index');

Route::get('/browse/{category:slug}', [FrontController::class, 'category'])->name('front.category');

Route::get('/explore/{seller:slug}', [FrontController::class, 'seller'])->name('front.seller');

Route::get('/details/{ticket:slug}', [FrontController::class, 'details'])->name('front.details');

Route::post('/check-booking/details', [BookingController::class, 'checkBookingDetails'])->name('front.check_booking_details');

Route::get('/booking/payment', [BookingController::class, 'payment'])->name('front.payment');
Route::post('/booking/payment', [BookingController::class, 'paymentStore'])->name('front.payment_store');

Route::get('/payment/success', [BookingController::class, 'midtransCallback'])->name('front.booking_finished');
Route::post('/payment/success', [BookingController::class, 'midtransCallback'])->name('front.booking_finished');

Route::get('/booking/{ticket:slug}', [BookingController::class, 'booking'])->name('front.booking');
Route::post('/booking/{ticket:slug}', [BookingController::class, 'bookingStore'])->name('front.booking_store');

Route::get('/booking/finished/{bookingTransaction}', [BookingController::class, 'bookingFinished'])->name('front.booking_finished');


Route::get('customer-service', [FrontController::class, 'customerService'])->name('front.customer_service');