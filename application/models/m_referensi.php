<?php 

	/**
	* 
	*/
	class m_referensi extends CI_Model
	{
		
		function __construct()
		{
			parent:: __construct();
		}
		function barang(){
			$query = $this->db->query("SELECT * FROM tr_jenis_barang");
			return $query->result_array();
		}
	}

 ?>