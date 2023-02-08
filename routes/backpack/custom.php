<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('hero', 'HeroCrudController');
    Route::crud('partner', 'PartnerCrudController');
    Route::crud('certification', 'CertificationCrudController');
    Route::crud('gallery', 'GalleryCrudController');
    Route::crud('contact-request', 'ContactRequestCrudController');
    Route::crud('blog', 'BlogCrudController');
    Route::crud('product', 'ProductCrudController');
    Route::crud('team', 'TeamCrudController');
    Route::crud('video', 'VideoCrudController');
    Route::crud('service', 'ServiceCrudController');
    Route::crud('counter', 'CounterCrudController');
    Route::crud('testimony', 'TestimonyCrudController');
    Route::crud('about', 'AboutCrudController');
}); // this should be the absolute last line of this file