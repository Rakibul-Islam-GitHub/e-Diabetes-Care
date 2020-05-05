<?php
include_once('db.php');
$mydb = new databasefull();
$user = $mydb->clearText($_POST['user']);
$msg =addslashes($mydb->clearText($_POST['msg']));
$table='chat';

$conobj=$mydb->OpenCon();
$insertquery= $mydb->insertmsg($conobj,$table,$user,$msg);

if($insertquery){

  echo 'success';
      /*  echo "<div class='form regconfirm1 mt-3 text-center'>
        <h3 class='regconfirm'>You are registered successfully</h3>
        <p>You can login now!</p></div>";
      }  */

$mydb->CloseCon($conobj);


}
?>
