<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
   public function index(){
    $books = Book::all();
    return view('welcome', ['books' => $books]);
   }

   public function create (){
    return view('books.create');
   }

   public function store(Request $request) {
      
      $book = new Book;

      $book->name = $request->name;
      $book->author = $request->author;
      $book->price = $request->price;
      $book->status = $request->status;

      $book->save();

      return redirect('/')->with('msg', 'Livro cadastrado com sucesso');
   }
}
