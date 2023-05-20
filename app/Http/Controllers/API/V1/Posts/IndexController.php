<?php

namespace App\Http\Controllers\API\V1\Posts;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\Posts\AllPostsResource;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        try {
            return AllPostsResource::collection(Post::with('author')->paginate());
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'we are updating...'
            ], 200);
        }
        
    }
}
