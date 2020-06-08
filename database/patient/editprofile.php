<?php
include_once('../db.php');
$mydb = new databasefull();
$username = $_POST['username'];
$table=$_POST['table'];
$conobj=$mydb->OpenCon();
//$query= $mydb->checkuser($conobj,$table,$username);
$query= $conobj->query("SELECT * FROM patients WHERE email='$username' ");
if ($query->num_rows > 0) {
  $fetch = $query->fetch_array();

  $array = array(
        'name' => $fetch['name'],
        'email' => $fetch['email'],

  			'password' => $fetch['password'],
  			'age' => $fetch['age'],
        'gender' => $fetch['gender'],
  			'address' => $fetch['address'],
  			'phone' => $fetch['mobileno'],
        'image' => $fetch['image']

  		);

		echo json_encode($array);


$mydb->CloseCon($conobj);


}
?>
