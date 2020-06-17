<?php

namespace App\Http\Controllers;
use App\Studente;
use Illuminate\Http\Request;

class StudenteController extends Controller
{
    public function index()
    {
        $studenti = Studente::all();

        return view('home', compact('studenti'));

    }
    public function showStudente($id)
    {
        $studente = Studente::findOrFail($id);
        return view('studente', compact('studente'));

    }
    public function delete($id)
    {
        $studente = Studente::findOrFail($id);
        $studente -> delete();
        return redirect() -> route('home');
    }

}
