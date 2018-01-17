<?php 
echo "<h5>".$this->session->flashdata('error')."</h5>";
echo form_open('kembali/input','class="form-horizontal" role="form" method="post" id="finput-kembali');

 ?>
 <div class="form-group">
 	<div class="col-sm-4">
 		<input type="button" name="search" id="search-peminjaman" class="btn btn-warning" value="CARI PEMINJAMAN">
 	</div>
 </div>
 <div class="form-group">
 	<label for="pb_id" class="col-sm-2 control-label">ID Peminjaman</label>
 	<div class="col-sm-4">
 		<input type="text" class="form-control" id="id_pinjam" name="id_pinjam" readonly>
 	</div>
 </div> <br>

  <div class="form-group">
 	<label for="no_pinjam" class="col-sm-2 control-label">No Peminjaman</label>
 	<div class="col-sm-4">
 		<input class="form-control" id="no_pinjam" name="no_pinjam" readonly>
 	</div>
 </div><br>
 <div class="form-group">
 	<label for="lama_pinjam" class="col-sm-2 control-label">Nama Peminjam</label>
 	<div class="col-sm-4">
 		<input class="form-control" name="nama_pinjam" id="nama_pinjam" readonly>
 	</div>
 </div><br>
  <div class="form-group">
 	<label for="tgl_pinjam" class="col-sm-2 control-label">Tanggal Pinjam</label>
 	<div class="col-sm-4">
 		<input type="text" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="" readonly>
 	</div>
 </div><br>
   <div class="form-group">
 	<label for="tgl_akhir" class="col-sm-2 control-label">Tanggal Akhir Peminjaman</label>
 	<div class="col-sm-4">
 		<input type="text" class="form-control" id="tgl_akhir" name="tgl_akhir" value="<?php echo date('Y-m-d H:i:s') ?>">
 	</div>
 </div><br>
 <div class="form-group">
 	<div class="col-sm-4">
 		<input type="submit" id="input" name="input" value="Kirim" class="btn btn-success">
 	</div>
 </div><br>
<!-- <div class="table-responsive">
 	<table class="table" id="data-kembali">
 		<thead>
 			<tr>
 				<th>Kode Pinjam</th>
 				<th>Kode Barang</th>
 				<th>Nama Barang</th>
 				<th>Jenis Barang</th>
 				<th>Tools</th>

 			</tr>
 		</thead>
 		<tbody id="show">
 			
 		</tbody>
 	</table>
 </div> -->
</form>