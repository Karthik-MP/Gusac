<!-- Start of header -->
<?php include 'header.php'; ?>
<!-- End of header -->

<!-- Start of Login -->
<section id="login_box">
  <div class="border rounded col-md-4 mx-auto main">
    <form id="login_form">
      <h1 class="text-center my-3">LOGIN</h1>
      <div class="my-3">
        <label for="SL_email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="SL_email" aria-describedby="SLemailHelp" placeholder="Email" required>
        <small id="SLemailHelp" class="form-text">Enter @GITAM Mail ID.</small>
      </div>
      <div class="mb-3">
        <label for="SL_password" class="form-label">Password</label>
        <input type="password" class="form-control" id="SL_password" placeholder="Password" required>
      </div>
      <div class="mb-3 text-center">
        <button type="submit" class="btn btn-primary mb-3">Submit</button> <br>
        <a href="#" data-toggle="modal" data-target="#forgotPmodal"s>Forgot Password?</a>
      </div>
    </form>
  </div>
</section>
<!-- End of Login -->

<!----start of Forgot modal--->
<div class="modal fade" id="forgotPmodal" tabindex="-1" aria-labelledby="forgotPmodalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="forgotPmodalLabel" style="color:black;">Forgot Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="InputEmail1">Email address</label>
          <input type="text" name="email" class="form-control" placeholder="  " required>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#" data-toggle="modal" class="btn btn-primary" data-target="#mailmodal" data-dismiss="modal">Submit</a>
      </div>
    </div>
  </div>
</div>
<!---END OF FORGOT MODAL--->
<!--CONFIRM Modal Start -->
	<div class="modal fade" id="mailmodal" tabindex="-1" aria-labelledby="mailmodalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
	  <div class="modal-dialog">
	    <div class="modal-content">
	           <div class="modal-body">
	              Hey our team will get in touch soon!!! <br>
	              <a href="#" data-toggle="modal" class="btn btn-primary mt-4" data-target="#mailmodal" data-dismiss="modal">Close</a>
	           </div>
	       </div>
	   </div>
	</div>
 <!-- Delete this line and write your code here -->

<!-- Start of footer -->
<?php include 'footer.php'; ?>
<!-- End of footer -->
