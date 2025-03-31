<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Validation\ValidatesRequests;

class PostController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth')->except('index', 'show');
    }
    use ValidatesRequests;
    public function index()
    {
        $post = Post::get();

        return view("posts.index", ["posts" => $post]);
    }

    public function show(Post $post)
    {
        return view("posts.show", ["post" => $post]);
    }

    public function create()
    {
        return view("posts.create", ["post" => new Post()]);
    }

    public function store(SavePostRequest $request)
    {
        

        /*
        - Forma Antigua
        $post = new Post();

        $post->title = $request->input("title");

        $post->body = $request->input("body");
        
        $post->save();*/

        Post::create($request->validated());

        return to_route("posts.index")->with("status", "Post created successfully!!");
    }

    public function edit(Post $post)
    {
        return view("posts.edit", ["post" => $post]);
    }
    public function update(SavePostRequest $request, Post $post)
    {

        $post->update($request->validated());

        return to_route("posts.show", $post)->with("status", "Post Update successfully!!");
    }
    public function destroy(Post $post)
    {
        $post->delete();

        return to_route("posts.index")->with("status", "Post Delete successfully!!");
    }
}
