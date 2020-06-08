<?php
include_once('db.php');
session_start();

if (isset($_POST['submit'])) {

  $username=$_POST['username'];
$password=$_POST['password'];

$connection = new databasefull();
$conobj=$connection->OpenCon();
$userQuery=$connection->loginquery($conobj,"logins",$username,$password);
if ($userQuery->num_rows > 0) {

  // echo"successfully loged in!";
  while($row = $userQuery->fetch_assoc()) {




    $isactive=$row["isactive"];
    if ($isactive==1) {

      $_SESSION["username"] = $username;
      $_SESSION["password"] = $password;
      $_SESSION["role"]= $row["role"];
    }else {
      echo "<div class='form regconfirm1 mt-3 text-center'>
        <h3 class='wronglogin'>Your account isn't active yet! Please active your account</h3>
        </div>";

    }
}
}
else {
  echo "<div class='form regconfirm1 mt-3 text-center'>
    <h3 class='wronglogin'>Wrong username or password</h3>
    </div>";
}

$connection->CloseCon($conobj);
}
?>
