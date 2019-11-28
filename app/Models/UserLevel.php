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
     * This marks a model instance as active
     */
    public const ADMIN = 111;


    /**
     * This marks a model instance as awaiting approval
     * typical, when a branchadmin creates certain resources that needs approval, it is marked as awaiting approval
     * The church admin typically would approve such to get it mainstream
     */
    public const SELLER = 222;


    /**
     * These are resources that have been marked as inactive
     * these should be done by the church admin
     */
    public const NORMAL = 333;


}
