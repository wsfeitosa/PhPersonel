<?php
if( ! isset($_SESSION) )
{
	session_start();
}

class Receitas extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		
		if( ! isset($_SESSION['user_id']) )
		{
			redirect("usuarios");
		}		
	}
	
	public function index()
	{
		$this->load->view("header");
		$this->load->view("content");
		$this->load->view("footer");
	}
	
}