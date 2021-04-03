<?php

namespace App\Controllers;
//use App\Models\Login_model;
use App\Models\MenuModel;
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
		$datos= $this->db->query("SELECT m.idm, m.descm, m.status, p.idp, p.app, p.nomp FROM menu m, personal p WHERE p.idp=m.edita;");
		$result=$datos->getResult();
		// $menuModel=new MenuModel($db);
		// $result=$menuModel->findAll();
		//var_dump($result);
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
	public function SabePublication(){
		
	}
}
