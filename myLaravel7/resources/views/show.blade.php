@extends('template')
@section('content')
    <div>
        <p>MARCA: <h3>{{$automobile['marca']}}</h3></p>
        <p>PESO: <h3>{{$automobile['peso']}} kg</h3></p>
        <p>COLORE: <h3>{{$automobile['colore']}}</h3></p>
        <p>PROPRIETARIO: <h3>{{$automobile['proprietario']}}</h3></p>
        <p>USERNAME: <h3>{{$automobile['username']}}</h3></p>
        <p>PW: <h3>{{$automobile['pw']}}</h3></p>
        <p>ANNO: <h3>{{$automobile['anno']}}</h3></p>
        <button type="button">
            <a href="{{route('delete', $automobile['id'])}}">DELETE</a>
        </button>
        <button type="button">
            <a href="{{route('edit', $automobile['id'])}}">EDIT</a>
        </button>
    </div>
@endsection
