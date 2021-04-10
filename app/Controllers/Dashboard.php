<?php

namespace App\Controllers;
//use App\Models\Login_model;
use App\Models\MenuModel;
use App\Models\SubmenuModel;
use App\Models\BasemenuModel;
use App\Models\DatesiteModel;
use App\Models\DepartamentoModel;
use App\Models\RolgralModel;
use App\Models\RolcargoModel;
use App\Models\GiroempModel;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{

	public function __construct()
	{
		if (!session('guyus')) {
			return redirect()->to(base_url('/'));
		}
	}

	public function index()
	{
		$data = [
			'uri' => current_url(true)
		];
		if (!session('guyus')) {
			return redirect()->to(base_url('/'));
		}
		return view('panel', $data);
	}

	public function Menu()
	{
		$datos = $this->db->query("SELECT m.idm, m.descm, m.status, p.idp, p.app, p.nomp, m.created_at, m.deleted_at, m.updated_at, m.deleted FROM menu m, personal p WHERE p.idp=m.edita AND m.deleted=0;");
		$result = $datos->getResult();
		$data = [
			'uri' => current_url(true),
			'menu' => $result
		];
		if (!session('guyus')) {
			return redirect()->to(base_url('/'));
		}
		return view('dashboard/menu', $data);
	}
	public function Datesite()
	{
		$mensaje= session('mensaje');
		$datos = $this->db->query("select * from datesite where id=1");
		$result = $datos->getRow();
		$data = [
			'uri' => current_url(true),
			'datos' => $result,
			'mensaje'=>$mensaje
		];
		if (!session('guyus')) {
			return redirect()->to(base_url('/'));
		}
		return view('dashboard/datesite', $data);
	}
	public function saveIcono()
	{
		
		$DatesiteModel = new DatesiteModel($db);
		$request = \Config\Services::request();
		$file = $request->getFile("icono");
		//$filename = $file->getRandomName();
		
		$data = [
			'id' => 1,
			'icono' => 'logoCTL_ico.png'			
		];
		//var_dump($file);

		if ($file->isValid()) {
			unlink('public/uploads/logoCTL_ico.png');
			$file->move(ROOTPATH . "public/uploads", 'logoCTL_ico.png');
			//redimensionando imagen cargada
			$imagen = \Config\Services::image()
				->withFile('public/uploads/logoCTL_ico.png')
				->reorient()
				->resize(90,90)
				->save('public/uploads/logoCTL_ico.png');
			if ($DatesiteModel->save($data) === false) {
				return redirect()->to(base_url('/datesite'))->with('mensaje','1');
			} else {
				return redirect()->to(base_url('/datesite'))->with('mensaje','2');
			}
		} else {
			echo "Not Valid";
		 }
	}
	public function saveDatesite()
	{
		print_r($_POST);
		//var_dump($_POST);
	
		$DatesiteModel = new DatesiteModel($db);
		$request = \Config\Services::request();
		 $data = array(
		 	'id' => $request->getPostGet('id'),
			'titulo' =>$request->getPostGet('titulo'),
			'mail' =>$request->getPostGet('mail'),
			'fb' =>$request->getPostGet('fb'),
			'tw' =>$request->getPostGet('tw'),
			'ig' =>$request->getPostGet('ig'),
			'telof' =>$request->getPostGet('telof'),
			'telc' =>$request->getPostGet('telc'),
			'edita' =>$request->getPostGet('edita')
		 );


			if ($DatesiteModel->save($data) === false) {
				//var_dump($menuModel->errors());
				echo 0;
			} else {
				echo 1;
			}
	
	}
	
	
	
	public function Publications()
	{
		$datos = $this->db->query("select * from post where deleted=0;");
		$result = $datos->getResult();
		$data = [
			'uri' => current_url(true),
			'post' => $result
		];
		if (!session('guyus')) {
			return redirect()->to(base_url('/'));
		}
		return view('dashboard/publications', $data);
	}
	public function NewPublication()
	{
		$menuc = $this->db->query("select * from menu where status=1;");
		$menu = $menuc->getResult();
		$submenuc = $this->db->query("select * from submenu where status=1;");
		$submenu = $submenuc->getResult();
		$basemenuc = $this->db->query("select * from basemenu where status=1;");
		$basemenu = $basemenuc->getResult();

		$data = [
			'uri' => current_url(true),
			'menu' => $menu,
			'submenu' => $submenu,
			'basemenu' => $basemenu
		];
		if (!session('guyus')) {
			return redirect()->to(base_url('/'));
		}
		return view('dashboard/newpublication', $data);
	}
	public function SavePublication()
	{
	}
	public function showMenu($idm)
	{
		//verificar si el identificador tiene registro, de lo contrario redireccionar al menú principal
		$consulta = $this->db->query("SELECT m.idm, m.descm, m.status, m.created_at, m.updated_at, m.edita, p.app, p.nomp from menu m, personal p WHERE m.edita=p.idp and m.idm=$idm");
		$menu = $consulta->getRow();
		$existe = $consulta->getNumRows();
		if ($existe == 0) {
			return redirect()->to(base_url('menu'));
		}
		//fin de verificacion de existencia del registro

		$sconsulta = $this->db->query("SELECT * FROM submenu WHERE idm=$idm");
		$submenu = $sconsulta->getResult();
		$data = [
			'uri' => current_url(true),
			'idm' => $idm,
			'menu' => $menu,
			'submenu' => $submenu
		];
		//var_dump($idm);

		if (!session('guyus')) {
			return redirect()->to(base_url('/'));
		}
		return view('dashboard/menushow', $data);
	}
	public function updateMenu()
	{
		print_r($_POST);
		$menuModel = new MenuModel($db);
		$request = \Config\Services::request();
		if (empty($request->getPostGet('status'))) {
			$status = 0;
		} else {
			$status = 1;
		}
		$data = array(
			'idm' => $request->getPostGet('idm'),
			'status' => $status,
			'descm' => $request->getPostGet('descm'),
			'edita' => $request->getPostGet('edita'),
		);
		if ($menuModel->save($data) === false) {
			//var_dump($menuModel->errors());
			echo 0;
		} else {
			echo 1;
		}
	}
	public function addSubmenu()
	{
		print_r($_POST);
		$submenuModel = new SubmenuModel($db);
		$request = \Config\Services::request();
		if (empty($request->getPostGet('status'))) {
			$status = 0;
		} else {
			$status = 1;
		}
		$data = array(
			'idm' => $request->getPostGet('idm'),
			'descs' => $request->getPostGet('descs'),
			'status' => $status,
			'modifica' => $request->getPostGet('modifica'),
		);
		if ($submenuModel->save($data) === false) {
			//var_dump($submenuModel->errors());
			echo 0;
		} else {
			echo 1;
		}
	}
	//MOSTRAR DATOS DEL SUBMENUC
	public function showSubmenu()
	{
		$request = \Config\Services::request();

		$idm = $request->uri->getSegment(2);
		$ids = $request->uri->getSegment(3);

		if (empty($idm) || empty($ids)) {
			return redirect()->to(base_url('menu'));
		}

		//verificar si el identificador tiene registro, de lo contrario redireccionar al menú principal
		$consulta = $this->db->query("SELECT m.idm, m.descm, m.status, m.created_at, m.updated_at, m.edita, p.app, p.nomp from menu m, personal p WHERE m.edita=p.idp and m.idm=$idm");
		$menu = $consulta->getRow();
		$existem = $consulta->getNumRows();

		//fin de verificacion de existencia del registro

		//verificar si el identificador tiene registro, de lo contrario redireccionar al menú principal
		$consulta = $this->db->query("SELECT s.ids, s.descs, s.status, s.created_at, s.updated_at, s.modifica, s.idm, p.app, p.nomp from submenu s, personal p WHERE s.modifica=p.idp and s.ids=$ids");
		$submenu = $consulta->getRow();
		$existes = $consulta->getNumRows();
		if (($existem == 0) || ($existes == 0)) {
			return redirect()->to(base_url('menu'));
		}
		//fin de verificacion de existencia del registro

		$sconsulta = $this->db->query("SELECT * FROM basemenu WHERE ids=$ids");
		$basemenu = $sconsulta->getResult();
		$data = [
			'uri' => current_url(true),
			'idm' => $idm,
			'ids' => $ids,
			'basemenu' => $basemenu,
			'menu' => $menu,
			'submenu' => $submenu
		];
		// //var_dump($idm);

		if (!session('guyus')) {
			return redirect()->to(base_url('/'));
		}
		return view('dashboard/submenushow', $data);
	}
	//FIN DE DATOS DE SUBMENU

	//INICIO DE ACTUALIZACION DE SUBMENU
	public function updatesSubmenu()
	{
		print_r($_POST);
		$SubmenuModel = new SubmenuModel($db);
		$request = \Config\Services::request();
		if (empty($request->getPostGet('status'))) {
			$status = 0;
		} else {
			$status = 1;
		}
		$data = array(
			'ids' => $request->getPostGet('ids'),
			'status' => $status,
			'descs' => $request->getPostGet('descs'),
			'modifica' => $request->getPostGet('edita'),
		);
		if ($SubmenuModel->save($data) === false) {
			//var_dump($menuModel->errors());
			echo 0;
		} else {
			echo 1;
		}
	}

	//FIN DE ACTUALIZACION DE SUBMENU
	//INICIO DE ACTUALIZACION DE BASEMENU
	public function updateBasemenu()
	{
		print_r($_POST);
		$BasemenuModel = new BasemenuModel($db);
		$request = \Config\Services::request();
		if (empty($request->getPostGet('status'))) {
			$status = 0;
		} else {
			$status = 1;
		}
		$data = array(
			'idb' => $request->getPostGet('idb'),
			'status' => $status,
			'descb' => $request->getPostGet('descb'),
			'edita' => $request->getPostGet('edita'),
		);
		if ($BasemenuModel->save($data) === false) {
			//var_dump($menuModel->errors());
			echo 0;
		} else {
			echo 1;
		}
	}

	//FIN DE ACTUALIZACION DE BASEMENU

	//INICIO DE ALTA DE BASEMENU
	public function newBasemenu()
	{
		print_r($_POST);
		$BasemenuModel = new BasemenuModel($db);
		$request = \Config\Services::request();
		if (empty($request->getPostGet('status'))) {
			$status = 0;
		} else {
			$status = 1;
		}
		$data = array(
			'descb' => $request->getPostGet('descb'),
			'status' => $status,
			'ids' => $request->getPostGet('ids'),
			'edita' => $request->getPostGet('edita')
		);
		if ($BasemenuModel->save($data) === false) {
			//var_dump($menuModel->errors());
			echo 0;
		} else {
			echo 1;
		}
	}

	//FIN DE ALTA DE BASEMENU

	public function borraMenu()
	{
		$request = \Config\Services::request();
		$idm = $request->getPostGet('idm');
		//var_dump($idm);
		$borrar = $this->db->query("delete from menu where idm=$idm;");
		if ($borrar) {
			echo 1;
		} else {
			echo 0;
		}
		//var_dump($borrar);

	}

	public function delSubmenu()
	{
		$request = \Config\Services::request();
		$ids = $request->getPostGet('ids');

		$borrar = $this->db->query("delete from submenu where ids=$ids");
		if ($borrar) {
			echo 1;
		} else {
			echo 0;
		}
		//var_dump($borrar);
		//var_dump($deleted->errors());
	}

	public function delBasemenu()
	{
		$request = \Config\Services::request();
		$idb = $request->getPostGet('idb');

		$borrar = $this->db->query("delete from basemenu where idb=$idb");
		if ($borrar) {
			echo 1;
		} else {
			echo 0;
		}
		//var_dump($borrar);
		//var_dump($deleted->errors());
	}
	
	//INICIA SECCION DE DEPARTAMENTO
	public function Departamento(){
		$datos = $this->db->query("SELECT d.idepto, d.nomdepto, d.status, p.idp, p.app, p.nomp, d.created_at, d.updated_at FROM departamento d, personal p WHERE p.idp=d.edita AND d.deleted=0");
		$result = $datos->getResult();
		$data = [
			'uri' => current_url(true),
			'departamento' => $result
		];
		if (!session('guyus')) {
			return redirect()->to(base_url('/'));
		}
		return view('dashboard/departamento', $data);
		
	}
	//ALTA DE DEPARTAMENTO
	public function addDepto()
	{
		print_r($_POST);
		$DepartamentoModel = new DepartamentoModel($db);
		$request = \Config\Services::request();
		if (empty($request->getPostGet('status'))) {
			$status = 0;
		} else {
			$status = 1;
		}
		$data = array(
			'nomdepto' => $request->getPostGet('nomdepto'),
			'status' => $status,
			'edita' => $request->getPostGet('edita')
		);
		if ($DepartamentoModel->save($data) === false) {
			//var_dump($menuModel->errors());
			echo 0;
		} else {
			echo 1;
		}
	}
	//FIN ALTA DE DEPARTAMENTO
	//MODIFICACION DE DEPARTAMENTO
	public function updateDepto()
	{
		print_r($_POST);
		$DepartamentoModel = new DepartamentoModel($db);
		$request = \Config\Services::request();
		if (empty($request->getPostGet('status'))) {
			$status = 0;
		} else {
			$status = 1;
		}
		$data = array(
			'idepto' => $request->getPostGet('idepto'),
			'nomdepto' => $request->getPostGet('nomdepto'),
			'status' => $status,
			'edita' => $request->getPostGet('edita')
		);
		if ($DepartamentoModel->save($data) === false) {
			//var_dump($menuModel->errors());
			echo 0;
		} else {
			echo 1;
		}
	}
	//FIN MODIFICACION DE DEPARTAMENTO

	//inicia borrado de DEPARTAMENTO
	public function delDepto()
	{
		$request = \Config\Services::request();
		$idepto = $request->getPostGet('idepto');

		$borrar = $this->db->query("delete from departamento where idepto=$idepto");
		if ($borrar) {
			echo 1;
		} else {
			echo 0;
		}
		//var_dump($borrar);
		//var_dump($deleted->errors());
	}
	//FIN DE BORRADO DE DEPARTAMENTO

	//rol general
	public function Role()
	{
		$datos = $this->db->query("SELECT r.idrg, r.descrg, r.status, p.idp, p.app, p.nomp, r.created_at, r.updated_at FROM rolgral r, personal p WHERE p.idp=r.modifica AND r.deleted=0 ORDER BY r.descrg");
		$result = $datos->getResult();
		$data = [
			'uri' => current_url(true),
			'rolgral' => $result
		];
		
		if (!session('guyus')) {
			return redirect()->to(base_url('/'));
		}
		return view('dashboard/role', $data);
	}
	//fin de rol general

	//ALTA DE ROL GENERAL
	public function addRolgral()
	{
		//print_r($_POST);
		$RolgralModel = new RolgralModel($db);
		$request = \Config\Services::request();
		if (empty($request->getPostGet('status'))) {
			$status = 0;
		} else {
			$status = 1;
		}
		$data = array(
			'descrg' => $request->getPostGet('descrg'),
			'status' => $status,
			'modifica' => $request->getPostGet('modifica')
		);
		if ($RolgralModel->save($data) === false) {
			//var_dump($menuModel->errors());
			echo 0;
		} else {
			echo 1;
		}
	}
	//FIN ALTA DE ROL GENERAL
	public function showRole($idrg)
	{
		//verificar si el identificador tiene registro, de lo contrario redireccionar al menú principal
		$consulta = $this->db->query("SELECT r.idrg, r.descrg, r.status, r.created_at, r.updated_at, r.modifica, p.app, p.nomp from rolgral r, personal p WHERE r.modifica=p.idp and r.idrg=$idrg");
		$rolgral = $consulta->getRow();
		$existe = $consulta->getNumRows();
		if ($existe == 0) {
			return redirect()->to(base_url('role'));
		}
		//fin de verificacion de existencia del registro

		$sconsulta = $this->db->query("SELECT r.idrc, r.descc, r.status, r.created_at, r.updated_at, r.modifica, p.app, p.nomp from rolcargo r, personal p WHERE r.modifica=p.idp and r.idrg=$idrg");
		$rolcargo = $sconsulta->getResult();
		$data = [
			'uri' => current_url(true),
			'idrg' => $idrg,
			'rolgral' => $rolgral,
			'rolcargo' => $rolcargo
		];
		//var_dump($idm);

		if (!session('guyus')) {
			return redirect()->to(base_url('/'));
		}
		return view('dashboard/roleshow', $data);
	}
//FIN DE ROL GENERAL
//MODIFICACION DE ROL GENERAL
public function updateRole()
{
	//print_r($_POST);
	$RolgralModel = new RolgralModel($db);
	$request = \Config\Services::request();
	if (empty($request->getPostGet('status'))) {
		$status = 0;
	} else {
		$status = 1;
	}
	$data = array(
		'idrg' => $request->getPostGet('idrg'),
		'descrg' => $request->getPostGet('descrg'),
		'status' => $status,
		'modifica' => $request->getPostGet('modifica')
	);
	if ($RolgralModel->save($data) === false) {
		//var_dump($menuModel->errors());
		echo 0;
	} else {
		echo 1;
	}
}
//FIN MODIFICACION DE ROL GENERAL
	//ALTA DE cargoL
	public function addCargo()
	{
		//print_r($_POST);
		$RolcargoModel = new RolcargoModel($db);
		$request = \Config\Services::request();
		if (empty($request->getPostGet('status'))) {
			$status = 0;
		} else {
			$status = 1;
		}
		$data = array(
			'descc' => $request->getPostGet('descc'),
			'status' => $status,
			'idrg' => $request->getPostGet('idrg'),
			'modifica' => $request->getPostGet('modifica')
		);
		if ($RolcargoModel->save($data) === false) {
			//var_dump($menuModel->errors());
			echo 0;
		} else {
			echo 1;
		}
	}
	//FIN ALTA DE cargo
	//MODIFICACION DE CARGO
	public function updateCargo()
	{
		print_r($_POST);
		$RolcargoModel = new RolcargoModel($db);
		$request = \Config\Services::request();
		if (empty($request->getPostGet('status'))) {
			$status = 0;
		} else {
			$status = 1;
		}
		$data = array(
			'idrc' => $request->getPostGet('idrc'),
			'descc' => $request->getPostGet('descc'),
			'status' => $status,
			'idrg' => $request->getPostGet('idrg'),
			'modifica' => $request->getPostGet('modifica')
		);
		if ($RolcargoModel->save($data) === false) {
			//var_dump($menuModel->errors());
			echo 0;
		} else {
			echo 1;
		}
	}
	//FIN MODIFICACION DE CARGO

	//inicia borrado de cargo
	public function delCargo()
	{
		//print_r($_POST);
		$request = \Config\Services::request();
		$idrc = $request->getPostGet('idrc');

		$borrar = $this->db->query("delete from rolcargo where idrc=$idrc");
		if ($borrar) {
			echo 1;
		} else {
			echo 0;
		}
		//var_dump($borrar);
		//var_dump($deleted->errors());
	}
	//FIN DE BORRADO DE cargo

	//inicia borrado de cargo
	public function borrRolgral()
	{
		//print_r($_POST);
		$request = \Config\Services::request();
		$idrg = $request->getPostGet('idrg');

		$borrar = $this->db->query("delete from rolgral where idrg=$idrg");
		if ($borrar) {
			echo 1;
		} else {
			echo 0;
		}
		//var_dump($borrar);
		//var_dump($deleted->errors());
	}
	//FIN DE BORRADO DE cargo
	
	
	//-------------------------------------------------------------------------------------------------
	//GIRO EMPRESARIAL
	public function empresarial()
	{
		$datos = $this->db->query("SELECT g.idgi, g.descg, g.status, p.idp, p.app, p.nomp, g.created_at, g.deleted_at, g.updated_at FROM giroemp g, personal p WHERE p.idp=g.edita AND g.deleted=0");
		$result = $datos->getResult();
		$data = [
			'uri' => current_url(true),
			'giros' => $result
		];
		if (!session('guyus')) {
			return redirect()->to(base_url('/'));
		}
		return view('dashboard/empresarial', $data);
	}
	//ALTA DE cargoL
	public function addEmpre()
	{
		//print_r($_POST);
		$GiroempModel = new GiroempModel($db);
		$request = \Config\Services::request();
		if (empty($request->getPostGet('status'))) {
			$status = 0;
		} else {
			$status = 1;
		}
		$data = array(
			'descg' => $request->getPostGet('descg'),
			'status' => $status,
			'edita' => $request->getPostGet('edita')
		);
		if ($GiroempModel->save($data) === false) {
			//var_dump($menuModel->errors());
			echo 0;
		} else {
			echo 1;
		}
	}
	//FIN ALTA DE cargo
	//MODIFICACION DE CARGO
	public function updateGiroemp()
	{
		//print_r($_POST);
		$GiroempModel = new GiroempModel($db);
		$request = \Config\Services::request();
		if (empty($request->getPostGet('status'))) {
			$status = 0;
		} else {
			$status = 1;
		}
		$data = array(
			'idgi' => $request->getPostGet('idgi'),
			'descg' => $request->getPostGet('descg'),
			'status' => $status,
			'edita' => $request->getPostGet('edita')
		);
		if ($GiroempModel->save($data) === false) {
			//var_dump($menuModel->errors());
			echo 0;
		} else {
			echo 1;
		}
	}
	//FIN MODIFICACION DE CARGO
	
	//inicia borrado de GIRO EMPRESARIAL
	public function delGiroemp()
	{
		//print_r($_POST);
		$request = \Config\Services::request();
		$idgi = $request->getPostGet('idgi');
		
		$borrar = $this->db->query("delete from giroemp where idgi=$idgi");
		if ($borrar) {
			echo 1;
		} else {
			echo 0;
		}
		//var_dump($borrar);
		//var_dump($deleted->errors());
	}
	//FIN DE BORRADO DE GIRO EMPRESARIAL

	//-------------------------------------------------------------------------------------------------
	//PERSONAL USUARIOS
	public function personal($idrg=NULL)
	{
		//verificar si el identificador tiene registro, de lo contrario redireccionar al menú principal
		$consulta = $this->db->query("SELECT r.idrg, r.descrg, r.status, r.created_at, r.updated_at, r.modifica, p.app, p.nomp from rolgral r, personal p WHERE r.modifica=p.idp and r.idrg=$idrg");
		$rolgral = $consulta->getRow();
		$existe = $consulta->getNumRows();
		if (($existe == 0)||($idrg==null)) {
			return redirect()->to(base_url('dashboard'));
		}
		//fin de verificacion de existencia del registro

		$datos = $this->db->query("SELECT p.idp, p.usuario, p.nomp, p.app, p.email, p.idpuesto, pu.descpuesto, p.idedo, e.estado, g.idgi, g.descg, p.idrc, r.descc, p.status, p.edita FROM rolcargo r, giroemp g, personal p, puesto pu, estado e WHERE p.idrc=r.idrc and g.idgi=p.idgi AND p.idedo=e.idedo and p.idpuesto=pu.idpuesto AND r.idrg=$idrg");
		$result = $datos->getResult();
		$data = [
			'uri' => current_url(true),
			'personal' => $result
		];
		if (!session('guyus')) {
			return redirect()->to(base_url('/'));
		}
		return view('dashboard/empresarial', $data);
	}
}
