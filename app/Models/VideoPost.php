<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VideoPost extends BaseModel
{
    protected $fillable = [
        'post_id',
        'video_url',
        'duration',
        'video_format'
    ];

    /**
     * @return BelongsTo
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
