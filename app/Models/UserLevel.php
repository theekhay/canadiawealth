<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserLevel extends Model
{

    /**
     * All models would use this status excpet for the below listed Class and their derivarives
     *
     * Administrator::class
     */

    /**
     * This represents users who an adminstrators
     */
    public const ADMIN = 'admin';


    /**
     * This represents users who an vendors/merchants on the system.
     */
    public const SELLER = 'seller';


    /**
     * These represents normal users on the system
     */
    public const NORMAL = 'user';


}
