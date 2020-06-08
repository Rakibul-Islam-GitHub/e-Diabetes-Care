<?php
include_once('db.php');
$mydb = new databasefull();
//$username = $mydb->clearText($_POST['username']);

$table=$_POST['table'];
// $time=  date("g:i a", strtotime("13:30"));
if($table=="doctors"){

  $conobj=$mydb->OpenCon();
  $result=$conobj->query("SELECT * FROM doctors");
  $total=mysqli_num_rows($result);
  if ($result->num_rows > 0) {
  while($row = mysqli_fetch_assoc($result))

   {
    //$username=$row["username"]";"$name=$row['name']"."$email=$row['email']"."$password=$row['password']"."$age=$row['age']"."$address=$row['address']"."$degree=$row['degree']"."$gender=$row['gender']"."$mobileno=$row['mobileno']"."$image =$row['image']";
  echo "
  <tr>
   <td> ".$row['name']."</td>

   <td>".$row['email']."</td>
   <td> ".$row['age']."</td>

   <td>".$row['address']."</td>
   <td>".$row['degree']."</td>
   <td> ".$row['gender']."</td>

   <td>".$row['mobileno']."</td>


   <td>
     <a class='edit' tablename='doctors' title='Edit' data-toggle='modal' data-target='#doc-editprofile' name='".$row['username']."'><i class= 'edit material-icons'>&#xE254;</i></a>
     <a class='delete' tablename='doctors' title='Delete' data-toggle='modal' data-target='#delete_doctor' name='".$row['username']."'><i class= 'delete material-icons'>&#xE872;</i></a>

  </td>


  </tr>
  ";

  }

  } else {
   echo "0 results";
  }

  $conobj->close();

}

elseif ($table=='appointments') {
  $conobj=$mydb->OpenCon();

  // code...
    $result=$conobj->query("SELECT * FROM appointments");
    $result2=$conobj->query("SELECT * FROM patients");
    while($row2 = mysqli_fetch_assoc($result2)){
       $patientname=$row2['name'];
    }

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
     <td>$patientname</td>



    </tr>


    ";

    }

    } else {
     echo "no history found";
    }

    $conobj->close();
}

elseif ($table=='chat') {
  $conobj=$mydb->OpenCon();
  $result=$conobj->query("SELECT * FROM patients");
  if ($result->num_rows > 0) {
  while($row = mysqli_fetch_assoc($result))

   {
    //$username=$row["username"]";"$name=$row['name']"."$email=$row['email']"."$password=$row['password']"."$age=$row['age']"."$address=$row['address']"."$degree=$row['degree']"."$gender=$row['gender']"."$mobileno=$row['mobileno']"."$image =$row['image']";
  echo "

    <a href='#' name='".$row['email']."' class='start_chat badge badge-primary'>".$row['name']."</a>

  ";

  }

  } else {
   echo "0 results";
  }

  $conobj->close();

}

elseif ($table=='blog') {

  $conobj=$mydb->OpenCon();
  $result=$conobj->query("SELECT * FROM blog");
  $total=mysqli_num_rows($result);
  if ($result->num_rows > 0) {
  while($row = mysqli_fetch_assoc($result))

   {
     $title=$row['title'].'...';
     $titlelen= strlen($title);
     if ($titlelen>50) {
       $title= substr($title,0,50);
     }

    //$username=$row["username"]";"$name=$row['name']"."$email=$row['email']"."$password=$row['password']"."$age=$row['age']"."$address=$row['address']"."$degree=$row['degree']"."$gender=$row['gender']"."$mobileno=$row['mobileno']"."$image =$row['image']";
  echo "
  <tr>
   <td> ".$row['id']."</td>
   <td>$title</td>




<td>

  <a class='deletebtn' id='deletebtn' tablename='blog' title='Delete' data-toggle='modal' data-target='#delete_doctor' name='".$row['id']."'><i class= 'delete material-icons'>&#xE872;</i></a>

</td>




  </tr>
  ";

  }

  } else {
   echo "0 results";
  }

  $conobj->close();
}




else {
  $conobj=$mydb->OpenCon();
  $result=$conobj->query("SELECT * FROM patients");
  $total=mysqli_num_rows($result);
  if ($result->num_rows > 0) {
  while($row = mysqli_fetch_assoc($result))

   {
    //$username=$row["username"]";"$name=$row['name']"."$email=$row['email']"."$password=$row['password']"."$age=$row['age']"."$address=$row['address']"."$degree=$row['degree']"."$gender=$row['gender']"."$mobileno=$row['mobileno']"."$image =$row['image']";
  echo "
  <tr>
   <td> ".$row['name']."</td>

   <td>".$row['email']."</td>
   <td> ".$row['age']."</td>

   <td>".$row['address']."</td>

   <td> ".$row['gender']."</td>

   <td>".$row['mobileno']."</td>


<td class=dppaddingzero>

  <a class=' deletebtn' id='deletebtn' tablename='patients' title='Delete' data-toggle='modal' data-target='#delete_doctor' name='".$row['email']."'><i class= 'delete material-icons'>&#xE872;</i></a>

</td>




  </tr>
  ";

  }

  } else {
   echo "0 results";
  }

  $conobj->close();
}

?>
