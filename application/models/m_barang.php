<?php 

/**
* 
*/
class m_barang extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}

function createKodeBarang(){
	$tahun_sekarang = date('Y');
	$bulan_sekarang = date('m');
	$query = $this->db->query(
			"SELECT IFNULL(MAX(SUBSTRING(br_kode,8,5)),0) + 1 AS no_urut FROM tm_barang_inventaris
			WHERE SUBSTRING(br_kode,2,4) = '".$tahun_sekarang."'"
		);
	$data = $query->row_array();
	$no_urut = sprintf("%'.03d",$data['no_urut']);
	$br_kode = "B".$tahun_sekarang.$no_urut;
	return $br;
}


function insert(){
	/*$data = array(
		'kode_mobil' => $this->input->post('kode_mobil'),
		'merk' => $this->input->post('merk'),	
		'type' => $this->input->post('type'),
		'warna' => $this->input->post('warna'),
		'harga_mobil' => $this->input->post('harga'),
		'gambar' => $this->input->post('gambar')
		);
if($this->db->insert('mobil',$data)){
$this->session->set_flashdata('error','Input Berhasil');
	
}
else{
	//$this->session->set_flashdata('error','Input Gagal');
}*/
}

function getData(){
	$query=$this->db->query("SELECT * FROM tm_barang_inventaris");
	return $query->result_array();

}

function delete($id){

$this->db->query("DELETE FROM tm_barang_inventaris WHERE br_kode ='".$id."'");

}

}

 ?>