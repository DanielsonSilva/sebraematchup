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
      $this->load->view('pages/cadastro', $data);
      $this->load->view('templates/footer');
   }

   public function cadastro()
   {
      $username = $this->input->post('username');
      if ($this->UsuariosModel->jaExisteUsuario($username)) {
         $this->view("Cadastro", ['message' => 'Já existe usuário com esse ' .
            'nome, por favor escolha outro']);
         return;
      }
      $password = $this->input->post('password');
      if (strlen($password) <= 7) {
         $this->view("Cadastro", ['message' => 'Senha muito pequena, escolha ' .
            'no mínimo uma senha com 8 caracteres']);
         return;
      }
      if ($this->UsuariosModel->gravar($username, $password)) {
         $this->load->helper('url');
         redirect('/');
      } else {
         $this->view("Cadastro", ['message' => 'Desculpe, ocorreu um erro. ' .
            'Tente novamente mais tarde']);
         return;
      }
   }

}
