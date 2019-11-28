<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 * @package App\Models
 * @version November 27, 2019, 12:24 pm UTC
 *
 */
class Product extends Model
{
    use SoftDeletes, UuidTrait;

    public $table = 'products';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name', 'code', 'amount', 'description', 'category', 'vendorId',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
