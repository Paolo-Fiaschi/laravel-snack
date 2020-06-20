@extends('template')
@section('content')
    <div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('store')}}" method="post">
            @csrf
            @METHOD('POST')
            <label for="marca">MARCA:</label>
            <select name="marca">
                <option value=""></option>
                <option value="Volvo">Volvo</option>
                <option value="Mercedes-Benz">Mercedes-Benz</option>
                <option value="Fiat">Fiat</option>
                <option value="BMW">BMW</option>
                <option value="Audi">Audi</option>
                <option value="Volkswagen">Volkswagen</option>
            </select>
            {{-- <input type="text" value="{{old('marca')}}" name="marca"> --}}
            <label for="peso">PESO:</label>
            <input type="text" value="{{old('peso')}}" name="peso">
            <label for="colore">COLORE:</label>
            <input type="text" value="{{old('colore')}}" name="colore">
            <label for="proprietario">PROPRIETARIO:</label>
            <input type="text" value="{{old('proprietario')}}" name="proprietario">
            <label for="username">USERNAME:</label>
            <input type="text" value="{{old('username')}}" name="username">
            <label for="pw">PW:</label>
            <input type="password" value="{{old('pw')}}" name="pw">
            <label for="anno">ANNO:</label>
            <input type="text" value="{{old('anno')}}" name="anno">
            <button type="submit">SUBMIT</button>
        </form>
    </div>
@endsection
