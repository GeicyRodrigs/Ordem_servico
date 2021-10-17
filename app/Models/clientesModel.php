<?php namespace App\Models;

use CodeIgniter\Model;

class clientesModel extends Model {
    protected $table = 'clientes';
    protected $primaryKey = 'id_cli';
    protected $allowedFields = ['Nome', 'CPFCNPJ' ,'CEP' ,'Endereço' ,'Num','Bairro', 'Telefone', 'Email'];
    protected $returnType = 'object';

}

?>