<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Services\Base\PostService;

class PostsController extends Controller
{
    private PostService $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $items = $this->postService->getPostListResource();

        return $this->ok(data: $items);
    }

    public function show($id)
    {
        $item = $this->postService->findBy('id', $id);

        if (! $item) {
            return $this->notFound();
        }

        return $this->ok($item, __('Post Detail'));
    }

    public function store(PostRequest $request)
    {
        $item = $this->postService->create($request->validated());

        return $this->created($item, __('Post Created Successfully'));
    }

    public function update(PostRequest $request, $id)
    {
        $item = $this->postService->update($id, $request->all());

        return $this->ok($item, __('Post Updated Successfully'));
    }

    public function destroy($id)
    {
        $this->postService->destroy($id);

        return $this->noContent(null, __('Post Deleted Successfully'));
    }
}
