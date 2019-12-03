<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

//cart
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Gloudemans\Shoppingcart\CanBeBought;

/**
 * Class Product
 * @package App\Models
 * @version November 27, 2019, 12:24 pm UTC
 *
 */
class Product extends Model implements Buyable
{
    use SoftDeletes, UuidTrait, CanBeBought;

    public $table = 'products';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name', 'code', 'price', 'description', 'category', 'vendorId',
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

        // 'name' => 'required|string|unique:products,name',
        // 'code' => 'nullable|unique:products,code|max:10|alpha_num',
        // 'price' => 'required|numeric'
    ];


}
