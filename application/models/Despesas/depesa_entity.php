<?php
include_once APPPATH . "models/Interfaces/entity.php";

class Desepesa_Entity implements Entity{
	
	protected $cost_id, $cost_number, $cost_description, $cost_id_category, 
			   $cost_value, $fixed_cost, $cost_inserted_user_id, $cost_inserted_date;
	
	public function __construct()
	{
		
	}
	
	public function getCostId()
    {
        return $this->cost_id;
    }

    public function setCostId($cost_id)
    {
        $this->cost_id = $cost_id;
        return $this;
    }

    public function getCostNumber()
    {
        return $this->cost_number;
    }

    public function setCostNumber($cost_number)
    {
        $this->cost_number = $cost_number;
        return $this;
    }

    public function getCostDescription()
    {
        return $this->cost_description;
    }

    public function setCostDescription($cost_description)
    {
        $this->cost_description = $cost_description;
        return $this;
    }

    public function getCostIdCategory()
    {
        return $this->cost_id_category;
    }

    public function setCostIdCategory($cost_id_category)
    {
        $this->cost_id_category = $cost_id_category;
        return $this;
    }

    public function getCostValue()
    {
        return $this->cost_value;
    }

    public function setCostValue($cost_value)
    {
        $this->cost_value = $cost_value;
        return $this;
    }

    public function getFixedCost()
    {
        return $this->fixed_cost;
    }

    public function setFixedCost($fixed_cost)
    {
        $this->fixed_cost = $fixed_cost;
        return $this;
    }

    public function getCostInsertedUserId()
    {
        return $this->cost_inserted_user_id;
    }

    public function setCostInsertedUserId($cost_inserted_user_id)
    {
        $this->cost_inserted_user_id = $cost_inserted_user_id;
        return $this;
    }

    public function getCostInsertedDate()
    {
        return $this->cost_inserted_date;
    }

    public function setCostInsertedDate($cost_inserted_date)
    {
        $this->cost_inserted_date = $cost_inserted_date;
        return $this;
    }
	
}//END CLASS