@extends('layouts.app')

@section('content')
    <h1>Adicionar Biblioteca</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('biblioteca.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}">
        </div>

        <div class="form-group">
            <label for="endereco">Endereço:</label>
            <textarea class="form-control" id="endereco" name="endereco">{{ old('endereco') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
@endsection