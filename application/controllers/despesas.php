<?php
class Despesas extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Despesas/despesa_entity");
		$this->load->model("Despesas/depesa_model");
	}
	
	public function index()
	{
		$this->load->view("header");
		$this->load->view("content");
		$this->load->view("footer");
	}
	
	public function listView()
	{
		
		
		
	}
	
}