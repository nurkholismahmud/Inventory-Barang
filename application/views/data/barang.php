<div class="table-responsive">
      <table class="table" id="data-barang">
        <thead>
          <tr>
          <th>No.</th>
            <th>Kode Barang</th>
            <th>Jenis Barang</th>
            <th>User</th>
            <th>Nama Barang</th>
            <th>Tanggal Terima</th>
            <th>Tanggal Entry</th>
            <th>Tools</th>
          </tr>
        </thead>

        <tbody>

          <?php 
          $i=1;
          $query=$this->db->query("SELECT * FROM tm_barang_inventaris");
                 $data=$query->result_array();  
          foreach($query->result_array() as $data){
            echo "<tr>";
            echo "<td>".$i."</td>";
            echo "<td>".$data['br_kode']."</td>";
            echo "<td>".$data['jns_brg_kode']."</td>";
            echo "<td>".$data['user_id']."</td>";
            echo "<td>".$data['br_nama']."</td>";
            echo "<td>".$data['br_tgl_terima']."</td>";
            echo "<td>".$data['br_tgl_entry']."</td>";
            echo "<td>".anchor('barang/hapus/'.$data['br_kode'],'<span class="glyphicon glyphicon-remove"></span>',"class='remove-data'");
            echo anchor('barang/edit/'.$data['br_kode'],'<span class="glyphicon glyphicon-edit"></span>')."</td>";
            echo "</tr>";
            $i++;
          }

          ?>
        </tbody>

      </table>           
    </div> 

