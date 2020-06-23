
			<section class="section">
			<div class="section-header">
			<h1> Forms Tambah</h1>
			<div class="section-header-breadcrumb">
			<!-- <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
			<div class="breadcrumb-item"><a href="#">Forms</a></div>
			<div class="breadcrumb-item">Advanced Forms</div> -->
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

			echo form_open(base_url('admin/pembelian/tambah'),' class="form-horizontal"');
			?>
			<div class="card-body">
			<div class="form-group">
			<label>Nama Barang</label>
			<input type="text" name="nama_barang" class="form-control"  placeholder="Nama barang" value="<?= set_value('nama') ?>" required >
			</div>

			<div class="form-group">
			<label>Harga Barang</label>
			<input type="text" name="harga_barang" class="form-control"  placeholder="Harga Barang" value="<?= set_value('harga') ?>" required >
			</div>
			<div class="form-group">
			<label>Stok Barang</label>
			<input type="text" name="stok_barang" class="form-control"  placeholder="Stok barang" value="<?= set_value('stok') ?>" required >
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
