<?php
    include "koneksi.php";
    echo'<link rel="stylesheet" type="text/css" href="assets/style.css">';
    $nim=$_GET['nim'];

    $query ="DELETE FROM data_ WHERE nim='$nim'";

    if ($conn->query($query) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
        echo '<br><a align="center"  href="index.php">Home</a>';
    $conn->close();
?>