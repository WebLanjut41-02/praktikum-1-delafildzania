<?php

    
class Home extends CI_Controller{
	public function index()
	{
		$data['judul'] = 'Halaman Home';
		$this->load->view('templates/header' , $data);
		$this->load->view('home/index');
		$this->load->view('templates/footer');
	}

	public function proses()
	{
	$komen = $this->input->post("kom");
		echo $komen;
	}
}