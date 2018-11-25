<!DOCTYPE html>
<?php
	require('connect.php');

	// Get information entered by the user
	$rsoName = $_POST['rso_name'];
	$rsoUniversity = $_POST['rso_university'];
	$rsoType = $_POST['rso_type'];
	$rsoDescription = $_POST['rso_description'];
	$email1 = $_POST['email_1'];
	$email2 = $_POST['email_2'];
	$email3 = $_POST['email_3'];
  $email4 = $_POST['email_4'];
  $email5 = $_POST['email_5'];


	if(empty($rsoName))
	{
		// See if this will send the json message
		$error = "Please enter a rso name";
		$sentError = json_encode($error);
	}
	if(empty($rsoUniversity))
	{
		exit("Please enter a rso university");
	}
  if(empty($rsoType))
	{
		// See if this will send the json message
		$error = "Please enter a rso type";
		$sentError = json_encode($error);
	}
	if(empty($rsoDescription))
	{
		exit("Please enter a rso description");
	}


	// check if all 5 emails are entered
	if(!empty($email1) && !empty($email2) && !empty($email3) && !empty($email4) && !empty($email5))
	{
    $numStudents = 5;
    $isActive = 1;

    // Insert RSO information
		$sql = "INSERT INTO rso (rsoName, rsoType, numStudents, isActive, rsoDescription)
		VALUES
		('$rsoName', '$rsoType', $numStudents, $isActive, '$rsoDescription')";

		mysqli_query($connect, $sql);
	}
	header('Location: home.php');
?>
