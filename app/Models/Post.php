<?php

namespace App\Models;

use App\Models\Scopes\SortingScope;
use App\Observers\PostObserver;

class Post extends BaseModel
{
    protected $fillable = [
        'title',
        'description',
        'status'
    ];

    protected $casts = [
        'created_at' => 'datetime:d-m-Y H:i',
    ];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new SortingScope);
        static::observe(PostObserver::class);
    }
}
