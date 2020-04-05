<?php
include_once('db.php');
session_start();

if (isset($_POST['submit'])) {
  echo "sbmit click";
  $username=$_POST['username'];
$password=$_POST['password'];

$connection = new databasefull();
$conobj=$connection->OpenCon();
$userQuery=$connection->loginquery($conobj,"doctors",$username,$password);
if ($userQuery->num_rows > 0) {

  echo"executed";
  while($row = $userQuery->fetch_assoc()) {

    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
  //$role=$row["role"];
}
}

$connection->CloseCon($conobj);
}
?>
