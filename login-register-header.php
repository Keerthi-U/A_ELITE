<?php 
include_once('header.php');
?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://www.google.com/recaptcha/enterprise.js?render=6LeAonobAAAAAH7wmcsQpB-4ffh8e_IV2sXbQV04"></script>

<style>
:root {
  --blue:#31568b;
  --white: #ffffff;
}
body{
    /* font-family: 'Beau Rivage'; */
font-family: 'Montserrat', sans-serif;
/* font-family: 'Rubik Moonrocks'; */
}
.sc-form{
    display:flex;
    align-items: center;
    
    padding-left: 111px;

    /* padding-left: 87px; */
}
.nav_content {
    padding-left: 12px;
}
.nav_content>p{
    margin-bottom:0px;
}
.nav_content>h4{
    font-size: 26px;
    margin-bottom: 0px;
    background: -webkit-linear-gradient(#574fa6, #c88cbc);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    /* color: var(--blue); */
    font-weight: 800;
    font-family: 'Ms Madi', cursive;
    /* font-family: 'Updock', cursive; */
    /* font-family: 'Whisper', cursive; */
    text-transform: uppercase;
}
.nav_content >p{
    font-size: 13.5px;
}
.header_img{
    width: 400px;
    height:100px;
}
.second-item {
    display: flex;
}
.bg-light {
    /* background-color: #fff!important; */
    }
.navbar{
    display:list-item;
}
.navbar-nav {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    padding-left: 0;
    justify-content: space-between;
    align-items: center;
}
.second-item {
    display: flex;
    align-items: center;
}
.navbar-nav {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    padding-left: 0;
    justify-content: space-between;
}
.bg-blue{
    background-color:var(--blue);
}
.second-secont {
    padding: 7px 0px;
}
.form_register {
    /* display: flex; */
    display: inline-flex;
    column-gap: 0.5rem;
    align-items: center;
    padding-left: 21px;
}
.form_register>p{
    margin-bottom: 0rem;
}
.schocla {
    display: flex;
    background-color: #fff;
    box-shadow: 0 1px 15px 0 rgb(25 61 192 / 32%);
    height: 74px;
    align-items: center;
}
 
.global-container{
	height:100%;
	display: flex;
	align-items: center;
	justify-content: center;
	/* background-color: #f5f5f5; */
}

form{
	padding-top: 10px;
	font-size: 14px;
	margin-top: 30px;
}

.card-title{ 
    font-weight: 300;
    background: var(--blue);
    padding: 17px;
    font-size: 22px;
    color: white;
 }

.btn{
	font-size: 14px;
	margin-top:20px;
}


.login-form{ 
    width: 386px;
	margin:20px;
    margin-top: 52px;
    box-shadow: 0 1px 15px 0 rgb(25 61 192 / 32%);
}
.t-r{
    padding-right: 31px;
}
.sign-up{
	text-align:center;
	padding:20px 0 0;
}

.alert{
	margin-bottom:-30px;
	font-size: 13px;
	margin-top:20px;
}
.btn-block {
    display: block;
    width: 45%!important;
    background-color:var(--blue);
} 
.btn-bl {
    display: flex;
    justify-content: center;
} 
#log_img{
    max-width:38px!important;
    padding-top: 4px;
}
.cb {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    min-height: 1px;
    padding: 0rem;
}
.card_content{
    padding: 3px 1.25rem 1.25rem 1.25rem;
}
img.key {
    width: 25px;
    margin-right: 12px;
}
.capch {
    /* width: 217px; */
    margin-left: 38px;
}
.form-control-sm {
    height: calc(1.5em + 0.5rem + 2px);
    padding: 0.25rem 0.5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: 0.2rem;
    text-indent: 10px;
}
.second_nav{
    display:flex;
    justify-content:right;
}
.form_register >p >a {
    color:white;
    font-size: 14px;
}
.nav_img{
    width: 17px;
}
a:hover{
    text-decoration:none!important;
}
.btn-primary.disabled, .btn-primary:disabled {
    color: #fff;
    background-color: var(--blue); 
     border-color: #007bff;
    opacity: 0.5;
}
@media (min-width: 576px){
.form-inline .form-control {
    display: inline-block;
    width: 85%;
    vertical-align: middle;
}}
</style>

            <nav class="navbar navbar-expand-sm bg-light">
            <ul class="navbar-nav">
                <li class="nav-item sc-form">
                <a class="nav-link" href="#"><img src="Images/Elite_logo.svg"></a>
                <div class="nav_content">
                <h4>Scholarship Portal</h4>
                <!-- <p> Ministry Of Electronics & Information Technology,<br>
                    Government of India</p> -->

                </div>
                </li>
                <li class="nav-item">
              
                <!-- <a class="nav-link" href="#"><img src="Admin_elite/img/logo/sch.jpg" class="header_img"></a> -->
                </li>
                <!-- <li class="nav-item ">
                      <div class="form_register">
                        <div class="imd_div">
                        <img src="Admin_elite/img/logo/login.png">
                        </div>
                        <p><a href="login.php">Login to Apply</a></p>
                       </div>
                        <div class="form_register ">
                        <div class="imd_div">
                        <img src="Admin_elite/img/logo/personal1.png">
                        </div>
                        <p><a href="register.php">New User? Register</a></p>
                        </div>
                   
                </li> -->
            </ul>
            </nav>
            <nav class="navbar navbar-expand-sm bg-blue">
            <ul class="navbar-nav second_nav">
            <li class="nav-item ">
                      <div class="form_register">
                        <div class="imd_div">
                        <img src="Images/login2.png" class="nav_img">
                        </div>
                        <p><a href="login.php">Login to Apply</a></p>
                      </div>
                        <div class="form_register ">
                        <div class="imd_div">
                        <img src="Images/user2.png" class="nav_img">
                        </div>
                        <p><a href="register.php">New User? Register</a></p>
                        </div>
                   
                </li>
            </ul>
            </nav>

            <!-- <div class="schocla">
            <div class="container">
            <div class="second-secont">
                <div class="row">
                    <div class="col-lg-4 text-right t-r">
                        <div class="form_register ">
                        <div class="imd_div">
                        <img src="Admin_elite/img/logo/personal1.png">
                        </div>
                        <p><a href="register.php">New User? Register</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form_register">
                        <div class="imd_div">
                        <img src="Admin_elite/img/logo/login.png">
                        </div>
                        <p><a href="login.php">Login to Apply</a></p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div> -->
<?php 
include_once('footer.php');
include_once('db.php');
?>
