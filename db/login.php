<?php
    require_once "db_conn.php";

    session_start();

    // get inputs
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    // prepare sql statement to select password from a row with matching username
    if ($stmt = $conn->prepare("SELECT password FROM users WHERE username = ?")) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();
        // check if user exists in database 
        if ($stmt->num_rows>0) {
            $stmt->bind_result($dbPassword);
            $stmt->fetch();
            // verify password
            if (password_verify($password, $dbPassword)) {  
                // update last login of an user, for data retention purpouses
                $query = $conn->prepare("UPDATE users SET last_login = CURRENT_TIMESTAMP() WHERE username = ?;");
                $query->bind_param("s", $username);
                $query->execute();
                $query->close();   
                $_SESSION["username"] = $username;
                header("location: ../profile.php");
                exit;
            } else {
                $_SESSION["msg"] = "<p class='card-text text-danger pt-2'>Incorrect login information!</p>";
                header("location: ../login.php");
                exit;
            }
        } else {
            $_SESSION["msg"] = "<p class='card-text text-danger pt-2'>Incorrect login information!</p>";
            header("location: ../login.php");
            exit;
        }

        $stmt->close();
    }

    mysqli_close($conn);
?>