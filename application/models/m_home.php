<?php 	

		/**
		* 
		*/
		class m_home extends CI_Model
		{
			
			function __construct()
			{
				parent:: __construct();
			}
			function get(){
				$query = $this->db->query("SELECT * tm_peminjaman WHERE pb_stat = 1");
				return $query->result_array();
			}
		}

 ?>