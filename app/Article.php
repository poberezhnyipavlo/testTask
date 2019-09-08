<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'status', 'description'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($this->title);
    }
}
