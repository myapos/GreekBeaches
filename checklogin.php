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
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
/*$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);*/
//check user credentials database

//$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$sql="SELECT * FROM ".$tbl_name." WHERE username='".$myusername."' and password='".$mypassword."'";
//$sql = "SELECT * FROM ". $tbl_name;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
$row = $result->fetch_assoc();

$_SESSION["role"]=$row["role"];
$_SESSION["myusername"]=$row["username"];
$_SESSION['hello']='world2';
session_write_close ();
/*
$_SESSION["myusername"]=$row["username"];
$_SESSION["mypassword"]=$mypassword; 
$_SESSION["role"]=$row["role"];*/

//echo $row["role"];
header("location:home.php");
//echo "role:".$row["role"];
    /*
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " Username: " . $row["username"]. " Password:" . $row["password"]. " Role:" . $row["role"]."<br>";
    }*/
} else {
    //echo "0 results";
header("location:error.php");
}
/*
if ($conn->query($sql) === TRUE) {
    echo "User exists";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 
*/
//header("location:login_success.php");
}//end else

/*
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/

/*
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

//print results???

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION["myusername"]=$myusername;
$_SESSION["mypassword"]=$mypassword; 
$_SESSION["role"]=$role;

//echo "Hello from login_success"."<br>";
//header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}*/
?>
