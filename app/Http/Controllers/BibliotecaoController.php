<?php

namespace App\Http\Controllers;

use App\Models\Biblioteca;
use Illuminate\Http\Request;

class BibliotecaController extends Controller
{
    public function index()
    {
        $bibliotecas = Biblioteca::all();
        return view('bibliotecas.index', compact('bibliotecas'));
    }

    public function create()
    {
        return view('bibliotecas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'endereco' => 'required',
        ]);

        Biblioteca::create($request->all());
        return redirect()->route('bibliotecas.index');
    }

    public function show(Biblioteca $biblioteca)
    {
        return view('bibliotecas.show', compact('biblioteca'));
    }

    public function edit(Biblioteca $biblioteca)
    {
        return view('bibliotecas.edit', compact('biblioteca'));
    }

    public function update(Request $request, Biblioteca $biblioteca)
    {
        $request->validate([
            'nome' => 'required',
            'endereco' => 'required',
        ]);

        $biblioteca->update($request->all());
        return redirect()->route('bibliotecas.index');
    }

    public function destroy(Biblioteca $biblioteca)
    {
        $biblioteca->delete();
        return redirect()->route('bibliotecas.index');
    }
}
