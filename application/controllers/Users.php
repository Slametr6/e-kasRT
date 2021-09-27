<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

	public function index()
	{
		$username = $this->session->userdata('username');
		$user = $this->db->get_where('users', ['username' => $username])->row_array();

		$data['menu'] = 'Akses';
		$data['judul'] = 'RT Panel';
		$data['user'] = $user;
		$data['masuk'] = $this->m_kas->TotalMasuk();
		$data['keluar'] = $this->m_kas->TotalKeluar();
		$this->load->view('include/header_1', $data);
		$this->load->view('index', $data);
		$this->load->view('include/footer');
	}

	public function bendahara()
	{
		$username = $this->session->userdata('username');
		$user = $this->db->get_where('users', ['username' => $username])->row_array();

		$data['menu'] = 'Akses';
		$data['judul'] = 'Bendahara Panel';
		$data['user'] = $user;
		$data['masuk'] = $this->m_kas->TotalMasuk();
		$data['keluar'] = $this->m_kas->TotalKeluar();
		$this->load->view('include/header_1', $data);
		$this->load->view('index', $data);
		$this->load->view('include/footer');
	}

	public function warga()
	{
		$username = $this->session->userdata('username');
		$user = $this->db->get_where('users', ['username' => $username])->row_array();

		$data['menu'] = 'Akses';
		$data['judul'] = 'Warga Panel';
		$data['user'] = $user;
		$data['masuk'] = $this->m_kas->TotalMasuk();
		$data['keluar'] = $this->m_kas->TotalKeluar();
		$this->load->view('include/header_warga', $data);
		$this->load->view('index', $data);
		$this->load->view('include/footer');
	}
}

/* End of file Controllername.php */
