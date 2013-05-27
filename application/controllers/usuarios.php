<?php
if( ! isset($_SESSION) )
{
	session_start();
}

class Usuarios extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model("Usuarios/usuario_entity");
		$this->load->model("Usuarios/usuario_model");						
	}
	
	public function index()
	{
		$this->load->view("header");
		$this->load->view("usuarios/login");
		$this->load->view("footer");
	}
	
	public function login()
	{
		
		if( is_null($this->input->post('usuario')) || is_null($this->input->post('senha')) )
		{
			echo "<script language='javascript'>
					alert('Usuário ou senha não informado(s)');
					window.history.go(-1);
				   </script>";			
		}	
				
		$usuario_entity = new Usuario_Entity();
		$usuario_entity->setUserLogin($this->input->post('usuario'));
		$usuario_entity->setUserPassword($this->input->post('senha'));
		
		$usuario_model = new Usuario_Model();
		
		try{
			$loged_in = $usuario_model->login($usuario_entity);
		}catch( Exception $e ) {
			echo "<script language='javascript'>
					alert('".$e->getMessage()."');
					window.history.go(-1);
				   </script>";
		}
		
		if( ! $loged_in )
		{
			echo "<script language='javascript'>
					alert('Usuário ou senha não informado(s)');
					window.history.go(-1);
				   </script>";
		}
		else
		{
			redirect("home");
		}		
				
	}
			
}