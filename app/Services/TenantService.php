<?php

namespace App\Services;

use App\Models\Tenant;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class TenantService
{

    public static function createDatabase(Tenant $tenant): void
    {
        DB::connection('tenant')->statement('CREATE DATABASE ' . $tenant->getDatabaseName());
    }

    public static function migrate(): void
    {
        Artisan::call('tenants:artisan "migrate --database=tenant"');
    }

}
