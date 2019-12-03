<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Payment
 * @package App\Models
 * @version November 28, 2019, 10:54 am UTC
 *
 */
class Payment extends Model
{
    use SoftDeletes, UuidTrait;

    public $table = 'payments';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'customer_id', 'expected_payment', 'amount_paid', 'payment_method', 'discount', 'order_id'
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

    public function customer(){

        return $this->belongsTo( User::class, 'customer_id');

    }


}
