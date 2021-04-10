<?php

namespace App\Models;

use CodeIgniter\Model;

class DatesiteModel extends Model
{
	
	protected $table                = 'datesite';
	protected $primaryKey           = 'id';
	
	protected $returnType           = 'array';
	protected $useSoftDeletes        = false;
	
	protected $allowedFields        = ['icono', 'titulo','mail','fb','tw','ig','telof','telc','edita',];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;


}
