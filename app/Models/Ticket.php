<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    
    public function order()
    {
        return $this->belongsTo('App\Models\Order', 'order_id');
    }
}
