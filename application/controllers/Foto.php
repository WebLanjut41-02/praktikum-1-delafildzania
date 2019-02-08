<?php 

class Foto extends CI_Controller{
	public function index()
	{
		$data['judul'] = 'My Photo';
		$this->load->view('templates/header', $data);
		$this->load->view('foto/index');
		$this->load->view('templates/footer');

	}
}

 ?>