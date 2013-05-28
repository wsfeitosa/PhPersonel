<?php
if( ! isset($_SESSION) )
{
	session_start();
}	

class Home extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(Array('url','form'));
		
		$this->load->helper(Array('url','form'));
		$this->output->enable_profiler(TRUE);
		
		if( ! isset($_SESSION['user_id']) )
		{
			redirect("usuarios");
		}
	}
	
	public function index()
	{		
		$this->load->view("home/index");				
	}
	
	public function logoff()
	{
		unset($_SESSION['user_id']);
				
		$this->load->view("header");
		$this->load->view("usuarios/login");
		$this->load->view("footer");
	}
	
}