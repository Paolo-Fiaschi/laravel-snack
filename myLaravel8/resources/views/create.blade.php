@extends('layouts.template')

@section('content')
    <main class="">
        <h1>POST</h1>
        <form action="{{route('store')}}" method="post">
            @csrf
            @method('POST')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <label for="title">TITLE</label>
            <input type="text" name='title' value="">

            <label for="description">DESCRIPTION</label>
            <input type="text" name='description' value="">

            <label for="author">AUTHOR</label>
            <input type="text" name='author' value="">

            <label for="data">DATA</label>
            <input type="text" name='data' value="">

            {{-- <label for="employee_id">EMPLOYEE</label>
            <select name="employee_id">
                <option value="" selected></option>
                @foreach ($employees as $employee)
                <option value="{{$employee['id']}}">
                    {{$employee['firstname']}}
                    {{$employee['lastname']}}

                </option>
                @endforeach
            </select> --}}

            <label for="tags[]">TAGS</label>
            @foreach ($tags as $tag)
                <div>
                    <input class="checkbox" type="checkbox" name="tags[]" value="{{$tag['id']}}">
                    {{$tag['name']}}
                </div>
            @endforeach
            <button type="submit" name="submit" value="update">CREATE</button>
        </form>
    </main>
@endsection
