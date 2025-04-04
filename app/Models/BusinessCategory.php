<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessCategory extends Model
{
    public function business()
    {
        return $this->belongsToMany(Business::class , 'category_has_business');
    }
}