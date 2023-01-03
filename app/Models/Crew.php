<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function experience()
    {
        return $this->hashMany('App\Models\Experience', 'crew_id');
    }


    public function job()
    {
        return $this->belongsTo('App\Models\Job', 'job_id');
    }
    
}
