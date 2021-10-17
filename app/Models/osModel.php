<?php namespace App\Models;

use CodeIgniter\Model;

class osModel extends Model {
    protected $table = 'ordemservico';
    protected $primaryKey = 'id_serv';
    protected $allowedFields = ['funcionario', 'cliente' ,'objeto' ,'solicita' ,'produtoservico'];
    protected $returnType = 'object';

}

?>