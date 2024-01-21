<?php
session_start();
include('includes/config.php');
error_reporting(0);
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>VMS | Kolinlamil</title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <!--Custome Style -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <!--OWL Carousel slider-->
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
    <!--slick-slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!--bootstrap-slider -->
    <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
    <!--FontAwesome Font Style -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">

    <!-- SWITCHER -->
    <!-- <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" /> -->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>

<body>

    <!--Header-->
    <?php include('includes/header.php'); ?>
    <!-- /Header -->

    <!--Page Header-->
    <section class="page-header listing_page">
        <div class="container">
            <div class="page-header_wrap">
                <div class="page-heading">
                    <h1>Daftar Mobil</h1>
                </div>
                <ul class="coustom-breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Daftar Mobil</li>
                </ul>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class="dark-overlay"></div>
    </section>
    <!-- /Page Header-->
    <div class="container">
        <div id="printableArea">
            <div class="row">

                <form action="listcar.php" method="post">

                    <div class="col-lg-20">
                        <div class="card">
                            <div class="card-body">
                                <label for="sel1">
                                    <h5>Form Cari Data</h5>
                                </label>
                                <?php
                                $satker = "";
                                $nomor_al_kotama = "";
                                $kondisi = "";
                                $nama_kendaraan = "";
                                $pemegang = "";

                                if (isset($_POST['kolom'])) {

                                    if ($_POST['kolom'] == "satker") {
                                        $satker = "selected";
                                    } else if ($_POST['kolom'] == "nomor_al_kotama") {
                                        $nomor_al_kotama = "selected";
                                    } else if ($_POST['kolom'] == "kondisi") {
                                        $kondisi = "selected";
                                    } else if ($_POST['kolom'] == "nama_kendaraan") {
                                        $nama_kendaraan = "selected";
                                    } else {
                                        $pemegang = "selected";
                                    }
                                }
                                ?>
                                <select class="form-control" name="kolom" required>
                                    <option value="">Silahkan pilih Kategori</option>
                                    <option value="satker" <?php echo $satker; ?>>SATKER</option>
                                    <option value="nomor_al_kotama" <?php echo $nomor_al_kotama; ?>>NOMOR PLAT DINAS</option>
                                    <option value="kondisi" <?php echo $kondisi; ?>>KONDISI</option>
                                    <option value="merek" <?php echo $nama_kendaraan; ?>>MEREK</option>
                                    <option value="pemegang" <?php echo $pemegang; ?>>PEMEGANG KENDARAAN</option>
                                </select>

                                <div class="form-group">
                                    <label for="sel1">Kata Kunci:</label>
                                    <?php
                                    $kata_kunci = "";
                                    if (isset($_POST['kata_kunci'])) {
                                        $kata_kunci = $_POST['kata_kunci'];
                                    }
                                    ?>
                                    <input type="text" name="kata_kunci" value="<?php echo $kata_kunci; ?>" class="form-control" required />
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info far fa-compass"> Cari</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Kendaraan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Satker</th>
                                <th>Nomor Plat Dinas</th>
                                <th>Kondisi</th>
                                <th>Merek</th>
                                <th>Pemegang Kendaraan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <?php

                        include "includes/config.php";

                        if (isset($_POST['kata_kunci'])) {
                            $kata_kunci = trim($_POST['kata_kunci']);

                            $kolom = "";
                            if ($_POST['kolom'] == "satker") {
                                $satker = "selected";
                            } else if ($_POST['kolom'] == "nomor_al_kotama") {
                                $nomor_al_kotama = "selected";
                            } else if ($_POST['kolom'] == "kondisi") {
                                $kondisi = "selected";
                            } else if ($_POST['kolom'] == "nama_kendaraan") {
                                $nama_kendaraan = "selected";
                            } else {
                                $pemegang = "selected";
                            }

                            $sql = "select * from mobil where $kolom like '" . $kata_kunci . "%'  order by kd_satker asc";
                        } else {
                            $sql = "select * from mobil order by kd_satker asc";
                        }

                        $res = mysqli_query($koneksidb, $sql);
                        ?>
                        <tbody>
                            <?php $no = 1;
                            while ($data = $res->fetch_object()) { ?>
                                <tr>
                                    <td align=center><?= $no++ ?></td>
                                    <td><?= $data->satker ?></td>
                                    <td><?= $data->nomor_al_kotama ?></td>
                                    <td><?= $data->kondisi ?></td>
                                    <td><?= $data->nama_kendaraan ?></td>
                                    <td><?= $data->pemegang ?></td>

                                    <td><a href='vehical-details.php?vhid=<?php echo $data->vhid ?>'>Detail</a></td>
                                    <!-- <td> <a href="vehical-details.php?vhid=<?php echo htmlentities($result['id_mobil']); ?>" class="btn">Lihat Detail </a></td> -->
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap.min.js"></script>
        </script>