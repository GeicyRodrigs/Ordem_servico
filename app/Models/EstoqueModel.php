<?php namespace App\Models;

use CodeIgniter\Model;

class EstoqueModel extends Model {
    protected $table = 'estoque';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nomeproduto', 'quantidade' ,'unidade' ,'precocusto' ,'lucro','precovenda'];
    protected $returnType = 'object';//array
}

?> 