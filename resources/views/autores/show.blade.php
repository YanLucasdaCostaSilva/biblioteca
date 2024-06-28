@extends('layouts.app')

@section('content')
    <h1>Detalhes do Autor</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nome do Autor: {{ $autor->nome }}</h5>
            <p class="card-text">Biografia: {{ $autor->biografia }}</p>
        </div>
    </div>

    <a href="{{ route('autores.index') }}" class="btn btn-secondary mt-3">Voltar</a>
@endsection