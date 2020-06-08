<?php
session_start();
if($_SESSION["role"]==3) {
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
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/patientportal.css">
    <title>Patient Portal</title>
    <style type="text/css">
    body{
      background-color: #F3F3F3;
      font-family: Helvetica, sans-serif;

      background: rgb(216,231,230);

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
/* style for chat page start */



#chatpage{
  display: none;

  justify-content: center;

  height: 100vh;

  font-family: Helvetica, sans-serif;
  overflow: hidden;
}

.msger {
display: flex;
flex-flow: column wrap;
justify-content: space-between;
width: 70%;
max-width: 867px;

height: 650px;
border: 2px solid #ddd;
border-radius: 5px;
background: #fff;
box-shadow: 0 15px 15px -5px rgba(0, 0, 0, 0.2);
}

.msger-header {
background-color: #ee5522;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 200 200'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='100' y1='33' x2='100' y2='-3'%3E%3Cstop offset='0' stop-color='%23000' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23000' stop-opacity='1'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='100' y1='135' x2='100' y2='97'%3E%3Cstop offset='0' stop-color='%23000' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23000' stop-opacity='1'/%3E%3C/linearGradient%3E%3C/defs%3E%3Cg fill='%23ca481d' fill-opacity='0.6'%3E%3Crect x='100' width='100' height='100'/%3E%3Crect y='100' width='100' height='100'/%3E%3C/g%3E%3Cg fill-opacity='0.5'%3E%3Cpolygon fill='url(%23a)' points='100 30 0 0 200 0'/%3E%3Cpolygon fill='url(%23b)' points='100 100 0 130 0 100 200 100 200 130'/%3E%3C/g%3E%3C/svg%3E");

display: flex;
justify-content: space-between;
padding: 10px;
border-bottom: 2px solid #ddd;
background: #eee;
color: #666;
}


.msger-chat {
flex: 1;
overflow-y: auto;
padding: 10px;
}
.msger-chat::-webkit-scrollbar {
width: 6px;
}
.msger-chat::-webkit-scrollbar-track {
background: #ddd;
}
.msger-chat::-webkit-scrollbar-thumb {
background: #bdbdbd;
}
.msg {
display: flex;
align-items: flex-end;
margin-bottom: 10px;
}
.msg:last-of-type {
margin: 0;
}
.msg-img {
position: fixed;
width: 50px;
height: 50px;
margin-right: 10px;
background: #ddd;
background-repeat: no-repeat;
background-position: center;
background-size: cover;
border-radius: 50%;
}
.msg-bubble {
margin-left: 58px;
max-width: 450px;
padding: 15px;
border-radius: 15px;
background: #ececec;
}
.msg-info {
display: flex;
justify-content: space-between;
align-items: center;
margin-bottom: 10px;
border-bottom: 1px solid #25265733;
}
.msg-info-name {
  font-family: cursive;
      font-size: 13px;
      color: #acccd0;
}
.msg-info-time {
  font-size: 11px;
      color: #b6c1d8
}

.left-msg .msg-bubble {
border-bottom-left-radius: 0;
}

.right-msg {
flex-direction: row-reverse;
display: block;
}
.right-msg .msg-bubble {
background: #2f316b9e;
color: #fff;
border-bottom-right-radius: 0;
}
.right-msg .msg-img {
margin: 0 0 0 10px;
}

.msger-inputarea {
display: flex;
padding: 10px;

border-top:2px solid #ddd;
background: #eee;
}
.msger-inputarea * {
padding: 10px;
border: none;


border-radius: 3px;
font-size: 1em;
}
.msger-input {
flex: 1;
background: #ddd;
}
.msger-send-btn {
margin-left: 10px;
background: rgb(0, 196, 65);
color: #fff;
font-weight: bold;
cursor: pointer;
transition: background 0.23s;
}
.msger-send-btn:hover {
background: rgb(0, 180, 50);
}

.msger-chat {

background-color: #2885aa;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 2 1'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='0' x2='0' y1='0' y2='1' gradientTransform='rotate(66,0.5,0.5)'%3E%3Cstop offset='0' stop-color='%232885aa'/%3E%3Cstop offset='1' stop-color='%23cb72ff'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='0' y1='0' x2='0' y2='1' gradientTransform='rotate(18,0.5,0.5)'%3E%3Cstop offset='0' stop-color='%23ffeb7a' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23ffeb7a' stop-opacity='1'/%3E%3C/linearGradient%3E%3ClinearGradient id='c' gradientUnits='userSpaceOnUse' x1='0' y1='0' x2='2' y2='2' gradientTransform='rotate(53,0.5,0.5)'%3E%3Cstop offset='0' stop-color='%23ffeb7a' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23ffeb7a' stop-opacity='1'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect x='0' y='0' fill='url(%23a)' width='2' height='1'/%3E%3Cg fill-opacity='0.16'%3E%3Cpolygon fill='url(%23b)' points='0 1 0 0 2 0'/%3E%3Cpolygon fill='url(%23c)' points='2 1 2 0 0 0'/%3E%3C/g%3E%3C/svg%3E");
/* background-attachment: fixed; */
background-size: cover;
}
#showmsg{

overflow: auto;
display: flex;
flex-direction: column-reverse;
}
.chatimg {
border-radius: 50%;
margin-top: -110px;
width: 50px;
}
#sendmsg {
width: 117px;
height: 44px;
}

/* style for chat page end */

.profile-widget{
  border: 2px solid #ddd;
  border-radius: 5px;
  background: #fff;
  box-shadow: 0 15px 15px -5px rgba(0, 0, 0, 0.2);
  background: rgb(238,174,202);
  background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
}

#patable{
  width: 135%;
      margin-bottom: 1rem;
      color: #420741;
      font-weight: bold;
}
.table{
  max-width: 200%;
}
#patable .thead-dark th {

    background-color: #06313e;

}
.logout{

    margin-bottom: 3px;

}
.logoutdiv a{
  color: coral;
font-family: auto;
}
.logoutdiv a:hover{
  color: blue;
}
.userlist1, .userlist {
    display: inherit;
    max-width: 160px;
}
.profiledisplay h4{
  display: initial;
}

    </style>

  </head>
  <body>
<div class="container">

    <nav class="navbar justify-content-between navbar-default text-white" id="nav">
  <a href="home.php" class="navbar-brand text-white">e-Diabetes Care</a>
  <?php
  //include_once('database/showalldoctors.php');
  $connection = new databasefull();
  $conobj=$connection->OpenCon();
  $username=$_SESSION['username'];
  $result=$conobj->query("SELECT name FROM patients WHERE email='$username'");

  if ($result->num_rows > 0) {
  while($row = mysqli_fetch_assoc($result))

   {
     $name=$row['name'];


  }

  }

  $conobj->close();
   ?>

      <a class="navbar-brand navbar-right">Welcome <?php echo $name ?></a>


      <div class="navbar-right logoutdiv">
        <a id="logout" href="database/logout.php" class="navbar-brand  navbar-right"><img class="mr-1 logout" style="max-width:20px;" src="images/logout.png" alt="">Logout</a>
      </div>


</nav>
  <div class="row">
     <div class="col-sm-4 menubar" id="menubar">

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
                <a class="nav-link " href="#"> <li id="profile" name="<?php echo $_SESSION['username'] ?>" class="list-group-item list-group-item-action">Profile</li> </a>
                <a class="nav-link " href="#"><li id="chat" class="list-group-item list-group-item-action">Chat</li></a>
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


                  <section  class="col-sm-12 mt-5">

                    <div class="">
                      <h4 style="font-weight: 800;">Appointment History</h4>
                      <table class="table table-hover table-striped" id="patable">
            <thead class="thead-dark">
              <tr class="table-bordered">

                <th>Doctor Name</th>
                <th>Date</th>
                <th>Time</th>
                <!-- <th>Doctor</th>
                <th>Action</th> -->



                    </tr>
                  </thead>
                  <tbody id="patientaphistory" class="doctors">

                  </tbody>
                </table>

                          </div>




                </section>
        </div>
    </div>



    <!-- doctor-list page code start -->

    <div class="row doctor-grid doctor-profile" id="doctorpage">


    </div>

    <!-- patient profile starts -->

    <section class="profilepage mt-5 col-sm-8" id="profilepage">

      <div class="row">
    <div class=" col-sm-6 ">

      <div class="card" id="profilecard">

        <div class="card-body text-center">
          <img class="patient-img rounded-circle" id="ppic" src="" alt="Profile_pic">


          <div class="profiledisplay">
             <div class="">
              <span><i class="fa fa-commenting"></i></span> <h4>Name:</h4> <span id="patientprofile1"></span>

             </div>




             <div class="">
              <span><i class="fa fa-commenting"></i></span> <h4>Email: </h4><span id="patientprofile2"></span>

             </div>

             <div class="">
               <h4>Age: <span id="patientprofile3"></span> </h4>

             </div>


             <div class="">
               <h4>Address:</h4> <span id="patientprofile4"></span>

             </div>
             <div class="">
               <h4>Phone: </h4> <span id="patientprofile5"></span>

             </div>


          </div>

          <a href="#" data-toggle="modal" name="<?php echo $_SESSION['username'] ?>" data-target="#patient-editprofile" id="editprofile" class=" editprofile btn btn-info">Update Profile</a>
           <div class="success">

          </div>
        </div>


      </div>
    </div>
   </div>
    </section>


    <!-- patient profile end -->
    <!-- doctor-list page code end -->

    <!-- chat page start -->
    <div class="col-sm-12 chatpage" id="chatpage">
      <div class="userlist1 float-right">
         <h4>Doctor Available to chat :</h4>
          <div class="userlist">

          </div>
      </div>
      <section class="msger">

      <header class="msger-header">
      <div class="msger-header-title">
        <i class="fa fa-medkit mr-1"></i> e-Diabetes Care
      </div>
      <div class="msger-header-options">
        <span><i class="fa fa-commenting"></i></span>
      </div>
      </header>

      <main class="msger-chat" id="showmsg">
      <div class="msg left-msg">
        <!-- <div
         class="msg-img"
         style="background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg)"
        ></div>

        <div class="msg-bubble">
          <div class="msg-info">
            <div class="msg-info-name">BOT</div>
            <div class="msg-info-time">12:45</div>
          </div>

          <div class="msg-text">
            Hi, welcome to SimpleChat! Go ahead and send me a message. 😄
          </div>
        </div>
        <span><img class='chatimg' src='images/linkedinIcon.png'></img></span> -->
      </div>

      <div class="msg right-msg showmsg mt-3">

      </div>


      </main>

      <form class="msger-inputarea">
      <input type="text" id="msg" autocomplete="off" value="" class="msger-input" placeholder="Enter your message...">
      <!-- <div class="emoji">

      <select class="emoji" id="emoji" name="emoji">
       <option value=""></option>
       <option value="😚">😚</option>
       <option value="2">2</option>
       <option value="😚">😚</option>
       <option value="😚">😚</option>
      </select>
      </div> -->
      <button type="submit" id="sendmsg"  class="msger-send-btn">Send</button>
      </form>
      </section>

    </div>

    <!-- chat page end -->

    <!-- doctor appointment start -->
    <section class="appointmentform" id="appointmentpage">

      <div class="row">
                  <div class="col-md-8 ">
                        <form name="appointments" action=""method="POST">
                                <div class="row">

                                    <div class="col-md-8 mt-3">
                                        <div class="form-group">
                                            <label>Doctor</label>
                                            <select name="doctor" id="doc" class="select col-md-6 text-center">
    											<option  value="0">Select</option>
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
                            <option value=".$row['username'].">".$row['name']."</option>

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

                                                <input type="date" name="date" class="form-control datetimepicker">

                                        </div>


                                        <div class="form-group col-md-8">
                                            <label>Time</label>

                                                <input type="time" name="time" class="form-control" id="datetimepicker3">

                                        </div>

                                </div>
                                <div class="row">

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="phone" id="phone" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Comment (Optional)</label>
                                    <textarea name="comment" id="comment" cols="30" rows="4" class="form-control"></textarea>
                                </div>

                                <div class="m-t-20 text-center">
                                    <button class="btn btn-primary submit-btn" name="appointments" id="createappointment">Create Appointment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

    </section>
   <!-- doctor appointment end -->

</section>


   <!---doctor details table start--->
<!-- <div id="doctordetails" class="col-sm-8 mt-5">
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
</div> -->
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

<!-------------------------------------------------------------------->


<!--patient's profile edit form start-->

<div class="modal fade" id="patient-editprofile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Update Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
   <div class="modal-body">
       <form method="POST" action="" enctype="multipart/form-data" id="patient-edit-form">
         <div class="form-group">



           <input type="text" name="editusername" id="dusername" class="form-control" readonly required placeholder="Username">


       <input type="text" name="editname" id="dname" class="form-control"  required placeholder=" Name">
       <input type="text" name="editpassword" id="dpassword" class="form-control" required placeholder="Password">
        <input type="number" name="editage" id="dage" class="form-control" required placeholder="Age">
        <input type="text" name="editaddress" id="daddress" class="form-control" required placeholder="Address">


   <div class="input-group form-group ">
   <span class=" numbercls input-group-addon">+88</span>
   <input type="text" name="editphone" style="padding-left:0" class="form-control" id="dphone" maxlength="11"  placeholder="Contact no." required >
   </div>
   <label>Your Picture</label>
   <input type="file" id="file" class="form-control patientpic"  name="file"/>

   <center><input type="submit" id="btn-patient-edit" name='patients' value="Update" name="patients" class="btn btn-warning" >
   <input type="button" value="Reset"  class="btn btn-danger"></center>
   </div>
   </form>

   </div>


         </div>

       </div>
  </div>




<!--patient's profile edit form end-->

</div>


<script>
$(document).ready(function() {
  loadallData('appointments');

$('#createappointment').click(function(e){
  e.preventDefault();

  var formName = $(this).attr('name');
  //alert(formName);
  var doctorname= $('#doc option').filter(':selected').text();
  var doctorid= $('#doc option').filter(':selected').val();

  var date= $("input[name=date]").val();
  var time=$("input[name=time]").val();
  var phone= $("input[name=phone]").val();
  var comment= $("textarea[name=comment]").val();
  // alert(time);


//  $('#doctor').get(0).selectedIndex = 0;


var valid= validation();
if(valid){


  addappointment();

}
  function validation(){

    if (doctorid=="0") {

      alert('Please fill up all fields');
       // $('.msg1').html('<span class="error">username is required</span>');

          return false;

      }
      if (date=="") {
        alert('date needed');
        //  $('.msg2').html('<span class="error">name is required</span>');
          return false;
        }

        if (time=="") {
          alert('Please select a time slot');
          //  $('.msg3').html('<span class="error">email is required</span>');
            return false;
          }

         if (phone=="") {
           alert('Phone number needed');
              //   $('.msg4').html('<span class="error">password is required</span>');
                 return false;
               }

               if (phone.length!=11) {
                 alert('Phone number must be 11 digit!');
                    //   $('.msg4').html('<span class="error">password is required</span>');
                       return false;
                     }



   else {

     return true;
   }



      }


      function addappointment(){

        $.ajax({
         url: "database/appointment.php",
         type: "POST",
         data: {
           'doctorname': doctorname,
           'doctorid': doctorid,
           'date': date,
           'time': time,
           'phone': phone,
           'table': formName,
           'comment': comment
         },

         success: function(response) {
           alert('appointment added successfully');
           $("#doc")[0].selectedIndex = 0;
            $("input[name=date]").val('');
           $("input[name=time]").val('');
           $("#phone").val('');
            $("#comment").val('');


         },


         error: function (request, status, error) {
         console.log(request.responseText);   //it will show error in webpage if any
         }

         });
      }

});

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
  /// real time validation check end

document.getElementById("dashboard-menu").onclick= function(){
document.getElementById("doctorpage").style.display = "none";
document.getElementById("appointmentpage").style.display = "none";
//document.getElementById("patientdetails").style.display = "none";
document.getElementById("profilepage").style.display = "none";
document.getElementById("chatpage").style.display = "none";
document.getElementById("dashboardpage").style.display = "block";
loadallData('appointments');
manageActive(this);
$('.collapse').collapse('toggle');
};

document.getElementById("doctor").onclick= function(){
loadallData("doctors");
document.getElementById("dashboardpage").style.display = "none";
document.getElementById("appointmentpage").style.display = "none";
//document.getElementById("patientdetails").style.display = "none";
//document.getElementById("patientdetails").style.display = "none";
document.getElementById("profilepage").style.display = "none";
document.getElementById("chatpage").style.display = "none";
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
document.getElementById("profilepage").style.display = "none";
document.getElementById("chatpage").style.display = "none";
document.getElementById("appointmentpage").style.display = "block";
manageActive(this);
$('.collapse').collapse('toggle');
};

document.getElementById("profile").onclick= function(){

document.getElementById("dashboardpage").style.display = "none";

document.getElementById("doctorpage").style.display = "none";
document.getElementById("appointmentpage").style.display = "none";
document.getElementById("chatpage").style.display = "none";
document.getElementById("profilepage").style.display = "block";
manageActive(this);
$('.collapse').collapse('toggle');
};

document.getElementById("chat").onclick= function(){
document.getElementById("dashboardpage").style.display = "none";

document.getElementById("doctorpage").style.display = "none";
document.getElementById("appointmentpage").style.display = "none";
document.getElementById("profilepage").style.display = "none";
document.getElementById("chatpage").style.display = "block";
chatFunction();
// loadallchat('chat');


manageActive(this);
$('.collapse').collapse('toggle');

};

/// show active color only the button clicked
function manageActive(id){

  document.getElementById("dashboard-menu").classList.remove("active");
  document.getElementById("appointment").classList.remove("active");
  document.getElementById("doctor").classList.remove("active");
  document.getElementById("profile").classList.remove("active");
  document.getElementById("chat").classList.remove("active");

  id.classList.toggle("active");

}






////////*************** function for load all doctors starts***********************

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
   else if (tablename=='appointments') {
     $('#patientaphistory').html(response);

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

///// ^^^^^^^^^^^^^^^ for load all doctors into table end ^^^^^^^^^^^^^^^^^


 /// **********************user data edit start***********************

 $(document).on('click', '#editprofile', function(){
   var username = $(this).attr('name');
   var tablename= 'patients';
   // alert(username);

   $.ajax({
     url: "database/patient/editprofile.php",
     type: "POST",
     data:{
       'username': username,
       'table': tablename
     },

     success: function(response) {
       //alert(response);
       var alldata = jQuery.parseJSON(response);

        var email = alldata.name;
        // var username=alldata.username;
        //alert(email);
         document.getElementById("patient-edit-form").elements.namedItem("editusername").value=(alldata.email);
         document.getElementById("patient-edit-form").elements.namedItem("editname").value=(alldata.name);
        // document.getElementById("doc-edit-form").elements.namedItem("editemail").value=email;
        document.getElementById("patient-edit-form").elements.namedItem("editpassword").value=(alldata.password);
         document.getElementById("patient-edit-form").elements.namedItem("editage").value=(alldata.age);
         document.getElementById("patient-edit-form").elements.namedItem("editaddress").value=(alldata.address);
        // document.getElementById("doc-edit-form").elements.namedItem("editdegree").value=(alldata.degree);
         document.getElementById("patient-edit-form").elements.namedItem("editphone").value=(alldata.phone);




     },
     error: function (request, status, error) {
     alert(request.responseText);

   //  return false;
     }

    });

 });

/// ***************************user data edit end***********************




/// user update start**********************

////**************************************showing profile details***************************
$('#profile').click(function(){


    var username = $(this).attr('name');
    var tablename= 'doctors';

    $.ajax({
      url: "database/patient/editprofile.php",
      type: "POST",
      data:{
        'username': username,
        'table': tablename
      },

      success: function(response) {
        var alldata = jQuery.parseJSON(response);

         var email = alldata.email;
         var username=alldata.username;
         const image=alldata.image;

         //alert(image);
         $("#patientprofile1").html(alldata.name);
         $("#patientprofile2").html(alldata.email);
         $("#patientprofile3").html(alldata.age);
         $("#patientprofile4").html(alldata.address);
         $("#patientprofile5").html(alldata.phone);
           $("#ppic").attr("src",image);

      },
      error: function (request, status, error) {
      alert(request.responseText);

      }

     });


});


function profilepicChange(fd){          ///profile pic change

      $.ajax({
          url: 'database/upload.php',
          type: 'post',
          data: fd,
          contentType: false,
          processData: false,
          success: function(response){
              if(response != 0){
                 //alert(response);
                  $("#ppic").attr("src",response);
                  //$(".preview img").show(); // Display image element
              }else{
                  alert('file not uploaded. Invalid file formate!');
              }
          },
      });

}

$('#btn-patient-edit').click(function(e){   //this is from modal button
      e.preventDefault();
      var formName = $(this).attr('name');
      //alert(formName);
      var username= $("input[name=editusername]").val();
      var name= $("input[name=editname]").val();
      // var email= $("input[name=editemail]").val();
      var password= $("input[name=editpassword]").val();
      //var conpassword= $("input[name=dconpassword]").val();
      var age= $("input[name=editage]").val();
      var address= $("input[name=editaddress]").val();
      // var degree= $("input[name=editdegree]").val();
      //var gender= $("input[name=dgender]").val();
      var phone= $("input[name=editphone]").val();
      var fd = new FormData();
        var files = $('#file')[0].files[0];
        fd.append('file',files);
        profilepicChange(fd);

     $.ajax({
      url: "database/updatequery.php",
      type: "POST",
      data: {
        'username': username,

        'name': name,

        'password': password,
        'table': formName,
        'age': age,
        'address': address,

        'phone': phone

      },

      success: function(response) {



        $('#patient-editprofile').modal('toggle');

      $('.success').html("<h3>Record updated successfully</h3>")
      $('.success').delay(3700).fadeOut();
      // loadallData(formName);
      $('#profile').click();
      },
      error: function (request, status, error) {
      console.log(request.responseText);
      }

      });

});

/// user update end

//// *************************chat page fulcions starts  ************************
var chatusername='';
function loadallDoctor(tablename){
  // alert(tablename);
		//var username = $(this).attr('name');
$.ajax({
 url: "database/chatuserlist.php",
 type: "POST",
 data: {

   'table': tablename
 },

 success: function(response) {
     $('.userlist').html(response);


 },
 error: function (request, status, error) {
 alert(request.responseText);
 }
});
}
function chatFunction(){
  loadallDoctor('doctors');

}


$(document).on('click', '.start_chat', function(){
    chatusername=$(this).attr('name');

  loadallchat(chatusername);

});



  $('#sendmsg').on('click',function(e){
e.preventDefault();

  if (chatusername=='') {
    alert('Please select a doctor to start chat!');

  }
  else {
    var msg=$('#msg').val();
    var doctor=chatusername;

    if (msg=='') {
      alert('Please type a message!');
    }
    else {

      $.ajax({
       url: "database/chat.php",
       type: "POST",
       data: {
         'doctor': doctor,
         'msg': msg

       },

       success: function(d) {

         $('#msg').val('');
         loadallchat(doctor);
         var element=document.getElementById("showmsg");
         element.scrollTop=element.scrollHeight;
         //$('#showmsg').scrolllTop($('#showmsg')[0].scrollHeight);
      // $('#showmsg').scrollIntoView(false);


       },
       error: function (request, status, error) {
       console.log(request.responseText);
       }
       });


      //$('.showmsg').html(`<h1>User1: ${msg}</h1>`);

      }
  }




  });



function loadallchat(doctor){
    //var username = $(this).attr('name');

$.ajax({
 url: "database/loadallchat.php",
 type: "POST",
 data: {

   'doctor': doctor
 },

 success: function(response) {


     $('.showmsg').html(response);

 },
 error: function (request, status, error) {
 alert(request.responseText);
 }
});
}



// function chatFunction(){
//
//
//
//
//           var msg=$('#msg').val();
//
//
// }
//// chat page fulcionality end



});



</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
