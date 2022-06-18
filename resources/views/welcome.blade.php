@extends('layouts.main')

@section('title', 'welcome')

@section('content')

@foreach($books as $book)
 <p>{{ $book->name }} -- {{$book->price}}</p>
@endforeach
   
@endsection