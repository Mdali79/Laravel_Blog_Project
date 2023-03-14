<?php

namespace App\Http\Controllers;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    //

    public function index()
{
	$posts = BlogPost::all(); //fetch all blog posts from DB
	return view('blog.index', [
            'posts' => $posts,
        ]);
}


public function create()
    {
        //show form to create a blog post
        return view('blog.create');
    }

   
    public function store(Request $request)
    {
        $newPost = BlogPost::create([
            'title' => $request->title,
            'body' => $request->body,
            'description'=> $request->description,
            'image'=>$request->image,
        
            'user_id' => 1
        ]);

        return redirect('blog/' . $newPost->id);
    }
    public function show(BlogPost $blogPost)
    {
        //show a blog post

        return view('blog.show', [
            'post' => $blogPost,
        ]);
    }

    
    public function edit(BlogPost $blogPost)
    {
        //show form to edit the post
        return view('blog.edit', [
            'post' => $blogPost,
            ]);
    }

    
    public function update(Request $request, BlogPost $blogPost)
    {
        //save the edited post
        $blogPost->update([
            'title' => $request->title,
            'description'=>$request->description,
            'image'=>$request->image,
            'body' => $request->body
        ]);

        return redirect('blog/' . $blogPost->id);

    }

    
    public function destroy(BlogPost $blogPost)
    {
        //delete a post
        $blogPost->delete();

        return redirect('/blog');
    }

    public function read_more(BlogPost $blogPost)
    {

        return view('blog.details', [
            'post' => $blogPost,
        ]);

    }
}
