$(document).ready(function () {



    $('#recruit_submit').click(function (e) {

        e.preventDefault();



        var formData = new Object();



        formData.firstname = $('#team_recruit #fname').val();

        formData.lastname = $('#team_recruit #lname').val();

        formData.reg = $('#team_recruit #rnum').val();

        formData.team = $('#team_recruit #teamSelect').find(":selected").text();

        formData.skills = $('#team_recruit #skills').val();

        formData.work_link = $('#team_recruit #work_link').val();

        formData.why_join = $('#team_recruit #whyHire').val();



        $.ajax({

            url: "ajax_load/teamRegister_upload.php",

            method: "POST",

            data: formData,

            success: function (data) {

                if (data == "success") {

                    alert('Registed Succesfully! We will contact you soon');

                    location.href = 'index.php';

                }

                else if (data == "failed") {

                    alert("Unknow Error Occured! Please try again later");

                }

                else if (data == "mandate") {

                    alert("Please enter all mandatory fileds.");

                }

                else {

                    console.log(data);

                }

            }, error: function () {

                alert("Ajax error Occured");

            }

        });

    });



  // Member Login Ajax
  $('#mRegister').on('click', function() {
    $("#mRegister").attr("disabled", "disabled");
    var formData = new Object();
    formData.formName= "mLogin";

    formData.fName = $('#fName').val();
    formData.lName = $('#lName').val();
    formData.mrNum = $('#mrNum').val();
    formData.stream = $('#stream').val();
    formData.branch = $('#branch').find(":selected").text();
    formData.yop = $('#yop').val();
    formData.code = $('#code').val();
    formData.mpnumber = $('#mpnumber').val();
    formData.email = $('#email').val();
    formData.password = $('#password').val();
    formData.confirmPassword = $('#confirmPassword').val();

    if(formData.fName!="" && formData.lName!="" && formData.mrNum!="" && formData.stream!="" && formData.branch!=""
    && formData.yop!="" && formData.code!="" && formData.mpnumber!="" && formData.email!="" && formData.password!="" && formData.confirmPassword !=""){

      $.ajax({
        url: "ajax_load/memberRegistration_upload.php",
        type: "POST",
        data: formData,
        cache: false,
        success: function(dataResult){
          if(dataResult == "success"){
            $("#mRegister").removeAttr("disabled");
            $('#memberForm').find('input:text').val('');
            $("#msuccess").show();
            $('#msuccess').html('Data added successfully !');             
          }
          else if(dataResult == "failed"){
            $("#mRegister").removeAttr("disabled");
              alert("Error occured! Try Again");
          }
          else if(dataResult == "user"){
            alert('User exist!!'); 
            $("#mRegister").removeAttr("disabled");
              
          }
          
        }
      });
    }
    else{
      alert('Please fill all the field !');
      $("#mRegister").removeAttr("disabled");
    }
  });

// ENd of memberForm



//Login Form
  $('#login_form').on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type:"POST",
      url: "ajax_load/login_validate.php",
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success:function(dataResult){
        if(dataResult == "Successfull"){
          alert('Successfull');
          window.location = "index.php";
        }
        else if(dataResult == "user_does_not_exist"){
          $("#msuccess").show();
          $('#msuccess').html('User does not exist!! Register to Continue <a href="memberRegistration.php">Click Here</a>');    
        }
        else if(dataResult=="VerifyDetails"){
          $("#msuccess").show();
          $('#msuccess').html('Verify email and password & Try Again!!');   
        }
        else{
          console.log(dataResult);
        }
      }

    });
  });

  // End of Login validation

$('#projectform').on('submit', function(e) {

  e.preventDefault();



  var projectData = new Object();



  projectData.project_name = $('#project_name').val();

  projectData.team_name = $('#team_name').val();

  projectData.team_leader = $('#team_leader').val();

  projectData.team_members = $('#team_members').val();

  // formData.skills = $('#project_pic').val();

  projectData.project_links = $('#project_links').val();

  projectData.project_description = $('#project_description').val();

  if(projectData.project_name!="" && projectData.team_name!="" && projectData.team_leader!="" &&  projectData.project_description!="")

  {

    $.ajax({

      type: 'POST',

      url: 'ajax_load/project_upload.php',

      data: new FormData(this),

      contentType: false,

      cache: false,

      processData: false,



      success: function (dataResult) {

        if (dataResult == "successfully") {

          document.getElementById("projectform").reset();

          alert("Data Succesfully added");

        }

        else if (dataResult == "team_exist") {

          document.getElementById("projectform").reset();

          alert("Team Name Exist");

        }

        else if (dataResult == "failed") {

          document.getElementById("projectform").reset();

          alert("Error occured! Try Again");

        }

        else if (dataResult == "fill") {

          alert("Compelete the fields");

        }

        else {

          console.log(dataResult);

        }

      }

    });

  } else{

   alert("Please Complete the fields");

  }

});



  // ContactUs
  
  $('#contactUs').on('submit', function(e) {
    e.preventDefault();
    
    $.ajax({
            type: 'POST',
            url: 'ajax_load/contactUs_upload.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
      success: function(dataResult){
        if(dataResult == "success"){
            $("#mailmodal").modal("toggle"); 
            $('#modelMessage').html('Hey Thanks for reaching us...!!! will get in touch soon :)');
          }
          else if(dataResult == "failed"){
              alert("Error occured! Try Again");
          }
          else if(dataResult == "fill form"){
            $("#mailmodal").modal("toggle"); 
            $('#modelMessage').html('Fill the details to continue!!');
            

          }
          else if(dataResult=="emailfailed"){
            alert("Error occured! in email Try Again");
          }
          else{
            console.log(dataResult);
          }
      }

    });
  });

  // End of ContactUs
  $('#profilePage #profilePageSave').on('click',function(){
    var profileData = new Object();
    
    profileData.firstname = $('#profilePage #first_Name').val();
    profileData.lastname = $('#profilePage #last_Name').val();
    profileData.stream = $('#profilePage #stream').val();
    profileData.branch = $('#profilePage #branch').val();
    profileData.yop = $('#profilePage #yop').val();
    profileData.code = $('#profilePage #code').val();
    profileData.mpnumber = $('#profilePage #mpnumber').val();
    profileData.email = $('#profilePage #email').val();
    if(profileData.firstname!="" && profileData.lastname!="" && profileData.stream!="" && profileData.branch!="" 
    && profileData.yop!="" && profileData.code!="" && profileData.mpnumber!="" && profileData.email!=""){
    $.ajax({
        url: "ajax_load/profilepage_update.php",
        type: "POST",
        data: profileData,
        cache: false,
        success: function(dataResult){
          if(dataResult == "success"){
            alert('Data updated successfully !');             
          }
          else if(dataResult == "failed"){
            alert("Error occured! Try Again");
          }
          else{
            console.log(dataResult);
          }
          
        }
      });
    }
    else{
      alert('Please fill all the field !');
    }
  });


    // Upadting profile Pic
    $('#profilePicSave').on('submit', function(e) {
      e.preventDefault();
      alert('asd');
        $.ajax({
          type: 'POST',
          url: 'ajax_load/profilePic_upload.php',
          data: new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
          success: function (dataResult) {
            if (dataResult == "success") {
              alert("Data Succesfully added");
              location.reload();
            }
            else if (dataResult == "Try_Again!!!") {
              alert("Try Again!!!");
            }
            else if (dataResult == "Error_file_Type") {
              alert("File Type miss match!!");
            }
            else {
              console.log(dataResult);
            }
          }
        });
    });

});

