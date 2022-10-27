<?php
@ob_start();
@session_start();

if(!isset($_POST['submit'])){ /* if not clicked login button */
    /* strst html */
    ?>
        <!doctype html>
    <html lang="en">
        <head>
            <title>BADHAN JAGANNATH HALL</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">


            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


            <style>

           .col-centered{float:none;margin:0px auto;}
          .pad-zero{padding:0px;}
          h3{font-family:Georgia, "Times New Roman", Times, serif;font-size:20px;}
          p{font-family:Georgia, "Times New Roman", Times, serif;font-size:14px;text-align:center}
          .over{margin-top:30px;}
            </style>
        </head>

        <body>

            <div class="container over pad-zero">
                <div class="col-sm-5 col-centered pad-zero">
                    <div class="panel pad-zero">
                        <div class="panel-heading">
                            <h3>Log in as an admin: </h3>
                        </div>

                        <div class="panel-body">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="admin_user" type="text" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                </div>

                                <div class="input-group" style="margin-top:5px;">
                                    <input type="submit" name="submit" class="btn btn-success btn-sm" value="Log-In"/>
                                </div>
                            </form>

                        </div>

                        <div class="panel-footer">
                            <p>&copy; All right reserved by Dipu Mondal</p>
                        </div>
                    </div>

                </div>
            </div>

        </body>
    </html>

    <?php
    /* end html */
}else {
    
    require 'dbHelper.php';
    
    $dbHelper=new dbHelper();
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    @$redirectedFrom = $_SESSION['redirectedFrom'];
    $redirectedFrom = !isset($redirectedFrom) ? "index.php" : $redirectedFrom;

    if($dbHelper->adminLoginValid($email, $password)){
        $_SESSION['admin']=$email;
        header("location:" . $redirectedFrom);
    }  else {
        echo "<p style='color:FF0000;'>Login failed</p>Please <a href='admin_login.php'>Try again</a>";
    }
}