<?php

/*	
	Author : Veerpartap Singh
	Created: 24-06-2013
	params : null
	Description : This is cards model for interaction with databse 
	params : $param  is the number of parameters passed to this controller
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


	public function functionByMark()
	{
		// this function will validate the username whether it contains special characters or not 
	}

}




?>
