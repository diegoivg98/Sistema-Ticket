<?php 

class Mansubcat extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('Mansubcat_model');
	}

	public function index()
	{
		$data = array('query2' => $this->Mansubcat_model->getmansubcat(), ); 
		$this->load->view("superuser/header");
		$this->load->view("superuser/aside");
		$this->load->view("superuser/mansubcat/lista",$data);
		$this->load->view("superuser/footer");
	}

	public function add(){
		$data2['Perfil'] = $this->Mansubcat_model->getperfil();
		$data2['Categoria'] = $this->Mansubcat_model->getcategoria();
		$this->load->view("superuser/header");
		$this->load->view("superuser/aside");
		$this->load->view("superuser/mansubcat/agregar",$data2);
		$this->load->view("superuser/footer");
	}

	public function fetch_sub(){
		if ($this->input->post('id_cat')) {
			echo $this->Mansubcat_model->fetch_sub($this->input->post('id_cat'));
		}
	}

	public function store(){
		$Categoria = $this->input->post("id_cat");
		$Subcategoria = $this->input->post("id_subcat");
		$id_perfil = $this->input->post("id_perfil");

		$data = array('id_cat' => $Categoria,
			          'id_subcat' => $Subcategoria,
			          'id_perfil' =>$id_perfil,
			          'activo' => "1");//1=true
		if($this->Mansubcat_model->guardar($data)){
			//guarda con exito y manda a lista de ticket de funcionario
			redirect(base_url()."mantenimiento/mansubcat");
		}else{
			//error al guardar
			$this->session->set_flashdata("error","No se pudo ingresar la informacion");
			redirect(base_url()."mantenimiento/mansubcat/add");
		}
	}

}