<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfigurateModel extends Model
{
	
	protected $table                = 'configurate';
	protected $primaryKey           = 'id';
	
	protected $returnType           = 'array';
	protected $useSoftDelete        = true;
	
	protected $allowedFields        = ['nomcorto','nomlargo','ruta','status'];

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
