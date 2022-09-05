<?php

namespace Modules\Appointment\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Company\Entities\Company;
use Modules\Contact\Entities\Contact;
use Modules\Service\Entities\Service;

class Appointment extends Model{

    public function company(): BelongsTo
    {
       return $this->belongsTo(Company::class);
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class);
    }
}
