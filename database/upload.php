<?php
session_start();
include_once('db.php');




//  $username=$_POST['dusername'];
$connection = new databasefull();
$conobj=$connection->OpenCon();
$username= $_SESSION['username'];
  $name = $_FILES['file']['name'];
  if ($name=='') {
    echo 'profile pic not selected!';

  }

  elseif ($name!='')
    // code...
   {
    $target_dir = "../images/profile/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $extensions_arr = array("jpg","jpeg","png","gif");

    if( in_array($imageFileType,$extensions_arr) ){

      // Upload file
      $temp = explode(".", $_FILES["file"]["name"]);
    $image = round(microtime(true)) . '.' . end($temp);

    $filename ='images/profile/'. $image;
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir . $image);

      //move_uploaded_file($_FILES['file']['tmp_name'],.$name);
    //  echo $newfilename;

    if ($_SESSION['role']==2) {
      $result = $conobj->query("UPDATE `doctors` set  `image` = '$filename' WHERE `username` = '$username'");
      echo $filename;

    }else {
      $result = $conobj->query("UPDATE `patients` set  `image` = '$filename' WHERE `email` = '$username'");
      echo $filename;
    }





    }

   $connection->CloseCon($conobj);




  }




?>
