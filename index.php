<?php
// Start the session if it hasn't been started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    
    
}
?>

<!DOCTYPE html>
<html>

<?php include 'navbar.php'; ?>

<head>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="homeBody">
        <div class="topSection"></div>
        <h1>RateMyDorm</h1>
        <h3>George Washington University</h3>
        <img src="images/LogoTransparent.png" width="20%">
        <h3>Click below to get started</h3>

        <div class="about-buttons">
            <!-- You can adjust the link or button behavior based on your requirements -->
            <a href="./signup.php">
                <button class="button">Get Started</button>
            </a>
        </div>
    </div>
</body>

</html>
