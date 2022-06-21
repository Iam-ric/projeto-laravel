
@extends('layouts.main')

@section('title', 'welcome')

@section('content')

<div id="search-container" class="col-md-12">
   <h1>Buscar Livros</h1> 
   <form action="/" method="GET">
    <input type="text" id="search" name="search" class="form-control" placeholder="Procurar ....">
   </form>
</div>
<div id="books-container" class="col-md-12">

@if($search)
    <h2>Buscando por: {{ $search}}</h2>
    @else
    <h2>Outros Livros</h2>
    <p class="subtitle">Encontrar mais livros</p>
    @endif

    
    <div id="cards-container" class="row">
        @foreach($books as $book)
        <div class="card col-md-3">
            <img src="/img/books/{{ $book->image}}" alt="{{$book -> title}}">
           <div class="card-body">
               <p class="card-date">{{ date('d/m/Y', strtotime($book->date)) }}</p>
                <h5 class="card-name">{{$book->name}}></h5>
                <p class="card-status">status:{{$book->status}}</p>
                <a href="/books/{{ $book->id }}" class="btn btn-primary">Saiba mais</a>
            </div>
        </div>
        @endforeach
        @if(count($books) == 0 && $search)
        <p>nome ou idade não encontrados {{ $search }}! <a href="/">Ver todos</a></p>
        @elseif(count($books) == 0)
        <p>Não há Clientes cadastrados</p>
        @endif
    </div>
</div>
   
@endsection

