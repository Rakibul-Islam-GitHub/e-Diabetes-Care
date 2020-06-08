<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Account verify</title>
  </head>
  <style media="screen">
    .msg{
      color: green;
      text-align: center;
      margin-top: 20%;
    }
  </style>
  <body>
    <?php

    include_once('database/db.php');

    $mydb = new databasefull();


    if (empty($_GET)) {
          echo "You are not allowed to access this page!";

    }

    else {
      $code= $_GET['code'];
      $email= $_GET['email'];

        $conobj=$mydb->OpenCon();
        $result=$conobj->query("SELECT activationcode FROM patients WHERE email='$email'");

        while($row = mysqli_fetch_assoc($result))

         {
           if ($code==$row['activationcode']) {

             $login=$conobj->query("UPDATE `logins` set `isactive` = 1 WHERE `username` = '$email' ");

             echo "<div class='msg'>
             <h1 >Your account has been activated! <br /> You will be redirected to login page....</h1>
             </div>";



             header('Refresh: 5; URL=portal.php');

           }
           else {
             echo "<div class='msg2'>
             <h1 >Your account isn't activated! <br /> Please try again.</h1>
             </div>";
           }

         }






      $mydb->CloseCon($conobj);


    }



     ?>



  </body>
</html>
