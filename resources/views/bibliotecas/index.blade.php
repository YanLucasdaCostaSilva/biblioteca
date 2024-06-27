@extends('layouts.app')

@section('content')
    <h1>Bibliotecas</h1>
    <a href="{{ route('biblioteca.create') }}" class="btn btn-primary mb-3">Adicionar Biblioteca</a>

    @if($bibliotecas->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bibliotecas as $biblioteca)
                    <tr>
                        <td><a href="{{ route('biblioteca.show', $biblioteca) }}">{{ $biblioteca->nome }}</a></td>
                        <td>{{ $biblioteca->endereco }}</td>
                        <td>
                            <a href="{{ route('biblioteca.edit', $biblioteca) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('biblioteca.destroy', $biblioteca) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Nenhuma biblioteca encontrada.</p>
    @endif
@endsection