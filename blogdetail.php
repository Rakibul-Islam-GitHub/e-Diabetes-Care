<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="landingstyle.css">

    <title>blog</title>
    <style media="screen">
    .blog {
  position: relative;
  margin: 0 0 50px;


  border-radius: 4px;
  padding: 20px;
}
body {
    font-family: 'Rubik', sans-serif;
    font-size: 0.875rem;
    color: #666;
}

.blog-view .blog-info {
    border: 0 none;
    margin-bottom: 20px;
    padding: 0;
}
.blog-info {
    border: 1px solid #eaeaea;
    color: #909090;
    font-size: 12px;
    margin-bottom: 0;
    padding: 12px 20px;
}
.blog-image {
    margin-bottom: 30px;
}
.blog-image, .blog-image > a, .blog-image img {
    display: block;
    position: relative;
    width: 300px;
    height: 300px;
}
.blog-image {
    overflow: hidden;
}
.blog-content {
    position: relative;
}

.border{
  border: 1px rgb(231,231,231);
}
.social-share{
  display: inline-block;
}
.footer-img{
  padding: 4px;
}
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  </head>
  <body>

    <div class="row">


        <div class=" col-md-4 col-sm-6">
             <div id="social-media-icon">
            <a href="#"><i class="fa fa-twitter font-icon"></i></a>
               <a href="#"><i class="fa fa-facebook font-icon"></i></a>
               <a href="#"><i class="fa fa-linkedin font-icon"></i></a>
              <a href="#"><i class="fa fa-google-plus font-icon"></i></a>
             </div>
        </div>
        </div>

      <div class="logo">
        <img id="image"src="images/ediabetes.png" alt="" >
      </div>
          <div class="contact">

            <ul class="contact-info">
                      <li class="item">
                            <div class="icon-box">
                              <img src="" alt="">
                            </div>

                            <strong>Email</strong>
                            <br>
                            <a href="#">
                                  <span>info@e-diabetes-care.com</span>
                            </a>
                      </li>
                      <li class="item">
                            <div class="icon-box">

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

<section class="menu-bar">


  <nav id="menu"class=" navbar navbar-expand-lg">
     <a class="navbar-brand" href="#"><img src="images/home.png "> </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"><img src="images/phnIconSmall.png" alt=""></span>
   </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav margin">

        <li class="nav-item font-size margin">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item font-size margin ">
          <a class="nav-link" href="#">Doctor</a>
        </li>
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
  </nav>

</section>

  <div class="row blog">

    <?php

$limit=5;
        include_once('database/db.php');
        $connection = new databasefull();
        $conobj=$connection->OpenCon();
        $result=$conobj->query("SELECT * FROM blog limit 1");
        if ($result->num_rows > 0) {
        while($row = mysqli_fetch_assoc($result))

         {
           $description2=$row['description'] ;
           $des=substr($description2,0,90);





    ?>
                  <div class="col-md-8">
                      <div class="blog-view">
                        <article class="blog blog-single-post">
                              <h3 class="blog-title"><?php echo $row['title'] ;?></h3>
                          <div class="blog-info clearfix">
                              <div class="post-left">

                                          <i class="fa fa-calendar"></i> <span> <?php echo $row['date'] ;?> </span>

                                  <
                                  </div>
                              </div>
                              <div class="blog-image">
                                  <a href="#."><img alt="" src="images/blog/<?php echo $row['image'] ;?>" class="img-fluid"></a>
                              </div>
                              <div class="blog-content">
                                  <p> <?php echo $row['description'] ;?></p>




                          </article>
                          <div class="widget blog-share clearfix">
                              <h3>Share the post</h3>
                              <div class="row">


                                  <div class=" col-md-4 col-sm-6">
                                       <div id="social-media-icon">
                                      <a href="#"><i class="fa fa-twitter font-icon"></i></a>
                                         <a href="#"><i class="fa fa-facebook font-icon"></i></a>
                                         <a href="#"><i class="fa fa-linkedin font-icon"></i></a>
                                        <a href="#"><i class="fa fa-google-plus font-icon"></i></a>
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

                  <aside class="col-md-4 border">

                      <div class="widget post-widget">
                          <h5>Latest Posts</h5>

                          <?php

                        $limit=5;
                              include_once('database/db.php');
                              $connection = new databasefull();
                              $conobj=$connection->OpenCon();
                              $result=$conobj->query("SELECT * FROM blog ORDER BY id DESC limit 5");
                              if ($result->num_rows > 0) {
                              while($row = mysqli_fetch_assoc($result))

                               {
                                 $description2=$row['description'] ;
                                 $des=substr($description2,0,90);





                          ?>

                          <ul class="latest-posts">

                              <li>
                                  <div class="post-thumb">
                                      <a href="blog-details.html">
                                          <img class="img-fluid" src="images/blog/<?php echo $row['image'] ;?>" alt="">
                                      </a>
                                  </div>
                                  <div class="post-info">

                                      <h5>
                    <a href="blog-details.html"><?php echo $row['title'] ;?></a>
                  </h4>
                                      <p><i aria-hidden="true" class="fa fa-calendar"></i><?php echo $row['date'] ;?> </p>
                                  </div>
                              </li>


                          </ul>
                          <?php
                             }

                             }
                             else {
                              echo "0 results";
                             }

                             $conobj->close();


                          ?>
                      </div>


                  </aside>




  </div>
</div>



    <footer class="footer-main">

      <div class="footer-top">
        <div class="container">

          <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="about-widget">
          <div class="footer-logo">
          <img class="image"src="images/ediabetes.png" alt="">
          <p class="footer-text">lorem ipsum...</p>

                  <ul class="location-link">
                  <li class="item footer-item">
                    <i class="fa fa-map-marker footer-text" aria-hidden="true">  24/7,kuril</i>
                    <br><br>


                  </li>
                  <li class="item">
                    <a href="#">
                    <i class="fa fa-envelope-o footer-text" aria-hidden="true">   info@e-diabetes-care.com</i>
    <br><br>

                    </a>
                  </li>
                  <li class="item">
                    <i class="fa fa-phone footer-text" aria-hidden="true">   +880 234567890</i>

                </li>
                </ul>
                <ul class="list-inline social-icons">
                              <li><a href="#" class="social-icons" class="social-icons"><i class="fa fa-facebook"></i></a>
                              <a href="#" class="social-icons"><i class="fa fa-twitter"></i></a>

                              <a href="#" class="social-icons"><i class="fa fa-linkedin"></i></a>



                            <a href="#" class="social-icons"><i class="fa fa-vimeo"></i></a></li>
                            </ul>

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
                            <i class="fa fa-angle-right footer-text" aria-hidden="true"></i><span class="footer-text"></span></a>
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

      <div class="footer-bottom">
        <div class="copyright">
          <p class="footer-text center">© Copyright 2020. All Rights Reserved by <a href="#">
            e-Diabetes Care
          </a> </p>

        </div>

      </div>


    </footer>




                            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>
