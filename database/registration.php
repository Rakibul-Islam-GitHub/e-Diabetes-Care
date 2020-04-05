<?php
include_once('db.php');


if(isset($_POST['btn_patient'])){
//  $username=$_POST['dusername'];
  $name=$_POST['pname'];
  $email=$_POST['pemail'];
  $password=$_POST['ppassword'];
  $age=$_POST['page'];
  $gender=$_POST['pgender'];
  $address=$_POST['paddress'];
  $phone=$_POST['pphone'];
  $role=3;

  $name = $_FILES['file']['name'];
  $target_dir = "../images/profile/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $extensions_arr = array("jpg","jpeg","png","gif");

  if( in_array($imageFileType,$extensions_arr) ){

    // Upload file
    $temp = explode(".", $_FILES["file"]["name"]);
  $image = round(microtime(true)) . '.' . end($temp);
  move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir . $image);
    //move_uploaded_file($_FILES['file']['tmp_name'],.$name);
  //  echo $newfilename;
  }
  else {
    echo "Invalid file formate";
}
$connection = new databasefull();
$conobj=$connection->OpenCon();

$userQuery=$connection->patientregistration($conobj,"patients",$name,$email,$password,$age,$gender,$address,$phone,$image,$role);


$connection->CloseCon($conobj);


}
?>
