<?php

namespace App\Controllers;
//use App\Models\Login_model;
use App\Models\PersonalModel;
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

    $conrolcargo = $this->db->query("SELECT * from rolcargo where deleted=0 and status=1");
		$rolcargo = $conrolcargo->getResult();
    $deptos = $this->db->query("SELECT * from departamento where deleted=0 and status=1");
		$departamentos = $deptos->getResult();
    $puesto = $this->db->query("SELECT * from puesto where deleted=0 and status=1");
		$puestos = $puesto->getResult();
		$data = [
			'uri' => current_url(true),
			'personal' => $result,
      'rolgral' => $rolgral,
      'rolcargo' => $rolcargo,
      'departamentos' => $departamentos,
      'puestos' => $puestos
		];
    //si no existe sesion devolver a url base dashboard
		if (!session('guyus')) {return redirect()->to(base_url('/'));
		}
    
		return view('dashboard/personaladd', $data);
	}

	
	//PERSONAL USUARIOS
	public function personal($idrg=NULL)
	{
		//verificar si el identificador tiene registro, de lo contrario redireccionar al menú principal
		$consulta = $this->db->query("SELECT r.idrg, r.descrg, r.status, r.created_at, r.updated_at, r.modifica, p.app, p.nomp from rolgral r, personal p WHERE r.modifica=p.idp and r.idrg=$idrg");
		$rol = $consulta->getRow();
		$existe = $consulta->getNumRows();
		if (($existe == 0)||($idrg==null)) {
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
}
