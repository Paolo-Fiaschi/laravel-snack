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
                {{-- <small>EMPLOYEE: {{$task['employee']['firstname']}} {{$task['employee']['lastname']}}</small><br>
                <small>LOCATION:
                    <ul>
                        @foreach ($task -> employee -> locations as $location)
                    <li>{{$location -> city}}<br>{{$location -> street}}<br>{{$location -> state}}</li>
                        @endforeach
                    </ul>
                </small> --}}


            </li>
            <button type="button"><a href="{{route('edit', $post['id'])}}">EDIT</a></button>
            <button type="button"><a href="{{route('delete', $post['id'])}}">DELETE</a></button>
        </ul>
    </main>
@endsection
