<?php 
// notifikasi eror

echo validation_errors('<div class= "alert alert-warning">','</div>');


// form open

echo form_open(base_url('admin/rekapitulasi/tambah'),' class="form-horizontal"');

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

<div class="form-group">
  	<label  class="col-md-2 control-label">Tanggal Awal</label>
  	<div class="col-md-5">
  		
                      <input type="text" class="form-control" name="tgl_awal" id="tgl_awal" placeholder="Isi tanggal" class="form-control" >
                    </div>
                </div>

								<div class="form-group">
  	<label  class="col-md-2 control-label">Tanggal Akhir</label>
  	<div class="col-md-5">
  		
                      <input type="text" class="form-control" name="tgl_akhir" id="tgl_akhir" placeholder="Isi tanggal" class="form-control" >
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
