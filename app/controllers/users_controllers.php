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

	// function used to show users account details page
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
}


?>
