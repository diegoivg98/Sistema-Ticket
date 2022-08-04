<?php  
class Categorias_model extends CI_Model
{
	public function getCategorias()
	{
		$resultado = $this->db->get('Categoria');//SELECT * FROM Categoria
		if($resultado->num_rows() > 0){
			return $resultado->result();
		}else{
			return false;
		}
	}
	public function guardar($data){
		//INSERT INTO Categoria Values
		return $this->db->insert("Categoria",$data);
	}
	public function buscarid($id){
		$this->db->where('id_cat', $id);
		$query = $this->db->get('Categoria');
		return $query->row();
	}
	
}