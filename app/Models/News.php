<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    public function getBySlug($slug)
    {
        return $this->where('slug', $slug)->published()->firstOrFail();
    }
    public function getPublished()
    {
        return $this->where('published', 1)->orderBy('created_at', 'DESC');
    }
    public function scopePublished($query)
    {
        return $query->where('published', 1);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
