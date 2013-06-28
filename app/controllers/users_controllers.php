<?php

/*
	Author :	Veerpartap Singh
	Created:	24-06-2013
*/

class UserControllers extends AppControllers {

	var $name = "users";
	var $uses = "user";
	var $component = arrary("Paypal");
	
	public function __beforefilter() 
	{
		
	}
	
	public function add() 
	{
		// This function is used to add new user in the system
	}


	public function edit($id=null) 
	{
		// This function is used to edit the users details who exists in our database or else system will through and error
	}

	public function delete($id=null) 
	{
		// This function is used to delete user details from database having id as $id 
	}

	public function index()
	{
		$this->layout = "default";
		$data = $this->User->find('all');
		$this->set('data',$data);
	}


	public function detail($id)
	{
		$this->layout = "default";
		$data = $this->User->findById($id);
		$this->set('data',$data);
	}


	// function used to view user credit card details page
	public function card($id)
	{
		$this->layout = "default";
		$data = $this->Card->findById($id);
		$this->set('data',$data);
	}

	// function used to view details of the user bank account 
	public function account($id)
	{
		$this->layout = "default";
		$data = $this->Bank->findById($id);
		$this->set('data',$data);
	}

	public function user_image($id)
	{
		$this->layout = "default";
		$data = $this->User->findById($id);
		$this->set('data',$data);
	}


}


?>
