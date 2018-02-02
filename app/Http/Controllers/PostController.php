<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index() {

        $posts = Post::latest()->get();

        return view('posts/index', compact('posts'));
    }

    //The "Post $post" is taking the wildcard var. name and injecting
    //it for the function to use. ie. $post = the post id 1, 2, etc.
    public function show(Post $post) {

        return view('posts/show', compact('post'));
    }

    public function create() {
        return view('posts/create');
    }

    public function store() {
    
        //Create a new post using request data.

        /* This does the same thing as Post::create" */
        
        // $post = new Post;

        // $post->title = request('title');
        // $post->body = request('body');

        // //Save it to the database.
        // $post->save();

        /*********************************************/

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);

        //Redirect to the homepage.
        return redirect('/');
        
    }
}
