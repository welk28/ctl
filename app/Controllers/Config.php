<?php

namespace App\Controllers;
//use App\Models\Login_model;
//use App\Models\Configurate_model;
use App\Controllers\BaseController;

class Config extends BaseController
{
	
	public function __construct()
	{
		
		if (!session('guyus')) {
			return redirect()->to(base_url('/'));
		}
		
	}
	
	public function index()
	{
    // if (!session('guyus')) {
		// 	return redirect()->to(base_url('/'));
		// }
    echo "estamos dentro de configuración";
	}

}
