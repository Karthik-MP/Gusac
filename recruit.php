<!-- Start of header -->
<?php include 'header.php'; ?>
<!-- End of header -->

<!--Start of Register page--->
<section id="team_recruit">
    <div class="container mb-5">
        <div class="row">
        	<div class="col-md-6 my-auto" id="Image">
                <div class="hide_responsive">
                    <img src="images/img2.jpeg" >
                </div>
            </div>
            <!-- Start of Register Box -->
        	<div class="col-md-6 col-sm-12" id="form">
        		<div class ="px-4 border rounded mt-5">
                    <form id="recForm" method="post">
        				<h4 class="my-4 text-center">Register Here to be a part of Our Team </h4>
        			    <div class="row">
        					<div class="col-sm-12 col-md-6 form-group">
        						<label for="fname">First name <sup>*</sup></label>
        						<input type="text" class="form-control" placeholder="First name" aria-label="First name" id="fname">
        					</div>
        					<div class="col-sm-12 col-md-6 form-group">
        						<label for="lname">Last name <sup>*</sup></label>
        						<input type="text" class="form-control" placeholder="Last name" aria-label="Last name" id="lname">
        					</div>
        			  	</div>
        			  	<div class="form-group">
        				    <label for="rnum" class="form-label">Registration number <sup>*</sup></label>
        				    <input type="text" class="form-control" id="rnum" placeholder="GITAM ID" id="rnum">
        			    </div>
                        <div class="form-group">
                            <label for="teamSelect">Team <sup>*</sup></label>
                            <select class="form-control" id="teamSelect">
                            <option>Choose Team</option>
                            <option>Graphic Designing</option>
                            <option>Web Development</option>
                            <option>Content Writing</option>
                            <option>PR & Marketing</option>
                            <option>Event Planning & Coordination</option>
                            <option>Social Media</option>
                            <option>Other..</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="skills">Revelant Skills <small id="skills-desc" class="desc">(Seperated by Commas)</small> <sup>*</sup></label>
                            <input type="text" class="form-control" id="skills" placeholder="Revelant Skills">
                        </div>
                        <div class="form-group">
                            <label for="work_link">Pervious Work Link</label>
                            <input type="text" class="form-control" id="work_link" palceholder="Pervious Work Link">
                            <small id="work_link" class="desc">Please upload your previous work (if any) / samples to your drive and share link here</small>
                        </div>
                        <div class="form-group">
                            <label for="whyHire">Why you want to join this team?</label>
                            <textarea class="form-control" id="whyHire" name="why" cols="20" rows="4">Tell us in short why do you want to join this team and what makes you different?</textarea>
                        </div>
                        <div class="text-center my-4">
                            <button type="submit" class="btn btn-primary" id="recruit_submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--- End of Register page--->

<!-- Start of footer -->
  <?php include 'footer.php'; ?>
 <!-- End of footer -->
