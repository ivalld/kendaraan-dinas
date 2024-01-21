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
$id = $_POST['id'];

$sql = "UPDATE mobil SET nama_mobil='$vehicletitle',id_merek='$merek',satker='$satker',pemegang='$pemegang',nama_kendaraan='$nama_kendaraan',bb='$fueltype',jenis_kendaraan='$jenis_kendaraan',
	kondisi='$kondisi',nomor_al_kotama='$nomor_al_kotama',nomor_al_pusat='$nomor_al_pusat',nomor_mesin='$nomor_mesin',nomor_rangka='$nomor_rangka',tahun_buat='$tahun_buat',perolehan='$perolehan',
	seating='$seatingcapacity',AirConditioner='$airconditioner',PowerDoorLocks='$powerdoorlocks',AntiLockBrakingSystem='$antilockbrakingsys',
	BrakeAssist='$brakeassist',PowerSteering='$powersteering',DriverAirbag='$driverairbag',PassengerAirbag='$passengerairbag',PowerWindows='$powerwindow',
	CDPlayer='$cdplayer',CentralLocking='$centrallocking',CrashSensor='$crashcensor',LeatherSeats='$leatherseats' where id_mobil='$id'";
$query 	= mysqli_query($koneksidb, $sql);
if ($query) {
	echo "<script type='text/javascript'>
			alert('Berhasil edit data.'); 
			document.location = 'mobil.php'; 
		</script>";
} else {
	echo "No Error : " . mysqli_errno($koneksidb);
	echo "<br/>";
	echo "Pesan Error : " . mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'mobiledit.php?id=$id'; 
		</script>";
}
