<?php
//header("Content-type: image/jpeg");
function print_images(){
//echo "Hello from print_images!!!"."<br>";
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
    echo "Connection failed!!!"."<br>";
    die("Connection failed: " . $conn->connect_error);
} 

else{
//echo "Preparing to execute sql query!!!"."<br>";
$sql="SELECT * FROM ".$tbl_name_image;

$result = $conn->query($sql); //execute query

if ($result->num_rows > 0) {
echo "<span id=\"found\">Found beaches:</span>".$result->num_rows."<br>";

$image_rows=floor($result->num_rows/4);
$left_images=$result->num_rows%4;
//echo "tetrades:".$image_rows."<br>";
//echo "ipoloipo:".$left_images."<br>";
/**/

//echo multiple lines of html code dynamic of 4 images per row
for ($x = 0; $x < $image_rows; $x++) {
//echo "The number is: $x <br>";

echo<<<EOL
 <div class="row">
EOL;
for ($y = 0; $y < 4; $y++) 
	{
	$row = $result->fetch_assoc();

echo<<<EOL
		<div class="col-md-3 beach-items-container">
                     <div class="beach-item">
EOL;
$namstr=$row["name"];
$nam=substr($namstr,0,(strlen($namstr)-4));
echo "<h3>".$nam."</h3>";
$path="./".$row["path"];
echo "<img class=\"beach-img\" src=\"$path\" alt=\"test\">";


echo "<p class=\"beach-description\">".$row["description"]."</p>";
//echo"				<div class=\"beach-details beach_class_".$y.$x."\">";
echo"				<div class=\"beach-details beach_class_".$row["id"]."\">";
echo				 "<a class=\"btn btn-default beach_details_btn\" id= \"beach_button_id_".$row["id"]."\" role=\"button\"><span class=\"info\">Information &raquo;</span></a>";
echo				 "<a class=\"btn btn-default btnShow_".$row["id"]."\" role=\"button\"><span class=\"googlemapbtn\">Google Map &raquo;</span></a>";
echo"           <div id=\"dialog_".$row["id"]."\" style=\"display: none\">";
echo"             <div id=\"dvMap_".$row["id"]."\" style=\"height: 380px; width: 580px;\"> ";
echo"               <textarea id=\"loc_info_".$row["id"]."\" name=\"hide\" style=\"display:none;\">".$row["latitude"].";".$row["longitude"]."</textarea>                                                                                          ";
echo"             </div>";
echo"           </div>";
echo<<<EOL
				 </div> <!--end of beach details-->
		     </div><!--end of beach item-->
                </div><!--end of col-md-3 beach-items-container-->
EOL;
} 
echo "</div> <!--end of row-->";
} //end of double for
if($left_images!=0){

echo<<<EOL

<div class="row">
EOL;


//echo multiple lines of html code dynamic left images
for ($x = 0; $x < $left_images; $x++) {
//echo "The number is: $x <br>";
$row = $result->fetch_assoc();
echo<<<EOL
		<div class="col-md-
EOL;
echo floor(12/$left_images);
echo<<<EOL
 beach-items-container">
                     <div class="beach-item">
EOL;
$namstr=$row["name"];
$nam=substr($namstr,0,(strlen($namstr)-4));
echo "<h3>".$nam."</h3>";
//echo "<h3>".$row["name"]."</h3>";
$path="./".$row["path"];
echo "<img class=\"beach-img\" src=\"$path\" alt=\"test\">";


echo" <p class=\"beach-description\">".$row["description"]."</p>";
echo"				<div class=\"beach-details beach_class_".$row["id"]."\">";
echo				 "<a class=\"btn btn-default beach_details_btn\" id= \"beach_button_id_".$row["id"]."\" role=\"button\"><span class=\"info\">Information &raquo;</span></a>";
echo				 "<a class=\"btn btn-default btnShow_".$row["id"]."\" role=\"button\"><span class=\"googlemapbtn\">Google Map &raquo;</span></a>";
echo"           <div id=\"dialog_".$row["id"]."\" style=\"display: none\">";
echo"             <div id=\"dvMap_".$row["id"]."\" style=\"height: 380px; width: 580px;\"> ";
echo"               <textarea id=\"loc_info_".$row["id"]."\" name=\"hide\" style=\"display:none;\">".$row["latitude"].";".$row["longitude"]."</textarea>                                                                                          ";
echo"             </div>";
echo"           </div>";
echo<<<EOL

				 </div> <!--end of beach details-->
		     </div><!--end of beach item-->
                </div><!--end of col-md-3 beach-items-container-->
EOL;
}//end of for

echo<<<EOL
</div>

EOL;

/**/
//end of double for
}//end of if left_images!=0

} //end of if counting result rows

else{
echo "No images are found"."<br>";
}


}
//echo "asdasdasdsad"."<br>";
}//end of function


?>
