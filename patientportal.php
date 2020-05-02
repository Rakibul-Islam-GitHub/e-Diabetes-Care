<?php
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
    body{
      background-color: #F3F3F3;
    }
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
    margin-left: -40px;
    width: 110%;
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


    </style>
    <link rel="stylesheet" href="css/patientportal.css">
  </head>
  <body>
<div class="container">

    <nav class="navbar justify-content-between navbar-default text-white">
  <a class="navbar-brand">e-Diabetes Care</a>

      <a class="navbar-brand navbar-right">Patient</a>

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
              <a class="nav-link " href="#"> <li id="doctor" class="list-group-item list-group-item-action"  >Doctors</li></a>

                <a class="nav-link " href="#"><li id="appointment" class="list-group-item list-group-item-action">Appointment</li></a>
                <a class="nav-link " href="#"> <li id="patient" class="list-group-item list-group-item-action">Profile</li> </a>
                <a class="nav-link " href="#"><li class="list-group-item list-group-item-action">Chat</li></a>
                <!-- <a class="nav-link " href="#"><li class="list-group-item list-group-item-action">Contact</li></a> -->
              </ul>
            </div>
            </div>
                 </div>

              </div>
          </nav>



</div>

<section id="dashboard" class="col-sm-8">


          <div class="dashboardpage" id="dashboardpage">
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


              <section  class="col-sm-8 mt-5">

                <div class="col">
                  <h4>Appointment History</h4>
                  <table class="table table-hover table-striped" id="patable">
        <thead class="thead-dark">
          <tr class="table-bordered">

            <th> Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Doctor</th>
            <th>Action</th>



          </tr>
        </thead>
        <tbody id="doctabledata" class="doctors">

        </tbody>
      </table>

                </div>




              </section>
          </div>


          </div>



    <!-- doctor-list page code start -->

    <div class="row doctor-grid doctor-profile" id="doctorpage">


    </div>


    <!-- doctor-list page code end -->


    <!-- doctor appointment start -->
    <section class="appointmentform" id="appointmentpage">

      <div class="row">
                        <div class="col-md-8 ">
                            <form>

                                <div class="row">

                                    <div class="col-md-8 mt-3">
                                        <div class="form-group">
                                            <label>Doctor</label>
                                            <select class="select col-md-6 text-center">
    											<option>Select</option>

                          <?php
                          include_once('database/showalldoctors.php');
                          $connection = new databasefull();
                          $conobj=$connection->OpenCon();
                          $result=$conn->query("SELECT * FROM doctors");
                          $total=mysqli_num_rows($result);
                          if ($result->num_rows > 0) {
                          while($row = mysqli_fetch_assoc($result))

                           {
                            echo "
                            <option>".$row['name']."</option>

                            ";

                           }
                         }
                           ?>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                        <div class="form-group col-md-8">
                                            <label>Date</label>

                                                <input type="date" class="form-control datetimepicker">

                                        </div>


                                        <div class="form-group col-md-8">
                                            <label>Time</label>

                                                <input type="time" class="form-control" id="datetimepicker3">

                                        </div>

                                </div>
                                <div class="row">

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Patient Phone Number</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Comment (Optional)</label>
                                    <textarea cols="30" rows="4" class="form-control"></textarea>
                                </div>

                                <div class="m-t-20 text-center">
                                    <button class="btn btn-primary submit-btn" id="createappointment">Create Appointment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

    </section>
   <!-- doctor appointment end -->

</section>




   <!---doctor details table start--->
<div id="doctordetails" class="col-sm-8 mt-5">
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

<div id="delete_doctor" class="modal delete-modal" role="dialog">
     <div class="modal-dialog modal-dialog-centered">
       <div class="modal-content">
         <div class="modal-body text-center">
           <img src="images/sent.png" alt="" width="50" height="46">
           <h3 class="mb-3">Are you sure want to delete this Doctor?</h3>
           <div class="m-t-20"> <a href="#" class="btn btn-warning mr-2" data-dismiss="modal">Close</a>
             <button type="button" id="deletedoc1" data-dismiss="modal" class="delete btn btn-danger ml-2">Delete</button>
           </div>
         </div>
       </div>
     </div>
   </div>


<!---appointment form starts--->


<!---appointment form  end-->



   <!---Doctor Registration form start-->

<!---Doctor Registration form end-->


<!-------------------------------------------------------------------->


<!--doctor's profile edit form start-->
<!--
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
 -->


<!--doctor's profile edit form end-->

</div>


<script>
$(document).ready(function() {

  $(window).on('resize', function(){
        var win = $(this);
        if (win.width() < 514) {

        $('#navbarCollapse').addClass('collapse');

        }
      else
      {
          $('#navbarCollapse').removeClass('collapse');
      }

  });

  ////********** real time validation here ---************

  var $checkname=/^([a-zA-Z]{3,16})$/;
  var $checkemail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  $('#dusername').on('keypress keydown keyup',function(){
    $('.msg1').fadeOut();

       });

       $('#dname').on('keypress keydown keyup',function(){
         $('.msg2').fadeOut();

            });
            $('#dpassword').on('keypress keydown keyup',function(){
              $('.msg4').fadeOut();

                 });
                 $('#dconpassword').on('keypress keydown keyup',function(){
                   if($('#dpassword').val()==$('#dconpassword').val())
                   $('.msg5').fadeOut();

                      });
                 $('#daddress').on('keypress keydown keyup',function(){
                   $('.msg7').fadeOut();

                      });

                      $('#degree').on('keypress keydown keyup',function(){
                        $('.msg8').fadeOut();

                           });

                           $('.dgender').on('click keydown keyup',function(){
                             var $gender = $("input[name='dgender']:checked").val();
                             if($gender=='Male'|| $gender=='Female')
                             $('.msg9').fadeOut();

                                });
  $('#dname').on('keypress keydown keyup',function(){
         $('.msg2').fadeOut();
           if (!$(this).val().match($checkname)) {
            // there is a mismatch, hence show the error message
               $('.emsg').removeClass('hidden');
               $('.emsg').show();
           }
         else{
              // else, do not display message
              $('.emsg').addClass('hidden');
             }
       });

       $('#demail').on('keypress keydown keyup',function(){
                 $('.msg3').fadeOut();
                if (!$(this).val().match($checkemail)) {
                 // there is a mismatch, hence show the error message
                    $('.emsg1').removeClass('hidden');
                    $('.emsg1').show();
                }
              else{
                   // else, do not display message
                   $('.emsg1').addClass('hidden');
                  }
            });
var $checkage=/^[1-9][0-9]?$|^100$/;
            $('#dage').on('keypress keydown keyup',function(){
              $('.msg6').fadeOut();
                     if (!$(this).val().match($checkage))  {
                      // there is a mismatch, hence show the error message
                         $('.emsg2').removeClass('hidden');
                         $('.emsg2').show();
                     }
                   else{
                        // else, do not display message
                        $('.emsg2').addClass('hidden');
                       }
                 });





  /// real time validation check end
$('.reset').click(function(){
  alert('worked');

  //$("input[name=dpassword]").val="";

});



var user=0;

document.getElementById("dashboard-menu").onclick= function(){
document.getElementById("doctorpage").style.display = "none";
document.getElementById("appointmentpage").style.display = "none";
//document.getElementById("patientdetails").style.display = "none";
document.getElementById("dashboardpage").style.display = "block";
manageActive(this);
$('.collapse').collapse('toggle');
};

document.getElementById("doctor").onclick= function(){
loadallData("doctors");
document.getElementById("dashboardpage").style.display = "none";
document.getElementById("appointmentpage").style.display = "none";
//document.getElementById("patientdetails").style.display = "none";
//document.getElementById("patientdetails").style.display = "none";
document.getElementById("doctorpage").style.display = "block";
manageActive(this);
// document.getElementById("dashboard-menu").classList.remove("active");
// document.getElementById("appointment").classList.remove("active");

$('.collapse').collapse('toggle');
};

document.getElementById("appointment").onclick= function(){

document.getElementById("dashboardpage").style.display = "none";
document.getElementById("doctorpage").style.display = "none";
//document.getElementById("patientdetails").style.display = "none";
document.getElementById("appointmentpage").style.display = "block";
manageActive(this);
$('.collapse').collapse('toggle');
};
/// show active color only the button clicked
function manageActive(id){
  document.getElementById("dashboard-menu").classList.remove("active");
  document.getElementById("appointment").classList.remove("active");
  document.getElementById("doctor").classList.remove("active");

  id.classList.toggle("active");

}



////////*************** function for load all data starts***********************

function loadallData(tablename){
		//var username = $(this).attr('name');



$.ajax({
 url: "database/alldoctorlist.php",
 type: "POST",
 data: {

   'table': tablename
 },

 success: function(response) {
   if(tablename=='patients'){

     $('#patientdata').html(response);
   }
   else {

      $('#doctorpage').html(response);
   }




 },
 error: function (request, status, error) {
 alert(request.responseText);
 }
});
}

///// ^^^^^^^^^^^^^^^ for load all data into table end ^^^^^^^^^^^^^^^^^




 /// **********************user data edit start***********************

 $(document).on('click', '.doctordetails', function(){
   var username = $(this).attr('name');
   //var tablename= $(this).attr('tablename');
 var table='doctors';
alert(username);

   $.ajax({
     url: "database/checkuser.php",
     type: "POST",
     data:{
       'username': username,
       'table': table
     },

     success: function(response) {
       var alldata = jQuery.parseJSON(response);

				var email = alldata.email;
        // var username=alldata.username;
        // //alert(email);
        // document.getElementById("doc-edit-form").elements.namedItem("editusername").value=(alldata.username);
        // document.getElementById("doc-edit-form").elements.namedItem("editname").value=(alldata.name);
        // document.getElementById("doc-edit-form").elements.namedItem("editemail").value=email;
        // document.getElementById("doc-edit-form").elements.namedItem("editpassword").value=(alldata.password);
        // document.getElementById("doc-edit-form").elements.namedItem("editage").value=(alldata.age);
        // document.getElementById("doc-edit-form").elements.namedItem("editaddress").value=(alldata.address);
        // document.getElementById("doc-edit-form").elements.namedItem("editdegree").value=(alldata.degree);
        // document.getElementById("doc-edit-form").elements.namedItem("editphone").value=(alldata.phone);

alert(email);


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

});



</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
