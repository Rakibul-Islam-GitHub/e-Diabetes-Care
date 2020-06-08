<?php
session_start();
include_once('db.php');
$mydb = new databasefull();
//$username = $mydb->clearText($_POST['username']);

$table=$_POST['table'];


  $conobj=$mydb->OpenCon();


  if($table=='doctors'){
    $result=$conobj->query("SELECT * FROM doctors");
    $total=mysqli_num_rows($result);
    if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result))

     {
       $image=$row['image'];
       if ($image==null || $image=='') {
         $image='images/user.jpg';
       }
       echo "
       <div class= 'col-sm-4  '>
           <div class= 'profile-widget'>
               <div class='doctor-img'>
                   <a class='avatar doctordetails ' name='".$row['username']."' ><img  src='$image'></a>
               </div>

               <h4 class='doctor-name text-ellipsis'><a class='doctordetails' name='".$row['username']."' href=''>".$row['name']." </a></h4>
               <div class='doc-prof'>".$row['degree']."</div>
               <div class='user-country email'>
                   <i class='fa fa-envelope-open'></i> ".$row['email']."
               </div>
           </div>
       </div>
       ";
      //$username=$row["username"]";"$name=$row['name']"."$email=$row['email']"."$password=$row['password']"."$age=$row['age']"."$address=$row['address']"."$degree=$row['degree']"."$gender=$row['gender']"."$mobileno=$row['mobileno']"."$image =$row['image']";
    // echo "
    // <tr>
    //  <td> ".$row['name']."</td>
    //
    //  <td>".$row['email']."</td>
    //  <td> ".$row['age']."</td>
    //
    //  <td>".$row['address']."</td>
    //  <td>".$row['degree']."</td>
    //  <td> ".$row['gender']."</td>
    //
    //  <td>".$row['mobileno']."</td>
    //
    //
    //  <td>
    //    <a class='edit' tablename='doctors' title='Edit' data-toggle='modal' data-target='#doc-editprofile' name='".$row['username']."'><i class= 'edit material-icons'>&#xE254;</i></a>
    //    <a class='delete' tablename='doctors' title='Delete' data-toggle='modal' data-target='#delete_doctor' name='".$row['username']."'><i class= 'delete material-icons'>&#xE872;</i></a>
    //
    // </td>
    //
    //
    // </tr>
    // ";

    }

    } else {
     echo "0 results";
    }

    $conobj->close();

  }
  else {
    $patientid=$_SESSION['username'];
    $result=$conobj->query("SELECT * FROM appointments WHERE patientid='$patientid'");
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

    </tr>

    ";

    }

    } else {
     echo "no history found";
    }

    $conobj->close();
  }



?>
