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

  //$name = $_FILES['file']['name'];
  $target_dir = "images/profile/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $extensions_arr = array("jpg","jpeg","png","gif");

  if( in_array($imageFileType,$extensions_arr) ){

    // Upload file
    $temp = explode(".", $_FILES["file"]["name"]);
  $image = round(microtime(true)) . '.' . end($temp);
  move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir . $image);
  $filename=$target_dir.$image;
    //move_uploaded_file($_FILES['file']['tmp_name'],.$name);
  //  echo $newfilename;
  }
  else {
    echo "Invalid file formate";
}
$connection = new databasefull();
$conobj=$connection->OpenCon();


$code = mt_rand(100000, 999999);
  $subject='Email verification';
//  $email='ediabetescare@gmail.com';
  $greeting='Thanks for registration!!';
  $message="http://localhost/e-Diabetes-Care/emailverification.php?code=$code&email=$email";


  $content=" $greeting \n Please click the link below to active your account.. \nURL: $message";
  $recipient = $email;          //"rakibulislam.cse21@gmail.com";
  $mailheader = "From: $email \r\n";  /// PHP_EOL er moto kaaj kore.... PHP_EOL is a string constant



$userQuery=$connection->patientregistration($conobj,"patients",$name,$email,$password,$age,$gender,$address,$phone,$filename,$role,$code);
if($userQuery){
      /*  echo "<div class='form regconfirm1 mt-3 text-center'>
        <h3 class='regconfirm'>You are registered successfully</h3>
        <p>You can login now!</p></div>";
      }  */

      mail($recipient, $subject, $content, $mailheader) or die("Error!");


$connection->CloseCon($conobj);


}
}
?>
