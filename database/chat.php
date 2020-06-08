<?php
session_start();
include_once('db.php');
$mydb = new databasefull();
if ($_SESSION['role']==2) {
  $patient = $mydb->clearText($_POST['patient']);
  $msg =addslashes($mydb->clearText($_POST['msg']));
  $table='chat';
  $dusername=$_SESSION['username'];
  $senderid=$dusername;
  //$time=  date("g:i a", strtotime("13:30"));
  date_default_timezone_set('Asia/Dhaka');  // Set timezone.
    $time= date('g:i a, d-M');
  //$time= date('g:i a');
  $conobj=$mydb->OpenCon();
  $pname= $conobj->query("SELECT name FROM patients WHERE email='$patient' ");
  while($row = mysqli_fetch_assoc($pname)){
    $patientname=$row['name'];
    //$username=$row["username"]";"$name=$row['name']"."$email=$row['email']"."$password=$row['password']"."$age=$row['age']"."$address=$row['address']"."$degree=$row['degree']"."$gender=$row['gender']"."$mobileno=$row['mobileno']"."$image =$row['image']";
  }
  $dname= $conobj->query("SELECT name FROM doctors WHERE username='$dusername' ");
  while($row = mysqli_fetch_assoc($dname)){
    $doctorname=$row['name'];
    $sender=$doctorname;


  }


  $insertquery= $mydb->insertmsg($conobj,$table,$sender,$senderid,$dusername,$doctorname,$patient,$patientname,$msg,$time);

  if($insertquery){

    echo 'success';


  $mydb->CloseCon($conobj);


  }

}
else {
  $dusername = $mydb->clearText($_POST['doctor']);
  $msg =addslashes($mydb->clearText($_POST['msg']));
  $table='chat';
  $pusername=$_SESSION['username'];
  $senderid=$pusername;
  //$time=  date("g:i a", strtotime("13:30"));
  date_default_timezone_set('Asia/Dhaka');  // Set timezone.
    $time= date('g:i a, d-M');
//  $time= date('g:i a');
  $conobj=$mydb->OpenCon();
  $dname= $conobj->query("SELECT name FROM doctors WHERE username='$dusername' ");
  while($row = mysqli_fetch_assoc($dname)){
    $doctorname=$row['name'];
    //$username=$row["username"]";"$name=$row['name']"."$email=$row['email']"."$password=$row['password']"."$age=$row['age']"."$address=$row['address']"."$degree=$row['degree']"."$gender=$row['gender']"."$mobileno=$row['mobileno']"."$image =$row['image']";
  }
  $pname= $conobj->query("SELECT name FROM patients WHERE email='$pusername' ");
  while($row = mysqli_fetch_assoc($pname)){
    $patientname=$row['name'];
    $sender=$patientname;
    //$username=$row["username"]";"$name=$row['name']"."$email=$row['email']"."$password=$row['password']"."$age=$row['age']"."$address=$row['address']"."$degree=$row['degree']"."$gender=$row['gender']"."$mobileno=$row['mobileno']"."$image =$row['image']";


  }


  $insertquery= $mydb->insertmsg($conobj,$table,$sender,$senderid,$dusername,$doctorname,$pusername,$patientname,$msg,$time);

  if($insertquery){

    echo 'success';


  $mydb->CloseCon($conobj);


  }

}

?>
