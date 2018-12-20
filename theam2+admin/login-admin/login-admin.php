<?php
//login.php
session_start();
$connect = mysqli_connect("localhost", "root", "", "test");


 $username = $_POST["username"];
 $password = $_POST["password"];
 $sql = "SELECT * FROM admin_db WHERE AdminUsername = '".$username."' AND AdminPassword = '".$password."'";

 $result = mysqli_query($connect, $sql);
 $num_row = mysqli_num_rows($result);
 if($num_row > 0)
 {
  $data = mysqli_fetch_array($result);
  $_SESSION["AdminUsername"] = $data["AdminUsername"];
  echo $data["AdminUsername"];
 }

?>