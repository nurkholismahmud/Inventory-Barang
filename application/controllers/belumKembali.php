<?php 

	/**
	* 
	*/
	class belumKembali extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_belum');
		}
		function index(){
			echo "index";
			$this->load->view('v-belum');
		}
	}

 ?>