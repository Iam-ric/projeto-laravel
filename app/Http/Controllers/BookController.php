<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\User;


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

      $user = auth()->user();
      $book->user_id = $user->id;

      $book->save();

      return redirect('/')->with('msg', 'Livro cadastrado com sucesso');
   }

   public function show($id) {
      
      $book = Book::findOrFail($id);

      $bookOwner = User::where('id', $book->user_id)->first()->toArray();

      return view('books.show', ['book' => $book, 'bookOwner' => $bookOwner]);
   }

   public function dashboard() {
      
      $user = auth()->user();

      $books = $user->books;

      return view('books.dashboard', ['books' => $books]);

   }

   public function destroy($id) {
      Book::findOrFail($id)->delete();

      return redirect('/dashboard')->with('msg', 'Livro excluido com sucesso!');
   }

   public function edit($id){

      $book = Book::findOrFail($id);
      return view('books.edit',['book' => $book]); 
   }

   //referencia a tabela pessoas
  
   public function people (){
      return view('books.people');
   }

   public function storePeople(Request $request) {
      
      $book = new Book;

      $book->name = $request->name;
      $book->email = $request->email;
      $book->telephone = $request->telephone;
      $book->date = $request->date;

      //image upload
      if($request->hasfile('image') && $request->file('image')->isValid()) {
          
         $requestImage = $request->image;

         $extension = $requestImage->extension();

         $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
         
         $request->image->move(public_path('img/books'), $imageName);

         $book->image = $imageName;
      }

      $user = auth()->user();
      $book->user_id = $user->id;

      $book->save();

      return redirect('/')->with('msg', ' Informações cadastradas com sucesso');
   }

}
