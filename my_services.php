<?php
//header("Content-type: image/jpeg");
//function my_user_services(){
//echo "Hello from print_images!!!"."<br>";
//session_start();
//$host="ellaksrv.datacenter.uoc.gr"; // Host name 
$host="localhost"; // Host name 
$username="user738"; // Mysql username 
$password="eYq9haWO"; // Mysql password 
$db_name="user738_db2"; // Database name 
$tbl_name_image="images"; // Table name


$latit=$_POST['user_latitude']; 
$longit=$_POST['user_longitude']; 
echo "Hey!!!!!!".$latit." ".$longit."<br>";


// Create connection
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    echo "Connection failed!!!"."<br>";
    die("Connection failed: " . $conn->connect_error);
} 

else{
echo "Preparing to execute sql query!!!"."<br>";
$sql="SELECT * FROM ".$tbl_name_image;

$result = $conn->query($sql); //execute query

if ($result->num_rows > 0) {
echo "Found images:".$result->num_rows."<br>";

$nums = array();

//step 1. for each image get coordinates
while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " Username: " . $row["username"]. " Password:" . $row["password"]. " Role:" . $row["role"]."<br>";

//step 2. calculate distance with harvesine formulae
$dist=harvesine($row["id"],$row["latitude"],$row["longitude"],$latit,$longit);
//echo "Num1:".$dist."<br>";

//step 3. save distances in array
$nums[] = $dist;
}

print_r($nums);
echo "<br>";
//step 4. find minimum distance

//step 4.1 extract distances from 2dim array
$dists = array();

foreach ($nums as $each_member) { 
    $i++; 
    echo "<h2>Distance $i</h2>"; 
    while (list($key, $value) = each ($each_member)) { 
                                        
        echo "$key: $value<br />"; 
        $dists[]=(double)$value;
    } 

} 
//print_r($dists);
//step 4.2 find minimum distance
$minimum = min($dists);

echo "minimum:".$minimum."<br>";
//step 5. find the image that correspond to minimum distance
$min_id=0;
$i=0;
foreach ($nums as $each_member) { 
    $i++; 
    //echo "<h2>Member $i</h2>"; 
    while (list($key, $value) = each ($each_member)) { 
                                        
        //echo "$key: $value<br />"; 
        if($minimum==$value) 
        	$min_id=$i;
    } 

}
echo "min_id: ".$min_id." id: ".$nums[$min_id-1][0]."<br>";; 
//step 6. display in google map with marker in coordinates
//select from database row with $min_id

$sql="SELECT * FROM ".$tbl_name_image." WHERE id='".$nums[$min_id-1][0]."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) { 
echo " Nearest beach to user is:".$row["name"]."<br>";	
}


}
else {echo " No images are found"."<br>"; }
} //end of if counting result rows

else{
echo "No images are found"."<br>";
}


}
//echo "asdasdasdsad"."<br>";
//}//end of function

function harvesine($id,$lat_im,$lon_im,$lat_user,$lon_user){
//$randnums = array(); 
//$num1=rand(0, 100);
//$num2=rand(0, 100);
//echo "Hello from harvesine. num1=".$num1."<br>";
//or($count=0;$count<9;$count++) {
//$dist=$lat_im+$lon_im;	
/**/
  $earthRadius = 6371000;
// convert from degrees to radians
  $latFrom = deg2rad($lat_im);
  $lonFrom = deg2rad($lon_im);
  $latTo = deg2rad($lat_user);
  $lonTo = deg2rad($lon_user);

  $latDelta = $latTo - $latFrom;
  $lonDelta = $lonTo - $lonFrom;

  $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
  cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
  $dist=$angle * $earthRadius;

$result =array($id,$dist/1000);
//}

return $result;
}

?>
