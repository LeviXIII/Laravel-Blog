<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index() {

        $posts = Post::all();

        return view('posts/index', compact('posts'));
    }

    public function show() {
        return view('posts/show');
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
