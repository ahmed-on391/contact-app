<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Person extends Model
{
    /** @use HasFactory<\Database\Factories\PersonFactory> */
    use HasFactory, SoftDeletes;

    // protected $with = ['business'];

    public function business()
    {
        return $this->belongsTo(Business::class, 'business_id', 'id');
    }

    public function tasks()
    {
        return $this->morphMany(Task::class, 'taskable');
    }

    // public function tags(): MorphMany
    // {
    //     return $this->morphMany(Tag::class, 'taggable');
    // }

    public function tags()
{
    return $this->morphToMany(Tag::class, 'taggable');
}

}