<?php
class TestUser extends CI_TestCase{
	
	protected $user = NULL;
	
	public function setUp(){
		
		$this->CI->load->model("User/user");

		$this->user = new User();
						
	}
	
	public function testCreateUser()
	{	
		$this->assertInstanceOf("User", $this->user);
	}
	
}