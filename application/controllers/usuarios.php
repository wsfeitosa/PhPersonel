<?php
class Usuarios extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
	}
	
	public function index()
	{
		$this->load->view("header");
		$this->load->view("usuarios/login");
		$this->load->view("footer");
	}
	
}