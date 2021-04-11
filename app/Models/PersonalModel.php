<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonalModel extends Model
{
	
	protected $table                = 'personal';
	protected $primaryKey           = 'idp';
	
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	
	protected $allowedFields        = ['usuario', 'contra', 'nomp', 'app', 'email', 'idpuesto', 'idedo', 'idgi', 'idm', 'idrc', 'status', 'edita'];

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
