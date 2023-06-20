<?php
if (isset($_POST['masuk'])) {
    masuk($_POST);
}
?>
<!doctype html>
<html lang="en">
<!-- Komentar: kode dimodifikasi -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= url ?>assets/css/bootstrap.min.css" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= url ?>assets/font-awesome/css/font-awesome.min.css" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= url ?>assets/css/custom.css" crossorigin="anonymous">

    <title><?= $judul ?></title>
    <style>
            .bg-image {
                text-align: left;
            }
            img {
                width:50%;
                height:100%;
                object-fit:cover;
            }
			
			.cart-icon img {
            width: 30px; /* Ubah ukuran sesuai kebutuhan */
            height: 30px%; /* Ubah ukuran sesuai kebutuhan */
			object-fit:cover;
            }
        </style>
</head>
<div class="topbar fixed-top">

    

    <nav class="navbar navbar-expand-lg shadow-sm bg-secondary text-dark ">
        
            <div class="bg-image" align="left">
                 <a href="<?= url ?>user/index.php">
                     <img src="<?= url ?>assets/images/pages/logo.png" alt="Logo" />
                 </a>
            </div>


        <div id="nav-btn" class="navbar-toggler m-auto" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false">
            <i id="icon" class="fa fa-bars"></i>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav col-6">
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= url ?>user/produk.php/?kategori=Pria">Pria </a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= url ?>user/produk.php/?kategori=wanita">wanita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= url ?>user/produk.php/?kategori=anak">anak</a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#masuk" </button> <a class="nav-link" href="<?= url ?>daftar.php">Daftar</a>
                </li>
            </ul>
            <div class="cari col-6">
                <form class="form-inline float-right" action="<?= url ?>user/produk.php/?cari=">
                    <input name="cari" class="form-control mr-sm-2 " type="search" placeholder="Cari" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                </form>
                </a>
				<?php if (isset($_SESSION['nama'])) : ?>
				      <a href="<?= url ?>user/profil.php#keranjang" class="cart-icon">
                          <img src="<?= url ?>assets/images/pages/profil.png" alt="profil" />
                      </a>
			    <?php else : ?>
                      <a href="<?= url ?>user/daftar.php" class="cart-icon">
                          <img src="<?= url ?>assets/images/pages/profil.png" alt="profil" />
                      </a>
                <?php endif; ?>
            </div>
            </div>
        </div>
    </nav>
</div>
<!-- Komentar: kode dimodifikasi -->
<body class="bg-secondary">
    <div class="container  bg-white p-5">