<?php  

class Ticket extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('Ticket_model');
		$this->load->model('Accion_model');
		$this->load->model('Usuarios_model');
		$this->load->library('form_validation');//LIBRERIA PARA VALIDACIONES
	}	
	
	public function index()
	{
	    $data = array('tickettec' => $this->Ticket_model->gettickettec(), );
		$this->load->view("tecnico/header");
		$this->load->view("tecnico/aside");
		$this->load->view("tecnico/ticket/lista",$data);//muestra el dataTable
		$this->load->view("tecnico/footer");
	}

	public function ticketderiv(){
		$data = array('tickettec2' => $this->Ticket_model->gettickettec2(), );
		$this->load->view("tecnico/header");
		$this->load->view("tecnico/aside");
		$this->load->view("tecnico/ticket/lista2",$data);//muestra el dataTable
		$this->load->view("tecnico/footer");
	}

	public function ticketsol($id_ticket){
		$data2 = array('Ticket' => $this->Ticket_model->getidticket($id_ticket),
			'usuario' => $this->Ticket_model->getuser($id_ticket));
		$data2['mtn_estado_ticket'] = $this->Ticket_model->getestadosol();

		$this->load->view("tecnico/header");
		$this->load->view("tecnico/aside");
		$this->load->view("tecnico/ticket/solucion",$data2);
		$this->load->view("tecnico/footer");
	}

	public function ticketcancel($id_ticket){
		$data2 = array('Ticket' => $this->Ticket_model->getidticket($id_ticket),
			'usuario' => $this->Ticket_model->getuser($id_ticket));
		$data2['mtn_estado_ticket'] = $this->Ticket_model->getestadocancel();
		$this->load->view("tecnico/header");
		$this->load->view("tecnico/aside");
		$this->load->view("tecnico/ticket/cancelar",$data2);
		$this->load->view("tecnico/footer");
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
			
				redirect(base_url()."tickettec/ticket");
			}
			else{
			//error al guardar
				$this->session->set_flashdata("error","No se pudo ingresar la informacion");
				redirect(base_url()."tickettec/ticket/solucion");
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
			
				redirect(base_url()."tickettec/ticket");
			}
			else{
			//error al guardar
				$this->session->set_flashdata("error","No se pudo ingresar la informacion");
				redirect(base_url()."tickettec/ticket/cancelar");
			}
		}else{
			$this->ticketcancel($id_ticket);
		}
	}
}