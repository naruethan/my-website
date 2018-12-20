 <?php  
/** 
 * Created by PhpStorm. 
 * User: Ehtesham Mehmood 
 * Date: 11/21/2014 
 * Time: 1:13 AM 
 */  
$dbcon=mysqli_connect("localhost","root","");  
mysqli_set_charset($dbcon, "utf8");
if (mysqli_connect_errno($dbcon))
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //you need to exit the script, if there is an error
    exit();
}
mysqli_select_db($dbcon,"test");  

	/*
	// Or //
	mysql_query("SET character_set_results=utf8");
	mysql_query("SET character_set_client=utf8");
	mysql_query("SET character_set_connection=utf8");
	*/


?>
