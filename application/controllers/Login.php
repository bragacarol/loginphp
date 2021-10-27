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
		
		/* abaixo fazer a criptografia da senha da maneira mais atual (password_hash) **/
		$senha = md5($this->input->post('senha'));
		
		/* variavel que armazena a função de validação da model login **/
		$validacao = $this->login_model->validacao($email,$senha);
		
		if($validacao->num_rows() > 0)
		{
			/* variavel que armazena todos os dados do usuário **/
			$data = $validacao->row_array();

			$nome = $data['user_name'];
			$email = $data['user_email'];
			$level = $data['user_level'];

			/* ???? variavel que armazena todos os dados do usuário **/
			$sesdata = array(
				'username' => $nome,
				'email' => $email,
				'level' => TRUE
			);

			$this->session->set_userdata($sesdata);

        	/* acesso para admin **/
        	if($level === '1')
			{
            	redirect('page');
			}

			/* acesso para colaboradores **/
			elseif($level === '2')
			{
				redirect('page/colaboradores');
			}
			else
			{
				redirect('page/autor');
			}
		}
		else
		{
			/* caso não seja um usuário cadastrado ou insira os dados incorretamente **/
			echo $this->session->set_flashdata('msg','Usuário ou Senha Inválidos');
        	redirect('login');
		}	
		
	}
			
  function logout()
  {
	$this->session->sess_destroy();
    redirect('login');
  }

}


