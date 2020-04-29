<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['enter'])) {
			$this->load->model('auth_model');
			$query = $this->auth_model->cek_login($post);
			if($query->num_rows() > 0){
				$row = $query->row();
				$params = array(
					'iduser' => $row->id_user,
					'level' => $row->id_level
				);
				$this->session->set_userdata($params);

				echo "<script>
					window.location='".site_url('welcome/outdex')."';
				</script>";
				// echo "login berhasil";
			} else {
				echo "<script>
					alert('Gagal Bro');
					window.location='".site_url('welcome/index')."';
				</script>";
				// echo "login gagal";
			}
		}
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */