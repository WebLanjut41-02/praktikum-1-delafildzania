<?php 

class Portofolio extends CI_Controller{
	public function index()
	{
		$data['judul'] = 'Portofolio';
		$this->load->view('templates/header', $data);
		$this->load->view('portofolio/index');
		$this->load->view('templates/footer');

	}
}

 ?>