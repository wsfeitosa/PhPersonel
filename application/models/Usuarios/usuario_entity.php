<?php
include_once APPPATH . "models/Interfaces/entity.php";

class Usuario_Entity implements Entity{
	
	protected $user_id, $user_name, $user_login, $user_password, $insert_date, $alter_date, $active_user;
    
    public function __construct()
    {
        
    }
    
    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }

    public function getUserName()
    {
        return $this->user_name;
    }

    public function setUserName($user_name)
    {
        $this->user_name = $user_name;
        return $this;
    }

    public function getUserLogin()
    {
        return $this->user_login;
    }

    public function setUserLogin($user_login)
    {
        $this->user_login = $user_login;
        return $this;
    }

    public function getUserPassword()
    {
        return $this->user_password;
    }

    public function setUserPassword($user_password)
    {
        $this->user_password = $user_password;
        return $this;
    }

    public function getInsertDate()
    {
        return $this->insert_date;
    }

    public function setInsertDate( DateTime $insert_date)
    {
        $this->insert_date = $insertDate;
        return $this;
    }

    public function getAlterDate()
    {
        return $this->alter_date;
    }

    public function setAlterDate( DateTime $alter_date)
    {
        $this->alter_date = $alter_date;
        return $this;
    }

    public function getActiveUser()
    {
        return $this->active_user;
    }

    public function setActiveUser($active_user)
    {
        $this->active_user = $active_user;
        return $this;
    }


    
}