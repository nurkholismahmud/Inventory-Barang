<?php 

	/**
	* 
	*/
	class referensi extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('m_referensi');
		}
		function index(){
			$data['tampil'] = 'data';
			$data['tm_barang_inventaris'] = $this->m_referensi->barang();
			$this->load->view('v-referensiB',$data);
		}
		function referensiB(){
			$data['tampil'] = 'data';
			$this->load->view('v-referensiB',$data);
		}
	}

 ?>