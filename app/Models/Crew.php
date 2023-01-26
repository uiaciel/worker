<?php

namespace App\Models;

use Carbon\Carbon;
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

    public function age()
    {
        return Carbon::parse($this->birth)->age;
    }

    public function ordercrew()
    {
        return $this->belongsTo('App\Models\Ordercrew', 'crew_id');
    }

    public function passport()
    {
        return $this->belongsTo('App\Models\Document', 'passport_id');
    }

    public function seamanbook()
    {
        return $this->belongsTo('App\Models\Document', 'seamanbook_id');
    }

    public function vissa()
    {
        return $this->belongsTo('App\Models\Document', 'vissa_id');
    }

    public function orangebook()
    {
        return $this->belongsTo('App\Models\Document', 'orangebook_id');
    }
}
