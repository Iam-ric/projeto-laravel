@extends('layouts.main')

@section('title', 'Editar Cadastro')

@section('content')

<div id="book-create-container" class="col-md-6 offset-md-3">
  <h1>Editando: {{ $book->name }}</h1>
  <form action="/books/edit/{{ $book->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="image">Nome:</label>
      <input type="file" id="image" name="image" class="from-control-file">
      <img src="/img/books/{{ $book->image}}" alt="{{ $book->name}}" class="img-preview">
    </div>
    <div class="form-group">
      <label for="title">Email:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Email valido">
    </div>
    <div class="form-group">
      <label for="title">Telefone:</label>
      <input type="text" class="form-control" id="author" name="author" placeholder="Sem DDD">
    </div>
    <div class="form-group">
      <label for="date">Data de Nascimento:</label>
      <input type="date" class="form-control" id="date" name="date">
    </div>

    <input type="submit" class="btn btn-primary" value="Adicionar">

  </form>
</div>

@endsection