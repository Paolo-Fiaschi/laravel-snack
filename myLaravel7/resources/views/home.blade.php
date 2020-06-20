@extends('template')
@section('content')
    <div>
        <button type="button">
            <a href="{{route('create')}}">CREATE</a>
        </button>
        @if (session('success'))
            <h2>{{session('success')}}</h2>
        @endif
        @foreach ($automobili as $automobile)
            <div class="auto">
                <h3>
                    <a href="{{route('show', $automobile['id'])}}">
                        {{$automobile['proprietario']}} -
                        {{$automobile['marca']}}
                    </a>
                </h3>
            </div>

        @endforeach
    </div>
@endsection
