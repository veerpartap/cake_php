<?php

/*	
	Author : Veerpartap Singh
	Created: 24-06-2013
*/


class CardModel extends AppModel
{
	var $name = "cards";
	
	var $validate = array();
	
	public function _validateData()
	{
		// this function will validate the data for invalid data entered by user
	}

	public function checkValidEmail()
	{
		// this function will validate the email address entered by user whether it is correct or not
	}


	public function checkValidUsername()
	{
		// this function will validate the username whether it contains special characters or not 
	}

}




?>
