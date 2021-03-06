<?php

namespace App\Http\Controllers;
use App\Post;
use App\Tag;
use App\Comment;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post', compact('posts'));
    }
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $tags = Tag::all();
        $comments = Comment::all();
        return view('show', compact('post', 'tags', 'comments'));
    }
    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post -> delete();
        return redirect() -> route('post');
    }
    public function create()
    {
        $tags = Tag::all();
        return view('create', compact('tags'));
    }
    public function store(Request $request)
    {
        $validatedData = $request-> validate([
            'author' => 'required',
            'title' => 'required',
            'description' => 'required',
            'data' => 'nullable',
            'tags' => 'required'
        ]);

        $post = new Post;

        $post['author'] = $validatedData['author'];
        $post['title'] = $validatedData['title'];
        $post['description'] = $validatedData['description'];
        $post['data'] = $validatedData['data'];

        $post -> save();

        $post -> tags() -> sync($validatedData['tags']);
        // dd($validatedData);


        return redirect() -> route('post');

    }
}
