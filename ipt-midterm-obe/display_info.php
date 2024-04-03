<?php
// Retrieve form data from the query string
$name = isset($_GET["name"]) ? htmlspecialchars($_GET["name"]) : '';
$age = isset($_GET["age"]) ? intval($_GET["age"]) : 0;
$gender = isset($_GET["gender"]) ? htmlspecialchars($_GET["gender"]) : '';
$email = isset($_GET["email"]) ? htmlspecialchars($_GET["email"]) : '';
$phone = isset($_GET["phone"]) ? htmlspecialchars($_GET["phone"]) : '';
$password = isset($_GET["password"]) ? htmlspecialchars($_GET["password"]) : '';
$location = isset($_GET["location"]) ? htmlspecialchars($_GET["location"]) : ''; 

// Determine the image based on gender
$image = '';
if ($gender === 'male') {
    $image = 'img/male.png'; // Corrected path to the male image
} elseif ($gender === 'female') {
    $image = 'img/female.png'; // Corrected path to the female image
}

// Define background image
$bg_image = 'img/bg-image.jpg';

// Display the form data along with the image
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="HTML, Bootstrap and PHP">
    <meta name="author" content="Panginoon(LBRN)">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information | Versatile Philippines</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-image: url('<?php echo $bg_image; ?>'); background-size: cover; background-position: center; background-repeat: no-repeat; background-color: #000000;">
    <div class="container mt-5">
        <div class="row justify-content-center"> <!-- Center the content horizontally -->
            <div class="col-md-6"> <!-- Set the maximum width of the content -->
                <div class="card">
                <div class="card-header text-center" style="font-weight: bold;">
                    User Information
                </div>
                <div class="card-body">
                    <img src="<?php echo $image; ?>" alt="User Image" class="img-fluid mx-auto d-block mb-3">
                    <p><strong>Name:</strong> <?php echo $name; ?></p>
                    <p><strong>Age:</strong> <?php echo $age; ?></p>
                    <p><strong>Gender:</strong> <?php echo $gender; ?></p>
                    <p><strong>Email:</strong> <?php echo $email; ?></p>
                    <p><strong>Phone:</strong> <?php echo $phone; ?></p>
                    <p><strong>Location:</strong> <?php echo $location; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card-footer text-center mt-5">
                        <a href="index.php">
                            <img src="img/wolf.png" alt="Logo" style="max-width: 200px;">
                        </a>    
                        <a href="index.php">
                            <img src="img/image.png" alt="Logo" style="max-width: 200px;">
                        </a>                    
                    </div>
</div>
</body>
</html>
