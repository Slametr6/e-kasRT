<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class KasRT extends CI_Controller {

	public function index()
	{
		$username = $this->session->userdata('username');
		$user = $this->db->get_where('users', ['username' => $username])->row_array();

		$cekId = $this->m_kas->cekNomor();
		$getId = substr($cekId, 4, 4);
		$idNow = $getId+1;
		$data = array('idKas' => $idNow);

		if ($username == '') {
			redirect('auth');

		} else {
			if ($user['role_id'] == 1) {
				$data['menu'] = 'Kas Masuk';
				$data['judul'] = 'Kas Masuk';
				$data['user'] = $user;
				$data['ttl'] = $this->m_kas->TotalMasuk();
				$data['masuk'] = $this->m_kas->getKasMasuk();
				$this->load->view('include/header', $data);
				$this->load->view('admin/kasMasuk', $data);
				$this->load->view('include/footer'); 
				
			} else if ($user['role_id'] == 3) {
				$data['menu'] = 'Kas Masuk';
				$data['judul'] = 'Kas Masuk';
				$data['user'] = $user;
				$data['ttl'] = $this->m_kas->TotalMasuk();
				$data['masuk'] = $this->m_kas->getKasMasuk();
				$this->load->view('include/header', $data);
				$this->load->view('admin/kasMasuk', $data);
				$this->load->view('include/footer');

			} else {
				$data['menu'] = 'Kas Masuk';
				$data['judul'] = 'Kas Masuk';
				$data['user'] = $user;
				$data['ttl'] = $this->m_kas->TotalMasuk();
				$data['masuk'] = $this->m_kas->getKasMasuk();
				$this->load->view('include/header', $data);
				$this->load->view('admin/kasMasuk', $data);
				$this->load->view('include/footer');
				
			}
		}
	}

	public function kasKeluar()
	{
		$username = $this->session->userdata('username');
		$user = $this->db->get_where('users', ['username' => $username])->row_array();
		
		$cekId = $this->m_kas->cekNomor();
		$getId = substr($cekId, 4, 4);
		$idNow = $getId+1;
		$data = array('idKas' => $idNow);

		$data['menu'] = 'Kas Keluar';
		$data['judul'] = 'Kas Keluar';
		$data['user'] = $user;
		$data['ttl'] = $this->m_kas->TotalKeluar();
		$data['keluar'] = $this->m_kas->getKasKeluar();
		$this->load->view('include/header', $data);
		$this->load->view('admin/kasKeluar', $data);
		$this->load->view('include/footer'); 
	}

	public function laporan()
	{
		$username = $this->session->userdata('username');
		$user = $this->db->get_where('users', ['username' => $username])->row_array();
		
		$data['menu'] = 'Laporan';
		$data['judul'] = 'Laporan Kas RT';
		$data['user'] = $user;
		$data['kas'] = $this->m_kas->getKas();
		$data['masuk'] = $this->m_kas->TotalMasuk();
		$data['keluar'] = $this->m_kas->TotalKeluar();
		$this->load->view('include/header', $data);
		$this->load->view('admin/laporan', $data);
		$this->load->view('include/footer'); 
	}

	public function addKas()
	{
		$this->m_kas->cekNomor();		
		$data = [
			'idKas' => $this->input->post('id_kas'),
			'keterangan' => $this->input->post('keterangan'),
			'tanggal' => $this->input->post('tanggal'),
			'jumlah' => $this->input->post('jumlah'),
			'jenis' => $this->input->post('jenis'),
		];
		$this->m_kas->saveKas($data);
		if ('jenis' == 'masuk')
		{
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>');
			redirect('kasrt');

		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>');
			redirect('kasrt/kasKeluar');
		}
	}

	public function editKas()
	{
		$idKas = $this->input->post('idKas');
		$data = [
			'keterangan' => $this->input->post('keterangan'),
			'tanggal' => $this->input->post('tanggal'),
			'jumlah' => $this->input->post('jumlah'),
			'jenis' => $this->input->post('jenis'),
		];
		$this->m_kas->updateKas($data, $idKas);
		if ('jenis' == 'masuk')
		{
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate!</div>');
			redirect('kasrt');

		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate!</div>');
			redirect('kasrt/kasKeluar');
		}
	}

	public function delKas($idKas)
	{	
		$this->m_kas->delKas($idKas);
		if ('jenis' == 'masuk' )
		{
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
			redirect('kasrt');

		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
			redirect('kasrt/kasKeluar');
		}
	}

}

/* End of file Controllername.php */
