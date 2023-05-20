<?php

namespace App\Http\Controllers\Api\V1\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Posts\CreatePostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CreateController extends Controller
{
    public function __invoke(CreatePostRequest $createPostRequest)
    {
        try {
            Post::create(
                array_merge(
                    $createPostRequest->all(), 
                    [
                        'post_key' => Str::uuid(),
                        'slug' => Str::of($createPostRequest['title'])->slug(),
                        'author_id' => User::findByKey($createPostRequest['author_key'])->first()->id
                    ]
                )
            );

            return response()->json([
                'message' => 'success'
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
