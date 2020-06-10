@extends('myLayout')

@section('content')

    <h2>Lunga</h2>
    <ul>
        @foreach ($lunga as $card)
        <li>{{$card['titolo']}}</li>
        @endforeach



    </ul>
    <h2>Corta</h2>
    <ul>
        @foreach ($corta as $card)
        <li>{{$card['titolo']}}</li>
        @endforeach



    </ul>
    <h2>Cortissima</h2>
    <ul>
        @foreach ($cortissima as $card)
        <li>{{$card['titolo']}}</li>
        @endforeach


    </ul>
@endsection
