<?php


class UserControllers extends AppControllers {

	var $name = "users";
	
	public function __beforefilter() 
	{
		
	}

	public function index()
	{
		$this->layout = "default";
	}


}


?>
