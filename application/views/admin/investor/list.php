<p>
	<a href="<?= base_url('admin/investor/tambah')?>" class="btn btn-success btn-lg"><i class="fa fa-plus "></i> Tambah baru</a>
</p>

<li class="list-group-item list-group-item-info">Total Modal  Rp<b> <?=     number_format($totalinvestor1->totalinvestor,'0',',','.')?></b></li>
<br>

 <table class="table table-bordered" id="example1">
 	<thead>
 		<tr>
 			<th>No</th>
			 <th>Nama</th>
 			<th>Jumlah Dana</th>
 			<th>Persentase </th>
 			
 			<th>Action</th>
 		</tr>
 	</thead>
 	<tbody>
     <?php $no=1; foreach($user1 as $user1){  ?>
 		<tr>
 			<td><?= $no ?></td>
			
 			<td><?php echo $user1->nama; ?></td>


             <td>
						 
						 Rp <?php echo number_format($user1->jumlah_dana ,'0',',','.')?></td>



             <td><?php echo $user1->persentase; ?> %</td>
            


          
             <td>  
 				<a href="<?= base_url('admin/investor/delete/'.$user1->id_investor)?>" class="btn btn-danger btn-xs " onclick="return comfirm('yakin ingin menghapus data ini')"><i class="fa fa-trash-o"></i> Delete </a>
 			  </td>
 		</tr>
         <?php $no++; } ?>
 	</tbody>

   
		
	
 </table>

