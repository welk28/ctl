<?php

namespace App\Models;

use CodeIgniter\Model;

class RolcargoModel extends Model
{
	
	protected $table                = 'rolcargo';
	protected $primaryKey           = 'idrc';
	
	protected $returnType           = 'array';
	protected $useSoftDelete        = true;
	
	protected $allowedFields        = ['descc', 'status', 'idrg', 'modifica'];

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
