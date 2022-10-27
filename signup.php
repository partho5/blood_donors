<?php


if(!isset($_POST['create'])){
    /* start html */
    ?>
        <!doctype html>
    <html lang="en">
        <head>
            <title>BADHAN</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">


            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="js/myLibrary.js" type="text/javascript"></script>


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
              margin: -10px auto;
          }
          p {
              font-family: Verdana,Geneva,sans-serif;
              font-size: 12px;
              font-weight: bold;
            margin-top:0px;
          }
          .form-group{
            margin-bottom:3px;
          }
          .len{
            width:80px;
            height:28px;
            border:1px solid gray;
            border-radius:5px;
            font-weight:bold;
            font-size:12px;
          }
          .panel-heading:{
          padding: 5px 10px;  
          }
          .tv{
            overflow:hidden;
            margin:50px auto;
            height:200px;
            padding:0px;
            position:relative;
            margin-bottom:122px;
          }
          .each {
              font-family: Verdana,Geneva,sans-serif;
              font-size: 14px;
              font-weight: bold;
              height: 99%;
              margin: 0 auto;
              overflow: hidden;
              padding: 0;
              position: absolute;
              text-align: center;
              width: 100%;
            animation:opacity 30s ease-out infinite;
              opacity:0;
            background:white;
          }
          .each img{height:100px;
          width:100px;
          border-radius:50%;
          margin:0px;
          padding:0px;
          }
          .each span{font-weight:bold;
          font-family:Georgia, "Times New Roman", Times, serif;
          font-size:20px;}


          .each:nth-child(1) {animation-delay:0s;}
          .each:nth-child(2) {animation-delay:6s;}
          .each:nth-child(3) {animation-delay:12s;}
          .each:nth-child(4) {animation-delay:18s;}
          .each:nth-child(5) {animation-delay:24s;}

          @keyframes opacity
          {

          2%{opacity:1;}
          19%{opacity:1;}
          20%{opacity:0;} 
          }
     
          .panel-primary{
            border:1px solid transparent;
      
          }
          
          /* form validation error msg color */
          .error{
              color: #FF0000;
          }
     
            </style>
        </head>





        <body>
            <!----------compusory----------->
            <div class="login">
            </div>
            <!-------end--------------------->

            <div class="container">
                <div class="col-centered col-sm-4 text-center">
                    <img height="80px" width="100px" src="images/dulogo.png"><br>
                    <p>BADHAN<br>Jagannath Hall Unit<br>ESTD: 04 August 2007<br></p>
                </div>
            </div>


            <div class="container" style="margin-top:5px;"><!----second container starts here----------------->


                <div class="col-sm-6"  style="padding:0px">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><b>Some motivational speeches:</b></div>
                        <div class="panel-body">
                            <!-----------------slider will be here--------------->
                            <div class="tv">


                                <div class="each">
                                    <img src="slider_images/mahatma.jpg"/>
                                    <br>
                                    <span>-Mahatma Gandhi-</span>
                                    <br>
                                    “An eye for an eye will only make the whole world blind.”
                                </div>




                                <div class="each">
                                    <img src="slider_images/mother.jpg"/>
                                    <br>
                                    <span>- Mother Teresai-</span>
                                    <br>
                                    “Peace begins with a smile..” 
                                </div>
                                <!---------------------------->

                                <div class="each">
                                    <img src="slider_images/varginiya.jpg"/>
                                    <br>
                                    <span>-Virginia Woolf-</span>
                                    <br>
                                    “You cannot find peace by avoiding life.”
                                </div>
                                <!---------------------------->

                                <div class="each">
                                    <img src="slider_images/layla.jpg"/>
                                    <br>
                                    <span>-Lailah Gifty Akita-</span>
                                    <br>
                                    “We ought to love, encourage and support each other.” 
                                </div>
                                <!---------------------------->

                                <div class="each">
                                    <img src="slider_images/deba.jpg"/>
                                    <br>
                                    <span>-Debasish Mridha-</span>
                                    <br>
                                    “When I see that humanity is suffering, it tears my heart. I cry, and then I extend my hand to help heal my heart.”
                                </div>
                                <!---------------------------->



                            </div>
                            <!-----------------slider will be here--------------->
                        </div>


                    </div>
                </div>
                <!----------------------------------------------------------------------------------------------------------------------------->
                <div class="col-sm-6" style="padding:0px"><!----------form div start-------->
                    <div class="panel panel-primary">
                        <div class="panel-heading"><b>Create your free account to join us:</b></div>

                        <div class="panel-body">
                            <form id="signup_form" class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <div class="form-group form-group-sm">
                                    <label class="control-label col-sm-3" for="one">First Name:</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="fname" class="form-control input-lg" id="one" placeholder="First Name"/> 
                                    </div>
                                </div>
                                <!--------------------------------------->

                                <div class="form-group form-group-sm">
                                    <label class="control-label col-sm-3" for="two">Last Name:</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="lname" class="form-control input-lg" id="two" placeholder="Last Name"/> 
                                    </div>
                                </div>
                                <!--------------------------------------->


                                <div class="form-group form-group-sm">
                                    <label class="control-label col-sm-3" for="three">Your Email:</label>
                                    <div class="col-sm-6">
                                        <input type="email" name="email" class="form-control input-lg" id="three" placeholder="Your Email"/> 
                                    </div>
                                </div>
                                <!--------------------------------------->

                                <div class="form-group form-group-sm">
                                    <label class="control-label col-sm-3" for="four">Password:</label>
                                    <div class="col-sm-6">
                                        <input type="password" name="password" id="password" class="form-control input-lg" id="four" placeholder="Your Password"/> 
                                    </div>
                                </div>
                                <!--------------------------------------->

                                <div class="form-group form-group-sm">
                                    <label class="control-label col-sm-3" for="five">Repeat Password:</label>
                                    <div class="col-sm-6">
                                        <input type="password" name="re_password" class="form-control input-lg" id="five" placeholder="Retype Password"/> 
                                    </div>
                                </div>
                                <!---------------------hhhh------------------>


                                <div class="form-group form-group-sm">
                                    <label class="control-label col-sm-3" for="six">Phone No:</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="phone" class="form-control input-lg" id="six" placeholder="Your Phone no"/> 
                                    </div>
                                </div>
                                <!--------------------------------------->


                                <div class="form-group form-group-sm">
                                    <label class="control-label col-sm-3" for="seven">Weight (in Kg):</label>
                                    <div class="col-sm-6">
                                        <input type="number" min="30" value="30" name="weight" class="form-control input-lg" id="seven" placeholder="weight"/> 
                                    </div>
                                </div>
                                <!--------------------------------------->



                                <div class="form-group form-group-sm">
                                    <label class="control-label col-sm-3" for="eight">Blood Group:</label>
                                    <div class="col-sm-6">

                                        <select id="eight" name="blood_group" class="form-control" style="font-weight:bold">
                                            <option value="" select="selected disabled" >Select your group</option>
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
                                <!--------------------------------------->

                                <div class="form-group form-group-sm">
                                    <label class="control-label col-sm-3" for="nine">Your Gender:</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="gender" id="nine" style="font-weight:bold">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select> 
                                    </div>
                                </div>
                                <!--------------------------------------->

                                <div class="form-group form-group-sm">
                                    <label class="control-label col-sm-3" for="ten">Your Birthday:</label>
                                    <div class="col-sm-6">



                                        <!-----------date related mattter------------------>
                                        <select class="len" id="ten" name = "month">
                                            <option value="" select="selected disabled" >Month</option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>


                                        <select class="len" id="ten" name = "day">
                                            <option value="" select="selected disabled" >Day</option>
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


                                        <select class="len" id="ten" name = "year">
                                            <option value="" select="selected disabled" >Year</option>
                                            <option value='1960'>1960</option>
                                            <option value='1961'>1961</option>
                                            <option value='1962'>1962</option>
                                            <option value='1963'>1963</option>
                                            <option value='1964'>1964</option>
                                            <option value='1965'>1965</option>
                                            <option value='1966'>1966</option>
                                            <option value='1967'>1967</option>
                                            <option value='1968'>1968</option>
                                            <option value='1969'>1969</option>
                                            <option value='1970'>1970</option>
                                            <option value='1971'>1971</option>
                                            <option value='1972'>1972</option>
                                            <option value='1973'>1973</option>
                                            <option value='1974'>1974</option>
                                            <option value='1975'>1975</option>
                                            <option value='1976'>1976</option>
                                            <option value='1977'>1977</option>
                                            <option value='1978'>1978</option>
                                            <option value='1979'>1979</option>
                                            <option value='1980'>1980</option>
                                            <option value='1981'>1981</option>
                                            <option value='1982'>1982</option>
                                            <option value='1983'>1983</option>
                                            <option value='1984'>1984</option>
                                            <option value='1985'>1985</option>
                                            <option value='1986'>1986</option>
                                            <option value='1987'>1987</option>
                                            <option value='1988'>1988</option>
                                            <option value='1989'>1989</option>
                                            <option value='1990'>1990</option>
                                            <option value='1991'>1991</option>
                                            <option value='1992'>1992</option>
                                            <option value='1993'>1993</option>
                                            <option value='1994'>1994</option>
                                            <option value='1995'>1995</option>
                                            <option value='1996'>1996</option>
                                            <option value='1997'>1997</option>
                                            <option value='1998'>1998</option>
                                            <option value='1999'>1999</option>
                                            <option value='2000'>2000</option>
                                            <option value='2001'>2001</option>
                                            <option value='2002'>2002</option>
                                            <option value='2003'>2003</option>
                                            <option value='2004'>2004</option>
                                            <option value='2005'>2005</option>
                                            <option value='2006'>2006</option>
                                            <option value='2007'>2007</option>
                                            <option value='2008'>2008</option>
                                            <option value='2009'>2009</option>
                                            <option value='2010'>2010</option>
                                            <option value='2011'>2011</option>
                                            <option value='2012'>2012</option>
                                            <option value='2013'>2013</option>
                                            <option value='2014'>2014</option>
                                            <option value='2015'>2015</option>
                                        </select>


                                    </div>
                                </div>
                                <!--------------------------------------->



                                <div class=" form-group form-group-sm" style="margin-top:10px">
                                    <div class="col-sm-offset-3 col-sm-6">
                                        <input type="submit" name="create" value="Create Account" class="btn btn-md btn-success"/>
                                    </div>
                                </div>


                            </form>

                        </div><!--------panel body------------->

                    </div><!--------------------------------------form div end--------->


                </div><!---------------second container ends here-------------------->
         
                <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js" type="text/javascript"></script>
                <script type="text/javascript">
                    $(document).ready(function(){
                        /*
                        $.validator.addMethod("checkEmail",function(value,element){
                        var isAvailable;
			$.ajax({
				url:"check_email_availability.php",
				type:"POST",
				async:false,
				data:{email:value},
				success:function(data){
                                    isAvailable=(data)? true:false;
				}					
                        });
                        return isAvailable;
			}, "email taken already");
                        */
                        $("#signup_form").validate({
                            rules:{
                                fname:{
                                    required:true
                                },
                                lname:{
                                    required:true
                                },
                                email:{
                                    required:true
                                },
                                password:{
                                    required:true,
                                    minlength:6
                                },
                                re_password:{
                                    required:true,
                                    equalTo:"#password"
                                },
                                phone:{
                                    required:true
                                },
                                weight:{
                                    required:true
                                },
                                blood_group:{
                                    required:true
                                },
                                gender:{
                                    required:true
                                },
                                day:{
                                    required:true
                                },
                                month:{
                                    required:true
                                },
                                year:{
                                    required:true
                                }
                            }
                        });
                    });
                </script>


        </body>
    </html>
    <?php
    /* ^^^^^ End html */
}else{
    @session_start();
    require 'dbHelper.php';
    
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $weight=$_POST['weight'];
    $blood_group=$_POST['blood_group'];
    $gender=$_POST['gender'];
    $birthday=$_POST['day']."/".$_POST['month']."/".$_POST['year'];
    //echo $fname."--".$lname."--".$password."--".$re_password."--".$phone."--".$weight."--".$blood_group."--".$gender."--".$birthday;
    $dbHelper=new dbHelper();
    try {
        $dbHelper->insertRegData($fname, $lname, $email, $password, $phone, $weight, $blood_group, $gender, $birthday);
        $_SESSION['user_email']=$email;
        header("Location:profile.php");
    } catch (Exception $exc) {
        echo $exc->getMessage();
    }

}

