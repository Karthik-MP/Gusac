<!-- Start of header -->
<?php include 'header.php'; ?>
<!-- End of header -->

<!-- Start of body -->

<!-- Youtube -->
<section id="Intro" class="d-flex justify-content-center mt-3" >
  <div class="container row py-5">
    <div class="col-md-4 my-auto text-center">
      <h1 class="abbr">
        GUSAC
      </h1>
      <!-- <div class="playpause">
        <i class="far fa-play-circle fa-7x"></i>
      </div> -->
      <h4 class="full" style="color: white;">
        GITAM UNIVERSITY SCIENCE AND ACITIVITY CENTER
      </h4>
    </div>
    <div class="col-md-8 col-sm-12">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/S-HjFiTxhd0" title="GUSAC Intro" frameborder="0" allow="autoplay; clipboard-write; encrypted-media;" allowfullscreen></iframe>
        </div>
    </div>
  </div>
</section>

<section id="eventSecond">
  <?php
  include("ajax_load/connect.php");
  $sql = "SELECT * FROM `eventtable` WHERE 1";
  $check = mysqli_query($con,$sql);
  ?>
  <div class="row justify-content-center text-center my-5">
    <?php
    while($row = mysqli_fetch_array($check)){    
      $timestamp_SD = strtotime($row["event_date"]);
      $timestamp_LD = strtotime($row["last_date"]);
     ?>
      <div class="card mx-2 zoom my-3" >
        <img src="images/uploads/<?php echo($row["poster"]);?>" class="rounded" alt="<?php echo($row["event_name"]) ?>"/ id="eventImage" />
        <div class="card-body">
          <h5 class="card-title"><?php echo $row["event_name"]; ?></h5>
          <p class="card-text">
            Event Date: <?php echo date('d-m-y',$timestamp_SD); ?><br>
            Last date to register: <?php echo date('d-m-y',$timestamp_LD); ?>
          </p>
          <a href="#!" class="btn btn-warning rounded-pill">Know More</a>
      </div>
      </div>
      <?php
      }?>
    </div>

</section>
<!-- Start of gallery -->
<section id="gallery">
    <div class="container">
    <h2 class="center">Gallery</h2>
    <div class="owl-carousel owl-theme">
        <div class="item"><img class="img-box" src="images/img1.jpeg"></div>
        <div class="item"><img class="img-box" src="images/img2.jpg"></div>
        <div class="item"><img class="img-box"  src="images/img1.jpeg"></div>
        <div class="item"><img class="img-box"  src="images/img2.jpg"></div>
        <div class="item"><img class="img-box" src="images/img1.jpeg"></div>
    </div>
    <!-- Learn more button-->
    <div class="center">
    <button type="button" class="btn btn-outline-primary">View more</button>
    </div>
    <!-- End of learn more button-->
  </div>
</section>
<!-- End of gallery -->

<!-- Start of contact-->
<section id="contact">
  <div class="container my-1 py-4">
    <div class=" row cls">
      <div class="col-lg-8 col-sm-12 col-xs-12">
        <p class="desc justify-text"> GUSAC is a platform for all Tech enthusiasts and Entrepreneurs to devolp their skills and bring their ideas to reality.</p>
      </div>
      <div class="col-lg-2 col-sm-6 col-xs-6 text-center my-2">
      <button type="button" class="btn btn-primary">Register Now</button>
      </div>
      <div class="col-lg-2 col-sm-6 col-xs-6 text-center my-2">
      <a href="contactUS.php"><button type="button" class="btn btn-outline-primary">Contact us</button></a>
      </div>
    </div>
  </div>
</section>
<!-- End of contact -->

<!-- Start of Team section-->
<section id="teams">
<div class="container my-3 main">
   <div class="text-center">
      <h1>Our Team</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
   </div>
     <div class="row justify-content-center text-center">
         <div class="images col-md-3 col-sm-6">
           <a href="#">
             <img src="images/c_team.jfif" alt="content" class="border rounded mx-3 img-fluid">
             <h4>Content Team</h4>
           </a>
         </div>
         <div class="images col-md-3 col-sm-6">
           <a href="#">
             <img src="images/g_team.jfif" alt="graphic" class="border rounded mx-3 img-fluid">
             <h4>Graphics Team</h4>
           </a>
         </div>
         <div class="images col-md-3 col-sm-6">
           <a href="#">
             <img src="images/s_team.jfif" alt="graphic" class="border rounded mx-3 img-fluid">
             <h4>PR & Social Team</h4>
           </a>
         </div>
        <div class="images col-md-3 col-sm-6">
          <a href="#">
             <img src="images/w_team.jfif" alt="web" class="border rounded mx-3 img-fluid">
             <h4>Web Team</h4>
         </a>
        </div>
    <button type="button" class="btn btn-outline-primary mt-2">Join Team</button>
    </div>
  </div>
</section>
<!-- End of Team section-->


<!-- End of body -->

<!-- Start of footer -->
<?php include 'footer.php'; ?>
<!-- End of footer -->
