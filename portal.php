<?php
include_once('database/portallogin.php');
if(isset($_SESSION['username'])){

  if ($_SESSION['role']==2) {
    header("location:doctorportal.php");
  }
  elseif ($_SESSION['role']==3) {
    header("location:patientportal.php");
  }
  else {
    header("location:adminportal.php");
  }


}

include_once('database/registration.php');

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
  <title>Portal</title>

  <!-- Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style media="screen">
#login img{

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
#logo_login {
    height: 94px;
    width: 225px;
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
#myModalLabel {
    margin-left: 174px;
    /* width: 58px; */
    text-align: center;
    color: blue;
}
.regconfirm{
  color: green;

}
.wronglogin{
  color: red;
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

.emsg,.emsg1,.emsg2{
  color: red;




}
.emsg1{
  margin-top: -22px;
}
.hidden {
   display: table-column;
}
.error{
  color: red;
  font-size: 12px;
}
</style>
</head>

  <body>
    <div id="login" class="container">
  <div class="row-fluid">

    <div class="text-center" id="confirmdiv">


    </div>



    <div class="span12">
      <div class="login well well-small">
        <div class="center">
          <a href="home.php"><img id="logo_login"src="images/logo2.jpg" alt="logo"></a>
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
            <input class="btn btn-primary btn-large btn-block" type="submit"name="submit" value="Sign in">
          </div>
          <p class="login-wrapper-footer-text">Don't have an account? <a href="#!" data-toggle="modal" data-target="#register" >Register here</a></p>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="text-center" id="myModalLabel">Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <div class="modal-body">
       <form method="POST" action="" ENCTYPE="multipart/form-data" action="" id="form1">
         <div class="msg2"></div>
       <input type="text" name="pname" id="pname" class="form-control" autocomplete="off"  required placeholder="Enter your name"><br>
       <div style="margin-top: -22px;"class="emsg hidden">
         <span> Please Enter a Valid Name </span>
       </div>
       <div class="msg3"></div>
       <input type="email" name="pemail" id="pemail" class="form-control" autocomplete="off" required placeholder="Enter your email"><br>
       <div class="emsg1 hidden">
         <span> Please Enter a Valid email </span>
       </div>
       <div class="msg4"></div>
       <input type="password" name="ppassword" id="ppassword" class="form-control" autocomplete="off" required placeholder="Enter your password"><br>
       <div class="msg5"></div>
     <input type="text" name="pconpassword" id="pconpassword" class="form-control" autocomplete="off" required placeholder="Confirm password"><br>
     <div class="msg6"></div>
     <input type="number" name="page" id="page" class="form-control" autocomplete="off" required placeholder="Enter your age">
     <div class="emsg2 hidden">
       <span>Age must be between 1 to 100!</span>
     </div>
     <div class="msg9"></div>
     <label class="mt-2">Gender : </label>
	   <input type="radio" value="Male" class="pgender" name="pgender" required> Male
	   <input type="radio" value="Female" name="pgender" class="pgender" required> Female <br>
     <div class="msg7"></div>
     <input type="text" name="paddress" id="paddress" class="form-control" autocomplete="off" required placeholder="Enter your address"><br>
       <div class="msg10"></div>
    <div class="input-group form-group ">
		<span class="input-group-addon">+88</span>
		<input type="number" name="pphone" class="form-control" id="pphone"  autocomplete="off"  placeholder="Enter your contact no." required >
		</div>
    <div class="msg11"></div>
		<label>Your Picture</label>
		<input type="file" class="form-control patientpic" id="file" required name="file"/><br>

		<center><input type="submit" value="Register" name="btn_patient" class="btn btn-danger" id="regbtn">

		<input type="button" value="Reset" id="reset" class="btn btn-warning"></center>
		</form>

		</div>


		</div>


			 </div>
  </div>



<script>
$(document).ready(function(){


  $('#pname').on('keypress keydown keyup',function(){
    $('.msg2').stop().fadeOut();
    });

    $('#ppassword').on('keypress keydown keyup',function(){
    $('.msg4').fadeOut();

       });
   $('#pconpassword').on('keypress keydown keyup',function(){
     if($('#dpassword').val()==$('#dconpassword').val())
     $('.msg5').fadeOut();
     });

     $('#paddress').on('keypress keydown keyup',function(){
       $('.msg7').fadeOut();

          });

          $('.pgender').on('click keydown keyup',function(){
            var $gender = $("input[name='pgender']:checked").val();
            if($gender=='Male'|| $gender=='Female')
            $('.msg9').fadeOut();

               });

               $('#pphone').on('keypress keydown keyup',function(){
                 $('.msg10').fadeOut();

                    });

               var $checkname=/^([a-zA-Z]{3,16})$/;
               var $checkemail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


               $('#pname').on('keypress keydown keyup',function(){
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

  var $checkemail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


  $('#pemail').on('keypress keydown keyup',function(){
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
                   $('#page').on('keypress keydown keyup',function(){
                     $('.msg6').fadeOut();
                    // $(".msg6").fadeToggle();
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

  $('#reset').click(function(){
    $("input[name=pname]").val('');
     $("input[name=pemail]").val('');
    $("input[name=ppassword]").val('');
    $("input[name=pconpassword]").val('');
    $("input[name=page]").val('');
   $("input[name=paddress]").val('');
    $('input[name="pgender"]').prop('checked', false);
    $("input[name=pphone]").val('');


    //document.getElementById("form1").reset();

  });

  $("#regbtn").click(function(){

    //e.preventDefault();
    //var formName = $(this).attr('name');
    //alert(formName);
    //var username= $("input[name=pusername]").val();
    var name= $("input[name=pname]").val();
    var email= $("input[name=pemail]").val();
    var password= $("input[name=ppassword]").val();
    var conpassword= $("input[name=pconpassword]").val();
    var age= $("input[name=page]").val();
    var address= $("input[name=paddress]").val();

    var gender = $("input[name='pgender']:checked").val();

    var phone= $("input[name=pphone]").val();
    //var file = $("input[type="file"]").prop("files");
    var file = $('#file').val();


    var valid= validation();
       if(valid){
         alert('ok');
         //$("#form1").submit();

         //usercheckfunc(username,formName);

         $('#activecodediv').show();
        $('#confirmdiv').html("<h3 style='color:green;'>You have registered successfully. <br /> Please check your mail to active your account</h3>");
         $('#register').modal('toggle');
         //$('#form1').submit();

       }else {
        // alert('Please fill all the requred fields!');
       }


    /// validation function start....
       function validation(){


           if (name=="") {
             alert('Please fill up all fields');
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
                // $('.msg5').fadeIn();
                  alert('possword does not match');
                      $('.msg5').html('<span class="error">password does not match</span>');
                      return false;
                  }


                  if (age=="") {
                    //alert('username needed');
                      $('.msg6').html('<span class="error">age is required</span>');
                      return false;
                    }
                    if (gender!='Male' && gender!='Female') {

                        $('.msg9').html('<span class="error">Select your gender</span>');
                        return false;
                      }
                    if (address=="") {
                      //alert('username needed');
                        $('.msg7').html('<span class="error">address is required</span>');
                        return false;
                      }


                          if (phone=="") {
                            //alert('username needed');
                              $('.msg10').html('<span class="error">Phone number is required</span>');
                              return false;
                            }

                            if (phone.length!=11) {
                              alert('Your phone number must be 11 digit!');
                              //  $('.msg10').html('<span class="error">Phone number is required</span>');
                                return false;
                              }

                              if (file=="") {
                                //alert('username needed');
                                  $('.msg11').html('<span class="error">Choose a profile Picture</span>');
                                  return false;
                                }



        else {
          //count++;
          return true;
        }



           }

       // validation function end




    // alert('worked');
    // $("<div class='form regconfirm1 mt-3 text-center'>
    // <h3 class='regconfirm'>You are registered successfully</h3>
    // <p>Please active your account now!</p></div>").appendTo('body').delay(5000).fadeOut();
    //$('body').append('<div style="position:absolute;width:100%;height:100%;opacity:0.3;z-index:100;background:#000;">testing</div>');



  });




});





</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>
