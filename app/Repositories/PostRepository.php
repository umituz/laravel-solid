<?php

namespace App\Repositories;

use App\Models\Post;

/**
 * Class PostRepository
 */
class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    private Post $post;

    public function __construct(Post $post)
    {
        parent::__construct($post);

        $this->post = $post;
    }
}
