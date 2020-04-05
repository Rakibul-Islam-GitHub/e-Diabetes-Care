
<html lang="en" dir="ltr">
<noscript>
<META HTTP-EQUIV="Refresh" CONTENT="0;URL=nojs.html">
</noscript>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Contact</title>

  <!-- Bootstrap & jquery-->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <script src="https://kit.fontawesome.com/1e2b4d0b63.js" crossorigin="anonymous"></script>

<style media="screen">
.status{
  display: none;

}
</style>
</head>

  <body>
    <!--Section: Contact v.2-->
<section class="mb-4 container ">


    <!--Section heading-->
    <h2 id="test" class="h1-responsive font-weight-bold text-center my-4">Contact Us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

      <!--Grid column-->
      <div class="col-md-6 text-center mt-5 ">
          <ul class="list-unstyled mb-0">
              <li><i class="fas fa-map-marker-alt fa-2x"></i>
                  <p>Kuratoli, Kuril Dhaka ,Bangladesh</p>
              </li>

              <li><i class="fas fa-phone mt-4 fa-2x"></i>
                  <p>+8801943798593</p>
              </li>

              <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                  <p>e.DiabetesCare@gmail.com</p>
              </li>
          </ul>
      </div>
      <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-md-0 mb-5">
            <form  class="form" id="contact-form" name="contact-form" action="#" method="post">

                <!--Grid row-->
                <div class="row">

                  <div class="d-block col-md-12 status">
                    <h3 class="status" id="status"></h3>

                  </div>

                    <!--Grid column-->
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                          <label for="name" class="">Your name</label>
                            <input type="text" id="name" name="name" class="form-control">

                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                          <label for="email" class="">Your email</label>
                            <input type="text" id="email" name="email" class="form-control">

                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-2">
                          <label for="subject" class="">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control">

                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="mb-3">
                          <label for="message">Your message</label>
                            <textarea type="text" id="message" name="message" rows="4" class="form-control md-textarea"></textarea>

                        </div>

                    </div>
                </div>
                <div class="text-center text-white text-md-left">
                    <input  id="button" class="btn btn-primary" type="submit" name="" value="Send">
                </div>


                <!--Grid row-->

            </form>




        </div>
        <!--Grid column-->



    </div>

</section>






<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
 $(document).ready(function() {
   $(".form").on("submit", function(e) {
    // document.getElementById('contact-form').submit();
     e.preventDefault();
     $("h3").show();

     //$("h3").show().delay(5000).fadeOut();


     //document.getElementById('status').innerHTML = "Sending...";
     $("#status").show().delay(5000).fadeOut();
     formData = {
     'name'     : $('input[name=name]').val(),
     'email'    : $('input[name=email]').val(),
     'subject'  : $('input[name=subject]').val(),
     'message'  : $('textarea[name=message]').val()
     };



     $.ajax({
     url : "mail.php",
     type: "POST",
     data : formData,
     success: function(data, textStatus, jqXHR)
     {
       if (data.code==0){
          $("h3").css("color", "red");
          $('#status').text("Please fill all the fields correctly!");
          }
          else {
            $("h3").css("color", "green");
             $('#status').text("message sent successfully!");
          }



     //('#status').text(data.message);

     if (data.code) //If mail was sent successfully, reset the form.
     $('#contact-form').closest('form').find("input[type=text], textarea").val("");
     },
     error: function (jqXHR, textStatus, errorThrown)
     {
     $('#status').text(jqXHR);
     }
     });
   });
});
</script>
  </body>
</html>
