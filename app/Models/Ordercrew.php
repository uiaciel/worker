<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordercrew extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function order()
    {
        return $this->belongsTo('App\Models\Order', 'order_id');
    }

    public function crew()
    {
        return $this->belongsTo('App\Models\Crew', 'crew_id');
    }

    public function datacrew()
    {
        return $this->hasMany('App\Models\Crew', 'crew_id');
    }
}
