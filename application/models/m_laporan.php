<?php 

	/**
	* 
	*/
	class m_laporan extends CI_Model
	{
		
		function __construct()
		{
			parent:: __construct();
		}
		function getData(){
			$query=$this->db->query("SELECT * FROM tm_barang_inventaris");
			return $query->result_array();
		}
		function kembali(){
			$quuery2 = $this->db->query("SELECT * FROM tm_pengembalian");
			return $quuery2->result_array();
		}
		function m_status(){
			$query3 = $this->db->query("SELECT * FROM tm_barang_inventaris");
			return $query3->result_array();
		}
	}

 ?>