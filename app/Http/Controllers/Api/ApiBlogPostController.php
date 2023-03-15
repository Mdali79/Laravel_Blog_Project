<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Http\Controllers\Controller;


class ApiBlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::all();

        return response()->json([
            'data' => $posts
        ]);
    }

    public function store(Request $request)
    {
        $existingPost = BlogPost::where('title', $request->title)
            ->where('user_id', $request->user_id)
            ->first();
    
        if ($existingPost) {
            return response()->json([
                'message' => 'Post already exists',
                'data' => $existingPost
            ], 409);
        }
    
        $post = BlogPost::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            
            'body' => $request->body,
            'user_id' => $request->user_id
        ]);
       
        $post->save();
    
        return response()->json([
            'message' => 'Post created successfully',
            'data' => $post
        ]);
    }
    

    public function show($id)
    {
        $post = BlogPost::find($id);

        if (!$post) {
            return response()->json([
                'message' => 'Post not found'
            ], 404);
        }

        return response()->json([
            'data' => $post
        ]);
    }

    public function update(Request $request, $id)
    {
        $post = BlogPost::find($id);

        if (!$post) {
            return response()->json([
                'message' => 'Post not found'
            ], 404);
        }

        $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'body' => $request->body,
            'user_id' => $request->user_id
        ]);

        return response()->json([
            'message' => 'Post updated successfully',
            'data' => $post
        ]);
    }

    public function destroy($id)
    {
        $post = BlogPost::find($id);

        if (!$post) {
            return response()->json([
                'message' => 'Post not found'
            ], 404);
        }

        $post->delete();

        return response()->json([
            'message' => 'Post deleted successfully'
        ]);
    }
}
