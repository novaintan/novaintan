<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		 
		$this->load->model('m_login_v15');
	}
		
	 
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 function index(){
		$this->load->view('v_login15');
	}

	 function aksi_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'user_name' => $username,
			'sandi' => $password
		);
		$cek =$this->m_login_v15->cek_login_v15("tabel_user",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
			);
			$this->session->set_userdata($data_session);

			redirect(base_url("admin"));

		}else{
			echo "username dan password salah !";

		}
	}
	

		function logout(){
			$this->session->sess_destroy();
			redirect(base_url('login'));
		} 

		function about()
	{
		$this->load->view('about');
	}
	  function contact()
	{
		$this->load->view('contact');
	}
}