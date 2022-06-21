@extends('layouts.main')

@section('title', 'Editando Cliente')

@section('content')

<div id="book-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{ $book ->name}}</h1>
    <form action="/books/edit/{{ $book->id}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="image">Imagem:</label>
         <input type="file" id="image" name="image" class="from-control-file">
         <img src="/img/books/{{ $book->image}}" alt="{{ $book->name}}" class="img-preview">
      </div>
      <div class="form-group">
        <label for="title">Name:</label>
         <input type="text" class="form-control" id="name" name="name" placeholder="Nome do Livro">
      </div>
      <div class="form-group">
        <label for="title">Author:</label>
         <input type="text" class="form-control" id="author" name="author" placeholder="Nome do Autor">
      </div>
      <div class="form-group">
        <label for="date">data da publicação:</label>
         <input type="date" class="form-control" id="date" name="date">
      </div>
      
      
      <div class="form-group">
        <label for="title">Price:</label>
         <input type="text" class="form-control" id="price" name="price" placeholder="Valor do Livro">
      </div>

      <input type="submit" class="btn btn-primary" value="Adicionar">
   
    </form>
</div>

@endsection