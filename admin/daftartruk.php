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

		<title>VMS | Kolinlamil </title>

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
		<style>
			.errorWrap {
				padding: 10px;
				margin: 0 0 20px 0;
				background: #fff;
				border-left: 4px solid #dd3d36;
				-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
				box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			}

			.succWrap {
				padding: 10px;
				margin: 0 0 20px 0;
				background: #fff;
				border-left: 4px solid #5cb85c;
				-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
				box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			}
		</style>

	</head>

	<body>
		<?php include('includes/header.php'); ?>

		<div class="ts-main-content">
			<?php include('includes/leftbar.php'); ?>
			<div class="content-wrapper">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-12">

							<h2 class="page-title">Daftar Truk Kolinlamil</h2>

							<!-- Zero Configuration Table -->
							<div class="panel panel-default">
								<div class="panel-heading">Truk Dinas Kolinlamil</div>
								<div class="panel-body">
									<?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
									<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
										<thead>
											<tr align="center">
												<th style="text-align: center;"> No</th>
												<th style="text-align: center;"> Nama Satuan Kerja</th>
												<th style="text-align: center;"> Pemegang Truk</th>
												<th style="text-align: center;"> Nama Truk</th>
												<th style="text-align: center;"> Tahun Pembuatan</th>
												<th style="text-align: center;"> Plat Nomor</th>
												<th style="text-align: center;"> Nomor Mesin</th>
												<th style="text-align: center;"> Nomor Rangka</th>
												<th style="text-align: center;"> Kondisi</th>
												<th style="text-align: center;"> Keterangan</th>
												<th><a href="#?"><span class="fa fa-plus-circle"></span>Aksi</a></th>
											</tr>
										</thead>
										<tbody>

											<?php
											$nomor = 0;
											$sqlsatker = "SELECT * FROM mobil where jenis_kendaraan in ('Forklift','Truk')";
											$querysatker = mysqli_query($koneksidb, $sqlsatker);
											while ($result = mysqli_fetch_array($querysatker)) {
												$nomor++;
											?>
												<tr align="center">
													<td><?php echo htmlentities($nomor); ?></td>
													<td><?php echo htmlentities($result['satker']); ?></td>
													<td><?php echo htmlentities($result['pemegang']); ?></td>
													<td><?php echo htmlentities($result['nama_kendaraan']); ?></td>
													<td><?php echo htmlentities($result['tahun_buat']); ?></td>
													<td><?php echo htmlentities($result['nomor_al_kotama']); ?></td>
													<td><?php echo htmlentities($result['nomor_mesin']); ?></td>
													<td><?php echo htmlentities($result['nomor_rangka']); ?></td>
													<td><?php echo htmlentities($result['kondisi']); ?></td>
													<td><?php echo htmlentities($result['#']); ?></td>
													<td><a href="daftartrukedit.php?id=<?php echo $result['id_mobil']; ?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
														<a href="dafartrukdel.php?id=<?php echo $result['id_mobil']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $result['id_mobil']; ?>?');"><i class="fa fa-close"></i></a>
													</td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
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
	</body>

	</html>
<?php } ?>