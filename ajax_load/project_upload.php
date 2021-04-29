<?php

  include 'connect.php' ;

  //Getting the file information
  $project_name = mysqli_real_escape_string($con,trim($_POST['project_name']));
  $team_name = mysqli_real_escape_string($con,trim($_POST['team_name']));
  $team_leader = mysqli_real_escape_string($con,trim($_POST['team_leader']));
  $team_members = mysqli_real_escape_string($con,trim($_POST['team_members']));
  $project_links = mysqli_real_escape_string($con,trim($_POST['project_links']));
  $description = mysqli_real_escape_string($con,trim($_POST['description']));


      // Validating Unique Team Name
      $check = mysqli_query($con,"SELECT * FROM `projectdetails` WHERE  team_name ='$team_name'");
      $count1 = mysqli_num_rows($check);

      if($count1>0)
      {
        echo 'team_exist';
      }
      else
      {
        $sql="INSERT INTO `projectdetails`(`project_name`, `team_name`, `team_leader`, `team_members`,
        `project_pic_path`, `project_links`, `description`) VALUES (?,?,?,?,?,?,?) ";

        $result = mysqli_prepare($con,$sql);

        $fileName = $_FILES["proj"]["name"];
        $targetFilePath = "uploads/". $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        $destination ="../uploads/".$project_name.".".$fileType;
        $allowTypes = array("jpg","png","pdf");
        $fileType = strtolower($fileType);
        if(in_array($fileType, $allowTypes))
        {
          // Upload file to server0
            if((move_uploaded_file($_FILES["proj"]["tmp_name"], $destination)) && $result)
            {
              // Bind the parameters
              mysqli_stmt_bind_param($result,"sssssss",$project_name,$team_name,$team_leader,$team_members,$destination,$project_links,$description);
              // Execute the result
              mysqli_stmt_execute($result);
              echo "successfully";
              // Close the Statement
              mysqli_stmt_close($result);
            }
            else{
              echo 'failed';
            }
        }
        else
          {
            // No File Submiss
            if($result){
              $targetFilePath="Not_submited";
               // Bind the parameters
              mysqli_stmt_bind_param($result,"sssssss",$project_name,$team_name,$team_leader,$team_members,$targetFilePath,$project_links,$description);
              // Execute the result
              mysqli_stmt_execute($result);
              echo "successfully";
              // Close the Statement
              mysqli_stmt_close($result);
            }
             else{
              echo 'failed';
            }
          }
      }


?>
