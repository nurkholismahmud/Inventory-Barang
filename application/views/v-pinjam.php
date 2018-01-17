<?php 
$this->load->view('parts/top');
$this->load->view('parts/navigation');

 ?>
 <div id="d-siswa">
   <div class="table-responsive">
      <table class="table" id="data-siswa">
        <thead>
          <tr>
          <th>No.</th>
            <th>NIS</th>
            <th>Nama</th>
          </tr>
        </thead>

        <tbody>

          <?php 
          $i=1;
          $query=$this->db->query("SELECT * FROM td_siswa");
                // $data=$query->result_array();  
          foreach($query->result_array() as $data){
            // echo "<td><input type='button' value='add' class='add-siswa'></td>";
            echo "<tr>";
            echo "<td>".$i."</td>";
            echo "<td>".$data['no_siswa']."</td>";
            echo "<td>".$data['nama_siswa']."</td>";
            echo "<td><input type='button' value='pilih' class='pilih-siswa'></td>";
            echo "</tr>";
            $i++;
          }
          ?>
        </tbody>
      </table>           
    </div> 
</div>
<div id ="d-barang">
<div class="table-responsive">
<table class="table" id="data-barang">
        <thead>
          <tr>
            <th>No.</th>
            <th>Kode Barang</th>
            <th>Jenis Barang</th>
            <th>Nama Barang</th>
            <th>Kondisi Barang</th>
            <th>Tools</th>
          </tr>
        </thead>

        <tbody>
  <?php 


          $i=1;
          $query=$this->db->query("SELECT a.br_kode, a.br_nama, jn.jns_brg_nama, a.br_status as status FROM tm_barang_inventaris a JOIN tr_jenis_barang jn ON(a.jns_brg_kode = jn.jns_brg_kode)WHERE
a.br_kode NOT IN (SELECT b.br_kode FROM td_peminjaman_barang b WHERE b.pdb_sts = 1) AND a.br_status = 1 OR a.br_status = 2");
                $data=$query->result_array();  
          foreach($query->result_array() as $data){
            echo "<tr>";
            echo "<td>".$i."</td>";
            echo "<td>".$data['br_kode']."</td>";
            echo "<td>".$data['jns_brg_nama']."</td>";
            echo "<td>".$data['br_nama']."</td>";
            if ($data['status'] == 1) {
              echo "<td>Barang Baik</td>";
            }else if($data['status'] == 2){
              echo "<td>Rusak, Bisa Diperbaiki</td>";
            }
            else if($data['status'] == 3){
              echo "<td>Rusak</td>";
            }else{
              echo "<td>Dihapus</td>";
            }
            echo "<td><input type='button' value='pilih' class='pilih-barang'></td>";
            echo "</tr>";
            $i++;
          } 

   ?>
   </tbody>
   </table>
   </div>
</div>
 <div class="container">
   <?php 

      $this->load->view('forms/inputPinjam');

    ?>
 </div>
<?php 

$this->load->view('parts/bottom');

 ?>
 <script type="text/javascript">
    //$('#data-pelanggan').dataTable();
    $('#d-siswa').dialog({
      autoOpen : false,
      title : "Data Siswa",
      height : 400,
      width : 500,
      modal : true
    });
    //$('#data-mobil').dataTable();
    $('#d-barang').dialog({
      autoOpen : false,
      title : "Data Barang",
      height : 400,
      width : 700,
      modal : true
    });

  
   $(function(){
       $('#search-siswa').click(function(){
        $('#d-siswa').dialog('open');
      });

      $('#data-siswa').on('click','.pilih-siswa',function(){
        var nomor = $(this).closest('tr').find('td:eq(1)').text();
        var siswa = $(this).closest('tr').find('td:eq(2)').text();
        $('#no_siswa').val(nomor);
        $('#nm_siswa').val(siswa);
        $('#d-siswa').dialog('close');
      });
     
      $('#search-barang').click(function(){
        $('#d-barang').dialog('open');
      });
      
      // $('#d-barang').on('click','.pilih-barang',function(){
      //   var barang = $(this).closest('tr').find('td:eq(1)').text();
      //   $('#br_kode').val(barang);
      // });
      //   $('#d-barang').dialog('close');
      var x = 0;
      // $('#data_pinjam').dataTable();
      $('#data-barang').on('click','.pilih-barang',function(){
         // alert('barang');
         var no = $(this).closest('tr').find('td:eq(0)').text();
         var kode = $(this).closest('tr').find('td:eq(1)').text();
         var jenis = $(this).closest('tr').find('td:eq(2)').text();
         var barang = $(this).closest('tr').find('td:eq(3)').text();
         $('#show').append('<tr>'+
          '<td>'+no+'</td>'+
          '<td>'+kode+'</td>'+
          '<td hidden><input type="text" name="kodeBarang[]" value="'+kode+'"></td>'+
          '<td>'+jenis+'</td>'+
          '<td>'+barang+'</td>'+
          '<td></td>'+
          '</tr>'
          );
         $('#d-barang').dialog('close');
       });
      $('#lama_pinjam').change(function(){
        var date = new Date($('#tgl_pinjam').val()),
          lama = parseInt($('#lama_pinjam').val(),10);

          if (!isNaN(date.getTime())) {
            date.setDate(date.getDate() + lama);

            $('#tgl_harus_kembali').val(date.toInputFormat());
          }else{
            alert('error');
          }
      });
      Date.prototype.toInputFormat = function(){
        var yyyy = this.getFullYear().toString();
        var mm = (this.getMonth()+1).toString();
        var dd = this.getDate().toString();
        return yyyy + "-" + (mm[1]?mm:"0" + mm[0]) + "-" + (dd[1]?dd:"0" + dd[0]);
      }
      // $('#tgl_harus_kembali').click(function(){
      //   var lp = $('#lama_pinjam').val();
      //   var tgl = $('#tgl_pinjam');

      //   if(lp == 1)
      //     tgl = $('#tgl_pinjam' + 1);
      //   else if(lp == 2)
      //     tgl = $('#tgl_pinjam' + 2);
      //   else if(lp == 3)
      //     tgl = $('#tgl_pinjam' + 3);
      //   else if(lp == 4)
      //     tgl = $('#tgl_pinjam' + 4);
      //   else if(lp == 5)
      //     tgl = $('#tgl_pinjam' + 5);
      //   else if(lp == 6)
      //     tgl = $('#tgl_pinjam' + 6);
      //   else
      //     tgl = $('#tgl_pinjam' + 7);
      // })
   });  

 </script>
