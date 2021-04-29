<?php include "header.php"; ?>

    <section id="projectForm" class="mt-2">
      <div class="container">
        <div class="d-flex justify-content-center">
        <div class="border rounded col-md-6 mt-3 px-5" >

          <form class="form-group" enctype="multipart/form-data" name="projectform" id="projectform">
            <h3 class="text-center my-4">Projects</h3>
              <label for="project_name" class="form-label">Project Name <sup>*</sup></label>
              <input class="form-control" id="project_name" type="text" name="project_name" value="">

              <label for="team_name" class="form-label">Team Name <sup>*</sup> </label>
              <input class="form-control" type="text" id="team_name" name="team_name" value="">
              <div id="errorTeamExist"></div>

              <label for="team_leader" class="form-label">Team Leader <sup>*</sup> </label>
              <input class="form-control" type="text" id="team_leader" name="team_leader" value="" placeholder="Please enter Register numbers only">

              <label for="team_members" class="form-label">Team Members <sup>*</sup></label>
              <input class="form-control" type="text" id="team_members" name="team_members" value="" placeholder="Please enter Register numbers only">
              <div class="mb-3">
                <label for="project_pic"  class="form-label">Projects related pic</label>
                <input class="form-control" id="project_pic" type="file" name="proj" id="proj" />

              </div>
              <label for="project_links">Project related links</label>
                <input class="form-control" type="text" id="project_links" name="project_links" value="">
                  <div class="mb-3">
                    <label for="description" class="form-label">Project Description<sup>*</sup></label>
                    <textarea class="form-control" id="project_description" name="description" rows="3"></textarea>

                 </div>
                 <input type="submit" class="btn btn-primary"  id="pro_submit_btn" value="Submit"></input>
           </form>
          </div>
        </div>
      </div>
    </section>


  <?php include "footer.php"; ?>
