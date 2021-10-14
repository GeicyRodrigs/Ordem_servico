<?php namespace App\Controllers;

use App\Models\EstoqueModel;

class Estoque extends BaseController {
    
    public function index()
    {
        //return view('index');
        return view('teste.php');
    }

    public function inserir()
    {
       $data['titulo'] = 'Inserir nova categoria';
       $data['acao'] = 'Inserir';

       $codigo = $this->request->getPost('codigo');
       
      

       $dados = [
        'codigo' => $codigo,
        'cpf' => $cpf,
        
       ];

       $usuarioModel = new \App\Models\EstoqueModel(); 
	    $usuarioModel->insert($dados);
       echo $codigo;


      // echo View('estoque_form', $data);
}
}