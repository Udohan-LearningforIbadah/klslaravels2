<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function userCustom()
    {
        return $this->belongsTo(UserCustom::class, 'user_custom_id');
    }
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

}
