
<!DOCTYPE html>
<?php
	  //session variable
		session_start();
		require('connect.php');

		mysqli_query($connect, $sql);
	$sqlIncrementNumStudent= "UPDATE rso
								SET numStudents= numStudents+1
								WHERE rsoName = $_SESSION['rsoName']
								ELSE final_price
								END";
	mysqli_query($connect, $sqlUserExist);
    // insert university into db
    $unisql = "INSERT INTO rsoStudent (rsoStudentName, rsoName)
    VALUES
    ('$_SESSION['user'], $_SESSION['rsoName'])";

    mysqli_query($connect, $unisql);
	//link to new page when this is  done doing queiries
	header('Location: home.php');

?>
