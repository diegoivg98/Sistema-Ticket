<?php
class Categorias extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Categorias_model');
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');//LIBRERIA PARA VALIDACIONES

	}
	public function index(){
		//llamo los datos pertenecientes a la tabla Categoria
		$data = array('Categoria' => $this->Categorias_model->getCategorias(), ); 
		$this->load->view("superuser/header");
		$this->load->view("superuser/aside");
		$this->load->view("superuser/categoria/lista",$data); //carga los datos en la tabla
		$this->load->view("superuser/footer");
	}
///////////////////////////////////////////////////////////////////////////////////////////////////	
	public function add(){
		$this->load->view("superuser/header");
		$this->load->view("superuser/aside");
		$this->load->view("superuser/categoria/agregar");//carga formulario 
		$this->load->view("superuser/footer");
	}
	public function almacenar(){
		$nom_cat = $this->input->post("nom_cat");
		$descripcion = $this->input->post("descripcion");
		
		$this->form_validation->set_rules("nom_cat", "nombre", "trim|required");
		$this->form_validation->set_rules("descripcion","Descripcion","trim|required");

		if ($this->form_validation->run()) {
			$data = array(
				'nom_cat' => $nom_cat ,
				'descripcion' => $descripcion
			);
			if($this->Categorias_model->guardar($data)){
			//guarda con exito y manda a la tabla con la lista de las categorias
				redirect(base_url()."mantenimiento/categorias");
			}
			else{
			//error al guardar
				redirect(base_url()."mantenimiento/categorias/agregar");
			}
		}
		else{
			$this->add();
		}

	}
}