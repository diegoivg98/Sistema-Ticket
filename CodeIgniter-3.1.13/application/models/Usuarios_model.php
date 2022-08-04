<?php  
class Usuarios_model extends CI_Model
{
	public function guardar($data){
		return $this->db->insert('Usuario',$data);
	}

	public function login($nom_user, $passw){
		$this->db->where("nom_user", $nom_user);
		$this->db->where("passw", $passw);
		$res = $this->db->get('Usuario');
		if ($res->num_rows() > 0) {
			return $res->row();
		}else{
			return false;
		}
	}

	public function getuser(){
		//usuario establecimiento y perfil
		$this->db->select('u.*,e.*,p.*');
		$this->db->from('Establecimiento as e');
		$this->db->join('Usuario as u','u.id_estable = e.id_estable');
		$this->db->join('Perfil as p','u.id_perfil = p.id_perfil');

		$query3 = $this->db->get();
		return $query3->result();
	}

	public function getperfil(){
		$resultado = $this->db->get("Perfil");
		return $resultado->result();
	}
	public function getestable(){
		$res = $this->db->get("Establecimiento");
		return $res->result();
	}

	public function getusuario($rut_user){
		$this->db->where("rut_user",$rut_user);
		$resultado = $this->db->get("Usuario");
		return $resultado->row();
	}
	public function update($rut_user,$data){
		$this->db->where("rut_user",$rut_user);
		return $this->db->update("Usuario",$data);
	}
}