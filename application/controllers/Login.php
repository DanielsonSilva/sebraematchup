<?php
class Login extends CI_Controller {

  public function view($page = 'login')
  {
    if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
    {
      // Whoops, we don't have a page for that!
      show_404();
    }

    $data['title'] = ucfirst($page); // Capitalize the first letter

    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer', $data);
  }

  public function entrar()
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    //$data['title'] = 'Create a news item';

    $this->form_validation->set_rules('username', 'Usuário', 'required');
    $this->form_validation->set_rules('pass', 'Senha', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('pages/login');
        $this->load->view('templates/footer');
    } else {
        $this->news_model->set_news();
        $this->load->view('pages/home');
    }
  }
}
