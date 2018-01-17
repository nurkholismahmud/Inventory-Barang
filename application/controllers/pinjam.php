<?php 

/**
* 
*/
class pinjam extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_pinjam');
		/*if ($this->session->userdata('login')) {
			if($this->session->userdata('hak_akses') != '0' && $this->session->userdata('hak_akses') != '2'){
				redirect('forbidden');
			}
		}else
			redirect('login');*/
	}

function index(){
$data['tampil'] = 'data';
$data['tm_peminjaman'] = $this->m_pinjam->getData();
$this->load->view('v-pinjam',$data);
//echo "data pinjam";

}
function barang(){


$data['tampil'] = 'data';

$this->load->view('v-pinjam',$data);

}

function input(){

if($this->input->post()){
	$this->m_pinjam->insert();
	redirect('pinjam');
}else{
echo "denied";
}
}

function hapus($id){
	$this->m_pinjam->delete($id);
	redirect('pinjam');
}
function update(){
	if($this->input->post()){
		$this->m_barang->update();
		echo "Update Berhasil";
	}else{
		echo "denied";
	}
}
function kodeMobil(){
	/*$merk = strtoupper(substr($merk,0,3));
	$kode = $this->FMobil->createKodeMobil($merk);

	echo $kode;*/
}


}


 ?>
