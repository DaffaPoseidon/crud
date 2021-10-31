<?php
$koneksi = mysqli_connect 
			(
				"10.0.0.207",
				"admin",
				"Chm246vp29!",
				"uts"
			);
if (mysqli_connect_errno())
	{
		echo "Koneksi Gagal"
		.mysqli_connect_error();
	}
?>
