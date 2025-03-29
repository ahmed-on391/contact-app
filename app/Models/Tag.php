<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Tag extends Model
{
   use HasFactory , SoftDeletes ;


   protected $fillable = [
       'business_name',
       
       'contact_email',
   ];

   
   public function people(): MorphToMany
   {
       return $this->morphedByMany(Person::class, 'taggable');
   }
      
   public function business(): MorphToMany
   {
       return $this->morphedByMany(Business::class, 'taggable');
   }

  
   
}