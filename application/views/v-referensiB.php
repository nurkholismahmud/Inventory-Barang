<?php 

	$this->load->view('parts/top');
	$this->load->view('parts/navigation');

 ?>
 <div class="container">
<div class="table-responsive">
	<table class="table table-bordered" id="laporan">
		<thead>
			<tr>
				<th>No.</th>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Jenis Barang</th>
				<th>Tools</th>
			</tr>
		</thead>
		<tbody>
			<?php 

				$i = 1;
				$query = $this->db->query("SELECT a.br_kode, a.br_nama, jn.jns_brg_nama, a.br_status as status FROM tm_barang_inventaris a JOIN tr_jenis_barang jn ON(a.jns_brg_kode = jn.jns_brg_kode)");
				foreach ($query->result_array() as $data) {
					echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td>".$data['br_kode']."</td>";
					echo "<td>".$data['br_nama']."</td>";
					echo "<td>".$data['jns_brg_nama']."</td>";
					echo "<td>".anchor('barang/hapus/'.$data['br_kode'],'<span class="glyphicon glyphicon-remove"></span>',"class='remove-data'");
            		echo anchor('barang/edit/'.$data['br_kode'],'<span class="glyphicon glyphicon-edit"></span>')."</td>";
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