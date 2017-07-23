<!DOCTYPE html>
      <?php
	  include 'opendb.php';
	  session_start();
	  include 'login.php';
      $linkid=$_GET['pageid'];
	  
      ?>
<html lang="en">
<head>
  <title>CCNA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
  function startTime() {
	  var today = new Date();
	  var h = today.getHours();
	  var m = today.getMinutes();
	  var s = today.getSeconds();
	  m = checkTime(m);
	  s = checkTime(s);
	  document.getElementById('txt').innerHTML =
	  h + ":" + m + ":" + s;
	  var t = setTimeout(startTime, 500);
  }
  function checkTime(i) {
	  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
	  return i;
  }
  </script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body onLoad="startTime()">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://www.ums.edu.my"><img src="picture/ums.png" alt="Pic 02" width="80" height="30"/> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li width="20%" scope="col"><a href="?pageid=1">About</a></li>
          <li width="20%" scope="col"><a href="?pageid=2">Staff </a></li>
          <li width="20%" scope="col"><a href="?pageid=3">History</a></li>
          <li width="20%" scope="col"><a href="?pageid=4">Contact</a></li>
          

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logininterface.php"><span class="glyphicon glyphicon-log-in"></span> Sign in</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#"></a></p>
      <div class="well">
        <p>
          <?php
                
              echo "Hello welcome to CCNA lab monitoring system";?>
        </p>
      </div>
  
    
    </div>
    <div class="col-sm-8 text-left"> 
      <?php 
             if($linkid=='1')
            {
                echo "<br>About CCNA security monitoring site";  
				echo "<br><br><br>By developing this project, it could be one of the problem solution from issue face by lab technician and lecturerand next it will help them to manage the learning process more efficiency.";
            }
             else if($linkid=='2')
            { 
              
              echo "<br>Our Team comprises of the following members";
              $queryone="SELECT * FROM user";
              $resultqueryone=mysql_query($queryone) or die("Error retrieving details");
              echo "<ol>";
              while($row=mysql_fetch_array($resultqueryone,MYSQL_ASSOC))
              {
                extract($row);
                echo "
				<table style='width:80%'>
                <tr>
                <td><img src='picture/$image' alt='Boss' style='width:45%' class='w3-circle w3-hover-opacity'></td>
   
                <td><br> Name: <b>$name<br>
				Position: $position<br>
                Contact: $contact<br>
                Email address: $email<br>
				Office address:$office</b></td>
 
                </table>
                   <br>";
                echo "<br>";
              }
              echo "</ol>";
            }
            
             else if($linkid=='3')
            {
              echo "<br>History recorded";
              $queryone="SELECT * FROM history";
              $resultqueryone=mysql_query($queryone) or die("Error retrieving details");
              echo "<ol>";
              while($row=mysql_fetch_array($resultqueryone,MYSQL_ASSOC))
              {
                extract($row);
                echo  "<li>User: <b>$user</b><br>
				Purpose: <b>$purpose</b></br>
				Date: <b>$date</b></br>
                Time attempt: <b>$time_attempt</b><br>
                Time left: <b>$time_left</b><br>
                Report: <b>$report</b><br>
               </li>";
                echo "<br>";
              }
              echo "</ol>";
            }
            elseif($linkid=='4')
            {
              include 'contact.php';
            } 
			elseif($linkid=='5')
            {
              include 'report.php';
            }
            else
            {
				
            echo "<br>Welcome to CCNA security monitoring site<br><br>";  
		    echo "Camera 1<img name='currentcapture' src='http://10.62.108.167:8081' width='420' height='300' alt='' align='centre'>";
		    echo "Camera 2<img name='currentcapture' src='http://10.62.108.245:8081' width='420' height='300' alt='' align='centre'>";
            }
            ?></p>
      <hr>
      <h3></h3>
      <p>&nbsp;</p>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
          <p><a href="?pageid=5">REPORT</a></p>
        
      </div>
      <div class="well">
        <p >Time<div id="txt"></div></p>
      </div>
    </div>
  </div>
</div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-grey">  
    <div class="w3-row-padding">
      <div class="w3-third">
        <h3 align="justify">INFO</h3>
        <p align="justify">This project presents as development of titled Security Monitoring System for Labs by using Raspberry Pi for Faculty of Computing and Informatics (FCI) University Malaysia Sabah. By using microcontroller Raspberry Pi data are collected and it present in form of picture captured saved in cloud storage that already configured. By developing this project, it could be one of the problem solution from issue face by lab technician and lecturerand next it will help them to manage the learning process more efficiency.</p>      
      </div>
    
      <div class="w3-third">
        <h3>OTHER LINK</h3>
        <ul class="w3-ul">
          <li>
            <img src="picture/umss.png" class="w3-left w3-margin-right" style="width:50px">
            <span><br><a href="http://www.ums.edu.my">University Malaysia Sabah</span>
          </li>
          <li>
            <img src="picture/fkilogo.png" class="w3-left w3-margin-right" style="width:50px">
            <span><br><a href="http://www.ums.edu.my/fki/">Faculty of Computing and Informatics</span>
          </li> 
           <li>
            <img src="picture/ccna.jpg" class="w3-left w3-margin-right" style="width:50px">
            <span><br><a href="https://www.netacad.com/">Networking Academy (CCNA)</span>
          </li> 
        </ul>
      </div>

      <div class="w3-third">
        <h3>FIND US</h3>
        <p>
         <td width="64%"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.698341646604!2d116.1198039146452!3d6.036070095628543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x323b6b7025750eef%3A0x6482cfc84263a9cc!2sCCNA+Lab+Faculty+of+Computing+and+Informatics!5e0!3m2!1sen!2s!4v1489598276669" width="350" height="200" frameborder="0" style="border:0" allowfullscreen> </iframe></div></td>
        </p>
      </div>
    </div>
  </footer>
  
  <div class="w3-black w3-center w3-padding-24">Create by Nurul Fatihah (Final Year Project 2017)</div>


    <!-- Footer End -->

</body>
</html>
