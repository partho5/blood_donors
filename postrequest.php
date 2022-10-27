<?php
@ob_start();
@session_start();

if(!isset($_SESSION['user_id'])){/* if not logged in */
    $_SESSION['redirectedFrom'] = "postrequest.php";
    header("Location:login.php");
}  else {/* if logged in */
    if (!isset($_POST['submit_request'])) {

        /* start html */
        ?>
                <!doctype html>
            <html lang="en">
                <head>
                    <title>Blood request</title>




                    <!-------------------Meta and links-------------------------->
                    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                    <!-------------------Meta and links-------------------------->    





                    <style>
                    h4{font-weight:bold;}
                    body{margin:0px;padding:0px;border-top:5px solid white;background:white;}
                    .container-fluid, .pad-zero{padding-right:0px;padding-left:0px;} 
                    .p{font-family: Verdana,Geneva,sans-serif;font-size: 15px;font-weight: bold;margin-top:3px;}
                    .top{background:#b0bec5;z-index:3000}
                    .navbar-default{background:transparent;border:1px solid transparent;margin-bottom:0px;}
                    .i-c {height:50px; width:50px; float:left;}
                    .top-nav li{font-weight:bold;font-family:Georgia, "Times New Roman", Times, serif;font-size:12px;}
                    .n-b{font-weight:bold;font-family:Georgia, "Times New Roman", Times, serif}
                    .nav{border:1px solid transparent}
                    .navbar-brand{ font-size:15px;}
                    .navbar-right{font-weight:bold;font-family:Georgia, "Times New Roman", Times, serif;}
                    .panel-footer ul, p, h4{font-family:Georgia, "Times New Roman", Times, serif;}
                    .panel-footer ul li{list-style-image:url(images/tik.png);}
                    .img{height:150px;width:150px;}
                    .thumbnail {background: #F5F5F5;border: 1px solid transparent;margin-right: 4px;width: 280px;}
                    .panel-footer table{font-family:Georgia, "Times New Roman", Times, serif; font-size:12px}
                    .col-centered{float:none;margin:0px auto;}
                    .copy{font-family: Verdana,Geneva,sans-serif;font-size: 12px;font-weight: bold;margin-top:5px;}
                    .ulo{margin:0px;padding:0px;}
                    .ulo li a{padding:0px;}
                    .ulo li{padding:3px;}


                    .affix  {
                          top: 0;
                         width:100%;}

                    .affix + .container-fluid {
                          padding-top: 70px;
                      }

                     .form-group{margin-bottom:3px}
                     .panel{border:1px solid transparent;}
                     .thumbnail{font-family:Georgia, "Times New Roman", Times, serif;}

                    </style>
                    <!---------------style ends here-------------------->



                </head>





                <body>





                    <div class="container-fluid"><!--------Top container-fluid cover the banner portion----------->
                        <div class="container">
                            <nav class="navbar">
                                <div class="navbar-header text-center">
                                    <img height="70px" width="80px" src="images/dulogo.png">
                                    <p class="p">বাঁধন <br>জগন্নাথ হল ইউনিট<br> প্রতিষ্ঠিতঃ ৪ আগস্ট ২০০৮</p>
                                </div>


                                <div class="navbar-right text-center" style="padding-right:15px;padding-top:25px">
                                    <p class="p">"একের রক্ত অন্যের জীবন,<br>রক্তই হোক আত্মার বাঁধন।"</p>
                                </div>
                            </nav>
                        </div>
                    </div><!--------Top container-fluid cover the banner portion---[Ends]-------->









                    <!--------second container-fluid cover the navigation bar portion----------->
                    <div class="container-fluid top pad-zero" data-spy="affix" data-offset-top="197"><!----------Main holder----------->
                        <div class="container pad-zero"><!-----------(Start)nav bar  ta ei division er nested --> 
                            <nav class="navbar navbar-default col-centered"><!--------------total nav starts herer---------------------->
                                <div class="container-fluid">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>                        
                                        </button>
                                                <?php
                                                if (isset($_SESSION['user_id'])) {
                                                    $fname = $_SESSION['fname'];
                                                    $lname = $_SESSION['lname'];
                                                }
                                                ?>
                                        <div><a href="profile.php">
                                                <img class="img-circle i-c" src="<?php echo 'uploaded_files/'.$_SESSION['ppUrl']; ?>" style="margin-right:10px;">
                                                <span class="navbar-brand n-b"><?php echo $fname." ".$lname; ?></span>
                                            </a>
                                        </div>



                                    </div>
                                    <div class="collapse navbar-collapse" id="myNavbar">
                                        <ul class="nav navbar-nav top-nav">
                                            <li><a href="index.php">Home</a></li>





                                            <li><a href="postrequest.php">Request</a></li>
                                            <li><a href="donorlist.php">Search</a></li>



                                            <li class="dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Blood <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="bloodbanks.php">List of blood banks</a></li>
                                                    <li><a href="whydb.php">About blood donation</a></li>
                                                </ul>
                                            </li>






                                            <li class="dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Hall Survey<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="recentmembers.php">Our recent members</a></li>
                                                    <li><a href="dpr.php">Donor per room</a></li>
                                                </ul>
                                            </li>



                                            <li class="dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">About us<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="committees.php">Our committee</a></li>
                                                    <li><a href="#">Our mission</a></li>
                                                    <li><a href="ouractivity.php">Our activities</a></li>


                                                </ul>
                                            </li>





                                        </ul>

                                                <?php
                                                if (isset($_SESSION['user_id'])) {
                                                    ?>
                                                    <ul class="nav navbar-nav navbar-right">
                                                        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Log-Out</a></li>
                                                    </ul>
                                                    <?php
                                                }
                                                ?>
                                    </div>
                                </div>
                            </nav><!-----total  nav bar ends here---------->
                        </div><!-----------------(End)nav bar  ta ei division er nested -------------->
                    </div><!----main holder ends---------->
                    <!--------Second container-fluid cover the Navigation bar portion---[Ends]-------->




                    <!----body starts here----------->


                    <div class="container-fluid" style="margin-top:20px;"><!----------Main content for donors thumbnail goes here-------->



                        <div class="container pad-zero">

                            <div class="col-sm-8">
                                <div class="panel panel-primary">
                                    <div class="panel-heading"><b>Post your request for blood:</b></div>
                                    <div class="panel-body">
                                        <form name="request_blood" id="request_blood" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-horizontal">
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="one">Your patient name: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control input-md" id="one" name="p_name" placeholder="Patient Name"/>
                                                </div>
                                            </div>
                                            <!--------------------------------------------->

                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="three">Patient age: </label>
                                                <div class="col-sm-8">


                                                    <select name="p_age" id="three" class="form-control">
                                                        <option selected disabled>Select age area</option>
                                                        <option>Under 5 year</option>
                                                        <option>5 to 10 year</option>
                                                        <option>11 to 13 year</option>
                                                        <option>14 to 17 year</option>
                                                        <option>18 to 22 year</option>
                                                        <option>23 to 25 year</option>
                                                        <option>26 to 30 year</option>
                                                        <option>31 to 35 year</option>
                                                        <option>36 to 40 year</option>
                                                        <option>41 to 45 year</option>
                                                        <option>46 to 50 year</option>
                                                        <option>More than 50</option>
                                                    </select>


                                                </div>
                                            </div>
                                            <!--------------------------------------------->

                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="a">Patient Diseases: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control input-md" id="a" name="p_diseases" placeholder="Patient's Diseases"/>
                                                </div>
                                            </div>

                                            <!---------------------------------------------> 

                                            <!--------------------------------------------->



                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="r">Where Admitted: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control input-md" id="r" name="p_add" placeholder="Where patient is admitted"/>
                                                </div>
                                            </div>

                                            <!---------------------------------------------> 

                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="f">Neede Blood Group: </label>
                                                <div class="col-sm-8">
                                                    <select name="p_group" class="form-control" id="f">
                                                        <option selected>Select a group</option>
                                                        <option>A Positive</option>
                                                        <option>A Negative</option>
                                                        <option>B Positive</option>
                                                        <option>B Negative</option>
                                                        <option>AB positive</option>
                                                        <option>AB Negative</option>
                                                        <option>O Positive</option>
                                                        <option>O Negative</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--------------------------------------------->
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="s">Number of Bag Needed: </label>
                                                <div class="col-sm-8">
                                                    <input type="number" min="1" class="form-control input-md" id="s" name="no_of_bags" placeholder="Amount"/>
                                                </div>
                                            </div>
                                            <!--------------------------------------------->
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="t">Your Contract no: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control input-md" id="t" name="contact" placeholder="Your contract number"/>
                                                </div>
                                            </div>
                                            <!---------------------------------------------> 
                                            
                                            <div class="form-group">
                                                        <label class="control-label col-sm-4" for="u">Need within (days) </label>
                                                        <div class="col-sm-8">
                                                            <input type="number" min="0" class="form-control input-md" id="u" name="within" placeholder="Example: 2 or 3 days"/>
                                                        </div>
                                                    </div>
                                                    <!---------------------------------------------> 
                                            
                                            <div class="form-group" style="margin-top:10px">

                                                <div class="col-sm-offset-4 col-sm-8">
                                                    <input type="submit" name="submit_request" value="Request" class="btn btn-success"/>
                                                </div>
                                            </div>

                                            <!---------------------------------------------> 
                                        </form>
                                    </div>
                                </div>      
                            </div><!---------------------------------col-sm-7------ends here------------->
                            <div class="col-sm-4 pad-zero">

                                <div style="display:none" class="panel panel-primary">
                                    <div class="panel-heading" ><b>Your Previous posts:</b></div>
                                    <div class="panel-body">

                                        <div class="thumbnail">
                                            <b>Patient Name: </b>Abdul Jabbar<br>
                                            <b>Relationship: </b>Father<br>
                                            <b>Patient age: </b>45 to 50<br>
                                            <b>Patient diseases: </b>Major operation<br>
                                            <b>Date of post: </b>10 january 2016<br>
                                            <span></span><br>
                                            <span class="btn btn-danger btn-sm">Delete</span>
                                        </div>



                                        <div class="thumbnail">
                                            <b>Patient Name: </b>Abdul Jabbar<br>
                                            <b>Relationship: </b>Father<br>
                                            <b>Patient age: </b>45 to 50<br>
                                            <b>Patient diseases: </b>Major operation<br>
                                            <b>Date of post: </b>10 january 2016<br>
                                            <span></span><br>
                                            <span class="btn btn-danger btn-sm">Delete</span>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>


                    </div><!-------[Ends]-------------Main content for donors thumbnail goes here-------->



                    <!-------body ends-----------------> 



                    <div class="container-fluid" style="background:#F5F5F5;"><!-------[starts]--- the container-fluid name copy right here------------->
                        <div class="container panel-footer">
                            <p class="text-center copy pad-zero">&copy;All right reserved to Dipu Mondal from 2016 to 2020</p>
                            <div class="container">
                                <div class="col-centered col-sm-7">
                                    <nav class="navbar">
                                        <div class="navbar-header">
                                            <span class="navbar-brand">Follow us on:</span>
                                        </div>
                                        <ul class="nav navbar-nav ulo">
                                            <li><a href="http://www.facebook.com/badhanjnhall">
                                                    <img src="images/face.png" class="img-circle" height="30px" width="30px"/></a></li>
                                            <li><a href="#">
                                                    <img src="images/gm.png" class="img-circle" height="30px" width="30px"/></a></li>
                                            <li><a href="#">
                                                    <img src="images/in.png" class="img-circle" height="30px" width="30px"/></a></li>
                                            <li><a href="#">
                                                    <img src="images/twt.png" class="img-circle" height="30px" width="30px"/></a></li>
                                        </ul>

                                        <form class="navbar-form navbar-left">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" placeholder="Your email">
                                            </div>
                                            <input type="submit" class="btn btn-success" name="sub_submit" value="Subscribe us"/>
                                        </form>

                                    </nav><!---------nav tag ends here------------------->
                                </div><!------------con center sm7 ends here---------------->
                            </div><!---------second container fluid ends here------------->
                        </div><!---------nammed panel footer------------->
                    </div><!-------[ends]--- the container-fluid name copy right here------------->

                </body>
            </html>
        <?php
        /* end html */
    } else {
        $patientName=$_POST['p_name'];
        $age=$_POST['p_age'];
        $disease=$_POST['p_diseases'];
        $hospital=$_POST['p_add'];
        $blood_group=$_POST['p_group'];
        $noOfBags=$_POST['no_of_bags'];
        $phone=$_POST['contact'];
        $within=$_POST['within'];
        
        $user_id=$_SESSION['user_id'];
        
        //echo $patientName."-".$age."-".$disease."-".$hospital."-".$blood_group."-".$noOfBags."-".$phone;
        require 'dbHelper.php';
        $dbHelper=new dbHelper();
        try {
            $dbHelper->saveBloodRequest($user_id, $patientName, $age, $disease, $hospital, $blood_group, $noOfBags, $phone, $within);
        } catch (Exception $exc) {
            var_dump($exc);
        }
        }
}

