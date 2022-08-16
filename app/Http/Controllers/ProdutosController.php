<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller{

    //rota para telainicial

    public function inicio(){
        return view('inicio');
    }
    public function salvarProdutoNoBanco(Request $request){
        Produto::create([
            'nome' => $request->nome,
            'valor' => $request->valor,
            'estoque' => $request->estoque
        ]);
        echo "Produto criado com sucesso";
    }

    //função ver produto
    public function verProdutoNoBanco($id){
        $produto = Produto::findOrFail($id);
        return view('ver', ['produto'=> $produto]);
    }
    ////EDITAR PRODUTO
    public function editarProdutoNoBanco($id){
        $produto = Produto::findOrFail($id);
        return view('editar', ['produto'=> $produto]);
    }

    public function atualizarProdutoNoBanco(Request $request, $id){
        $produto = Produto::findOrFail($id);
        $produto->update([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque
  ]);

  echo "Produto editado com sucesso!";
    
    }

    //DELETAR NO BANCO DE DADOS

    public function deletarProdutoNoBanco($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();
        
        echo "Produto excluido com sucesso!";

    }

}
