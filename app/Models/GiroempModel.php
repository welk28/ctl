<?php

namespace App\Models;

use CodeIgniter\Model;

class GiroempModel extends Model
{
	
	protected $table                = 'giroemp';
	protected $primaryKey           = 'idgi';
	
	protected $returnType           = 'array';
	protected $useSoftDelete        = true;
	
	protected $allowedFields        = ['descg','status','edita'];

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
