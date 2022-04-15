<?php 
include_once('login-register-header.php');
?>
  <div class="forms">
            <div class="global-container">
                <div class="card login-form">
                  <div class="card-body cb">
                      <h3 class="card-title text-center"> <img src="Images/key.png" class="key"> Login for Fresh Application</h3>
                       <div class="card-text card_content">
                         <form class="form-horizontal">
                           <div class="form-group row ">
                                <img src="Images/user.png"  id="log_img" class="col-sm-2 mr-0 ml-0 pr-0 ">
                                <div class="col-sm-10">
                                <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" Placeholder="Application Id...">
                                </div>
                            </div>
                           <div class="form-group row">
                                <img src="Images/password.png" id="log_img"   class="col-sm-2  mr-0 ml-0 pr-0 ">
                                <div class="col-sm-10">
                                <input type="password"  class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" Placeholder="Password...">
                                </div>
                            </div>
                            <div class="capch">
                                <div class="g-recaptcha"
                                 data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR">
                                </div>
                            </div>
                             
                            <div class="btn-bl">
                                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
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
