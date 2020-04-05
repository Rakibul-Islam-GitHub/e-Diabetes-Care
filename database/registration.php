<?php
include_once('db.php');


if(isset($_POST['btn_patient'])){

  $name = $_FILES['file']['name'];
  $target_dir = "../images/profile/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $extensions_arr = array("jpg","jpeg","png","gif");

  if( in_array($imageFileType,$extensions_arr) ){

    // Upload file
    $temp = explode(".", $_FILES["file"]["name"]);
  $newfilename = round(microtime(true)) . '.' . end($temp);
  move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir . $newfilename);
    //move_uploaded_file($_FILES['file']['tmp_name'],.$name);
  //  echo $newfilename;
  }
  else {
    echo "Invalid file formate";
}


}
?>
