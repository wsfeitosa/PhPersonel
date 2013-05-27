<?php
class Despesa_model extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Despesas/despesa_entity");
	}
	
	public function getEntries( $number = 10, $starts = 0 )
	{
		
		$this->db->
				select("costs.*")->
				from("phpersonel.costs")->
				limit($number, $starts);
		
		$rs = $this->db->get();
		
		$despesas_encontradas = new ArrayObject(Array());
		
		if( $rs->num_rows() < 1 )
		{
			return $despesas_encontradas;
		}

		foreach( $rs->result() as $resultSet )
		{
			
			$despesa = new Despesa_Entity();
			$despesa->setCostId($resultSet->cost_id);
			$despesa->setCostDescription($resultSet->cost_description);
			$despesa->setCostIdCategory($resultSet->cost_id_category);
			$despesa->setCostInsertedDate( new DateTime($resultSet->cost_inserted_date) );
			$despesa->setCostInsertedUserId($resultSet->cost_inserted_user_id);
			$despesa->setCostNumber($resultSet->cost_number);
			$despesa->setCostValue($resultSet->cost_value);
			$despesa->setFixedCost($resultSet->fixed_cost);
			
			$despesas_encontradas->append($despesa);
			
		}

		return $despesas_encontradas;
		
	}
	
}