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

   $conn=mysqli_connect("localhost","root","","slider");
   $sql="SELECT * from foto";
   $all_products=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider</title>
    <link rel="stylesheet" href="./slider.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <style>
        .hide{
            display: none;
        }
        .logoutHide{
            display: none;
        }
    </style>
</head>
<body>
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
     </section>x


   <div class="container">
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <?php
            while($row=mysqli_fetch_assoc($all_products)){
          ?>
          <div class="swiper-slide"><img src="<?php echo $row["slider_foto"] ?>" id="foto"></div>
          <?php
            }
        ?>
        </div>
       
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      
      </div>
     </div>

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


   <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script> 

   <script>
    const swiper = new Swiper('.swiper', {

  loop: true,

  
  pagination: {
    el: '.swiper-pagination',
    clickable:true,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
   </script>
</body>
</html>
