<?php
class databasefull
{


function OpenCon()
{

  


 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "e_diabetes_care";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n".$conn -> error);





 return $conn;
 }

 public function clearText($text) {
        $text = trim($text);
        return $text;
  }


 function checkuser($conobj,$table,$username)
 {
   $result=$conobj->query("SELECT * FROM $table WHERE username=$username");

  return $result;
   }

/*
 $sql = "INSERT INTO rakibul (username, password, gender,interest) VALUES ('$user', '$pass', '$gender','$checkbox')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    */
 function insertdoctor($conn,$table,$username,$name,$email, $password,$age,$address,$degree,$gender,$phone,$role)
 {
$result = $conn->query("INSERT INTO ".$table." (username,name,email, password,age,gender,degree,address,mobileno) VALUES ('$username','$name','$email', '$password','$age','$gender','$degree','$address','$phone')");
$login=$conn->query("INSERT INTO logins (username,password,role,isactive) VALUES ('$username','$password','$role',0)");

 return $result;
 }


 function insertappointment($conobj,$table,$doctorname,$doctorid,$patientid,$date,$time, $phone,$comment){
   $result = $conobj->query("INSERT INTO ".$table." (doctorname,doctorid,patientid,date,time, phone,comment) VALUES ('$doctorname','$doctorid','$patientid','$date','$time', '$phone','$comment')");
  return $result;
 }


 function insertmsg($conobj,$table,$sender,$senderid,$dusername,$doctorname,$patient,$patientname,$msg,$time)
 {
 $result = $conobj->query("INSERT INTO ".$table." (sender,senderid,doctorid,doctorname,patientid,patientname,msg,time) VALUES ('$sender','$senderid','$dusername','$doctorname','$patient','$patientname','$msg','$time')");
 return $result;
 }

 function updatequery($conn,$table,$username,$name,$email, $password,$age,$address,$degree,$phone){
   //$result = $conn->query("UPDATE ".$table." SET name ='$name', email='$email', password='$password',age='$age',degree='$degree',address='$address',mobileno='$phone' WHERE username = '$usernane'");
   //$login=$conn->query("UPDATE logins SET password='$password' WHERE username = '$usernane'");
   $result = $conn->query("UPDATE `$table` set `name` = '$name',`email` = '$email',`password` = '$password',`age` = '$age',`degree` = '$degree',`address` = '$address',`mobileno` = '$phone' WHERE `username` = '$username' ");
   $login=$conn->query("UPDATE `logins` set `password` = '$password' WHERE `username` = '$username' ");

    return $result;
 }

 function updatepatient($conn,$table,$username,$name, $password,$age,$address,$phone){
   //$result = $conn->query("UPDATE ".$table." SET name ='$name', email='$email', password='$password',age='$age',degree='$degree',address='$address',mobileno='$phone' WHERE username = '$usernane'");
   //$login=$conn->query("UPDATE logins SET password='$password' WHERE username = '$usernane'");
   $result = $conn->query("UPDATE `$table` set `name` = '$name',`password` = '$password',`age` = '$age',`address` = '$address',`mobileno` = '$phone' WHERE `email` = '$username' ");
   $login=$conn->query("UPDATE `logins` set `password` = '$password' WHERE `username` = '$username' ");

    return $result;
 }


 /*
  patient registration query....
     */

 function patientregistration($conn,$table,$name,$email,$password,$age,$gender,$address,$phone,$image,$role,$code)
 {
$result = $conn->query("INSERT INTO ".$table." (name,email, password,age,gender,address,mobileno,image,activationcode) VALUES ('$name','$email','$password','$age','$gender','$address','$phone','$image','$code')");
$login=$conn->query("INSERT INTO logins (username,password,role,isactive) VALUES ('$email','$password','$role',0)");

 return $result;
 }


 function deletequery($conn,$table,$username){
   if($table=='doctors'){
     $result=$conn->query("delete FROM ".$table." WHERE username='$username'");
     $result2=$conn->query("delete FROM logins WHERE username='$username'");


     return $result;

   }
   elseif ($table=='blog') {
     $result=$conn->query("delete FROM ".$table." WHERE id='$username'");
     return $result;
   }
   else {
     $result=$conn->query("delete FROM ".$table." WHERE email='$username'");
     $result2=$conn->query("delete FROM logins WHERE username='$username'");


     return $result;
   }

   //$result2=$conn->query("delete FROM logins WHERE username='$username'");



 }

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
