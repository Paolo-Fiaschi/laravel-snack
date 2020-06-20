<?php

namespace App\Http\Controllers;
use App\Automobile;
use Illuminate\Http\Request;

class AutomobiliController extends Controller
{
    public function index()
    {
        $automobili = Automobile::all();
        return view('home', compact('automobili'));
    }
    public function show($id)
    {
        $automobile = Automobile::findOrFail($id);
        return view('show', compact('automobile'));
    }
    public function delete($id)
    {
        $automobile = Automobile::findOrFail($id);
        $automobile -> delete();
        return redirect()
                        -> route('home')
                        -> withSuccess('CAR DELETED');
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $validateData = $request -> validate([
            'marca' => 'required',
            'peso' => 'required',
            'colore' => 'required',
            'proprietario' => 'required',
            'username' => 'required',
            'pw' => 'required',
            'anno' => 'required'
        ]);
        $automobile = new Automobile;
        $automobile -> marca = $validateData['marca'];
        $automobile -> peso = $validateData['peso'];
        $automobile -> colore = $validateData['colore'];
        $automobile -> proprietario = $validateData['proprietario'];
        $automobile -> username = $validateData['username'];
        $automobile -> pw = $validateData['pw'];
        $automobile -> anno = $validateData['anno'];

        $automobile -> save();

        return redirect()
                        -> route('home')
                        -> withSuccess('CAR CREATED');
    }
    public function edit($id)
    {
        $automobile = Automobile::findOrFail($id);
        return view('edit', compact('automobile'));
    }
    public function update(Request $request, $id)
    {

        $validateData = $request -> validate([
            'marca' => 'required',
            'peso' => 'required',
            'colore' => 'required',
            'proprietario' => 'required',
            'username' => 'required',
            'pw' => 'required',
            'anno' => 'required'
        ]);
        $automobile = Automobile::findOrFail($id);

        $automobile -> marca = $validateData['marca'];
        $automobile -> peso = $validateData['peso'];
        $automobile -> colore = $validateData['colore'];
        $automobile -> proprietario = $validateData['proprietario'];
        $automobile -> username = $validateData['username'];
        $automobile -> pw = $validateData['pw'];
        $automobile -> anno = $validateData['anno'];

        $automobile -> save();

        return redirect()
                        -> route('home')
                        -> withSuccess('CAR EDIT');
    }

}
