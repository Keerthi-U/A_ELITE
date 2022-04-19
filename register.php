<?php 
include_once('login-register-header.php');
?>
<?php

?>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<style>
.card-title {
font-weight: 300;
background: var(--blue);
padding: 17px;
font-size: 20px;
color: white;
}
.error{
    color: red;
    }
    #errordiv:after {
    content: "\002A";
    color: red;
    padding-left: 3px;
    font-weight: 800;
}
</style>
  <div class="forms">
            <div class="global-container">
                <div class="card login-form">
                  <div class="card-body cb">
                      <h3 class="card-title text-center"> <img src="Images/key.png" class="key"> Registration for Fresh Application</h3>
                       <div class="card-text card_content">
                       <form action="#" name="registration" id="registration">
                           <div class="form-row">
                                <div class="form-group col-sm-6"> 
                                <label for="first-name" class="frequried"  id="errordiv"> First Name</label>
                                    <input type="text" class="form-control form-control-sm" name="first_name" id="firstname" Placeholder="First Name">
                                </div>
                                <div class="form-group col-sm-6"> 
                                <label for="first-name"> Last Name</label>
                                    <input type="text" class="form-control form-control-sm" name="last_name" id="exampleInputEmail1" Placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-12"> 
                                <label for="first-name" class="erequried" id="errordiv">Email</label>
                                    <input type="email" class="form-control form-control-sm" name="email"  id="email" Placeholder="Email">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-6"> 
                                <label for="first-name"  class="prequried" id="errordiv"> Password</label>
                                    <input type="text" class="form-control form-control-sm" name="password" id="password" Placeholder="Password">
                                </div>
                                <div class="form-group col-sm-6"> 
                                <label for="first-name"> Confrim Password</label>
                                    <input type="text" class="form-control form-control-sm" name="cpassword" id="exampleInputEmail1" Placeholder="Confrim Password">
                                </div>
                            </div>
                      
                            <div class="btn-bl">
                            <button type="submit"  id="submit" class="btn btn-primary btn-block" value="Submit">Register</button>
                            </div>
                            <div class="sign-up">
                                Have already In Account <a href="login.php"> Login Here?</a>
                            </div>
                          </form>
                       </div>
                  </div>
                </div>
            </div>
         </div>
          <script>
          $(document).ready(function(){
          $('#submit').click(function(e){
            e.preventDefault();
            alert('insert');
            var formdata =new FormData(document.getElementById('registration'));
            var form_name = "register";
    
           //alert(formdata);
            $.ajax({
            url: 're_insert.php',
            data: formdata,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function(data){
                // alert(data);
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