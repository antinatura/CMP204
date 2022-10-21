<?php
    require_once "db_conn.php";

    // get username of the active session
    $username = $_SESSION["username"];

    // prepare sql statement to select timestamp from a row with matching username
    if ($stmt = $conn->prepare("SELECT reg_date FROM users WHERE username = ?")) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();          
        $stmt->bind_result($ts);
        $stmt->fetch();

        $date = date_create($ts);
        echo date_format($date, "F d, Y");

        $stmt->close();
    }

    mysqli_close($conn);
?>