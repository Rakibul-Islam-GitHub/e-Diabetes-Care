<?php
	require_once 'db.php';


		$id = $_POST['username'];
    $table=$_POST['table'];

		$query = $conn->query("SELECT * FROM $table WHERE `mem_id` ='$id'");
		$fetch = $query->fetch_array();

		$array = array(
			'mem_id' => $fetch['mem_id'],
			'firstname' => $fetch['firstname'],
			'lastname' => $fetch['lastname'],
			'address' => $fetch['address']
		);

		echo json_encode($array);

?>
