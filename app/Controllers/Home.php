<?php

namespace App\Controllers;
use App\Models\Login_model;
use App\Models\Configurate_model;
use App\Controllers\BaseController;

class Home extends BaseController
{
	
	public function __construct()
	{
		
		
	}
	
	public function index()
	{

		// $mensaje= session('mensaje');
		// $con= new Login_model();
    // $roles=$con->getRol();
		// $data=[
    //   'roles'=> $roles,
		// 	'mensaje' => $mensaje
    // ];
		echo view('layouts/template');
	}

	public function auth(){
		//$this->$session = \Config\Services::session();
		$rol=$this->request->getPost('rol');
		$rfcp=$this->request->getPost('rfcp');
		$contra=$this->request->getPost('contra');
		//echo $rol."/".$rfcp."/".$contra;
		//busacar si el usuario está autorizado o tiene acceso, dentro de la tabla permisos
		$con =new Login_model();
		$nr = $con->verPermiso($rol,$rfcp,sha1($contra)); 
		 
		//print_r($nr);
		if(!empty($nr)){
			$per = $con->verPeriodo();
			//ver si aparece
			echo"existen registros <br>";	
			echo $nr->rfcp." ".$nr->nomdoc." ".$nr->idr." ".$nr->tipo." ".$per->periodo." ".$per->descper;
			$data  = [
				'rfcp' => $nr->rfcp, 
				'nombre' => $nr->nomdoc,
				'guyu' => TRUE,
				'idr'=> $nr->idr,
				'tipo'=> $nr->tipo,
				'periodo' => $per->periodo, 
				'descper' => $per->descper
			];
		
			
			$this->session->set($data);
			//return redirect()->to(base_url('/inicio'))->with('mensaje','1');
			return redirect()->to(base_url('/panel'));
			//redirect(base_url('/panel'));
		}else{
			return redirect()->to(base_url('/'))->with('mensaje','El usuario y/o contraseña son incorrectos');
			//redirect(base_url('/'));
		}
	}
	
	public function panel(){
		if(session('guyus')) {
			return view('panel');
		}else{
			return redirect()->to(base_url('/'));
		}
		
	}


	public function ponerDatos(){
		
		$newdata= [
			'name'=> 'welkito',
			'email' => 'juchitan@welkito.com',
			'login' => TRUE
		];
		$this->session->set($newdata);
		echo $this->session->get('email');
	}
	public function leerDatos(){
		
		echo $this->session->get('name');
	}
}
