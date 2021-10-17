<?php namespace App\Controllers;

class Home extends BaseController{

    public function index()
    {
        return view('index.php');
        $osModel = new \App\Models\osModel();
        $data['ordemservico'] = $osModel->find();

        echo view('ordemservico', $data);

    }
    public function teste(){
        return view('teste.php');
        
    }

    public function cadastroos(){
        return view('cadastroos.php');
    }


   
    public function clientes(){
        //return view('clientes.php');
        $clienteModel = new \App\Models\clientesModel();
        $data['clientes'] = $clienteModel->find();
        //$data['msg'] = 'titulo';
        //print_r($data['clientes']);
        

        echo view('clientes', $data);
        
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

    public function login(){
        return view('login.php');
    }

    public function redefinirsenha(){
        return view('redefinirsenha.php');
    }


    

    public function inserircli()
    {
        
        $codigo = $this->request->getPost('codigo');
        $nome = $this->request->getPost('nome');
        $cpfcnpj = $this->request->getPost('cpfcnpj');
        $cep = $this->request->getPost('CEP');
        $endereco = $this->request->getPost('endereco');
        $num = $this->request->getPost('num');
        $bairro = $this->request->getPost('bairro');
        $telefone = $this->request->getPost('telefone');
        $email = $this->request->getPost('email');

        $dadoscli = [
        'id_cli' => $codigo,
        'Nome' => $nome,
        'CPFCNPJ' => $cpfcnpj,
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
