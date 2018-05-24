<?php
    include "koneksi.php";
    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $tempat=$_POST['tempat'];
    $tanggal=$_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $prodi=$_POST['prodi'];
    if(empty($nim) || empty($nama) || empty($tempat) || empty($alamat) || empty($gender))
        {
            echo"<h3>Data belum lengkap, silahkan lengkapi data anda</h3><a href='input.php'>kembali</a>";
            return;
        }

    $query= "INSERT INTO data_(nim,nama,tempat_lahir,tanggal,alamat,gender,prodi) VALUES('$nim','$nama','$tempat','$tanggal','$alamat','$gender','$prodi')";  
    
    if($conn->query($query)===true){
        echo "<br> Data " .$nama. 'berhasil di simpan';
        header("location:index.php");
    }else{
        echo "<br>Gagal di simpan";
        
    }
    echo "<a align='center' class='button' href='index.php'>+ Input Data</a>";
    $conn->close();
?>