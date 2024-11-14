<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php

$username = "Sue";
$age = "36";
$city = "Stockholm";
//$status;

function greeting() {
   global $username;
    echo "Welcome to the site $username!";
}

function age() {
    global $age;
     echo "You are $age years old.";
 }

function city() {
    global $city;
     echo "You live in $city.";
 }

function status() {
    global $age;
//  global $status;
        if ($age >= 18 && $age < 65) {
            echo "You are an adult.";
        } else {
            echo "You are a minor.";
        }
}
?>

<body>

<div class="profile-card">
    <h1>
        <!-- PHP: Place the user name here -->
       <?php 
        echo "$username"; 
       ?>
    </h1>
    <p class="greeting">
        <!-- PHP: Display the personalized greeting here -->
        <?php
            greeting();
        ?>
    </p>
    <p>Age: 
        <!-- PHP: Display the user age here -->
        <?php
            age();
        ?>
        </p>
    <p>City: 
        <!-- PHP: Display the user city here -->
        <?php
            city();
        ?>
        </p>
    <p class="status">
        <!-- PHP: Display status based on age (Adult or Minor) -->
        <?php 
            status();
        ?>
    </p>

    <h2>Hobbies</h2>
    <ul>
        <!-- PHP: Loop through hobbies and display each hobby as a list item -->
        <?php
        $hobbies = array("Painting", "Reading", "Running", "Swimming", "Crafting");
            foreach ($hobbies as $hobby) {
                echo "<li>". $hobby . " <br>" . "</li>";
            }
    ?>
    </ul>
</div>

</body>
</html>
