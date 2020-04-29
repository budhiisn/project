<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Model_login');
	}


	public function awal_login()
	{
		$this->form_validation->set_rules('username','Username','required',['required'=>'wajib di isi']);
		$this->form_validation->set_rules('password','Password','required',['required'=>'wajib di isi']);

		if ($this->form_validation->run() == FALSE) {

			redirect('Welcome/index');

		}else {
			$auth=$this->Model_login->cek_login();

		if ($auth == FALSE) {
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> username atau password salah 
					<button type="button" class="close" data-dismiss="alert" aria-label="close">
					<span area-hidden="true">&times;</span>
					</button>
					</div>');
				redirect('Welcome/index');

		}else{
			$this->session->set_userdata('username',$auth->username);
			$this->session->set_userdata('role_id',$auth->id_level);

			switch ($auth->id_level) {
				case 2:redirect('Admin/v_admin');
				 # code...
				break;

				case 3:redirect('Waiter');
				 # code...
				break;

				case 4:redirect('Kasir');
				 # code...
				break;

				case 5:redirect('Owner');
				 # code...
				break;
			}

		}

		}
	}

	public function Logout()
	{
		$this->session->sess_destroy();
		redirect('Welcome/index');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */