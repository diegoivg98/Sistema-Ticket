<?php  

class Subcategorias_model extends CI_Model
{
	
	public function getcatsub(){
	//trae subcategoria relacionada a su categoria correspondiente	
		$this->db->select('c.*,s.*');
		$this->db->from('Categoria as c' );
		$this->db->join('Subcategoria as s','s.id_cat=c.id_cat');
		$query = $this->db->get();
		return $query->result();
	}

	public function getcategoria(){
		$query = $this->db->get('Categoria');
		return $query->result();
	}

	public function guardar($data){
	  return $this->db->insert('Subcategoria',$data);
	}
}