<?php
include_once('db.php');
$mydb = new databasefull();
//$username = $mydb->clearText($_POST['username']);

$table=$_POST['table'];
$conobj=$mydb->OpenCon();
$result=$conobj->query("SELECT * FROM doctors");
if ($result->num_rows > 0) {
while($row = mysqli_fetch_assoc($result)){
  //$username=$row["username"]";"$name=$row['name']"."$email=$row['email']"."$password=$row['password']"."$age=$row['age']"."$address=$row['address']"."$degree=$row['degree']"."$gender=$row['gender']"."$mobileno=$row['mobileno']"."$image =$row['image']";
echo "
  
  <a href='#' name='".$row['username']."' class='start_chat badge badge-primary'>".$row['name']."</a>

";

}

} else {
 echo "No user!";
}

$conobj->close();

?>
