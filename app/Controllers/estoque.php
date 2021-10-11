<?php namespace App\Controllers;

class estoque extends BaseController {
    
    public function index()
    {
        return view('estoque_index');
    }

    public function detalhes ($estoque_id)
    {
        echo "<h1> Exibindo detalhes do produto $estoque_id </h1>";
    }
}