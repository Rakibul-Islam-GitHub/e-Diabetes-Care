<?php
include_once('db.php');
session_start();

 $error="";
// store session data
if (isset($_POST['btn_doc'])) {

$username=$_POST['dusername'];
$name=$_POST['dname'];
$email=$_POST['demail'];
$password=$_POST['dpassword'];
$age=$_POST['dage'];
$address=$_POST['daddress'];
$degree=$_POST['degree'];

$gender=$_POST['dgender'];
$phone=$_POST['dphone'];
$image="";
$role=2;

$connection = new databasefull();
$conobj=$connection->OpenCon();

$userQuery=$connection->insertdoctor($conobj,"doctors",$username,$name,$email, $password,$age,$address,$degree,$gender,$phone,$image,$role);


$connection->CloseCon($conobj);


}


?>
