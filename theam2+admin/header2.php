<?






?>


<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    <title>Small Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link href="css/small-business.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<script type="text/javascript" src="NotificationAjax.js"></script>
    <![endif]-->
<script type="text/javascript" src="NotificationAjax.js"></script> 
</script>
</script> 	
	<style>

.navbar-primary{font-size: 18px;}
.navbar-primary .navbar { border-radius:0px;background:rgba(10, 32, 142, 0.83); border-bottom:none; border-width: 2px; border-color:#3346a1;}
.navbar-primary .navbar .nav > li > a {color: #fff;}
.navbar-primary .navbar .nav > li > a:hover {color: #fff; background-color: rgba(15, 19, 76, 0.95);}
.navbar-primary .navbar .nav .active > a,.navbar .nav .active > a:hover {color: #fff; background-color: rgba(15, 19, 76, 0.95);}
.navbar-primary .navbar .nav li > a .caret, .tnav .navbar .nav li > a:hover .caret {border-top-color: #fff;border-bottom-color: #fff;}
.navbar-primary .navbar .nav > li.dropdown.open.active > a:hover {}
.navbar-primary .navbar .nav > li.dropdown.open > a {color: #fff;background-color: #9f58b5;border-color: #0043ff;}
.navbar-primary .navbar .nav > li.dropdown.open.active > a:hover .caret, .tnav .navbar .nav > li.dropdown.open > a .caret {border-top-color: #fff;}
.navbar-primary .navbar .navbar-brand {color:#fff;}
.navbar-primary .navbar .nav.pull-right {margin-left: 10px; margin-right: 0;}
.loop-post {background-color: rgb(245, 245, 245); border-radius: 5px;box-shadow: 2px 3px 1px rgba(20, 20, 21, 0.62);}
	
	</style>
	
	
	    <!-- Navigation head-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="height: 65px;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href=""></a>
                    </li>
                    <li>
                        <a href=""></a>
                    </li>
                    <li>
                        <a href=""></a>
                    </li>
                </ul>
				<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>
				   <li><a href="" style="padding-top: 6px;padding-left: 1px;"><?php echo '<h4>Welcome : '.$_SESSION["username"].'</h4>'; ?></a></li>
				   <li class="dropdown">
				   <a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-envelope" style="font-size:18px;"></span></a>
					<ul class="dropdown-menu"></ul>
				</ul>
				</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container" style="background-color: white;border-right: 3px solid #a09f9f;border-left: 3px solid #a09f9f;box-shadow: 0px -1px 9px 2px #888888;">

        <!-- Heading Row -->
      <div class="img-head" style="box-shadow: 0px -1px 12px 6px rgba(0, 0, 0, 0.52);">
        <div class="row">
		 
            
			<center>
                <img class="img-responsive img-rounded" src="img/Untitled-2.jpg" alt="">
			</center>
      
          </div>  
        </div>
        <!-- /.row -->
		 <!-- Menu-bar -->
		 
		 
<div class="navbar-primary">
 <nav class="navbar navbar-default" style="margin-left: -15px; margin-right: -15px;">
  <div class="container-fluid">
    <div class="navbar-header">
	<ul class="nav navbar-nav">
      <li><a class="active" href="http://localhost/theam2+admin/home.php">หน้าแรก</a></li>
      <li><a  href="#">เกี่ยวกับเว็บไซต์</a></li>
	  
	  <li><a href="http://localhost/theam2+admin/search.php?txtKeyword=&search_opt=title&search_city=">ค้นหา/ข้อมูลสถานที่ฝึกงาน</a></li>
      <li><a href="#">สมัครเข้าร่วมโครงการสหกิจ</a></li>
	  <li><a href="#">จัดการข้อมูลสมาชิก</a></li>
	  <li><a class="menu" href="#">ติดต่อ</a></li>
	  <li><a class="menu" href="logout.php">ออกจากระบบ</a></li>
	</ul>
</div>
</div>
  
</nav>
</div>
</head>