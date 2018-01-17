<?php 

	/**
	* 
	*/
	class laporan extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('m_laporan');
		}
		function index(){
			$data['tampil'] = 'data';
			$data['tm_barang_inventaris'] = $this->m_laporan->getData();
			$this->load->view('v-Laporan',$data);
		}
		function laporan(){
			$data['tampil'] = 'data';
			$this->load->view('v-Laporan',$data);
		}
		function c_kembali(){
			$data_k['tampil'] = 'data';
			$data_k['tm_pengembalian'] = $this->m_laporan->kembali();
			$this->load->view('v-laporanKembali', $data_k);
		}
		function status(){
			$data_s['tampil'] = 'data';
			$data_s['tm_barang_inventaris'] = $this->m_laporan->m_status();
			$this->load->view('v-statusBarang', $data_s);
		}
	}

 ?>