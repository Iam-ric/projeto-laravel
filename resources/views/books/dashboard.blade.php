@extends('layouts.main')

@section('title', 'dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Clientes</h1>
</div>
<div class="col-md10 offset-md-1 dashboard-books-container">
    @if(count($books) > 0)

    <div class="col-md-12">
        <h1>Buscar </h1>
        <form action="/dashboard" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar ....">
            <div class="form-group">
                <label for="date">Data de Nascimento:</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>

            <div class="form-group">
                <input type="submit" value="Pesquisar">
            </div>
        </form>
    </div>
    <div id="books-container" class="col-md-12">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach($books as $book)
                <tr>
                    <td scropt="row">{{ $loop->index +1 }}</td>
                    <td><a href="/books/{{ $book->id }}">{{ $book->name }}</a></td>
                    <td><a href="/books/{{ $book->id }}">{{ $book->date->format('d/m/Y') }}</a></td>

                    <td>
                        <a href="/books/edit/{{ $book->id}}" class="btn btn-info edit-btn">
                            <ion-icon name="create-outline"></ion-icon>Editar
                        </a>

                        <form action="/books/{{ $book->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn">
                                <ion-icon name="trash-outline"></ion-icon>Deletar
                            </button>
                        </form>
                    </td>

                </tr>

                @endforeach
            </tbody>
        </table>

        @else
        <p> Cliente inexistente <a href="/books/create"> Adicionar Cliente</a></p>
        @endif
    </div>

    @endsection