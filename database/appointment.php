<?php
session_start();
include_once('db.php');
//session_start();
$mydb = new databasefull();
 //$error="";
// store session data
$table=$_POST['table'];
// $operation=$_POST['operation'];

  $doctorname=$_POST['doctorname'];
  $doctorid=$_POST['doctorid'];
  $date=$_POST['date'];
  $time24=(float)$_POST['time'];
  $phone=$mydb->clearText($_POST['phone']);
  $comment=$_POST['comment'];
  $patientid=$_SESSION['username'];

  if($time24>12){
    $time= (float)($time24 -12).'PM';

  }else {
    $time= (float)$time24.'AM';
  }


  $conobj=$mydb->OpenCon();

  $Query=$mydb->insertappointment($conobj,$table,$doctorname,$doctorid,$patientid,$date,$time, $phone,$comment);

  if($Query){

    echo 'appointment added successfully';


    $mydb->CloseCon($conobj);


  }


?>
