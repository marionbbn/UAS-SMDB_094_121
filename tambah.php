<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Tambah Mahasiswa</title>
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

        <h3>
            <p align="center">Tambah data mahasiswa</p>
        </h3>
        <form action="tambah_proses.php" method="post">
        <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">NIM (Nomor Induk Mahasiswa) </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="NIM" name="nim">
                </div>
            </div>

            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Mahasiswa </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nama Mahasiswa" name="nama">
                </div>
            </div>

            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Fakultas </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Fakultas" name="fakultas">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Program Studi </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Prodi" name="prodi">
                </div>
            </div>

            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="email" name="email">
                </div>
            </div>

            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Telp/HP </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Telp/HP" name="telp">
                </div>
            </div>

            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Alamat </label>
                <div class="col-sm-9">
                    <Textarea class="form-control" placeholder="alamat" name="alamat"></textarea>
                </div>
            </div>
        
            <button type="submit" name="tambah" value="Tambah" class="btn btn-info mr-2">Submit</button>
        </div> 
        </div>
        </div> 
        </form>
    </body>
</html>