<?php 

	/**
	* 
	*/
	class m_kembali extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function noKembali(){
			$tahun_sekarang = date('Y');
			$bulan_sekarang = date('m');
			$query = $this->db->query(
				"SELECT IFNULL(MAX(SUBSTRING(kembali_id,11, 3)),0) + 1 AS no_urut FROM tm_pengembalian WHERE SUBSTRING(kembali_id,3,4) = '".$tahun_sekarang."'"
			);
			$data = $query->row_array();
			$no_urut = $data['no_urut'];
			$no_kembali = "KM".$tahun_sekarang.$bulan_sekarang.sprintf("%03s", $no_urut);
			return $no_kembali;
		}
		function getData(){
			$query = $this->db->query("SELECT * FROM td_peminjaman_barang");
			return $query->result_array();
		}
		function insert(){
				$no_kembali = $this->noKembali();
				$tgl = date("Y-m-d H:i:s");
				$data = array(

						'kembali_id'=>$this->noKembali(),
						'pb_id'=>$this->input->post('no_pinjam'),
						'user_id' => '1',
						'kembali_tgl'=>$tgl,
						'kembali_sts'=>'1'

				);
			$insert = $this->db->insert('tm_pengembalian', $data);

		if ($insert) {
			echo "Berhasil";
		}else{
			echo "gagal";
		}
		}
	}

 ?>