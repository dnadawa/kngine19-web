<?php

session_start();
if($_SESSION['log']==0||$_SESSION['log']==""){
    header("Location: admin/login.html");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin-Kngine 19</title>
    <link rel="icon" type="image/png" href="image/favicon.png"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link href="css/bootstraps.css" rel="stylesheet">

    <link href="css/lnricons.css" rel="stylesheet">
    <link href="css/et-line.css" rel="stylesheet">
    <link href="css/ionicons.css" rel="stylesheet">

    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/animations.css">

    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<!--header start here -->

<!--header end here-->

<!--page title section-->
<section class="inner_cover parallax-window" data-parallax="scroll" data-image-src="image/bg/bg-img.png">
    <div class="overlay_dark"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="inner_cover_content">
                    <h3 style="font-family:'litsans';">
                       Administrator
                    </h3>
                </div>
            </div>
        </div>
</section>
<!--page title section end-->

<section class="pt100 pb100">
        <div class="container">

    
            <div class="event_box">
                <img src="images/events/event2.png" alt="event">
                <div class="event_info">
                    <div class="event_title">
                        <h4>Cyber Combat - Inter School Gaming Competition</h4>
                    </div>

                      <a href="admin/cybercombat.php" target="_blank">  <button class="contact100-form-btn" id="myBtn">
                            View Summery
                        </button></a>
 </div>
    
                        <div class="event_box">
                                <img src="images/events/event3.png" alt="event">
                                <div class="event_info">
                                    <div class="event_title">
                                        <h4>deXigner - Inter School Graphic Competition</h4>
                                    </div>  
                            
                              
                                    <a href="admin/dezigner.php" target="_blank">  <button class="contact100-form-btn" id="myBtn">
                                View Summery
                            </button>
    
                            </div>
    
                    <div class="event_box">
                                    <img src="images/events/event4.png" alt="event">
                                    <div class="event_info">
                                        <div class="event_title">
                                            <h4>Code_com - Inter School Programming Competition</h4>
                                        </div>                       
                                        <a href="admin/codecom.php" target="_blank">  <button class="contact100-form-btn" id="myBtn">
                                            View Summery
                                        </button></a>
                                </div>

                                <div class="event_box">
                                        <img src="images/events/event5.png" alt="event">
                                        <div class="event_info">
                                            <div class="event_title">
                                                <h4>web dezign - Inter School Web Designing Competition</h4>
                                            </div>                       

                                    
                                            <a href="admin/webdizign.php" target="_blank">  <button class="contact100-form-btn" id="myBtn">
                                                    View Summery
                                                </button>
                                    </div>
    
                                    </div>
                                        
                                    
    
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    </section>
<!--footer start -->

    
    <!--footer end -->

<!-- jquery -->
<script src="assets/js/jquery.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstraps.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<!--slick carousel -->
<script src="assets/js/owl.carousel.min.js"></script>
<!--parallax -->
<script src="assets/js/parallax.min.js"></script>
<!--Counter up -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!--Counter down -->
<script src="assets/js/jquery.countdown.min.js"></script>
<!-- WOW JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Custom js -->
<script src="assets/js/main.js"></script>
</body>
</html>