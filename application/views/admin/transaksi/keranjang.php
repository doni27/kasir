
        <section class="section">
          <div class="section-header">
            <h1>Advanced Forms</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Forms</a></div>
              <div class="breadcrumb-item">Advanced Forms</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Advanced Forms</h2>
            
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Input Barang</h4>
                  </div>
									<?php 
// notifikasi eror

echo validation_errors('<div class= "alert alert-warning">','</div>');


// form open

echo form_open(base_url('admin/transaksi/keranjang/'.$id),' class="form-horizontal"');
 ?>
                  <div class="card-body">

				
				<div class="form-group ">
				<label  class=" control-label">Nama Barang</label>

				<select name="no_barang" class="form-control">
				<!-- <option value="sdad">
						dasdas
					</option> -->
					
					
					<?php foreach($barang as $barang) {?>
					<option value="<?php echo $barang->id_barang ?>">
						<?php  echo $barang->nama ?>
					</option>
				<?php } ?>	 

					
					
				</select>
				</div>
				<!-- <div class="form-group">
                      <label>Harga Barang</label>
											<input type="text" name="harga" class="form-control"  placeholder="Harga Barang" value="<?= set_value('harga') ?>" required >
                    </div> -->
										<div class="form-group">
                      <label>Jumlah Barang</label>
											<input type="text" name="jumlah" class="form-control"  placeholder="Jumlah barang" value="<?= set_value('stok') ?>" required >
                    </div>
					<input type="text" name="no_transaksi" class="form-control"  placeholder="Jumlah barang" value="<?= $id ?>" hidden >
									

										<div class="form-group">
                     
										<button class="btn btn-success btn-lg" name="submit"  type="submit" ><i class="fa fa-save"></i>Simpan</button>
                    </div>

										
                  </div>
									<?= form_close();  ?>

                </div>
               
              </div>
              
              
              </div>
            </div>
          </div>
        </section>
      </div>
