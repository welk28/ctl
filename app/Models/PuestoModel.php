<?php

namespace App\Models;

use CodeIgniter\Model;

class PuestoModel extends Model
{
	
	protected $table                = 'puesto';
	protected $primaryKey           = 'idpuesto';
	
	protected $returnType           = 'array';
	protected $useSoftDelete        = true;
	
	protected $allowedFields        = ['descpuesto', 'status', 'idepto', 'modifica'];

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
