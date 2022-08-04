<?php 
 
 class Accion_model extends CI_Model
 {
 	
 	public function guardar($data){
 	return $this->db->insert('Acciones',$data);
 	}
 
 }