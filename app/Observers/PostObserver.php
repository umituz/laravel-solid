<?php

namespace App\Observers;

use App\Models\Post;

class PostObserver extends BaseObserver
{
    /**
     * Handle the Post "created" event.
     */
    public function created(Post $post): void
    {
        $this->logger->log('New post created: ' . $post->title);
    }

    /**
     * Handle the Post "updated" event.
     */
    public function updated(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "deleted" event.
     */
    public function deleted(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "restored" event.
     */
    public function restored(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     */
    public function forceDeleted(Post $post): void
    {
        //
    }
}
