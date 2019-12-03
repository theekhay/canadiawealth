<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

//Traits
use App\Traits\UuidTrait;

use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes, UuidTrait, HasRoles;


    protected $guard_name = 'web';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'firstname', 'lastname', 'level', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @Mutator
     * set the username to null if it is empty
     */
    public function setUsername($value) {

        $this->attributes['username'] = empty($value) ? NULL : $value;
    }


    public function getProducts(){
        return $this->hasMany( Product::class, 'church_id');
    }


    /**
     * checks the user type and returns true if the user is an admin
     * @return boolean
     */
    public function isAdmin(){

        return $this->level === UserLevel::ADMIN;
    }


    public function isVendor(){

        return $this->level === UserLevel::SELLER;
    }

    /**
     * @Accessor
     * get the user's fullname
     */
    public function getFullNameAttribute() {

        return "{$this->firstname} {$this->lastname}";
    }


    /**
     * Get all payments by a user.
     */
    public function getPayments()
    {
        return $this->hasMany( Payment::class, 'customer_id');
    }


    public function getOrders()
    {
        return $this->hasMany( Order::class, 'user_id');
    }
}
