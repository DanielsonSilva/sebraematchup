<?php

class Cadastro extends CI_Controller {

   public function __construct()
   {
      parent::__construct();
      $this->load->model('UsuariosModel');
      $this->load->helper('url_helper');
   }

   public function index()
   {
      $this->view("Cadastro");
   }

   private function view($title, $data = null) {
      $this->load->library('form_validation');
      $this->load->view('templates/header', ['title' => 'Cadastro']);
      $this->load->view('templates/NaveBarPaginaCadastro', $data);
      $this->load->view('pages/cadastro', $data);
      $this->load->view('templates/footer');
   }

}
