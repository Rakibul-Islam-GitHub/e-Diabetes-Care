<?php
include_once('../db.php');
//session_start();
$mydb = new databasefull();
 //$error="";
// store session data
$table=$_POST['table'];
$today= date('Y-m-d');
// $operation=$_POST['operation'];
$conobj=$mydb->OpenCon();

    $result=$conobj->query("SELECT * FROM appointments");
    $total=mysqli_num_rows($result);
    if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result))

     {
       $patientid=$row['patientid'];
       $result2=$conobj->query("SELECT name FROM patients WHERE email='$patientid'");

       while($row2 = mysqli_fetch_assoc($result2)){
          $patientname=$row2['name'];
       }

       $date=$row['date'];
       if ($date>$today) {
         echo "

         <tr>
          <td>$patientname</td>
          <td>".$row['phone']."</td>
          <td>".$row['date']."</td>
          <td> ".$row['time']."</td>




         </tr>


         ";


       }
      //$username=$row["username"]";"$name=$row['name']"."$email=$row['email']"."$password=$row['password']"."$age=$row['age']"."$address=$row['address']"."$degree=$row['degree']"."$gender=$row['gender']"."$mobileno=$row['mobileno']"."$image =$row['image']";


    }

    } else {
     echo "no chat history";
    }

    $conobj->close();

    ?>
