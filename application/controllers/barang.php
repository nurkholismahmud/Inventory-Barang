<?php 

/**
* 
*/
class barang extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_barang');
		/*if ($this->session->userdata('login')) {
			if($this->session->userdata('hak_akses') != '0' && $this->session->userdata('hak_akses') != '2'){
				redirect('forbidden');
			}
		}else
			redirect('login');*/
	}

function index(){
$data['tampil'] = 'data';
$data['tm_barang_inventaris'] = $this->m_barang->getData();
$this->load->view('v-barang',$data);

}
function barang(){


$data['tampil'] = 'data';

$this->load->view('v-barang',$data);

}

function input(){

if($this->input->post('input_barang')){
	$this->FBarang->insert();
	echo "input Berhasil";
}else{

echo "denied";


}

echo "Berhasil";
}

function hapus($id){
	$this->m_barang->delete($id);
	redirect('barang');
}
function update(){
	if($this->input->post()){
		$this->FBarang->update();
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
