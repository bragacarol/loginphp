<?php
class Cadastro extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
		/* carrega a model para ser usada em mais de uma função sem ter que chamar a model cada uma **/
    $this->load->model('Cadastro_model');
  }

	function index()
  {
		/* carrega a view **/
    $this->load->view('cadastro_view');
  }
  
	public function cadastro()
	{
		$nome = $this->input->post('username');
		$email = $this->input->post('email');
		$senha = md5($this->input->post('password'));
		$level = $this->input->post('level');

		$this->Cadastro_model->inserir($nome, $email, $senha, $level);

		redirect('login/autenticar');

		echo "Dados inseridos com sucesso!";

	
	}
}
