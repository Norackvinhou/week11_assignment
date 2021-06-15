<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
class PostController extends Controller
{

public function index()
    {
       $posts = Post::get();
       return view('posts.index',[
           'posts'=>$posts
       ]);
      
    }

    
    public function create()
    {
        $categories = Category::get();
        return view('posts.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
       $input = $request->all();
       $input['user_id']=Auth::id();
        Post::create($input);
        return redirect(route('posts.index'));
    }

    
    public function edit(Post $post)
    {
        
        $categories = Category::pluck('name', 'id');
        $categories = Category::get();
        return view('posts.edit', [
            'categories' => $categories,
            'post' => $post
        ]);
    }
    public function update(Request $request, Post $post)
    {

        $post->category_id = $request->get('category_id');
        $post->title=$request->get('title');
        $post->content=$request->get('content');
        $post->save();
        return redirect(route('posts.index'));
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('posts.index'));
    }
}
