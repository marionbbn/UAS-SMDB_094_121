<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION['username'])){
    header ("location:login.php");
}
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}
?>

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>USU - Kelompok 11</title>
        <link rel="icon" href="usu.png">
    </head>
    
    <body>
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">
            <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="logo_usu.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Kelompok 11</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Layanan
                        </a>
                        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-white bg-dark" href="mahasiswa.php">Mahasiswa</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-white bg-dark" href="#peta">Lokasi</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-white bg-dark" href="#designer">Designer</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-white bg-dark" href="#hak">Hak Cipta</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Keluar</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="jumbotron">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="carousel1.png" class="d-block w-100">
                </div>

                <div class="carousel-item">
                    <img src="carousel2.png" class="d-block w-100">
                </div>

                <div class="carousel-item">
                    <img src="carousel3.png" class="d-block w-100">
                </div>

                <div class="carousel-item">
                    <img src="carousel4.png" class="d-block w-100">
                </div>

                <div class="carousel-item">
                    <img src="carousel5.png" class="d-block w-100">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <br>
        <br>
        <div class="container-fluid" id="peta">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="display-3">Peta</h3>
                </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9 mt-5" id="peta">
                <div class="container-fluid">
                    <div id="map-container-google-1">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.112004174764!2d98.6541536141748!3d3.5616759974080514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312fe03ed8450b%3A0xe84941c195268efc!2sUniversity%20of%20Sumatera%20Utara!5e0!3m2!1sen!2sid!4v1611456982007!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
        <div class="container-fluid" id="designer">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="display-3">Designer</h3>
                </div>
            </div>
            
        
        <div class="row mt-5">
            <div class="col-lg-2">
                <div class="card" >
                    <img src="maryo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Maryo Christopher Davinci Nababan</h5>
                        <p class="card-text">191401094</p>
                    </div>
                </div>
            </div>        
            <div class="col-lg-3">
                <div class="card" >
                    <img src="david.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">David Lionard S</h5>
                        <p class="card-text">191401121</p>
                    </div>
                </div>
            </div>
            </div>
            </div>
        
        <footer class="footer text-center">
              <img src="logo_usu.png">
              <p>&copy;2020 All Rights Reserved</p>
        </footer>
        </div>
    </body>
</html>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>