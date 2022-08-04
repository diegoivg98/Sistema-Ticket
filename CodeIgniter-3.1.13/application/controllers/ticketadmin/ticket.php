<?php  

class Ticket extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('Ticket_model');
		$this->load->model('Accion_model');
		$this->load->library('form_validation');//LIBRERIA PARA VALIDACIONES
	}	
	
	public function index()
	{
		//lista funcionario/establecimiento pendiente
		$data = array('ticketest' => $this->Ticket_model->getticketest(), );
		$this->load->view("admin/header");
		$this->load->view("admin/aside");
		$this->load->view("admin/ticket/lista",$data);//muestra el dataTable
		$this->load->view("admin/footer");
	}

	public function add(){
		$data['Establecimiento'] = $this->Ticket_model->getestable();
		$data['Categoria'] = $this->Ticket_model->getcategoria();
	    $data['mtn_estado_ticket'] = $this->Ticket_model->getestado();
		$this->load->view("admin/header");
		$this->load->view("admin/aside");
		$this->load->view("admin/ticket/agregar",$data);//manda al formulario
		$this->load->view("admin/footer");
	}

	public function ticketsol($id_ticket){
		//$data = array('usuario' => $this->Ticket_model->getuser($id_ticket));
		$data2 = array('Ticket' => $this->Ticket_model->getidticket($id_ticket),
			'usuario' => $this->Ticket_model->getuser($id_ticket));
		$data2['mtn_estado_ticket'] = $this->Ticket_model->getestadosol();
		$this->load->view("admin/header");
		$this->load->view("admin/aside");
		//$this->load->view("admin/ticket/infoticket",$data);
		$this->load->view("admin/ticket/solucion",$data2);
		$this->load->view("admin/footer");
	}

	public function ticketcancel($id_ticket){
		//$data = array('usuario' => $this->Ticket_model->getuser($id_ticket));
		$data2 = array('Ticket' => $this->Ticket_model->getidticket($id_ticket),
			'usuario' => $this->Ticket_model->getuser($id_ticket));
		$data2['mtn_estado_ticket'] = $this->Ticket_model->getestadocancel();
		$this->load->view("admin/header");
		$this->load->view("admin/aside");
		//$this->load->view("admin/ticket/infoticket",$data);
		$this->load->view("admin/ticket/cancelar",$data2);
		$this->load->view("admin/footer");
	}

	public function ticketderiv($id_ticket){
		//$data = array('usuario' => $this->Ticket_model->getuser($id_ticket));
		$data2 = array('Ticket' => $this->Ticket_model->getidticket($id_ticket),
			'usuario' => $this->Ticket_model->getuser($id_ticket));
		$data2['mtn_estado_ticket'] = $this->Ticket_model->getestadoderiv();
		$this->load->view("admin/header");
		$this->load->view("admin/aside");
		//$this->load->view("admin/ticket/infoticket",$data);
		$this->load->view("admin/ticket/derivar",$data2);
		$this->load->view("admin/footer");
	}

	public function ladminsol(){
		
		$data = array('ticketsolu' => $this->Ticket_model->getsol(), );
		$this->load->view("admin/header");
		$this->load->view("admin/aside");
		$this->load->view("admin/ticket/lista3",$data);
		$this->load->view("admin/footer");
	}

	public function ladmincancel(){
		
		$data = array('ticketcanc' => $this->Ticket_model->getcancel(), );
		$this->load->view("admin/header");
		$this->load->view("admin/aside");
		$this->load->view("admin/ticket/lista4",$data);
		$this->load->view("admin/footer");
	}

	public function ladmin(){
		//lista ticket de los admin pendientes
		$data = array('ticketf' => $this->Ticket_model->getticketfuncadmin(), );
		$this->load->view("admin/header");
		$this->load->view("admin/aside");
		$this->load->view("admin/ticket/lista2",$data);
		$this->load->view("admin/footer");
	}

	public function fetch_sub(){
		if ($this->input->post('id_cat')) {
			echo $this->Ticket_model->fetch_sub($this->input->post('id_cat'));
		}
	}

	public function fetch_mansub(){
		if ($this->input->post('id_subcat')) {
			echo $this->Ticket_model->fetch_mansub($this->input->post('id_subcat'));
		}
	}

	public function edit($id_ticket){
		$data2 = array('Ticket' => $this->Ticket_model->getidticket($id_ticket));
		$data2['Categoria'] = $this->Ticket_model->getcategoria();
		$data2['mtn_estado_ticket'] = $this->Ticket_model->getestado();
		$data2['Establecimiento'] = $this->Ticket_model->getestable();
		$this->load->view("admin/header");
		$this->load->view("admin/aside");
		$this->load->view("admin/ticket/edit",$data2);
		$this->load->view("admin/footer");
	}

	public function update(){
		$id_ticket = $this->input->post("id_ticket");
		$Categoria = $this->input->post("id_cat");
		$Subcategoria = $this->input->post("id_subcat");
		$rut_user = $this->input->post("rut_user");
		$id_estable = $this->input->post('id_estable');
		$descripcion= $this->input->post("descripcion");
		$ip = $this->input->post("ip");
		$ip_sugerida = $this->input->post('ip_sugerida');
		$fono = $this->input->post('fono');
		$estado_ticket = $this->input->post('estado_ticket');
		$mansubcat = $this->input->post('id_mansub');

		$this->form_validation->set_rules("descripcion","Descripcion","trim|required");
		$this->form_validation->set_rules("ip", "IP", "valid_ip[ipv4]");
		$this->form_validation->set_rules("fono","Telefono","trim|required|min_length[9]");

		if ($this->form_validation->run()) {
			$data = array(
				'id_cat' => $Categoria,
				'id_subcat' => $Subcategoria,
				'rut_user' => $rut_user ,
				'id_estable' => $id_estable,
				'descripcion' => $descripcion,
				'ip' => $ip,
				'ip_sugerida' => $ip_sugerida,
				'fono' => $fono,
				'fecha' => date('Y-m-d H:i:s'),
				'estado_ticket' => $estado_ticket,
				'id_mansub' => $mansubcat);

			if($this->Ticket_model->update($id_ticket,$data)){
			//guarda con exito y manda a lista de ticket de fu
				redirect(base_url()."ticketadmin/ticket/ladmin");
			}
			else{
			//error al actualizar
				$this->session->set_flashdata("error","No se pudo actualizar la informacion");
				redirect(base_url()."ticketadmin/ticket/edit");
			}
		}
		else{
			$this->edit($id_ticket);
		}
	}

	public function store(){
		$Categoria = $this->input->post("id_cat");
		$Subcategoria = $this->input->post("id_subcat");
		$rut_user = $this->input->post("rut_user");
		$id_estable = $this->input->post('id_estable');
		$descripcion= $this->input->post("descripcion");
		$ip = $this->input->post("ip");
		$ip_sugerida = $this->input->post('ip_sugerida');
		$fono = $this->input->post('fono');
		$estado_ticket = $this->input->post('estado_ticket');
		$mansubcat = $this->input->post('id_mansub');

		$this->form_validation->set_rules("descripcion","Descripcion","trim|required");
		$this->form_validation->set_rules("ip", "IP", "valid_ip[ipv4]");
		$this->form_validation->set_rules("fono","Telefono","trim|required|min_length[9]");

		if ($this->form_validation->run()) {
			$data = array(
				'id_cat' => $Categoria,
				'id_subcat' => $Subcategoria,
				'rut_user' => $rut_user ,
				'id_estable' => $id_estable,
				'descripcion' => $descripcion,
				'ip' => $ip,
				'ip_sugerida' => $ip_sugerida,
				'fono' => $fono,
				'fecha' => date('Y-m-d H:i:s'),
				'estado_ticket' => $estado_ticket,
				'id_mansub' => $mansubcat);

			if($this->Ticket_model->guardar($data)){
			//guarda con exito y manda a lista de ticket de funcionario
				redirect(base_url()."ticketadmin/ticket");
			}
			else{
			//error al guardar
				$this->session->set_flashdata("error","No se pudo ingresar la informacion");
				redirect(base_url()."ticketadmin/ticket/agregar");
			}
		}
		else{
			$this->add();
		}
	}

	public function storesol(){
		$rut_user = $this->input->post("rut_user");
		$id_ticket = $this->input->post("id_ticket");
		$mensaje = $this->input->post("mensaje");
		$estado_ac = $this->input->post("estado_ac");

		$this->form_validation->set_rules("mensaje","Mensaje","trim|required");

		if ($this->form_validation->run()) {
			$data = array('rut_user' => $rut_user,
				'id_ticket' => $id_ticket,
				'mensaje' => $mensaje,
				'fecha_ac' => date('Y-m-d H:i:s'),
				'estado_ac' => $estado_ac);
			if($this->Accion_model->guardar($data)){
			
				redirect(base_url()."ticketadmin/ticket");
			}
			else{
			//error al guardar
				$this->session->set_flashdata("error","No se pudo ingresar la informacion");
				redirect(base_url()."ticketadmin/ticket/solucion");
			}
		}else{
			$this->ticketsol($id_ticket);
		}
	}

	public function storecancel(){
		$rut_user = $this->input->post("rut_user");
		$id_ticket = $this->input->post("id_ticket");
		$mensaje = $this->input->post("mensaje");
		$estado_ac = $this->input->post("estado_ac");

		$this->form_validation->set_rules("mensaje","Mensaje","trim|required");

		if ($this->form_validation->run()) {
			$data = array('rut_user' => $rut_user,
				'id_ticket' => $id_ticket,
				'mensaje' => $mensaje,
				'fecha_ac' => date('Y-m-d H:i:s'),
				'estado_ac' => $estado_ac);
			if($this->Accion_model->guardar($data)){
			
				redirect(base_url()."ticketadmin/ticket");
			}
			else{
			//error al guardar
				$this->session->set_flashdata("error","No se pudo ingresar la informacion");
				redirect(base_url()."ticketadmin/ticket/cancelar");
			}
		}else{
			$this->ticketcancel($id_ticket);
		}
	}

	public function storederiv(){
		$rut_user = $this->input->post("rut_user");
		$id_ticket = $this->input->post("id_ticket");
		$mensaje = $this->input->post("mensaje");
		$estado_ac = $this->input->post("estado_ac");

		$this->form_validation->set_rules("mensaje","Mensaje","trim|required");

		if ($this->form_validation->run()) {
			$data = array('rut_user' => $rut_user,
				'id_ticket' => $id_ticket,
				'mensaje' => $mensaje,
				'fecha_ac' => date('Y-m-d H:i:s'),
				'estado_ac' => $estado_ac);
			if($this->Accion_model->guardar($data)){
			
				redirect(base_url()."ticketadmin/ticket");
			}
			else{
			//error al guardar
				$this->session->set_flashdata("error","No se pudo ingresar la informacion");
				redirect(base_url()."ticketadmin/ticket/derivar");
			}
		}else{
			$this->ticketderiv($id_ticket);
		}
	}

}