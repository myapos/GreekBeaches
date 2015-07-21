<?php

$func=$_GET['func']; 

if($func=="nearest") {
nearest();

}

elseif($func=="suggest") {
suggest();	
	
}

//header("Content-type: image/jpeg");

/*
if( !isset($_POST['functionname']) ) { echo 'No function name!'; }

//if( !isset($aResult['error']) ) {

switch($_POST['functionname']) {
            case 'my_user_services':
               my_user_services();
               //$aResult['result'] = add(floatval($_POST['arguments'][0]), floatval($_POST['arguments'][1]));
               break;

            default:
               //$aResult['error'] = 'Not found function '.$_POST['functionname'].'!';
               echo "This is default msg";
               break;
}
*/
//    }

function nearest(){
$host="localhost"; // Host name 
$username="user738"; // Mysql username 
$password="eYq9haWO"; // Mysql password 
$db_name="user738_db2"; // Database name 
$tbl_name_image="images"; // Table name


//echo "Hello from print_images!!!"."<br>";
//session_start();
//$host="ellaksrv.datacenter.uoc.gr"; // Host name 



$latit=$_GET['user_latitude']; 
$longit=$_GET['user_longitude']; 
//echo "Hey!!!!!!".$latit." ".$longit."<br>";


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
//echo "Found images:".$result->num_rows."<br>";

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

//print_r($nums);
//echo "<br>";
//step 4. find minimum distance

//step 4.1 extract distances from 2dim array
$dists = array();

foreach ($nums as $each_member) { 
    $i++; 
    //echo "<h2>Distance $i</h2>"; 
    while (list($key, $value) = each ($each_member)) { 
                                        
        //echo "key: ".$key." value: ".$value."<br />"; 
        if($key==1) {
        	$dists[]=$value;
        }
        
    } 

} 
//print_r($dists);
//step 4.2 find minimum distance
$minimum = min($dists);

//echo "minimum:".$minimum."<br>";
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
//echo "min_id: ".$min_id." id: ".$nums[$min_id-1][0]."<br>";; 
//step 6. display in google map with marker in coordinates
//select from database row with $min_id

$sql="SELECT * FROM ".$tbl_name_image." WHERE id='".$nums[$min_id-1][0]."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) { 
//print name of nearest beach and distance
//echo " Nearest beach to user is:".$row["name"]."<br>";	
echo substr($row["name"],0,$row["name"]-4)." with distance: ".$minimum ." km <br>";	

}


}
else {echo " No images are found"."<br>"; }
} //end of if counting result rows

else{
echo "No images are found"."<br>";
}


}
//echo "asdasdasdsad"."<br>";
}//end of function

function harvesine($id,$latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo){
//$randnums = array(); 
//$num1=rand(0, 100);
//$num2=rand(0, 100);
//echo "Hello from harvesine. num1=".$num1."<br>";
//or($count=0;$count<9;$count++) {
//$dist=$lat_im-$lon_im;	
/**/
/**/
  $earthRadius = 6371000;
// convert from degrees to radians
  // convert from degrees to radians
  $latFrom = deg2rad(floatval($latitudeFrom));
  $lonFrom = deg2rad(floatval($longitudeFrom));
  $latTo = deg2rad(floatval($latitudeTo));
  $lonTo = deg2rad(floatval($longitudeTo));

  $latDelta = $latTo - $latFrom;
  $lonDelta = $lonTo - $lonFrom;

  $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) + cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
  $dist=$angle * $earthRadius;

$result =array($id,$dist/1000);
//}

return $result;
}


function suggest(){
$host="localhost"; // Host name 
$username="user738"; // Mysql username 
$password="eYq9haWO"; // Mysql password 
$db_name="user738_db2"; // Database name 
$tbl_name_image="images"; // Table name

	
//echo "Hello from suggest <br>";
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
//echo "Found images:".$result->num_rows."<br>";

$ids = array();

//step 1. for each image get coordinates
while($row = $result->fetch_assoc()) {
  
$ids[]=$row["id"];

}
//var_dump($ids);
//pick one value randomly

$suggestionis=$ids[array_rand($ids)];

//echo "suggestionis: ".$suggestionis." ";

$sql="SELECT * FROM ".$tbl_name_image." WHERE id='".$suggestionis."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) { 
//print name of nearest beach and distance
//echo " Nearest beach to user is:".$row["name"]."<br>";	
echo substr($row["name"],0,$row["name"]-4)." ";

}


}
else {echo " No images are found"."<br>"; }

}
else{
echo "No images are found"."<br>";
}
}
}
?>
