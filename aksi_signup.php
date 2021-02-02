<?php

    if(isset($_POST['signup']))
    {
        include_once 'koneksi.php';
        $username   = $_POST['username'];
        $password   = $_POST['password'];
        
        $input  = mysqli_query($koneksi, "insert into login values
        ('$username', '$password')");
        
        if($input)
        {
            echo "<script>alert('Silahkan Login'); location = 'mahasiswa.php';</script>";
        }
        else
        {
            echo "<script>alert('Error'); location = 'tambah.php';</script>";
        }
        
    }
    else
    {
        echo "<script>window.history.back()</script>";
    }
?>