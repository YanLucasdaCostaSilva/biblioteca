@extends('layouts.app')

@section('content')
    <h1>Adicionar Livro</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('livros.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo') }}">
        </div>

        <div class="form-group">
            <label for="isbn">ISBN:</label>
            <input type="text" class="form-control" id="isbn" name="isbn" value="{{ old('isbn') }}">
        </div>

        <div class="form-group">
            <label for="ano_publicacao">Ano de Publicação:</label>
            <input type="text" class="form-control" id="ano_publicacao" name="ano_publicacao" value="{{ old('ano_publicacao') }}">
        </div>

        <div class="form-group">
            <label for="autor_id">Autor:</label>
            <select class="form-control" id="autor_id" name="autor_id">
                @foreach($autores as $autor)
                    <option value="{{ $autor->id }}" {{ old('autor_id') == $autor->id ? 'selected' : '' }}>
                        {{ $autor->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="biblioteca_id">Biblioteca:</label>
            <select class="form-control" id="biblioteca_id" name="biblioteca_id">
                @foreach($bibliotecas as $biblioteca)
                    <option value="{{ $biblioteca->id }}" {{ old('biblioteca_id') == $biblioteca->id ? 'selected' : '' }}>
                        {{ $biblioteca->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
@endsection