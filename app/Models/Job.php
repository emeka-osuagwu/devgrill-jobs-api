<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    use \Spatie\Tags\HasTags;

    public function category()
    {
        return $this->belongsTo('App\Models\JobCategory', 'job_category_id')->latest();
    }
}
