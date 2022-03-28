<?php
 include('db.php');
 if (isset($_POST['email']))
 {
   
    $email=$_POST['email'];
  
    
     $password=$_POST['password'];
     echo  $query = "SELECT * FROM `admin_register` WHERE email='$email' and password='".($password)."'";
     $result = mysqli_query($conn,$query) or die(mysql_error());
     $rows = mysqli_num_rows($result);


        if($rows==1)
        {
           // print_r($rows);
    //  $_SESSION['fname'] = $fname;
      
    // $_SESSION['id']=$id;

     header("Location: index.php");
         }
        }


?>