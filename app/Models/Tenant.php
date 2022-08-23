<?php

namespace App\Models;

use App\Services\TenantService;
use Spatie\Multitenancy\Models\Tenant as BaseTenant;

class Tenant extends BaseTenant
{
    protected static function booted(): void
    {
        // TODO :: Move this to event / listen class in the future.
        static::created(static function(Tenant $tenant) {

            $tenantService = new TenantService($tenant);

            $tenantService->createDatabase();

            $tenantService->migrate();

        });
    }
}
