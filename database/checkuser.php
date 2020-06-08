<?php
include_once('db.php');
$mydb = new databasefull();
$username = $_POST['username'];
$table=$_POST['table'];
$conobj=$mydb->OpenCon();
//$query= $mydb->checkuser($conobj,$table,$username);
$query= $conobj->query("SELECT * FROM doctors WHERE username='$username' ");
if ($query->num_rows > 0) {
  $fetch = $query->fetch_array();

		$array = array(
			'username' => $fetch['username'],
			'name' => $fetch['name'],
			'email' => $fetch['email'],
			'address' => $fetch['address'],
      'password' => $fetch['password'],
			'age' => $fetch['age'],
			'degree' => $fetch['degree'],
			'phone' => $fetch['mobileno'],
      'image' => $fetch['image']
		);

		echo json_encode($array);


$mydb->CloseCon($conobj);


}
?>
