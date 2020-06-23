<div class="row">
          <div class="col-lg-6">
						<div class="box box-primary">
              <div class="box-header with-border">
                <h4 class="box-title"><b>Keseluruhan</b></h4>
              </div>
              <div class="box-body">
								
                <?php echo form_open('investor/laporan/export_all_penjualan') ?>
                  <button type="submit" name="submit" class="btn btn-success">Download</button>
                <?php echo form_close() ?>
							</div>
						</div>
          </div><!-- ./col -->

 		


 <div class="col-lg-6">
            <div class="box box-primary">
              <!-- form start -->
              <div class="box-header with-border">
                <h4 class="box-title"><b>Per Periode</b></h4>
              </div>
              <?php echo form_open('investor/laporan/export_periode_penjualan') ?>
                <div class="box-body">
                  <div class="panel-body">
                
                    <div class="form-group">
                      <input type="text" class="form-control" name="tgl_awal" id="tgl_awal" placeholder="Isi tanggal mulai" class="form-control" >
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="tgl_akhir" id="tgl_akhir" placeholder="Isi tanggal akhir" class="form-control" >
                    </div>
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" name="submit" class="btn btn-success">Download</button>
                  <button type="reset" name="reset" class="btn btn-primary">Reset</button>
                </div>
              <?php echo form_close() ?>
            </div><!-- /.box -->
            </div> </div>

 <table class="table table-bordered" id="example1">
 	<thead>
 		<tr>
 			<th>No</th>
			 <th>Tanggal</th>
 			<th>Penjual</th>
 			<th>Jumlah </th>
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
 			<td><?= number_format($user->harga,'0',',','.')  ?> /Kg</td>
 			<td>Rp <?php echo number_format($user->total,'0',',','.') ?> </td>
 			<td>  <a href="<?= base_url('investor/penjualan/edit/'.$user->no_penjualan)?>" class="btn btn-warning btn-xs "><i class="fa fa-edit"></i> Edit </a>
 				<a href="<?= base_url('investor/penjualan/delete/'.$user->no_penjualan)?>" class="btn btn-danger btn-xs " onclick="return comfirm('yakin ingin menghapus data ini')"><i class="fa fa-trash-o"></i> Delete </a>
 			  </td>

 		</tr>

 	<?php $no++; } ?>
 	</tbody>

		 
		
	
 </table>

