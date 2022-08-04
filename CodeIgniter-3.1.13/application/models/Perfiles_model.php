<?php  
class Perfiles_model extends CI_Model
{
	public function getPerfiles()
	{
	    $this->db->order_by('id_perfil', 'ASC');
		$resultado = $this->db->get("Perfil");//SELECT * FROM Perfil
		if($resultado->num_rows() > 0){
			return $resultado->result();
		}else{
			return false;
		}
		
	}
}