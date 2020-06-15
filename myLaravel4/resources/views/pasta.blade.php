@extends('template')
@section('content')
<div class="container">
    <div class="row">
        <div class="lunghezza">
            <h1>Pasta per lunghezza</h1>
            <div class="tipoPasta">
                <h2>{{$lunga}}</h2>
                <ul class="pastaLungaLista">
                    @foreach ($pastaLunga as $itemPasta)
                        <li>
                            <a href="#">{{$itemPasta['titolo']}}</a>
                            <img src="{{$itemPasta['src']}}" alt="">
                        </li>
                    @endforeach
                </ul>

            </div>
            <div class="tipoPasta">
                <h2>{{$corta}}</h2>
                <ul class="pastaLungaLista">
                    @foreach ($pastaCorta as $itemPasta)
                        <li>
                            <a href="#">{{$itemPasta['titolo']}}</a>
                            <img src="{{$itemPasta['src']}}" alt="">
                        </li>
                    @endforeach
                </ul>

            </div>
            <div class="tipoPasta">
                <h2>{{$cortissima}}</h2>
                <ul class="pastaLungaLista">
                    @foreach ($pastaCortissima as $itemPasta)
                        <li>
                            <a href="#">{{$itemPasta['titolo']}}</a>
                            <img src="{{$itemPasta['src']}}" alt="">
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</div>
@endsection
