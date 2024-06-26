<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Biblioteca;
use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livro = Livro::with(['autor', 'biblioteca'])->get();
        return view('livros.index', compact('livros'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        $autores = Autor::all();

        $biblioteca = Biblioteca::all();
        return view('livros.create', compact('autores', 'biblioteca'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'isbn' => 'required|unique:livros',
            'ano_publicacao' => 'required|integer',
            'autor_id' => 'required|exists:autors,id',
            'biblioteca_id' => 'required|exists:bibliotecas,id',
        ]);
        Livro::create($request->all());
        return redirect()->route('livros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('livros.show', compact('livros'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $autores = Autor::all();

        $biblioteca = Biblioteca::all();
        return view('livros.edit', compact('livros', 'autores', 'bibliotecas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livro $livro)
    {
        $request->validate([
            'titulo' => 'required',
            'isbn' => 'required|unique:livros',
            'ano_publicacao' => 'required|integer',
            'autor_id' => 'required|exists:autors,id',
            'biblioteca_id' => 'required|exists:bibliotecas,id',
        ]);
        $livro->update($request->all());
        return redirect()->route('livros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livro $livro)
    {
        $livro->delete();
        return redirect()->route('livros.index');
    }
}
