<?php
 session_start();

 
 if(isset($_SESSION['role'])) {  
    
    if($_SESSION['role'] == 'admin') { 
        $hide = '';
        $logoutHide = '';
    }else { 
        $hide = 'hide';
        $logoutHide = '';
    }
 }else { 
    $hide = 'hide';
    $logoutHide = 'hide'; 
 }

 $conn=mysqli_connect("localhost","root","","destinacionet");
 $sql="SELECT * from lokacioni";
 $all_products=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package</title>
    <style>
        .hide{
            display: none;
        }
        .logoutHide{
            display: none;
        }


    </style>
    
    <!-- Swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <!-- Font Awesome cdn Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!--Custom css file link -->
    <link rel="stylesheet" href="style.css">

 
</head>
<body>
    <!-- Header section start -->
    <section class="header">
        <a href="Home.php" class="logo">Travel.</a>

        <nav class="navbar">
            <a href="Home.php">Home</a>
            <a href="About.php">About</a>
            <a href="Package.php">Package</a>
            <a href="Book.php">R&B</a>
            <a href="Places.php">toVisit</a>
            <a href="Dashboard.php" class="<?=$hide?>" >Dashboard</a>
            <a href="Logout.php" class="<?=$logoutHide?>">LogOut</a>
            <a href="#"><div id="login-btn" class="fas fa-user"></div></a>
        </nav>

       <div id="menu-btn" class="fas fa-bars"></div>
     </section>
    <!-- Header section ends -->


<!-- Log in form starts-->
<div class="login-form-container">
    <div id="close-login-btn" class="fas fa-times"></div>
    <form action="LoginValidation.php" method="post">
        <h3>sign in</h3>
        <span>username</span>
        <input type="text" name="username" class="box" placeholder="enter your username" id="username">
        <span>password</span>
        <input type="password" name="password" class="box" placeholder="enter your password" id="password">
        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> remember me</label>
        </div>
        <input type="submit" value="login" name="loginBtn" class="btn" onclick="validoLogIn()">
        <p>forget password ? <a href="#">click here</a></p>
        <p>don't have an account ? <a href="Book.php">create one</a></p>
    </form>
 </div>
<!-- Log in form ends-->

  
    
<div class="heading" style="background:url(Fotot/header-bg-2.png) ">
    <h1>packages</h1>
 </div>

    <!-- Packages section starts  -->
        <section class="packages">
            <h1 class="heading-title">Top Destionations</h1>

            <div class="box-container">
                <?php
                    while($row=mysqli_fetch_assoc($all_products)){
                ?>
                <div class="box">
                    <div class="image">
                        <img src="<?php echo $row["location_image"] ?>">
                    </div>
                    <div class="content">
                        <h3><?php echo $row["location_title"] ?></h3>
                        <p><?php echo $row["location_description"] ?></p>
                        <a href="Book.php" class="btn">Book now</a>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
            <div class="load-more"><span class="btn">Load more</span></div>
        </section>

    <!-- Packages section ends -->

     <!-- Footer section starts -->
     <section class="footer">

        <div class="box-container">

            <div class="box">
             <h3>Quick Links</h3>
            <a href="/Home.php"> <i class="fas fa-angle-right"></i> Home</a>
            <a href="/About.php"> <i class="fas fa-angle-right"></i> About</a>
            <a href="/Package.php"> <i class="fas fa-angle-right"></i> Package</a>
            <a href="/Book.php"> <i class="fas fa-angle-right"></i> Book</a>
            </div>
            
            <div class="box">
               <h3>Extra Links</h3>
               <a href="#"> <i class="fas fa-angle-right"></i>Ask questions</a>  
               <a href="#"> <i class="fas fa-angle-right"></i>About us</a>
               <a href="#"> <i class="fas fa-angle-right"></i>Privacy policy</a>
               <a href="#"> <i class="fas fa-angle-right"></i>Terms of use</a>
               </div>

               <div class="box">
                <h3>Contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i>+123-465-7890</a>     
                <a href="#"> <i class="fas fa-phone"></i>+111-222-3333</a>  
                <a href="#"> <i class="fas fa-envelope"></i>festimdibrani@gmail.com</a>      
                <a href="#"> <i class="fas fa-map"></i>Prishtine,Kosove-10000</a>      
            </div> 

            <div class="box">
                <h3>Follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
            </div>
        </div>

        <div class="credit">
            Created by <span>Altin & Festi</span> | all rights deserved!
        </div>
    </section>
    <!-- Footer section ends-->

    <!-- Swiper js link-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!--Custom js file link-->
    <script src="script.js "></script>

    <?php
 //}
 ?>
