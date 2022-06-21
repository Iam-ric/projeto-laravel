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
        <p class="book-name"><ion-icon name="book-outline"></ion-icon>Nome: {{ $book->name }}</p>
        <p class="book-owner"><ion-icon name= "star-outline"></ion-icon>Criador: {{ $bookOwner['name'] }}</p>
        <a href="/dashboard?search={{$book->name}}&date=" class="btn btn-primary" id="book-submit">Ver perfil</a>
    </div>
    
   </div> 
</div>

@endsection