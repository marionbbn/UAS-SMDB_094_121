<?php

if (isset($_POST['simpan']))
{
    include('koneksi.php');
    $nim        = $_POST['nim'];
    $nama       = $_POST['nama'];
    $fakultas   = $_POST['fakultas'];
    $prodi      = $_POST['prodi'];
    $email      = $_POST['email'];
    $telp       = $_POST['telp'];
    $alamat     = $_POST['alamat'];
    $update     = mysqli_query($koneksi, "update mahasiswa set
    
    nama        = '$nama',
    fakultas    = '$fakultas',
    prodi       = '$prodi',
    email       = '$email',
    telp        = '$telp',
    alamat      = '$alamat'
    
    where nim   = '$nim'")
        
    or die(mysqli_error());
    
    
    if($update)
    {
        echo "<script>alert('Data Berhasil Diupdate'); location = 'mahasiswa.php';</script>";
    }
    
    else
    {
        echo "<script>alert('Data Gagal Disimpan'); location = 'edit.php';</script>";
    } 
}

else
{
        echo "<script>window.history.back()</script>";
}


?>