<?php

class login extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
 
        // load Session Library
        $this->load->library('session');
         
        // load url helper
        $this->load->helper('url');
    }

	public function masuk()
	{
		$this->load->view('login/index');
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$user = array(
		  array("username" => "andi", "password" => 1234),
		  array("username" => "budi", "password" => 4321),
		  array("username" => "charlie", "password" => 3821),
		);

		foreach ($user as $key) {
			if($username==$key['username'] && $password==$key['password']){
				$this->session->set_userdata(array('username'=>$username));
					$this->load->view('home/index');
			}
		}

		}
		
	
}


