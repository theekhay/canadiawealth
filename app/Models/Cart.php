<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cart
 * @package App\Models
 * @version November 29, 2019, 7:21 am UTC
 *
 */
class Cart extends Model
{

    public $table = 'shoppingcart';


    protected $dates = ['deleted_at'];



    public $fillable = [

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

    // public function getOrders()
    // {
    //     return $this->hasMany( Product::class, 'product_id');
    // }



}
