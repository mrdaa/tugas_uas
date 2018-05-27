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

    //melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE nim='$nim' <- diambil dari inputan nim
    // $query = "UPDATE data_ SET nama='$nama', tempat_lahir='$tempat', tanggal='$tanggal' alamat='$alamat',  gender='$gender',  prodi='$prodi' WHERE nim='$nim'";
    $query = "UPDATE data_ SET nama ='".$_POST["nama"]."',".
             "tempat_lahir='".$_POST["tempat"]."',".
             "alamat='".$_POST["alamat"]."',".
             "gender='".$_POST["gender"]."',".
             "prodi='".$_POST["prodi"]."' ".
             "where nim= ".$_POST["nim"];
             
    if($conn->query($query)=== true){
        echo "Data " .$nama. ' berhasil di simpan! ';  //Pesan jika proses simpan sukses
        echo '<br><a href="index.php">Home</a>'; //membuat Link untuk kembali ke halaman edit
    }else{
        echo 'Gagal menyimpan data! ';  //Pesan jika proses simpan gagal
        echo '<a href="form-edit.php?nim='.$nim.'">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
    }
    $conn->close();
?>