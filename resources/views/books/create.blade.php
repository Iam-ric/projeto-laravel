@extends('layouts.main')

@section('title', 'Criar Eventos')

@section('content')

<div id="book-create-container" class="col-md-6 offset-md-3">
    <h1>Adicicione um Livro</h1>
    <form action="/books" method="POST">
      <div class="form-group">
        <label for="title">Books:</label>
         <input type="text" class="form-control" id="title" name="title" placeholder="Tipo d Livro">
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
        <label for="title">Price:</label>
         <input type="text" class="form-control" id="price" name="price" placeholder="Valor do Livro">
      </div>
      <div class="form-group">
        <label for="title">Status:</label>
         <input type="text" class="form-control" id="status" name="status" placeholder="Disponivel">
      </div>
    </form>
</div>

@endsection