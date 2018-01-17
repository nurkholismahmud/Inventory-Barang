<?php 
echo "<h5>".$this->session->flashdata('error')."</h5>";
echo form_open_multipart('barang/input','class="form-horizontal" role="form" id="finput-barang');

 ?>

 <div class="form-group">
 	<label for="br_kode" class="col-sm-2 control-label">Kode Barang</label>
 	<div class="col-sm-4">
 		<input type ="text" class="form-control" id="br_kode" placeholder="Kode Barang" name="br_kode">
 	</div>
 </div>

  <div class="form-group">
 	<label for="br_nama" class="col-sm-2 control-label"> Nama Barang</label>
 	<div class="col-sm-4">
 		<input class="form-control" id="br_nama" placeholder="Nama Barang" name="br_nama">
 	</div>
 </div>

  <div class="form-group">
 	<label for="br_tgl_terima" class="col-sm-2 control-label">Tanggal Terima</label>
 	<div class="col-sm-4">
 		<input class="form-control" id="br_tgl_terima" placeholder="Tanggal Terima" name="br_tgl_terima">
 	</div>
 </div>

  <div class="form-group">
 	<label for="br_tgl_entry" class="col-sm-2 control-label">Tanggal Entry</label>
 	<div class="col-sm-4">
 		<input class="form-control" id="br_tgl_entry" placeholder="Tanggal Entry" name="br_tgl_entry">
 	</div>
 </div>

  <div class="form-group">
 	<label for="br_status" class="col-sm-2 control-label">Status Barang</label>
 	<div class="col-sm-4">
 		<input class="form-control" id="br_status" placeholder="Status Barang" name="br_status">
 	</div>
 </div>
<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<input type="submit" name="input_mobil" class="btn btn-default">

	</div>
</div>
