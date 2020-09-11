<?php

/**
 * 
 */
class m_login_v15 extends CI_Model


{
	
	public function cek_login_v15($table,$where)
	{
		return $this->db->get_where($table,$where);
	}
}