<?php
include_once('db.php');
include('header.php');

?>
<?php
session_start();
include_once('db.php');

if (isset($_POST['submit']))
{
   $email=$_POST['email'];
 
  
    $password=$_POST['password'];
    echo $query = "SELECT * FROM `admin_register` WHERE   email='".($email)."'";
    $result = mysqli_query($conn,$query) or die(mysqli_error());
    $row = mysqli_fetch_assoc($result);
    $rows = mysqli_num_rows($result);
   if($rows==1)
    {
     $first_name = $row['first_name'];
     $_SESSION['first_name']=$first_name;
     header("Location: index.php");
     //exit();
     }
     else
     {
        $err = "email/password is incorrect.";
    }
 }


?>
<style>
    .err{
        color:red;
    }
</style>
 <div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3>Elite Admin Portal </h3>
				<p>Login</p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                    <form action="login.php" method="post" id="myform">
                            <div class="form-group">
                                <label class="control-label" for="username">Email</label>
                                <input type="text" title="Please enter you username" required="" value=""  name="email" id="email" class="form-control">
                                <span class="help-block small">Enter Your Email</span>
                                <span class="err"><?php echo $err;?></span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                <span class="help-block small">Your strong password</span>
                            </div>
                            <div class="checkbox login-checkbox" style="margin-left: 22px;">
                                <label>
								<input type="checkbox" class="i-checks"> Remember me </label>
                                
                            </div>
                            <input type="submit" class="btn btn btn-success btn-block loginbtn" name="submit" id="submit" value="Login" />
                        </form>
                    </div>
                </div>
			</div>
		
		</div>   
    </div>
 <?php
include_once('db.php');
include('footer.php');
?>