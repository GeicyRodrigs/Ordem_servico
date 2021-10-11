<?php namespace App\Controllers;

class estoque extends BaseController {
    
    public function index()
    {
        echo "<h1>Produtos e Serviços</h1>";
    }

    public function detalhes ($estoque_id)
    {
        echo "<h1> Exibindo detalhes do produto $estoque_id </h1>";
    }
}