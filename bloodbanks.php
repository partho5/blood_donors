<?php

?>

<!doctype html>
<html lang="en">
<head>
<title>BLOOD BANK</title>




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





.img{height:100px;width:100px;}
.thumbnail {
    background: #F5F5F5;
    height: 270px;
    margin-right: 4px;
    width: 280px;
	
opacity:0;
animation:opacity 1600ms ease-out;
animation-iteration-count:1;
animation-fill-mode:forwards;
}
.thumbnail:nth-child(1) {animation-delay:0s;}
.thumbnail:nth-child(2) {animation-delay:200ms;}
.thumbnail:nth-child(3) {animation-delay:400ms;}
.thumbnail:nth-child(4) {animation-delay:600ms;}
.thumbnail:nth-child(5) {animation-delay:800ms;}
.thumbnail:nth-child(6) {animation-delay:1000ms;}
.thumbnail:nth-child(7) {animation-delay:1200ms;}
.thumbnail:nth-child(8) {animation-delay:1400ms;}
.lekha span{font-weight:bold;font-family:Georgia, "Times New Roman", Times, serif}
.lekha {font-family:Georgia, "Times New Roman", Times, serif;margin-top:5px;}


@keyframes opacity{
0%{opacity:0;}
4%{opacity:1;}
100%{opacity:1}	
	
}










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
      <img class="img-circle i-c" src="profile_pic/ava.png" style="margin-right:10px;">
      <span class="navbar-brand n-b"> Dipu Mondal</span>
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
              
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Log-Out</a></li>
            </ul>
    </div>
  </div>
</nav><!-----total  nav bar ends here---------->
</div><!-----------------(End)nav bar  ta ei division er nested -------------->
</div><!----main holder ends---------->
<!--------Second container-fluid cover the Navigation bar portion---[Ends]-------->







<div class="container-fluid" style="margin-top:20px;"><!--------------------Main content for donors thumbnail goes here-------->
<div class="container pad-zero">
        <div class="panel panel-primary">
           <div class="panel-heading text-center"><h4>Some Blood Banks Near To You:</h4></div>
              <div class="panel-body">
                        
                        
                <div class="col-sm-4 thumbnail">
                                <div class="img">
                                <img src="images/dulogo.png" height="100%" width="100%"/>
                                </div>
                                
                                <div class="lekha">
                                <span>Name:</span> Badhon – Blood Bank in Bangladesh<br>
                                <span>Address:</span> Inside TSC (Ground Floor), Dhaka University<br>
                                <span>Telephone no:</span> 8629042.<br />
                                <span>Phone Number:</span> 01711025876, 01720080012, 01917264615.
                                </div>               
                </div>
                
                <div class="col-sm-4 thumbnail">
                                 <div class="img">
                                <img src="images/police.png" height="100%" width="100%"/>
                                </div>
                                
                                <div class="lekha">
                                <span>Name:</span> Police Blood Bank<br>
                                <span>Address:</span>  Central Police Hospital, Rajarbag, Dhaka. <br>
                                <span>Telephone no:</span> 9362573.<br />
                                <span>Phone Number:</span>  01713-398386.
                                </div>               
                </div>
                
                <div class="col-sm-4 thumbnail">
                                     <div class="img">
                                    <img src="images/redcricent.png" height="100%" width="100%"/>
                                    </div>
                                    
                                    <div class="lekha">
                                    <span>Name:</span> Bangladesh Red Crescent Society.<br>
                                    <span>Address:</span> 7/5 Aurongzeb Road, Mohammadpur, Dhaka, Bangladesh.<br>
                                    <span>Telephone no:</span> 02 9116563
                                    </div>             
                </div>
                
                <div class="col-sm-4 thumbnail">

                    <div class="img">
                    <img src="images/quantum.png" height="100%" width="100%"/>
                    </div>
                    
                    <div class="lekha">
                    <span>Name:</span> Quantum Foundation Bangladesh.<br>
                    <span>Address:</span> 119, Shantinagar, Dhaka, Bangladesh.<br>
                    <span>Telephone no:</span> 029351969, 02 8322987<br />
                    <span>Mobile no:</span> 01617826886
                    </div>                
                </div>
                
                
                
                
                <div class="col-sm-4 thumbnail">
                            <div class="img">
                            <img src="images/sondhani.png" height="100%" width="100%"/>
                            </div>
                            
                            <div class="lekha">
                            <span>Name:</span> Sandhani Blood Bank Bangladesh.<br>
                            <span>Unite name:</span> Dhaka Medical College Hospital Unit.<br />
                            <span>Address:</span> Dhaka Medical College, Dhaka, Bangladesh.<br>
                            <span>Telephone no:</span>  029668690<br />
                            <span>Mobile no:</span> 01819284878. 
                            </div>                
                
                </div>
                
                
                <div class="col-sm-4 thumbnail">
                            <div class="img">
                            <img src="images/sondhani.png"/>
                            </div>
                            
                            <div class="lekha">
                            <span>Name:</span> Sandhani Blood Bank Bangladesh.<br>
                            <span>Unite name:</span> Sandhani, Dhaka Dental College Hospital Unit.<br />
                            <span>Address:</span> Dhaka Dental College, Dhaka, Bangladesh.<br>
                            <span>Telephone no:</span> 028017146, 029002035.
                            </div>                
                </div>
                
                <div class="col-sm-4 thumbnail">
                                <div class="img">
                                <img src="images/islami.png"/>
                                </div>
                                
                                <div class="lekha">
                                <span>Name:</span> Islami Bank Hospital<br>
                                <span>Address:</span> Kakril, Dhaka<br>
                                <span>Telephone no:</span> 8317090, 8321495.
                                </div>                
                </div>
                
                
                <div class="col-sm-4 thumbnail">
                            <div class="img">
                            <img src="images/sm.png"/>
                            </div>
                            
                            <div class="lekha">
                            <span>Name:</span> Sir Salimullah College Blood Bank<br>
                            <span>Address:</span> Dhaka, Bangladesh <br>
                            <span>Telephone no</span>: +880-2-7319123.
                            </div>                
                </div>
                
                                        
                        
        </div>
</div>
</div><!-------[Ends]-------------Main content for donors thumbnail goes here-------->







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
