<?php
class Login extends CI_Controller {

   public function __construct()
   {
      parent::__construct();
      $this->load->model('UsuariosModel');
      $this->load->helper('url_helper');
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
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates/footer', $data);
   }

   public function listaUsuarios()
   {
      $data['usuarios'] = $this->UsuariosModel->getUsuarios();
      $data['title'] = 'Lista de Usuarios';

      $this->load->view('templates/header', $data);
      $this->load->view('pages/usuarios', $data);
      $this->load->view('templates/footer');
   }

   public function index()
   {
      $this->load->helper('form');
      $this->load->library('form_validation');

      //$data['title'] = 'Create a news item';

      $this->form_validation->set_rules('username', 'Usuário', 'required');
      $this->form_validation->set_rules('pass', 'Senha', 'required');

      if ($this->form_validation->run() === FALSE)
      {
         $data['title'] = "Entrar";
         $this->load->view('templates/header', $data);
         $this->load->view('pages/login');
         $this->load->view('templates/footer');
      } else {
         $this->news_model->set_news();
         $this->load->view('pages/home');
      }
   }
}
