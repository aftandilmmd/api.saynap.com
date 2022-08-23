<?php

namespace App\Services;

use App\Models\Tenant;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class TenantService
{

    public function __construct(public Tenant $tenant){}

    public function createDatabase(): void
    {
        DB::connection('tenant')->statement('CREATE DATABASE ' . $this->tenant->getDatabaseName());
    }

    public function migrate(): void
    {
        Artisan::call('tenants:artisan "migrate --database=tenant" --tenant='. $this->tenant->getKey());
    }

}
