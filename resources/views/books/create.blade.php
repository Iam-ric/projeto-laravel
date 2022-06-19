@extends('layouts.main')

@section('title', 'Criar Eventos')

@section('content')

<div id="book-create-container" class="col-md-6 offset-md-3">
    <h1>Adicione um Livro</h1>
    <form action="/books" method="POST">
      @csrf
      <div class="form-group">
        <label for="title">Literary genre:</label>
         <input type="text" class="form-control" id="title" name="title" placeholder="Gênero do Livro">
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
         <select name="status" id="status" class="form-control">
            <option value="0">Indisponivel</option>
            <option value="1">Disponivel</option>
         </select>
      </div>

      <input type="submit" class="btn btn-primary" value="Adicionar">
   
    </form>
</div>

@endsection