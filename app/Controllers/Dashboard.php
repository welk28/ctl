<?php

namespace App\Controllers;
//use App\Models\Login_model;
//use App\Models\Configurate_model;
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
		$data=[
      'uri'=> current_url(true)
    ];
    if (!session('guyus')) {return redirect()->to(base_url('/'));}
		return view('dashboard/menu',$data);
	}
	public function Datesite(){
		$data=[
      'uri'=> current_url(true)
    ];
    if (!session('guyus')) {return redirect()->to(base_url('/'));}
		return view('dashboard/menu',$data);
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
}
