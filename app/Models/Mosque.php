<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Mosque
 * @package App\Models
 * @version November 17, 2019, 10:09 pm UTC
 *
 * @property string name
 * @property string image
 * @property string description
 * @property string address
 * @property string website
 * @property string prefectures
 * @property string city
 * @property integer status
 */
class Mosque extends Model
{

    public $table = 'mosques';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'image',
        'description',
        'address',
        'website',
        'prefectures',
        'city',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'image' => 'string',
        'description' => 'string',
        'address' => 'string',
        'website' => 'string',
        'prefectures' => 'string',
        'city' => 'string',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
