<?php


class UserControllers extends AppControllers {

	var $name = "users";
	var $uses = "user";
	
	public function __beforefilter() 
	{
		
	}

	public function index()
	{
		$this->layout = "default";
		$data = $this->User->find('all');
		$this->set('data',$data);
	}


}


?>
