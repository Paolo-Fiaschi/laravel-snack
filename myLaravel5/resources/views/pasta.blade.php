@extends('template')
@section('content')
<ul>
    <h1>Lunga</h1>
    @foreach ($lunga as $item)
    <li>{{$item['titolo']}}</li>
    @endforeach
</ul>
<ul>
    <h1>Corta</h1>
    @foreach ($corta as $item)
    <li>{{$item['titolo']}}</li>
    @endforeach
</ul>
<ul>
    <h1>Cortissima</h1>
    @foreach ($cortissima as $item)
    <li>{{$item['titolo']}}</li>
    @endforeach
</ul>
@endsection
