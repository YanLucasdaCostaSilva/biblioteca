@extends('layouts.app')

@section('content')
    <h1>Editar Autor</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('autores.update', $autor) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $autor->nome) }}">
        </div>

        <div class="form-group">
            <label for="biografia">Biografia:</label>
            <textarea class="form-control" id="biografia" name="biografia">{{ old('biografia', $autor->biografia) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
@endsection