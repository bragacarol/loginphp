<?php
class Login extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
		/* carrega a model para ser usada em mais de uma função sem ter que chamar a model cada uma **/
    $this->load->model('login_model');
  }
 
  function index()
  {
		/* carrega a view **/
    $this->load->view('login_view');
  }
 
  function autenticar() 
  {
		$this->load->model("usuarios_model");
		$email = $this->input->post('email');
		/* abaixo faazer a criptografia da senha da maneira mais atual (password_hash) **/
		$senha = md5($this->input->post('senha'));
		$usuario = $this->users_model->LogarUsuarios($email,$senha);
		$validacao = $this->login_model->validacao($email,$senha);
		if($validacao->num_rows() > 0){
			$data = $validacao->row_array(); /* variavel que armazena todos os dados do usuário **/
		}
			if($usuario)
			{
				$this->session->set_userdata("usuario_logado", $usuario);
				$this->session->set_flashdata("success", "Logado com sucesso!");
			}
			else
			{
				$this->session->se_flashdata("danger", "Usuario ou senha inválidos");
			}
  }
/* acho que não precisa dessa função mais **/
  function logout()
  {
	$this->session->sess_destroy();
    redirect('login');
  }

}
