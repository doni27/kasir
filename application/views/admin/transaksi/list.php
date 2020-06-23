<div class="col-12 ">
<p>
	<a href="<?= base_url('admin/transaksi/tambah')?>" class="btn btn-success btn-lg"><i class="fa fa-plus "></i> Tambah transaksi</a>
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
 			<th>Total Belanja</th>
 			
 			<th>Action</th>
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
	Total  Rp <?php echo number_format($keranjang->total ,'0',',','.') ?>&nbsp; &nbsp;  <a href="<?= base_url('admin/transaksi/delete_keranjang/'.$keranjang->id_keranjang)?>" class="btn-xs btn-danger  " onclick="return comfirm('yakin ingin menghapus data ini')"><i class="fa fa-trash-o"></i> Delete </a>
	 <br><br>


			 <?php }?>
				 
				 </td>


             <td>
			 Rp <?php echo number_format($total->berat ,'0',',','.'); ?>
					</td>
	

<td>  
<a href="<?= base_url('admin/transaksi/keranjang/'.$user->id_transaksi)?>" class="btn btn-success btn-xs " onclick="return comfirm('yakin ingin menghapus data ini')"><i class="fa fa-trash-o"></i> Tambah barang </a>


<a href="<?= base_url('admin/transaksi/delete/'.$user->id_transaksi)?>" class="btn btn-danger btn-xs " onclick="return comfirm('yakin ingin menghapus data ini')"><i class="fa fa-trash-o"></i> Delete </a>
</td>
 		</tr>
         <?php $no++; } ?>
                      </table>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
