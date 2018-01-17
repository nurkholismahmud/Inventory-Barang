<?php 

	$this->load->view('parts/top');
	$this->load->view('parts/navigation');

 ?>
 <div class="container">
 	<div style="margin-bottom: 20px">
    	<a href="#" id="add-data" class="btn btn-success" onclick="window.print()"><span class="glyphicon glyphicon-print"></span>Cetak</a>
	</div>
<div class="table-responsive">
	<table class="table table-bordered" id="laporan">
		<thead>
			<tr>
				<th>No.</th>
				<th>Kode Kembali</th>
				<th>Kode Peminjaman</th>
				<th>Tanggal Kembali</th>
			</tr>
		</thead>
		<tbody>
			<?php 

				$i = 1;
				$query = $this->db->query("SELECT * FROM tm_pengembalian");
				foreach ($query->result_array() as $data) {
					echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td>".$data['kembali_id']."</td>";
					echo "<td>".$data['pb_id']."</td>";
					echo "<td>".$data['kembali_tgl']."</td>";
					echo "</tr>";
					$i++;
				}
			 ?>
		</tbody>
	</table>
</div>
</div>
<?php 

	$this->load->view('parts/bottom');

 ?>