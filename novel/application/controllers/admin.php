<?php

/**
 * 
 */
class admin  extends ci_controller
{
	
	function __construct(){
	parent::__construct();
		if($this->session->userdata('status') != "login"){
	
	
		redirect(base_url("login"));
		
	}

}
function index(){
	$this->load->view('v_admin');
}
}