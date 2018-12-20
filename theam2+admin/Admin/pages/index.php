<?php
session_start();
error_reporting(-1);
require('/header/header.php');
require('/sidebar/sidebar.php');
//require('/sidebar/sidebar.php');
if($_SESSION["AdminUsername"] == null){
	echo'<META HTTP-EQUIV="Refresh" CONTENT="0;URL=http://localhost/theam2+admin/index.php">';
}
if(!isset($_SESSION["AdminUsername"])){
	header("location: index.php");
	
}



$qurry_admin = $_SESSION["AdminUsername"];
//echo $qurry_admin;
?>

<!DOCTYPE html>
<html lang="en">

<body>

    <div id="wrapper">



        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">หน้าหลักผู้ดูแลระบบ(Dashboard)</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
