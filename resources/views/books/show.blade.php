@extends('layouts.main')

@section('title', $book->title)

@section('content')

<div class="col-md-10 offset-md-1">
   <div class="row">
    <div id="image-container" class="col-md-6">
        <img src="/img/books/{{ $book->image}}" class="img-fluid" alt="{{ $book->title}}">
    </div>
    <div id="info-container" class="col-md-6">
        <h1>{{ $book->title}}</h1>
        <p class="book-name"><ion-icon name="book-outline"></ion-icon>{{ $book->name }}</p>
        <p class="book-usuario"><ion-icon name= "people-outline"></ion-icon>Usuario</p>
        <p class="book-owner"><ion-icon name= "star-outline"></ion-icon>Administrador</p>
        <a href="a" class="btn btn-primary" id="book-submit">Confirmar compra</a>
    </div>
    <div class="col-md-12" id="description-container">
        <h3>Descrição do Livro:</h3>
        <p class="book-description">{{ $book->name }}</p>
    </div>
   </div> 
</div>

@endsection