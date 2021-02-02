<?php

    if(isset($_POST['tambah']))
    {
        include_once 'koneksi.php';
        $nim        = $_POST['nim'];
        $nama       = $_POST['nama'];
        $fakultas   = $_POST['fakultas'];
        $prodi      = $_POST['prodi'];
        $email      = $_POST['email'];
        $telp       = $_POST['telp'];
        $alamat     = $_POST['alamat'];
        
        $input  = mysqli_query($koneksi, "insert into mahasiswa values
        ('$nim', '$nama', '$fakultas', '$prodi', '$email', '$telp', '$alamat')");
        
        if($input)
        {
            echo "<script>alert('Data Berhasil Ditambahkan'); location = 'mahasiswa.php';</script>";
        }
        else
        {
            echo "<script>alert('Gagal Menambahkan Data'); location = 'tambah.php';</script>";
        }
        
    }
    else
    {
        echo "<script>window.history.back()</script>";
    }


?>