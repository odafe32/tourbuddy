<?php
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackagesController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('about-us', 'about_us');
    Route::get('packages', 'packages');
    Route::get('faqs', 'faqs');
    Route::get('contact-us', 'contact_us');
    Route::post('contact-us', 'process_contact');
    ROute::post('discount', 'discount');
});

Route::controller(PackagesController::class)->group(function () {
    Route::get('packages', 'packages');
});

Route::controller(DestinationController::class)->group(function () {
    Route::get('destinations', 'destinations');
});

Route::controller(GalleryController::class)->group(function () {
    Route::get('gallery', 'gallery');
});

Route::controller(BookingController::class)->group(function () {
    Route::get('bookings', 'bookings');
});

Route::controller(DiscountController::class)->group(function () {
    Route::get('discount', 'discount');
});
