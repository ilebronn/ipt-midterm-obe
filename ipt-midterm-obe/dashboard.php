<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
    // If not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}

// Retrieve the username from the session
$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="HTML, Bootstrap and PHP">
    <meta name="author" content="Panginoon(LBRN)">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Versatile Philippines</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-image: url('img/bg-image.jpg'); background-size: cover;">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center">
                    <h4 class="display-4"><b>Welcome, <?php echo $username; ?>!</b></h4>
                    <p class="lead mt-5"><b>"Welcome to Your Dashboard! <br>
We're thrilled to have you here. Get ready to explore, manage, and stay organized with all the tools and information you need right at your fingertips. Let's make today productive and successful together! If you need any assistance, feel free to reach out. Enjoy your time here!".</b></p>
                    <a href="index.php" class="btn btn-outline-dark btn-lg mt-5"><b>Back to Home</b></a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer text-center">
                        <a href="index.php">
                            <img src="img/wolf.png" alt="Logo" style="max-width: 200px;">
                        </a>                    
                    </div>
                    <div class="card-footer text-center">
                        <a href="index.php">
                            <img src="img/image.png" alt="Logo" style="max-width: 250px;">
                        </a>                    
                    </div>
</body>
</html>
