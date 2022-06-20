<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
   public function index(){

      $search = request('search');
 
      if($search) {

         $books = Book::where([
            ['name', 'like', '%'.$search.'%']
         ])->get();
         
      }else {
         $books = Book::all();
      }
     
    return view('welcome', ['books' => $books, 'search' => $search]);
   }

   public function create (){
    return view('books.create');
   }

   public function store(Request $request) {
      
      $book = new Book;

      $book->name = $request->name;
      $book->date = $request->date;
      $book->author = $request->author;
      $book->price = $request->price;
      $book->status = $request->status;

      //image upload
      if($request->hasfile('image') && $request->file('image')->isValid()) {
          
         $requestImage = $request->image;

         $extension = $requestImage->extension();

         $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
         
         $request->image->move(public_path('img/books'), $imageName);

         $book->image = $imageName;
      }

      $book->save();

      return redirect('/')->with('msg', 'Livro cadastrado com sucesso');
   }

   public function show($id) {
      
      $book = Book::findOrFail($id);

      return view('books.show', ['book' => $book]);
   }
}
