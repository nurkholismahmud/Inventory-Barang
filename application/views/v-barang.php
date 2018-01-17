<?php 
$this->load->view('parts/top');
$this->load->view('parts/navigation');

 ?>

 <div id="fadd-data" style="display:none">
 	<?php $this->load->view('forms/inputBarang'); ?>
 </div>

<div id="message"></div>
    <div class="container"> <!-- container -->
    <div style="margin-bottom: 20px">
    	<a href="#" id="add-data" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span>Add Data</a>
    </div>
<div class="jumbotron"><!-- jumbotron -->
<?php 

if($tampil=='data'){
	//echo $data_barang;
	$this->load->view('data/barang');
	echo "Data Barang";
}
elseif($tampil=='input'){
	//$this->load->view('form/input_mobil');
	echo "input Barang";
}

 ?>
</div><!-- /jumbotron -->
    </div> <!-- /container -->

<?php 

$this->load->view('parts/bottom');

 ?>
<script type="text/javascript">
	
	    $('#data-barang').DataTable(); 

	    $('.remove-data').click(function(e){
			var br_kode = $(this).closet('tr'). find('td:eq(1)').text();
			var url = $(this).closet('tr').find(a).attr('href');
			$('#message').dialog({
				title : "Konfirmasi",
				autoOpen : false,
				buttons : {
					'Ok' : function(){
						$.get(url,function(){
							location.reload();
						});
					},
					'Cancel' : function(){
						$(this).dialog('close');
					}
				}
			});
			e.preventDefault();

			$('#message').dialog('open');
			$('#message').html('Apakah data <b>'+br_kode+'</b> akan dihapus?');
	    });
	    $('#message').dialog({
				title : "Keterangan",
				autoOpen : false,
				buttons : {
					'Ok' : function(){
						$(this).dialog('close');
						location.reload();
					}
				}
			});
			//setingan dialog add data
			$('#fadd-data').dialog({
				title : "Form Input Mobil",
				autoOpen : false,
				height : 500,
				width : 500,
				modal : true,
				buttons : {
					"Close" : function(){
						$(this).dialog('close');
					},
					"Save" : function(){
						var url = $('#finput-barang').attr('action');
						var data = $('#finput-barang').serializeArray();
						$.post(url,data,function(i){
							$('#message').html(i);
						});
						$('#message').dialog('open');
						$(this).dialog('close');
					}
				}
			});
			$('#add-data').click(function(){
			$('#fadd-data').dialog('open');

		});
			$()
	$('#merk').blur(function(){
		var merk = $('#merk').val();
		var url = "<?php echo base_url() ?>index.php/barang/kodebarang/"+merk;
		$.get(url,function(e){
			$('#kode_mobil').val(e);
		})
	});

</script>
