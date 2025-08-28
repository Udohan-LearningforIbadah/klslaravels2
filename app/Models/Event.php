<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
    public function category()
    {
        return $this->belongsTo(EventCategory::class, 'event_category_id');
    }
    public function scus()
    {
        return $this->hasMany(Scu::class);
    }
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

}
