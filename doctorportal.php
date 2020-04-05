<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="doctorportal.css">
    <title>Doctor Portal</title>
  </head>
  <body>

      <nav class="top">
        <ul>

          <li class="logo"><a herf="#">e-Diabetes Care</a></li>
          <li class="top-segment"><a herf="#">logout</a></li>
          <li class="top-segment"><a herf="#">Doctor</a></li>

        </ul>

      </nav>
      <section class="section">


      <div class="col-sm-4 ">
           <div class="navbar">
              <a herf="#"id="dashborad">dashborad</a>
              <a herf="#"id="profile">profile</a>
              <a herf="#"id="patients">patients</a>
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


      </section>
      <script type="text/javascript">
        document.getElementById("appointment").onclick= function(){
          document.getElementById("dashboard-div").style.display = "none";
          document.getElementById("doctordetails").style.display = "block";

        }

      </script>
  </body>
</html>
