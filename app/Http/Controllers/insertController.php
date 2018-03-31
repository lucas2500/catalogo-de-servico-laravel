<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cadastroModel;

class insertController extends Controller
{

    public function index(){

        $servicos = cadastroModel::get(['id', 'nomeServico', 'horarioFunc', 'status']);
        // $servicos = cadastroModel::all();
        return view('servico.index', compact('servicos'));
    }


    public function store(Request $request){


        $dados = $request->all();
        cadastroModel::create($dados);

        return redirect()->route('servico.index');

    }

    
    public function show($id){

        $dados = cadastroModel::find($id);
        return view('servico.detalhe', compact('dados'));

    }


    public function edit($id){

        $dados = cadastroModel::find($id);
        return view('servico.editar', compact('dados'));
    }

    
    public function update(Request $request, $id){

        $servico = cadastroModel::find($id);
        $dados = $request->all();
        $servico->update($dados);

        return redirect()->route('servico.index');
    }

    
    public function destroy($id){

        
    }

}
