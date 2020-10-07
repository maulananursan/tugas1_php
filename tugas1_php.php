<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Daftar Makanan</h3>
	<?php 
		$m1='Ayam Goyeng';
		$m2='Ayam Bakar';
		$m3='Ayam Sayur';
		$m4='Tempe Goreng';
		$m5='Tahu Goreng';
		$m6='Soto';
		$m7='Nasi Putih';
		$m8='Es Teh';
		$m9='Es Tebu';

		$h1= 13000;
		$h2= 15000;
		$h3= 13000;
		$h4= 1000;
		$h5= 1000;
		$h6= 3000;
		$h7= 5000;
		$h8= 4000;
		$h9= 5000;
	?>
	<ul> 
		<li><?php echo $m1. " - Rp. ".$h1; ?></li>
		<li><?php echo $m2. " - Rp. ".$h2; ?></li>
		<li><?php echo $m3. " - Rp. ".$h3; ?></li>
		<li><?php echo $m4. " - Rp. ".$h4; ?></li>
		<li><?php echo $m5. " - Rp. ".$h5; ?></li>
		<li><?php echo $m6. " - Rp. ".$h6; ?></li>
		<li><?php echo $m7. " - Rp. ".$h7; ?></li>
		<li><?php echo $m8. " - Rp. ".$h8; ?></li>
		<li><?php echo $m9. " - Rp. ".$h9; ?></li>
	</ul>

</body>
</html>
