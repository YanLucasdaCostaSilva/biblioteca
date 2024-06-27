@extends('layouts.app')

@section('content')
    <h1>Detalhes do Livro</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $livro->titulo }}</h5>
            <p class="card-text">ISBN: {{ $livro->isbn }}</p>
            <p class="card-text">Ano de Publicação: {{ $livro->ano_publicacao }}</p>
            <p class="card-text">Autor: {{ $livro->autor->nome }}</p>
            <p class="card-text">Biblioteca: {{ $livro->biblioteca->nome }}</p>
        </div>
    </div>

    <a href="{{ route('livros.index') }}" class="btn btn-secondary mt-3">Voltar</a>
@endsection