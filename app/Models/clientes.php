<?php namespace App\Models;

use CodeIgniter\Model;

class clientesModel extends Model {
    protected $table = 'clientes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nomeproduto'];
    protected $returnType = 'object';
}

?>