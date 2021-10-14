<?php namespace App\Controllers;

class Estoque extends BaseController {
    
    public function index()
    {
       
    }

    public function inserir()
    {
       $data['titulo'] = 'Inserir nova categoria';
       $data['acao'] = 'Inserir';
       echo View('estoque_form', $data);
}
}