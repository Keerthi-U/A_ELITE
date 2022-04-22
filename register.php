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

#errordiv:after {
content: "\002A";
color: red;
padding-left: 3px;
font-weight: 800;
}
input.error{
    border:1px dotted red!important;
}
.error {
    color: red;
    margin-bottom: 0;
}
/* .form-group {
    margin-bottom: 0rem;
} */
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
                                    <input type="text" class="form-control form-control-sm" name="last_name" id="lastname" Placeholder="Last Name">
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
                                    <input type="text" class="form-control form-control-sm" name="cpassword" id="cpassword" id="exampleInputEmail1" Placeholder="Confrim Password">
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
$(document).ready(function () {

$('#registration').validate({ // initialize the plugin
    rules: {
      first_name:{
        required: true,
       
      },
      lastname: "required",
      email: {
        required: true,
        email: true
      },      
      password: {
        required: true,
        minlength: 5,
      }
    },
    messages: {
      first_name: {
      required: "Enter first name",
     },      
     password: {
      required: "Enter password name",
     },     
    email: {
      required:  "Enter email name",
      email: "Please enter a valid email address.",
     },
     
    },
    submitHandler: function (form) {
        // comment out AJAX for demo
        
        $.ajax({
           
            type: 'post',
            url: 're_insert.php',
            data: $(form).serialize(),
            success: function (responseData) {

                  swal({ title:responseData,
                  button:true,
                  icon: "success",
                  timer: 2000}).then(okay => {
                            if (okay) {
                                window.location.href="login.php";
                            }
                            }); 
            },
            error: function (responseData) {
                console.log('Ajax request not recieved!');
            }
        });
        // resets fields
        $('input#first_name').val("");
        $('input#last_name').val("");
        $('input#email').val("");
        $('input#password').val("");
        $('input#cpassword').val("");
        
        // alert('form submitted via ajax');
        return false; // blocks redirect after submission via ajax
    }
});

});
          </script>