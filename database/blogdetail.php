<?php



    include_once('db.php');
    $id=$_POST['id'];
    $connection = new databasefull();
    $conobj=$connection->OpenCon();
    $result=$conobj->query("SELECT * FROM blog WHERE id='$id'");
    if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result))

     {

       echo "
       <div class='blog-view'>
         <article class='blog blog-single-post'>
               <h3 class='blog-title mb-2'>".$row['title']."</h3>

               <div class='blog-image'>
                   <a href='#'><img alt='' src='images/blog/".$row['image']."' class='img-fluid'></a>
               </div>
               <div class='blog-content'>
                   <p> ".$row['description']."</p>

                   <div class='blog-info clearfix'>
                        <div class='fullpost-left'>

                               <i class='fa fa-calendar'></i> <span> ".$row['date']." </span>


                       </div>
                  </div>


           </article>



       </div>
   </div>



       ";



     }
   }

     else {
      echo "0 results";
     }

     $conobj->close();




?>
