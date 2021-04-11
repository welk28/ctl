<?php

namespace App\Controllers;
//use App\Models\Login_model;
use App\Models\PersonalModel;
use App\Models\PubasignaModel;
use App\Controllers\BaseController;

class Personal extends BaseController
{

	public function __construct()
	{
		if (!session('guyus')) {
			return redirect()->to(base_url('/'));
		}
	}

	public function index()
	{
		$datos = $this->db->query("SELECT p.idp, p.usuario, p.nomp, p.app, p.email, p.idpuesto, pu.descpuesto, p.idedo, e.estado, g.idgi, g.descg, p.idrc, r.descc, p.status, p.edita FROM rolcargo r, giroemp g, personal p, puesto pu, estado e WHERE p.idrc=r.idrc and g.idgi=p.idgi AND p.idedo=e.idedo and p.idpuesto=pu.idpuesto");
		$result = $datos->getResult();
		$consulta = $this->db->query("SELECT * from rolgral where deleted=0 and status=1");
		$rolgral = $consulta->getResult();

		$deptos = $this->db->query("SELECT * from departamento where deleted=0 and status=1");
		$departamentos = $deptos->getResult();

		$congiro = $this->db->query("SELECT * from giroemp where deleted=0 and status=1");
		$giroemp = $congiro->getResult();
		$conedo = $this->db->query("SELECT * from estado");
		$estado = $conedo->getResult();
		$conmenu = $this->db->query("SELECT * from menu where deleted=0 and status=1");
		$menu = $conmenu->getResult();
		$data = [
			'uri' => current_url(true),
			'personal' => $result,
			'rolgral' => $rolgral,
			'departamentos' => $departamentos,
			'giroemp' => $giroemp,
			'menu' => $menu,
			'estado' => $estado
		];
		//si no existe sesion devolver a url base dashboard
		if (!session('guyus')) {
			return redirect()->to(base_url('/'));
		}

		return view('dashboard/personaladd', $data);
	}

	

	//PERSONAL USUARIOS
	public function personal($idrg = NULL)
	{
		//verificar si el identificador tiene registro, de lo contrario redireccionar al menú principal
		$consulta = $this->db->query("SELECT r.idrg, r.descrg, r.status, r.created_at, r.updated_at, r.modifica, p.app, p.nomp from rolgral r, personal p WHERE r.modifica=p.idp and r.idrg=$idrg");
		$rol = $consulta->getRow();
		$existe = $consulta->getNumRows();
		if (($existe == 0) || ($idrg == null)) {
			return redirect()->to(base_url('dashboard'));
		}
		//fin de verificacion de existencia del registro

		$datos = $this->db->query("SELECT p.idp, p.usuario, p.nomp, p.app, p.email, p.idpuesto, de.idepto, de.nomdepto, pu.descpuesto, p.idedo, e.estado, g.idgi, g.descg, p.idrc, r.descc, p.status, p.edita FROM departamento de, rolcargo r, giroemp g, personal p, puesto pu, estado e WHERE de.idepto=pu.idepto AND p.idrc=r.idrc and g.idgi=p.idgi AND p.idedo=e.idedo and p.idpuesto=pu.idpuesto AND r.idrg=$idrg");
		$result = $datos->getResult();
		$data = [
			'uri' => current_url(true),
			'rol' => $rol,
			'personal' => $result
		];
		if (!session('guyus')) {
			return redirect()->to(base_url('/'));
		}
		return view('dashboard/personal', $data);
	}

	//busqueda de personal y llenado de combo
	public function getRolcargo()
	{
		$request = \Config\Services::request();
		$idrg = $request->getPostGet('idrg');
		if ($idrg) {
			$datos = $this->db->query("select * from rolcargo where idrg=$idrg");
			$rolcargo = $datos->getResult();
			echo '<option value="">Seleccione</option>';
			foreach ($rolcargo as $rc) {
				echo "<option value='$rc->idrc'>$rc->descc</option>";
			}
		}
	}
	//fin busqueda de personal

	//busqueda de puesto y llenado de combo
	public function getPuesto()
	{
		$request = \Config\Services::request();
		$idepto = $request->getPostGet('idepto');
		if ($idepto) {
			$datos = $this->db->query("select * from puesto where idepto=$idepto");
			$puesto = $datos->getResult();
			echo '<option value="">Seleccione</option>';
			foreach ($puesto as $p) {
				echo "<option value='$p->idpuesto'>$p->descpuesto</option>";
			}
		}
	}
	//fin busqueda de puesto

	//valida usuario
	public function getUser()
	{
		$request = \Config\Services::request();
		$usuario = $request->getPostGet('usuario');
		if ($usuario) {
			$datos = $this->db->query("SELECT * FROM personal WHERE usuario='$usuario'");
			$existe = $datos->getNumRows();
			if($existe>0){
				echo 1;
			}else{
				echo 0;
			}
		}
	}
	//fin valida usuario
	//valida email
	public function getEmail()
	{
		$request = \Config\Services::request();
		$email = $request->getPostGet('email');
		if ($email) {
			$datos = $this->db->query("SELECT * FROM personal WHERE email='$email'");
			$existe = $datos->getNumRows();
			if($existe>0){
				echo 1;
			}else{
				echo 0;
			}
		}
	}
	//fin valida email

	//ALTA DE personal
	public function addPersonal()
	{
		print_r($_POST);
		
		//print_r($_POST);
		
		$PubasignaModel = new PubasignaModel($db);
		$PersonalModel = new PersonalModel($db);
		$request = \Config\Services::request();
		if (empty($request->getPostGet('status'))) {
			$status = 0;
		} else {
			$status = 1;
		}
		$contra=$request->getPostGet('contra');
		$usuario=$request->getPostGet('usuario');
		$edita=$request->getPostGet('modifica');
		$data = array(
			'usuario' => $usuario,
			'contra' => sha1($contra),
			'nomp' => $request->getPostGet('nomp'),
			'app' => $request->getPostGet('app'),
			'email' => $request->getPostGet('email'),
			'idpuesto' => $request->getPostGet('idpuesto'),
			'idedo' => $request->getPostGet('idedo'),
			'idgi' => $request->getPostGet('idgi'),
			'idrc' => $request->getPostGet('idrc'),
			'status' => $status,
			'idrg' => $request->getPostGet('idrg'),
			'modifica' => $edita
		);
		if ($PersonalModel->save($data) === false) {
			//var_dump($menuModel->errors());
			echo 0;
		} else {
			echo 1;
		}

		$ultimoregistro = $this->db->query("SELECT * FROM personal WHERE usuario='$usuario'");
			$ultimo = $ultimoregistro->getRow();
			echo "ultimo registro".$ultimo->idp;
		$menu = $_POST["menu"];
		for ($i = 0; $i < count($menu); $i++) {
			$datos=array(
				'idp' =>$ultimo->idp,
				'idm'=>$menu[$i],
				'status'=>1,
				'edita'=>$edita
			);
			//$datos = $this->db->query("insert into pubasigna values ($ultimo->idp,$menu[$i],1,$edita)");
			$PubasignaModel->save($datos);
			echo "<br> menu " . $i . ": " . $menu[$i];
		}
	}
	//FIN ALTA DE personal
	
}
