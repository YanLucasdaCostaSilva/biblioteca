@extends('layouts.app')

@section('content')
    <h1>Livros</h1>
    <a href="{{ route('livros.create') }}" class="btn btn-primary mb-3">Adicionar Livro</a>

    @if($livros->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>ISBN</th>
                    <th>Ano de Publicação</th>
                    <th>Autor</th>
                    <th>Biblioteca</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($livros as $livro)
                    <tr>
                        <td><a href="{{ route('livros.show', $livro) }}">{{ $livro->titulo }}</a></td>
                        <td>{{ $livro->isbn }}</td>
                        <td>{{ $livro->ano_publicacao }}</td>
                        <td>{{ $livro->autor->nome }}</td>
                        <td>{{ $livro->biblioteca->nome }}</td>
                        <td>
                            <a href="{{ route('livros.edit', $livro) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('livros.destroy', $livro) }}" method="POST" style="display:inline;">
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
        <p>Nenhum livro encontrado.</p>
    @endif
@endsection