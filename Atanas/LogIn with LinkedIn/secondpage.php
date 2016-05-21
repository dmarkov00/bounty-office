<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="css/secondpage.css"/>
</head>
<!-- diffirent linked in accounts return different friends lists -->
<body>
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bountyoffice";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, fname FROM users WHERE oauth_uid='".$_SESSION["user_id"]."';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $numeral_id=$row["id"];
        $name = $row["fname"];
    }
} else {
    echo "0 results";
}
$conn->close();
unset($conn);

$_SESSION["numeral_id"]=$numeral_id;


$a= array();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT friend_name, category, area, skills, languages, degree FROM firends WHERE bhuser_id=".$_SESSION["numeral_id"].";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$o= new stdClass;
    	$o->name=$row["friend_name"];
    	$o->cat=$row["category"];
    	$o->area=$row["area"];

    	$skills=$row["skills"];
    	$skills_array=explode(" ", $skills);
    	$o->skills=$skills_array;

    	$languages=$row["languages"];
    	$languages_array=explode(" ", $languages);
    	$o->languages=$languages_array;

    	$o->degree=$row["degree"];
       array_push($a,$o);
    }
} else {
    echo "0 results";
}
$conn->close();
echo "welcome ".$name."<br>";
print_r($a);
// echo "<ul>";
// foreach($a as $k=>$v){
// 	echo"<li>".$k.$v."</li>";
// }
// echo "</ul>";

?>

</body>
</html>