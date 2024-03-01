<?php

namespace App\Services\Base;

use App\Http\Resources\PostCollection;
use App\Http\Resources\PostResource;
use App\Repositories\PostRepositoryInterface;

class PostService
{
    private PostRepositoryInterface $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getPostListResource(): PostCollection
    {
        $items = $this->postRepository->get();

        return new PostCollection($items);
    }

    public function findBy($key, $value)
    {
        $item = $this->postRepository->findBy($key, $value);

        if ($item) {
            return new PostResource($item);
        }

        return null;
    }

    public function create($data)
    {
        $item = $this->postRepository->create($data);

        return new PostResource($item);
    }

    public function update($id, $data)
    {
        $item = $this->postRepository->update($id, $data);

        return new PostResource($item);
    }

    public function destroy($id)
    {
        return $this->postRepository->delete('id', $id);
    }
}
