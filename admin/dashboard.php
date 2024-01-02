<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {
?>
	<!doctype html>
	<html lang="en" class="no-js">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="theme-color" content="#3e454c">

		<title>VMS | Admin Dashboard</title>

		<!-- Font awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Sandstone Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Bootstrap Datatables -->
		<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
		<!-- Bootstrap social button library -->
		<link rel="stylesheet" href="css/bootstrap-social.css">
		<!-- Bootstrap select -->
		<link rel="stylesheet" href="css/bootstrap-select.css">
		<!-- Bootstrap file input -->
		<link rel="stylesheet" href="css/fileinput.min.css">
		<!-- Awesome Bootstrap checkbox -->
		<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
		<!-- Admin Stye -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
	</head>

	<body>
		<?php include('includes/header.php'); ?>

		<div class="ts-main-content">
			<?php include('includes/leftbar.php'); ?>
			<div class="content-wrapper">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-12">

							<h2 class="page-title">Dashboard</h2>

							<div class="row">
								<div class="col-md-12">
									<div class="row">

										<div class="col-md-4">
											<div class="panel panel-default">
												<div class="panel-body bk-info text-light">
													<div class="stat-panel text-center">
														<?php
														$sqlbayar = "SELECT id_jenis FROM jenis WHERE";
														$querybayar = mysqli_query($koneksidb, $sqlbayar);
														$bayar = mysqli_num_rows($querybayar);
														?>
														<div class="stat-panel-number h1 "><?php echo htmlentities($bayar); ?></div>
														<div class="stat-panel-title text-uppercase">Jenis Kendaraan Dinas Kolinlamil</div>
													</div>
												</div>
												<a href="jenis.php" class="block-anchor panel-footer text-center">Rincian &nbsp; <i class="fa fa-arrow-right"></i></a>
											</div>
										</div>

										<div class="col-md-4">
											<div class="panel panel-default">
												<div class="panel-body bk-info text-light">
													<div class="stat-panel text-center">
														<?php
														$sqlkonfir = "SELECT kode_booking FROM booking WHERE status='Menunggu Konfirmasi'";
														$querykonfir = mysqli_query($koneksidb, $sqlkonfir);
														$konfir = mysqli_num_rows($querykonfir);
														?>
														<div class="stat-panel-number h1 "><?php echo htmlentities($konfir); ?></div>
														<div class="stat-panel-title text-uppercase">Kondisi Kendaraan Dinas Kolinlamil</div>
													</div>
												</div>
												<a href="#" class="block-anchor panel-footer text-center">Rincian &nbsp; <i class="fa fa-arrow-right"></i></a>
											</div>
										</div>

										<div class="col-md-4">
											<div class="panel panel-default">
												<div class="panel-body bk-info text-light">
													<div class="stat-panel text-center">
														<?php
														$sqlbelum = "SELECT kode_booking FROM booking WHERE status='Sudah Dibayar'";
														$querybelum = mysqli_query($koneksidb, $sqlbelum);
														$belum = mysqli_num_rows($querybelum);
														?>
														<div class="stat-panel-number h1 "><?php echo htmlentities($belum); ?></div>
														<div class="stat-panel-title text-uppercase">Plat Nomor Kendaraan Dinas Kolinlamil AL & Pusat </div>
													</div>
												</div>
												<a href="#" class="block-anchor panel-footer text-center">Rincian &nbsp; <i class="fa fa-arrow-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="row">

										<div class="col-md-4">
											<div class="panel panel-default">
												<div class="panel-body bk-primary text-light">
													<div class="stat-panel text-center">
														<?php
														$sql3 = "SELECT id_merek FROM merek";
														$query3 = mysqli_query($koneksidb, $sql3);
														$brands = mysqli_num_rows($query3);
														?>
														<div class="stat-panel-number h1 "><?php echo htmlentities($brands); ?></div>
														<div class="stat-panel-title text-uppercase">Merek Kendaraan Dinas Kolinlamil</div>
													</div>
												</div>
												<a href="merek.php" class="block-anchor panel-footer text-center">Rincian &nbsp; <i class="fa fa-arrow-right"></i></a>
											</div>
										</div>

										<div class="col-md-4">
											<div class="panel panel-default">
												<div class="panel-body bk-primary text-light">
													<div class="stat-panel text-center">
														<?php
														$sql1 = "SELECT id_mobil FROM mobil";
														$query1 = mysqli_query($koneksidb, $sql1);
														$totalvehicle = mysqli_num_rows($query1);
														?>
														<div class="stat-panel-number h1 "><?php echo htmlentities($totalvehicle); ?></div>
														<div class="stat-panel-title text-uppercase">Jumlah Kendaraan Dinas Kolinlamil</div>
													</div>
												</div>
												<a href="mobil.php" class="block-anchor panel-footer text-center">Rincian &nbsp; <i class="fa fa-arrow-right"></i></a>
											</div>
										</div>

										<div class="col-md-4">
											<div class="panel panel-default">
												<div class="panel-body bk-primary text-light">
													<div class="stat-panel text-center">
														<?php
														$sql = "SELECT id_user FROM users";
														$query = mysqli_query($koneksidb, $sql);
														$regusers = mysqli_num_rows($query);
														?>
														<div class="stat-panel-number h1 "><?php echo htmlentities($regusers); ?></div>
														<div class="stat-panel-title text-uppercase">User</div>
													</div>
												</div>
												<a href="reg-users.php" class="block-anchor panel-footer text-center">Rincian <i class="fa fa-arrow-right"></i></a>
											</div>
										</div>

									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="row">

										<div class="col-md-4">
											<div class="panel panel-default">
												<div class="panel-body bk-blue text-light">
													<div class="stat-panel text-center">
														<?php
														$sqlbayar = "SELECT kode_booking FROM booking WHERE status='Menunggu Pembayaran'";
														$querybayar = mysqli_query($koneksidb, $sqlbayar);
														$bayar = mysqli_num_rows($querybayar);
														?>
														<div class="stat-panel-number h1 "><?php echo htmlentities($bayar); ?></div>
														<div class="stat-panel-title text-uppercase">Data Personel Pemilik Kendaraan Dinas</div>
													</div>
												</div>
												<a href="#" class="block-anchor panel-footer text-center">Rincian &nbsp; <i class="fa fa-arrow-right"></i></a>
											</div>
										</div>

										<div class="col-md-4">
											<div class="panel panel-default">
												<div class="panel-body bk-blue text-light">
													<div class="stat-panel text-center">
														<?php
														$sqlsatker = "SELECT nama_satker FROM satker";
														$querysatker = mysqli_query($koneksidb, $sqlsatker);
														$satker = mysqli_num_rows($querysatker);
														?>
														<div class="stat-panel-number h1 "><?php echo htmlentities($satker); ?></div>
														<div class="stat-panel-title text-uppercase">Satuan Kerja Kolinlamil</div>
													</div>
												</div>
												<a href="satker.php" class="block-anchor panel-footer text-center">Rincian &nbsp; <i class="fa fa-arrow-right"></i></a>
											</div>
										</div>

									</div>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Loading Scripts -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap-select.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/dataTables.bootstrap.min.js"></script>
		<script src="js/Chart.min.js"></script>
		<script src="js/fileinput.js"></script>
		<script src="js/chartData.js"></script>
		<script src="js/main.js"></script>

		<script>
			window.onload = function() {

				// Line chart from swirlData for dashReport
				var ctx = document.getElementById("dashReport").getContext("2d");
				window.myLine = new Chart(ctx).Line(swirlData, {
					responsive: true,
					scaleShowVerticalLines: false,
					scaleBeginAtZero: true,
					multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
				});

				// Pie Chart from doughutData
				var doctx = document.getElementById("chart-area3").getContext("2d");
				window.myDoughnut = new Chart(doctx).Pie(doughnutData, {
					responsive: true
				});

				// Dougnut Chart from doughnutData
				var doctx = document.getElementById("chart-area4").getContext("2d");
				window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {
					responsive: true
				});

			}
		</script>
	</body>

	</html>
<?php } ?>