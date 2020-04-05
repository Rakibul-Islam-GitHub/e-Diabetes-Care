<?php


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "e_diabetes_care";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n".$conn -> error);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "error";
}

//r
//this in=s comment
/*$result=$conn->query("SELECT * FROM doctors");
$total=mysqli_num_rows($result);
if ($result->num_rows > 0) {
while($row = mysqli_fetch_assoc($result))

 {
  echo $username=$row['username']."<br> ".$name=$row['name']."<br>".$email=$row['email']."<br>".$password=$row['password']."".$age=$row['age']."".$address=$row['address']."".$degree=$row['degree']."".$gender=$row['gender']."".$mobileno=$row['mobileno']."".$image=$row['image'];


 //$username=$row["username"]";"$name=$row['name']"."$email=$row['email']"."$password=$row['password']"."$age=$row['age']"."$address=$row['address']"."$degree=$row['degree']"."$gender=$row['gender']"."$mobileno=$row['mobileno']"."$image =$row['image']";


}

} else {
 echo "0 results";
}

$conn->close();
*/

/*
include_once('db.php');
$connection = new databasefull();
if($connection->OpenCon()=="")
{
echo "null";
}
//$conobj=$connection->OpenCon();
else {
  $userQuery=$connection->showalldoctor();
}
//$userQuery=$connection->showalldoctor($conobj,"doctors");



$connection->CloseCon($conobj);



*/

?>
