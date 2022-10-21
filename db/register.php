<?php
    require_once "db_conn.php";

    session_start();

    // get inputs
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $conf_password = trim($_POST["conf_password"]);

    $err = "";

    // check if username meets the requirements 
    if (!ctype_alnum($username)) {
        $err .= "<p class='card-text text-danger pt-2'>Username can only contain letters and numbers.</p>";
        $_SESSION["msg"] = $err;
        header("location: ../register.php");
        exit;
    }
    else if (strlen($username) < 4 || strlen($username) > 20) {
        $err .= "<p class='card-text text-danger pt-2'>Username does not meet the length limits</p>";
        $_SESSION["msg"] = $err;
        header("location: ../register.php");
        exit;
    }

    // prepare sql statement to select password from a row with matching username
    if ($stmt = $conn->prepare("SELECT * FROM users WHERE username = ?")) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        // check if username exists
        if ($stmt->num_rows>0) {
            $err .= "<p class='card-text text-danger pt-2'>Username not available.</p>";
            $_SESSION["msg"] = $err;
            header("location: ../register.php");
            exit;
        } else {
            // check passwords (must match, be longer than 8 characters and have both upper and lovercase letters + a number)
            if (!preg_match('/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/', $password)) {
                $err .= "<p class='card-text text-danger pt-2'>Invalid password. Make sure it is longer than 8 characters and contains uppercase and lowercase letters and numbers.</p>";
                $_SESSION["msg"] = $err;
                $_SESSION["filler"] = "value='".$username."'";
                header("location: ../register.php");
                exit;
            } else if ($password != $conf_password) {
                $err .= "<p class='card-text text-danger pt-2'>Passwords didn't match.</p>";
                $_SESSION["filler"] = "value='".$username."'";
                $_SESSION["msg"] = $err;
                header("location: ../register.php");
                exit;
            }

            if (empty($err)) {
                // hash password
                $hash = password_hash($password, PASSWORD_BCRYPT);
                // query to insert values
                $query = $conn->prepare("INSERT INTO users (username, password) VALUES (?,?);");
                $query->bind_param("ss", $username, $hash);
                $query->execute(); 
                $query->close();
                $_SESSION["msg"] = "<p class='card-text text-success pt-2'>Registration successful. You can log in now.</p>";
                header("location: ../register.php");                 
                exit;
            }
        }

        $stmt->close();
    }
   
    mysqli_close($conn);
?>