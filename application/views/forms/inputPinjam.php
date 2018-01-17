<?php 
echo "<h5>".$this->session->flashdata('error')."</h5>";
echo form_open_multipart('pinjam/input','class="form-horizontal" role="form" id="finput-pinjam');

 ?>

  <div class="form-group">
 	<label for="no_siswa" class="col-sm-2 control-label">Siswa</label>
 	<div>
 		<input type="button" value="Search Siswa" id="search-siswa" class="btn btn-success">
 	</div>
 </div>

  <div class="form-group">
 	<label for="br_kode" class="col-sm-2 control-label">Barang</label>
 	<div>
 		<input type="button" value="Search Barang" id="search-barang" class="btn btn-success">
 	</div>
 </div>

  <div class="form-group">
 	<label for="tgl_pinjam" class="col-sm-2 control-label">Tanggal Pinjam</label>
 	<div class="col-sm-4">
 		<input class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="<?php echo date('Y-m-d'); ?>" readonly>
 	</div>
 </div>
 <div class="form-group">
 	<label for="lama_pinjam" class="col-sm-2 control-label">Lama Pinjam</label>
 	<div class="col-sm-4">
 		<select class="form-control" id="lama_pinjam" name="lama_pinjam">
 			<option value="-">-</option>
 			<option value="1">1 hari</option>
 			<option value="2">2 hari</option>
 			<option value="3">3 hari</option>
 			<option value="4">4 hari</option>
 			<option value="5">5 hari</option>
 			<option value="6">6 hari</option>
 			<option value="7">7 hari</option>
 		</select>
 	</div>
 </div>
  <div class="form-group">
 	<label for="tgl_harus_kembali" class="col-sm-2 control-label">Tanggal Harus Kembali</label>
 	<div class="col-sm-4">
 		<input type="date" class="form-control" id="tgl_harus_kembali" name="tgl_harus_kembali" value="" readonly>
 	</div>
 </div>
 <div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<input type="submit" name="input" class="btn btn-default">
	</div>
</div>
<div class="form-group">
 	<label for="tgL_harus_kembali" class="col-sm-2 control-label">No Siswa</label>
 	<div class="col-sm-4">
 		<input class="form-control" id="no_siswa" name="no_siswa">
 	</div>
 </div>
 <div class="form-group">
 	<label for="tgL_harus_kembali" class="col-sm-2 control-label">Nama Siswa</label>
 	<div class="col-sm-4">
 		<input class="form-control" id="nm_siswa" name="nm_siswa">
 	</div>
 </div>
 <div class="table-responsive">
 	<table class="table" id="data_pinjam">
 		<thead>
 			<tr>
 				<th>No.</th>
 				<th>Kode Barang</th>
 				<th>Nama Barang</th>
 				<th>Jenis Barang</th>
 				<th>Tools</th>

 			</tr>
 		</thead>
 		<tbody id="show">
 			
 		</tbody>
 	</table>
 </div>
