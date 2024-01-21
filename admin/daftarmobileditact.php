<?php
include('includes/config.php');
$merek = $_POST['merek'];
$pemegang = $_POST['pemegang'];
$satker = $_POST['satker'];
$nama_kendaraan = $_POST['nama_kendaraan'];
$fueltype = $_POST['fueltype'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];
$kondisi = $_POST['kondisi'];
$nomor_al_kotama = $_POST['nomor_al_kotama'];
$nomor_al_pusat = $_POST['nomor_al_pusat'];
$nomor_mesin = $_POST['nomor_mesin'];
$nomor_rangka = $_POST['nomor_rangka'];
$tahun_buat = $_POST['tahun_buat'];
$perolehan = $_POST['perolehan'];
$id		= $_POST['id'];
$brand	= $_POST['brand'];
$sql 	= "UPDATE mobil SET jenis_kendaraan='$brand',nama_mobil='$vehicletitle',id_merek='$merek',satker='$satker',pemegang='$pemegang',nama_kendaraan='$nama_kendaraan',bb='$fueltype',jenis_kendaraan='$jenis_kendaraan',
kondisi='$kondisi',nomor_al_kotama='$nomor_al_kotama',nomor_al_pusat='$nomor_al_pusat',nomor_mesin='$nomor_mesin',nomor_rangka='$nomor_rangka',tahun_buat='$tahun_buat',perolehan='$perolehan',
id='$id',brand='$brand' WHERE id_mobil='$id'";
$query 	= mysqli_query($koneksidb, $sql);
if ($query) {
	echo "<script type='text/javascript'>
			alert('Berhasil edit data.'); 
			document.location = 'daftarmobil.php'; 
		</script>";
} else {
	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'daftarmobiledit.php?id=$id'; 
		</script>";
}
