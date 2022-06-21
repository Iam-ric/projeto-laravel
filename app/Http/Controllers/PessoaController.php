<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\User;
class PessoaController extends Controller
{
    
     public function create (){
      return view('pessoas.create');
     }
  
     public function store(Request $request) {
        
        $pessoa = new Pessoa;
  
        $pessoa->name = $request->name;
        $pessoa->email = $request->email;
        $pessoa->telephone = $request->telephone;
        $pessoa->date = $request->date;
  
        //image upload
        if($request->hasfile('image') && $request->file('image')->isValid()) {
            
           $requestImage = $request->image;
  
           $extension = $requestImage->extension();
  
           $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
           
           $request->image->move(public_path('img/pessoas'), $imageName);
  
           $pessoa->image = $imageName;
        }
  
        $user = auth()->user();
        $pessoa->user_id = $user->id;
  
        $pessoa->save();
  
        return redirect('/')->with('msg', 'Livro cadastrado com sucesso');
     }
  
     public function show($id) {
        
        $pessoa = Pessoa::findOrFail($id);
  
        $pessoaOwner = User::where('id', $pessoa->user_id)->first()->toArray();
  
        return view('pessoas.show', ['pessoa' => $pessoa, 'pessoaOwner' => $pessoaOwner]);
     }
  
     public function dashboard() {
        
        $user = auth()->user();
  
        $pessoas = $user->pessoas;
  
        return view('pessoas.dashboard', ['pessoas' => $pessoas]);
  
     }
  
     public function destroy($id) {
        Pessoa::findOrFail($id)->delete();
  
        return redirect('/dashboard')->with('msg', 'Livro excluido com sucesso!');
     }
  
     public function edit($id){
  
        $pessoa = Pessoa::findOrFail($id);
        return view('pessoas.edit',['pessoa' => $pessoa]); 
     }
}