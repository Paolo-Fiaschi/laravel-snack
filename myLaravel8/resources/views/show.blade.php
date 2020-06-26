@extends('layouts.template')

@section('content')
    <main class="">
        <h1>POST</h1>
        <ul>
            <li>
                TITLE: <a href=""><h3>{{$post['title']}}</h3></a>
                AUTHOR: <p>{{$post['author']}}</p>
                DESCRIPTION: <p>{{$post['description']}}</p>
                DATE: <p>{{$post['data']}}</p>
                <small>COMMENTS:
                    <ul>
                        @foreach ($comments as $comment)
                            <li>{{$comment -> author}}<br>{{$comment -> description}}<br></li>
                        @endforeach
                        {{-- @foreach ($post -> comments as $comment)
                            <li>{{$comment -> author}}<br>{{$comment -> description}}<br></li>
                        @endforeach --}}
                    </ul>
                </small>

                <small>TAGS:
                    <ul>
                        @foreach ($post -> tags as $tag)
                            <li>{{$tag -> name}}<br>{{$tag -> description}}<br></li>
                        @endforeach
                        {{-- @foreach ($tags as $tag)
                            <li>{{$tag -> name}}<br>{{$tag -> description}}<br></li>
                        @endforeach --}}
                    </ul>
                </small>


            </li>
            @auth
            <button type="button"><a href="{{route('edit', $post['id'])}}">EDIT</a></button>

            @endauth
            <button type="button"><a href="{{route('delete', $post['id'])}}">DELETE</a></button>
        </ul>
    </main>
@endsection
