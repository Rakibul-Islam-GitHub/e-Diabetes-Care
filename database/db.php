<?php
class databasefull
{


function OpenCon()
{
  /*
   $string = file_get_contents('database.json');
   $json = json_decode($string);
   //echo $json->pass;


//$sql = "INSERT INTO rakibul (username, password, gender,interest) VALUES ('$user', '$pass', '$gender','$checkbox')";

 $dbhost = $json->localhost;
 $dbuser = $json->root;
 $dbpass ="";
 $db = $json->database;
 */
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "e_diabetes_care";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n".$conn -> error);
 
 return $conn;
 }
/*
 $sql = "INSERT INTO rakibul (username, password, gender,interest) VALUES ('$user', '$pass', '$gender','$checkbox')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    */
 function insertdoctor($conn,$table,$username,$name,$email, $password,$age,$address,$degree,$gender,$phone,$image,$role)
 {
$result = $conn->query("INSERT INTO ".$table." (username,name,email, password,age,address,degree,gender,mobileno,image) VALUES ('$username','$name','$email', '$password','$age','$address','$degree','$gender','$phone','$image')");
$login=$conn->query("INSERT INTO logins (username,password,role) VALUES ('$username','$password','$role')");

 return $result;
 }
/*
 function deletedoctorquery($conobj,$table,$username)
{
   $result=$conn->query("delete FROM ".$table." WHERE username='$username'");
   if ($result === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

   return $result;


 }
 */
function loginquery($conobj,$table,$username,$password)
{
  $result=$conobj->query("SELECT * FROM ".$table." WHERE username='$username' AND password ='$password'");

 return $result;
  }





function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>
