<?php 

class Ticket_model extends CI_Model
{
	public function guardar($data){
		return $this->db->insert('ticket',$data);
	}

	public function getuser($id_ticket){
	    $this->db->select('t.*,u.*,c.*,s.*,e.*');
	    $this->db->select("to_char(fecha, 'dd/mm/yyyy') AS fecha");// dia-mes-año
		$this->db->from('Categoria as c');
		$this->db->join('ticket as t','t.id_cat = c.id_cat');
		$this->db->join('Usuario as u','t.rut_user = u.rut_user');
		$this->db->join('Subcategoria as s','t.id_subcat = s.id_subcat');
		$this->db->join('Establecimiento as e','t.id_estable = e.id_estable');
		$this->db->where('t.id_ticket',$id_ticket); 
		$usuario = $this->db->get();
		return $usuario->result();
	}

	public function getidticket($id_ticket){
		//obtener ticket por su id
		$this->db->where("id_ticket", $id_ticket);
		$resultado = $this->db->get("ticket");
		return $resultado->row();
	}

	public function getcancel(){
		//ticket con estado cancelado por session
 		$this->db->select('t.*,u.*,et.*');
 		$this->db->select("t.descripcion");
 		$this->db->select("to_char(fecha, 'dd/mm/yyyy') AS fecha");// dia-mes-año
 		$this->db->from('mnt_estado_ticket as et');
 		$this->db->join('ticket as t','t.estado_ticket = et.id');
 		$this->db->join('Usuario as u','t.rut_user = u.rut_user');
 	    $this->db->where('t.estado_ticket',4); //cancelado
 	    $this->db->where('u.rut_user', $this->session->userdata("rut_user"));
 	    $ticketcanc = $this->db->get();
		return $ticketcanc->result();
 	}

 	public function getcancelsu(){
		//ticket con estado cancelado
 		$this->db->select('t.*,u.*,et.*');
 		$this->db->select("to_char(fecha, 'dd/mm/yyyy') AS fecha");// dia-mes-año
 		$this->db->from('mnt_estado_ticket as et');
 		$this->db->join('ticket as t','t.estado_ticket = et.id');
 		$this->db->join('Usuario as u','t.rut_user = u.rut_user');
 	    $this->db->where('t.estado_ticket',4); //cancelado
 	    $ticketcanc = $this->db->get();
		return $ticketcanc->result();
 	}

 	public function getsol(){
 		//ticket estado solucionado por session
 		$this->db->select('t.*,u.*,et.*');
 		$this->db->select("t.descripcion");
 	    $this->db->select("to_char(fecha, 'dd/mm/yyyy') AS fecha");// dia-mes-año
 		$this->db->from('mnt_estado_ticket as et');
 		$this->db->join('ticket as t','t.estado_ticket = et.id');
 		$this->db->join('Usuario as u','t.rut_user = u.rut_user');
 	    $this->db->where('t.estado_ticket',1); //solucionado
 	    $this->db->where('u.rut_user', $this->session->userdata("rut_user"));
 	    $ticketsolu = $this->db->get();
		return $ticketsolu->result();
 	}

 	public function getsolsu(){
 		//ticket estado solucionado
 		$this->db->select('t.*,u.*,et.*');
 	    $this->db->select("to_char(fecha, 'dd/mm/yyyy') AS fecha");// dia-mes-año
 		$this->db->from('mnt_estado_ticket as et');
 		$this->db->join('ticket as t','t.estado_ticket = et.id');
 		$this->db->join('Usuario as u','t.rut_user = u.rut_user');
 	    $this->db->where('t.estado_ticket',1); //solucionado
 	    $ticketsolu = $this->db->get();
		return $ticketsolu->result();
 	}

 	public function getderiv(){
 		//ticket estado derivado
 		$this->db->select('t.*,u.*,et.*');
 		$this->db->select("t.descripcion");
 		$this->db->select("to_char(fecha, 'dd/mm/yyyy') AS fecha");// dia-mes-año
 		$this->db->from('mnt_estado_ticket as et');
 		$this->db->join('ticket as t','t.estado_ticket = et.id');
 		$this->db->join('Usuario as u','t.rut_user = u.rut_user');
 	    $this->db->where('t.estado_ticket',2); //derivado
 	    $this->db->where('u.rut_user', $this->session->userdata("rut_user"));
 	    $ticketder = $this->db->get();
		return $ticketder->result();
 	}

 	public function getderivsu(){
 		//ticket estado derivado
 		$this->db->select('t.*,u.*,et.*');
 		$this->db->select("to_char(fecha, 'dd/mm/yyyy') AS fecha");// dia-mes-año
 		$this->db->from('mnt_estado_ticket as et');
 		$this->db->join('ticket as t','t.estado_ticket = et.id');
 		$this->db->join('Usuario as u','t.rut_user = u.rut_user');
 	    $this->db->where('t.estado_ticket',2); //derivado
 	    $ticketder = $this->db->get();
		return $ticketder->result();
 	}

	public function update($id_ticket,$data){
		//actualizar ticket por id
		$this->db->where("id_ticket",$id_ticket);
		return $this->db->update("ticket",$data);
	}

	public function getticket(){
		//obtener todos los tickets pendientes para S.U
		$this->db->select('t.*,u.*,c.*,s.*,e.*,et.*');
		$this->db->select("to_char(fecha, 'dd/mm/yyyy') AS fecha");// dia-mes-año
		$this->db->from('Categoria as c');
		$this->db->join('ticket as t','t.id_cat = c.id_cat');
		$this->db->join('Usuario as u','t.rut_user = u.rut_user');
		$this->db->join('Subcategoria as s','t.id_subcat = s.id_subcat');
		$this->db->join('Establecimiento as e','t.id_estable = e.id_estable');
		$this->db->join('mnt_estado_ticket as et','t.estado_ticket = et.id');
		$this->db->where('t.estado_ticket',3); //Pendiente
	    $this->db->order_by('t.id_ticket','ASC'); 
		$ticket = $this->db->get();
		return $ticket->result();
	}

	public function getticketfuncadmin(){
		//perteneciente a FUNCIONARIO/ADMIN por sesion
		$this->db->select('t.*,u.*,c.*,s.*,e.*,et.*');
	    $this->db->select("t.descripcion");// dia-mes-año
		$this->db->select("to_char(fecha, 'dd/mm/yyyy') AS fecha");// dia-mes-año
		$this->db->from('Categoria as c');
		$this->db->join('ticket as t','t.id_cat = c.id_cat');
		$this->db->join('Usuario as u','t.rut_user = u.rut_user');
		$this->db->join('Subcategoria as s','t.id_subcat = s.id_subcat');
		$this->db->join('Establecimiento as e','t.id_estable = e.id_estable');
		$this->db->join('mnt_estado_ticket as et','t.estado_ticket = et.id');
		$this->db->where('u.rut_user', $this->session->userdata("rut_user"));
		$this->db->where('t.estado_ticket',3); //Pendiente
		$this->db->order_by('t.id_ticket', 'ASC');
		$ticketf = $this->db->get();
		return $ticketf->result();
	}

	public function getticketest(){
		//por establecimiento para ADMIN
		$this->db->select('t.*,u.*,c.*,s.*,e.*,m.*,et.*');
		$this->db->select("t.descripcion");// dia-mes-año
		$this->db->select("to_char(fecha, 'dd/mm/yyyy') AS fecha");// dia-mes-año
		$this->db->from('Categoria as c');
		$this->db->join('ticket as t','t.id_cat = c.id_cat');
		$this->db->join('Usuario as u','t.rut_user = u.rut_user');
		$this->db->join('Subcategoria as s','t.id_subcat = s.id_subcat');
		$this->db->join('Establecimiento as e','t.id_estable = e.id_estable');
		$this->db->join('mansubcat as m','t.id_mansub = m.id_mansub');
		$this->db->join('mnt_estado_ticket as et','t.estado_ticket = et.id');
		$this->db->where('t.estado_ticket',3); //Pendiente
		$this->db->where('m.id_perfil',2); //Tecnico
		$this->db->where('e.id_estable', $this->session->userdata("id_estable"));
		$ticketest = $this->db->get();
		return $ticketest->result();
	}

	public function gettickettec(){
		//por control perfil TECNICO
		$this->db->select('t.*,u.*,c.*,s.*,e.*,m.*,et.*');
		$this->db->select("to_char(fecha, 'dd/mm/yyyy') AS fecha");// dia-mes-año
		$this->db->select("t.descripcion");// dia-mes-año
		$this->db->from('Categoria as c');
		$this->db->join('ticket as t','t.id_cat = c.id_cat');
		$this->db->join('Usuario as u','t.rut_user = u.rut_user');
		$this->db->join('Subcategoria as s','t.id_subcat = s.id_subcat');
		$this->db->join('Establecimiento as e','t.id_estable = e.id_estable');
		$this->db->join('mansubcat as m','t.id_mansub = m.id_mansub');
		$this->db->join('mnt_estado_ticket as et','t.estado_ticket = et.id');
		$this->db->where('m.id_perfil',3); //Tecnico
		$this->db->where('t.estado_ticket',3); //Pendiente
	    $this->db->order_by('t.id_ticket','ASC'); 
		$tickettec = $this->db->get();
		return $tickettec->result();
	}

	public function gettickettec2(){
		//por control perfil TECNICO
		$this->db->select('t.*,u.*,c.*,s.*,e.*,m.*,et.*');
		$this->db->select("to_char(fecha, 'dd/mm/yyyy') AS fecha");// dia-mes-año
		$this->db->select("t.descripcion");// dia-mes-año
		$this->db->from('Categoria as c');
		$this->db->join('ticket as t','t.id_cat = c.id_cat');
		$this->db->join('Usuario as u','t.rut_user = u.rut_user');
		$this->db->join('Subcategoria as s','t.id_subcat = s.id_subcat');
		$this->db->join('Establecimiento as e','t.id_estable = e.id_estable');
		$this->db->join('mansubcat as m','t.id_mansub = m.id_mansub');
		$this->db->join('mnt_estado_ticket as et','t.estado_ticket = et.id');
		$this->db->where('t.estado_ticket',2); //derivados
	    $this->db->order_by('t.id_ticket','ASC'); 
		$tickettec2 = $this->db->get();
		return $tickettec2->result();
	}

	public function getestable(){
		$res = $this->db->get("Establecimiento");
		return $res->result();
	}

	public function getcategoria(){
		$this->db->order_by('id_cat', 'ASC');
		$res = $this->db->get("Categoria");
		return $res->result();
	}

	public function getestado(){
		$this->db->where("id", 3);//estado->pendiente
		$res = $this->db->get("mnt_estado_ticket");
		return $res->result();
	} 	

	public function getestadosol(){
		$this->db->where("id", 1);//estado->solucionar
		$res = $this->db->get("mnt_estado_ticket");
		return $res->result();
	} 

	public function getestadocancel(){
		$this->db->where("id", 4);//cancelar
		$res = $this->db->get("mnt_estado_ticket");
		return $res->result();
	} 

	public function getestadoderiv(){
		$this->db->where("id", 2);//derivar
		$res = $this->db->get("mnt_estado_ticket");
		return $res->result();
	} 
  
	public function fetch_sub($id_cat){
	//busca las subcategorias por categoria seleccionada
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

	public function fetch_mansub($id_subcat){
		//busca el perfil que hace control de las subcategorias
	    $this->db->where('s.id_subcat', $id_subcat);
		$this->db->select('s.*,m.*,p.*');
		$this->db->from('Subcategoria as s');
		$this->db->join('mansubcat as m','m.id_subcat = s.id_subcat');
		$this->db->join('Perfil as p','m.id_perfil = p.id_perfil');

		$query3 = $this->db->get();
		$output = '';

		foreach ($query3->result() as $row) 
		{
			$output .= '<option value="'.$row->{'id_mansub'}.'">'.$row->{'nom_perfil'}.'</option>';
		}
		return $output;
	}

}