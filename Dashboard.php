<?php
 
  $db=mysqli_connect("localhost","root","","klientet");
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
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .hide{
            display: none;
        }
        .logoutHide{
            display: none;
        }


  body {
    font-family: Arial, sans-serif;
    font-size: 14px;
  }
  
  table{
    margin: 0 auto;
    text-align: center;
  }

  th {
    background-color: #f2f2f2;
    font-weight: bold;
    padding: 10px;
    text-align: left;
  }
 
  tr {
    border-bottom: 1px solid #ddd;
  }

  tr:nth-child(even) {
    background-color:cyan;
  }

  td {
    padding: 10px;
  }

  #EDITI,#DELETE{
    margin: 1px;
    padding: 2px;
    color: black;
    font-family: Georgia, 'Times New Roman', Times, serif;
    transition: 0.3s;
  }

  #EDITI:hover,#DELETE:hover{
    background-color: black;
    color: red;
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
     </section>
<table>
  
    <tr>
     <th>Numri rendor</th>
     <th>Emri</th>
     <th>Nrtel</th>
     <th>Destinacioni</th>
     <th>Persona</th>
     <th>Nisja</th>
     <th>Arritja</th>
     <th style="background-color: red;">Vepro</th>
    </tr>

    <?php
      $i=1;
      $qry="SELECT * FROM klienti";
      $run=$db->query($qry);
      if($run->num_rows > 0){
        while($row=$run->fetch_assoc()){
          $id=$row['ID'];
       
    ?>

    <tr>
      <td><?php echo $i++; ?></td>
      <td><?php echo $row['Emri']?></td>
      <td><?php echo $row['Nr_tel']?></td>
      <td><?php echo $row['Destinacioni']?></td>
      <td><?php echo $row['Persona']?></td>
      <td><?php echo $row['Nisja']?></td>
      <td><?php echo $row['Arritja']?></td>
      <td style="background-color: red;" >
        <a href="Edit.php?ID=<?php echo $id?>" id="EDITI">Edit</a>
        <a href="Delete.php?ID=<?php echo $id;?>" id="DELETE" onclick="return confirm('Are u sure?')" >Delete</a>
      </td>
    </tr>

    <?php
  }
}
?>

  <tbody>
  </tbody>
</table>
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

    $qry="INSERT INTO klienti values (null,$emri,$nrtel,$destinacioni,$persona,$nisja,$arritja)";
  }

  
?>
