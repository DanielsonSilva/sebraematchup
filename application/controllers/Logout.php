<?php

class Logout extends CI_Controller {

   public function __construct()
   {
      parent::__construct();
      $this->load->helper('url_helper');
      $this->load->helper('url');
      $this->load->library('session');
   }

   public function index() {
      unset($_SESSION);
      redirect('/Login/');
   }

}
