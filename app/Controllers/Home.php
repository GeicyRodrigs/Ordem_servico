<?php namespace App\Controllers;

class Home extends BaseController{

    public function index()
    {
        return view('index.php');
    }
    public function teste(){
        return view('teste.php');
    }
   
    public function clientes(){
        return view('clientes.php');
    }
    public function cadastrocliente(){
        return view('cadastrocli.php');
    }

    public function contato(){
        return view('contato.php');
    }

    public function servprod(){
        return view('servprod.php');
    }
    

    public function inserircli()
    {
        
        $codigo = $this->request->getPost('codigo');
        $nome = $this->request->getPost('nome');
        $cpf_cnpj = $this->request->getPost('cpf_cnpj');
        $cep = $this->request->getPost('CEP');
        $endereco = $this->request->getPost('endereco');
        $num = $this->request->getPost('num');
        $bairro = $this->request->getPost('bairro');
        $telefone = $this->request->getPost('telefone');
        $email = $this->request->getPost('email');

        $dadoscli = [
        'id_cli' => $codigo,
        'Nome' => $nome,
        'CPF/CNPJ' => $cpf_cnpj,
        'CEP' => $cep,
        'Endereço' => $endereco,
        'Num' => $num,
        'Bairro' => $bairro,
        'Telefone' => $telefone,
        'Email' => $email,
         
        ];
        /*
        echo "$codigo<br>";
        echo "$nome<br>";
        echo "$cpf_cnpj<br>";
        echo "$cep<br>";
        echo "$endereco<br>";
        echo "$num<br>";
        echo "$bairro<br>";
        echo "$telefone<br>";
        echo "$email";

        */

  
        
 
        $clienteModel = new \App\Models\clientesModel(); 
        $clienteModel->insert($dadoscli);
    
        return view('clientes.php');



    }


    
}
