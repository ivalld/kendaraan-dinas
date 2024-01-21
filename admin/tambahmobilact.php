<?php
include('includes/config.php');
error_reporting(0);
$vehicletitle = $_POST['vehicletitle'];
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
$seatingcapacity = $_POST['seatingcapacity'];
$airconditioner = $_POST['airconditioner'];
$powerdoorlocks = $_POST['powerdoorlocks'];
$antilockbrakingsys = $_POST['antilockbrakingsys'];
$brakeassist = $_POST['brakeassist'];
$powersteering = $_POST['powersteering'];
$driverairbag = $_POST['driverairbag'];
$passengerairbag = $_POST['passengerairbag'];
$powerwindow = $_POST['powerwindow'];
$cdplayer = $_POST['cdplayer'];
$centrallocking = $_POST['centrallocking'];
$crashcensor = $_POST['crashcensor'];
$leatherseats = $_POST['leatherseats'];
$vimage1 = $_FILES["img1"]["name"];
$vimage2 = $_FILES["img2"]["name"];
$vimage3 = $_FILES["img3"]["name"];
$vimage4 = $_FILES["img4"]["name"];
$vimage5 = $_FILES["img5"]["name"];
move_uploaded_file($_FILES["img1"]["tmp_name"], "img/vehicleimages/" . $_FILES["img1"]["name"]);
move_uploaded_file($_FILES["img2"]["tmp_name"], "img/vehicleimages/" . $_FILES["img2"]["name"]);
move_uploaded_file($_FILES["img3"]["tmp_name"], "img/vehicleimages/" . $_FILES["img3"]["name"]);
move_uploaded_file($_FILES["img4"]["tmp_name"], "img/vehicleimages/" . $_FILES["img4"]["name"]);
move_uploaded_file($_FILES["img5"]["tmp_name"], "img/vehicleimages/" . $_FILES["img5"]["name"]);
$sql 	= "INSERT INTO mobil (nama_mobil,id_merek,nopol,deskripsi,harga,bb,tahun,seating,image1,image2,image3,image4,image5,
			AirConditioner,PowerDoorLocks,AntiLockBrakingSystem,BrakeAssist,PowerSteering,DriverAirbag,PassengerAirbag,
			PowerWindows,CDPlayer,CentralLocking,CrashSensor,LeatherSeats)
			VALUES ('$vehicletitle','$brand','$nopol','$vehicleoverview','$priceperday','$fueltype','$modelyear','$seatingcapacity',
			'$vimage1','$vimage2','$vimage3','$vimage4','$vimage5','$airconditioner','$powerdoorlocks','$antilockbrakingsys',
			'$brakeassist','$powersteering','$driverairbag','$passengerairbag','$powerwindow','$cdplayer','$centrallocking',
			'$crashcensor','$leatherseats')";
$query 	= mysqli_query($koneksidb, $sql);
if ($query) {
	echo "<script type='text/javascript'>
			alert('Berhasil tambah data.'); 
			document.location = 'mobil.php'; 
		</script>";
} else {
	echo "No Error : " . mysqli_errno($koneksidb);
	echo "<br/>";
	echo "Pesan Error : " . mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'tambahmobil.php'; 
		</script>";
}
