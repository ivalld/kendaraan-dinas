<?php
include('includes/config.php');
$id		= $_POST['id'];
$brand	= $_POST['brand'];
$sql 	= "UPDATE jenis SET jenis_kendaraan='$brand' WHERE id_jenis='$id'";
$query 	= mysqli_query($koneksidb, $sql);
if ($query) {
	echo "<script type='text/javascript'>
			alert('Berhasil edit data.'); 
			document.location = 'jenis.php'; 
		</script>";
} else {
	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'jenisedit.php?id=$id'; 
		</script>";
}
