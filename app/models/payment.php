<?php

/*
	Author : Veerpartap Singh
	Created: 30-June-2013
*/


class PaymentModel extends AppModel 
{

	var $name ="payment";
	
	var $validate = array('card'=>NOT_NULL,'CVV'=>NOT_NULL);

	public function save_order()
	{
		// This function will save the order details in order table
	}
	

	public function calculate_price()
	{
		// This function will calculate the total price of the items in the order 
	}
	
}



?>
