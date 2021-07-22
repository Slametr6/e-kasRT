<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$data['menu'] = 'Akses';
		$data['judul'] = 'RT Panel';
		$this->load->view('include/header', $data);
		$this->load->view('rt/index', $data);
		$this->load->view('include/footer'); 
	}

	public function bendahara()
	{
		$data['menu'] = 'Akses';
		$data['judul'] = 'Bendahara Panel';
		$this->load->view('include/header', $data);
		$this->load->view('bendahara/index', $data);
		$this->load->view('include/footer'); 
	}

}

/* End of file Controllername.php */
