<?php
@ob_start();
@session_start();
require 'dbHelper.php';
$dbHelper=new dbHelper();
$postInfo=$dbHelper->fetchPosts();
$row=  count($postInfo);
$col=  count($postInfo[0]);
//echo $row."--".$col;
$postInfo=  json_encode((array)$postInfo);
/** data has been fetched in the following sequence /
/* 0.ID, 1.user_id, 2.p_name, 3.age, 4.disease, 5.hospital, 6.blood_group, 7.bags, 8.phone, 9.within, 10.post_time, 12.posted_by */
/*
$patientName=$postInfo[2];
$age=$postInfo[3];
$disease=$postInfo[4];
$hospital=$postInfo[5];
$blood_group=$postInfo[6];
$noOfBags=$postInfo[7];
$phone=$postInfo[8];
$within=$postInfo[9];
$postTime=$postInfo[10];
$postedBy=$postInfo[11];
*/


/* start html */
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

.msg{font-family:Georgia, "Times New Roman", Times, serif;}

.img{height:30px;width:30px;}
.col-sm-4 {
    margin-right: 5px;
    width: 32.3333%;
}
</style>
<!---------------style ends here-------------------->



</head>





<body>

    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=104368330075260";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>




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
      <?php  
      if(isset($_SESSION['user_id'])){
          $fname=$_SESSION['fname'];
          $lname=$_SESSION['lname'];
      }
      
      ?>
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
            <script>
            var ppUrl="<?php echo $_SESSION['ppUrl']; ?>";
            $("#pp").attr("src","uploaded_files/"+ppUrl);
            </script>
            <?php
            
        }
        ?>
    </div>
  </div>
</nav><!-----total  nav bar ends here---------->
</div><!-----------------(End)nav bar  ta ei division er nested -------------->
</div><!----main holder ends---------->
<!--------Second container-fluid cover the Navigation bar portion---[Ends]-------->







<div class="container-fluid" style="margin-top:20px;"><!----------Main content for donors thumbnail goes here-------->

<div class="container pad-zero msg">
  
    <script>
        var row="<?php echo $row; ?>";
        var col="<?php echo $col; ?>";
        var data='';
    for(var i=0;i<row;i++){
        
var postInfo='<?php echo $postInfo ?>';
postInfo=JSON.parse(postInfo);
//console.log(postInfo[0][4]);


var patientName=postInfo[i][2];
var age=postInfo[i][3];
var disease=postInfo[i][4];
var hospital=postInfo[i][5];
var bloodGroup=postInfo[i][6];
var noOfBags=postInfo[i][7];
var phone=postInfo[i][8];
var within=postInfo[i][9];
var postTime=postInfo[i][10].substr(0, 10); /* keeps only date from timestamp */
var postedBy=postInfo[i][12];


            data+='<div class="col-sm-4 panel panel-primary pad-zero">';
             data+='<div class="panel-heading">';
                 data+='<img class="img img-circle" src="profile_pic/ava.png"/>';
                 data+='<b class="msg">'+postedBy+' posted [ '+postTime+' ]</b>';
             data+='</div>';
             
             data+='<div class="panel-body">';
                     data+="<b>Patient's Name: </b><span>"+patientName+"</span><br>";
                     data+="<b>Patient's Age: </b><span>"+age+"</span><br>";
                     data+="<b>Patient's Diseases: </b><span>"+disease+"</span><br>";
                     data+='<b>Hospital: </b><span>'+hospital+'</span><br>';
                     data+='<b>Group: </b><span>'+bloodGroup+'</span><br>';
		     data+='<b>Bags needed: </b><span>'+noOfBags+'</span><br>';
                     data+='<b>Contact: </b><span>'+phone+'</span><br>';
                     data+='<b>Need within: </b><span>'+within+' days</span><br>';
             
             data+='</div>'; 
                 data+='<div class="panel-footer">';
                         data+='<div class="fb-share-button" data-href="http://code--projects.com/badhan/" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fcode--projects.com%2Fbadhan%2F&amp;src=sdkpreparse">Share</a></div>';
                 data+='</div>';
         
         data+='</div>';
    }
    document.write(data);
    </script>
 
 <!--------------per block ends here-------------->
</div><!------------container ends here------------>




<!---------[lower part---vvv]---------See more------------------------>
<div class="container text-center">

   <p></p>
</div>
</div><!-------[Ends]-------------[Main content-fluid] for donors thumbnail goes here-------->







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
                                         
           
                                         
    </nav><!---------nav tag ends here------------------->
   </div><!------------con center sm7 ends here---------------->
  </div><!---------second container fluid ends here------------->
</div><!---------nammed panel footer------------->
</div><!-------[ends]--- the container-fluid name copy right here------------->



</body>
</html>
<?php
/* end html */