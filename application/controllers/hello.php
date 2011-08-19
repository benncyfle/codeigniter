<?php 


class Hello extends CI_Controller {

	public function index()
	{
		$this->load->view('hello_view');
	}
	
	public function world($name = 'Person')
	{	
		$data['v1'] = $name;
		$this->load->view('hello_view' , $data);
	}

	public function benn()
	{
		echo("Hi benn");
	}
	
}
