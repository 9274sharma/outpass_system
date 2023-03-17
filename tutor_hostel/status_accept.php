<?php
// include database connection file
include_once("database.php");

// Get id from URL to delete that user
$rollno = $_GET['rollno'];

// prepare the statement
$stmt = mysqli_prepare($conn, "UPDATE requestform SET status='accepted' WHERE rollno=?");

// bind the parameter
mysqli_stmt_bind_param($stmt, "i", $rollno);

// execute the statement
mysqli_stmt_execute($stmt);

// close the statement
mysqli_stmt_close($stmt);

// After delete redirect to Home, so that latest user list will be displayed.
//header("Location:status_accept.php");
?>
