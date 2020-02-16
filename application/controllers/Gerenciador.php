<?php

class Gerenciador extends CI_Controller {

   public function __construct()
   {
      parent::__construct();
      $this->load->model('UsuariosModel');
      $this->load->helper('url_helper');
      $this->load->helper('url');
      $this->load->library('session');
   }

   public function index()
   {
      $idUsuario = $this->session->flashdata('id_usuario');
   }

}
