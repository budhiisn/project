<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Model_admin');
	}

	public function v_admin()
	{
		$data['title'] = 'Admin';
		$data['tampil'] = $this->Model_admin->get();
		$this->load->view('assets/header', $data);
		$this->load->view('admin/tampil_admin', $data);
		$this->load->view('assets/footer');
	}

	public function proses_tampil()
	{
		$data['title'] = 'Create';
		$this->load->view('assets/header', $data);
		$this->load->view('admin/tampil_create');
		$this->load->view('assets/footer');	
	}

	public function proses_simpan()
	{
		$nomeja = $this->input->post('nomormeja');
		$tgl = $this->input->post('tanggal');
		$keterangans = $this->input->post('keterangan');


		$datasimpan = array('no_meja'=>$nomeja, 'tanggal'=>$tgl, 'keterangan'=>$keterangans, 'status_order'=>1);

		$save = $this->Model_admin->insert($datasimpan);
		if ($save==TRUE) {
			redirect('Admin/v_admin');
		}
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */