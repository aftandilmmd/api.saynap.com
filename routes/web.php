<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/create-tenant', static function () {

    $random = \Illuminate\Support\Str::random();

    $tenant = new \App\Models\Tenant;
    $tenant->name = 'Caner';
    $tenant->domain = 'salon_'. $random;
    $tenant->database = 'tenant_salon_'.$random;
    $tenant->save();

    return $tenant;
});

require __DIR__.'/auth.php';
