<?php  

class Ticket extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('Ticket_model');
		$this->load->library('form_validation');//LIBRERIA PARA VALIDACIONES

	}	
	
	public function index()
	{
		$data = array('ticketf' => $this->Ticket_model->getticketfuncadmin(), );
		$this->load->view("funcionario/header");
		$this->load->view("funcionario/aside");
		$this->load->view("funcionario/ticket/lista",$data);//muestra el dataTable
		$this->load->view("funcionario/footer");
	}

	public function lfuncsol(){
		
		$data = array('ticketsolu' => $this->Ticket_model->getsol(), );
		$this->load->view("funcionario/header");
		$this->load->view("funcionario/aside");
		$this->load->view("funcionario/ticket/lista2",$data);
		$this->load->view("funcionario/footer");
	}

	public function lfunccancel(){
		
		$data = array('ticketcanc' => $this->Ticket_model->getcancel(), );
		$this->load->view("funcionario/header");
		$this->load->view("funcionario/aside");
		$this->load->view("funcionario/ticket/lista3",$data);
		$this->load->view("funcionario/footer");
	}

	public function lfuncderiv(){
		
		$data = array('ticketder' => $this->Ticket_model->getderiv(), );
		$this->load->view("funcionario/header");
		$this->load->view("funcionario/aside");
		$this->load->view("funcionario/ticket/lista4",$data);
		$this->load->view("funcionario/footer");
	}

	public function add(){
		$data['Establecimiento'] = $this->Ticket_model->getestable();
		$data['Categoria'] = $this->Ticket_model->getcategoria();
		$data['mtn_estado_ticket'] = $this->Ticket_model->getestado();
		$this->load->view("funcionario/header");
		$this->load->view("funcionario/aside");
		$this->load->view("funcionario/ticket/agregar",$data);//manda al formulario
		$this->load->view("funcionario/footer");
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
		$this->load->view("funcionario/header");
		$this->load->view("funcionario/aside");
		$this->load->view("funcionario/ticket/edit",$data2);
		$this->load->view("funcionario/footer");
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
			//guarda con exito y manda a lista de ticket de funcionario
				redirect(base_url()."ticketfunc/ticket");
			}
			else{
			//error al actualizar
				$this->session->set_flashdata("error","No se pudo actualizar la informacion");
				redirect(base_url()."ticketfunc/ticket/edit");
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
				redirect(base_url()."ticketfunc/ticket");
			}
			else{
			//error al guardar
				$this->session->set_flashdata("error","No se pudo ingresar la informacion");
				redirect(base_url()."ticketfunc/ticket/agregar");
			}
		}
		else{
			$this->add();
		}
	}

		
}