<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    use \Spatie\Tags\HasTags;

    protected $fillable = [
        'title',
        'job_type',
        'gender',
        'detail',

        'company_email',
        'company_name',
        'company_url',
        'company_image',
        'application_link',
        
        'experience',
        'qualification',
        
        'compensation',
        'compensation_type',
        'compensation_currency',
        
        'location',
        'remote',
        'relocation_support',
        'job_category_id',
        
        'dead_line',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\JobCategory', 'job_category_id')->latest();
    }
    
    public function setRemoteAttribute($remote)
    {
        $this->attributes['remote'] = (boolean) $remote;
    }

    public function setRelocationSupportAttribute($relocation_support)
    {
        $this->attributes['relocation_support'] = (boolean) $relocation_support;
    }
}
