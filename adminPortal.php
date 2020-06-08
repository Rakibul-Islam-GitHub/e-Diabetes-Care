<?php
session_start();
if($_SESSION["role"]==1) {
  // echo "session worked";
}
else {
  echo "session destroyed";
  header("Location:portal.php");
}
include_once('database/deletedoctor.php');

//include_once('database/showalldoctors.php');



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin Portal</title>
    <style type="text/css">
      .navbar-default{
        background-color: rgb(40,90,99);
      }


      .card-margin{
        margin-top: 5%
      }
      #doctordetails, #patientdetails {
      display: none;
      margin-left: -43px;
  }

#dashboard{
  display: block;
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


}
.doctor-btn {
    top: 65%;
    right: 155px;
    position: absolute;
    margin-bottom: 15px;
}
.apdocimg {
    margin-left: 30px;
}
.totaldoctor {
    width: 20%;
    height: 20%;
    font-size: 40px;
    border: none;
    text-align: center;
    position: absolute;
    left: 58%;
    top: 15%;
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
.delete{

  color: #E34724;
}
.edit{
  color: #FFC107;
}
.table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 6px 0 0;
        font-size: 22px;
    }
    .table-title .add-new {
        float: right;
		height: 30px;
		font-weight: bold;
		font-size: 12px;
		text-shadow: none;
		min-width: 100px;
		border-radius: 50px;
		line-height: 13px;
    }
	.table-title .add-new i {
		margin-right: 4px;
	}
  .menubar{
    width: 70%;
  }
  .card{
    width: 215%;
    text-align: center;
  }
  .card-modify{
    margin-top: 5%;
    width: 136%;


  }
  .card-body{
    padding: 3.25rem;
}
  }
  .card li{

    display: block;
  }
  .card li:hover{
    background-color: rgb(0, 78, 168);
    color: white;

  }
  .doctortable {
    margin-left: -60px;
    width: 115%;
}
.success{
  color: green;
  text-align: center;
  font-weight: bold;
}
input{
  margin-bottom: 6px;
}
.error{
  color: red;
  font-size: 12px;
}
.emsg,.emsg1,.emsg2{
  color: red;
}
.hidden {
   display: table-column;
}
.numbercls {
    margin-top: 4px;
    margin-right: 7px;
    font-weight: 500;
    font-size: large;
}
#deletedoc1{
  color: white;
}
.delete-modal .modal-body .btn {
	font-size: 16px;
	font-weight: bold;
	text-transform: uppercase;
	width: 90px;
	color: #333;
}
.delete-modal .modal-body .btn.btn-danger {
	color: #fff;
}
.delete-modal .modal-body > h3 {
	font-size: 16px;
	font-weight: bold;
	margin: 15px 0 0;
}
.reset{
  margin-bottom: 5px;
/* height: 40px; */
width: 15%;
}
#deletebtn i{

    color: #e13812;
    margin-left: 17px;
    font-size: 26px;

}
#appointmentpage{
  display: none;
}
.logout{

    margin-bottom: 3px;

}
.logoutdiv a{
  color: coral;
font-family: auto;
}
#add-blog{
  display: none;
  margin-left: 10px;
}
#manageblogpage{
  display: none;
}
th.blogaction {
    width: 84px;
}



    </style>
  </head>
  <body>
<div class="container">

    <nav class="navbar justify-content-between navbar-default text-white">

  <a href="home.php" class="navbar-brand text-white">e-Diabetes Care</a>

      <a class="navbar-brand navbar-right ">Welcome Admin</a>
      <div class="navbar-right logoutdiv">
        <a id="logout" href="database/logout.php" class="navbar-brand  navbar-right"><img class="mr-1 logout" style="max-width:20px;" src="images/logout.png" alt="">Logout</a>
      </div>


</nav>
     <div class="row">
        <div class="col-sm-4 menubar">

          <nav class="navbar navbar-expand-md navbar-menu-sm navbar-light">

              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class=" navbar-collapse" id="navbarCollapse">
                  <div class="navbar-nav">


            <div class=" menubar">



              <div class="card">

              <ul class="list-group list-group-flush">
              <a class="nav-link " href="#"> <li class="list-group-item list-group-item-action active"  id="dashboard-menu" >Dashboard</li></a>
              <a class="nav-link " href="#"> <li id="doctor" class="list-group-item list-group-item-action">Doctors</li></a>
              <a class="nav-link " href="#"> <li id="patient" class="list-group-item list-group-item-action">Patients</li> </a>
                <a class="nav-link " href="#"><li id="appointment" class="list-group-item list-group-item-action">Appointment</li></a>
                <a class="nav-link " href="#"><li id="addblog" class="list-group-item list-group-item-action">Add Blog</li></a>
                <a class="nav-link " href="#"><li id="manageblog" class="list-group-item list-group-item-action">Manage Blog</li></a>

              </ul>
            </div>
            </div>
                 </div>

              </div>
          </nav>


</div>

  <!-- start of blog div -->

<?php


include_once('database/insertblog.php');

?>
<div id="add-blog" class="col-md-7 mt-5">

   <div class="col-12">
        <div class="successpost">

        </div>
     <form method="POST" action="database/insertblog.php" ENCTYPE="multipart/form-data">
               <div class="form-group">
                   Blog Title
                   <input class="form-control" id="blogtitle" type="text" required name="bname">
               </div>
               <div class="form-group">
                   Blog Images
                   <div>
                       <input class="form-control" id="blogfile" type="file" required name="file">
                   </div>

               </div>

               <div class="form-group">
                   Blog Description
                   <textarea cols="30" rows="10" id="blogdes" class="form-control" required name="bdescription"></textarea>
               </div>



               <div class="text-center">
                 <input type="submit" class="btn btn-primary text-center" id="blogpublish" name="publish" value="publish">
               </div>


           </form>


   </div>






</div>


<!-- manage blog div start -->
<!---patient details table starts--->
<div id="manageblogpage" class="col-sm-7 mt-3">

        <div class="">
        <div class="table-title">
             <div class="row">
                 <div class="col-sm-8"><h2>List of all blog post</b></h2></div>

             </div>
         </div>

        <table class="table table-hover table-bordered" id="blogtable">
        <thead>
        <tr class="table-bordered">
          <th>#</th>
        <th>Post Title</th>

        <th class="blogaction">Action</th>



        </tr>
        </thead>
        <tbody id="blogdata">

        </tbody>
        </table>
        </div>

 </div>


<!---patient details table end-->




<!-- all appointment history table start -->
<section class="appointmentform col-md-7" id="appointmentpage">


            <div class=" ">


                <div class="mt-3">
                  <h4 style="font-weight: 800;">All Appointment History</h4>
                  <table class="table table-hover table-striped" id="patable">
        <thead class="thead-dark">
          <tr class="table-bordered">

            <th>Doctor Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Patient Name</th>




                </tr>
              </thead>
              <tbody id="appointmenthistory" class="doctors">

              </tbody>
            </table>

                      </div>


            </div>



</section>
<!-- all  appointment history end -->

<section id="dashboard" class="col-sm-8">


          <div class="col-sm-8" >


            <div class="card card-margin card-modify">

              <div class="card-body">
<img style="display:block;" class="apdocimg" src="images/doctorIcon.png" >

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



            <div class="card card-margin card-modify">

              <div class="card-body">
<img style="display:block; height:110px;" class="apdocimg" src="images/patient.png" >

<?php
include_once('database/db.php');
$connection = new databasefull();
$conobj=$connection->OpenCon();
$result=$conn->query("SELECT * FROM patients");
$total=mysqli_num_rows($result);
 ?>




                <p class="totaldoctor"> <?php echo $total; ?></p>
                <a href="#" class="btn btn-primary float-sm-right doctor-btn">Patients</a>
              </div>
            </div>
</section>


   <!---doctor details table start--->

            <div id="doctordetails" class="col-sm-8 mt-3">
<div class="success mb-1" ></div>
          <div class="doctortable">
            <div class="table-title">
                 <div class="row">


                     <div class="col-sm-8"><h2>Doctor <b>Details</b></h2></div>
                     <div class="col-sm-4">
                         <button type="button" id="add-doc" class="btn btn-info add-new" data-toggle="modal" data-target="#registration"><i class="fa fa-plus"></i> Add New</button>
                     </div>
                 </div>
             </div>

            <table class="table table-hover table-bordered" id="table">
  <thead>
    <tr class="table-bordered">

      <th>Name</th>
      <th>Email</th>
      <th>Age</th>
      <th>Address</th>
      <th>Degree</th>
      <th>Gender</th>
      <th>Mob No.</th>
      <th>Action</th>



    </tr>
  </thead>
  <tbody id="doctabledata" class="doctors">

  </tbody>
</table>
          </div>

             </div>
<!--doctordetails table ends-->

<div id="delete_doctor" class="modal fade delete-modal" role="dialog">
     <div class="modal-dialog modal-dialog-centered">
       <div class="modal-content">
         <div class="modal-body text-center">
           <img src="images/sent.png" alt="" width="50" height="46">
           <h3 class="mb-3 custommsg"></h3>
           <div class="m-t-20"> <a href="#" class="btn btn-warning mr-2" data-dismiss="modal">Close</a>
             <button type="button" id="deletedoc1" data-dismiss="modal" class="delete btn btn-danger ml-2">Delete</button>
           </div>
         </div>
       </div>
     </div>
   </div>


<!---patient details table starts--->
<div id="patientdetails" class="col-sm-8 mt-3">

        <div class="">
        <div class="table-title">
             <div class="row">
                 <div class="col-sm-8"><h2>Patient <b>Details</b></h2></div>
                 <div id="patient-add-btn" class="col-sm-4">
                     <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                 </div>
             </div>
         </div>

        <table class="table table-hover table-bordered" id="patienttable">
        <thead>
        <tr class="table-bordered">

        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Mob No.</th>
        <th>Action</th>



        </tr>
        </thead>
        <tbody id="patientdata">

        </tbody>
        </table>
        </div>

 </div>


<!---patient details table end-->






   <!---Doctor Registration form start-->
   <div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
        <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="myModalLabel">Registration</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
   	  <div class="modal-body">
          <form method="POST" action="" id="doc-add-form">
            <div class="form-group">


              <div class="msg1"></div>
              <input type="text" name="dusername" id="dusername" class="form-control" autocomplete="off" required placeholder="Username">

              <div class="msg2"></div>
          <input type="text" name="dname" id="dname" class="form-control"  required placeholder=" Name">
          <div class="emsg hidden">
            <span> Please Enter a Valid UserName </span>
          </div>
          <div class="msg3"></div>
          <input type="email" name="demail" id="demail" class="form-control" autocomplete="off" required placeholder="Email">

          <div class="emsg1 hidden">
            <span> Please Enter a Valid email </span>
          </div>
          <div class="msg4"></div>
          <input type="password" name="dpassword" id="dpassword" class="form-control" required placeholder="Password">
          <div class="msg5"></div>
       <input type="password" name="dconpassword" id="dconpassword" class="form-control" required placeholder="Confirm password">
       <div class="msg6"></div>
       <input type="number" name="dage" id="dage" class="form-control" required placeholder="Age">

       <div class="emsg2 hidden">
         <span>Age must be between 1 to 100!</span>
       </div>
       <div class="msg7"></div>
       <input type="text" name="daddress" id="daddress" class="form-control" required placeholder="Address">
        <div class="msg8"></div>
       <input type="text" class="form-control" name="degree" id="degree" required placeholder="Degree" >
      <div class="msg9"></div>

   	   Gender :

   	   <input type="radio" class="dgender" value="Male" name="dgender" required> Male
   	   <input type="radio" class="dgender" value="Female" name="dgender" required> Female

    	<div class="input-group form-group mt-2">
          <div class="msg10"></div>
   		<span class="numbercls input-group-addon">+88</span>
   		<input type="text" name="dphone" class="form-control" id="user" maxlength="11"  placeholder="Contact no." required >
   		</div>


   		<center><input type="submit" id="btn-doc-reg" value="Register" name="doctors" class="btn btn-danger" >

    <button type="button" onclick="reset()" class="reset btn btn-warning">Reset</button></center>

      </div>
   		</form>

   		</div>


            </div>

          </div>
     </div>
<!---Doctor Registration form end-->


<!-------------------------------------------------------------------->


<!--doctor's profile edit form start-->

<div class="modal fade" id="doc-editprofile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Update Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
   <div class="modal-body">
       <form method="POST" action="" id="doc-edit-form">
         <div class="form-group">


           <input type="text" name="editusername" id="dusername" class="form-control" readonly required placeholder="Username">


       <input type="text" name="editname" id="dname" class="form-control"  required placeholder=" Name">

       <input type="email" name="editemail" id="demail" class="form-control" required placeholder="Email">

       <input type="text" name="editpassword" id="dpassword" class="form-control" required placeholder="Password">


    <input type="number" name="editage" id="dage" class="form-control" required placeholder="Age">
    <input type="text" name="editaddress" id="daddress" class="form-control" required placeholder="Address">

    <input type="text" class="form-control" name="editdegree" id="degree" required placeholder="Degree" ><br>


   <div class="input-group form-group ">
   <span class=" numbercls input-group-addon">+88</span>
   <input type="text" name="editphone" style="padding-left:0" class="form-control" id="dphone" maxlength="11"  placeholder="Contact no." required >
   </div>

   <center><input type="submit" id="btn-doc-edit" value="Update" name="doctors" class="btn btn-warning" >
   <input type="button" value="Reset"  class="btn btn-danger"></center>
   </div>
   </form>

   </div>


         </div>

       </div>
  </div>



<!--doctor's profile edit form end-->




</div>






  /// real time validation check end
$('.reset').click(function(){
  $('#doc-add-form').trigger("reset");

  //$("input[name=dpassword]").val="";

});



var user=0;

document.getElementById("dashboard-menu").onclick= function(){
document.getElementById("doctordetails").style.display = "none";
document.getElementById("patientdetails").style.display = "none";
document.getElementById("appointmentpage").style.display = "none";
document.getElementById("add-blog").style.display = "none";
document.getElementById("manageblogpage").style.display = "none";
document.getElementById("dashboard").style.display = "block";
manageActive(this);
$('.collapse').collapse('toggle');
};

document.getElementById("doctor").onclick= function(){
loadallData("doctors");
document.getElementById("dashboard").style.display = "none";
document.getElementById("patientdetails").style.display = "none";
document.getElementById("appointmentpage").style.display = "none";
document.getElementById("add-blog").style.display = "none";
document.getElementById("manageblogpage").style.display = "none";
document.getElementById("doctordetails").style.display = "block";
manageActive(this);
$('.collapse').collapse('toggle');
};

document.getElementById("patient").onclick= function(){
  $('#patient-add-btn').hide();
  loadallData("patients");
document.getElementById("dashboard").style.display = "none";
document.getElementById("doctordetails").style.display = "none";
document.getElementById("appointmentpage").style.display = "none";
document.getElementById("add-blog").style.display = "none";
document.getElementById("manageblogpage").style.display = "none";
document.getElementById("patientdetails").style.display = "block";
manageActive(this);
$('.collapse').collapse('toggle');
};

document.getElementById("appointment").onclick= function(){

document.getElementById("dashboard").style.display = "none";
document.getElementById("doctordetails").style.display = "none";
document.getElementById("patientdetails").style.display = "none";
document.getElementById("add-blog").style.display = "none";
document.getElementById("manageblogpage").style.display = "none";
document.getElementById("appointmentpage").style.display = "block";
manageActive(this);
$('.collapse').collapse('toggle');
};

document.getElementById("addblog").onclick= function(){
document.getElementById("doctordetails").style.display = "none";
document.getElementById("patientdetails").style.display = "none";
document.getElementById("appointmentpage").style.display = "none";
document.getElementById("dashboard").style.display = "none";
document.getElementById("manageblogpage").style.display = "none";
document.getElementById("add-blog").style.display = "block";

manageActive(this);
$('.collapse').collapse('toggle');
};

document.getElementById("manageblog").onclick= function(){
document.getElementById("doctordetails").style.display = "none";
document.getElementById("patientdetails").style.display = "none";
document.getElementById("appointmentpage").style.display = "none";
document.getElementById("dashboard").style.display = "none";
document.getElementById("add-blog").style.display = "none";
document.getElementById("manageblogpage").style.display = "block";

manageActive(this);
$('.collapse').collapse('toggle');
};

function manageActive(id){
  document.getElementById("dashboard-menu").classList.remove("active");
  document.getElementById("appointment").classList.remove("active");
  document.getElementById("patient").classList.remove("active");
  document.getElementById("doctor").classList.remove("active");
  document.getElementById("addblog").classList.remove("active");
  document.getElementById("manageblog").classList.remove("active");
  // document.getElementById("chat").classList.remove("active");

  id.classList.toggle("active");

}

///// ***************************doctor registration starts**********************************

 $('#btn-doc-reg').click(function(e){
   e.preventDefault();
   var formName = $(this).attr('name');
   //alert(formName);
   var username= $("input[name=dusername]").val();
   var name= $("input[name=dname]").val();
   var email= $("input[name=demail]").val();
   var password= $("input[name=dpassword]").val();
   var conpassword= $("input[name=dconpassword]").val();
   var age= $("input[name=dage]").val();
   var address= $("input[name=daddress]").val();
   var degree= $("input[name=degree]").val();
   var gender = $("input[name='dgender']:checked").val();
   //var gender= $("input[name=dgender]").val();
   var phone= $("input[name=dphone]").val();
   //alert(email);
   //alert(username);
   //alert(formName);
   //alert(gender);
   var role=2;
   // form validation
   var count=0;
   //usernametaken=0;


var valid= validation();
   if(valid){
     alert('you are going to be registered');
     usercheckfunc(username,formName);

   }

/// validation function start....
   function validation(){

     if (username=="") {

       alert('Please fill up all fields');
        $('.msg1').html('<span class="error">username is required</span>');

           return false;

       }




       if (name=="") {
         //alert('username needed');
           $('.msg2').html('<span class="error">name is required</span>');
           return false;
         }

         if (email=="") {
           //alert('username needed');
             $('.msg3').html('<span class="error">email is required</span>');
             return false;
           }

          if (password=="") {
                  $('.msg4').html('<span class="error">password is required</span>');
                  return false;
                }

          if (password!=conpassword){
            $('.msg5').fadeIn();
                  $('.msg5').html('<span class="error">password does not match</span>');
                  return false;
              }


              if (age=="") {
                //alert('username needed');
                  $('.msg6').html('<span class="error">age is required</span>');
                  return false;
                }
                if (address=="") {
                  //alert('username needed');
                    $('.msg7').html('<span class="error">address is required</span>');
                    return false;
                  }
                  if (degree=="") {
                    //alert('username needed');
                      $('.msg8').html('<span class="error">Degree is required</span>');
                      return false;
                    }
                    if (gender!='Male' && gender!='Female') {

                        $('.msg9').html('<span class="error">Select your gender</span>');
                        return false;
                      }
                      if (phone=="") {
                        //alert('username needed');
                          $('.msg10').html('<span class="error">Phone number is required</span>');
                          return false;
                        }



    else {
      count++;
      return true;
    }



       }

   // validation function end

 // user existance check and user add  function start
 function usercheckfunc(username,a){
  var username=username;
  var table=a;

$.ajax({
  url: "database/checkuser.php",
  type: "POST",
  data:{
    'username': username,
    'table': table
  },

  success: function(d,textStatus) {

    user=1;
//alert(textStatus);
//alert(d);
if(textStatus=='success' && d!=""){
  alert('username allready taken try with another!');
}
else {
  //alert('not success');
  adduser();
  $('#doc-add-form').trigger("reset");
  //alert('new doctor addedd successfully!');

}


    //return true;



  },
  error: function (request, status, error) {
  alert(request.responseText);

//  return false;
  }

 });

 }


 /// user check function end


///user add by ajax start
function adduser(){
  $.ajax({
   url: "database/doctorinsert.php",
   type: "POST",
   data: {
     'username': username,
     'name': name,
     'email': email,
     'password': password,
     'table': formName,
     'age': age,
     'address': address,
     'degree': degree,
     'gender': gender,
     'phone': phone,

   },

   success: function(response) {
     $('#username').val('');
     $('#password').val('');
     $('#registration').modal('toggle');

   $('.success').html("<h3>New doctor added successfully!</h3>")
   $('.success').delay(3500).fadeOut();
   loadallData(formName);
   },
   error: function (request, status, error) {
   console.log(request.responseText);   //it will show error in webpage if any
   }

   });
}


/// user add end


 });



////insert data end

////////*************** function for load all data starts***********************

function loadallData(tablename){
		//var username = $(this).attr('name');

$.ajax({
 url: "database/loadalldata.php",
 type: "POST",
 data: {

   'table': tablename
 },

 success: function(response) {
   if(tablename=='patients'){

     $('#patientdata').html(response);
   }
   else if (tablename==='appointments') {
     $('#appointmenthistory').html(response);
   }
   else if (tablename==='blog') {
     $('#blogdata').html(response);
   }
   else {

      $('#doctabledata').html(response);
   }




 },
 error: function (request, status, error) {
 alert(request.responseText);
 }
});
}

///// ^^^^^^^^^^^^^^^ for load all data into table end ^^^^^^^^^^^^^^^^^



////**********************ajax operations for delete data********************

$(document).on('click', '.delete', function(){     /// doctor delete
  var username = $(this).attr('name');
  var tablename= $(this).attr('tablename');
    deleteFunction(username,tablename);
    $('.custommsg').text('Are you sure want to delete this Doctor?');


});

$(document).on('click', '#deletebtn', function(){

  var username = $(this).attr('name');
  var tablename= $(this).attr('tablename');

    deleteFunction(username,tablename);
      $('.custommsg').text('Are you sure want to delete this Patient?');


});

function deleteFunction(username, tablename){
  $(document).on('click', '#deletedoc1', function(){    /// Confirm popup

        //Delete process
        $.ajax({
         url: "database/deletequery.php",
         type: "POST",
         data: {
           'username': username,
           'table': tablename
         },

         success: function(d) {
            if(tablename=='doctors'){
              loadallData("doctors");
            }
            else if (tablename=='blog') {
              loadallData("blog");

            }
            else {
              loadallData("patients");
            }



         },
         error: function (request, status, error) {
         //alert(request.responseText);
         }
         });


  });


}

 ///ajax for delete row elements end


 /// **********************user data edit start***********************

 $(document).on('click', '.edit', function(){
   var username = $(this).attr('name');
   var tablename= $(this).attr('tablename');

//alert('worked');

   $.ajax({
     url: "database/checkuser.php",
     type: "POST",
     data:{
       'username': username,
       'table': tablename
     },

     success: function(response) {
       var alldata = jQuery.parseJSON(response);

				var email = alldata.email;
        var username=alldata.username;
        //alert(email);
        document.getElementById("doc-edit-form").elements.namedItem("editusername").value=(alldata.username);
        document.getElementById("doc-edit-form").elements.namedItem("editname").value=(alldata.name);
        document.getElementById("doc-edit-form").elements.namedItem("editemail").value=email;
        document.getElementById("doc-edit-form").elements.namedItem("editpassword").value=(alldata.password);
        document.getElementById("doc-edit-form").elements.namedItem("editage").value=(alldata.age);
        document.getElementById("doc-edit-form").elements.namedItem("editaddress").value=(alldata.address);
        document.getElementById("doc-edit-form").elements.namedItem("editdegree").value=(alldata.degree);
        document.getElementById("doc-edit-form").elements.namedItem("editphone").value=(alldata.phone);




     },
     error: function (request, status, error) {
     alert(request.responseText);

   //  return false;
     }

    });

 });

/// ***************************user data edit end***********************


/// user update start**********************
$('#btn-doc-edit').click(function(e){
  e.preventDefault();
  var formName = $(this).attr('name');
  //alert(formName);
  var username= $("input[name=editusername]").val();
  var name= $("input[name=editname]").val();
  var email= $("input[name=editemail]").val();
  var password= $("input[name=editpassword]").val();
  //var conpassword= $("input[name=dconpassword]").val();
  var age= $("input[name=editage]").val();
  var address= $("input[name=editaddress]").val();
  var degree= $("input[name=editdegree]").val();
  //var gender= $("input[name=dgender]").val();
  var phone= $("input[name=editphone]").val();


///user add by ajax start
 $.ajax({
  url: "database/updatequery.php",
  type: "POST",
  data: {
    'username': username,
    'name': name,
    'email': email,
    'password': password,
    'table': formName,
    'age': age,
    'address': address,
    'degree': degree,
    'phone': phone

  },

  success: function(response) {
    //alert(d);
    $('#username').val('');
    $('#password').val('');
    $('#doc-editprofile').modal('toggle');

  $('.success').html("<h3>Record updated successfully</h3>")
  $('.success').delay(3700).fadeOut();
  loadallData(formName);
  },
  error: function (request, status, error) {
  console.log(request.responseText);
  }

  });



});


/// user update end


////  manage blog starts


$('#manageblog').click(function(){


loadallData('blog');




});


$(document).on('click', '.deletebtn', function(){

  var username = $(this).attr('name');
  var tablename= $(this).attr('tablename');

    //deleteFunction(id,tablename);
      $('.custommsg').text('Are you sure want to delete this post?');


});




//// manage blog end

});



</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
