<?php 
class Mansubcat_model extends CI_Model{
	
	public function getmansubcat(){
	    //CATEGORIA->SUBCATEGORIA->PERFIL	
		$this->db->select('c.*,s.*,p.*,m.*');
		$this->db->from('Categoria as c' );
		$this->db->join('mansubcat as m','m.id_cat=c.id_cat');
		$this->db->join('Subcategoria as s','m.id_subcat=s.id_subcat');
		$this->db->join('Perfil as p','m.id_perfil=p.id_perfil');

		$query2 = $this->db->get();
		return $query2->result();
	}

	public function guardar($data){
		return $this->db->insert('mansubcat',$data);
	}

	public function getperfil(){
		$this->db->where("id_perfil", 2);//ADMIN
		$this->db->or_where("id_perfil", 3);//TECNICO
		$res = $this->db->get("Perfil");
		return $res->result();
	} 

	public function getcategoria(){
		$this->db->order_by('id_cat', 'ASC');
		$res = $this->db->get("Categoria");
		return $res->result();
	}

	public function fetch_sub($id_cat){
		$this->db->where('id_cat', $id_cat);
		$query = $this->db->get('Subcategoria');
		$output = '<option value="">Selecciona 
		una subcategoria</option>';
		foreach ($query->result() as $row) 
		{
			$output .= '<option value="'.$row->id_subcat.'">'.$row->nom_subcat.'</option>';
		}
		return $output;
	}
}