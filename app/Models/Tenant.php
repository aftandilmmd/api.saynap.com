<?php

namespace App\Models;

use Spatie\Multitenancy\Models\Tenant as BaseTenant;

class Tenant extends BaseTenant
{
    protected static function booted()
    {
        static::creating(static fn(Tenant $model) => $model->createDatabase());
    }

    public function createDatabase()
    {
        // TODO:: add tenant logic to create database
    }
}
