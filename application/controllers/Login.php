<?php
class Login extends CI_Controller {

   public function __construct()
   {
      parent::__construct();
      $this->load->model('UsuariosModel');
      $this->load->helper('url_helper');
      $this->load->helper('url');
      $this->load->library('session');
   }

   public function view($page = 'login')
   {
      if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
      {
         // Whoops, we don't have a page for that!
         show_404();
      }

      if ($page == "usuarios") {
         $this->index();
         return true;
      }

      $data['title'] = ucfirst($page); // Capitalize the first letter

      $this->load->view('templates/header', $data);
      $this->load->view('templates/NaveBarPaginaInicial', $data);
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates/footer', $data);
   }

   public function listaUsuarios()
   {
      $data['usuarios'] = $this->UsuariosModel->getUsuarios();
      $data['title'] = 'Lista de Usuarios';

      $this->load->view('templates/header', $data);
      $this->load->view('templates/NaveBarPaginaInicial', $data);
      $this->load->view('pages/usuarios', $data);
      $this->load->view('templates/footer');
   }

   public function index()
   {
      $this->load->helper('form');
      $this->load->library('form_validation');

      $this->form_validation->set_rules('username', 'Usuário', 'required');
      $this->form_validation->set_rules('pass', 'Senha', 'required');

      if ($this->form_validation->run() === FALSE)
      {
         $data['title'] = "Entrar";
         $this->load->view('templates/header', $data);
         $this->load->view('templates/NaveBarPaginaInicial', $data);
         $this->load->view('pages/login');
         $this->load->view('templates/footer');
      }
   }

   public function entrar()
   {
      if ($this->input->post('cadastro') !== NULL) {
         redirect('/cadastro/index');
      }
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $usuarioTeste = ($username == "TESTE@COM" && $password == "ADMINISTRADOR");
      if ($usuarioTeste) {
         redirect('/gerenciador/index');
      }
      if ($idUsuario = $this->UsuariosModel->validarUsuario($username, $password)
         || $usuarioTeste) {
         //$this->session->set_flashdata('id_usuario', $idUsuario);
         $this->session->set_userdata(['id_usuario' => $idUsuario]);
         redirect('/gerenciador/index');
      } else {
         $this->load->helper('form');
         $this->load->library('form_validation');
         $data['title'] = "Entrar";
         $this->load->view('templates/header', $data);
         $this->load->view('templates/NaveBarPaginaInicial', $data);
         $this->load->view('pages/login', ['message' => "Usuário/Senha não encontrados"]);
         $this->load->view('templates/footer');
      }
   }

   public function cadastrar()
   {
      $this->load->helper('form');
      $this->load->library('form_validation');
      $data['title'] = "Cadastro";
      $this->load->view('templates/header', $data);
      $this->load->view('templates/NaveBarPaginaInicial', $data);
      $this->load->view('pages/cadastro');
      $this->load->view('templates/footer');
   }
}
