<?php
include "koneksi.php";
$query = mysql_query("SELECT * FROM data_ ORDER BY nim DESC");
?>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
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
        <?php if(mysql_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysql_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["nim"];?></td>
            <td><?php echo $data["nama"];?></td>
            <td align="center"><?php echo $data["tempat_lahir"];?></td>
            <td align="center"><?php echo $data["tanggal"];?></td>
            <td><?php echo $data["alamat"];?></td>
            <td><?php echo $data["kelamin"];?></td>
            <td><?php echo $data["prodi"];?></td>
            <td>
                <a href="#">Delete</a> |
                <a href="#">Update</a>
            </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>