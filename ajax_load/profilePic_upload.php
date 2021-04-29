<?php 
	session_start();
	$id=$_SESSION['sid'];
	include 'connect.php';
	 
  $upload_docs = $_FILES['profilePic'];
  if (!empty($upload_docs['name'])) {
      //Getting the file information
      $upload_docsName = $upload_docs['name'];
      $upload_docsType = $upload_docs['type'];
      $upload_docsTmpName = $upload_docs['tmp_name'];
      $upload_docsExt = explode(".", $upload_docsName);
      $upload_docsActualExt = strtolower(end($upload_docsExt));
      $allowed = array('jpg','jpeg','png');
      $sql="UPDATE `register_member` SET `profile_pic`=? where id=$id";
      $result = mysqli_prepare($con,$sql);
      if (in_array($upload_docsActualExt, $allowed)) {
      	if($result){
	         //Changing the file name to a unique name
	         $upload_docsNewName =uniqid("", true) . "." . $upload_docsActualExt;
	         //Making the file destination path
	         $upload_docsDestination = '../uploads/profilephotos/' . $upload_docsNewName;
		     move_uploaded_file($upload_docsTmpName, $upload_docsDestination);
		     //Bind parameters
		     mysqli_stmt_bind_param($result,"s",$upload_docsNewName);
		     //Execute the statement
		     mysqli_stmt_execute($result);
		     echo "success";
	     	 exit();
	     }
	     else{
	     	echo "Try_Again!!!";
	     	exit();
	     }
  	  }
	  else{
	  	echo "Error_file_Type";
  	  } 
  }
     

?>