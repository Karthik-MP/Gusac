<!-- Start of header -->
<?php include 'header.php'; ?>
<!-- End of header -->
<!-- Displays error message that occured while uploading event data -->
<?php
session_start();
if(isset($_SESSION['errorMessage'])){
    echo "<script type='text/javascript'>
            alert('" . $_SESSION['errorMessage'] . "');
          </script>";
    //to not make the error message appear again after refresh:
    session_unset();
}
?>
<!--End of Error Message -->
<!--Start of Event Form -->
<section id="eventform">
  <div class="container border rounded">
    <h1 class="center"> Event</h1>
    <form action="ajax_load/eventform_upload.php" Method="POST" enctype="multipart/form-data" class="form1">
      <div class="form-group">
        <label for="eventname">Event Name:<span class="req">*</span></label>
        <input type="text" class="form-control" id="eventname" name="eventname" required>
      </div>
      <div class="form-group">
        <label for="eventdate">Event Date:<span class="req">*</span></label>
        <input type="date" class="form-control" id="eventdate" name="eventdate" required>
      </div>
      <div class="form-group">
        <label for="lastdate">Last Date to Register:<span class="req">*</span></label>
        <input type="date" class="form-control" id="lastdate" name="lastdate" required>
      </div>
    <div class="form-group">
        <label for="eventtime">Event Time:<span class="req">*</span></label>
        <input  type="time" class="form-control" id="eventtime" name="eventtime" required></input>
      </div>
      <div class="form-group">
        <label for="posterimg">Event Poster:<span class="req">*</span></label>
        <input  type="file" class="form-control" id="posterimg" name="posterimg" required>
      </div>
      <div class="form-group">
        <label for="ggform">Event Google Form:<span class="req">*</span></label>
        <input  type="url" class="form-control" id="ggform" name="ggform" required>
      </div>
      <div class="form-group">
        <label for="eventdescription">Event Description:<span class="req">*</span></label>
        <textarea  class="form-control" id="eventdescription" name="eventdescription" required></textarea>
      </div>
      <div class="text-center">
      <button type="submit" class="btn btn-primary" name="submit" > Submit </button>
      </div>
    </form>
  </div>
</section>
<!-- End of event form-->
<!-- Start of footer -->
<?php include 'footer.php'; ?>
<!-- End of footer -->
