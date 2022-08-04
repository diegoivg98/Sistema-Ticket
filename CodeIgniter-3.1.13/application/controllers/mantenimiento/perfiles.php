<?php 
class Perfiles extends CI_Controller{
	public function __construct() {
		parent::__construct();
		$this->load->model('Perfiles_model');
	}
	public function index()
	{
		$data = array('Perfil' => $this->Perfiles_model->getPerfiles(), ); 
		$this->load->view("superuser/header");
		$this->load->view("superuser/aside");
		$this->load->view("superuser/perfiles/lista",$data);
		$this->load->view("superuser/footer");
	}
}