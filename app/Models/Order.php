<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Order
 * @package App\Models
 * @version November 28, 2019, 10:28 am UTC
 *
 * @property integer id
 */
class Order extends Model
{
    use SoftDeletes, UuidTrait;

    public $table = 'orders';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'cart_id', 'checkout_date', 'total_price', 'user_id', 'shipping_address', 'payment_method', 'order_reference', 'delivery_method'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
}
