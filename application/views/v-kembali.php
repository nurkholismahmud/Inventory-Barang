<?php 

	$this->load->view('parts/top');
	$this->load->view('parts/navigation');

 ?>
 <div id="d-kembali">
 	<div class="table-responsive">
 		<table class="table" id="data_kembali">
 			<thead>
 				<tr>
 					<th>Kode Peminjaman</th>
 					<th>No Pinjam</th>
 					<th>Nama barang</th>
 					<th>tanggal pinjam</th>
 				</tr>
 			</thead>
 			<tbody>
 				<?php 

 					$i = 1;
 					$query = $this->db->query("SELECT * FROM td_peminjaman_barang WHERE pdb_sts = 1");
 						$data = $query->result_array();
 					foreach ($query->result_array() as $data) {
 						echo "<tr>";
 							echo "<td>".$data['pbd_id']."</td>";
 							echo "<td>".$data['pb_id']."</td>";
 							echo "<td>".$data['br_kode']."</td>";
 							echo "<td>".$data['pdb_tgl']."</td>";
 							echo "<td><input type='button' value='pilih' class='pilih-data'></td>";
 						echo"</tr>";
 					}
 				 ?>
 			</tbody>
 		</table>
 	</div>
 </div>
 <div class="container"> <!-- container -->
<!-- <div class="jumbotron"> -->
	<?php 
		$this->load->view('forms/inputKembali')
 ?>
<!-- </div> -->
    </div> <!-- /container -->

<?php 

$this->load->view('parts/bottom');

 ?>
<script type="text/javascript">
	    //$('#data-kembali').dataTables(); 
		$('#d-kembali').dialog({
			autoOpen : false,
			title : "Data Peminjaman",
			height : 400,
			width : 600,
			modal : true
		});
		$(function(){
			$('#search-peminjaman').click(function(){
				$('#d-kembali').dialog('open');
			});
			var x = 0;
			$('#data_kembali').on('click','.pilih-data', function(){
				var kode = $(this).closest('tr').find('td:eq(0)').text();
				var no = $(this).closest('tr').find('td:eq(1)').text();
				var nama = $(this).closest('tr').find('td:eq(2)').text();
				var tgl_pinjam = $(this).closest('tr').find('td:eq(3)').text();
				// $('#show').append(

				// 		'<tr>'+
				// 			'<td>'+kode+'</td>'+
				// 			'<td>'+no+'</td>'+
				// 			'<td hidden><input type = "text" name="id_peminjaman" value"'+kode+'"></td>'+
				// 			'<td hidden><input type = "text" name="no_pinjam" value"'+no+'"></td>'+
				// 			'<td>'+nama+'</td>'+
				// 			'<td>'+tgl_pinjam+'</td>'+
				// 		'</tr>'

				// 	);
				$('#id_pinjam').val(kode);
				$('#no_pinjam').val(no);
				$('#nama_pinjam').val(nama);
				$('#tgl_pinjam').val(tgl_pinjam);

				$('#d-kembali').dialog('close');
				// var location = "<?php base_url('pinjam') ?>";

				// $.get(location, function(show){

				// })
			});
		})

</script>
