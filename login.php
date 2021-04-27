
<?php
error_reporting(0);
session_start();
require_once 'class.user.php';
$user_login = new USER();

if($user_login->is_logged_in()!="")
{
    
    
    $user_login->redirect('shop.php?q=2');
}

if(isset($_POST['btn-login']))
{
    $email = trim($_POST['txtemail']);
    $upass = trim($_POST['txtupass']);

    if($user_login->login($email,$upass))
    {
        $user_login->redirect('login.php');
    }
}
?>
    <!-- LOGIN --> 

        <?php include"allcss.php"; ?>

    </head>
    <body>
        <div class="wrapper">
            <!-- header start -->

			<?php include "header.php"; ?>


		
            <div class="breadcrumb-area mt-37 hm-4-padding">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center border-top-2">
                       <h2>login </h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>login </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="banner-area hm-4-padding">
                <div class="container-fluid">
                    <div class="banner-img">
                        <a href="#"><img src="assets/img/banner/19.jpg" alt=""></a>
                    </div>
                </div>
            </div>








               <div class="login-register-area ptb-30 hm-3-padding">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-7 ml-auto mr-auto">
                            <div class="login-register-wrapper">
                                <div class="login-register-tab-list nav">
                                    <a class="active" data-toggle="tab" href="#lg1">
                                        <h4> login </h4>
                                    </a>
                                  
                                </div>
                                <div class="tab-content">
                                    <div id="lg1" class="tab-pane active">
                                        <div class="login-form-container">
                                            <div class="login-form"> 

                                            	  <?php 
								        if(isset($_GET['inactive']))
								        {
								            ?>
								             <div class='alert alert-danger'>
								                <button class='close' data-dismiss='alert'>&times;</button>
								                 <strong>Sorry!</strong> This Account is not Activated Go to your Inbox and Activate it.
								              </div>
								             <?php
								        }
								        ?>
										<?php
								        if(isset($_GET['error']))
								        {
								            ?>
								            <div class='alert alert-danger'>
								                <button class='close' data-dismiss='alert'>&times;</button>
								                  <strong>Wrong Details!</strong>
								            </div>
								        <?php
								        }
								        ?>

										<form action="" method="post" name="registration" id="create-account_form">

											<input placeholder="Enter your Email Id / Mobile No"  id="email" name="txtemail" required="" type="text">
											<input  id="passwd" name="txtupass" placeholder="Enter your Password" required="" type="password">

											<div class="button-box">
                                                        <div class="login-toggle-btn">
                                                            <input type="checkbox">
                                                            <label>Remember me</label>
                                                            <a href="fpass.php">Forgot Password?</a>
                                                        </div>
                                                        <button type="submit" name="btn-login" class="btn-style cr-btn"><span>Login</span></button>
                                            </div>


										</form>


                                            
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




                     <?php include"footer.php"; ?>

        </div>
        
        
                <?php include"allscript.php"; ?>
    </body>
</html>
