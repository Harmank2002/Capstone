<?php
session_start();

include 'navbar.php';


// MySQL connection parameters
$servername = "phulmoonshoots.com";
$username = "Harmanjeet";
$password = "semicoloN.1984";
$dbname = "dorm_reviews";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dorm = mysqli_real_escape_string($conn, $_POST["specificdorm"]);
    $rating = mysqli_real_escape_string($conn, $_POST["rating"]);
    $review = mysqli_real_escape_string($conn, $_POST["dormreview"]);

    // Check if no file was uploaded (error code 4)
    if (!isset($_FILES["image"]) || $_FILES["image"]["error"] == 4) {
        $targetFile = ""; // Set an empty string or any default value
    } else {
        // Handle image upload
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if the file is an actual image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check === false) {
            echo "Error: File is not an image.";
            $uploadOk = 0;
        }

        // Allow only certain file formats
        $allowedFormats = ["jpg", "jpeg", "png", "gif"];
        if (!in_array($imageFileType, $allowedFormats)) {
            echo "Error: Only JPG, JPEG, PNG, and GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Error uploading image.";
        } else {
            // Move the uploaded file to the specified directory
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                echo "Image uploaded successfully.";
            } else {
                echo "Error uploading image.";
            }
        }
    }

    // Insert data into the reviews table with the image path
    $sql = "INSERT INTO reviews (dorm, rating, review, image) VALUES ('$dorm', '$rating', '$review', '$targetFile')";

    if (mysqli_query($conn, $sql)) {
        // Data insertion successful
        echo '<div class="homeBody">';
        echo '<div class="topSection"></div>';
        echo '<h1>RateMyDorm</h1>';
        echo '<h3>Your review has been submitted.</h3>';
        echo '</div>';
    } else {
        // Error in data insertion
        echo '<div class="homeBody">';
        echo '<div class="topSection"></div>';
        echo '<h1>RateMyDorm</h1>';
        echo '<h3>Error submitting your review. Please try again.</h3>';
        echo '</div>';
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close connection
mysqli_close($conn);
?>


