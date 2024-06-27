@extends('layouts.app')

@section('content')
    <h1>Editar Biblioteca</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('biblioteca.update', $biblioteca) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ old('nome', $biblioteca->nome) }}"><br>

        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" value="{{ old('endereco', $biblioteca->endereco) }}"><br>

        <button type="submit">Atualizar</button>
    </form>
@endsection