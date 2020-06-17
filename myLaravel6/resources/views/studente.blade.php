@extends('layouts.template')

@section('content')
    <main class="">
        NOME: {{$studente['nome']}}<br>
        COGNOME: {{$studente['cognome']}}<br>
        EMAIL: {{$studente['email']}}<br>
        DATA_DI_NASCITA: {{$studente['data_di_nascita']}}<br>
        NUMERO_TELEFONO: {{$studente['numero_telefono']}}<br>
        INDIRIZZO: {{$studente['indirizzo']}}<br>
        TIPO_CARTA_DI_CREDITO: {{$studente['tipo_carta_di_credito']}}<br>
        NUMERO_CARTA_DI_CREDITO: {{$studente['numero_carta_di_credito']}}<br>

        <a href="{{route('delete', $studente['id'])}}">DELETE STUDENT</a>
    </main>
@endsection
