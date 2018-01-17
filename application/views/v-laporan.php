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
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Tanggal terima</th>
				<th>Tanggal Entry</th>
			</tr>
		</thead>
		<tbody>
			<?php 

				$i = 1;
				$query = $this->db->query("SELECT * FROM tm_barang_inventaris");
				foreach ($query->result_array() as $data) {
					echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td>".$data['br_kode']."</td>";
					echo "<td>".$data['br_nama']."</td>";
					echo "<td>".$data['br_tgl_terima']."</td>";
					echo "<td>".$data['br_tgl_entry']."</td>";
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