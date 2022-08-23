<?php

use Illuminate\Support\Facades\Route;

Route::middleware('tenant')->group(function() {
    Route::get('/tenant', static function () {

        dd( \App\Models\Tenant::current());

        dd(\App\Models\User::all());

    });
});



Route::get('/create-tenant', static function () {

    $random = \Illuminate\Support\Str::random();

    $tenant = new \App\Models\Tenant;
    $tenant->name = 'Caner';
    $tenant->domain = 'kozmoz';
    $tenant->database = 'kozmoz';
    $tenant->save();

    return $tenant;
});

require __DIR__.'/auth.php';
