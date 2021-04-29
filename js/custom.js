$(document).ready(function () {

    /**********************************************CAROUSEL FUNCTION******************************* */

    $('.owl-carousel').owlCarousel({

        loop: false,

        margin: 20,

        nav: true,

        navText: ["<i class='fas fa-chevron-circle-left owl-prev'></i>",

            "<i class='fas fa-chevron-circle-right owl-next'></i>"],

        autoplay: true,

        stagePadding: 0,

        responsiveClass: true,

        responsive: {

            0: {

                items: 1

            },

            768: {

                items: 2

            },

            1000: {

                items: 3

            }

        }

    })

    /* **********************************************END OF CAROUSEL FUNCTION*************************** */

    $("#confirmPassword").keyup(function() {

      var password = $("#password").val();

      var confirmPassword = $("#confirmPassword").val();

      if (password != confirmPassword)

          $("#CheckPasswordMatch").html("Passwords does not match!").css("color","red");

      else

          $("#CheckPasswordMatch").html("Passwords match.").css("color","green");

    });



    $('#currently').click(function(){

     if($(this).prop("checked") == true){

       $("#end_date").val("Currently");

       $("#end_date").attr("disabled","disabled");

     }

     else if($(this).prop("checked") == false){

         $("#end_date").removeAttr("disabled");

     }

  });



     // Profile Page profile pic 

        var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            // var bs_modal = $('#profilePicModal');

            // var image = $('#profileImage');
            reader.onload = function (e) {
              // var files = e.target.result;
              // var done = function(url) {
              //     image.src = url;
              //     bs_modal.modal('show');
              // };

              $('.profile-pic').attr('src', e.target.result);


                $('#profSave').show();
            }
    
            reader.readAsDataURL(input.files[0]);
            
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
    
});



