<?php

namespace App\Models;

use App\Services\TenantService;
use Spatie\Multitenancy\Models\Tenant as BaseTenant;

class Tenant extends BaseTenant
{
    protected static function booted(): void
    {
        static::created(static function(Tenant $tenant) {

            TenantService::createDatabase($tenant);

            TenantService::migrate();

        });
    }
}
