<?php
  include('db.php');
    // $form_name = $_POST["form_name"];

    // if($form_name == 'register'){
   
         $first_name=$_POST['first_name'];
         $last_name=$_POST['last_name'];
         $email=$_POST['email'];
         $password=$_POST['password'];
         $cpassword=$_POST['cpassword'];
         $user_type='2';
         $status='1';
         $cpassword;
         $select = mysqli_query($conn, "SELECT `first_name`,`last_name` FROM `registration` WHERE `email` = '".$_POST['email']."'") or exit(mysqli_error($conn));
         if(mysqli_num_rows($select)) {
             // echo('This email is already being used');
             echo  "This email is already being used";
         }
          elseif($password != $cpassword){
          echo  "passwords doesn't match";
          }else{
         $query = "INSERT into `registration`( `first_name`,`last_name`, `email`, `password`,`user_type`,`status`) VALUES ('$first_name','$last_name','$email','$password','$user_type','$status')";
         $result = mysqli_query($conn,$query);
         //var_dump($result);
         if($result)
          {
         
         echo "Registration successfully";
         }
     
    
     
     }
    // }
  
?>