<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scu extends Model
{
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

}
