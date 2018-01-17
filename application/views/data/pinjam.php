<div class="table-responsive">
      <table class="table" id="data-pinjam">
        <thead>
          <tr>
          <th>No.</th>
            <th>Nomor Peminjaman</th>
            <th>Tanggal Peminjaman</th>
            <th>Nomor Siswa</th>
            <th>Akhir Peminjaman</th>
            <th>Tools</th>
          </tr>
        </thead>

        <tbody>

          <?php 
          $i=1;
          $query=$this->db->query("SELECT * FROM tm_peminjaman");
                 $data=$query->result_array();  
          foreach($query->result_array() as $data){
            echo "<tr>";
            echo "<td>".$i."</td>";
            echo "<td>".$data['pb_id']."</td>";
            echo "<td>".$data['pb_tgl']."</td>";
            echo "<td>".$data['pb_no_siswa']."</td>";
            echo "<td>".$data['pb_harus_kembali_tgl']."</td>";
            /*echo "<td>".anchor('mobil/hapus/'.$data['kode_mobil'],'<span class="glyphicon glyphicon-remove"></span>',"class='remove-data'");
            echo anchor('mobil/edit/'.$data['kode_mobil'],'<span class="glyphicon glyphicon-edit"></span>')."</td>";
            echo "</tr>";*/
            $i++;
          }

          ?>
        </tbody>

      </table>           
    </div> 

