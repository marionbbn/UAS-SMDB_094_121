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
        <title>Mahasiswa</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="mahasiswa.php">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Keluar</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>

        <br>
        
        <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
              <?php if(isset($_SESSION['msg'])) :?>
                <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php echo $_SESSION['msg'];unset($_SESSION['msg']);?>
                </div>
              <?php endif ?>
              <h4 class="card-title">Data Mahasiswa</h4>
                    <p class="card-description"> Data seluruh  <code>Mahasiswa</code> 
                    <a href="tambah.php" class="btn btn-info btn-sm">  <i class="icon-plus">   Tambah Mahasiswa </i> </a></p> 
                    <table class="table table-striped">
                      <thead>
                        <tr>
                            <th>No.</th>
                            <th> NIM </th>
                            <th> Nama Mahasiswa </th>
                            <th> Fakultas </th>
                            <th> Prodi</th>
                            <th> Email </th>
                            <th> Telp. </th>
                            <th> Alamat </th>
                            <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
            <?php
              include_once 'koneksi.php';
                $no=1;
                $data=mysqli_query($koneksi, "select * from mahasiswa");
                while ($d=mysqli_fetch_array($data)){
            ?>
            
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nim']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['fakultas']; ?></td>
                    <td><?php echo $d['prodi']; ?></td>
                    <td><?php echo $d['email']; ?></td>
                    <td><?php echo $d['telp']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td>
                        <a href="edit.php ?nim=<?php echo $d['nim'];?>">Edit</a>
                        <a href="hapus.php ?nim=<?php echo $d['nim'];?>">Hapus</a>
                    </td>
                </tr>
                
            <?php
            }
            ?>        
        </tbody>
        </table> 
    </body>
</html>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>