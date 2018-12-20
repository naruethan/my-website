<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="">
 <meta name="author" content="">
 <META HTTP-EQUIV="Expires" CONTENT="-1">
 <title></title>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $('ul li a').click(function(){
    $('li a').removeClass("active");
    $(this).addClass("active");
});
});
</script>
<style>
body{
  font-sze:14px;
}

.container{
 max-width:960px;
  margin:0 auto;
}
nav ul li{
  list-style:none;
  float:left;
  padding-right:20px;
}
nav ul li a{
  text-decoration:none;
  color:#222;
  background-color:#ccc;
  padding:4px 5px;
}
.active{
  background-color:#d90000;
  color:#fff;

}
</style>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="http://placehold.it/150x50&text=Logo" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="">About</a>
                    </li>
                    <li>
                        <a href="">Services</a>
                    </li>
                    <li>
                        <a href="">Contact</a>
                    </li>
                </ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href=""><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
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
  <div class="container">
      <nav class="navecation">
       <ul id="navi">
    <li><a class="menu active"#">About </a></li>
    <li><a class="menu" href="#">Contact  </a></li>
         <li><a class="menu" href="http://localhost/theam2+admin/search.php?txtKeyword=&search_opt=title&search_city=">Services</a></li>
    <li><a class="menu" href="#">Contact Us</a></li>          
    <li><a class="menu" href="http://www.mywebtricks.com/2014/03/add-active-class-to-navigation-menu.html">Read Our Blog</a></li>
  </ul>
    </nav>
  </div>
 
  
          
           
           
</head>          
</body>
</html>