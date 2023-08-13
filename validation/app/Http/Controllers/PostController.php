<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Post::get();
        return view("posts.index",compact("posts"));
    }
    public function create()
    {
        return view("posts.create");
    }

    public function store(StorePostRequest $request)
    {
//        $request->validate([
//            "title"=>"required",
//            "body"=>"required"
//        ]);

        $posts=new Post();
        $posts->title=$request->title;
        $posts->body=$request->body;
        $posts->save();
        return redirect()->route("home.index");

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
