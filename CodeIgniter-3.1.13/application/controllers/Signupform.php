<?php
class Signupform extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
    $this->load->library('form_validation');//LIBRERIA PARA VALIDACIONES
    $this->load->model("Usuarios_model");
    $this->load->model("Ticket_model");
    $this->load->model('Categorias_model');
  }

  public function inicio(){
    $nom_user = $this->input->post('nom_user');
    $passw = $this->input->post('passw');
    $res = $this->Usuarios_model->login($nom_user,  
                                        hash('sha256',$passw));

    if (!$res) {//datos erroneos al momento de ingresar
      $this->session->set_flashdata("error","El usuario y/o contraseña son incorrectas");
      redirect(base_url());//seguir en vista login
    }
    else{
      $data = array('rut_user'=>$res->rut_user,
        'id_perfil' => $res->id_perfil,
        'nombre'=>$res->nombres,
        'apaterno'=>$res->apaterno,
        'amaterno'=>$res->amaterno,
        'id_estable'=>$res->id_estable);

      $this->session->set_userdata($data);

      if ($this->session->id_perfil == '1') {//PERFIL FUNCIONARIO
        $data2 = array('ticketf' => $this->Ticket_model->getticketfuncadmin(), );
        $this->load->view("funcionario/header");
        $this->load->view("funcionario/aside");
        $this->load->view("funcionario/ticket/lista",$data2);
        $this->load->view("funcionario/footer");
      }

      if ($this->session->id_perfil == '2') {//PERFIL ADMINISTRADOR
       $data3 = array('ticketest' => $this->Ticket_model->getticketest(), );
       $this->load->view("admin/header");
       $this->load->view("admin/aside");
       $this->load->view("admin/ticket/lista",$data3);
       $this->load->view("admin/footer");
     }

     if ($this->session->id_perfil == '3') {//PERFIL TECNICO
       $data4 = array('tickettec' => $this->Ticket_model->gettickettec(), );
       $this->load->view("tecnico/header");
       $this->load->view("tecnico/aside");
       $this->load->view("tecnico/ticket/lista",$data4);
       $this->load->view("tecnico/footer");
     }

     if ($this->session->id_perfil == '4') {//PERFIL SUPERUSUARIO
      
      $data = array('Categoria' => $this->Categorias_model->getCategorias(), ); 
      $this->load->view("superuser/header");
      $this->load->view("superuser/aside");
      $this->load->view("superuser/categoria/lista",$data);
      $this->load->view("superuser/footer");
    }
    
  }
}

public function logout(){
  $this->session->sess_destroy(); //cierre de sesion
  redirect(base_url());
}

public function index(){
     $this->load->view("login/login"); //vista del login
   }
}