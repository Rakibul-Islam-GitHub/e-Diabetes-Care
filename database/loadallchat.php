<?php
session_start();
include_once('db.php');
$mydb = new databasefull();
//$username = $mydb->clearText($_POST['username']);
if ($_SESSION['role']==2) {
    $patient=$_POST['patient'];
    $doctor=$_SESSION['username'];
    $conobj=$mydb->OpenCon();
    $result=$conobj->query("SELECT * FROM chat WHERE patientid='$patient' AND doctorid='$doctor'");

    if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result))

     {
       $senderid=$row['senderid'];
       $query=$conobj->query("SELECT name,image FROM doctors WHERE username='$senderid' UNION SELECT name,image FROM patients WHERE email='$senderid'");
        while($row2 = mysqli_fetch_assoc($query)){
            $senadername=$row2['name'];
            $image= $row2['image'];
            if ($image==null || $image=='') {
               $image='images/user.jpg';
            }

        }
      //$username=$row["username"]";"$name=$row['name']"."$email=$row['email']"."$password=$row['password']"."$age=$row['age']"."$address=$row['address']"."$degree=$row['degree']"."$gender=$row['gender']"."$mobileno=$row['mobileno']"."$image =$row['image']";
    echo "

    <div class='msg-bubble mt-2'>


      <div class='msg-info'>
        <div class='msg-info-name'>$senadername</div>
        <div class='msg-info-time'>".$row['time']."</div>
      </div>

      <div class='msg-text'>".$row['msg']."</div>
    </div>
    <span><img class='chatimg' src='$image'></img></span>


    ";

    }

    } else {
     echo "No chat history!";
    }

    $conobj->close();
}
elseif ($_SESSION['role']==3) {
  $doctor=$_POST['doctor'];
  $patient=$_SESSION['username'];
  $conobj=$mydb->OpenCon();

  $result=$conobj->query("SELECT * FROM chat WHERE patientid='$patient' AND doctorid='$doctor'");

  if ($result->num_rows > 0) {
  while($row = mysqli_fetch_assoc($result))

   {
     $senderid=$row['senderid'];
     $query=$conobj->query("SELECT name,image FROM doctors WHERE username='$senderid' UNION SELECT name,image FROM patients WHERE email='$senderid'");
      while($row2 = mysqli_fetch_assoc($query)){
          $senadername=$row2['name'];
          $image= $row2['image'];

      }
    //$username=$row["username"]";"$name=$row['name']"."$email=$row['email']"."$password=$row['password']"."$age=$row['age']"."$address=$row['address']"."$degree=$row['degree']"."$gender=$row['gender']"."$mobileno=$row['mobileno']"."$image =$row['image']";
  echo "

  <div class='msg-bubble mt-2'>


    <div class='msg-info'>
      <div class='msg-info-name'>$senadername</div>
      <div class='msg-info-time'>".$row['time']."</div>
    </div>

    <div class='msg-text'>".$row['msg']."</div>
  </div>
  <span><img class='chatimg' src='$image'></img></span>


  ";

  }

  } else {
   echo "No chat history!";
  }

  $conobj->close();

}



?>
