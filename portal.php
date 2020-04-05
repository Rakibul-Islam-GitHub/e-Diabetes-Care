<?php
include('database/portallogin.php');
if(isset($_SESSION['username'])){
  
header("location:doctorportal.php");
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<noscript>
<META HTTP-EQUIV="Refresh" CONTENT="0;URL=nojs.html">
</noscript>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Portal</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style media="screen">
#login img{
margin: 10px 0;
}
#login .center {
    text-align: center;
    margin-bottom: 14px;
}

#login .login {
max-width: 300px;
margin: 35px auto;
}

#login .login-form{
padding:0px 35px;
}
#logo_login{
  height: 77px;
}
.loginform{
  margin-bottom: 3px;
}
.inputlogin {
    margin-bottom: 10px;
}
.input-group-addon {
    margin-top: 7px;
    margin-right: 3px;
}
.patientpic{
  padding: 3px 12px 6px 6px;
}

.well {

    padding: 17px;
    margin-bottom: 20px;
    background-color: #f5f5f5;
    border: 1px solid #e3e3e3;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}
</style>
</head>

  <body>
    <div id="login" class="container">
  <div class="row-fluid">
    <div class="span12">
      <div class="login well well-small">
        <div class="center">
          <img id="logo_login"src="images/ediabetes.png" alt="logo">
        </div>
        <form action="" style="" class="form-signin" id="UserLoginForm" method="post" accept-charset="utf-8">
          <div class="control-group">
            <div class="inputlogin">
              <span class="add-on"><i class="icon-user"></i></span>
              <input class="form-control loginform" name="username" required="required" placeholder="Username" maxlength="255" type="text" id="patientemail">
            </div>
          </div>
          <div class="control-group">
            <div class="inputlogin">
              <span class="add-on"><i class="icon-lock"></i></span>
              <input class="form-control loginform" name="password" required="required" placeholder="Password" type="password" id="patirntpass">
            </div>
          </div>
          <div class="control-group">
            <label id="remember-me">
              <input type="checkbox" name="data[User][remember_me]" value="1" id="UserRememberMe"> Remember Me?</label>
          </div>
          <div class="control-group">
            <input class="btn btn-primary btn-large btn-block" type="submit"name="submit" value="Sign in">
          </div>
          <p class="login-wrapper-footer-text">Don't have an account? <a href="#!" data-toggle="modal" data-target="#register" >Register here</a></p>
        </form>
      </div><!--/.login-->
    </div><!--/.span12-->
  </div><!--/.row-fluid-->
</div><!--/.container-->


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

       <input type="text" name="pname" class="form-control" onkeyup="letters(this)" required placeholder="Enter your name"><br>
       <input type="email" name="pemail" class="form-control" required placeholder="Enter your email"><br>
       <input type="number" name="page" class="form-control" required placeholder="Enter your age"><br>
       <input type="password" name="ppassword" class="form-control" required placeholder="Enter your password"><br>
	   <input type="text" name="pconpassword" class="form-control" required placeholder="Confirm password"><br>
       <input type="text" name="paddress" class="form-control" required placeholder="Enter your address"><br>

	   <label>Gender : </label>
	   <input type="radio" value="Male" name="pgender" required> Male
	   <input type="radio" value="Female" name="pgender" required> Female <br></br>
		<div class="input-group form-group ">
		<span class="input-group-addon">+88</span>
		<input type="number" name="pphone" class="form-control" id="user" maxlength="10"  placeholder="Enter your contact no." required >
		</div>
		<label>Your Picture</label>
		<input type="file" class="form-control patientpic" required name="pimage"/><br>

		<center><input type="submit" value="Register" name="btn_pat" class="btn btn-danger">
		<input type="button" value="Reset" onclick="rset()" class="btn btn-warning"></center>
		</form>

		</div>


		</div>


			 </div>
  </div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
