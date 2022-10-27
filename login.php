<?php
@ob_start();
@session_start();

if(!isset($_POST['login_btn'])){
    /* start html */
    ?>
    <!doctype html>
    <html lang="en">
    <head>
    <title>log-in</title>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        
      <style>
      body{
    	margin:0px;
    	padding:0px;
    	border-top:5px solid #60625B;
    	background:white;
    }
      .login {
        background:url(images/loginbg.png) no-repeat top right;
        height: 30px;
        overflow: hidden;
    	margin-top:-1px;
        width:auto;

    }

    .col-centered{
        float: none;
        margin: 50px auto;
    }
    h1{margin:0px; border-bottom:2px solid black; padding:0px;color:black;font-size:25px;
    font-family:Georgia, "Times New Roman", Times, serif}
    .span {
    	color:black; font-weight:bold;font-size:12px;
    }
    .form-group{
    	margin-bottom:6px;
    	}
    	
    	
    .row:nth-child(2) {margin-bottom:20px;}
    .row:first-child {margin-bottom:30px;}
    .row:nth-child(3) {margin-bottom:60px;}
    .span a {
    	text-decoration:none;
    	font-style:none;
    	}
    	
    .copy{font-size:10px; font-weight:bold;font-family:Georgia, "Times New Roman", Times, serif;}	
    	

      </style>
    </head>





    <body>
    <!----------compusory----------->
    <div class="login">
    </div>
    <!-------end--------------------->

    <div class="container">
        
        <div class="col-centered col-sm-6">
        
        
        <div class="row">
        <h1><img height="26px" width="30px" style="float:left;margin-right:10px;" src="images/lock.png">Please Log In</h1>
        </div>
        
        
    <div class="row">
        <form name="login_form" class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">



    <div class="form-group form-group-sm">
        <label class="control-label col-sm-3" for="one">Your Email</label>
        <div class="col-sm-6">
            <input type="text" name="email" class="form-control input-lg" id="one" placeholder="Enter your given email">
        </div>
     </div>





    <div class="form-group form-group-sm">
      <label class="control-label col-sm-3" for="two">Password</label>
      <div class="col-sm-6">
      <input type="password" name="password" class="form-control input-lg" id="two" placeholder="Enter password">
      </div>
    </div>





    <div class=" form-group form-group-sm">
            <div class="col-sm-offset-3 col-sm-6">
            <input type="submit" name="login_btn" value="Login" class="btn btn-md btn-success"/>
    		</div>
    </div>

    </form>
    </div>



    <div class="row">
    <div class="col-sm-offset-3 col-sm-6">
    <span class="span"><a href="recovery-password.php"><span class="glyphicon glyphicon-hand-right"> </span> Forget Your Password?</a></span>
    <br>
    <span class="span"><a href="signup.php"><span class="glyphicon glyphicon-hand-right"> </span> Create a new account.</a></span>
    <br>
    </div>
    </div>

    <div class="row">
         <div class="text-center" style="width:100%">       
    	<span class="copy"><span class="glyphicon glyphicon-globe"></span> All Copy-Right is reserved to Dipu Mondal</span>
          </div>       
    </div>  
        
    </div> 
    </div>
    </body>
    </html>

    <?php
    /* end html */
}else{
    require 'dbHelper.php';
    @$redirectedFrom=$_SESSION['redirectedFrom'];
    $redirectedFrom=!isset($redirectedFrom)? "index.php":$redirectedFrom;
    $emailOrPhone=$_POST['email'];
    $password=$_POST['password'];

    $dbHelper=new dbHelper();    
    if($redirectedFrom=="admin_login.php"){/* from admin_login */
        echo "admin login is under construction";
    }else{
        if ($dbHelper->loginValid($emailOrPhone, $password)) {
            $_SESSION['user_email'] = $emailOrPhone;

            $profileInfo = $dbHelper->getProfileInfo($_SESSION['user_email']);
            $_SESSION['user_id'] = $profileInfo[0];
            $_SESSION['fname'] = $profileInfo[1];
            $_SESSION['lname'] = $profileInfo[2];

            header("location:" . $redirectedFrom);
            //echo "logged in";
        } else {
            echo "<p style='color:FF0000;'>Login failed</p>Please <a href='login.php'>Try again</a>";
            //header("Location:login.php");
        }
    }
    
}