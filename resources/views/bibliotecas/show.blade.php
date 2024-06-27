@extends('layouts.app')

@section('content')
    <h1>Detalhes da Biblioteca</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nome da biblioteca: {{ $biblioteca->nome }}</h5>
            <p class="card-text">Endereço: {{ $biblioteca->endereco }}</p>
        </div>
    </div>

    <a href="{{ route('biblioteca.index') }}" class="btn btn-secondary mt-3">Voltar</a>
@endsection