<?php
// include database connection file
include_once("database.php");
// include_once("retrive.php");
include 'retrive.php';

// Get id from URL to delete that user
$rollno = $_GET['rollno'];
// $reason = $_GET['reason'];
// Delete user row from table based on given id
$resul = mysqli_query($conn, "UPDATE requestform SET status='declined' WHERE rollno='$rollno'");
// $re = mysqli_query($conn, "UPDATE backup SET reason='$reason' WHERE rollno='$rollno'");
$res = mysqli_query($conn, "INSERT INTO backup SELECT * FROM requestform WHERE rollno='$rollno'");
$result = mysqli_query($conn, "DELETE FROM requestform WHERE rollno=$rollno");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:retrive.php");
?>