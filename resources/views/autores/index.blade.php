@extends('layouts.app')

@section('content')
    <h1>Autores</h1>
    <a href="{{ route('autores.create') }}" class="btn btn-primary mb-3">Adicionar Autor</a>

    @if($autores->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Biografia</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($autores as $autor)
                    <tr>
                        <td><a href="{{ route('autores.show', $autor) }}">{{ $autor->nome }}</a></td>
                        <td>{{ Str::limit($autor->biografia, 50) }}</td>
                        <td>
                            <a href="{{ route('autores.edit', $autor) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('autores.destroy', $autor) }}" method="POST" style="display:inline;">
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
        <p>Nenhum autor encontrado.</p>
    @endif
@endsection