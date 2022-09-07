<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contact extends Model{

    protected $fillable = ['company_id','name','birth_date','phones','note','data'];

    protected function phones(): Attribute
    {
        return Attribute::make(
            get: static fn ($value) => is_null($value) ? [""] : $value,
            set: static fn ($value) => json_encode($value),
        );
    }

    public function company(): BelongsTo
    {
       return $this->belongsTo(Company::class);
    }

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
}
