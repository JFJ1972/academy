<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }
    
    public function index()
    {
        $posts = Post::latest()->with(['user', 'likes'])->paginate(6);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'type' => 'required',
            'link' => 'required',
            'participants' => 'required',
            'body' => 'required',
            'image' => 'required',
            'favorite'
        ]);

        $request->user()->posts()->create($request->all());

        return redirect()->route('posts');
    }

    public function edit(Post $post){
        return view('posts.update' , compact('post'));
    }
    public function update(Request $request,Post $post){

        $post->title = $request->title;
        $post->type = $request->type;
        $post->link = $request->link;
        $post->participants = $request->participants;
        $post->body = $request->body;
        $post->image = $request->image;

        $post->save() ;
        return redirect()->route('posts');
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();

        return back();
    }
}
