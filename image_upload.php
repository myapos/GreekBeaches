<?php
session_start();
//$host="ellaksrv.datacenter.uoc.gr"; // Host name 
$host="localhost"; // Host name 
$username="user738"; // Mysql username 
$password="eYq9haWO"; // Mysql password 
$db_name="user738_db2"; // Database name 
$tbl_name_image="images"; // Table name 

echo '<p>Please select a file</p>';
// Create connection
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

else{

/*** check if a file was submitted ***/
if(!isset($_FILES['image']))
    {
    //echo '<p>Please select a file</p>';
    }
else
    {
    try    {
        

    if(is_uploaded_file($_FILES['image']['tmp_name']) && getimagesize($_FILES['image']['tmp_name']) != false)
    {
    /***  get the image info. ***/
    $size = getimagesize($_FILES['image']['tmp_name']);
    /*** assign our variables ***/
    $type = $size['mime'];
    //$image = fopen($_FILES['image']['tmp_name'], 'rb');
    //$image = file_get_contents($_FILES['imageToUpload']['tmp_name']);
    $image =addslashes (file_get_contents($_FILES['image']['tmp_name']));
     //$image =file_get_contents($_FILES['image']['tmp_name']);

    $image=base64_encode($image);
    //$image = file_get_contents($image);
	
    //$image = base64_encode($image);
    $size = $size[3];
    $name = $_FILES['image']['name'];
    $maxsize = 99999999;

    /*$lat="35.338735200000000000";
    $lon="25.144212599999946000";
    $desc="This is a test string description";*/

    $lat=$_POST['latitude']; 
    $lon=$_POST['longitude']; 
    $desc=$_POST['description']; /**/

    //save image file to database
    $sql = "INSERT INTO ".$tbl_name_image." (name,type,size,image,latitude,longitude,description) VALUES 
         ('".$name."','".$type."','".$size."','".$image."','".$lat."','".$lon."','".$desc."')";
   if ($conn->query($sql) === TRUE) {
	    echo "Image uploaded succesfully!";
	    //header("location:admin.php");

	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	    //header("location:error.php");
   }


    //echo $size." ". $type." ".$image." ".$name." ".$maxsize."<br>";
	//echo $size." ". $type." ".$name." ".$maxsize."<br>";
	} 
	}//end of try
	catch(Exception $e){
		echo 'Message: ' .$e->getMessage();
	}

}
}
?>
