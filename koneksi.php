<?php
$koneksi = mysqli_connect 
			(
				"10.0.0.68",
				"admin",
				"Chm246vp29!",
				"crud"
			);
if (mysqli_connect_errno())
	{
		echo "Koneksi Gagal"
		.mysqli_connect_error();
	}
?>
