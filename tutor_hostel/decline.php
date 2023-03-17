<?php
// include database connection file
include_once("database.php");

// Get id from URL to delete that user
$rollno = $_GET['rollno'];
$reason = $_GET['reason'];

// Create prepared statement
$stmt = mysqli_prepare($conn, "UPDATE requestform SET status='declined' WHERE rollno= ?");
mysqli_stmt_bind_param($stmt, "s", $rollno);
mysqli_stmt_execute($stmt);

// Create prepared statement for backup insert
$stmt2 = mysqli_prepare($conn, "INSERT INTO backup (name, rollno, block, roomno, outpasstype, outdate, indate, outtime, intime, place,status, reason) SELECT name, rollno, block, roomno, outpasstype, outdate, indate, outtime, intime, place,status, ? FROM requestform WHERE rollno = ?");
mysqli_stmt_bind_param($stmt2, "ss", $reason, $rollno);
mysqli_stmt_execute($stmt2);

// Create prepared statement for requestform delete
$stmt3 = mysqli_prepare($conn, "DELETE FROM requestform WHERE rollno = ?");
mysqli_stmt_bind_param($stmt3, "s", $rollno);
mysqli_stmt_execute($stmt3);

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:retrive.php");
exit();
?>