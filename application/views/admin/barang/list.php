<div class="col-12 ">
<p>
	<a href="<?= base_url('admin/barang/tambah')?>" class="btn btn-success btn-lg"><i class="fa fa-plus "></i> Tambah baru</a>
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
			
 			<td><?php echo $user->nama; ?></td>
             <td>
			 <?php echo $user->harga; ?>	 
					</td>
             <td> <?php echo $user->stok; ?></td>
            <td>  
			<a href="<?= base_url('admin/barang/edit/'.$user->id_barang)?>" class="btn btn-warning btn-xs " ><i class="fa fa-trash-o"></i> Ubah </a>
 				<a href="<?= base_url('admin/barang/delete/'.$user->id_barang)?>" class="btn btn-danger btn-xs " onclick="return comfirm('yakin ingin menghapus data ini')"><i class="fa fa-trash-o"></i> Delete </a>
 			  </td>
 		</tr>
         <?php $no++; } ?>
                      </table>
                    </div>
                  </div>
                <script type="text/javascript">
								ambilData();


								function ambilData(){
									$.ajax({ 
										type:'POST',
										url:'<?php echo base_url()."admin/barang/ambildata"?>',
										dataType: 'json',
										succes: function(data){
											console.log(data);
										}
									});
								}
								</script>
                </div>
              </div>
            </div>
