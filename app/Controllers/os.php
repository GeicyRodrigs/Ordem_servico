<?php namespace App\Controllers;

class os extends BaseController {

    public function index(){
        //return view('index.php');
        $osModel = new \App\Models\osModel();
        $data['ordemservico'] = $osModel->find();

        echo view('ordemservico', $data);
        
    }
    
    public function cadastroos(){
        return view('cadastroos.php');
    }


    public function inseriros(){
    
        $funcionario = $this->request->getPost('funcionario');
        $cliente = $this->request->getPost('cliente');
        $objeto = $this->request->getPost('objeto');
        $solicita = $this->request->getPost('solicita');
        $produtoservico = $this->request->getPost('produtoservico');


        $dadosos= [
        'funcionario' => $funcionario,
        'cliente' => $cliente,
        'objeto' => $objeto,
        'solicita' => $solicita,
        'produtoservico' => $produtoservico,
         
        ];
    
       $osModel = new \App\Models\osModel(); 
	   $osModel->insert($dadosos);

       return view('index.php');
        }

        
    }