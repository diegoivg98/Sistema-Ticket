<?php  
class Subcategoria extends CI_Controller{
	public function __construct() {
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('Subcategorias_model');
		$this->load->library('form_validation');//LIBRERIA PARA VALIDACIONES
	}
	public function index()
	{
		$data = array('query' => $this->Subcategorias_model->getcatsub(), ); 
		$this->load->view("superuser/header");
		$this->load->view("superuser/aside");
		$this->load->view("superuser/subcategoria/lista",$data);
		$this->load->view("superuser/footer");
	}
	public function add(){
		$data['Categoria'] = $this->Subcategorias_model->getcategoria();
		$this->load->view("superuser/header");
		$this->load->view("superuser/aside");
		$this->load->view("superuser/subcategoria/agregar",$data);//manda al formulario
		$this->load->view("superuser/footer");
	}

	public function store(){
	$id_cat = $this->input->post("id_cat");
	$nom_subcat = $this->input->post("nom_subcat");
	$descripcion = $this->input->post("descripcion");

	$this->form_validation->set_rules("descripcion","Descripcion","trim|required");
	$this->form_validation->set_rules("nom_subcat","Subcategoria","trim|required");

	if ($this->form_validation->run()) {
		$data = array(
			'id_cat' => $id_cat,
			'nom_subcat' => $nom_subcat,
			'descripcion' => $descripcion);
			if($this->Subcategorias_model->guardar($data)){
		//guarda con exito y manda a lista de ticket de funcionario
				redirect(base_url()."mantenimiento/subcategoria");
			}
			else{
			//error al guardar
				$this->session->set_flashdata("error","No se pudo ingresar la informacion");
				redirect(base_url()."mantenimiento/subcategoria/agregar");
			}
		}
		else{
			$this->add();
		}
	}
	
}