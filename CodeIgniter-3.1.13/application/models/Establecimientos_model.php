<?php  
class Establecimientos_model extends CI_Model
{
	public function getEstablecimiento(){
		$resultado = $this->db->get('Establecimiento');//SELECT * FROM Establecimiento
		if($resultado->num_rows() > 0){
			return $resultado->result();
		}else{
			return false;
		}
	}

	public function guardar($data){
		return $this->db->insert('Establecimiento',$data);
	}


}