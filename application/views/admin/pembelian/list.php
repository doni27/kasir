<div class="col-12 ">



<p>
	<a href="<?= base_url('admin/pembelian/tambah')?>" class="btn btn-success btn-lg"><i class="fa fa-plus "></i> Tambah baru</a>
</p>




                <div class="card">
                  <div class="card-header">
                    <h4>Data Barang</h4>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-md">
					  <tr>
 			<th>No</th>
			 <th>Nama Barang</th>
 			<th>Harga  Barang</th>
 			<th>Stok Barang </th>
 			
 			<th>Action</th>
 		</tr>
 	</thead>
 	<tbody>
     <?php $no=1; foreach($user as $user){  ?>
 		<tr>
 			<td><?= $no ?></td>
			
 			<td><?php echo $user->nama_barang; ?></td>


             <td>
			 <?php echo $user->harga_barang; ?>	 
					</td>



             <td> <?php echo $user->jumlah_barang; ?></td>
            


          
             <td>  
 				<a href="<?= base_url('admin/pembelian/edit/'.$user->id_stok)?>" class="btn btn-warning btn-xs " ><i class="fa fa-trash-o"></i> Ubah </a>

				 <a href="<?= base_url('admin/pembelian/delete/'.$user->id_stok)?>" class="btn btn-danger btn-xs " onclick="return comfirm('yakin ingin menghapus data ini')"><i class="fa fa-trash-o"></i> Delete </a>
 			  </td>
 		</tr>
         <?php $no++; } ?>
                      </table>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
