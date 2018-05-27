<?php
    include  "koneksi.php";

    $nim     = $_POST['nim'];
    $nama    = $_POST['nama'];
    $tempat  = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $alamat  = $_POST['alamat'];
    $gender  = $_POST['gender'];
    $prodi   = $_POST['prodi']; 
    
    if($nim=='' || $nama=='' || $tempat=='' || $tanggal=='' || $alamat=='' || $gender=='' || $prodi==''){
        echo "Gagal update, pastikan semua kolom di form telah terisi!<br>";
        echo '<a href="form-edit.php?nim='.$nim.'">kembali</a>';
        return;
    }

    $query = "UPDATE data_ SET nama ='".$_POST["nama"]."',".
             "tempat_lahir='".$_POST["tempat"]."',".
             "alamat='".$_POST["alamat"]."',".
             "gender='".$_POST["gender"]."',".
             "prodi='".$_POST["prodi"]."' ".
             "where nim= ".$_POST["nim"];
             
    if($conn->query($query)=== true){
        echo "Data " .$nama. ' berhasil di simpan! '; 
        echo '<br><a href="index.php">Home</a>'; 
    }else{
        echo 'Gagal menyimpan data! '; 
        echo '<a href="form-edit.php?nim='.$nim.'">Kembali</a>'; 
    }
    $conn->close();
?>