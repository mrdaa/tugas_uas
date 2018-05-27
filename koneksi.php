<?php
  $dbserver="localhost";
  $dbusername="root";
  $dbpassword="";
  $dbname="maha";
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
