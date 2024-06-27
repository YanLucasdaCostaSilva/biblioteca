<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use App\Models\Autor;
use App\Models\Biblioteca;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index', compact('livros'));
    }

    public function create()
    {
        $autores = Autor::all();
        $bibliotecas = Biblioteca::all();
        return view('livros.create', compact('autores', 'bibliotecas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'isbn' => 'required|unique:livros',
            'ano_publicacao' => 'required',
            'autor_id' => 'required|exists:autors,id',
            'biblioteca_id' => 'required|exists:bibliotecas,id',
        ]);
        //dd($request);
        Livro::create($request->all());
        return redirect()->route('livros.index');
    }

    public function show(Livro $livro)
    {
        return view('livros.show', compact('livro'));
    }

    public function edit(Livro $livro)
    {
        $autores = Autor::all();
        $bibliotecas = Biblioteca::all();
        return view('livros.edit', compact('livro', 'autores', 'bibliotecas'));
    }

    public function update(Request $request, Livro $livro)
    {
        $request->validate([
            'titulo' => 'required',
            'isbn' => 'required|unique:livros,isbn,' . $livro->id,
            'ano_publicacao' => 'required|integer',
            'autor_id' => 'required|exists:autors,id',
            'biblioteca_id' => 'required|exists:bibliotecas,id',
        ]);

        $livro->update($request->all());
        return redirect()->route('livros.index');
    }

    public function destroy(Livro $livro)
    {
        $livro->delete();
        return redirect()->route('livros.index');
    }
}
