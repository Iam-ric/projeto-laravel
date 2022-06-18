@extends('layouts.main')

@section('title', 'welcome')

@section('content')

<div id="search-container" class="col-md-12">
   <h1>search for books</h1> 
   <form action="">
    <input type="text" id="search" name="search" class="form-control" placeholder="Search ....">
   </form>
</div>
<div id="books-container" class="col-md-12">
    <h2>Other Books</h2>
    <p class="subtitle">Find more books</p>
    <div id="cards-container" class="row">
        @foreach($books as $book)
        <div class="card col-md-3">
            <img src="/img/kotlin.jpg" alt="{{$book -> title}}">
           <div class="card-body">
               <p class="card-date">18/06/2022</p>
                <h5 class="card-name">{{$book->name}}></h5>
                <p class="card-status">status:{{$book->status}}</p>
                <a href="a" class="btn btn-primary">learn more</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
   
@endsection