@extends('layouts.main')

@section('title', 'Criar Cadastro')

@section('content')

<div id="book-create-container" class="col-md-6 offset-md-3">
    <h1>Adicione um Cliente</h1>
    <form action="/books" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="image">Imagem:</label>
         <input type="file" id="image" name="image" class="from-control-file">
      </div>
      <div class="form-group">
        <label for="title">Nome</label>
         <input type="text" class="form-control" id="name" name="name" placeholder="Nome Completo">
      </div>
      <div class="form-group">
        <label for="title">Email</label>
         <input type="text" class="form-control" id="email" name="email" placeholder="Email válido">
      </div>
      <div class="form-group">
        <label for="title">Telefone:</label>
         <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Sem DDD">
      </div>
      <div class="form-group">
        <label for="date">Data de Nascimento:</label>
         <input type="date" class="form-control" id="date" name="date">
      </div>

      <input type="submit" class="btn btn-primary" value="Adicionar">
   
    </form>
</div>

@endsection