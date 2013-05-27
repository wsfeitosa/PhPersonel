<?php
if( ! isset($_SESSION) )
{
	session_start();
}	

class Despesas extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Despesas/despesa_entity");
		$this->load->model("Despesas/despesa_model");
		$this->load->helper(Array('url','form'));
		$this->output->enable_profiler(FALSE);
		
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
	
	public function listView( $list = 0 )
	{
		
		$depesa_entity = new Despesa_Entity();
		
		$this->load->library('pagination');
		
		$config['base_url'] = 'http://'.$_SERVER['HTTP_HOST'].'/PhPersonel/index.php/despesas/listView/';
		$config['total_rows'] = 200;
		$config['per_page'] = 20;
		
		$this->pagination->initialize($config);
		
		$despesa_model = new Despesa_model();
		
		$data['despesas'] = $despesa_model->getEntries( $config['per_page'], $list );
						
		$this->load->view("header");
		$this->load->view("despesas/listView",$data);
		$this->load->view("footer");
		
	}
	
}