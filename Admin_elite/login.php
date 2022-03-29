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
    echo  $query = "SELECT * FROM `admin_register` WHERE   email='".($email)."'";
    $result = mysqli_query($conn,$query) or die(mysqli_error());
    $row = mysqli_fetch_assoc($result);
    $rows = mysqli_num_rows($result);
   if($rows==1)
    {
     $first_name = $row['first_name'];
     $_SESSION['first_name']=$first_name;
     header("Location: index.php");
     }
     else
     {
echo "
<h3>email/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
}
        }


?>
 <div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3>PLEASE LOGIN TO APP</h3>
				<p>This is the best app ever!</p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                    <form action="login.php" method="post" id="myform">
                        
                            <div class="form-group">
                                <label class="control-label" for="username">Email</label>
                                <input type="text" title="Please enter you username" required="" value=""  name="email" id="email" class="form-control">
                                <span class="help-block small">Your unique username to app</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                <span class="help-block small">Yur strong password</span>
                            </div>
                            <div class="checkbox login-checkbox">
                                <label>
									          	<input type="checkbox" class="i-checks"> Remember me </label>
                                <p class="help-block small">(if this is a private computer)</p>
                            </div>
                            <button class="btn btn-success btn-block loginbtn"  type="submit" name="submit" id="submit">Login</button>
                            <a class="btn btn-default btn-block" href="register.php">Register</a>
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