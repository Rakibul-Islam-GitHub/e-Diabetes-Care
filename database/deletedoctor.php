<?php
include_once('db.php');
if (isset($_POST['done-btn']))
{
  if(isset($_GET['user'])){

    $username=$_GETT['user'];
    $connection = new databasefull();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->deletedoctor($conobj,"doctors",$username);


    $connection->CloseCon($conobj);

  }
}
