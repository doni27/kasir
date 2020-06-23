<?php 
// notifikasi eror
echo validation_errors('<div class= "alert alert-warning">','</div>');

// form open
echo form_open(base_url('admin/penjualan/edit/'.$kontrak->no_penjualan),' class="form-horizontal"');
 ?>
<div class="form-group">
<label  class="col-md-2 control-label">Nama </label>
<div class="col-md-5">
<input type="text" name="nama_pembeli" class="form-control"  placeholder="Nama pengguna" value="<?= $kontrak->nama_pembeli  ?>" required >
</div>
</div>
 <div class="form-group">
<label  class="col-md-2 control-label">jumlah</label>
<div class="col-md-5">
<input type="text" name="jumlah" class="form-control"  placeholder="jumlah" value="<?= $kontrak->jumlah  ?>" required >
</div>
</div>
 <div class="form-group">
<label  class="col-md-2 control-label">harga</label>
<div class="col-md-5">
<input type="text" name="harga" class="form-control"  placeholder="harga" value="<?= $kontrak->harga  ?>" required >
</div>
</div>
<div class="form-group">
  	<label  class="col-md-2 control-label">Tanggal</label>
  	<div class="col-md-5">
  		
                      <input type="text" class="form-control" name="tanggal" id="tgl_awal" placeholder="Isi tanggal" value="<?= $kontrak->tanggal  ?>"   class="form-control" >
                    </div>
                </div>
<div class="form-group">
<label  class="col-md-2 control-label"></label>
<div class="col-md-5">
<button class="btn btn-success btn-lg" name="submit"  type="submit" ><i class="fa fa-save"></i>Simpan</button>
	
<button class="btn btn-info btn-lg" name="reset"  type="reset" ><i class="fa fa-times"></i>Reset</button>
</div>
</div>

<?= form_close();  ?>
