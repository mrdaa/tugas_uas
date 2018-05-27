<?php
  $dbserver="localhost";
  $dbusername="id5886003_root";
  $dbpassword="qwerty123";
  $dbname="id5886003_dbmahasiswa";
  $conn = new mysqli($dbserver,$dbusername,$dbpassword,$dbname)or die(mysql_error());

  if($conn)
    {
    echo ("");
    }
    else
    {
    echo ("koneksi gagal");
    }
?>
