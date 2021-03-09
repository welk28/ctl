<?php namespace App\Models;
use CodeIgniter\Model;

class Auth_model extends Model{
   
    public function searchUser($usuario,$contra){
      $sql="SELECT p.idp, p.usuario, p.nomp, p.app, p.idrc, p.idrc, c.descc from personal p, rolcargo c where p.idrc=c.idrc and p.contra='$contra' AND p.usuario='$usuario' and p.status=1";
      $resultado= $this->db->query($sql);
      return $resultado->getRow();
    }

}