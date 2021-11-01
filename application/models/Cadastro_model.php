<?php
class Cadastro_model extends CI_Model
{
	function inserir($nome, $email, $senha, $level)
	{
		$this->db->insert('username', $nome);
		$this->db->insert('email', $email);
		$this->db->insert('password', $senha);
		$this->db->insert('level', $level);
			
	}
}
