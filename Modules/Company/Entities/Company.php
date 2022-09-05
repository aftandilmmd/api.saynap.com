<?php

namespace Modules\Company\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\User\Entities\User;

class Company extends Model{

    public function user(): BelongsTo
    {
       return $this->belongsTo(User::class);
    }
}
