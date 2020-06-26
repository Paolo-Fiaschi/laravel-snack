<?php

namespace App\Http\Controllers;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostLoggedController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $tags = Tag::all();
        return view('edit', compact('post', 'tags'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request-> validate([
            'author' => 'required',
            'title' => 'required',
            'description' => 'required',
            'data' => 'nullable',
            'tags' => 'required'
        ]);
        $post = Post::findOrFail($id);

        $post['author'] = $validatedData['author'];
        $post['title'] = $validatedData['title'];
        $post['description'] = $validatedData['description'];
        $post['data'] = $validatedData['data'];

        $post -> save();

        $post -> tags() -> sync($validatedData['tags']);


        return redirect() -> route('post');
    }

}
