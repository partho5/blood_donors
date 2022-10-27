<?php
@ob_start();
session_start();

require 'dbHelper.php';
$dbHelper=new dbHelper();
if(!isset($_SESSION['user_email'])){
    $_SESSION['redirectedFrom']="profile.php";
    header("Location:login.php");
}
$profileInfo=$dbHelper->getProfileInfo($_SESSION['user_email']);
$fname=$profileInfo[1];
$lname=$profileInfo[2];
$email=$profileInfo[3];
$phone=$profileInfo[5];
$weight=$profileInfo[6];
$birthDay=$profileInfo[9];
$univ=$profileInfo[11];
$hall=$profileInfo[12];
$room=$profileInfo[13];
$dept=$profileInfo[14];
$session=$profileInfo[15];
$ppUrl=$profileInfo[16];

$user_id=$profileInfo[0];
$_SESSION['user_id']=$user_id;
$_SESSION['ppUrl']=$ppUrl;
$donateTimes=$dbHelper->howTimesDonate($user_id);
$age=$dbHelper->calcAge($birthDay);


/* start html*/
?>
<!doctype html>
<html lang="en">
    <head>
        <title>
            <?php echo $fname." ".$lname; ?>
        </title>




        <!-------------------Meta and links-------------------------->
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-------------------Meta and links-------------------------->    
        
        <script type="text/javascript" src="js/myLibrary.js"></script>





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
          
          
          .progress{
              width: 90%;
              margin-left: auto;
              margin-right: auto;
              height: 20px;
              border: 1px solid;
              margin-top: 10px;
              display: none;
          }
          .bar{
              width: 0%;
              height: 18px;
              background-color: green;
              margin-top: 1px;
              border-top-right-radius: 2px;
              border-bottom-right-radius: 2px;
          }
          .percent{
		margin-top: -18px;
	}
          

        .len{width:100px;padding:3px;border:1px solid gray;border-radius:5px;font-weight:bold;}
        .panel-heading{font-weight:bold;font-size:14px;font-family:Georgia, "Times New Roman", Times, serif;}
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
                            <div><a href="profile.php">
                                    <img id="pp" class="img-circle i-c" src="profile_pic/ava.png" style="margin-right:10px;">
                                    <span class="navbar-brand n-b"> <?php echo $fname." ".$lname; ?></span>
                                </a>
                            </div>



                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav top-nav">
                                <li><a href="index.php">Home</a></li>





                                <li><a href="postrequest.php">Request for blood</a></li>
                                <li><a href="donorlist.php">Search by group</a></li>



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

                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Log-Out</a></li>
                            </ul>
                        </div>
                    </div>
                </nav><!-----total  nav bar ends here---------->
            </div><!-----------------(End)nav bar  ta ei division er nested -------------->
        </div><!----main holder ends---------->
        <!--------Second container-fluid cover the Navigation bar portion---[Ends]-------->




        <!----body starts here----------->
        <div class="container-fluid" style="margin-top:20px;"><!----------Main content for donors thumbnail goes here-------->


            <div class="container pad-zero">
                <div class="panel-group col-sm-12 col-centered">
                    <!------------------separator panel------------------------------------------------> 
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h4>
                                Edit your personal information:
                            </h4></div>

                        <div class="panel-body table-responsive">
                            <table class="table table-hover">
                                <tr>
                                    <td>First Name: </td>
                                    <td>
                                        <div class="input-group col-sm-3">
                                            <input type="text" name="f-name" class="form-control" value="<?php echo $fname; ?>" >
                                            <div class="input-group-btn">
                                                <button id="fname" class="btn btn-default" type="button">
                                                    <i class="glyphicon glyphicon-check"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Last Name: </td>
                                    <td>
                                        <div class="input-group col-sm-3">
                                            <input type="text" name="l-name" class="form-control" value="<?php echo $lname; ?>">
                                            <div class="input-group-btn">
                                                <button id="lname" class="btn btn-default" type="button">
                                                    <i class="glyphicon glyphicon-check"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email: </td>
                                    <td>
                                        <div class="input-group col-sm-4">
                                            <input type="text" name="email" class="form-control" value="<?php echo $email ?>">
                                            <div class="input-group-btn">
                                                <button id="email" class="btn btn-default" type="button">
                                                    <i class="glyphicon glyphicon-check"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Phone: </td>
                                    <td>
                                        <div class="input-group col-sm-4">
                                            <input type="text" name="phone" class="form-control" value="<?php echo $phone ?>">
                                            <div class="input-group-btn">
                                                <button id="phone" class="btn btn-default" type="button">
                                                    <i class="glyphicon glyphicon-check"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Weight: </td>
                                    <td>
                                        <div class="input-group col-sm-3">
                                            <input type="number" min="30" name="weight" class="form-control" value="<?php echo $weight ?>">
                                            <div class="input-group-btn">
                                                <button id="weight" class="btn btn-default" type="button">
                                                    <i class="glyphicon glyphicon-check"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Age (Years): </td><td><?php echo $age ?> </td><!------- It is non changeable------- will be calculated by program------->
                                </tr>
                                <tr>
                                    <td>Donation:  </td><td><?php echo $donateTimes ?> times</td>
                                </tr>
                                <!------------------dada it will be shown for one time----------->
                                <!-------------after setting once it wont be shown---------------->
                                <tr>
                                    <td>Last Date: </td><td>

                                        <form action="#" method="post" class="form-horizontal">
                                            <ul class="nav navbar-nav">
                                                <li>
                                                    <select id="donation_one" name="edit_month" class="form-control">
                                                        <option select="selected" value="">Select</option>
                                                        <option value="1">January</option>
                                                        <option value="2">February</option>
                                                        <option value="3">March</option>
                                                        <option value="4">April</option>
                                                        <option value="5">May</option>
                                                        <option value="6">June</option>
                                                        <option value="7">July</option>
                                                        <option value="8">August</option>
                                                        <option value="8">September</option>
                                                        <option value="8">October</option>
                                                        <option value="8">November</option>
                                                        <option value="8">December</option>
                                                    </select>
                                                </li>
                                                <li>

                                                    <select id="donation_two" name="edit_day" class="form-control">
                                                        <option select="selected" value="">Select</option>
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                        <option value="5">05</option>
                                                        <option value="6">06</option>
                                                        <option value="7">07</option>
                                                        <option value="8">08</option>
                                                        <option value="9">09</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>

                                                </li>
                                                <li>
                                                    <select id="ten" name="edit_year" class="form-control">
                                                        <option select="selected disabled" value="">Year</option>
                                                        <option value="1960">1960</option>
                                                        <option value="1961">1961</option>
                                                        <option value="1962">1962</option>
                                                        <option value="1963">1963</option>
                                                        <option value="1964">1964</option>
                                                        <option value="1965">1965</option>
                                                        <option value="1966">1966</option>
                                                        <option value="1967">1967</option>
                                                        <option value="1968">1968</option>
                                                        <option value="1969">1969</option>
                                                        <option value="1970">1970</option>
                                                        <option value="1971">1971</option>
                                                        <option value="1972">1972</option>
                                                        <option value="1973">1973</option>
                                                        <option value="1974">1974</option>
                                                        <option value="1975">1975</option>
                                                        <option value="1976">1976</option>
                                                        <option value="1977">1977</option>
                                                        <option value="1978">1978</option>
                                                        <option value="1979">1979</option>
                                                        <option value="1980">1980</option>
                                                        <option value="1981">1981</option>
                                                        <option value="1982">1982</option>
                                                        <option value="1983">1983</option>
                                                        <option value="1984">1984</option>
                                                        <option value="1985">1985</option>
                                                        <option value="1986">1986</option>
                                                        <option value="1987">1987</option>
                                                        <option value="1988">1988</option>
                                                        <option value="1989">1989</option>
                                                        <option value="1990">1990</option>
                                                        <option value="1991">1991</option>
                                                        <option value="1992">1992</option>
                                                        <option value="1993">1993</option>
                                                        <option value="1994">1994</option>
                                                        <option value="1995">1995</option>
                                                        <option value="1996">1996</option>
                                                        <option value="1997">1997</option>
                                                        <option value="1998">1998</option>
                                                        <option value="1999">1999</option>
                                                        <option value="2000">2000</option>
                                                        <option value="2001">2001</option>
                                                        <option value="2002">2002</option>
                                                        <option value="2003">2003</option>
                                                        <option value="2004">2004</option>
                                                        <option value="2005">2005</option>
                                                        <option value="2006">2006</option>
                                                        <option value="2007">2007</option>
                                                        <option value="2008">2008</option>
                                                        <option value="2009">2009</option>
                                                        <option value="2010">2010</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2015">2015</option>
                                                    </select>
                                                </li>
                                            </ul>
                                        </form>


                                        <button id="" class="btn btn-default" type="button">
                                            <i class="glyphicon glyphicon-check"></i>
                                        </button>



                                    </td><!----------- will be vanished after first isset ------------>
                                </tr>



                                <tr>
                                    <td>Upload Photo: </td><td>
                                        <form method="POST" enctype="multipart/form-data" action="upload_photo_ajax.php">
                                            <input type="file" id="fileToUpload" name="fileToUpload"/>
                                            <input type="submit" value="Upload" id="submit">
                                        </form>
                                        <div class="progress">
                                            <div class="bar"></div >
                                            <div class="percent">0%</div >
                                        </div>
                                    </td>
                                </tr>



                            </table>
                        </div>
                    </div>
                    <!--------------------------------end of panel------------------------------------>     

                    <!----------------------second panel-------------------------------->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Your residential informantion:</h4>
                        </div>
                        <div class="panel-body">
                            <table class="table table-responsive table-hover">
                                <tr>
                                    <td>University</td>
                                    <td>
                                        <div class="input-group col-sm-4">
                                            <input type="text" name="university" class="form-control" value="<?php echo $univ ?>">
                                            <div class="input-group-btn">
                                                <button id="univ" class="btn btn-default" type="button">
                                                    <i class="glyphicon glyphicon-check"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>

                                </tr>

                                <tr>
                                    <td>Hall name: </td>
                                    <td>
                                        <div class="input-group col-sm-4">
                                            <input type="text" name="hall-name" class="form-control" value="<?php echo $hall ?>">
                                            <div class="input-group-btn">
                                                <button id="hall" class="btn btn-default" type="button">
                                                    <i class="glyphicon glyphicon-check"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td>Room no: </td>
                                    <td>
                                        <div class="input-group col-sm-4">
                                            <input type="text" name="room" class="form-control" value="<?php echo $room ?>">
                                            <div class="input-group-btn">
                                                <button id="room" class="btn btn-default" type="button">
                                                    <i class="glyphicon glyphicon-check"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>




                            </table>
                        </div>
                    </div>

                    <!----------------------second panel end------------------------------>   


                    <!----------------------third panel-------------------------------->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Your Academic Information:</h4>
                        </div>
                        <div class="panel-body">
                            <table class="table table-responsive table-hover">
                                <tr>
                                    <td>Your Department: </td>
                                    <td>
                                        <div class="input-group col-sm-4">
                                            <input type="text" name="department" class="form-control" value="<?php echo $dept ?>">
                                            <div class="input-group-btn">
                                                <button id="dept" class="btn btn-default" type="button">
                                                    <i class="glyphicon glyphicon-check"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>


                                </tr>

                                <tr>
                                    <td>Addmission session: </td>
                                    <td>     <div class="input-group col-sm-4">
                                            <select class="form-control" id="session">
                                                <option selected disabled value="">Year</option>
                                                <option value="2000">2000-2001</option>
                                                <option value="2001">2001-2002</option>
                                                <option value="2002">2002-2003</option>
                                                <option value="2003">2003-2004</option>
                                                <option value="2004">2004-2005</option>
                                                <option value="2005">2005-2006</option>
                                                <option value="2006">2006-2007</option>
                                                <option value="2007">2007-2008</option>
                                                <option value="2008">2008-2009</option>
                                                <option value="2009">2009-2010</option>
                                                <option value="2010">2010-2011</option>
                                                <option value="2011">2011-2012</option>
                                                <option value="2012">2012-2013</option>
                                                <option value="2013">2013-2014</option>
                                                <option value="2014">2014-2015</option>
                                                <option value="2015">2015-2016</option>
                                                <option value="2016">2016-2017</option>
                                                <option value="2017">2017-2018</option>
                                            </select>

                                            <div class="input-group-btn">
                                                <button id="session" class="btn btn-default" type="button">
                                                    <i class="glyphicon glyphicon-check"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <!----------------------panel end------------------------------>   

                    <!-----------------------------new panel---------------------->
                    <div style="display: none;" class="panel panel-primary">
                        <div  class="panel-heading"><h4>Your Contribution</h4></div>
                        <div style="display:none" class="panel-body">
                            <table class="table table-hover table-responsive">
                                <tr>
                                    <td>Your Donation: </td><td>12 times</td>
                                </tr>

                                <tr>
                                    <td>Best Donation: </td><td>12 times</td>
                                </tr>

                                <tr>
                                    <td>best Donor: </td><td>Dipu Mondal</td>
                                </tr>

                                <tr>
                                    <td>You Danated today?</td><td>
                                        <span class="btn btn-md btn-success">Yes</span>   <span class="btn btn-md btn-danger">No</span></td>
                                </tr>

                            </table>
                        </div>

                    </div>
                    <!---------------------------------end-------------------------->     
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
                                    <input type="email" class="form-control" name="email" value="Your email">
                                </div>
                                <input type="button" class="btn btn-success" name="sub_submit" value="Subscribe us"/>
                            </form>

                        </nav><!---------nav tag ends here------------------->
                    </div><!------------con center sm7 ends here---------------->
                </div><!---------second container fluid ends here------------->
            </div><!---------nammed panel footer------------->
        </div><!-------[ends]--- the container-fluid name copy right here------------->

        
        <script type="text/javascript" src="http://malsup.github.io/jquery.form.js"></script>
        <script>
            $(document).ready(function(){
                var ppUrl="<?php echo $_SESSION['ppUrl']; ?>";
                $("#pp").attr("src","uploaded_files/"+ppUrl);
                
                $(".btn").click(function(){
                    var name=$(this).attr("id");
                    var value=$(this).parent().siblings(0).val();
                    var pk="<?php echo $user_id ?>";
                    //console.log(name+'--'+value+'--'+pk);
                    var response=profileEditAjax(name, pk, value);
                    //console.log("==="+response);
                    $(this).append("<span class='completeMsg' style='color:#0277bd;'>Saved</span>");
                    setTimeout(function(){
                        $(".completeMsg").text("");
                    },2000);
                });
            });
            
            
            var session=$("#session");
            session.empty();
            var list='<option selected disabled value="">Year</option>';
            var curYear=new Date().getFullYear();
            var defaultVal="<?php echo $session; ?>".substr(0, 4);
            for(var i=2000;i<curYear;i++){
                if(i==defaultVal){
                    list+='<option selected="selected" value="'+i+"-"+(i+1)+'">'+i+'-'+(i+1)+'</option>';
                }else{
                    list+='<option value="'+i+"-"+(i+1)+'">'+i+'-'+(i+1)+'</option>';
                }
            }
            session.html(list); 
            
            
        $(function(){
            var bar=$(".bar");
            var percent=$(".percent");
            $("form").ajaxForm({
                beforeSend:function(){
                    $(".progress").show();
                    var percentVal = '0%';
                    bar.width(percentVal);
                    percent.html(percentVal);
                },
                uploadProgress:function(event, position, total, percentComplete){
                    var percentVal = percentComplete + '%';
                    //console.log(percentVal);
                    bar.width(percentVal);
                    var rest="<span>"+(((total*percentComplete/100)/1024/1024).toFixed(2))+
                    " / "+((total/1024/1024).toFixed(2))+" MB</span>";
                    percent.html(percentVal+" "+rest);
                },
                complete:function(){
                    $(".progress").hide();
                    alert("Uploaded");
                }
            });
        });
        </script>

    </body>
</html>


<?php
/* end html */ 