<?php

if(isset($_FILES["image"]["error"])){
    if($_FILES["image"]["error"] > 0){
        echo "Error: " . $_FILES["image"]["error"] . "<br>";
    } else{
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["image"]["name"];
        $filetype = $_FILES["image"]["type"];
        $filesize = $_FILES["image"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 10MB maximum
        $maxsize = 10 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
	    $path="upload/" . $_FILES["image"]["name"];
            if(file_exists("upload/" . $_FILES["image"]["name"])){
                echo $path . " is already exists.";
            } else{
                move_uploaded_file($_FILES["image"]["tmp_name"], $path);
                //echo "Your file was uploaded successfully.";


		//save in database path and rest information
		//session_start();
		//$host="ellaksrv.datacenter.uoc.gr"; // Host name 
		$host="localhost"; // Host name 
		$username="user738"; // Mysql username 
		$password="eYq9haWO"; // Mysql password 
		$db_name="user738_db2"; // Database name 
		$tbl_name_image="images"; // Table name 

		// Create connection
		$conn = new mysqli($host, $username, $password, $db_name);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		else{

		/***  get the image info. ***/
		
		/*** assign our variables ***/
		$type = $filetype;
		$size = $filesize;
		$name = $filename;
		$lat=$_POST['latitude']; 
	   $lon=$_POST['longitude']; 
	   $desc=$_POST['description']; /**/
	   $rating=$_POST['rating']; /**/
	   $category=$_POST['category']; /**/

		//echo "test ".$filename." ".$size." ".$type." ".$path."<br>";


		//save image info to database
		/*
		$sql = "INSERT INTO ".$tbl_name_image." (name,type,size,path,latitude,longitude,description) VALUES 
			 ('".$name."','".$type."','".$size."','".$path."','".$lat."','".$lon."','".$desc."')";*/
	   /*
	   $sql = "INSERT INTO ".$tbl_name_image." (name,type,size,path,latitude,longitude,description,rating) VALUES 
			 ('".$name."','".$type."','".$size."','".$path."','".$lat."','".$lon."','".$desc."','".$rating."')";*/
	   $sql = "INSERT INTO ".$tbl_name_image." (name,type,size,path,latitude,longitude,description,rating,category) VALUES 
			 ('".$name."','".$type."','".$size."','".$path."','".$lat."','".$lon."','".$desc."','".$rating."','".$category."')";
		if ($conn->query($sql) === TRUE) {
			    //echo "Image uploaded succesfully!";
			    header("location:admin.php");

		} else {
			    //echo "Error: " . $sql . "<br>" . $conn->error;
			    header("location:error.php");
		}/**/
	     }


            } 
        } else{
            echo "Error: There was a problem uploading your file - please try again."; 
        }
    }
} else{
    echo "Error: Invalid parameters - please contact your server administrator.";
}

?>
