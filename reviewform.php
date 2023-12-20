<?php
// Start the session if it hasn't been started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Check if the user is not logged in
if (!isset($_SESSION["username"])) {
    echo "Not logged in. Redirecting to login.php..."; // Debug statement
    header("Location: login.php");
    exit();
} else {
    echo "Logged in as: " . $_SESSION["username"]; // Debug statement
}
?>

<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Review Submission</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        function toggleImageUpload() {
            var uploadCheckbox = document.getElementById("uploadImage");
            var imageInput = document.getElementById("image");

            if (uploadCheckbox.checked) {
                imageInput.disabled = false;
            } else {
                imageInput.disabled = true;
            }
        }
    </script>
</head>

<body>

    <div class='homeBody'>
        <h1>Submit a Dorm Review!</h1>
        <form method="post" action="dorm_review_submission.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Dorm Review Submission</legend>

                <p>
                    <label>Which dorm would you like to review?</label>
                    <select name="specificdorm">
                        <option>South Hall</option>
                        <option>District House</option>
                        <option>Shenkman Hall</option>
                        <option>1959 E St.</option>
                        <option>2109 F St.</option>
                        <option>The Dakota</option>
                        <option>FSK Hall</option>
                        <option>Fulbright Hall</option>
                        <option>International House</option>
                        <option>JBKO Hall</option>
                        <option>Mitchell Hall</option>
                        <option>Munson Hall</option>
                        <option>Philip Amsterdam Hall</option>
                    </select>
                </p>

                <p>
                    <label id="rating">Please rate the dorm on a scale of 1-10: </label>
                    <input type="number" id="rating" name="rating" min="1" max="10">
                </p>

                <p>
                    <label for="image">Upload an Image (optional):</label>
                    <input type="file" id="image" name="image" disabled>
                    <input type="checkbox" id="uploadImage" name="uploadImage" onchange="toggleImageUpload()"> Include Image
                </p>

                <p>
                    <label>Please leave your dorm review: </label>
                    <div>
                        <textarea name="dormreview" rows="20" cols="50"></textarea>
                    </div>
                </p>

                <input type="submit">
                <input type="button" value="Clear">
            </fieldset>
        </form>
    </div>

</body>

</html>
