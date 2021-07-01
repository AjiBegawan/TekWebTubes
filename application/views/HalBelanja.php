<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="<?php echo base_url('assets\css\styles2.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets\css\styles.css'); ?>" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">

            <a class="navbar-brand" href="<?php echo site_url('ctoko'); ?>">
                <h1>Be.U</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('ctoko/belanja'); ?>">Belanja</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Unggulan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">

        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">

            </div>
        </div>
    </header>
<br>
<h1>Spesial di Be.U hari ini</h1>
<br>




<div class="container">
    <div class="row no-gutters">
        <div>
            <?php
            foreach ($barang->result() as $row) {
            ?>
                <div class="card mb-3" style="max-width: auto; max-height: 250px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="<?php echo base_url('assets\img\tani\beras.jpg'); ?>" class="card-img" alt="..." style="max-height: 250px;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row->Nama_Barang; ?></h5>
                                <p class="card-text">Rp. <?php echo $row->Stok; ?></p>
                                <p class="card-text"><?php echo $row->harga; ?> barang</p>
                                <button type="button" class="btn btn-primary">Tambah Keranjang</button>
                                <button type="button" class="btn btn-success">Beli Sekarang</button>
                                <button type="button" class="btn btn-info">Wishlist</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>

</div>

    </div>



    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?php echo base_url('assets\js\scripts.js'); ?>"></script>
</body>

</html>