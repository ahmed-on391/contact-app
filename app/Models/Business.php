<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @OA\Schema(
 *     title="Business",
 *     description="Business model",
 *     @OA\Xml(name="Business")
 * )
 */

class Business extends Model
{
    /** @use HasFactory<\Database\Factories\BusinessFactory> */
    use HasFactory , SoftDeletes;


/**
     * @OA\Property(
     *      title="ID",
     *      description="Business ID",
     *      example=1
     * )
     * @var integer
     */
    public $id;

    /**
     * @OA\Property(
     *      title="Name",
     *      description="Name of the business",
     *      example="Tech Startup"
     * )
     * @var string
     */
    public $name;

    /**
     * @OA\Property(
     *      title="Description",
     *      description="Business description",
     *      example="A startup company focused on technology"
     * )
     * @var string
     */
    public $description;

    
    public function people()
    {
        return $this->hasMany(Person::class);
    }
}