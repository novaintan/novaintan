<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller
 {
 	public function __construct()
 	{
 		parent::__construct();
 		// $this->load->library('from_validation');
 	}

 	public function index()
 	{
 		$this->load->view('templates/auth_header');
 		$this->load->view('auth/login');
 		$this->load->view('templates/auth_footer');
 	}
 	public function register()
 	{
 		// $this->from_validation->set_rules('id_user', 'id_user', 'required|trim');
 		// $this->from_validation->set_rules('nama', 'nama', 'required|trim|valid_nama');



 		// if ($this->from_validation->run() == false) {
 			$data['title'] = 'WPU user register';
 		$this->load->view('templates/auth_header', $data);
 		$this->load->view('auth/register');
 		$this->load->view('templates/auth_footer');
 		// }else{
 		// 	echo ' data berhasil di tambahkan!';
 		// }
 	}
 }
