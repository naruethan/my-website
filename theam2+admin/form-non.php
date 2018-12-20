<?php
	session_start();
  $qurry_token= "56243206006-9";
	$_SESSION['member_token'] = $qurry_token;
	require('/header.php');
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Webslesson Tutorial | Facebook Style Header Notification using PHP Ajax Bootstrap</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br /><br />
  <div class="container">
   <nav class="navbar navbar-inverse">
    <div class="container-fluid">
     <div class="navbar-header">
      <a class="navbar-brand" href="#">Webslesson Tutorial</a>
     </div>
     <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-envelope" style="font-size:18px;"></span></a>
       <ul class="dropdown-menu"></ul>
      </li>
     </ul>
    </div>
   </nav>
   <ul>
  <li><a href="http://localhost/theam2+admin/home.php">หน้าแรก</a></li>
  <li><a href="http://localhost/theam2+admin/search.php?txtKeyword=&search_opt=title&search_city=">ค้นหา/ข้อมูลสถานประกอบการ</a></li>
  <li><a href="about.asp">สมัครเข้าร่วมโครงการสหกิจ</a></li>
  <li><a href="about.asp">จัดการข้อมูลสมาชิก</a></li>
  <li><a href="about.asp">ติดต่อ</a></li>
  <li><a href="http://localhost/theam2+admin/logout.php">ออกจากระบบ</a></li>
  <li class="dropdown">
  <a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-envelope" style="font-size:18px;"></span></a>
  <ul class="dropdown-menu"></ul>
</ul>
   <br />
   <h2 align="center">Facebook Style Header Notification using PHP Ajax Bootstrap</h2>
   <br />

   
  </div>
  

<script type="text/javascript" src="NotificationAjax.js"></script> 


 </body>
</html>


