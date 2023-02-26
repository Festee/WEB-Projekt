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

 $conn=mysqli_connect("localhost","root","","about");
 $sql="SELECT * from reviews";
 $all_products=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>
   <style>
       .hide{
            display: none;
        }
        .logoutHide{
            display: none;
        }


   </style>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="Home.php" class="logo">travel.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">R&B</a>
      <a href="Places.php">toVisit</a>
      <a href="Dashboard.php" class="<?=$hide?>" >Dashboard</a>
      <a href="Logout.php" class="<?=$logoutHide?>">LogOut</a>
      <a href="#"><div id="login-btn" class="fas fa-user"></div></a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

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

<div class="heading" style="background:url(Fotot/header-bg-1.png) no-repeat">
   <h1>about us</h1>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="Fotot/about-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>why choose us?</h3>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure numquam nulla iusto corporis dolor commodi libero, vitae obcaecati optio rerum ab culpa nesciunt, earum mollitia quasi ipsam non. Aliquid, iure.</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid rerum, delectus voluptate aliquam quaerat iusto repellendus error nulla ab atque.</p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destinations</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>affordable price</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service</span>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading-title"> clients reviews </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">
      <?php
               while($row=mysqli_fetch_assoc($all_products)){
            ?>
         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p><?php echo $row["review_description"] ?></p>
            <h3><?php echo $row["review_client"] ?></h3>
            <span>traveler</span>
            <img src="<?php echo $row["review_image"] ?>" alt="">
         </div>
         <?php
               }
      ?>
      </div>
   </div>

</section>

<!-- reviews section ends -->


<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i>festimdibrani@gmail.com</a>
         <a href="#"> <i class="fas fa-map"></i> Prishtine,Kosove-10000 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>Altin & Festi</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->



<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>

<?php
 //}
 ?>
