<?php namespace App\Controllers;

class estoque extends BaseController {
    
    public function servprod(){
        return view('servprod.php');
    }

    public function cadastroestoque(){
        //return view('cadastroestoque.php');
        $estoqueModel = new \App\Models\estoqueModel();
        $data['estoque'] = $estoqueModel->find();
    }

    public function cadastroos(){
        return view('cadastroos.php');
    }



    public function inserirestoque(){
    
        $nomeproduto = $this->request->getPost('nomeproduto');
        $quantidade = $this->request->getPost('quantidade');
        $unidade = $this->request->getPost('unidade');
        $precocusto = $this->request->getPost('precocusto');
        $lucro = $this->request->getPost('lucro');
        $precovenda = $this->request->getPost('precovenda');


        $dadosestoque= [
        'nomeproduto' => $nomeproduto,
        'quantidade' => $quantidade,
        'unidade' => $unidade,
        'precocusto' => $precocusto,
        'lucro' => $lucro,
        'precovenda' => $precovenda,
         
        ];
    

       $estoqueModel = new \App\Models\EstoqueModel(); 
	   $estoqueModel->insert($dadosestoque);
       return view('servprod.php');
        }
    }