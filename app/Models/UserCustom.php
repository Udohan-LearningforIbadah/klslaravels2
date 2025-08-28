<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCustom extends Model
{
    public function orders()
    {
        return $this->hasMany(Order::class, 'user_custom_id');
    }
}
