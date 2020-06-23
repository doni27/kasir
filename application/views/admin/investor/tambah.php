<?php 
// notifikasi eror

echo validation_errors('<div class= "alert alert-warning">','</div>');


// form open

echo form_open(base_url('admin/investor/tambah'),' class="form-horizontal"');

function hari_ini(){
	$hari = date ("D");
 
	switch($hari){
		case 'Sun':
			$hari_ini = "Minggu";
		break;
 
		case 'Mon':			
			$hari_ini = "Senin";
		break;
 
		case 'Tue':
			$hari_ini = "Selasa";
		break;
 
		case 'Wed':
			$hari_ini = "Rabu";
		break;
 
		case 'Thu':
			$hari_ini = "Kamis";
		break;
 
		case 'Fri':
			$hari_ini = "Jumat";
		break;
 
		case 'Sat':
			$hari_ini = "Sabtu";
		break;
		
		default:
			$hari_ini = "Tidak di ketahui";		
		break;
	}
 
	return  $hari_ini ;
 
}
 

 
?>
<input type="hidden" name="hari" class="form-control"  value="<?= hari_ini()?>" >
<input type="hidden" name="tanggal" class="form-control"  value="<?=  date("Y-m-d")?>" >
 <div class="form-group">
<label  class="col-md-2 control-label">Nama</label>
<div class="col-md-5">
<input type="text" name="nama" class="form-control"  placeholder="Nama" value="<?= set_value('nama') ?>" required >
</div>
</div>


 <div class="form-group">
<label  class="col-md-2 control-label">Jumlah Dana</label>
<div class="col-md-5">
<input type="text" name="jumlah_dana" class="form-control"  placeholder="jumlah" value="<?= set_value('jumlah_dana') ?>" required >
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
