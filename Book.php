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

 $db=mysqli_connect("localhost","root","","klientet");
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Booking</title>
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

<div class="heading" style="background:url(Fotot/header-bg-3.png) no-repeat">
   <h1>Register & book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Register & book your trip!</h1>

   <form method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="emri" id="name">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="text" placeholder="enter your number" name="nrtel" id="nrtel">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="destinacioni" id="location">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="text" placeholder="number of guests" name="persona" id="persona">
         </div>
         <div class="inputBox">
            <span>Nisja :</span>
            <input type="date" name="nisja">
         </div>
         <div class="inputBox">
            <span>Arritja :</span>
            <input type="date" name="arritja">
         </div>
      </div>

      <input onclick="validoBook()" type="submit" value="Submit" class="btn" name="submit" > 

   </form>

</section>

<!-- booking section ends -->

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
         <a href="#"> <i class="fas fa-envelope"></i> festimdibrani9@gmail.com </a>
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
</html>
<?php
 if(isset($_POST['submit'])){
   $emri=$_POST['emri'];
   $nrtel=$_POST['nrtel'];
   $destinacioni=$_POST['destinacioni'];
   $persona=$_POST['persona'];
   $nisja=$_POST['nisja'];
   $arritja=$_POST['arritja'];

   $qry="INSERT INTO klienti values(null,'$emri','$nrtel','$destinacioni','$persona','$nisja','$arritja')";
 }



 if(mysqli_query($db,$qry)){
   echo '<script>aler("USer registered successfully.");</script>';
   header('location:Book.php');
 }
 else{
   echo mysqli_error($db);
 }
 ?>
