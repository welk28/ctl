<?php

namespace App\Models;

use CodeIgniter\Model;

class Configurate_model extends Model
{
	// protected $DBGroup              = 'default';
	// protected $table                = 'configurate'; //la tabla a conectarse
	// protected $primaryKey           = 'id'; //llave primaria de la tabla conectada
	// protected $useAutoIncrement     = true; //si p
	// protected $insertID             = 0;
	// protected $returnType           = 'array'; //retorna arreglos
	// protected $useSoftDelete        = false; //en true, no borra el registro, solo lo desabilita
	
	// protected $allowedFields        = ['ruta','status'];

	// // Dates
	// protected $useTimestamps        = false;
	// protected $dateFormat           = 'datetime';
	// protected $createdField         = 'created_at';
	// protected $updatedField         = 'updated_at';
	// protected $deletedField         = 'deleted_at';
	public function getConfigfb($id){
		$resultado= $this->db->query("select * from configurate where id=$id and status=1");
        return $resultado->getRow();
	}
}
