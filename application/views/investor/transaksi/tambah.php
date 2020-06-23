
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
<h4>Input Transaksi Barang</h4>
</div>
				<?php 
// notifikasi eror

echo validation_errors('<div class= "alert alert-warning">','</div>');


// form open

echo form_open(base_url('investor/transaksi/tambah'),' class="form-horizontal"');
?>
<div class="card-body">
<div class="form-group">

<div class="form-group">

<label> Kode Transaksi</label>
					<input type="text" name="kode_transaksi" class="form-control"  placeholder="Jumlah barang" value="kode-<?php echo date('sdsh'); ?>" Readonly >
</div>	

<div class="form-group">

<label> Tanggal</label>
					<input type="date" name="tanggal" class="form-control"  placeholder="Jumlah barang" value="<?php echo date('Y-m-d'); ?>" Readonly >
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
