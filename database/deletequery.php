<?php
include_once('db.php');

    $username = $_POST['username'];
    $table=$_POST['table'];

  $mydb = new databasefull();
  $conobj=$mydb->OpenCon();

  $Query=$mydb->deletequery($conobj,$table,$username);


  if($Query){

    echo 'successfully deleted';
        /*  echo "<div class='form regconfirm1 mt-3 text-center'>
          <h3 class='regconfirm'>You are registered successfully</h3>
          <p>You can login now!</p></div>";
        }  */

  $mydb->CloseCon($conobj);


  }




  ?>
