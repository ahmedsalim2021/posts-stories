<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Http\Requests\ReviewRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(\request()->per_page ?? 15);

        return response()->json($posts);
    }

    public function top()
    {
       $topPosts = Post::has('reviews')
           ->withAvg('reviews','rate')
           ->orderByDesc('reviews_avg_rate')
           ->paginate(\request()->per_page ?? 15);

        return response()->json($topPosts);
    }

    public function store(PostRequest $request)
    {
        $post = Post::create($request->validated());

        return response()->json($post);
    }

    public function addReview(ReviewRequest $request, Post $post)
    {
        $review = $post->reviews()->create($request->validated());

        return response()->json($review);
    }
}
