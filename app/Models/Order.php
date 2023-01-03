<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function orderjob()
    {
        return $this->hasMany('App\Models\Orderjob', 'order_id');
    }

    public function ordercrew()
    {
        return $this->hasMany('App\Models\Ordercrew', 'order_id');
    }

    public function tiket()
    {
        return $this->hasMany('App\Models\Ticket', 'order_id');
    }

    public function company()
    {
    	return $this->belongsTo('App\Models\Company');
    }

    public function client()
    {
    	return $this->belongsTo('App\Models\Klien');
    }
}
