<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
	public function listarMenu(){
        $Nombres= $this->db->query("SELECT p.idpost, p.fechacrea, p.imgp, p.idm, m.descm, p.ids, p.idb, p.titulo, p.descripcion FROM post p, menu m WHERE p.idm=m.idm AND m.status=1 AND p.status=1");
        return $Nombres->getResult();
    }

	
}
