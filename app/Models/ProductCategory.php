<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProductCategory
 * @package App\Models
 * @version November 28, 2019, 7:24 am UTC
 *
 */
class ProductCategory extends Model
{
    use SoftDeletes, UuidTrait;

    public $table = 'product_categories';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name', 'code', 'uuid',
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
