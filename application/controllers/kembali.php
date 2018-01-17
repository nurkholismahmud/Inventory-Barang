<?php 

	/**
	* 
	*/
	class kembali extends CI_Controller
	{
		
		function __construct()
		{
			parent :: __construct();
			$this->load->model('m_kembali');
		}
		function index(){
			$data['tampil'] = 'data';
			$data['tm_peminjaman'] = $this->m_kembali->getData();
			$this->load->view('v-kembali', $data);
		}
		function peminjaman(){
			$data['tampil'] = 'data';
			$this->load->view('v-kembali',$data);
		}
		function input(){
			if ($this->input->post('input')) {
				$this->m_kembali->insert();
				redirect('kembali');
			}else{
				echo "gagal";
			}
			// echo "telah  kembali";
		}

	}

 ?>