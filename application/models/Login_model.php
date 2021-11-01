<?php
class Login_model extends CI_Model
{
	function validacao($email,$senha)
	{
		/* busca o email e compara com a váriavel **/
		$this->db->where('user_email',$email);
		
		/* busca a senha e compara com a váriavel **/
		$this->db->where('user_password',$senha);

		/* variável que armazena esse usuário com esse email e essa senha **/
		$result = $this->db->get('tbl_users',1);
		return $result;
	}
}

