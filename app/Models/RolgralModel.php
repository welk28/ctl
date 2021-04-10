<?php

namespace App\Models;

use CodeIgniter\Model;

class RolgralModel extends Model
{
	
	protected $table                = 'rolgral';
	protected $primaryKey           = 'idrg';
	
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	
	protected $allowedFields        = ['descrg', 'status','modifica'];

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
