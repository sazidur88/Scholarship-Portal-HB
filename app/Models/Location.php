<?php

namespace App\Models;

use App\Scopes\CompanyScope;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected static function booted()
    {
        static::addGlobalScope(new CompanyScope);

        static::creating(function ($model){
            if (session()->has('tenant_id')) {
                $model->tenant_id = session()->get('tenant_id');
            }
        });
    }
}
