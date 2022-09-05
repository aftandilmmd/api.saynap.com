<?php

namespace Modules\Contact\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Appointment\Entities\Appointment;
use Modules\Company\Entities\Company;

class Contact extends Model{

    public function company(): BelongsTo
    {
       return $this->belongsTo(Company::class);
    }

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
}
