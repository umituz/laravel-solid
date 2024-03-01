<?php

namespace App\Models;

use App\Contracts\TextPostable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TextPost extends BaseModel implements TextPostable
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
