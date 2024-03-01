<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TextPost extends BaseModel
{
    protected $fillable = [
        'post_id',
        'content',
        'summary'
    ];

    /**
     * @return BelongsTo
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
