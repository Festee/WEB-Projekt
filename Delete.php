<?php
  $db=mysqli_connect("localhost","root","","klientet");

  $id=$_GET['ID'];
  $qry="DELETE FROM klienti where ID=$id";

  if(mysqli_query($db,$qry)){
    header('location:Dashboard.php');
  }
  else{
    echo mysqli_error($db);
  }
?>

