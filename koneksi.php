<?php
  $dbserver="localhost";
  $dbusername="root";
  $dbpassword="";
  $dbname="maha";
  $conn = mysql_connect($dbserver,$dbusername,$dbpassword)or die(mysql_error());
  mysql_select_db($dbname) or die  (mysql_error());
  if($conn)
    {
    echo ("");
    }
    else
    {
    echo ("koneksi gagal");
    }
?>