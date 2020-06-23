<div class="col-12 ">





<div class="card">
                  <div class="card-header">

				  <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Total', 'Data', ],
		
          ['Data Pembelian', <?= $stok->stok; ?>, ],
		  ['Data Keranjang', <?= $keranjang->keranjang; ?>, ] ,
		  ['Data Transaksi', <?= $transaksi->transaksi; ?>, ] ,
		  ['Data Barang', <?= $barang->barang; ?>, ]
		 
          
					
        ]);

        var options = {
          chart: {
            title: 'Grafik Penjualan',
            subtitle: 'laporan jumlah semua data',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
<div id="barchart_material" style="width: 900px; height: 200px;"></div>
</div></div>
<br><br>

<p>
	<a href="<?= base_url('pimpinan/transaksi/cetak')?>" class="btn btn-success btn-lg"><i class="fa fa-print "></i> cetak</a>
</p>
<div class="card">
                  <div class="card-header">
                
                    <h4>Data Transaksi</h4>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-md">
					  <tr>
 			<th>No</th>
			 <th>Kode Transaksi</th>
 			<th>Keranjang</th>
 			<th>Total </th>
 			
 			
 		</tr>
 	</thead>
 	<tbody>
     <?php $no=1; foreach($user as $user){  
		 $keranjang = $this->transaksi_model->keranjang_listing($user->id_transaksi);
		 $total = $this->transaksi_model->total_keranjang($user->id_transaksi);
		 
		 ?>
		 <!-- $keranjang digunakan untuk menampilkan data keranjang -->
 		<tr>
 			<td><?= $no ?></td>
<td> <?php echo $user->kode_transaksi; ?>


</td>
			
<td><?php foreach($keranjang as $keranjang){ 
				 ?>
    <?php echo $keranjang->nama_barang; ?>,&nbsp; &nbsp;  Jumlah <?php echo $keranjang->jumlah; ?>   <br>
	Total  Rp <?php echo number_format($keranjang->total ,'0',',','.') ?>&nbsp; &nbsp;  
	 <br><br>


			 <?php }?>
				 
				 </td>


             <td>
			 Rp <?php echo number_format($total->berat ,'0',',','.'); ?>
					</td>


 		</tr>
         <?php $no++; } ?>
                      </table>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
