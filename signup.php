<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include 'navbar.php';

$servername = "phulmoonshoots.com";
$username = "harmanjeet";
$password = "semicoloN.1984";
$dbname = "signups";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

   
    if (substr($email, -4) !== ".edu") {
        echo "Error: Email must end with .edu";
    } else {

        if (!preg_match('/^(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/', $password)) {
            echo "Error: Password must be 8 characters, contain at least one uppercase letter, one number, and one symbol.";
        } else {
            
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT); 
            $sql = "INSERT INTO signups (firstname, lastname, email, username, pass) VALUES ('$firstname', '$lastname', '$email', '$username', '$hashedPassword')";

            if ($conn->query($sql) === TRUE) {
                $_SESSION["username"] = $username; 
                header("Location: login.php"); 
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }

   
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class='homeBody'>
        <h1>Sign Up</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            First Name:<br>   <input type="text" name="firstname" required><br>
            Last Name:<br>    <input type="text" name="lastname" required><br>
            Email:<br>        <input type="email" name="email" required><br>
            Username:<br>     <input type="text" name="username" required><br>
            Password:<br>     <input type="password" name="password" required><br>
            <input type="submit" value="Sign Up" class='button' style='margin:5px;'>
        </form>
    </div>
</body>
</html>

