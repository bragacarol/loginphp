<?php
class Login extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('login_model');
  }
 
  function index()
  {
    $this->load->view('login_view');
  }
 
  function auth()
  {

  }

  function logout()
  {
	$this->session->sess_destroy();
    redirect('login');
  }

}
