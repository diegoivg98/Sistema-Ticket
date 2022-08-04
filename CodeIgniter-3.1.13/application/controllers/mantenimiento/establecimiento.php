<?php  
class Establecimiento extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model('Establecimientos_model');
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');//LIBRERIA PARA VALIDACIONES
	}	
	public function index()
	{
		//dashboard de establecimiento
		$data = array('Establecimiento' => $this->Establecimientos_model->getEstablecimiento(), );
		$this->load->view("superuser/header");
		$this->load->view("superuser/aside");
		$this->load->view("superuser/establecimiento/lista",$data);
		$this->load->view("superuser/footer");
	}

	public function add(){
		$this->load->view("superuser/header");
		$this->load->view("superuser/aside");
		$this->load->view("superuser/establecimiento/agregar");
		$this->load->view("superuser/footer");
	}

	public function store(){
		$cod_estable = $this->input->post("cod_estable");
		$nom_estable = $this->input->post("nom_estable");
		$descripcion = $this->input->post("descripcion");

		$this->form_validation->set_rules("cod_estable","codigo","required|is_unique Establecimiento.cod_estable]");

		$this->form_validation->set_rules("nom_estable","nombre","required");

		$this->form_validation->set_rules("descripcion","descripcion","required");

		if ($this->form_validation->run()) {
			$data = array(
				'cod_estable' => $cod_estable,
				'nom_estable' => $nom_estable,
				'descripcion' => $descripcion);

			if($this->Establecimientos_model->guardar($data)){
			//guarda con exito y manda a la tabla con la lista de los usuarios
				redirect(base_url()."mantenimiento/establecimiento");

			}
			else{
			//error al guardar
				redirect(base_url()."mantenimiento/establecimiento/agregar");
			}
		}
		else{
			$this->add();
		}
	}
}