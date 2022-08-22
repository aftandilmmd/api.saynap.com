<?php

namespace App\Models;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Spatie\Multitenancy\Models\Tenant as BaseTenant;

class Tenant extends BaseTenant
{
    protected static function booted(): void
    {
        static::creating(static fn(Tenant $model) => $model->runCreateActions());
    }

    public function runCreateActions(): void
    {
        $this->createDatabase();

        $this->migrate();
    }

    public function createDatabase(): void
    {
        DB::connection('tenant')->statement('CREATE DATABASE ' . $this->getDatabaseName());
    }

    public function migrate(): void
    {
        Artisan::call('tenants:artisan "migrate --database=tenant"');
    }
}
