<?php
// Start the session if it hasn't been started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Add some basic styling for the navbar */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>

<nav>
    <a href="index.php">Home</a>
    <a href="reviews.php">Reviews</a>
    
    <?php
    if (isset($_SESSION["username"])) {
        // User is logged in
        echo '<a class="logout" href="logout.php">Logout</a>';
    } else {
        // User is not logged in
        echo '<a href="login.php">Login</a>';
        echo '<a href="signup.php">Sign Up</a>';
    }
    ?>
    
    <a href="reviewform.php">Leave a Review</a>
</nav>

</body>
</html>



