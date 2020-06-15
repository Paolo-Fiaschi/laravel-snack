<?php

namespace App\Http\Controllers;
use App\Pasta;
use Illuminate\Http\Request;

class PastaController extends Controller
{
    public function index()
    {
        // $cards = config('pasta');
        // $collection = collect($cards);

        $collection = Pasta::all();
        $lunga = $collection -> where('tipo', 'lunga');
        $corta = $collection -> where('tipo', 'corta');
        $cortissima = $collection -> where('tipo', 'cortissima');
        return view('pasta', compact('lunga', 'corta', 'cortissima'));

    }
}
