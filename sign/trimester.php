<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main-style/trim.css">
    <title>Linda Mama</title>
</head>
<body>

    <div class="header">
        <div class="header-1"><img src="./assets/home-icon.png" alt=""></div>
        <div class="header-2"><img src="./assets/trimester.png" alt=""></div>  
        <div class="header-5"><img src="./assets/calendar-icon.png" alt=""></div>
    </div>
    <div class="trim-main-content">
        <div class="trim-main-content-1">
            <div class="trim-content-imgs"><img src="./assets/rectangle.png" alt=""></div>
            <div class="trim-content-imgs"><img src="./assets/rectangle.png" alt=""></div>
            <div class="trim-content-imgs"><img src="./assets/rectangle.png" alt=""></div>
        </div>
        <div class="trim-main-content-2">
           <div class="trim-content-imgs"><img src="./assets/rectangle.png" alt=""></div>
        </div>
    </div>
    <div class="trim-content-text">
        <img class="trim-content-img-1" src="./assets/Diet-Plan.png" alt="">
        <img class="trim-content-img-2" src="./assets/Fetal-Development.png" alt="">
        <img class="trim-content-img-3" src="./assets/Workouts.png" alt="">
        <a href="signs.php"><img class="trim-content-img-4" src="./assets/Signs-Symptoms.png" alt=""></a>
    </div>
    <div class="side-content">
            <img class="side-content-img-1" src="./assets/speaker.png" alt="">
            <img class="side-content-img-2" src="./assets/live-chat.png" alt="">
            <img class="side-content-img-3" src="./assets/customer-serve.png" alt="">
    </div>
</body>
</html>