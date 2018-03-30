<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cadastroModel;

class insertController extends Controller
{
   
    public function index(){
    
        $servicos = cadastroModel::all();
        return view('servico.index', compact('servicos'));
    }

   
    public function store(Request $request){
    
        
        $dados = $request->all();
        cadastroModel::create($dados);

        return redirect()->route('servico.index');

    }

    
    public function show($id){
    
        //
    }

   
    public function edit($id){
    
        //
    }

    
    public function update(Request $request, $id){
    
        //
    }

    
    public function destroy($id){
    
        //
    }
}
