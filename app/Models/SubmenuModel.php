<?php

namespace App\Models;

use CodeIgniter\Model;

class SubmenuModel extends Model
{
	
	protected $table                = 'submenu';
	protected $primaryKey           = 'ids';
	
	protected $returnType           = 'array';
	protected $useSoftDelete        = true;
	
	protected $allowedFields        = ['descs', 'status','idm','modifica',];

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
