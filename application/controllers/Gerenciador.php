<?php
require_once dirname(__FILE__) . '/../models/entity/Usuario.php';

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
      //$idUsuario = $this->session->flashdata('id_usuario');
      $idUsuario = $this->session->id_usuario;
      $objUsuarioLogado = $this->UsuariosModel->getUsuario($idUsuario);

      $data['title'] = 'Perfil';
      $data['usuarioLogado'] = $objUsuarioLogado;

      $this->load->view('templates/header', $data);
      $this->load->view('templates/NaveBarPaginaPerfil', $data);
      $this->load->view('pages/gerenciador', $data);
      $this->load->view('templates/footer', $data);
   }

}
