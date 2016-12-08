<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Invoice_m extends CI_Model {

	protected $_table_name = 'invoice';

	function __construct() {
		parent::__construct();
	}

	function insert($array) {
		
		$error = $this->db->insert('invoice',$array);
		return TRUE;
	}

}
