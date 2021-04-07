<?php

namespace App\Controllers;
//use App\Models\Login_model;
use App\Models\MenuModel;
use App\Models\SubmenuModel;
use App\Models\BasemenuModel;
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
		
	if(empty($idm)|| empty($ids)){return redirect()->to(base_url('menu'));}

	//verificar si el identificador tiene registro, de lo contrario redireccionar al menú principal
	$consulta=$this->db->query("SELECT m.idm, m.descm, m.status, m.created_at, m.updated_at, m.edita, p.app, p.nomp from menu m, personal p WHERE m.edita=p.idp and m.idm=$idm");
	$menu=$consulta->getRow();
	$existem = $consulta->getNumRows();
	
	//fin de verificacion de existencia del registro

	//verificar si el identificador tiene registro, de lo contrario redireccionar al menú principal
	$consulta=$this->db->query("SELECT s.ids, s.descs, s.status, s.created_at, s.updated_at, s.modifica, s.idm, p.app, p.nomp from submenu s, personal p WHERE s.modifica=p.idp and s.ids=$ids");
	$submenu=$consulta->getRow();
	$existes = $consulta->getNumRows();
	if(($existem==0)||($existes==0)){return redirect()->to(base_url('menu'));}
	//fin de verificacion de existencia del registro

	$sconsulta=$this->db->query("SELECT * FROM basemenu WHERE ids=$ids");
	$basemenu=$sconsulta->getResult();
	$data=[
		'uri'=> current_url(true),
		'idm'=> $idm,
		'ids'=> $ids,
		'basemenu'=> $basemenu,
		'menu'=> $menu,
		'submenu'=> $submenu
	];
	// //var_dump($idm);

	if (!session('guyus')) {return redirect()->to(base_url('/'));}
	return view('dashboard/submenushow',$data);
}
//FIN DE DATOS DE SUBMENU

//INICIO DE ACTUALIZACION DE SUBMENU
public function updatesSubmenu(){
	print_r($_POST);
	 $SubmenuModel=new SubmenuModel($db);
	$request= \Config\Services::request();
	if(empty($request->getPostGet('status'))){$status=0;}else{$status=1;}
	$data=array(
		'ids'=>$request->getPostGet('ids'),
		'status'=>$status,
		'descs'=>$request->getPostGet('descs'),
		'modifica'=>$request->getPostGet('edita'),
	);
	if($SubmenuModel->save($data)===false){
		//var_dump($menuModel->errors());
		echo 0;
	}else{
		echo 1;
	}
}

//FIN DE ACTUALIZACION DE SUBMENU
//INICIO DE ACTUALIZACION DE BASEMENU
public function updateBasemenu(){
	print_r($_POST);
	 $BasemenuModel=new BasemenuModel($db);
	$request= \Config\Services::request();
	if(empty($request->getPostGet('status'))){$status=0;}else{$status=1;}
	$data=array(
		'idb'=>$request->getPostGet('idb'),
		'status'=>$status,
		'descb'=>$request->getPostGet('descb'),
		'edita'=>$request->getPostGet('edita'),
	);
	if($BasemenuModel->save($data)===false){
		//var_dump($menuModel->errors());
		echo 0;
	}else{
		echo 1;
	}
}

//FIN DE ACTUALIZACION DE BASEMENU

//INICIO DE ALTA DE BASEMENU
public function newBasemenu(){
	print_r($_POST);
	 $BasemenuModel=new BasemenuModel($db);
	$request= \Config\Services::request();
	if(empty($request->getPostGet('status'))){$status=0;}else{$status=1;}
	$data=array(
		'descb'=>$request->getPostGet('descb'),
		'status'=>$status,
		'ids'=>$request->getPostGet('ids'),
		'edita'=>$request->getPostGet('edita')
	);
	if($BasemenuModel->save($data)===false){
		//var_dump($menuModel->errors());
		echo 0;
	}else{
		echo 1;
	}
}

//FIN DE ALTA DE BASEMENU

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

	public function delBasemenu(){
		$request= \Config\Services::request();
		$idb=$request->getPostGet('idb');
		
		$borrar= $this->db->query("delete from basemenu where idb=$idb");
		if($borrar){
			echo 1;
		}else{
			echo 0;
		}
		//var_dump($borrar);
		//var_dump($deleted->errors());
	}
}
