<p>
	<a href="<?= base_url('admin/penjualan/tambah')?>" class="btn btn-success btn-lg"><i class="fa fa-plus "></i> Tambah baru</a>
</p>


<?php 


if($this->session->flashdata('sukses')){
	echo '<p class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';

}
 ?>


 <table class="table table-bordered" id="example1">
 	<thead>
 		<tr>
 			<th>No</th>
			 <th>Tanggal</th>
 			<th>Penjual</th>
 			<th>Berat </th>
 			<th>Harga</th>
 			<th>Total</th>
 			<th>Action</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php $no=1; foreach($user as $user){  ?>
 		<tr>
 			<td><?= $no ?></td>
			 <td> 
			 
			 <?php echo $user->hari ?>,&nbsp; <?php echo tgl_indo( $user->tanggal); ?>
		
			 </td>
 			<td><?= $user->nama_pembeli ?></td>
 			<td><?= number_format($user->jumlah,'0',',','.')  ?> Kg</td>
 			<td>Rp <?= number_format($user->harga,'0',',','.')  ?> /Kg</td>
 			<td>Rp <?php echo number_format($user->total,'0',',','.') ?> </td>
 			<td>  <a href="<?= base_url('admin/penjualan/edit/'.$user->no_penjualan)?>" class="btn btn-warning btn-xs "><i class="fa fa-edit"></i> Edit </a>
 				<a href="<?= base_url('admin/penjualan/delete/'.$user->no_penjualan)?>" class="btn btn-danger btn-xs " onclick="return comfirm('yakin ingin menghapus data ini')"><i class="fa fa-trash-o"></i> Delete </a>
 			  </td>

 		</tr>

 	<?php $no++; } ?>
 	</tbody>

		 
		
	
 </table>
