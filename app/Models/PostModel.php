<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
	
	protected $table                = 'post';
	protected $primaryKey           = 'idpost';
	
	protected $returnType           = 'array';
	protected $useSoftDelete        = true;
	
	protected $allowedFields        = ['imgp','idm', 'ids', 'idb', 'titulo', 'descripcion', 'idp', 'status', 'main', 'edita'];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;


}
