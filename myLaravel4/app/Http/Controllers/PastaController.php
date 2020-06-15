<?php

namespace App\Http\Controllers;
use App\Pasta;
use Illuminate\Http\Request;

class PastaController extends Controller
{
    public function index(){
        // $pasta = config('pasta');
        // $collection = collect($pasta);

        $collection = Pasta::all();
        $lunga = "Pasta Lunga";
        $corta = "Pasta Corta";
        $cortissima = "Pasta Cortissima";
        // $pastaLunga = [];
        // $pastaCorta = [];
        // $pastaCortissima = [];
        $pastaLunga = $collection -> where('tipo', 'lunga');
        $pastaCorta = $collection -> where('tipo', 'corta');
        $pastaCortissima = $collection -> where('tipo', 'cortissima');
        return view('pasta', compact('lunga', 'corta', 'cortissima', 'pastaLunga', 'pastaCorta', 'pastaCortissima'));

    }
}
