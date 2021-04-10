<?php

namespace App\Models;

use CodeIgniter\Model;

class DepartamentoModel extends Model
{
	
	protected $table                = 'departamento';
	protected $primaryKey           = 'idepto';
	
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	
	protected $allowedFields        = ['nomdepto','status','edita'];

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
