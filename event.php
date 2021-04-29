<!-- Start of header --> 
<?php include 'header.php'; ?>
<!-- End of header -->
<!----Start of Event Page---->
<section id="EventPage">
  <div class="container my-5">
    <div class="row">
      <!-- Event Image -->
        <?php 
          include 'ajax_load/connect.php';
          if (isset($_GET['id'])) {
            $id=@$_GET['id'];
            $sql="SELECT * FROM `eventtable` WHERE id=$id ";
            $check=mysqli_query($con,$sql);
            while($row = mysqli_fetch_array($check)){
              $timestamp_SD = strtotime($row["event_date"]);
              $timestamp_LD = strtotime($row["last_date"]);
              $timestamp_TIME = strtotime($row["event_time"]);
        ?>
              <div class="col-md-6 col-sm-12" id="Image">
                <img id="myImg1" src="images/<?php echo $row['poster'] ?>" class="rounded img-fluid" alt="
                <?php echo $row['event_name'].' poster'; ?>">
              </div>
              <div class="col-md-6 col-sm-12 text-center my-auto" id="detials">
                <!-- Event name -->
                <h2><?php echo $row['event_name']; ?></h2>
                <!-- Event Description -->
                <p class=""><?php echo $row['event_description']; ?></p>
  <!-- 
                 <p class="text-justify">Do you want to start-up? But Have no idead where to start or about the schemes are rules? 
            Then Join us today at 11:30Am for Interaction with Krishna Prasad CEO of EasySolve Startup 
            and know everything about the start-up . Its an open mic Session , so you can ask your doudts 
            and get a clear idea about the <strong>#STARTUPINDIA schemes</strong>, and various other aspects . 
            Thank you! Hope You all will have Fun and gain some Knowledge.</p> -->
                  <!-- Event date and tme -->
                <p><b>Date: </b> <?php echo date('d-m-y D',$timestamp_SD); ?> </p>
                <p><b>Time: </b> <?php echo date("h:i A", $timestamp_TIME); ?> </p>
                <!-- Event register button -->
                <a href="<?php echo $row['ggform']?>"><button type="button" class="btn rounded-0" id="event_reg_btn">REGISTER NOW</button></a>
                <p><small><b>Last date to Register: </b><?php echo date('d-m-y D',$timestamp_LD); ?></small></p>       
            </div>
        <?php 
              }
              // Closing of While Loop
          }
          // End of If condidtion
          else{
            echo "<script>alert('Data not available')></script>";
          }
         ?>

    </div>
  <div>
  <!-- <div class="text-center mt-5">

    <iframe align="center" src= "https://docs.google.com/forms/d/e/1FAIpQLSeqQvCxRu315-92NmrAA9-eA2Yi9k7zRTsjS9NWk3uzFR8eEQ/viewform?embedded=true" id="gForm" frameborder="0">Loading…</iframe>

   </div> -->
</section>
<!----End of Event Page---->

<!-- Start of footer -->

<?php include 'footer.php'; ?>

<!-- End of footer