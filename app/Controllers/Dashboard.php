<?php

namespace App\Controllers;
//use App\Models\Login_model;
use App\Models\MenuModel;
use App\Models\SubmenuModel;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
	
	public function __construct()
	{
		if (!session('guyus')) {return redirect()->to(base_url('/'));}
		
	}
	
	public function index()
	{
		$data=[
      'uri'=> current_url(true)
    ];
    if (!session('guyus')) {return redirect()->to(base_url('/'));}
    return view('panel',$data);
	}

	public function Menu(){
		$datos= $this->db->query("SELECT m.idm, m.descm, m.status, p.idp, p.app, p.nomp, m.created_at, m.deleted_at, m.updated_at, m.deleted FROM menu m, personal p WHERE p.idp=m.edita AND m.deleted=0;");
		$result=$datos->getResult();
		// $menuModel=new MenuModel($db);
		// $result=$menuModel->findAll();
		// var_dump($result);
		$data=[
      'uri'=> current_url(true),
			'menu'=> $result
    ];
    if (!session('guyus')) {return redirect()->to(base_url('/'));}
		return view('dashboard/menu',$data);
	}
	public function Datesite(){
		$data=[
      'uri'=> current_url(true)
    ];
    if (!session('guyus')) {return redirect()->to(base_url('/'));}
		return view('dashboard/datesite',$data);
	}
	public function Depto(){
		$data=[
      'uri'=> current_url(true)
    ];
    if (!session('guyus')) {return redirect()->to(base_url('/'));}
		return view('dashboard/depto',$data);
	}
	public function Role(){
		$data=[
      'uri'=> current_url(true)
    ];
    if (!session('guyus')) {return redirect()->to(base_url('/'));}
		return view('dashboard/role',$data);
	}
	public function Business(){
		$data=[
      'uri'=> current_url(true)
    ];
    if (!session('guyus')) {return redirect()->to(base_url('/'));}
		return view('dashboard/business',$data);
	}
	public function Prueba(){
		echo "realizando prueba de carga a github";
	}
	public function Publications(){
		$datos= $this->db->query("select * from post where deleted=0;");
		$result=$datos->getResult();
		$data=[
      'uri'=> current_url(true),
			'post'=>$result
    ];
    if (!session('guyus')) {return redirect()->to(base_url('/'));}
		return view('dashboard/publications',$data);
	}
	public function NewPublication(){
		$menuc= $this->db->query("select * from menu where status=1;");
		$menu=$menuc->getResult();
		$submenuc= $this->db->query("select * from submenu where status=1;");
		$submenu=$submenuc->getResult();
		$basemenuc= $this->db->query("select * from basemenu where status=1;");
		$basemenu=$basemenuc->getResult();
		
		$data=[
      'uri'=> current_url(true),
			'menu'=> $menu,
			'submenu'=> $submenu,
			'basemenu'=> $basemenu
    ];
    if (!session('guyus')) {return redirect()->to(base_url('/'));}
		return view('dashboard/newpublication', $data);
	}
	public function SavePublication(){
		
	}
	public function showMenu($idm){
		//verificar si el identificador tiene registro, de lo contrario redireccionar al menú principal
		$consulta=$this->db->query("SELECT m.idm, m.descm, m.status, m.created_at, m.updated_at, m.edita, p.app, p.nomp from menu m, personal p WHERE m.edita=p.idp and m.idm=$idm");
		$menu=$consulta->getRow();
		$existe = $consulta->getNumRows();
		if($existe==0){return redirect()->to(base_url('menu'));}
		//fin de verificacion de existencia del registro

		$sconsulta=$this->db->query("SELECT * FROM submenu WHERE idm=$idm");
		$submenu=$sconsulta->getResult();
		$data=[
      'uri'=> current_url(true),
			'idm'=> $idm,
			'menu'=> $menu,
			'submenu'=> $submenu
    ];
		//var_dump($idm);

		if (!session('guyus')) {return redirect()->to(base_url('/'));}
		return view('dashboard/menushow',$data);
	}
	public function updateMenu(){
		print_r($_POST);
		 $menuModel=new MenuModel($db);
		$request= \Config\Services::request();
		if(empty($request->getPostGet('status'))){$status=0;}else{$status=1;}
		$data=array(
			'idm'=>$request->getPostGet('idm'),
			'status'=>$status,
			'descm'=>$request->getPostGet('descm'),
			'edita'=>$request->getPostGet('edita'),
		);
		if($menuModel->save($data)===false){
			//var_dump($menuModel->errors());
			echo 0;
		}else{
			echo 1;
		}
	}
	public function addSubmenu(){
		print_r($_POST);
		$submenuModel=new SubmenuModel($db);
		$request= \Config\Services::request();
		if(empty($request->getPostGet('status'))){$status=0;}else{$status=1;}
		$data=array(
		'idm'=>$request->getPostGet('idm'),
		'descs'=>$request->getPostGet('descs'),
		'status'=>$status,
		'modifica'=>$request->getPostGet('modifica'),
		 );
		if($submenuModel->save($data)===false){
			//var_dump($submenuModel->errors());
			echo 0;
		}else{
			echo 1;
		}
	}
//MOSTRAR DATOS DEL SUBMENUC
public function showSubmenu(){
	$request= \Config\Services::request();
	
	$idm=$request->uri->getSegment(2);
	$ids=$request->uri->getSegment(3);
	print_r($idm);
	print_r($ids);
	
	if(empty($idm)|| empty($ids)){return redirect()->to(base_url('menu'));}

	//verificar si el identificador tiene registro, de lo contrario redireccionar al menú principal
	$consulta=$this->db->query("SELECT m.idm, m.descm, m.status, m.created_at, m.updated_at, m.edita, p.app, p.nomp from menu m, personal p WHERE m.edita=p.idp and m.idm=$idm");
	$menu=$consulta->getRow();
	$existe = $consulta->getNumRows();
	if($existe==0){return redirect()->to(base_url('menu'));}
	//fin de verificacion de existencia del registro
	
	//verificar si el identificador tiene registro, de lo contrario redireccionar al menú principal
	$consulta=$this->db->query("SELECT m.idm, m.descm, m.status, m.created_at, m.updated_at, m.edita, p.app, p.nomp from menu m, personal p WHERE m.edita=p.idp and m.idm=$idm");
	$menu=$consulta->getRow();
	$existe = $consulta->getNumRows();
	if($existe==0){return redirect()->to(base_url('menu'));}
	//fin de verificacion de existencia del registro

	// $sconsulta=$this->db->query("SELECT * FROM submenu WHERE idm=$idm");
	// $submenu=$sconsulta->getResult();
	// $data=[
	// 	'uri'=> current_url(true),
	// 	'idm'=> $idm,
	// 	'menu'=> $menu,
	// 	'submenu'=> $submenu
	// ];
	// //var_dump($idm);

	// if (!session('guyus')) {return redirect()->to(base_url('/'));}
	// return view('dashboard/menushow',$data);
}
//FIN DE DATOS DE SUBMENU
	public function borraMenu(){
		$request= \Config\Services::request();
		$idm=$request->getPostGet('idm');
		var_dump($idm);
		// $borrar= $this->db->query("update menu set deleted=1 where idm=$idm;");
		// if($borrar){
		// 	echo 1;
		// }else{
		// 	echo 0;
		// }
		//var_dump($borrar);
		//var_dump($deleted->errors());
	}
}
