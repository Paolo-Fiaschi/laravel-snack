@extends('layouts.template')

@section('content')
    <main class="">
        @foreach ($studenti as $studente)
        <ul>
            <li>
                <a href="{{route('studente', $studente['id'])}}"><h3>{{$studente['nome']}}</h3></a>
            </li>
        </ul>
        @endforeach
    </main>
@endsection
