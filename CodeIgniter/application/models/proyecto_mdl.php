<?php
defined('BASEPATH') OR exit('No direct scrip access allowed');
class proyecto_mdl extends CI_MODEL{
	function get_all () {
		$query = $this->db->get('users');
		return $query->result();
	}
}
