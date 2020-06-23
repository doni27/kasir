

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title ?></title>
<style type="text/css" media="print">
	body{
		font-size: 12px;
		font-family: Arial;

	}
	table{
		border:  solid thin #000;
		border-collapse: collapse;
		width: 100%;
		margin-bottom: 1cm;

	}
	td{
		padding: 6px 12px ;
		border: solid thin #000;
		text-align: left;
	}
	.bg-success{
		background-color: #F5F5F5;
		font-weight:  bold;
		border: solid thin #000;
	}
</style>
</head>

<table>
 	<thead>
 		<tr>
 			<th>No</th>
			 <th>Tanggal</th>
 			<th>Total Pembelian</th>
 			<th>Total Berat</th>
 		</tr>
 	</thead>
 	<tbody>
     <?php $no=1; foreach($distinct as $distinct){  ?>
 		<tr>
         <?php
         $re = $this->pembelian_model->rekap_pembelian($distinct->tanggal); 
          $hari = $this->pembelian_model->rekap_hari($distinct->tanggal); 
          $berat = $this->pembelian_model->rekap_berat($distinct->tanggal); ?>
 			<td><?= $no ?></td>
			 <td> 
             <?php   foreach ($hari as $hari)  {?>

<?=    $hari->hari?>


<?php } ?>,&nbsp;
          <?php echo tgl_indo( $distinct->tanggal); ?>
			 </td>
 			<td><?php   foreach ($re as $re)  {?>

              Rp  <?=     number_format($re->totaljumlah,'0',',','.')?>


<?php } ?></td>
<td><?php   foreach ($berat as $berat)  {?>

  <?=     number_format($berat->totalberat,'0',',','.')?> Kg


<?php } ?></td>

 		</tr>

 	<?php $no++; } ?>
 	</tbody>

		 
		
	
 </table>

 <ul class="list-group col-md-6">
  
  <li class="list-group-item list-group-item-info">Total Biaya Modal Pembelian Bulan Ini Rp<b> <?=     number_format($bulan->totalbulan,'0',',','.')?></b></li>
  <li class="list-group-item list-group-item-success">Total  Modal Biaya Pembelian Tahun Ini Rp  <b> <?=     number_format($tahun->totaltahun,'0',',','.')?></b></li>
  <li class="list-group-item list-group-item-danger">Total Biaya Modal Pembelian Keseluruhan Rp  <b> <?=     number_format($total->totaljumlah,'0',',','.')?></b></li>
</ul>

<ul class="list-group col-md-6">
  
  <li class="list-group-item list-group-item-info">Total Berat Pembelian Bulan Ini <b> <?=     number_format($bulan_bulan->totalbulan,'0',',','.')?> Kg</b></li>
  <li class="list-group-item list-group-item-success">Total Berat Pembelian Tahun Ini  <b> <?=     number_format($berattahun->berattahun,'0',',','.')?> Kg</b></li>
  <li class="list-group-item list-group-item-danger">Total Berat Pembelian Keseluruhan  <b> <?=     number_format($berattotal->beratjumlah,'0',',','.')?> Kg</b></li>
</ul>
	</div>
</body>
</html>