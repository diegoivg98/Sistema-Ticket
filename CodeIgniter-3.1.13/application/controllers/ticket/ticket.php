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
		$data = array('ticket' => $this->Ticket_model->getticket(), );
		$this->load->view("superuser/header");
		$this->load->view("superuser/aside");
		$this->load->view("superuser/ticket/lista",$data);//muestra el dataTable
		$this->load->view("superuser/footer");
	}

	public function lsol(){
		
		$data = array('ticketsolu' => $this->Ticket_model->getsolsu(), );
		$this->load->view("superuser/header");
		$this->load->view("superuser/aside");
		$this->load->view("superuser/ticket/lista2",$data);
		$this->load->view("superuser/footer");
	}	

	public function lcancel(){
		
		$data = array('ticketcanc' => $this->Ticket_model->getcancelsu(), );
		$this->load->view("superuser/header");
		$this->load->view("superuser/aside");
		$this->load->view("superuser/ticket/lista3",$data);
		$this->load->view("superuser/footer");
	}	

	public function lderiv(){
		
		$data = array('ticketder' => $this->Ticket_model->getderivsu(), );
		$this->load->view("superuser/header");
		$this->load->view("superuser/aside");
		$this->load->view("superuser/ticket/lista4",$data);
		$this->load->view("superuser/footer");
	}	
}