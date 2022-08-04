<?php  

class Usuario extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('Usuarios_model');
		$this->load->library('form_validation');//LIBRERIA PARA VALIDACIONES

	}	
	public function index()
	{      
		$data = array('query3' => $this->Usuarios_model->getuser(), );
		$data['Perfil'] = $this->Usuarios_model->getperfil();
		$data['Establecimiento'] = $this->Usuarios_model->getestable();
		
		$this->load->view("superuser/header");
		$this->load->view("superuser/aside");
		$this->load->view("superuser/usuario/lista",$data);
		$this->load->view("superuser/footer");
	}

	public function add (){
		$data2['Perfil'] = $this->Usuarios_model->getperfil();
		$data2['Establecimiento'] = $this->Usuarios_model->getestable();

		$this->load->view("superuser/header");
		$this->load->view("superuser/aside");
		$this->load->view("superuser/usuario/agregar",$data2);
		$this->load->view("superuser/footer");
	}

	public function store(){
		$rut_user = $this->input->post("rut_user");
		$nombres = $this->input->post("nombres");
		$apaterno = $this->input->post("apaterno");
		$amaterno = $this->input->post("amaterno");
		$nom_user = $this->input->post("nom_user");
		$passw = $this->input->post('passw');
		$id_perfil = $this->input->post('id_perfil');
		$id_estable = $this->input->post('id_estable');

    //validaciones para form usuario
		$this->form_validation->set_rules("rut_user","R.U.T","trim|required|min_length[9]|max_length[10]|is_unique[Usuario.rut_user]");
		$this->form_validation->set_rules("nombres","Nombres","trim|required");
		$this->form_validation->set_rules("apaterno","Apellido paterno","trim|required");
		$this->form_validation->set_rules("amaterno","Apellido materno","trim|required");
		$this->form_validation->set_rules("nom_user","Nombre usuario","trim|required");
		$this->form_validation->set_rules("passw","Contraseña","trim|required");

		if ($this->form_validation->run()) {
			$data = array(
				'rut_user' => $rut_user ,
				'nombres' => $nombres,
				'apaterno' => $apaterno,
				'amaterno' => $amaterno,
				'nom_user' => $nom_user,
			    'passw' => hash('sha256',$passw),//ENCRIPTACION PASSWORD HASH256
			    'id_perfil' => $id_perfil,
			    'id_estable' => $id_estable);

			if($this->Usuarios_model->guardar($data)){
			//guarda con exito y manda a la tabla con la lista de los usuarios
				redirect(base_url()."mantenimiento/usuario");
			}
			else{
			//error al guardar
				$this->session->set_flashdata("error","No se pudo ingresar la informacion");
				redirect(base_url()."mantenimiento/usuario/agregar");
			}
		}
		else{
			$this->add();
		}
	}

	public function edit($rut_user){
		$data2 = array('Usuario' => $this->Usuarios_model->getusuario($rut_user), );
		$data2['Perfil'] = $this->Usuarios_model->getperfil();
		$data2['Establecimiento'] = $this->Usuarios_model->getestable();
		$this->load->view("superuser/header");
		$this->load->view("superuser/aside");
		$this->load->view("superuser/usuario/edit",$data2);
		$this->load->view("superuser/footer");
	}

	public function update(){
		$rut_user = $this->input->post("rut_user");
		$nombres = $this->input->post("nombres");
		$apaterno = $this->input->post("apaterno");
		$amaterno = $this->input->post("amaterno");
		$nom_user = $this->input->post("nom_user");
		$passw = $this->input->post('passw');
		$id_perfil = $this->input->post('id_perfil');
		$id_estable = $this->input->post('id_estable');

		$rutactual = $this->Usuarios_model->getusuario($rut_user);

		if ($rut_user == $rutactual->rut_user) {
			$unique = '';
		}else{
			$unique = '|is_unique[Usuario.rut_user]';
		}

		$this->form_validation->set_rules("rut_user","R.U.T","trim|required|min_length[9]|max_length[10]".$unique);
		$this->form_validation->set_rules("nombres","Nombres","trim|required");
		$this->form_validation->set_rules("apaterno","Apellido paterno","trim|required");
		$this->form_validation->set_rules("amaterno","Apellido materno","trim|required");
		$this->form_validation->set_rules("nom_user","Nombre usuario","trim|required");
		$this->form_validation->set_rules("passw","Contraseña","trim|required");

		if ($this->form_validation->run()) {
			$data = array('rut_user' => $rut_user ,
				'nombres' =>$nombres,
				'apaterno' => $apaterno,
				'amaterno' => $amaterno,
				'nom_user' => $nom_user,
			          'passw' => hash('sha256',$passw),//ENCRIPTACION PASSWORD HASH256
			          'id_perfil' => $id_perfil,
			          'id_estable' => $id_estable);

			if ($this->Usuarios_model->update($rut_user,$data)) {
				redirect(base_url()."mantenimiento/usuario");
			}else{
				$this->session->set_flashdata("error","No se pudo actualizar la informacion");
				redirect(base_url()."mantenimiento/usuario/edit");
			}	
		}else{
			$this->edit($rut_user);
		}		
	}
}