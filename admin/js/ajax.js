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
            url: "ajax_load/recruit_upload.php",
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

});
