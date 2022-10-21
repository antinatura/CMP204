<?php
    //connection details
    $servername = "";
    $dbusername = "";
    $dbpassword = "";
    $dbname = "";

    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

    //check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
