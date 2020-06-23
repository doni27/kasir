

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
<body>
	<div style="width: 19cm;  height: 27cm; padding-top: 1cm;  ">
		<!-- <h1 style="text-align: center; font-size: 18px; font-weight: bold; border-top: solid thin #fff; padding-top: 20px;">PENGIRIMAN </h1> -->
	
		<h2 style="font-weight: bold; text-align: center;">LAPORAN REKAP PEMBELIAN </h2>
		<table class="table table-bordered"  width="100%">
        <thead>
 		<tr>
 			<th>No</th>
			 <th>Tanggal</th>
 			<th>Di beli dari</th>
 			<th>Berat </th>
 			<th>Harga /Kg</th>
 			<th>Total Bayar</th>
 		
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
 			<td><?= $user->jumlah ?> Kg</td>
 			<td><?= $user->harga ?> /Kg</td>
 			<td>Rp <?php echo number_format($user->total,'0',',','.') ?> </td>
 			

 		</tr>

 	<?php $no++; } ?>
 	</tbody>
</table>
	</div>
</body>
</html>