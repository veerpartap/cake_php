<?php

class PaymentModel extends AppModel 
{

	var $name ="payment";
	
	var $validate = array('card'=>NOT_NULL,'CVV'=>NOT_NULL);

	public function save_order()
	{
		// This function will save the order details in order table
	}
	
	
}



?>
