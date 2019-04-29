<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    CRUD::resource('tag', 'TagCrudController');
    CRUD::resource('offer', 'offerCrudController');
    CRUD::resource('contact', 'ContactCrudController');
    CRUD::resource('transport', 'TransportCrudController');
    CRUD::resource('hotel', 'HotelCrudController');
    CRUD::resource('room', 'RoomCrudController');
    CRUD::resource('excursion', 'ExcursionCrudController');
}); // this should be the absolute last line of this file