<?php
@ob_start();
@session_start();
if(!isset($_SESSION['admin'])){/* not logged in as admin */
    $_SESSION['redirectedFrom']="donorlist.php";
    @header("Location:admin_login.php");
}

/* start html */
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Search</title>




        <!-------------------Meta and links-------------------------->
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-------------------Meta and links-------------------------->    


        
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


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

        .modal-body{text-align:left;}
        #search{padding:20px;}
        .donorthum{font-family:Georgia, "Times New Roman", Times, serif;text-align:center;}
        #myModal{z-index:40000;}



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
                            <div><a href="">
                                    <img class="img-circle i-c" src="profile_pic/ava.png" style="margin-right:10px;">
                                    <span class="navbar-brand n-b">Admin Panel</span>
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






        <div class="container-fluid" id="search"><!----------------the third container-fluid for the search form starts here------------>
            <div class="container">
                <div class="col-sm-4 col-centered">
                    <form>
                        <div class="form-group-sm col-sm-8">
                            <select name="search-group" id="blood_group" class="form-control" style="font-weight:bold;padding:0px;margin:0px;">
                                <option selected disabled="disabled">Select a group</option>
                                <option>A Positive</option>
                                <option>A Negative</option>
                                <option>B Positive</option>
                                <option>B Negative</option>
                                <option>AB positive</option>
                                <option>AB Negative</option>
                                <option>O Positive</option>
                                <option>O Negative</option>
                            </select>
                            <span>The date you need blood</span>
                            <input type="text" name="last_date" id="last_date" class="last_date" placeholder=""/>
                        </div>
                        
                        <button type="button" name="b-search" id="search_btn" class="btn btn-success btn-sm">Search</button>
                    </form>

                </div>
            </div>
        </div><!----------------the third container-fluid for the search form ends here------------>








        <div class="container-fluid"><!--------------------Main content for donors thumbnail goes here-------->
            <div class="container pad-zero">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h4></h4></div>
                    <div id="panel-body" class="panel-body">


                    </div><!----------------panel body ends here--------------------->
                    <p id="load_more" style="display:none;">Load More</p> 





                    <div class="panel-footer"><!-----footer starts here------------->
                        <p>Please try to follow these rules:</p>
                        <ul>
                            <li>Keep contract with the donor.</li>
                            <li>Company the donors.</li>
                            <li>Bear the fright cost.</li>
                            <li>Save the donors' phone number.</li>
                            <li>Be always thankful to donors'.</li>
                            <li>Try to take care of donors'</li>
                        </ul>
                    </div><!--------panel-footer end----------------->

                </div><!-------end of panel----------------->            
            </div><!-------------end of container-------------->
        </div><!-------[Ends]-------------Main content for donors thumbnail goes here-------->






        <div class="container-fluid"><!-------[starts]-- the container-fluid name paging------->
            <div class="container pad-zero">
                <div class="col-sm-4 col-centered">
                    <ul class="pagination">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                    </ul>
                </div>
            </div>
        </div><!-------[ends]-- the container-fluid name paging------->








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

        
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="js/myLibrary.js"></script>
        <script>
        var isSearchClicked=false;
        var lastId=0; //used in ajax call but this variable is completely redundant.
        var info, row4Pagination, rowCpy, iterateTo, i, dataPerLoad=12;
        $(document).ready(function(){
            $("#last_date").datepicker({
                minDate: new Date()
            });
            $("#search_btn").click(function(){
                $("#panel-body").text("");
                isSearchClicked=false;
                var blood_group=$("#blood_group").val();
                var last_date=$("#last_date").val();
                
                //console.log(blood_group+"--"+last_date);
                if(blood_group && last_date){
                    //console.log(blood_group+"--"+last_date);
                    //console.log("-----"+fetchDonors(blood_group, last_date)+"----");
                    if(!isSearchClicked){
                        $.ajax({
        url:"fetch_donors_ajax.php",
        type:"POST",
        data:{
            blood_group:blood_group,
            last_date:last_date,
            lastId:lastId
        },
        dataType:"text",
        success:function(server_response){
            info=JSON.parse(server_response);
            console.log(info);
            var row=info.length;
            //console.log(row);
            if(row===0){
                $(".panel-heading h4").text("No donor found");
                $(".panel-heading h4").css("color", "#FF2200");
                $("#load_more").hide();
            }else{
                $(".panel-heading h4").text("Honorable donors' list of "+blood_group+" blood");
                $(".panel-heading h4").css("color", "#000000");
                $("#load_more").show();
            }
            /*
            console.log(info);
            console.log(info[0].length);
            console.log(info[0][0][0]);
            */
            data='';
            rowCpy=row;
            row=(row>=dataPerLoad)? dataPerLoad:row;
            row4Pagination=(row==dataPerLoad)? rowCpy-dataPerLoad:0;
            for(i=0;i<row;i++){
                //console.log("data writing for i="+i);
                data+='<div class="col-sm-3 donorthum thumbnail">'+
                      '<img src="profile_pic/ava.png" class="img-thumbnail img"/>'+
                      
                     '<b>Name:</b> '+info[i][0][0]+' '+info[i][0][1]+'<br>'+
                      '<b>Blood Group:</b>'+info[i][0][2]+'<br>'+
                      '<b>Phone:</b> '+info[i][0][3]+'<br>'+
                      '<b>Department:</b>'+info[i][0][4]+'<br>'+
                      '<b>Last Donate</b><input type="text" id="lastDonate" value="'+info[i][0][4]+'" />'+
                      '<b>Details</b><input type="text" id="details" value="'+info[i][0][4]+'" />'+
                      '<div class="modal fade" id="myModal" role="dialog">'+
                      '</div>'+
                      '</div>';
            }
            $("#panel-body").append(data);
            isSearchClicked=true;
            
        },
        error:function(textStatus){
            console.log(textStatus);
        }
    });
                    }
                }else{
                    alert("Both blood group and date are needed !");
                }
            }); /*end search_btn click() */
            
            $("#load_more").click(function(){
                if(row4Pagination>0){
                    if(row4Pagination>dataPerLoad){
                        iterateTo=dataPerLoad*2;
                        row4Pagination-=dataPerLoad;
                    }else{
                        iterateTo=rowCpy;
                    }
                    //alert(row4Pagination+"-"+rowCpy);
                    data='';
                    
                    for(;i<iterateTo;i++){
                //console.log("data writing for i="+i);
                data+='<div class="col-sm-3 donorthum thumbnail">'+
                      '<img src="profile_pic/ava.png" class="img-thumbnail img"/>'+
                      
                     '<b>Name:</b> '+info[i][0][0]+' '+info[i][0][1]+'<br>'+
                      '<b>Blood Group:</b>'+info[i][0][2]+'<br>'+
                      '<b>Phone:</b> '+info[i][0][3]+'<br>'+
                      '<b>Department:</b>'+info[i][0][4]+'<br>'+
                      '<b>Last Donate</b><input type="text" />'+
                      '<div class="modal fade" id="myModal" role="dialog">'+
                      '</div>'+
                      '</div>';
                }
                $("#panel-body").append(data);
                
                }
            }); //end   #load_more.click()
            
            
            
        });
        </script>

    </body>
</html>


<?php
/* end html */
