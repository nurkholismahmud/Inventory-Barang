<?php 

/**
* 
*/
class m_pinjam extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}


function insert(){
	date_default_timezone_set("Asia/Jakarta");
	$cek = $this->input->post('no_siswa');
	$tgl = date("Y-m-d H:i:s");
	if($cek = 0){
		return false;
	}else{
	$no_transaksi = $this->no_transaksi();
	$data = array(
		'pb_id' =>$this->no_transaksi(),
		'pb_tgl' =>$tgl,
		'pb_no_siswa' => $this->input->post('no_siswa'),	
		'pb_harus_kembali_tgl' => $this->input->post('tgl_harus_kembali'),
		'pb_stat' =>'1'
		);


	foreach ($this->input->post('kodeBarang') as $key => $value) {
		$data_d = array(
			'pbd_id' =>$this->kodeDetail($no_transaksi, $key),
			'pb_id' =>$no_transaksi,
			'br_kode' =>$value,
			'pdb_tgl' =>$tgl,
			'pdb_sts' =>'1'
		);
		$this->db->insert('td_peminjaman_barang', $data_d);
	}
}
$insert = $this->db->insert('tm_peminjaman', $data);

if($insert){
	return $value = $no_transaksi;
}else{
	return $value = '';
}
}

function getData(){
	$query=$this->db->query("SELECT * FROM tm_peminjaman");
	return $query->result_array();

}
function no_transaksi(){
	$tahun_sekarang = date('Y');
	$bulan_sekarang = date('m');
	$query = $this->db->query(
			"SELECT IFNULL(MAX(SUBSTRING(pb_id,10,3)),0) + 1 AS no_urut FROM tm_peminjaman
			WHERE SUBSTRING(pb_id,3,4) = '".$tahun_sekarang."'"
		);
	$data = $query->row_array();
	$no_urut = $data['no_urut'];
	$no_transaksi = "PJ".$tahun_sekarang.$bulan_sekarang.sprintf("%03s",$no_urut);
	return $no_transaksi;
}
	function kodeDetail($no_transaksi,$key){
			$pb_id = $no_transaksi;
			$lastNoUrut = substr($pb_id, 11, 3);
			$nextNoUrut = $lastNoUrut + $key + 1;
			$nextNoTransaksi = $pb_id.sprintf("%'.03d",$nextNoUrut);

			return $nextNoTransaksi;
		}
}

 ?>