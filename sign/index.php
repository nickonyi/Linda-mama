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
    <link rel="stylesheet" href="./main-style/style.css">
    <title>Linda Mama</title>
</head>
<body>
    <div class="container">
        <button class="btn-log"><a href="logout.php">Logout</a></button>
        <div class="header">
            <div class="header-1"><img src="./assets/home-icon.png" alt=""></div>
            <div class="linda-mama-container-header">
            <div class="header-2"><img src="./assets/Mama-Care.png" alt=""></div> 
            <div class="header-3"><img src="./assets/slasher.png" alt=""></div> 
            <div class="header-4"> <a href="baby-care.php"><img src="./assets/Baby-Care.png" alt=""></a></div>
            </div>
            <div class="header-5"><img src="./assets/calendar-icon.png" alt=""></div>
        </div>

        <div class="main-content">
            <div class="main-content-img">
                <img class="main-img" src="./assets/main-img.png" alt="">
                <div class="small-content-img-1">
                    <a href="trimester.php">
                <img class="side-img-1-a" src="./assets/trim.png" alt="">
                <img class="side-img-2-a" src="./assets/TRIMESTERS.png" alt="">
                </a>
                </div>
                <div class="small-content-img-2">
                <img class="side-img-1-b" src="./assets/self-d.png" alt="">
                <img class="side-img-2-b" src="./assets/self-discovery.png" alt="">
                </div>
                <div class="small-content-img-3">
                <img class="side-img-1-c" src="./assets/mental-aware.png" alt="">
                <img class="side-img-2-c" src="./assets/mental-awareness.png" alt="">
                </div>
                <div class="small-content-img-4">
                <img class="side-img-1-d" src="./assets/growth-check.png" alt="">
                <img class="side-img-2-d" src="./assets/growth-checker.png" alt="">
                </div>
                
            </div>
        </div>
        <div class="side-content">
            <img class="side-content-img-1" src="./assets/speaker.png" alt="">
            <img class="side-content-img-2" src="./assets/live-chat.png" alt="">
            <img class="side-content-img-3" src="./assets/customer-serve.png" alt="">
        </div>
        
    </div>
</body>
</html>