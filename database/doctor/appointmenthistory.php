<?php
include_once('../db.php');
//session_start();
$mydb = new databasefull();
 //$error="";
// store session data
$table=$_POST['table'];
// $operation=$_POST['operation'];
$conobj=$mydb->OpenCon();

// code...
  $result=$conobj->query("SELECT * FROM appointments");
  $total=mysqli_num_rows($result);
  if ($result->num_rows > 0) {
  while($row = mysqli_fetch_assoc($result))

   {
    //$username=$row["username"]";"$name=$row['name']"."$email=$row['email']"."$password=$row['password']"."$age=$row['age']"."$address=$row['address']"."$degree=$row['degree']"."$gender=$row['gender']"."$mobileno=$row['mobileno']"."$image =$row['image']";
  echo "

  <tr>
   <td> ".$row['doctorname']."</td>
   <td>".$row['date']."</td>
   <td> ".$row['time']."</td>
   <td>".$row['doctorid']."</td>
   


  </tr>


  ";

  }

  } else {
   echo "no history found";
  }

  $conobj->close();


?>
