<?php

class UserModel extends AppModel {

	var $name= "user";	

	var $validates =array(
				'first_name'=>array(NOT_NULL),
				'last_name'=>array(NOT_NULL),
				'email'=>array(NOT_NULL)
				);

	public function validEmail()
	{
		// function used to validate email address 
	}
}

?>
