


<?php

?>

<!doctype html>
<html lang="en">
<head>
<title>HOME</title>




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
.panel-footer table{font-family:Georgia, "Times New Roman", Times, serif; font-size:12px}
.col-centered{float:none;margin:0px auto;}
.copy{font-family: Verdana,Geneva,sans-serif;font-size: 12px;font-weight: bold;margin-top:5px;}
.ulo{margin:0px;padding:0px;}
.ulo li a{padding:0px;}
.ulo li{padding:2px;}


.affix  {
      top: 0;
     width:100%;}

.affix + .container-fluid {
      padding-top: 70px;
  }

.room{
padding:5px; 
background:#F5F5F5; 
font-family:Georgia, "Times New Roman", Times, serif;
margin-right:4px;
width:24.5%;
}
.room-sur {padding-bottom:10px;}
.ph{font-weight:bold; font-family:Verdana, Geneva, sans-serif;font-size:14px;}


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








<!----body starts here----------->
<div class="container-fluid" style="margin-top:20px;"><!----------Main content for donors thumbnail goes here-------->
<div class="container room-sur panel panel-primary">
     <div class="panel-heading"><h4>Our Hall Survey (Blood Donors' Per Room:)</h4></div>
        <div class="panel-body">
        <?php 
        $x=1;
        while($x!=41)
        {echo '<div class="'.'col-sm-3 room thumbnail"'.'>Room <span class="'.'badge"'.'>404
		</span> Donors number <span class="'.'badge"'.'>
        404</span><p style="'.'margin-top:10px'.'"><a><span class="'.'btn btn-info btn-sm">Click to see</span></a></p></div>';
        $x++;
        }
        ?>
        </div>

            <div class="panel-footer"><!-------------------paginition------------------------>
               <div class="col-sm-4 col-centered">
                <ul class="pagination" style="font-weight:bold">
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                </ul>		 
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



