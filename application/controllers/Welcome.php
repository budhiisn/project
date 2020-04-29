<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Login';
		$this->load->view('assets/header', $data);
		$this->load->view('welcome_message');
		$this->load->view('assets/footer');
	}

	public function outdex() {
		$data['title'] = 'Dashboard';
		$this->load->view('assets/header', $data);
		$this->load->view('kasir/dashboard');
		$this->load->view('assets/footer');
	}
}
