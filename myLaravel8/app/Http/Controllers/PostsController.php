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
        return view('show', compact('post'));
    }
    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post -> delete();
        return redirect() -> route('post');
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('edit', compact('post'));
    }
    public function update(Request $request, $id)
    {
        $validateData = $request-> validate([
            'author' => 'required',
            'title' => 'required',
            'description' => 'required',
            'data' => 'required'
        ]);
        $post = Post::findOrFail($id);

        $post['author'] = $validateData['author'];
        $post['title'] = $validateData['title'];
        $post['description'] = $validateData['description'];
        $post['data'] = $validateData['data'];

        $post -> save();

        return redirect() -> route('post');

    }
}
