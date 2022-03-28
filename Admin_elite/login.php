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
// echo $first_name;
// exit();
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


       
   <!-- <form action="login.php" method="post" id="myform">
       
        <fieldset>
          
          <legend><span class="number">1</span> Your Basic Info</legend>
        
          <label for="email">Name:</label>
          <input type="text" id="mail" name="name">
        
          <label for="email">Email:</label>
          <input type="email" id="mail" name="email">
       
          <label for="password">Password:</label>
          <input type="password" id="password"  name="password">
        
       
          
        </fieldset>
      
         <div class="bt_div">
         <button type="submit" name="submit" id="submit" >Sign Up</button>
         </div>
      
        
       </form> -->
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


       <script>
         

    //    $(document).ready(function(){

    //     $('#submit').click(function(e){
    //         e.preventDefault();
    //         alert('insert');
    //         var formdata =new FormData(document.getElementById('myform'));
    
    //        alert(formdata);
    //       $.ajax({
    //       url: 'login_insert.php',
    //       data: formdata,
    //       processData: false,
    //       contentType: false,
    //       type: 'POST',
    //       success: function(data){
    //           header("Location:index.php");
    //       }
    //       });

    //     });
    //    });
       </script>
       <?php
include_once('db.php');
include('footer.php');

?>