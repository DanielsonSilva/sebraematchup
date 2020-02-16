<?php

class Usuario extends CI_Controller {

   public function __construct()
   {
      parent::__construct();
      $this->load->model('UsuariosModel');
      $this->load->helper('url_helper');
      $this->load->helper('url');
   }

   public function novo()
   {
      $data = $this->input->post();
      $username = $data['username'];
      if ($this->UsuariosModel->jaExisteUsuario($username)) {
         $this->view("Cadastro", ['message' => 'Já existe usuário com esse ' .
            'nome, por favor escolha outro']);
         return;
      }
      $password = $data['password'];
      if (strlen($password) <= 7) {
         $this->view("Cadastro", ['message' => 'Senha muito pequena, escolha ' .
            'no mínimo uma senha com 8 caracteres']);
         return;
      }
      if ($this->UsuariosModel->gravar($data)) {
         $this->load->helper('url');
         redirect('/');
      } else {
         $this->view("Cadastro", ['message' => 'Desculpe, ocorreu um erro. ' .
            'Tente novamente mais tarde']);
         return;
      }
   }

}
