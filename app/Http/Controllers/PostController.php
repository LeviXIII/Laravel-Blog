<?php

namespace App\Http\Controllers;

use App\Post;
use App\Repositories\Posts;
//use Carbon\Carbon; //Not currently using.

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Posts $posts) {
        dd($posts);
        $posts = $posts->all();
        // $posts = Post::latest()
        //     ->filter(request(['month', 'year']))
        //     ->get();
        
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

        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );

        //Redirect to the homepage.
        return redirect('/');
        
    }
}
