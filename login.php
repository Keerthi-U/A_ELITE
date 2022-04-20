<?php 
ob_start();
include_once('login-register-header.php');
include_once('db.php');
@session_start();
if (isset($_POST['submit']))
{
   $email=$_POST['email'];
   $password=$_POST['password'];
     $query = "SELECT * FROM `registration` WHERE    password='$password' AND email ='$email'";
    $result = mysqli_query($conn,$query) or die(mysqli_error());
    $row = mysqli_fetch_assoc($result);
    $rows = mysqli_num_rows($result);
    if($rows==1)
    {
     echo $first_name = $row['first_name'];
     
     $_SESSION['first_name']=$first_name;
     header("Location:Elite.php");
    //  exit();
     }
     else
     {
        $err = "email/password is incorrect.";
    }
 }
?>

  <div class="forms">
            <div class="global-container">
                <div class="card login-form">
                  <div class="card-body cb">
                
                      <h3 class="card-title text-center"> <img src="Images/key.png" class="key"> Login for Fresh Application</h3>
                       <div class="card-text card_content">
                         <form class="form-horizontal" action="login.php" method="post">
                           <div class="form-group row ">
                                <img src="Images/user.png"  id="log_img" class="col-sm-2 mr-0 ml-0 pr-0 ">
                                <div class="col-sm-10">
                                <input type="email" class="form-control form-control-sm" name ="email" id="exampleInputEmail1" Placeholder="Email">
                                <span class="errorr"><?php  $err; ?></span>
                              </div>
                            </div>
                
                           <div class="form-group row">
                                <img src="Images/password.png" id="log_img"   class="col-sm-2  mr-0 ml-0 pr-0 ">
                                <div class="col-sm-10">
                                <input type="password"  class="form-control form-control-sm" id="exampleInputEmail1" name="password" aria-describedby="emailHelp" Placeholder="Password...">
                                </div>
                            </div>
                            <div class="capch">
                                <div class="g-recaptcha"
                                 data-sitekey="6LeAonobAAAAAH7wmcsQpB-4ffh8e_IV2sXbQV04" data-callback="enableBtn">
                                </div>
                            </div>
                             
                            <div class="btn-bl">
                                <input type="submit" id="button1" name="submit" class="btn btn-primary btn-block" value="Sign in" disabled="disabled" >
                            </div>
                            <div class="sign-up">
                                <a href="register.php"> New Student ? Register Here</a>
                                <br>
                                <a href="#">Forgot Password</a>
                            </div>
                          </form>
                       </div>
                  </div>
                </div>
            </div>
         </div>
