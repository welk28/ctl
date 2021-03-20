<?php

namespace App\Controllers;
use App\Models\Auth_model;
use App\Controllers\BaseController;

class Auth extends BaseController
{
  public function __construct()
	{
		
	}

  public function index()
	{
		
	}
	public function auth()
	{
    
    $usuario=$this->request->getPost('usuario');
		$contra=$this->request->getPost('contra');
		//print_r($_POST);
    $bd =new Auth_model();
		$nr = $bd->searchUser($usuario,sha1($contra)); 
    print_r($nr);
    if(!empty($nr)){
			$data  = [
				'idp' => $nr->idp, 
				'usuario' => $nr->usuario,
        'nombre' => $nr->nomp." ".$nr->app,
				'guyus' => TRUE,
				'idrc'=> $nr->descc
				
			];
			$this->session->set($data);
			//return redirect()->to(base_url('/panel'));
      return 1;
		}else{
			return 0;
		}
	}
	
  public function logout(){
		$this->session->destroy();
		return redirect()->to(base_url('/'));
	}
	public function uno(){
		echo "un menesaje";
	}
}
