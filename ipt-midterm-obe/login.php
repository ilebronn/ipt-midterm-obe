<?php
session_start(); // Start the session

$errors = [];

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are provided
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        $errors[] = "Username and password are required.";
    } else {
        // Assuming you have a database connection
        // You need to replace these lines with actual database logic
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Validate username and password (again, replace this with actual database logic)
        if ($username === "admin" && $password === "password") {
            // Authentication successful
            $_SESSION["username"] = $username; // Store username in session
            header("Location: dashboard.php?name=" . urlencode($username)); // Redirect to dashboard page with username
            exit();
        } else {
            // Authentication failed
            $errors[] = "Invalid username or password.";
        }
    }
}
$bg_image = 'img/selection.jpg';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="HTML, Bootstrap and PHP">
    <meta name="author" content="Panginoon(LBRN)">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-image: url('<?php echo $bg_image; ?>'); background-size: cover; background-position: center; background-repeat: no-repeat; background-color: #000000;">
    <div class="container mt-5">
        <div class="row justify-content-center ">
            <div class="col-md-5 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Log In</h4>
                        <?php if (!empty($errors)): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php foreach ($errors as $error): ?>
                                    <?php echo $error; ?><br>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <label for="username" style="font-size: 14px;">Username:</label>
                                <input type="text" class="form-control form-control-sm" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password" style="font-size: 14px;">Password:</label>
                                <input type="password" class="form-control form-control-sm" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-sm btn-block" style="background-color: transparent;">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer text-center mt-5">
                        <a href="index.php">
                            <img src="img/wolf.png" alt="Logo" style="max-width: 200px;">
                        </a>                    
                    </div>
                    <div class="card-footer text-center mt-5">
                        <a href="index.php">
                            <img src="img/image.png" alt="Logo" style="max-width: 250px;">
                        </a>                    
                    </div>
</body>
</html>
