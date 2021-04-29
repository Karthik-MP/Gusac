<?php include 'connect.php' ?>
<?php
   session_start();
   $reg=$_SESSION['reg'];

   $first_name = mysqli_real_escape_string($con,trim($_POST['firstname']));
   $last_name = mysqli_real_escape_string($con,trim($_POST['lastname']));
   $stream = mysqli_real_escape_string($con,trim($_POST['stream']));
   $branch = mysqli_real_escape_string($con,trim($_POST['branch']));
   $yop = mysqli_real_escape_string($con,trim($_POST['yop']));
   $code = mysqli_real_escape_string($con,trim($_POST['code']));
   $number = mysqli_real_escape_string($con,trim($_POST['mpnumber']));
   $email = mysqli_real_escape_string($con,trim($_POST['email']));
   $sql="UPDATE `register_member` SET `first_name`=?,`last_name`=?,`stream`=?,`branch`=?,`yop`=?,`country`=?,`number`=?,`email`=? WHERE `registration_number`=$reg";
   
   $result = mysqli_prepare($con,$sql);

   if ($result) {
      //Bind parameters
      mysqli_stmt_bind_param($result,"ssssssss",$first_name,$last_name,$stream,$branch,$yop,$code,$number,$email);
      //Execute the statement
      mysqli_stmt_execute($result);

      echo "success";
      exit();
  }
  else{
    
    echo "failed";
    exit();
  }


?>

