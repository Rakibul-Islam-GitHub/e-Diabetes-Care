<?php
session_start();
include_once('../db.php');
//session_start();
$mydb = new databasefull();
 //$error="";
// store session data
$table=$mydb->clearText($_POST['table']);
  $username=$mydb->clearText($_POST['username']);
  $name=$mydb->clearText($_POST['name']);
  //$email=$mydb->clearText($_POST['email']);
  $password=$mydb->clearText($_POST['password']);

  $age=$mydb->clearText($_POST['age']);
  $address=$mydb->clearText($_POST['address']);
  //$degree=$mydb->clearText($_POST['degree']);

  //$gender=$mydb->clearText($_POST['gender']);
  $phone=$mydb->clearText($_POST['phone']);
  $conobj=$mydb->OpenCon();

  $Query=$mydb->updatepatient($conobj,$table,$username,$name, $password,$age,$address,$phone);

  if($Query){

    echo 'Record updated';


    $mydb->CloseCon($conobj);


  }

?>
