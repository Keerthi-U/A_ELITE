<?php
include_once('db.php');
include('header.php');

?>
<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center custom-login">
				<h3>Registration</h3>
				<p>This is the best app ever!</p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form form action="" method="post" id="myform">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>First Name</label>
                                    <input class="form-control" type="text" id="name" name="first_name">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Last Name</label>
                                    <input  class="form-control"type="text" id="name" name="last_name">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Email</label>
                                    <input type="email" id="mail" name="email" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input class="form-control"type="password" id="password"  name="password">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Confirm Password</label>
                                    <input class="form-control"type="password" id="password"  name="cpassword">
                                </div>
                                <!-- <div class="form-group col-lg-6">
                                    <label>Repeat Email Address</label>
                                    <input class="form-control">
                                </div> -->
                                <div class="checkbox col-lg-12">
                                    <input type="checkbox" class="i-checks" checked> Sigh up for our newsletter
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn"  type="submit" name="submit" id="submit">Register</button>
                                <button class="btn btn-default" >Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
			</div>


        <?php
        include_once('db.php');
        include('footer.php');

        ?>
       <script>
         

       $(document).ready(function(){
       $('#submit').click(function(e){
            e.preventDefault();
            alert('insert');
            var formdata =new FormData(document.getElementById('myform'));
    
           //alert(formdata);
          $.ajax({
          url: 're_insert.php',
          data: formdata,
          processData: false,
          contentType: false,
          type: 'POST',
          success: function(data){
              //alert(data);
              swal({ title: data,
                        text: "You clicked the button!",
                        icon: "success"}).then(okay => {
                        if (okay) {
                            window.location.href="login.php";
                        }
                        }); 
             
          }
          });

        });
       });
       </script>