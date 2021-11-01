<?php
class Page extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		/* se o usuário não estiver logado, redireciona para o login **/
		if($this->session->userdata('logged_in') !== TRUE)
		{
			redirect('login');
		}
	}

	function index()
	{
		/* permite o acesso de admin **/
		if($this->session->userdata('level')==='1')
		{
			$this->load->view('dashboard_view');
		}
		else
		{
			echo "Acesso Negado";
		}
	}

	function colaboradores()
	{
		/* permite o acesso de colaborador **/
		if($this->session->userdata('level')==='2')
		{
			$this->load->view('dashboard_view');
		}
		else
		{
			echo "Acesso Negado";
		}
	}

	function autor()
	{
		/* permite o acesso de autor **/
		if($this->session->userdata('level')==='3')
		{
			$this->load->view('dashboard_view');
		}
		else
		{
			echo "Acesso Negado";
		}
	}
}
