<?php
class Template extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view("header");
		$this->load->view("content");
		$this->load->view("footer");
	}
	
}