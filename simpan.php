<?php
    include "koneksi.php";
    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $tempat=$_POST['tempat'];
    $tanggal=$_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];
    $alamat=$_POST['alamat'];
    $kelamin=$_POST['kelamin'];
if(empty($nim) || empty($nama) || empty($tempat) || empty($alamat) || empty($kelamin))
    {
        echo"<h3>Data belum lengkap, silahkan lengkapi data anda</h3><a href='input.php'>kembali</a>";
    }
else 
    {
        mysql_query( "insert into data(nim, nama, alamat, tempat_lahir, tanggal, kelamin)".
            "values('$nim','$nama','$tempat','$tanggal','$alamat','$kelamin')") or die(mysql_error());
            echo "Berhasil";
            header("location:laporan.php");
    }