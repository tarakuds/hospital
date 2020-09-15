<?php
    include_once('nav/nav.php');
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hospital application to meet all medical needs">

    <title>HOME: SNH Medical</title>
    <!-- for carousel  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">WELCOME TO SNH MEDICAL CENTER</h1>
        <p class="lead">There is no place you will rather be than here.</p>

        <p>
            <a class="btn btn-outline-secondary" href="login.php">Login</a>
            <a class="btn btn-outline-primary" href="reg.php">Register</a>
        </p>
    </div>
    <?php
        include_once("nav/carousel.php");
        include_once('nav/footer.php');
    ?>

</body>
</html>