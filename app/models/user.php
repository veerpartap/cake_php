<?php
/*	Author name : Veerpartap Singh	*/
/*	Created Date : 23-06-2013	 */
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

	public function validUsername()
	{
		// function used to validate username for unique & valid username without having special characters like*'@-_–!"#€%&/()=?+`´  
	}
}

?>
