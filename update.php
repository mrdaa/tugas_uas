<?php
    include "koneksi.php";

    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $tempat=$_POST['tempat'];
    $tanggal=$_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $prodi=$_POST['prodi'];

    if($nim=='' || $nama=='' || $tempat=='' || $tanggal=='' || $alamat=='' ||$gender=='' || $prodi==''){
        echo "Gagal update, pastikan semua kolom di form telah terisi!<br>";
        echo '<a href="index.php">kembali</a>';
        return;
    }

    $query = "  UPDATE data_ SET nama='$nama', alamat='$alamat', gender='$gender',  prodi='$prodi' WHERE nim='$nim'";

    if ($conn->query($query) === TRUE) {
        echo "data ".$nama.'berhasil di update';
    } else {
        echo "Update Error " . $conn->error;
    }
    

    $conn->close();
?>