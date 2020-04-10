<?php
include_once('db.php');
$mydb = new databasefull();
//$username = $mydb->clearText($_POST['username']);

$table=$_POST['table'];
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


 <td>
   <a class='edit' title='Edit' data-toggle='tooltip'><i class= 'edit material-icons'>&#xE254;</i></a>
   <a class='delete' tablename='doctors' title='Delete' data-toggle='tooltip' name='".$row['username']."'><i class= 'delete material-icons'>&#xE872;</i></a>

</td>


</tr>
";

}

} else {
 echo "0 results";
}

$conn->close();
?>
