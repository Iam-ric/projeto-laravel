@extends('layouts.main')

@section('title', 'dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus carrinho</h1>
</div>
<div class="col-md10 offset-md-1 dashboard-books-container">
    @if(count(events) > 0)
    @else
    <p> Você não tem nada do carrinho ainda, <a href="/books/create"> Adicionar Livros</a></p>
    @endif
</div>

@endsection
