<?php $currentPage = "policies"; ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Stylesheets -->
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
<body id="policies">

    <?php include("header.php");?>

    <div class="container pb-3">
        <div class="row pt-3">
            <div class="col">
                <!-- Privacy policy accessed using AJAX -->
                <p id="content"></p>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col">
                <!-- Cookie policy-->
                <h4>Cookie policy</h4>
                <p>
                    This website uses session storage to enchance its performance and user login functionality. No sensitive information is stored this way.
                </p>
            </div>
        </div>
    </div>
    
    <?php include("footer.php");?>

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="scripts/script.js"></script>
    <script src="scripts/jq_script.js"></script>
</body>

</html>