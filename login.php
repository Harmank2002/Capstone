<?php
// Start the session if it hasn't been started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
   
}
?>
<?php
include 'navbar.php';

// Database connection details
$servername = "phulmoonshoots.com";
$username = "harmanjeet";
$password = "semicoloN.1984";
$dbname = "signups";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the username and password match a record in the database
    $sql = "SELECT * FROM signups WHERE username = '$username' AND pass = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION["username"] = $username; // Save the username in the session
        header("Location: reviewform.php"); // Redirect to welcome page
        exit();
    } else {
        echo "Invalid username or password";
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link to the styles.css file -->
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class='homeBody'>
        <h1>Login</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Username:<br> <input type="text" name="username" required><br>
            Password:<br> <input type="password" name="password" required><br>
            <input type="submit" value="Log In" class='button' style='margin: 5px;'>
        </form>
        
        <p>Not a registered user? Please <a href="signup.php">sign up here</a>.</p>
    </div>
</body>
</html>

