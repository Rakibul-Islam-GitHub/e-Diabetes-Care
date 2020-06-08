<?php
// session_start();
include_once('db.php');


if (isset($_POST['publish'])){
  echo 'go';
 $title=$_POST['bname'];

 $description=$_POST['bdescription'];

 $date= date('Y-m-d');

 $target_dir = "../images/blog/";
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

$result = $conobj->query("INSERT INTO `blog`(`title`, `image`, `description`, `date`) VALUES ('$title','$image','$description','$date')");
//  echo $date,$title,$description;
// echo $result;
// echo $image;
header("Location:../portal.php");


$connection->CloseCon($conobj);




}
