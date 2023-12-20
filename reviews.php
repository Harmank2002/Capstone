<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <style>
        .review-box {
            border-top: 1px solid #ccc;
            margin-bottom: 20px;
            padding: 10px;
        }

        .review-image {
            width: 30%;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <?php
   
    include 'navbar.php';
    ?>

    <div class="homeBody">
        <h1>Reviews</h1>
        <h3>George Washington University</h3>
        <h3>Check out reviews for the following dorm buildings:</h3>

        <div class='collapsibleContainer'>
            <button type="button" class="collapsible">South Hall</button>
            <div class="content">
                <p> About:<br> 9 Residential Floors. <br>
                    4-Person 4-bedroom (74%)<br>
                    5-Person 5-bedroom (17%)<br>
                    4-Person 3-bedroom (8%)<br>

                    Apartment style rooms with kitchen facilities, washer and dryer, and one or two private bathrooms in each unit.
                    Community room and study room located on the first floor.
                    Two levels of parking located below the building.
                    All rooms come furnished with a Twin XL bed/bed frame, desk/desk chair, and two dressers for each resident.
                </p>
                 <img src="images/south.png" width="30%" style="padding-top: 10px;"><br>
                <?php
                $servername = "phulmoonshoots.com";
                $username = "Harmanjeet";
                $password = "semicoloN.1984";
                $dbname = "dorm_reviews";

               
                $conn = new mysqli($servername, $username, $password, $dbname);
                
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                
                $sql = "SELECT review_id, rating, review, image FROM reviews WHERE dorm = 'South Hall'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='review-box'>";
                        echo "Rating: " . $row["rating"] . "<br>";
                        echo "Review: " . $row["review"] . "<br>";
                        echo "<img src='" . $row["image"] . "' class='review-image'><br>";
                        echo "</div>";
                    }
                }
                $conn->close();
                ?>
            </div>
    
<button type="button" class="collapsible">District House</button>
<div class="content">
    <p>About:<br> 12 Residential Floors. <br>
        2-Person studio (49%)<br>
        4-Person, 2 bedroom (22%)<br>
        2-Person unit with adjoined bathroom in affinity unit (29%)<br>

        Apartment style rooms with kitchen facilities and private bathrooms in each unit/affinity.
        Home to GW's affinity living spaces.
        Two basement levels of student meeting rooms and retail space.
        Dining facilities/restaurants located in the basement.
        All room comes furnished with a Twin XL bed/bed frame, desk/desk chair, and two dressers for each resident.
    </p>
    <img src="images/Districthouse.jpeg" width="30%" style="padding-top: 10px;"><br>
    <?php
    $servername = "phulmoonshoots.com";
    $username = "Harmanjeet";
    $password = "semicoloN.1984";
    $dbname = "dorm_reviews";

   
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT review_id, dorm, rating, review, image FROM reviews";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       
        while ($row = $result->fetch_assoc()) {
            if ($row['dorm'] == 'District House') {
                echo "<div class='review-box'>";
                echo "Rating: " . $row["rating"] . "<br>";
                echo "Review: " . $row["review"] . "<br>";
                echo "<img src='" . $row["image"] . "' class='review-image'><br>";
                echo "</div>";
            }
        }
    }
    $conn->close();
    ?>
</div>
<button type="button" class="collapsible">Shenkman Hall</button>
<div class="content">
    <p>About:<br> 10 Residential Floors. <br>
        Two Bedroom, 4-Person (90%)<br>
        One Bedroom, 2-Person (10%)<br>

        Shenkman Dining District located in the lower level.
        Private bathroom and kitchen facilities located in each apartment.
        Community laundry facilities located within the building.
        Two basement levels of parking below the building.
        All rooms come furnished with a Twin XL bed/bed frame, desk/desk chair, and two dressers for each resident.</p>
    <img src="images/shenkman.png" width="30%" style="padding-top: 10px;"><br>
    <?php
    $servername = "phulmoonshoots.com";
    $username = "Harmanjeet";
    $password = "semicoloN.1984";
    $dbname = "dorm_reviews";

  
    $conn = new mysqli($servername, $username, $password, $dbname);
  
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT review_id, dorm, rating, review, image FROM reviews";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      
        while ($row = $result->fetch_assoc()) {
            if ($row['dorm'] == 'Shenkman Hall') {
                echo "<div class='review-box'>";
                echo "Rating: " . $row["rating"] . "<br>";
                echo "Review: " . $row["review"] . "<br>";
                echo "<img src='" . $row["image"] . "' class='review-image'><br>";
                echo "</div>";
            }
        }
    }
    $conn->close();
    ?>
</div>

               <button type="button" class="collapsible">1959 E St.</button>
<div class="content">
    <p>About:<br> 9 Residential Floors. <br>
        2 bedroom 4-person (72%)<br>
        3 bedroom 5-person (23%)<br>
        Single unit with kitchen (5%)<br>

        Kitchen facilities, private bathrooms, and private laundry within each room.
        11th floor rooftop deck that overlooks the Washington Monument and US Capitol Building.
        All rooms come furnished with a Twin XL bed/bed frame, desk/desk chair, and two dressers for each resident.</p>
    <img src="images/1959est.png" width="30%" style="padding-top: 10px;"><br>
    <?php
    $servername = "phulmoonshoots.com";
    $username = "Harmanjeet";
    $password = "semicoloN.1984";
    $dbname = "dorm_reviews";

   
    $conn = new mysqli($servername, $username, $password, $dbname);
 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT review_id, dorm, rating, review, image FROM reviews";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       
        while ($row = $result->fetch_assoc()) {
            if ($row['dorm'] == '1959 E St.') {
                echo "<div class='review-box'>";
                echo "Rating: " . $row["rating"] . "<br>";
                echo "Review: " . $row["review"] . "<br>";
                echo "<img src='" . $row["image"] . "' class='review-image'><br>";
                echo "</div>";
            }
        }
    }
    $conn->close();
    ?>
</div>

                <button type="button" class="collapsible">2109 F St.</button>
<div class="content">
    <p>About:<br> 4 Residential Floors. <br>
        2-Person, Studio (100%)<br>

        Private bathroom and kitchen in each room.
        Apartment-style rooms.
        Laundry facilities located in the basement.
        All rooms come furnished with a Twin XL bed/bed frame, desk/desk chair, and two dressers for each resident.</p>
    <img src="images/2109fst.png" width="30%" style="padding-top: 10px;"><br>
    <?php
    $servername = "phulmoonshoots.com";
    $username = "Harmanjeet";
    $password = "semicoloN.1984";
    $dbname = "dorm_reviews";

   
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT review_id, dorm, rating, review, image FROM reviews";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        while ($row = $result->fetch_assoc()) {
            if ($row['dorm'] == '2109 F St.') {
                echo "<div class='review-box'>";
                echo "Rating: " . $row["rating"] . "<br>";
                echo "Review: " . $row["review"] . "<br>";
                echo "<img src='" . $row["image"] . "' class='review-image'><br>";
                echo "</div>";
            }
        }
    }
    $conn->close();
    ?>
</div>

                <button type="button" class="collapsible">The Dakota</button>
<div class="content">
    <p>About:<br> 10 Residential Floors. <br>
        4-Person, 2 bedroom (44%)<br>
        3-Person, 2 bedroom (17%)<br>
        3-Person, 1 bedroom (14%)<br>
        2-Person, 1 bedroom (16%)<br>
        Single unit with kitchen (9%)<br>

        Apartment-style rooms with a private kitchen and bathroom.
        Laundry facilities located on the first floor of the building.
        All rooms come furnished with a Twin XL bed/bed frame, desk/desk chair, and two dressers for each resident.</p>
    <img src="images/dakota.png" width="30%" style="padding-top: 10px;"><br>
    <?php
    $servername = "phulmoonshoots.com";
    $username = "Harmanjeet";
    $password = "semicoloN.1984";
    $dbname = "dorm_reviews";

  
    $conn = new mysqli($servername, $username, $password, $dbname);
 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT review_id, dorm, rating, review, image FROM reviews";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        while ($row = $result->fetch_assoc()) {
            if ($row['dorm'] == 'The Dakota') {
                echo "<div class='review-box'>";
                echo "Rating: " . $row["rating"] . "<br>";
                echo "Review: " . $row["review"] . "<br>";
                echo "<img src='" . $row["image"] . "' class='review-image'><br>";
                echo "</div>";
            }
        }
    }
    $conn->close();
    ?>
</div>

                <button type="button" class="collapsible">FSK Hall</button>
<div class="content">
    <p>About:<br> 8 Residential Floors. <br>
        Single Unit with Kitchen (19%)<br>
        Studio, 2-Person Unit (74%)<br>
        One Bedroom, 3-Person Units (7%)<br>

        Apartment-style rooms with a kitchen and private bathroom facilities in each unit.
        Laundry facilities, bike storage, and lounged located on the basement level.
        All rooms come furnished with a twin XL bed/bed frame, desk, desk chair, microwave, and 2 dressers for each resident.</p>
    <img src="images/fsk.png" width="30%" style="padding-top: 10px;"><br>
    <?php
    $servername = "phulmoonshoots.com";
    $username = "Harmanjeet";
    $password = "semicoloN.1984";
    $dbname = "dorm_reviews";

   
    $conn = new mysqli($servername, $username, $password, $dbname);
   
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT review_id, dorm, rating, review, image FROM reviews";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      
        while ($row = $result->fetch_assoc()) {
            if ($row['dorm'] == 'FSK Hall') {
                echo "<div class='review-box'>";
                echo "Rating: " . $row["rating"] . "<br>";
                echo "Review: " . $row["review"] . "<br>";
                echo "<img src='" . $row["image"] . "' class='review-image'><br>";
                echo "</div>";
            }
        }
    }
    $conn->close();
    ?>
</div>

<button type="button" class="collapsible">Fulbright Hall</button>
<div class="content">
    <p>About:<br> 8 Residential Floors. <br>
        Studio, 3-Person Units (100%)<br>

        Apartment-style rooms with a kitchen and private bathroom within the unit.
        Two lounges and laundry facilities are located in the basement level of the building.
        Outdoor bike racks located by the entrance of the building.
        All rooms come furnished with a twin XL bed/bed frame, desk/desk chair, fridge, and 2 dressers for each resident.</p>
    <img src="images/fulbright.png" width="30%" style="padding-top: 10px;"><br>
    <?php
    $servername = "phulmoonshoots.com";
    $username = "Harmanjeet";
    $password = "semicoloN.1984";
    $dbname = "dorm_reviews";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
  
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT review_id, dorm, rating, review, image FROM reviews";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        
        while ($row = $result->fetch_assoc()) {
            if ($row['dorm'] == 'Fulbright Hall') {
                echo "<div class='review-box'>";
                echo "Rating: " . $row["rating"] . "<br>";
                echo "Review: " . $row["review"] . "<br>";
                echo "<img src='" . $row["image"] . "' class='review-image'><br>";
                echo "</div>";
            }
        }
    }
    $conn->close();
    ?>
</div>

<button type="button" class="collapsible">International House</button>
<div class="content">
    <p>About:<br> 9 Residential Floors. <br>
        2-Person studio (53%)<br>
        2-Person studio with balcony (35%)<br>
        Single units with private bathroom & micro-fridge (6%)<br>
        Single units with kitchen (6%)<br>

        Private bathroom located in each apartment.
        Laundry facilities and community room located in the basement.
        Only GW residence hall that has balcony units available to students.
        All rooms come furnished with a Twin XL bed/bed frame, desk/desk chair, and two dressers for each resident.</p>
    <img src="images/ihouse.png" width="30%" style="padding-top: 10px;"><br>
    <?php
    $servername = "phulmoonshoots.com";
    $username = "Harmanjeet";
    $password = "semicoloN.1984";
    $dbname = "dorm_reviews";
  
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT review_id, dorm, rating, review, image FROM reviews";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      
        while ($row = $result->fetch_assoc()) {
            if ($row['dorm'] == 'International House') {
               echo "<div class='review-box'>";
                echo "Rating: " . $row["rating"] . "<br>";
                echo "Review: " . $row["review"] . "<br>";
                echo "<img src='" . $row["image"] . "' class='review-image'><br>";
                echo "</div>";
            }
        }
    }
    $conn->close();
    ?>
</div>

<button type="button" class="collapsible">JBKO Hall</button>
<div class="content">
    <p>About:<br> 8 Residential Floors. <br>
        Studio, 2-Person (76%)<br>
        One Bedroom, 3-Person (12%)<br>
        Studio, 3-Person (9%)<br>
        Single Units with Kitchen (3%)<br>

        Each apartment has its own fully equipped kitchen with a refrigerator, stoves/oven, sink, and microwave.
        Private bathrooms in each unit.
        Laundry, bike storage, and lounge located on the basement level.
        All rooms come furnished with a regular twin bed/bedframe, desk/desk chair, and dressers for each resident (Twin XL mattresses are not available for JBKO).</p>
    <img src="images/jbko.png" width="30%" style="padding-top: 10px;"><br>
    <?php
    $servername = "phulmoonshoots.com";
    $username = "Harmanjeet";
    $password = "semicoloN.1984";
    $dbname = "dorm_reviews";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT review_id, dorm, rating, review, image FROM reviews";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        
        while ($row = $result->fetch_assoc()) {
            if ($row['dorm'] == 'JBKO Hall') {
                echo "<div class='review-box'>";
                echo "Rating: " . $row["rating"] . "<br>";
                echo "Review: " . $row["review"] . "<br>";
                echo "<img src='" . $row["image"] . "' class='review-image'><br>";
                echo "</div>";
            }
        }
    }
    $conn->close();
    ?>
</div>

<button type="button" class="collapsible">Mitchell Hall</button>
<div class="content">
    <p>About:<br> 8 Residential Floors. <br>
        2-person unit with a private bath (4%)<br>
        Single units with a common bathroom(83%)<br>
        Single units with a private bathroom(5%)<br>
        Two-bedroom, 2-person unit with a private bathroom(8%)<br>

        One study lounge located on the first floor of the building.
        Outdoor courtyard that can be accessed through the basement of the building.
        Rooftop lounge that can be accessed from 9 AM - 9 PM daily.
        Community kitchen located on floors 2-8.
        Indoor bike room and laundry facilities are located in the basement.
        All rooms come furnished with a Twin XL bed/bedframe, desk, desk chair, microfridge, and 2 dressers for each resident.</p>
    <img src="images/mitchell.png" width="30%" style="padding-top: 10px;"><br>
    <?php
    $servername = "phulmoonshoots.com";
    $username = "Harmanjeet";
    $password = "semicoloN.1984";
    $dbname = "dorm_reviews";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
   
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT review_id, dorm, rating, review, image FROM reviews";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        
        while ($row = $result->fetch_assoc()) {
            if ($row['dorm'] == 'Mitchell Hall') {
             echo "<div class='review-box'>";
                echo "Rating: " . $row["rating"] . "<br>";
                echo "Review: " . $row["review"] . "<br>";
                echo "<img src='" . $row["image"] . "' class='review-image'><br>";
                echo "</div>";
            }
        }
    }
    $conn->close();
    ?>
</div>

<button type="button" class="collapsible">Munson Hall</button>
<div class="content">
    <p>About:<br> 8 Residential Floors. <br>
        Studio, 2-Person (18%)<br>
        Studio, 3-Person (58%)<br>
        One bedroom, 3-Person (24%)<br>

        Kitchen facilities and private bathrooms in each unit.
        Laundry and bike storage located on the basement level.
        All rooms come furnished with a Twin XL bed/bedframe, desk, desk chair, fridge, and 2 dressers for each resident.</p>
    <img src="images/munson.png" width="30%" style="padding-top: 10px;"><br>
    <?php
    $servername = "phulmoonshoots.com";
    $username = "Harmanjeet";
    $password = "semicoloN.1984";
    $dbname = "dorm_reviews";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT review_id, dorm, rating, review, image FROM reviews";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        
        while ($row = $result->fetch_assoc()) {
            if ($row['dorm'] == 'Munson Hall') {
                echo "<div class='review-box'>";
                echo "Rating: " . $row["rating"] . "<br>";
                echo "Review: " . $row["review"] . "<br>";
                echo "<img src='" . $row["image"] . "' class='review-image'><br>";
                echo "</div>";
            }
        }
    }
    $conn->close();
    ?>
</div>
               <button type="button" class="collapsible">Philip Amsterdam Hall</button>
<div class="content">
    <p>About:<br> 9 Residential Floors. <br>
        4-Person two-bedroom (95%)<br>
        2-Person one-bedroom (5%)<br>

        Apartment-style rooms with private bathrooms and kitchen facilities are located in each apartment.
        Study lounge located within the building.
        CLRE central staff office is located in the entranceway of the building.
        Two levels of parking below the building.
        All rooms come furnished with a Twin XL bed/bed frame, desk/desk chair, and two dressers for each resident.</p>
    <img src="images/amdam.png" width="30%" style="padding-top: 10px;"><br>
    <?php
    $servername = "phulmoonshoots.com";
    $username = "Harmanjeet";
    $password = "semicoloN.1984";
    $dbname = "dorm_reviews";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT review_id, dorm, rating, review, image FROM reviews";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       
        while ($row = $result->fetch_assoc()) {
            if ($row['dorm'] == 'Philip Amsterdam Hall') {

             echo "<div class='review-box'>";
                echo "Rating: " . $row["rating"] . "<br>";
                echo "Review: " . $row["review"] . "<br>";
                echo "<img src='" . $row["image"] . "' class='review-image'><br>";
                echo "</div>";
            }
        }
    }
    $conn->close();
    ?>
</div>

            </div>
        </div>
        
    
       <script>
            var coll = document.getElementsByClassName("collapsible");
            var i;
            
            for (i = 0; i < coll.length; i++) {
              coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                  content.style.display = "none";
                } else {
                  content.style.display = "block";
                }
              });
            }
            </script>

    </body>
</html>