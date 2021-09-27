<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$username = $this->session->userdata('username');
		$user = $this->db->get_where('users', ['username' => $username])->row_array();
		if ($username == '') {
			redirect('auth');
		} else {
			if ($user['role_id'] == 1) {
				$data['menu'] = 'home';
				$data['judul'] = 'Admin Panel';
				$data['user'] = $user;
				$data['masuk'] = $this->m_kas->TotalMasuk();
				$data['keluar'] = $this->m_kas->TotalKeluar();
				$this->load->view('include/header', $data);
				$this->load->view('index', $data);
				$this->load->view('include/footer');
			} else if ($user['role_id'] == 3) {
				redirect('users/bendahara');
			} else if ($user['role_id'] == 2) {
				redirect('users');
			} else {
				redirect('users/warga');
			}
		}
	}

	public function user()
	{
		$username = $this->session->userdata('username');
		$user = $this->db->get_where('users', ['username' => $username])->row_array();
		if ($username == '') {
			redirect('auth');
		} else {
			if ($user['role_id'] == 1) {
				$data['menu'] = 'akses';
				$data['judul'] = 'Hak Akses';
				$data['user'] = $user;
				$data['auth'] = $this->m_auth->getUser();
				$data['role'] = $this->db->get('user_role')->result();
				$this->load->view('include/header', $data);
				$this->load->view('admin/user', $data);
				$this->load->view('include/footer');
			} else if ($user['role_id'] == 3) {
				redirect('users/bendahara');
			} else if ($user['role_id'] == 2) {
				redirect('users');
			} else {
				redirect('users/warga');
			}
		}
	}
}

/* End of file Controllername.php */
