@extends('layouts.main')

@section('title', 'dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Livros</h1>
</div>
<div class="col-md10 offset-md-1 dashboard-books-container">
    @if(count($books) > 0)
     
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome do Livro</th>
                <th scope="col">Autor</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
    
    <tbody>
        @foreach($books as $book)
        <tr>
            <td scropt="row">{{ $loop->index +1 }}</td>
            <td><a href="/books/{{ $book->id }}">{{ $book->name }}</a></td>
            <td></td>
            
            <td>
                <a href="/books/edit/{{ $book->id}}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a>
                <form action="/books/{{ $book->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                </form>
             </td>

        </tr>

        @endforeach
    </tbody>
 </table>

    @else
    <p> Você não tem nada do carrinho ainda, <a href="/books/create"> Adicionar Livros</a></p>
    @endif
</div>

@endsection
