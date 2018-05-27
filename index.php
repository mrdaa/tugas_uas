<html>
<link rel="stylesheet" type="text/css" href="assets/style.css">
<head>
    <title> Halaman Utama </title>
</head>
<body>

<h1 align="center"> Data Mahasiswa</h1>
<hr>
<a align="center" class="button" href="input.php">+ Input Data</a>
<br><br>

<?php
include "koneksi.php";
$query = "SELECT * FROM data_ ORDER BY nim DESC";
$data = $conn->query($query);
?>

<form action="" method="post">
    <table>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Prodi</th> 
            <th></th>
        </tr>
        <?php if($data->num_rows >0){ 
            $no = 1;
            while($row = $data->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $no ;?></td>
            <td><?php echo $row["nim"];?></td>
            <td><?php echo $row["nama"];?></td>
            <td><?php echo $row["tempat_lahir"];?></td>
            <td><?php $tgl = $row["tanggal"]; echo date("d-m-Y",strtotime($tgl))?></td>
            <td><?php echo $row["alamat"];?></td>
            <td><?php echo $row["gender"] == 'L' ? 'Laki-laki':'Prempuan';?></td>
            <td><?php echo $row["prodi"];?></td>
            <td>
                <a class="button button3" href="hapus.php?nim=<?php echo $row["nim"];?>">Delete</a> 
                <a class="button button2" href="form-edit.php?nim=<?php echo $row["nim"];?>">Update</a>
            </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>

</form>
</body>
<footer>
Copyright &copy; 2018 by Dwi Aji Apriyadi aka. @mr.daa
</footer>
</html>