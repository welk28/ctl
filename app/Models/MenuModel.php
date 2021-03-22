<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
	
	protected $table                = 'menu';
	protected $primaryKey           = 'id';
	
	protected $returnType           = 'array';
	protected $useSoftDelete        = true;
	
	protected $allowedFields        = ['descm','status'];

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
