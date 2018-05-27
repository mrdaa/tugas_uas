<html>
<head>
    <title>Update Data Mahasiswa</title>
</head>
<body>
    <?php
        include "koneksi.php";
        $nim=$_GET['nim'];
        
        if($conn->connect_error){
            echo "Gagal Koneksi : ". $conn->connect_error;
        }
        $query = "select * from data_ where nim='$nim' LIMIT 1";
        $data = $conn->query($query);

        $nama="";
        $tempat="";
        $tanggal="";
        $alamat="";
        $gender="";
        $prodi="";

        if($data->num_rows <= 0) {
            echo "Silahkan isi data sesuai prosedur";
        } else {
            while($row = $data->fetch_assoc()) {
                $nama       = $row["nama"];
                $tempat     = $row["tempat_lahir"];
                $tanggal    = $row["tanggal"];
                $alamat     = $row["alamat"];
                $gender     = $row["gender"];
                $prodi      = $row["prodi"];
            }
        }      
    ?>

    <form action="update.php" method="post">
        <table align="center" width="40%" border="0" cellpadding="0" cellspacing="1" bgcolor="blueocean">
            <tr>
            <td  height="40" align="center"  bgcolor="blueocean"><strong><font  color="white">ENTRY DATA</font></strong></td>
            </tr>
            <tr>
                <td bgcolor="white"><table width="90%" border="0" align="center" cellpadding="5" cellspacing="0"</td>
            </tr>
            <tr>
                <td>NIM</td><td>:</td>
                <td><input readonly name="nim" type="text" id="nim" size="8" maxlength="8" value="<?php echo $nim;?>"></td>
            </tr>
            <tr>
                <td>Nama</td><td>:</td>
                <td><input name="nama" type="text" id="nama" size="30" maxlength="30" value="<?php echo $nama;?>"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td><td>:</td>
                <td><input name="tempat" type="text" id="tempat" size="30" maxlength="30" value="<?php echo $tempat;?>"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td><td>:</td>
                <td><input name="tanggal" type="date" id="tanggal" value="<?php echo $tanggal;?>" ></td>
            </tr>
            <tr>
                <td>Alamat</td><td>:</td>
                <td><textarea name="alamat" cols="32" rows"4" id="alamat" ><?php echo $alamat; ?></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td><td>:</td>
                <td>
                    <input name="gender" type="radio" value="L" <?php if($gender=='L') echo "checked";?>>Laki-laki
                    <input name="gender" type="radio" value="P" <?php if($gender=='P') echo "checked";?>>Perempuan
                </td>
            </tr>
            <tr>
                <td>Prodi</td><td>:</td>
                <td><select name ="prodi">
                <option value="">-- Pilih Prodi --</option>
                        <option value="D4 Teknik Informatika" <?php echo $prodi=='D4 Teknik Informatika' ? 'selected':'';?>>D4 Teknik Informatika</option>
                        <option value="D3 Kebidanan" <?php echo $prodi=='D3 Kebidanan' ? 'selected':'';?>>D3 Kebidanan</option>
                        <option value="D3 Farmasi" <?php echo $prodi=='D3 Farmasi' ? 'selected':'';?>>D3 Farmasi</option>
                        <option value="D3 Akuntansi" <?php echo $prodi=='D3 Akuntansi' ? 'selected':'';?>>D3 Akuntansi</option>
                        <option value="D3 Teknik Komputer" <?php echo $prodi=='D3 Teknik Komputer' ? 'selected':'';?>>D3 Teknik Komputer</option>
                        <option value="D3 Teknik Mesin" <?php echo $prodi=='D4 Teknik Mesin' ? 'selected':'';?>>D3 Teknik Mesin</option>
                        <option value="D3 Teknik Elektro" <?php echo $prodi=='D4 Teknik Elektro' ? 'selected':'';?>>D3 Teknik Elektro</option>
                </select></td>
            </tr>
        </table>
        <tr>
        <td align="center"><input type="submit" value="Simpan">
        <input type="button" value="Kembali" onclick="window.location = 'index.php';">
        </td></tr>    
</form>
<footer>
Copyright &copy; 2018 by Dwi Aji Apriyadi aka. @mr.daa
</footer> 
</body>
</html>