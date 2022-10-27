<?php

?>

<!doctype html>
<html lang="en">
<head>
<title>Reset</title>
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
    margin: 10px auto;
}

p{font-size:16px;font-family:Georgia, "Times New Roman", Times, serif;font-weight:bold;margin-top:10px;}
.form-group{
	margin-bottom:6px;
	}
.footer{font-weight:bold; font-size:14px;font-family:Georgia, "Times New Roman", Times, serif;}

  </style>
</head>





<body>
<!----------compusory----------->
<div class="login">
</div>
<!-------end--------------------->


<div class="container">
        <div class="col-centered col-sm-6">
                   <div class="row text-center">
                   <img src="images/dulogo.png" height="100px" width="100px"/>
                   <p>BADHAN<br>
                   Jagannath Hall Unit<br>
                   Estd: 04 August 2008
                   <br>
                   </div>
                   
                   
                   
                   <div class="row">
                   <div class="panel panel-primary">
                   
                   
                   
                   <div class="panel-heading footer">
                   Please give your exact information
                   </div>
                   
                   
                   
                   
                   
                   
                   <div class="panel-body">
                      <form class="form form-horizontal" action="#" method="post">
                   
                       <div class="form-group form-group-sm">
                             <label for="one" class="control-label col-sm-3">First Name:</label>
                             <div class="col-sm-6">
                             <input placeholder="First Name" type="text" name="fname" id="one" class="form-control input-lg"/>
                             </div>
                       </div>
                       
                       
                       <div class="form-group form-group-sm">
                             <label for="two" class="control-label col-sm-3">Last Name:</label>
                             <div class="col-sm-6">
                             <input placeholder="Last Name" type="text" name="lname" id="two" class="form-control input-lg"/>
                             </div>
                       </div>
                       
                       
                       
                       <div class="form-group form-group-sm">
                             <label for="three" class="control-label col-sm-3">User-Id:</label>
                             <div class="col-sm-6">
                             <input placeholder="User Name" type="text" name="uname" id="three" class="form-control input-lg"/>
                             </div>
                       </div>
                       
                       
                       
                       <div class="form-group form-group-sm">
                             <label for="four" class="control-label col-sm-3">Phone No:</label>
                             <div class="col-sm-6">
                             <input placeholder="Phone No" type="text" name="phone" id="four" class="form-control input-lg"/>
                             </div>
                       </div>
                       
                       
                       <div class="form-group form-group-sm">
                             <label for="four" class="control-label col-sm-3">Email Id:</label>
                             <div class="col-sm-6">
                             <input placeholder="Email id" type="email" name="email" id="four" class="form-control input-lg"/>
                             </div>
                       </div>
                       
                       
                       <div class=" form-group form-group-sm">
                             <div class="col-sm-offset-3 col-sm-6">
                                <input type="submit" name="submit_login" value="Recover password" class="btn btn-md btn-success"/>
		                     </div>
                        </div>
                       </form>
                    </div>
                    
                       
                    
                   <div class="panel-footer text-center">
                   <span class="footer">A password reset link will be sent to your email. <br>After submitting query you will get password</span>
                   </div><!------ panel footer close------>
                    
                    
                    
                    
                    
                   </div>
                   </div>
        
        </div>

</div>






</body>
</html>
