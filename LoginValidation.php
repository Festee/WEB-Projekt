<?php

    include_once 'Userat.php';

    if(isset($_POST['loginBtn'])){
        if(empty($_POST['username']) || empty($_POST['password'])){
            echo "Mbush te gjitha hapesirat! ";
        }
        else{
            $username=$_POST['username'];
            $password=$_POST['password'];

            $i=0;


            foreach($users as $user){
                $i++;

                if($username == $user['username'] && $password==$user['password']){
                    session_start();

                    $_SESSION['username']=$username;
                    $_SESSION['password']=$password;
                    $_SESSION['role']=$user['role'];

                    header("location:Home.php");
                    exit();
                }else{
                    if($i == sizeof($users)){
                        echo "Username ose passwordi gabim";
                        exit();
                    }
                }
            }
        }
    }

?>
