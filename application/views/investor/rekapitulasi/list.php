




 <table class="table table-bordered" id="example1">
 	<thead>
 		<tr>
 			<th>No</th>
			 <th>Tanggal Awal</th>
 			
 			<th>Penjualan </th>
 			<th>Pembelian</th>
 			<th>Keuntungan</th>
			 <th>Bagi Hasil</th>
 			
 		</tr>
 	</thead>
 	<tbody>
     <?php $no=1; foreach($user as $user){  
		$investor = $this->investor_model->listing();?>
 		<tr>
 			<td><?= $no ?></td>
			
 			<td>&nbsp; <?php echo tgl_indo( $user->tgl_awal); ?> S/D <br>
            <?php echo tgl_indo( $user->tgl_akhir); ?></td>
             <td> Rp <?php echo number_format($user->penjualan ,'0',',','.') ?> </td>
             <td>Rp <?php echo number_format($user->pembelian ,'0',',','.') ?> </td>
             <td>Rp <?php echo number_format($user->Keuntungan ,'0',',','.') ?> </td>
 			<td><?php foreach($investor as $investor){ 
				 $persen = $investor->persentase;
			$total = $user->Keuntungan *  $persen 	 / 100 ?>
    <?php echo $investor->nama ?>&nbsp; &nbsp;  <?php echo  $persen  ?> % = Rp <?php echo number_format($total ,'0',',','.')  ?> <br>



			 <?php }?>
				 
				 </td>
            
 		</tr>
         <?php $no++; } ?>
 	</tbody>

  
	 <li class="list-group-item list-group-item-info">Total Modal  Rp<b> <?=     number_format($totalinvestor,'0',',','.')?></b></li>
<br>
	
 </table>

