
<li class="list-group-item list-group-item-info">Total Modal  Rp<b> <?=     number_format($totalinvestor1->totalinvestor,'0',',','.')?></b></li>
<br>

 <table class="table table-bordered" id="example1">
 	<thead>
 		<tr>
 			<th>No</th>
			 <th>Nama</th>
 			<th>Jumlah Dana</th>
 			<th>Persentase </th>
 			
 			
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
            


          
             
 		</tr>
         <?php $no++; } ?>
 	</tbody>

   
		
	
 </table>

