<?php
    include "koneksi.php";
    $nim    = $_POST['nim'];
    $nama   = $_POST['nama'];
    $tempat = $_POST['tempat'];
    $tanggal= $_POST['tanggal'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];
    $prodi  = $_POST['prodi'];
    if(empty($nim) || empty($nama) || empty($tempat) || empty($alamat) || empty($gender))
        {
            echo"<h3>Data belum lengkap, silahkan lengkapi data anda</h3><a href='input.php'>kembali</a>";
            return;
        }

    $query= "INSERT INTO data_(nim,nama,tempat_lahir,tanggal,alamat,gender,prodi) VALUES('$nim','$nama','$tempat','$tanggal','$alamat','$gender','$prodi')";  
    
    if($conn->query($query)===true)
        {
            echo "<br> Data " .$nama. 'berhasil di simpan';
            echo '<br><a align="center" href="index.php">Home</a>';
        }else{
            echo "<br>Gagal di simpan";
            echo '<br><a align="center" href="input.php">kembali</a>';
        }
  
    $conn->close();
?>