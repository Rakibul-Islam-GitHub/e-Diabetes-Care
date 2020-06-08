<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="landingstyle.css">
    <title>Blog</title>
    <style media="screen">

    blog-image, .blog-image  a, .blog-image img {
       display: block;
       position: relative;
       width: 100%;
       height: auto;
     }
    .image{



     }
     .post-left {
    margin-left: -40px;
}
#social-media-icon {
    border-bottom: 1px solid royalblue;
    margin-top: 0;
    /* position: relative; */
    height: 37px;
    background-color: white;
}
div#social-media-icon {
    display: flex;
    justify-content: center;
}
#social-media-icon a {
    margin: 6px;
}
.blog{
      min-height: 270px;
}


    </style>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  </head>
  <body>

    <div class="row">


        <div class=" container-fluid pr-0 mb-1">
             <div id="social-media-icon">
               <a href="#"><i class="fa fa-twitter "></i></a>
               <a href="#"><i class="fa fa-facebook "></i></a>
               <a href="#"><i class="fa fa-linkedin "></i></a>
               <a href="#"><i class="fa fa-google-plus "></i></a>
             </div>
        </div>
        </div>

      <div class="logo ml-5">
        <img id="image"src="images/logo2.jpg" alt="" >
      </div>
          <div class="contact">

            <ul class="contact-info">
                      <li class="item">
                            <div class="icon-box">
                              <i class="fa fa-envelope fa-lg" aria-hidden="true"></i>
                            </div>

                            <strong>Email</strong>
                            <br>

                                  <span>info@e-diabetes-care.com</span>

                      </li>
                      <li class="item">
                            <div class="icon-box">
                              <i class="fa fa-phone fa-lg" aria-hidden="true"></i>
                            </div>
                            <strong>Call Now</strong>
                            <br>
                            <span>+880 12344567</span>
                      </li>
                </ul>

                <div class="appointment-btn">
                    <button type="button" class="btn btn-primary">Appointment</button>
                </div>

          </div>

<section class="menu-bar mt-3">




  <nav id="menu"class=" navbar navbar-expand-lg">

     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"><img src="images/phnIconSmall.png" alt=""></span>
   </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <div class="container">
      <ul class="navbar-nav margin">
        <li class="nav-item font-size margin m-0">
          <a class="navbar-brand" href="home.php"><i class="fa fa-home fa-lg" aria-hidden="true"></i> </a>
        </li>

        <li class="nav-item font-size margin">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <!-- <li class="nav-item font-size margin ">
          <a class="nav-link" href="#">Doctor</a>
        </li> -->
        <li class="nav-item font-size margin">
          <a class="nav-link" href="blog.php">Blog</a>
        </li>
        <li class="nav-item font-size margin">
          <a class="nav-link " href="healthstatus.php">Health Status</a>
        </li>
        <li class="nav-item font-size margin">
          <a class="nav-link " href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item font-size margin">
          <a class="nav-link " href="portal.php">portal</a>
        </li>
      </ul>
       </div>
    </div>
  </nav>


    </section>

<div class="container">
    <section class="menu-card" id="allpost">

      <div class="content margin-row">

                  <div class="row">

<?php


    include_once('database/db.php');
    $connection = new databasefull();
    $conobj=$connection->OpenCon();
    $result=$conobj->query("SELECT * FROM blog");
    if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result))

     {
       $description2=$row['description'] ;
       $des=substr($description2,0,120);



?>




                      <div class="col-lg-4 col-sm-6 col-md-6">
                          <div class="blog grid-blog">
                              <div class="blog-image">
                                  <a href=""><img style="width:70%;height:50%; margin-left: 5px;" class="img-fluid image text-center" src="images/blog/<?php echo $row['image'] ;?>"   alt=""></a>
                              </div>
                              <div class="blog-content">
                                  <h3 class="blog-title"><a href="blog-details.html"><span class="font-size font-color"><?php echo $row['title'] ;?></span></a></h3>
                                  <p> <?php echo $des ;?>

                                    <a href="#" class="readmore" name='<?php echo $row['id'] ;?>'  class="read-more"> .... read more </a>
                                    <div class="blog-info clearfix">
                                    </p>

                                      <div class="post-left">
                                          <ul>
                                              <li><i class="fa fa-calendar"></i> <span>Publish Date: <?php echo $row['date'] ;?></span></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>


                      <?php
                         }

                         }
                         else {
                          echo "0 results";
                         }

                         $conobj->close();


                      ?>


                  </div>
              </div>

    </section>


    </div>

    <div class="container">
      <div class="fullpost col-sm-8" id="fullpost">


      </div>

    </div>






    <footer class="footer-main">

      <div class="footer-top">
        <div class="container">

          <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="about-widget">
              <div class="footer-logo">
                <img class="image"src="images/logo2.jpg" alt="">
                <!-- <p class="footer-text">lorem ipsum...</p> -->


                <li class=" footer-item mt-2">
                  <i class="fa fa-map-marker footer-text" aria-hidden="true">  24/7, Kuril Dhaka</i>



                </li>
                <li class="">
                  <a href="#">
                  <i class="fa fa-envelope-o footer-text" aria-hidden="true">   info@e-diabetes-care.com</i>


                  </a>
                </li>
                <li class="">
                  <i class="fa fa-phone footer-text" aria-hidden="true">   +880 234567890</i>

                </li>

              <div class="s-icons">

                              <a href="#"  ><i class="fa fa-facebook mr-2"></i></a>
                              <a href="#"><i class="fa fa-twitter mr-2"></i></a>

                              <a href="#" ><i class="fa fa-linkedin mr-2"></i></a>



                            <a href="#" ><i class="fa fa-vimeo"></i></a>


              </div>

              </div>

            </div>

            </div>

               <div class="col-md-4 col-sm-6 col-xs-12">

              <h2 class="text">Service</h2>

            <ul class="menu-link list-inline">
                        <li>
    <a href="#">
                            <i class="fa fa-angle-right footer-text" aria-hidden="true"></i><span class="footer-text"> Unlimited consultations </span></a>
                            <br><br>
                        </li>
                        <li>

                          <a href="#">
                            <i class="fa fa-angle-right footer-text" aria-hidden="true"></i><span class="footer-text"> Check health status</span></a>
                            <br><br>
                        </li>

                        <li>
                          <a href="#">
                            <i class="fa fa-angle-right footer-text" aria-hidden="true"></i><span class="footer-text"> Online consultation</span></a>
                            <br><br>
                        </li>
                        <li>

                          <a href="#">
                            <i class="fa fa-angle-right footer-text" aria-hidden="true"></i><span class="footer-text"> Online consultation</span></a>
                              <br><br>
                        </li>

                      </ul>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">


                        <div class="social-links">
                          <h2 class="text">Recent Posts</h2>
                          <div class="row blog">

                            <?php


                                include_once('database/db.php');
                                $connection = new databasefull();
                                $conobj=$connection->OpenCon();
                                $result=$conobj->query("SELECT * FROM blog ORDER BY id DESC limit 2");
                                if ($result->num_rows > 0) {
                                while($row = mysqli_fetch_assoc($result))

                                 {
                                   $description2=$row['description'] ;
                                   $des=substr($description2,0,50);
                                   $title=$row['title'] ;
                                   $title2=substr($title,0,25);





                            ?>
                          <ul class="post-image">
                  <li class="post">
                    <div class="media">
                      <div class="media-lrft">


                      <a href="#">
                      <img class="media-object footer-img" src="images/blog/<?php echo $row['image'] ;?>" alt="post-thumb">
                      </a>
                        </div>
                      <div class="media-body">
                      <h4 class="media-heading"><a href="#" class="readmore text-white" name='<?php echo $row['id'] ;?>' class="text"><?php echo $title2 ;?>...</a></h4>
                      <p class="footer-text "><?php echo $des ;?>..</p>
                    </div>
                    </div>
                  </li>


                      <?php
                         }

                         }
                         else {
                          echo "0 results";
                         }

                         $conobj->close();


                      ?>

                </ul>



                        </div>




                    </div>


          </div>

        </div>

      </div>
      </div>

      <div class="footer-bottom">
        <div class="copyright">
          <p class="footer-text center">© Copyright 2020. All Rights Reserved by <a href="#">
            e-Diabetes Care
          </a> </p>

        </div>

      </div>


    </footer>

    <script>

    $(document).ready(function() {
    $('.readmore').click(function(){

      var postid = $(this).attr('name');
      $.ajax({
          url: 'database/blogdetail.php',
          type: 'post',
          data:{
            'id': postid
          },

          success: function(response){
            //alert(response);
            $('#fullpost').html(response);
            $('#allpost').hide();
            $('#fullpost').show();

          },
          error: function (request, status, error) {
          console.log(request.responseText);   //it will show error in webpage if any
          }
      });



    });

    });

    </script>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



  </body>
</html>
