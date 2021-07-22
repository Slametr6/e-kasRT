<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warga extends CI_Controller {

	public function index()
	{
		$data['menu'] = 'Warga';
		$data['judul'] = 'Data Warga';
		$this->load->view('include/header', $data);
		$this->load->view('admin/warga', $data);
		$this->load->view('include/footer'); 
	}

}

/* End of file Controllername.php */
