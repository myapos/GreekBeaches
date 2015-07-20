<?php
session_start();
//$host="ellaksrv.datacenter.uoc.gr"; // Host name 
$host="localhost"; // Host name 
$username="user738"; // Mysql username 
$password="eYq9haWO"; // Mysql password 
$db_name="user738_db2"; // Database name 
$tbl_name="members"; // Table name 


// Create connection
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

else{
// username and password sent from form 
$regemail=$_POST['email']; 
$regpassword=$_POST['password']; 
$regrole="user"; 

// To protect MySQL injection (more detail about MySQL injection)
$regemail = stripslashes($regemail);
$regpassword = stripslashes($regpassword);
/*$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);*/

//insert credential user to database. Role is user by default

$sql = "INSERT INTO ".$tbl_name." (username,password,role) VALUES ('".$regemail."','".$regpassword."','".$regrole."')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    header("location:index.php");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    //header("location:error.php");
}

}

?>
