<?php
include_once('database/doctorinsert.php');
include_once('database/deletedoctor.php');

//include_once('database/showalldoctors.php');



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin Portal</title>
    <style type="text/css">
      .navbar-default{
        background-color: rgb(40,90,99);
      }

      .card-modify{
        margin-top: 5%;

      }
      .card-margin{
        margin-top: 5%
      }
      #doctordetails{
        display:none;

      }
#dashboard{
  display: block;
}
      #managedoctor{

        position: relative;
margin-top: 2%;
        height: 10%;
        background-color:rgba(0, 0, 0, 0.075);
      }
      .add{
        float: right;
      }
      .thead-light th {
color: #495057;
background-color: #e9ecef;
border-color: #dee2e6;
}

.doctortable{
  width: auto;
  overflow: scroll;

}
.doctor-btn{
  top: 65%;
}
.totaldoctor{
  width: 20%;
  height: 20%;
  font-size: 40px;
  border: none;
  text-align: center;
  position: relative;
  left: 55%;
  top: 55%;

}
.table {
cursor: pointer;
width: 100%;
margin-bottom: 1rem;
color: #212529;
}
.table-bordered {
border: 1px solid #dee2e6;
}
 tbody tr:hover {
color: #212529;
background-color: rgba(0, 0, 0, 0.075);
}
#doctordeletediv{

  display: none;

}
.deleteform{
 position:relative;
  margin:5%;
  text-align: center;

}
.cencel-btn{
  margin-top: 5%;
  float: left;
  background-color: rgb(51,49,49);
}
    </style>
  </head>
  <body>
<div class="container">

    <nav class="navbar justify-content-between navbar-default text-white">
  <a class="navbar-brand">e-Diabetes Care</a>

      <a class="navbar-brand navbar-right">Admin</a>

</nav>
     <div class="row">
        <div class="col-sm-4">



       <div class="card" style="width: 18rem;">

  <ul class="list-group list-group-flush">
  <a class="nav-link active" href="#"> <li class="list-group-item list-group-item-action" id="dashboard-menu" >Dashboard</li></a>



  <a class="nav-link active" href="#"> <li id="doctor"class="list-group-item list-group-item-action"  >Doctors


  </li></a>
  <a class="nav-link active" href="#"> <li class="list-group-item list-group-item-action">Patients</li> </a>

    <a class="nav-link active" href="#"><li class="list-group-item list-group-item-action">Appointment</li></a>
    <a class="nav-link active" href="#"><li class="list-group-item list-group-item-action">Blog</li></a>
    <a class="nav-link active" href="#"><li class="list-group-item list-group-item-action">About</li></a>
    <a class="nav-link active" href="#"><li class="list-group-item list-group-item-action">Contact</li></a>


  </ul>
</div>
</div>

<section id="dashboard" class="col-sm-8">


          <div class="col-sm-8" >


            <div class="card card-margin">

              <div class="card-body">
<img class="text-left" src="images/doctorIcon.png" >

<?php
include_once('database/showalldoctors.php');
$connection = new databasefull();
$conobj=$connection->OpenCon();
$result=$conn->query("SELECT * FROM doctors");
$total=mysqli_num_rows($result);
 ?>




                <p class="totaldoctor"> <?php echo $total; ?></p>
                <a href="#" class="btn btn-primary float-sm-right doctor-btn">Doctors</a>
              </div>
            </div>



            <div class="card card-modify">

                    <div class="card-body">
                      <i class="fa fa-user fa-5x"></i>

                    <p class="card-text text-right">2</p>
                    <a href="#" class="btn btn-primary float-sm-right">Patients</a>
                    </div>
                    </div>
</section>


   <!---ADD,Delete Button,doctor list table--->

            <div id="doctordetails"class="col-sm-8">
               <div id="managedoctor">
                 <button type="button" class="add" data-toggle="modal" data-target="#register">
  Add
</button>
                        <input type="submit" class="add"id="delete-btn"name="delete-btn" value="Delete">

               </div>
          <div class="doctortable">

            <table class="table table-hover table-bordered "id="table">
  <thead>
    <tr class="table-bordered">

      <th>Name</th>
      <th>Username</th>
      <th>Email</th>
      <th>Password</th>
      <th>Age</th>

      <th>Address</th>
      <th>Degree</th>
      <th>Gender</th>
      <th>Mobile No.</th>
      <th>Image</th>


    </tr>
  </thead>
  <tbody>

      <?php
    include_once('database/showalldoctors.php');
    $connection = new databasefull();
    $conobj=$connection->OpenCon();
    $result=$conn->query("SELECT * FROM doctors");
    $total=mysqli_num_rows($result);
    if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result))

     {
      //$username=$row["username"]";"$name=$row['name']"."$email=$row['email']"."$password=$row['password']"."$age=$row['age']"."$address=$row['address']"."$degree=$row['degree']"."$gender=$row['gender']"."$mobileno=$row['mobileno']"."$image =$row['image']";
    ?>
    <tr>
     <td> <?php echo $row['name'] ;?></td>
     <td> <?php echo $row['username'] ;?> </td>
     <td> <?php echo $row['email'] ;?></td>
     <td> <?php echo $row['password'];?></td>
     <td><?php echo $row['age'];?></td>
     <td><?php echo $row['address'] ;?> </td>
     <td><?php echo $row['degree'];?></td>
     <td><?php echo $row['gender'] ;?> </td>
     <td> <?php echo $row['mobileno'];?></td>

     <td> <?php echo $row['image'];?></td>
   </tr>
  <?php
    }

    } else {
     echo "0 results";
    }

    $conn->close();
?>




    <?php /*
    <tr>


    <td> <?php echo $name ?> </td>
    <td><?php echo $username ?></td>
    <td><?php echo $email ?></td>

    <td><?php echo $age ?></td>
    <td><?php echo $address ?></td>
    <td><?php echo $degree ?></td>
    <td><?php echo $gender ?></td>
    <td><?php echo $mobileno ?></td>
    <td><?php echo $image ?></td>
    <td><?php echo $password ?></td>
    */?>
    </tr>
  </tbody>
</table>
          </div>

             </div>
<!--doctordetails ends-->


   <!---Doctor Registration form start-->
   <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
        <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="myModalLabel">Registration</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
   	  <div class="modal-body">
          <form method="POST" action="" ENCTYPE="multipart/form-data" action="" id="form1">
            <input type="text" name="dusername" class="form-control" onkeyup="letters(this)" required placeholder="Username"><br>
          <input type="text" name="dname" class="form-control" onkeyup="letters(this)" required placeholder=" Name"><br>
          <input type="email" name="demail" class="form-control" required placeholder="Email"><br>

          <input type="password" name="dpassword" class="form-control" required placeholder="Password"><br>
   	   <input type="password" name="dconpassword" class="form-control" required placeholder="Confirm password"><br>
       <input type="number" name="dage" class="form-control" required placeholder="Age"><br>
          <input type="text" name="daddress" class="form-control" required placeholder="Address"><br>

<input type="text" name="degree" required placeholder="Degree" >
<br>
   	   <label>Gender : </label>
   	   <input type="radio" value="Male" name="dgender" required> Male
   	   <input type="radio" value="Female" name="dgender" required> Female <br></br>
   		<div class="input-group form-group ">
   		<span class="input-group-addon">+88</span>
   		<input type="text" name="dphone" class="form-control" id="user" maxlength="10"  placeholder="Contact no." required >
   		</div>
   		<label>Your Picture</label>
   		<input type="file" class="form-control patientpic" name="dimage"/><br>

   		<center><input type="submit" value="Register" name="btn_doc" class="btn btn-danger" >
   		<input type="button" value="Reset" onclick="rset()" class="btn btn-warning"></center>
   		</form>

   		</div>


            </div>

          </div>
     </div>
<!---Doctor Registration form end-->


<!-------------------------------------------------------------------->


<!--doctor delete form start-->



<div class=" col-sm-8" class="dotordelete"id="doctordeletediv">




      <div id="cencel-btn">
        <form method="POST" action="" id="form1">
          <input type="button" id="btn" value="cencel">

          </form>
      </div>
      <div class="deleteform">


         <form method="POST" action="" id="form1">
           User Name:
           <input type="text" name="b" id="dusername" ><br><br>
           Name:
         <input type="text"  id="dname"><br><br>
         Email:
         <input type="text" id="demail"><br><br>
Age:
      <input type="text" id="dage"><br><br>
      Address:
         <input type="text"  id="daddress"><br><br>
Degree:
<input type="text"  id="degree">
<br><br>
      Gender:
      <input type="text" id="dgender" ><br><br>
      Mobile No:
     <input type="text" id="dphone" ><br><br>




     <input type="button" id="btn"name="done-btn" value="Done">


     </form>
   </div>


</div>


<!--doctor delete form end-->

</div>
<script>

function getdoctor(){
  var t = document.getElementById('table');


               for(var i = 1; i < table.rows.length; i++)
              {
                   table.rows[i].onclick = function()

                   {

                        document.getElementById("dname").value = this.cells[0].innerHTML;
                        document.getElementById("dusername").value = this.cells[1].innerHTML;
                        document.getElementById("demail").value = this.cells[2].innerHTML;
                        document.getElementById("dage").value = this.cells[0].innerHTML;
                        document.getElementById("daddress").value = this.cells[0].innerHTML;
                        document.getElementById("degree").value = this.cells[0].innerHTML;
                        document.getElementById("dgender").value = this.cells[0].innerHTML;
                        document.getElementById("dphone").value = this.cells[0].innerHTML;

                   };
               }
}



document.getElementById("doctor").onclick= function(){

getdoctor();


document.getElementById("dashboard").style.display = "none";
document.getElementById("doctordetails").style.display = "block";

document.getElementById("delete-btn").onclick= function(){

if(document.getElementById("dusername").value ==""){
  alert("select a doctor");

}
else
{
  /*
$.ajax({
  type: 'GET',
  url:'database/deletedoctor.php',
  data:'user ='+dusername,
  success:function(data)
  {
    alert("get");
  }
});
*/
  //deletedoctor(dusername);
  document.getElementById("doctordeletediv").style.display = "block";

document.getElementById("doctordetails").style.display = "none";
}
}

};

document.getElementById("cencel-btn").onclick= function(){
  document.getElementById("doctordetails").style.display = "block";
  //document.getElementById("dashboard").style.display = "none";
document.getElementById("doctordeletediv").style.display = "none";


};


document.getElementById("dashboard-menu").onclick=function(){
  //document.getElementById("doctordeletediv").style.display = "none";
  document.getElementById("dashboard").style.display = "block";
document.getElementById("doctordetails").style.display = "none";

};





</script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
