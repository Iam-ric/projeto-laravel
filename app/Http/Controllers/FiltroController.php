<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class FiltroController extends Controller
{
    public function dashboard(){

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



    
/*function dashboard(){
        $search = request('search');

        $unidades = Book::where('nome', 'LIKE', '%'.$search.'%')
                            ->orWhere('date', 'LIKE', '%'.$search.'%')
                            ->paginate(10);

        return view('books.dashboard', compact('unidades', 'search'));
    }*/
}
