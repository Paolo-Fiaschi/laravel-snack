@extends('layouts.template')

@section('content')
    <main class="">
        <h1>POSTS</h1>
        <button type="button"><a href="">Create New Post</a></button>
        <ul>
        @foreach ($posts as $post)
            <li>
                TITLE: <a href="{{route('show', $post['id'])}}"><h3>{{$post['title']}}</h3></a>
                AUTHOR: <small>{{$post['author']}}</small>
                {{-- DESCRIPTION: <p>{{$task['description']}}</p>
                DEADLINE: <p>{{$task['deadline']}}</p> --}}
                {{-- <small>{{$task['employee']['firstname']}} {{$task['employee']['lastname']}}</small> --}}

            </li>
            @endforeach
        </ul>
    </main>
@endsection
