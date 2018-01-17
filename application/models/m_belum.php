<?php 

	/**
	* 
	*/
	class m_belum extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function getData(){
			$query = $this->db->query("SELECT * FROM td_peminjaman_barang WHERE pdb_sts = 1");
		}
	}

 ?>