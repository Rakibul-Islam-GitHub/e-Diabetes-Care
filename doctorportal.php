<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <link rel="stylesheet" href="doctorportal.css">
    <title>Doctor Portal</title>
    <script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>
  </head>
  <body>

      <nav class="top">
        <ul>

          <li class="logo"><a herf="#">e-Diabetes Care</a></li>
          <li class="top-segment"><a herf="#">logout</a></li>
          <li class="top-segment"><a herf="#">Doctor</a></li>

        </ul>

      </nav>

         <!-- START OFF dashborad -->

      <section class="section">


      <div class="col-sm-4 ">
           <div class="navbar">
              <a herf="#"id="dashboard">dashboard</a>
              <a herf="#"id="profile">profile</a>
              <a herf="#"id="patient">patients</a>
              <a herf="#" id="appointment">appointment</a>
              <a herf="#"id="schedule">schedule</a>
              <a herf="#"id="chat">chat</a>
              <a herf="#"id="blog">blog</a>

           </div>
       <!--- end of menu div -->
      </div>

        <div class="dashboard-div"id="dashboard-div">


        <div class="total-patient">

          <div class="patient-img">


            <img src="images/patient.png" id="pat-img"alt="">
            </div>

            <div class="total-pat-value">
                  <p class="total-pat-value">2</p><br>
                  <input type="button" name="" class="pat-btn" value="patients">
            </div>
        </div>

        <!-- all appointment schedule start -->


            <div class="doctortable">

              <table class="table table-hover table-bordered "id="table">
    <thead>
      <tr class="table-bordered">

        <th>Patient Name</th>
        <th>Date</th>
        <th>Time</th>

      </tr>
    </thead>
    <tbody>
        <tr>
          <td>azrin</td>
          <td>25</td>
          <td>8</td>
    </tr>
    <tr>
      <td>azrin</td>
      <td>25</td>
      <td>8</td>
</tr>
<tr>
  <td>azrin</td>
  <td>25</td>
  <td>8</td>
</tr>
<tr>
  <td>azrin</td>
  <td>25</td>
  <td>8</td>
</tr>
  </tbody>
</table>
          </div>




      </div>

<!-- all appointment schedule end -->


      </section>

          <!-- END OFF dashborad -->


          <!-- START OF PROFILE DIV-->

              <div id="profile-div">

        <div class="profile-details">



<br>

<b><i><span class="glyphicon glyphicon-user"></span> Your Current Profile</i></b>
<br></br>


<label class="level-design">User Name: <?php echo $newname;?><br><br>
<label class="level-design">Name : </label> <?php echo $age;?><br><br>
<label class="level-design">Age : </label> <?php echo $sex;?><br><br>
<label class="level-design">Email : </label> <?php echo $email;?><br><br>
<label class="level-design">Mobile Number : </label> <?php echo $add;?><br><br>
<label class="level-design">Gender : </label> <?php echo $adhar;?><br><br>
<label class="level-design">Address: </label> <?php echo $ph;?><br><br>
<label class="level-design">degree: </label> <?php echo $ph;?><br><br>
<label class="level-design">Password: </label> <?php echo $ph;?><br><br>

<input type="button" name="update-btn" data-toggle="modal" data-target="modal-toggle"class="modalupdate btn btn-primary" value="update">


  </div>
              </div>


        <!-- doctor update form -->




   <div class="modal">
     <div class="modal-overlay modal-toggle"></div>
     <div class="modal-wrapper modal-transition">
       <div class="modal-header">
         <button class="modal-close modal-toggle modalupdate">X</button>
          <h2 class="modal-heading">Update your profile</h2>
       </div>

       <div class="modal-body">
   <div class="modal-content">


     <form method="POST" action="" ENCTYPE="multipart/form-data" action="" id="form1">
      <input type="text" name="dusername" class="form-control" required placeholder="Username"><br>
    <input type="text" name="dname" class="form-control"  required placeholder=" Name"><br>
    <input type="text" name="demail" class="form-control" required placeholder="Email"><br>

    <input type="password" name="dpassword" class="form-control" required placeholder="Password"><br>
 <input type="password" name="dconpassword" class="form-control" required placeholder="Confirm password"><br>
 <input type="text" name="dage" class="form-control" required placeholder="Age"><br>
    <input type="text" name="daddress" class="form-control" required placeholder="Address"><br>

<input type="text" name="degree" required placeholder="Degree" >
<br>
 <label>Gender : </label>
 <input type="radio" value="Male" name="dgender" required> Male
 <input type="radio" value="Female" name="dgender" required> Female <br></br>

<input type="text" name="dphone" class="form-control" id="user" maxlength="10"  placeholder="Contact no." required >

<label>Your Picture</label>

</form>


           <button class="modal-toggle">Update</button>
         </div>
       </div>
     </div>
   </div>
 </body>
 </html>





        <!-- end of doctor update form -->

            <div id="patient-div">
              <p>patient</p>
            </div>

            <!-- end of patient div -->

            <!--start of appointment div-->
          <div id="appointment-div">

            <div class="doctortable appointment-div-all">
              <div class="appointment-btn">
                <input type="button"class="btn" name="" value="Set">
                <input type="button" class="btn" name="" value="update">
              </div>
                 <div class="appointment-table">
                 <h4 class="h">Appointment List</h4>
                   <table class="table table-hover table-bordered "id="table">
         <thead>
           <tr class="table-bordered">
             <th class="color-table">Patient Name</th>
             <th class="color-table">Date</th>
             <th class="color-table">Time</th>

           </tr>
         </thead>
         <tbody>
             <tr>
               <td>azrin</td>
               <td>25</td>
               <td>8</td>
         </tr>
         <tr>
           <td>azrin</td>
           <td>25</td>
           <td>8</td>
     </tr>
     <tr>
       <td>azrin</td>
       <td>25</td>
       <td>8</td>
     </tr>
     <tr>
       <td>azrin</td>
       <td>25</td>
       <td>8</td>
     </tr>
       </tbody>
     </table>

                 </div>
            </div>

          </div>

          <!-- end of appointment div -->



      <script type="text/javascript">



      $('.modalupdate').on('click', function(e) {
        e.preventDefault();
        $('.modal').toggleClass('is-visible');
      });



              document.getElementById("dashboard").onclick= function(){
                document.getElementById("dashboard-div").style.display = "block";
                document.getElementById("profile-div").style.display = "none";
                document.getElementById("patient-div").style.display="none";
                 document.getElementById("appointment-div").style.display="none";

              }


         document.getElementById("profile").onclick= function(){
           document.getElementById("profile-div").style.display="block";
           document.getElementById("dashboard-div").style.display="none";
               document.getElementById("patient-div").style.display="none";
                    document.getElementById("appointment-div").style.display="none";
         }

         document.getElementById("patient").onclick=function(){
            document.getElementById("patient-div").style.display="block";
           document.getElementById("profile-div").style.display="none";
           document.getElementById("dashboard-div").style.display="none";
           document.getElementById("appointment-div").style.display="none";
         }

         document.getElementById("appointment").onclick=function(){
             document.getElementById("appointment-div").style.display="block";
            document.getElementById("patient-div").style.display="none";
           document.getElementById("profile-div").style.display="none";
           document.getElementById("dashboard-div").style.display="none";
         }

      </script>
  </body>
</html>
