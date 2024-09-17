<?php
use App\Http\Controllers\AkwukeController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\HillController; 
use App\Http\Controllers\UnityController; 
use App\Http\Controllers\AwhumController; 
use App\Http\Controllers\AdaController;
use App\Http\Controllers\iyinzuController;
use App\Http\Controllers\MichaelController;
use App\Http\Controllers\BeachController;
use App\Http\Controllers\OjialumController;
use App\Http\Controllers\NgwopineController;
use App\Http\Controllers\MillikenhillController;
use App\Http\Controllers\ObialuohuuController;
use App\Http\Controllers\PolomallController;
use App\Http\Controllers\OkpokuspringController;
use App\Http\Controllers\OrsuwaterfallController;
use App\Http\Controllers\NikelakeController;
use App\Http\Controllers\NationalmuseumController;

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


Route::controller(HillController::class)->group(function () {
    Route::get('destination_route/hill', 'hill');
});


Route::controller(UnityController::class)->group(function () {
    Route::get('destination_route/unitypark', 'unitypark');
});


Route::controller(AdaController::class)->group(function () {
    Route::get('destination_route/adadadam', 'adadadam');
});

Route::controller(AwhumController::class)->group(function () {
    Route::get('destination_route/awhumwaterfall', 'awhumwaterfall');
});


Route::controller(iyinzuController::class)->group(function () {
    Route::get('destination_route/iyinzu', 'iyinzu');
});

Route::controller(MichaelController::class)->group(function () {
    Route::get('destination_route/michaelokpara', 'michaelokpara');
});



Route::controller(BeachController::class)->group(function () {
    Route::get('destination_route/akwukebeach', 'akwukebeach');
});



Route::controller(OjialumController::class)->group(function () {
    Route::get('destination_route/ojialum', 'ojialum');
});


Route::controller(NgwopineController::class)->group(function () {
    Route::get('destination_route/ngwopine', 'ngwopine');
});
Route::controller(MillikenhillController::class)->group(function () {
    Route::get('destination_route/millikenhill', 'millikenhill');
});
Route::controller(ObialuohuuController::class)->group(function () {
    Route::get('destination_route/obialuohuu', 'obialuohuu');
});
Route::controller(PolomallController::class)->group(function () {
    Route::get('destination_route/polomall', 'polomall');
});


Route::controller(OkpokuspringController::class)->group(function () {
    Route::get('destination_route/okpokuspring', 'okpokuspring');
});


Route::controller(OrsuwaterfallController::class)->group(function () {
    Route::get('destination_route/orsuwaterfall', 'orsuwaterfall');
});



Route::controller(NikelakeController::class)->group(function () {
    Route::get('destination_route/nikelake', 'nikelake');
});


Route::controller(NationalmuseumController::class)->group(function () {
    Route::get('destination_route/nationalmuseum', 'nationalmuseum');
});


