<?php 


class Hello extends CI_Controller {

	public function index()
	{
		$this->load->view('hello_view');
	}
	
	public function world($name = 'Person')
	{	
		$data['v1'] = $name;
		$data['row'] = array(	
		'aled',
		'ed',
		'richie',
		'robert',
		'paul',
		'liam',
		'benn'
		);

        $this->load->model('blog' , '', TRUE);
        $data['blog'] = $this->blog->get_last_ten_entries();
        $this->load->view('hello_view' , $data);
	}

	
	
		public function blog($slug = null)
	{
		if (empty($slug))
		{
		echo 'need slug';
		exit;
		}
		$this->load->model('blog' , '', TRUE);
		$data['entry'] = $this->blog->get_entry($slug);
		$this->load->view('blog_entry' , $data);
	}
	
}
