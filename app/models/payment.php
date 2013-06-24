<?php

class PaymentModel extends AppModel 
{

	var $name ="payment";
	
	var $validate = array('card'=>NOT_NULL,'CVV'=>NOT_NULL);

}



?>
