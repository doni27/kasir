
			<section class="section">
			<div class="section-header">
			<h1> Forms Edit</h1>
			<div class="section-header-breadcrumb">
		
			</div>
			</div>

			<div class="section-body">
		

			<?php 


if($this->session->flashdata('sukses')){
	echo '<p class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';

}
 ?>
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

			echo form_open(base_url('admin/barang/edit/'.$user->id_barang),' class="form-horizontal"');
			?>
			<div class="card-body">
			<div class="form-group">
			<label>Nama Barang</label>
			<input type="text" name="nama" class="form-control"  placeholder="Nama barang" value="<?= $user->nama; ?>" required >
			</div>

			<div class="form-group">
			<label>Harga Barang</label>
			<input type="text" name="harga" class="form-control"  placeholder="Harga Barang" value="<?= $user->harga; ?>" required >
			</div>
			<div class="form-group">
			<label>Stok Barang</label>
			<input type="text" name="stok" class="form-control"  placeholder="Stok barang" value="<?= $user->stok; ?>" required >
			</div>



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
