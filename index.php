<?php

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
       
            <a href="./signup.php">
                <button class="button">Get Started</button>
            </a>
        </div>
    </div>
</body>

</html>
