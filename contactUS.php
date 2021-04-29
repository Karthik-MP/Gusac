<!-- Start of header -->
<?php
include 'header.php'; ?>
<!-- End of header -->

<!-- Start of body -->
<section id="contact_page">
    <div class="container border rounded main">
        <div class="text-center my-3">
            <h1>CONTACT US</h1>
            <p>Feel free to reach out to us. Our team will reply back within 24 hours.</p>
        </div>
        <form name="contactUs" id="contactUs" enctype="multipart/form-data">
	        <div class="form-group">
	            <label for="contact_email" class="form-label">Email ID</label>
	            <input type="email" class="form-control" name="contact_email" id="contact_email" placeholder="username@gitam.in">
	        </div>
	        <div class="form-group">
	            <label for="contact_name" class="form-label">Name</label>
	            <input type="Name" class="form-control" name="contact_name" id="contact_name" placeholder="Full Name">
	        </div>
	        <div class="form-group">
	            <label for="contact_subject" class="form-label">Subject</label>
	            <input type="Subject" class="form-control" name="contact_subject" id="contact_subject" placeholder="Subject">
	        </div>
	        <div class="form-group">
	            <label for="contact_message" class="form-label">Message</label>
	            <textarea class="form-control" name="contact_message" id="contact_message" rows="4">Write your message here</textarea>
	        </div>
	        <div class="form-group text-center">
	        <!-- <input type="submit" class="btn btn-primary" id="contact_button" data-dismiss="modal" data-toggle="modal" data-target="#mailmodal"/> -->
	        <input type="submit" class="btn btn-primary" id="contact_button"/>
	        </div>
        </form>
    </div>
</section>
<!---End --->
<!---Start of close modal--->
<div class="modal fade" id="mailmodal" tabindex="-1" aria-labelledby="mailmodalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="modelMessage">

			</div>
			<div class="modal-footer">
			    <a href="#" data-toggle="modal" class="btn btn-primary" data-target="#mailmodal" data-dismiss="modal">Close</a>
			</div>
		</div>
	</div>
</div>
<!---End of close modal-->
<!---End of Contact Us Modal----->
<!-- End of body -->

<!-- Start of footer -->
<?php include 'footer.php'; ?>
<!-- End of footer -->
