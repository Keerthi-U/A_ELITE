<?php
include('db.php');
$msg='';
$msg1='';
$msg2='';
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $cpassword;
    $select = mysqli_query($conn, "SELECT `first_name`,`last_name` FROM `admin_register` WHERE `email` = '".$_POST['email']."'") or exit(mysqli_error($conn));
    if(mysqli_num_rows($select)) {
        // echo('This email is already being used');
        $msg2 = "This email is already being used";
    }
     elseif($password != $cpassword){
     
        $msg1 = "passwords doesn't match";

  }else{

    $query = "INSERT into `admin_register`( `first_name`,`last_name`, `email`, `password`) VALUES ('$first_name','$last_name','$email','$password')";
    $result = mysqli_query($conn,$query);
    //var_dump($result);
    if($result)
{
    //   header("Location: login.php");
    
    //  $_SESSION['message']="Registration successfully";
    //  $_SESSION['msg_type']="success"; 
    $msg = "Registration successfully";

}

echo $msg;
echo $msg1;
echo $msg2;
}
?>