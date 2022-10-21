<?php $currentPage = "profile"; ?>

<!doctype html>
<html lang="en">
    
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="styles.css" rel="stylesheet" type="text/css"> 

    <!--Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

    <title>Beach House</title>

    <!-- Image: Beach House (2021) [Online image] Available from: http://www.beachhousebaltimore.com/favicon.ico?v=2 [Accessed 13/12/2021]. -->
    <link rel="shortcut icon" type="image/ico" href="graphics/favicon.ico">
</head>
<body id="profile">

    <?php 
        include("header.php");
        // redirect to registration page if user is logged in
        if(!isset($_SESSION["username"])) {
            header("location: register.php");
            exit;
        }    
    ?>

    <div class="container pb-3">
        <div class="row text-center py-3">
            <div class="col-lg-6 mx-auto">
                <h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>
                <p>Member since: <?php include("db/get_date.php"); ?></p>
            </div>
        </div>

        <div class="row my-3 my-md-1">
            <div class="col-md col-lg-5 ms-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Change password</h5>
                        <p class="card-text">Make sure Your new password is at least 8 characters and contains both uppercase and lowercase letters and numbers.</p>
                        <!-- Change password -->
                        <form action="db/change_pass.php" method="post">
                            <div class="mb-3">
                                <label class="form-label">Current password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New password</label>
                                <input type="password" class="form-control" name="new_password" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm new password</label>
                                <input type="password" class="form-control" name="conf_password" required>
                            </div>
                            <button type="submit" class="btn btn-outline-dark">Change password</button>
                        </form>
                        <?php if (isset($_SESSION["msg1"])) {echo $_SESSION["msg1"]; unset($_SESSION["msg1"]);}?>
                    </div>
                </div>
            </div>
            <div class="col-md col-lg-5 me-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Delete account</h5>
                        <p class="card-text">Enter Your pasword here to delete Your account.</p>
                        <!-- Delete account-->
                        <form action="db/delete_acc.php" method="post">
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-outline-danger">Delete account</button>
                        </form>
                        <?php if (isset($_SESSION["msg2"])) {echo $_SESSION["msg2"]; unset($_SESSION["msg2"]);}?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php");?>
    
    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
    <!-- Scripts -->
    <script src="scripts/jq_script.js"></script>
</body>

</html>