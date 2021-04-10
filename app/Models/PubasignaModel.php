<?php

namespace App\Models;

use CodeIgniter\Model;

class PubasignaModel extends Model
{
	
	protected $table                = 'pubasigna';
	protected $primaryKey           = 'idp';
	
	protected $returnType           = 'array';
	protected $useSoftDeletes = false;
	
	protected $allowedFields        = ['idm','status','edita'];

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
