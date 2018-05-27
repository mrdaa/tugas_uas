<!DOCTYPE html>
<html>
<head>
    <title>Entry Data Mahasiswa</title>
</head>
<body>
    <form action="simpan.php" method="post">
        <table align="center" width="40%" border="0" cellpadding="0" cellspacing="1" bgcolor="blueocean">
            <tr>
            <td  height="40" align="center"  bgcolor="blueocean"><strong><font  color="white">ENTRY DATA</font></strong></td>
            </tr>
            <tr>
                <td bgcolor="white"><table width="90%" border="0" align="center" cellpadding="5" cellspacing="0"</td>
            </tr>
            <tr>
                <td>NIM</td><td>:</td>
                <td><input name="nim" type="text" id="nim" size="8" maxlength="8"></td>
            </tr>
            <tr>
                <td>Nama</td><td>:</td>
                <td><input name="nama" type="text" id="nama" size="30" maxlength="30"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td><td>:</td>
                <td><input name="tempat" type="text" id="tempat" size="30" maxlength="30"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td><td>:</td>
                <td><input type="date" name="tanggal" id="tanggal"></td>
            </tr>
            <tr>
                <td>Alamat</td><td>:</td>
                <td><textarea name="alamat" cols="32" rows"4" id="alamat"></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td><td>:</td>
                <td>
                    <input name="gender" type="radio" value="L" checked>Laki-laki
                    <input name="gender" type="radio" value="P" >Perempuan
                </td>
            </tr>
            <tr>
                <td>Prodi</td><td>:</td>
                <td><select name ="prodi">
                    <option value="">Pilih Prodi</option>
                    <option value="D4 Teknik Informatika">D4 Teknik Informatika</option>
                    <option value="D3 Kebidanan">D3 Kebidanan</option>
                    <option value="D3 Farmasi">D3 Farmasi</option>
                    <option value="D3 Akuntansi">D3 Akuntansi</option>
                    <option value="D3 Teknik Komputer">D3 Teknik Komputer</option>
                    <option value="D3 Teknik Mesin">D3 Teknik Mesin</option>
                    <option value="D3 Teknik Elektro">D3 Teknik Elektro</option>
                </select></td>
            </tr>
        </table>
        <tr>
        <td align="center"><input type="submit" value="Simpan">
        <input type="reset" value="Reset">
        <input type="button" value="Kembali" onclick="window.location = 'index.php';">
        </td></tr>    
</form> 
</body>
<footer>
Copyright &copy; 2018 by Dwi Aji Apriyadi aka. @mr.daa
</footer>
</html>