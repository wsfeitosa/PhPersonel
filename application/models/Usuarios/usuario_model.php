<?php
if( ! isset($_SESSION) )
{
	session_start();
}	

class Usuario_Model extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function login( Entity $usuario )
	{
						
		$login = $usuario->getUserLogin();
		
		$senha = $usuario->getUserPassword();
		
		if( empty($login) || empty($senha) )
		{
			throw new RuntimeException("Usuário ou senha não informados!");
		}	
		
		$this->db->where("user_login",$usuario->getUserLogin());
		$this->db->where("user_password",md5($usuario->getUserPassword()));
		$rs = $this->db->get_where("phpersonel.users","active_user = 'S'");
		
		if( $rs->num_rows() < 1 )
		{
			return FALSE;
		}
		else
		{
			$_SESSION['user_id'] = $rs->row()->user_id;
			return TRUE;
		}		
		
	}
	
}//END CLASS