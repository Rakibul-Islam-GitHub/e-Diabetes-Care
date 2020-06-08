<?php
include_once('db.php');
//session_start();
$mydb = new databasefull();
 //$error="";
// store session data

$username=$mydb->clearText($_POST['username']);
$name=$mydb->clearText($_POST['name']);
$email=$mydb->clearText($_POST['email']);
$password=$mydb->clearText($_POST['password']);
$table=$mydb->clearText($_POST['table']);
$age=$mydb->clearText($_POST['age']);
$address=$mydb->clearText($_POST['address']);
$degree=$mydb->clearText($_POST['degree']);

$gender=$mydb->clearText($_POST['gender']);
$phone=$mydb->clearText($_POST['phone']);
$name='Dr. '.$name;
$role=2;
// file upload with unique name....



$conobj=$mydb->OpenCon();

$Query=$mydb->insertdoctor($conobj,$table,$username,$name,$email, $password,$age,$address,$degree,$gender,$phone,$role);

if($Query){

  echo 'New doctor added';


  $mydb->CloseCon($conobj);


}







?>
